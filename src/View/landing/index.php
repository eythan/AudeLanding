<section class="relative w-full h-[85vh] min-h-[700px] flex items-center justify-center overflow-hidden">

    <div class="absolute inset-0 z-0">
        <img src="/assets/images/cities/<?= htmlspecialchars($city['image']) ?>" alt="..." class="w-full h-full object-cover transform hover:scale-105 transition duration-[20s] ease-in-out">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-3xl mx-auto text-center">

            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-white text-sm font-medium mb-6">
                <i class="fas fa-map-marker-alt text-green-400"></i>
                <span><?= htmlspecialchars($city['zip_code']) ?> - <?= htmlspecialchars($city['display_name']) ?></span>
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight leading-tight mb-6 drop-shadow-lg">
                Vous souhaitez créer un site internet à <br>
                <span class="text-green-600">
                    <?= htmlspecialchars($city['display_name']) ?>
                </span>
            </h1>

            <p class="text-xl text-white mb-8 leading-relaxed max-w-2xl mx-auto font-normal">
                Propulsez votre activité locale avec un site internet performant, moderne et conçu pour convertir vos visiteurs en clients.
            </p>

            <div class="inline-flex items-center gap-4 px-8 py-4 rounded-xl bg-white/10 border border-white/20 backdrop-blur-md shadow-sm mb-6">
                <div class="flex text-yellow-400 text-sm gap-0.5">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="text-white text-sm font-semibold tracking-wide">
                    5/5 <span class="font-normal opacity-90">(+80 avis)</span>
                </span>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="" class="px-8 py-4 bg-green-600 hover:bg-white hover:text-green-600 backdrop-blur-md border border-green-600 text-white font-bold rounded-xl transition-all transform">
                    Commencer mon projet
                </a>
                <a href="" class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 text-white font-semibold rounded-xl transition-all">
                    En savoir plus
                </a>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-20 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-green-50 blur-3xl opacity-50"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-blue-50 blur-3xl opacity-50"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <div>
                <span class="text-green-600 font-bold tracking-wider uppercase text-sm">Discutons de votre projet</span>
                <h2 class="text-4xl font-extrabold text-gray-900 mt-2 mb-6">Prêt à développer votre activité à <?= htmlspecialchars($city['display_name']) ?> ?</h2>
                <p class="text-lg text-gray-600 mb-8">Remplissez le formulaire ci-contre pour obtenir une estimation gratuite. Nous répondons généralement sous 2 heures.</p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Appelez-nous</p>
                            <p class="font-bold text-gray-900">06 12 34 56 78</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Envoyez-nous un email</p>
                            <p class="font-bold text-gray-900">contact@audelanding.fr</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 md:p-10">
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="mb-6 p-4 rounded-xl bg-green-50 border border-green-200 flex items-center gap-3 text-green-700 animate-fade-in-down">
                        <i class="fas fa-check-circle text-xl"></i>
                        <p class="text-sm font-medium">Votre message a été envoyé avec succès !</p>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>

                <?php if (isset($_SESSION['error'])): ?>
                    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 flex items-center gap-3 text-red-700 animate-fade-in-down">
                        <i class="fas fa-exclamation-circle text-xl"></i>
                        <p class="text-sm font-medium">Une erreur est survenue.</p>
                    </div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>
                <form action="/submit-contact" method="POST" class="space-y-5">
                    <div class="grid grid-cols-2 gap-5">
                        <div class="col-span-2 md:col-span-1">
                            <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Votre Nom</label>
                            <input type="text" id="nom" name="nom" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 transition-colors outline-none" placeholder="Jean Dupont" required>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="tel" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                            <input type="tel" id="tel" name="tel" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 transition-colors outline-none" placeholder="06 12 34 56 78" required>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 transition-colors outline-none" placeholder="jean@entreprise.com" required>
                    </div>

                    <div>
                        <label for="projet" class="block text-sm font-medium text-gray-700 mb-1">Type de projet</label>
                        <select id="projet" name="projet" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 transition-colors outline-none">
                            <option value="vitrine">Site Vitrine</option>
                            <option value="ecommerce">E-commerce / Boutique</option>
                            <option value="refonte">Refonte de site existant</option>
                            <option value="autre">Autre demande</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Détails du projet</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 transition-colors outline-none" placeholder="Décrivez brièvement vos besoins..."></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 px-6 bg-green-600 hover:bg-green-700 text-white font-bold rounded-xl shadow-lg hover:shadow-green-500/30 transition-all transform hover:-translate-y-1">
                        Obtenir mon devis gratuit
                    </button>

                    <p class="text-xs text-center text-gray-400 mt-4">
                        <i class="fas fa-lock mr-1"></i> Vos données sont sécurisées et ne seront jamais partagées.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>