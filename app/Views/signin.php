<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>
<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0 overflow-y-scroll">
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Sign In
            </h1>
            <form class="space-y-4 md:space-y-6" action="<?= base_url("signin") ?>" method="post">
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-white">Username</label>
                    <input type="text" name="username" id="username" class="sm:text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" placeholder="JohnAbd" value="<?= set_value('username') ?>" required>
                    <?php if (isset($validation) && $validation->hasError('username')): ?>
                    <span class="block text-red-600 text-sm animate-pulse"><?= $validation->getError('username') ?></span>
                    <?php endif; ?>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="sm:text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" required="">
                    <?php if (isset($validation) && $validation->hasError('password')): ?>
                    <span class="block text-red-600 text-sm animate-pulse"><?= $validation->getError('password') ?></span>
                    <?php endif; ?>
                </div>
                <?php if(session()->getFlashdata('error')):?>
                    <div class="flex flex-col gap-2 text-red-600 animate-pulse">
                       <?php foreach(session()->getFlashdata('error') as $key => $err): ?>
                        <span><?= $err ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif;?>
                <button type="submit" class="w-full text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</button>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                    Belum punya akun? <a href="<?= base_url("signup") ?>" class="font-medium text-emerald-600 hover:underline dark:text-emerald-500">Sign Up disini</a>
                </p>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>