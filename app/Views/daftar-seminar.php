<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>
<div class="flex gap-5 pt-28 pb-6 px-5 min-h-screen">
    <aside class="flex flex-col gap-2 p-2 h-auto bg-gray-700 rounded-lg lg:w-96 overflow-hidden">
        <a class="px-5 py-3 text-lg text-white text-center bg-gray-600 rounded-lg hover:bg-emerald-700 transition-colors" href="<?= base_url("dashboard") ?>">Dashboard</a>
        <a class="px-5 py-3 text-lg text-white text-center bg-emerald-600 rounded-lg hover:bg-emerald-700 transition-colors"href="<?= base_url("daftar-seminar") ?>">Daftar Seminar</a>
        <a class="px-5 py-3 text-lg text-white text-center bg-gray-600 rounded-lg hover:bg-emerald-700 transition-colors" href="<?= base_url("riwayat-seminar") ?>">Riwayat Seminar</a>
    </aside>
    <main class="flex-1 bg-gray-700 rounded-lg p-2">
        <section id="daftar-seminar">
            <h2 class="text-xl text-white font-semibold px-2 pb-2">Daftar Seminar</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 items-start">
                <a href="#seminar1" class="group flex flex-col justify-between w-full h-full bg-gray-600 hover:bg-emerald-600 rounded-lg transition-colors">
                    <div class="p-3">
                        <div class="flex flex-col md:flex-row justify-between">
                            <h3 class="text-2xl text-emerald-400 font-semibold group-hover:text-white transition-colors">Seminar 1</h3>
                            <span class="block text-gray-300">18-03-2023</span>
                        </div>
                        <span class="block text-white"><span class="font-semibold">Moderator:</span> Abdul</span>
                        <span class="block text-white"><span class="font-semibold">Presenter:</span> John</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-return-right mt-3 text-white w-8 h-8 group-hover:translate-x-5 transition-transform" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                        </svg>
                    </div>
                </a>
                <a href="#seminar1" class="group flex flex-col justify-between w-full h-full bg-gray-600 hover:bg-emerald-600 rounded-lg transition-colors">
                    <div class="p-3">
                        <div class="flex flex-col md:flex-row justify-between">
                            <h3 class="text-2xl text-emerald-400 font-semibold group-hover:text-white transition-colors">Seminar 1</h3>
                            <span class="block text-gray-300">18-03-2023</span>
                        </div>
                        <span class="block text-white"><span class="font-semibold">Moderator:</span> Abdul</span>
                        <span class="block text-white"><span class="font-semibold">Presenter:</span> John</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-return-right mt-3 text-white w-8 h-8 group-hover:translate-x-5 transition-transform" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                        </svg>
                    </div>
                </a>
                <a href="#seminar1" class="group flex flex-col justify-between w-full h-full bg-gray-600 hover:bg-emerald-600 rounded-lg transition-colors">
                    <div class="p-3">
                        <div class="flex flex-col md:flex-row justify-between">
                            <h3 class="text-2xl text-emerald-400 font-semibold group-hover:text-white transition-colors">Seminar 1</h3>
                            <span class="block text-gray-300">18-03-2023</span>
                        </div>
                        <span class="block text-white"><span class="font-semibold">Moderator:</span> Abdul</span>
                        <span class="block text-white"><span class="font-semibold">Presenter:</span> John</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-return-right mt-3 text-white w-8 h-8 group-hover:translate-x-5 transition-transform" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                        </svg>
                    </div>
                </a>
                <a href="#seminar1" class="group flex flex-col justify-between w-full h-full bg-gray-600 hover:bg-emerald-600 rounded-lg transition-colors">
                    <div class="p-3">
                        <div class="flex flex-col md:flex-row justify-between">
                            <h3 class="text-2xl text-emerald-400 font-semibold group-hover:text-white transition-colors">Seminar 1</h3>
                            <span class="block text-gray-300">18-03-2023</span>
                        </div>
                        <span class="block text-white"><span class="font-semibold">Moderator:</span> Abdul</span>
                        <span class="block text-white"><span class="font-semibold">Presenter:</span> John</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-return-right mt-3 text-white w-8 h-8 group-hover:translate-x-5 transition-transform" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                        </svg>
                    </div>
                </a>
            </div>
        </section>
    </main>
</div>
<?= $this->endSection() ?>