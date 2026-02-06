<section class="relative w-full h-[85vh] min-h-[600px] flex items-center justify-center overflow-hidden">

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
                Votre agence web à <br>
                <span class="text-green-600">
                    <?= htmlspecialchars($city['display_name']) ?>
                </span>
            </h1>

            <p class="text-xl text-white mb-8 leading-relaxed max-w-2xl mx-auto font-normal">
                Propulsez votre activité locale avec un site internet performant, moderne et conçu pour convertir vos visiteurs en clients.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="" class="px-8 py-4 bg-green-600 hover:bg-green-500 text-white font-bold rounded-xl transition-all transform hover:scale-105">
                    Commencer mon projet
                </a>
                <a href="" class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 text-white font-semibold rounded-xl transition-all">
                    En savoir plus
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <h1><?= htmlspecialchars($city['id']) ?></h1>
    <h1><?= htmlspecialchars($city['slug']) ?></h1>
    <h1><?= htmlspecialchars($city['display_name']) ?></h1>
    <h1><?= htmlspecialchars($city['zip_code']) ?></h1>
    <h1><?= htmlspecialchars($city['description']) ?></h1>

    <img src="/assets/images/cities/<?= htmlspecialchars($city['image']) ?>" />
</section>