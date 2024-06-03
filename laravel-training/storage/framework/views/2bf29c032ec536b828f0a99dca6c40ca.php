<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <main>
        <section class="hero">
            <div class="container">
                <h1>Welcome to UNEED-IT</h1>
                <p>Your one-stop solution for all your IT needs.</p>
                <a href="<?php echo e(url('/aanvraag')); ?>" class="btn">Aanvraag doen</a>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="service">
                    <h3>Phone Repair</h3>
                    <p>We specialize in repairing all types of phones, including iPhones, Android devices, and more.</p>
                </div>
                <div class="picture">
                </div>
                <div class="service">
                    <h3>Laptop Repair</h3>
                    <p>Our expert technicians can diagnose and fix issues with laptops of any make and model.</p>
                </div>
                <div class="service">
                    <h3>PC Repair</h3>
                    <p>From hardware upgrades to software troubleshooting, we've got you covered for all your PC repair needs.</p>
                </div>
            </div>
        </section>
        <section class="iframe">
            <div class="container">
                <div class="location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2455.469405079923!2d4.6556065!3d52.0165458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5d125952a58cd%3A0x93f677d7fe6faaae!2sUneed-IT!5e0!3m2!1sen!2snl!4v1712919752830!5m2!1sen!2snl" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Have questions or need assistance? Contact our friendly team today!</p>
                <a href="<?php echo e(url('/contact')); ?>" class="btn">Contact Us</a>
            </div>
        </section>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel-training\resources\views/home.blade.php ENDPATH**/ ?>