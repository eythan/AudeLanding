<section class="py-12 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4">

        <div class="mb-8 flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">
                    <?= isset($city['id']) ? 'Modifier la ville de '
                            .htmlspecialchars($city['display_name'])
                            : 'Nouvelle ville' ?>
                </h2>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
            <form action="/panel/add" method="POST"
                  enctype="multipart/form-data" class="space-y-6">

                <?php if (isset($city['id'])): ?>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($city['id']) ?>">
                <?php endif; ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-gray-700 ml-1">Nom
                            de la ville</label>
                        <input type="text" name="display_name"
                               placeholder="Ex: Narbonne" required
                               value="<?= isset($city['display_name'])
                                       ? htmlspecialchars($city['display_name'])
                                       : '' ?>"
                               class="w-full px-5 py-4 rounded-2xl bg-gray-50 border-none ring-1 ring-gray-200 focus:ring-2 focus:ring-green-500 outline-none transition-all placeholder:text-gray-400">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-gray-700 ml-1">Code
                            Postal</label>
                        <input type="text" name="zip_code"
                               placeholder="Ex: 11100" maxlength="5" required
                               value="<?= isset($city['zip_code'])
                                       ? htmlspecialchars($city['zip_code'])
                                       : '' ?>"
                               class="w-full px-5 py-4 rounded-2xl bg-gray-50 border-none ring-1 ring-gray-200 focus:ring-2 focus:ring-green-500 outline-none transition-all placeholder:text-gray-400">
                    </div>

                    <div class="space-y-2 md:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 ml-1">Description</label>
                        <input type="text" name="description"
                               placeholder="Ex: Une ville magnifique entre mer et garrigue"
                               value="<?= isset($city['description'])
                                       ? htmlspecialchars($city['description'])
                                       : '' ?>"
                               class="w-full px-5 py-4 rounded-2xl bg-gray-50 border-none ring-1 ring-gray-200 focus:ring-2 focus:ring-green-500 outline-none transition-all placeholder:text-gray-400">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-bold text-gray-700 ml-1">Photo
                        de couverture</label>
                    <div class="relative group h-48">
                        <input type="file" name="image" id="city-image"
                               accept="image/*"
                               class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20"
                               onchange="previewImage(this)">

                        <div id="drop-zone"
                             class="relative h-full border-2 border-dashed border-gray-200 rounded-2xl flex flex-col items-center justify-center transition-all group-hover:border-green-400 overflow-hidden">

                            <?php
                            if (!empty($city['image'])): ?>
                                <img id="preview-img"
                                     src="/assets/images/cities/<?= htmlspecialchars($city['image']) ?>"
                                     class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-70 transition-opacity">
                            <?php
                            else: ?>
                                <img id="preview-img" src=""
                                     class="absolute inset-0 w-full h-full object-cover hidden transition-opacity">
                            <?php
                            endif; ?>

                            <div class="relative z-10 flex flex-col items-center pointer-events-none">
                                <div class="w-12 h-12 rounded-full bg-white/80 shadow-sm flex items-center justify-center text-green-600 mb-3 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <p class="text-sm font-bold text-gray-800"
                                   id="file-name">
                                    <?= !empty($city['image'])
                                            ? "Modifier la photo"
                                            : "Cliquez pour ajouter une photo" ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-4 pt-4">
                    <button type="submit"
                            class="px-8 py-4 bg-green-600 hover:bg-green-700 text-white font-bold rounded-2xl shadow-lg shadow-green-600/20 transition-all transform flex items-center gap-2">
                        <i class="fas fa-plus-circle"></i>
                        Publier la page ville
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>