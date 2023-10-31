<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
    <title>Website Seminar</title>
</head>
<body>
    <nav class="fixed top-0 px-4 py-5 w-full bg-emerald-600 flex justify-between items-center">
        <span id="logo" class="text-3xl text-white font-bold">Seminar</span>
        <div class="flex gap-3 items-center">
            <?php if(isset($user_info)): ?>
            <a class="bg-gray-600 text-white px-5 py-3 rounded-lg font-bold focus:ring-4 focus:outline-none focus:ring-emerald-300 hover:bg-gray-700 transition-colors" href="<?= base_url("logout") ?>">Log Out</a>
            <span class="block text-xl text-white"><?= $user_info["username"] ?></span>
            <?php else: ?>
            <a class="bg-gray-600 text-white px-5 py-3 rounded-lg font-bold focus:ring-4 focus:outline-none focus:ring-emerald-300 hover:bg-gray-700 transition-colors" href="<?= base_url("signup") ?>">Sign Up</a>
            <a class="bg-white text-emerald-600 px-5 py-3 rounded-lg font-bold focus:ring-4 focus:outline-none focus:ring-emerald-300 hover:bg-gray-200 transition-colors" href="<?= base_url("signin") ?>">Log In</a>
            <?php endif; ?>
        </div>
    </nav>
    <main class="w-full h-full bg-gray-800">
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>