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
    <section class="hero">
        <div class="container">
            <h1>Contact opnemen met UNEED-IT?</h1>
            <p>Your one-stop solution for all your IT needs.</p>
            <a href="aanvraag.html" class="btn">Aanvraag doen</a>
        </div>
    </section>
    <section class="contact-info">
        <div class="container">
            <h2>Contact Information</h2>
            <ul>
                <li><strong>Phone Number:</strong> <a href="tel:+31685858588">316-858-585-88</a></li>
                <li><strong>Email:</strong> <a href="mailto:2829389@student.zadkine.nl">2829389@student.zadkine.nl</a></li>
                <li><strong>Address:</strong> Zuidbaan 514, 2841 MD Moordrecht</li>
            </ul>
        </div>
    </section>
    <section class="additional-info">
        <div class="container">
            <h2>Additional Information</h2>
            <p>For any inquiries or support requests, feel free to contact us using the information provided above. We're here to assist you!</p>
        </div>
    </section>
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
<?php /**PATH C:\xampp\htdocs\laravel-training\resources\views/contact.blade.php ENDPATH**/ ?>