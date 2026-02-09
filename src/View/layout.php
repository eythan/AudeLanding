<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title ?? 'Aude Landing') ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          rel="stylesheet">
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
                <a href="/site-internet?ville=narbonne"
                   class="hover:text-green-600 transition">Narbonne</a>
                <a href="/site-internet?ville=carcassonne"
                   class="hover:text-green-600 transition">Carcassonne</a>
                <a href="/site-internet?ville=lezignan-corbieres"
                   class="hover:text-green-600 transition">Lézignan</a>
                <a href="/site-internet?ville=bram"
                   class="hover:text-green-600 transition">Bram</a>
                <a href="/site-internet?ville=castelnaudary"
                   class="hover:text-green-600 transition">Castelnaudary</a>

            </div>
        </div>
    </div>
</nav>

<main>
    <?= $content ?>
</main>




<footer class="bg-neutral-primary-soft">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <span class="text-2xl font-bold text-heading">Aude Landing</span>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Navigation</h2>
                    <ul class="text-body font-medium">
                        <li class="mb-4">
                            <a href="/" class="hover:underline">Accueil</a>
                        </li>
                        <li>
                            <a href="#services" class="hover:underline">Nos Services</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Nous suivre</h2>
                    <ul class="text-body font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">LinkedIn</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Instagram</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Légal</h2>
                    <ul class="text-body font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Politique de confidentialité</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Mentions légales</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-default sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-body sm:text-center">© 2026 <a href="/" class="hover:underline">Aude Landing</a>. Tous droits réservés.
          </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-body hover:text-heading">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/></svg>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="#" class="text-body hover:text-heading ms-5">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/></svg>
                    <span class="sr-only">Discord</span>
                </a>
                <a href="#" class="text-body hover:text-heading ms-5">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/></svg>
                    <span class="sr-only">Twitter</span>
                </a>
            </div>
        </div>
    </div>
</footer>


</body>
</html>