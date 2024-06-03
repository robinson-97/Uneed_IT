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
    <div class="background-container"></div>
    <div class="main-content">
        <section class="about">
            <div class="container">
                <div class="about">
                    <h2>About UNEED-IT</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non elit ac magna malesuada consectetur vel sed arcu. Vestibulum nec lacus non magna rutrum eleifend. Phasellus vitae erat non tellus vulputate mollis vel nec lorem. Fusce tempus justo sed tortor facilisis, vel viverra mi tristique. Fusce volutpat turpis vitae purus fringilla, sed tincidunt orci ullamcorper. Nam eu nunc risus. Sed vel varius leo, ut condimentum nulla. Nulla facilisi.</p>
                    <p>Suspendisse ac nisl sit amet sem consequat fringilla vel ut eros. Vivamus auctor dui at ipsum consectetur commodo. Curabitur et felis ut tortor feugiat tristique. In vehicula eleifend consectetur. Phasellus vel velit vel purus volutpat tempor. Maecenas sed libero vel leo fermentum vehicula. Proin quis purus eget velit iaculis pharetra sit amet vitae justo. Integer luctus volutpat ligula, et efficitur nunc rhoncus nec. Donec vitae tristique leo, eu congue ligula.</p>
                </div>
                <img src="<?php echo e(asset('images/person.jpg')); ?>" alt="about-img">
            </div>
        </section>
    </div>
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
<?php /**PATH C:\xampp\htdocs\laravel-training\resources\views/about.blade.php ENDPATH**/ ?>