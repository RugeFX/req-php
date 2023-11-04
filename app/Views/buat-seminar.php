<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>
<?php $user_info = session()->get("user_info") ?>
<div class="flex gap-5 pt-28 pb-6 px-5 min-h-screen">
    <?= view_cell("SidebarCell", ["selected_item_idx" => 1]) ?>
    <main class="flex-1 bg-gray-700 rounded-lg p-2">
        <section id="buat-seminar">
            <div class="px-2 pb-2 flex gap-3 items-center">
                <h2 class="text-xl text-white font-semibold">Buat Seminar</h2>
            </div>
            <div class="w-full grid place-items-center p-3 bg-gray-600 rounded-lg">
                <div class="px-2 w-full max-w-2xl">
                    <form action="buat-seminar" method="post">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="judul" class="block mb-2 text-sm font-medium text-white">Judul</label>
                                <input type="text" name="judul" id="judul" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-emerald-500 focus:border-emerald-500" placeholder="Judul seminar" required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="deskripsi" class="block mb-2 text-sm font-medium text-white">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="8" class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-emerald-500 focus:border-emerald-500" placeholder="Deskripsi seminar"></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="jadwal" class="block mb-2 text-sm font-medium text-white">Jadwal</label>
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input type="datetime-local" name="jadwal" id="jadwal" class="border text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full pl-10 p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" placeholder="Pilih tanggal">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-emerald-700 rounded-lg focus:ring-4 focus:ring-emerald-600 hover:bg-emerald-800">
                            Buat Seminar
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>

<?php $add = session()->getFlashdata('status'); if ($add !== null): ?>
<script type="application/javascript">
    alert("Buat seminar <?= esc($add) ?>")
</script>
<?php endif; ?>

<?= $this->endSection() ?>