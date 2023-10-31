<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>
<main class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0 overflow-y-scroll">
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Sign Up
            </h1>
            <form class="space-y-4 md:space-y-6" action="<?= base_url("signup") ?>" method="post">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                    <input type="text" name="name" id="name" class="sm:text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" placeholder="Abdul John" value="<?= set_value('name') ?>" required>
                    <?php if (isset($validation) && $validation->hasError('name')): ?>
                    <span class="block text-red-600 text-sm animate-pulse"><?= $validation->getError('name') ?></span>
                    <?php endif; ?>
                </div>
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-white">Username</label>
                    <input type="text" name="username" id="username" class="sm:text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" placeholder="JohnAbd" value="<?= set_value('username') ?>" required>
                    <?php if (isset($validation) && $validation->hasError('username')): ?>
                    <span class="block text-red-600 text-sm animate-pulse"><?= $validation->getError('username') ?></span>
                    <?php endif; ?>
                </div>
                <div>
                    <label for="nim" class="block mb-2 text-sm font-medium text-white">NIM</label>
                    <input type="number" name="nim" id="nim" class="sm:text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" placeholder="1234567890" value="<?= set_value('nim') ?>" required>
                    <?php if (isset($validation) && $validation->hasError('nim')): ?>
                    <span class="block text-red-600 text-sm animate-pulse"><?= $validation->getError('nim') ?></span>
                    <?php endif; ?>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="sm:text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" required="">
                    <?php if (isset($validation) && $validation->hasError('password')): ?>
                    <span class="block text-red-600 text-sm animate-pulse"><?= $validation->getError('password') ?></span>
                    <?php endif; ?>
                </div>
                <div>
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-white">Confirm password</label>
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="sm:text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" required>
                    <?php if (isset($validation) && $validation->hasError('confirm-password')): ?>
                    <span class="block text-red-600 text-sm animate-pulse"><?= $validation->getError('confirm-password') ?></span>
                    <?php endif; ?>
                </div>
                <div>
                    <div class="flex items-center mb-4">
                        <input checked id="participant" type="radio" value="participant" name="role" class="w-4 h-4 text-emerald-600 bg-gray-100 border-gray-300 focus:ring-emerald-500">
                        <label for="participant" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Participant</label>
                    </div>
                    <div class="flex items-center">
                        <input id="presenter" type="radio" value="presenter" name="role" class="w-4 h-4 text-emerald-600 bg-gray-100 border-gray-300 focus:ring-emerald-500">
                        <label for="presenter" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Presenter</label>
                    </div>
                </div>
                <button type="submit" class="w-full text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Buat akun</button>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                    Sudah ada akun? <a href="<?= base_url("signin") ?>" class="font-medium text-emerald-600 hover:underline dark:text-emerald-500">Sign In disini</a>
                </p>
            </form>
        </div>
    </div>
</main>
<?= $this->endSection() ?>