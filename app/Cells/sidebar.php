<?php $role = session()->get("user_info")["role"] ?>
<aside class="flex flex-col gap-2 p-2 h-auto bg-gray-700 rounded-lg lg:w-96 overflow-hidden">
    <?php if($role === "participant"): ?>
    <a class="px-5 py-3 text-lg text-white text-center <?= esc($selected_item_idx) == 0 ? "bg-emerald-600" : "bg-gray-600" ?> rounded-lg hover:bg-emerald-700 transition-colors" href="<?= base_url("dashboard") ?>">Dashboard</a>
    <a class="px-5 py-3 text-lg text-white text-center <?= esc($selected_item_idx) == 1 ? "bg-emerald-600" : "bg-gray-600" ?> rounded-lg hover:bg-emerald-700 transition-colors" href="<?= base_url("daftar-seminar") ?>">Daftar Seminar</a>
    <a class="px-5 py-3 text-lg text-white text-center <?= esc($selected_item_idx) == 2 ? "bg-emerald-600" : "bg-gray-600" ?> rounded-lg hover:bg-emerald-700 transition-colors" href="<?= base_url("riwayat-seminar") ?>">Riwayat Seminar</a>
    <?php elseif($role === "presenter"): ?>
    <a class="px-5 py-3 text-lg text-white text-center <?= esc($selected_item_idx) == 0 ? "bg-emerald-600" : "bg-gray-600" ?> rounded-lg hover:bg-emerald-700 transition-colors" href="<?= base_url("dashboard") ?>">Dashboard</a>
    <a class="px-5 py-3 text-lg text-white text-center <?= esc($selected_item_idx) == 1 ? "bg-emerald-600" : "bg-gray-600" ?> rounded-lg hover:bg-emerald-700 transition-colors" href="<?= base_url("buat-seminar") ?>">Buat Seminar</a>
    <?php elseif($role === "dosen"): ?>
    <a class="px-5 py-3 text-lg text-white text-center <?= esc($selected_item_idx) == 0 ? "bg-emerald-600" : "bg-gray-600" ?> rounded-lg hover:bg-emerald-700 transition-colors" href="<?= base_url("dashboard") ?>">Dashboard</a>
    <a class="px-5 py-3 text-lg text-white text-center <?= esc($selected_item_idx) == 1 ? "bg-emerald-600" : "bg-gray-600" ?> rounded-lg hover:bg-emerald-700 transition-colors" href="<?= base_url("daftar-seminar") ?>">Daftar Seminar</a>
    <?php endif; ?>
</aside>
