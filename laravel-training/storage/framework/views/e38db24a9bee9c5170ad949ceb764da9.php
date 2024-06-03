<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNEED-IT</title>

    <meta name="description" content="Your one-stop solution for all your IT needs.">
    <meta name="keywords" content="IT, repair, services, phones, laptops, PCs">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/home.css']); ?>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <img src="images/logo.png" alt="UNEED-IT Logo">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('/about')); ?>">About</a></li>
                <li><a href="<?php echo e(url('/nieuws')); ?>">Nieuws</a></li>
                <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                <li><a href="<?php echo e(url('/aanvraag')); ?>">Aanvraag doen</a></li>
                <li><a href="<?php echo e(url('/faq')); ?>">FAQ</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <?php echo e($slot); ?>

</main>
<footer>
    <div class="container">
        <p>&copy; 2024 UNEED-IT. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-training\resources\views/components/layout.blade.php ENDPATH**/ ?>