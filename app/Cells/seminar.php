<a href="<?= base_url("info-seminar/".esc($id_seminar)) ?>" class="group flex flex-col justify-between w-full h-full bg-gray-600 hover:bg-emerald-600 rounded-lg transition-colors">
    <div class="p-3">
        <div class="flex flex-col md:flex-row justify-between">
            <h3 class="text-2xl text-emerald-400 font-semibold group-hover:text-white transition-colors"><?= esc($judul) ?></h3>
            <span class="block text-gray-300"><?= esc($tanggal) ?></span>
        </div>
        <span class="block text-white"><span class="font-semibold">Moderator:</span> <?= esc($moderator) ?></span>
        <span class="block text-white"><span class="font-semibold">Presenter:</span> <?= esc($presenter) ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-return-right mt-3 text-white w-8 h-8 group-hover:translate-x-5 transition-transform" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
        </svg>
    </div>
</a>
