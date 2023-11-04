<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>
<div class="flex gap-5 pt-28 pb-6 px-5 min-h-screen">
    <?= view_cell("SidebarCell", ["selected_item_idx" => 1]) ?>
    <main class="flex-1 bg-gray-700 rounded-lg p-2">
        <section id="daftar-seminar">
            <h2 class="text-xl text-white font-semibold px-2 pb-2">Daftar Seminar</h2>
            <?php 
            if($seminars != NULL): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 items-start">
                <?php foreach($seminars as $sem): ?>
                <?= view_cell("SeminarCell", [
                    "id_seminar" => $sem->id, 
                    "judul" => $sem->judul, 
                    "tanggal" => $sem->jadwal,
                    "moderator" => $sem->dosen_name ?? "-",
                    "presenter" => $sem->penyelenggara_name
                ]) ?>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <h1 class="text-gray-300 text-2xl text-center font-semibold">Belum ada seminar yang terdaftar</h1>
            <?php endif; ?>
        </section>
    </main>
</div>
<?= $this->endSection() ?>