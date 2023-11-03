<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>
<div class="flex gap-5 pt-28 pb-6 px-5 min-h-screen">
    <?= view_cell("SidebarCell", ["selected_item_idx" => 2]) ?>
    <main class="flex-1 bg-gray-700 rounded-lg p-2">
        <section id="info-seminar">
            <div class="px-2 pb-2 flex gap-3 items-center">
                <h2 class="text-xl text-white font-semibold">Riwayat Seminar</h2>
            </div>
            <div class="p-2 text-white">
                <?php 
                if($riwayat != NULL): ?>
                <table class="w-full text-center border-2 border-emerald-600 mb-2">
                    <thead class="bg-emerald-600">
                        <th class="py-2">No.</th>
                        <th class="py-2">Judul Seminar</th>
                        <th class="py-2">Moderator</th>
                        <th class="py-2">Penyelenggara</th>
                        <th class="py-2">Jadwal</th>
                    </thead>
                    <tbody class="bg-gray-600">
                        <?php $i = 1; foreach($riwayat as $riw): ?>
                        <tr>
                            <td class="py-2"><?= $i ?></td>
                            <td class="py-2"><?= esc($riw->judul) ?></td>
                            <td class="py-2"><?= esc($riw->dosen_name) ?></td>
                            <td class="py-2"><?= esc($riw->penyelenggara_name) ?></td>
                            <td class="py-2"><?= esc($riw->jadwal) ?></td>
                        </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                <h1 class="text-gray-300 text-2xl text-center font-semibold">Anda belum memiliki riwayat seminar</h1>
                <?php endif; ?>
            </div>
        </section>
    </main>
</div>
<?= $this->endSection() ?>