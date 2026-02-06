<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title ?? 'Aude Landing') ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex-shrink-0 flex items-center">
                <a href="/">
                    <span class="text-2xl font-bold text-black tracking-tight">Aude Landing</span>
                </a>
            </div>
            <div class="hidden md:flex space-x-8 text-base font-medium text-black">
                <a href="/site-internet?ville=narbonne" class="hover:text-green-600 transition">Narbonne</a>
                <a href="/site-internet?ville=carcassonne" class="hover:text-green-600 transition">Carcassonne</a>
                <a href="/site-internet?ville=lezignan-corbieres" class="hover:text-green-600 transition">Lézignan</a>
                <a href="/site-internet?ville=bram" class="hover:text-green-600 transition">Bram</a>
                <a href="/site-internet?ville=castelnaudary" class="hover:text-green-600 transition">Castelnaudary</a>

            </div>
        </div>
    </div>
</nav>

<main>
    <?= $content ?>
</main>

<footer>
    Footer
</footer>

</body>
</html>