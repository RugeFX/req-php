<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
    <title>Website Seminar</title>
</head>
<body>
   <?= view_cell("NavbarCell") ?>
    <div class="w-full h-full bg-gray-800">
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>