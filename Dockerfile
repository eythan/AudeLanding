FROM php:8.2-apache

# Dépendances système et extensions PHP
RUN apt-get update && apt-get install -y --no-install-recommends \
        unzip \
        libzip-dev \
    && docker-php-ext-install pdo_mysql zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Activer mod_rewrite pour le routeur (public/.htaccess)
RUN a2enmod rewrite

# Document root sur public/ + AllowOverride pour le .htaccess
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf \
    && printf '<Directory /var/www/html/public>\n    AllowOverride All\n    Require all granted\n</Directory>\n' \
        > /etc/apache2/conf-available/app.conf \
    && a2enconf app

# Configuration PHP : exposer les variables d'env (Coolify) dans $_ENV + réglages prod
RUN printf 'variables_order = "EGPCS"\nexpose_php = Off\ndisplay_errors = Off\nlog_errors = On\nupload_max_filesize = 16M\npost_max_size = 16M\nmemory_limit = 256M\n' \
        > /usr/local/etc/php/conf.d/zz-app.ini

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Installer les dépendances PHP (cache des couches via les fichiers composer)
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-interaction --prefer-dist --optimize-autoloader

# Copier le code de l'application
COPY . .

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
