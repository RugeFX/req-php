<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>
<?php $user_info = session()->get("user_info") ?>
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
                <?php if($seminar !== NULL): ?>
                <h1 class="text-emerald-400 text-2xl font-semibold"><?= esc($seminar->judul) ?></h1>
                <span class="block text-gray-300"><?= esc($seminar->jadwal) ?></span>
                <p class="text-lg pb-2"><?= esc($seminar->deskripsi) ?></p>
                <table class="w-full text-center border-2 border-emerald-600 mb-2">
                    <thead class="bg-emerald-600">
                        <th class="py-2">Moderator</th>
                        <th class="py-2">Presenter</th>
                    </thead>
                    <tbody class="bg-gray-600">
                        <td class="py-2"><?= esc($seminar->dosen_name) ?></td>
                        <td class="py-2"><?= esc($seminar->penyelenggara_name) ?></td>
                    </tbody>
                </table>
                <h3 class="text-lg text-white font-semibold">Seminar Participants</h3>
                <table class="w-full text-center border-2 border-emerald-600 mb-2">
                    <thead class="bg-emerald-600">
                        <th class="py-2">No.</th>
                        <th class="py-2">Participant Name</th>
                    </thead>
                    <tbody class="bg-gray-600">
                        <?php if(isset($participants) && $participants !== null): ?>
                        <?php $i = 1; foreach($participants as $p): ?>
                        <tr>
                            <td class="py-2"><?= $i ?></td>
                            <td class="py-2"><?= esc($p->name) ?></td>
                        </tr>
                        <?php $i++; endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="2">Tidak ada participant</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <?php if(!$joined && date("Y-m-d H:i:s", strtotime($seminar->jadwal)) > date('Y-m-d H:i:s') && $user_info["role"] === "participant"): ?>
                <form action="<?= base_url("participate-seminar") ?>" method="post">
                    <input type="hidden" name="seminar_id" value="<?= esc($seminar->id) ?>">
                    <button type="submit" class="w-full max-w-lg text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ikuti Seminar</button>
                </form>
                <?php else: ?>
                <button type="button" disabled class="w-full max-w-lg text-gray-400 bg-gray-600 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ikuti Seminar</button>
                <?php endif; ?>
                <?php else: ?>
                <h1 class="text-gray-300 text-2xl text-center font-semibold">Seminar tidak ditemukan</h1>
                <?php endif; ?>
            </div>
        </section>
    </main>
</div>

<?php $join = session()->getFlashdata('add_seminar'); if ($join !== null): ?>
<script type="application/javascript">
    alert("Join seminar <?= esc($join) ?>")
</script>
<?php endif; ?>

<?= $this->endSection() ?>