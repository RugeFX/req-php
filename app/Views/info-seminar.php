<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>
<div class="flex gap-5 pt-28 pb-6 px-5 min-h-screen">
    <?= view_cell("SidebarCell", ["selected_item_idx" => 1]) ?>
    <main class="flex-1 bg-gray-700 rounded-lg p-2">
        <section id="info-seminar">
        <div class="px-2 pb-2 flex gap-3 items-center">
            <a href="<?= base_url("daftar-seminar") ?>" class="group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left text-white w-8 h-8 group-hover:-translate-x-1 transition-transform" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </a>
            <h2 class="text-xl text-white font-semibold">Informasi Seminar</h2>
        </div>    
            <div class="p-2 text-white">
                <?php if($seminar != NULL): ?>
                <h1 class="text-emerald-400 text-2xl font-semibold"><?= esc($seminar->judul) ?></h1>
                <span class="block text-gray-300"><?= esc($seminar->jadwal) ?></span>
                <p class="text-lg pb-2"><?= esc($seminar->deskripsi) ?></p>
                <span class="text-white"><?= var_dump($seminar) ?></span>
                <?php else: ?>
                <h1 class="text-gray-300 text-2xl text-center font-semibold">Seminar tidak ditemukan</h1>
                <?php endif; ?>
            </div>
        </section>
    </main>
</div>
<?= $this->endSection() ?>