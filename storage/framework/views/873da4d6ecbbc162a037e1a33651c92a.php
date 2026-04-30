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
     <?php $__env->slot('title', null, []); ?> 
        Welcome
     <?php $__env->endSlot(); ?>

    <div class="container-main px-4">

        <!-- Background glow -->
        <div class="absolute w-[500px] h-[500px] bg-indigo-500 opacity-30 blur-3xl rounded-full -top-24 -left-24"></div>
        <div class="absolute w-[400px] h-[400px] bg-cyan-400 opacity-30 blur-3xl rounded-full -bottom-24 -right-24"></div>

        <div class="max-w-2xl w-full">
            <div class="card-modern text-center">

                <h1 class="title">
                    Welcome to Chirper 🚀
                </h1>

                <p class="subtitle mt-4">
                    This is your brand new Laravel application. Time to make it sing (or chirp)!
                </p>

                <div class="mt-8 flex justify-center gap-4">
                    <button class="btn-primary">
                        Get Started
                    </button>
                </div>

            </div>
        </div>

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
<?php endif; ?><?php /**PATH D:\Arya\Xampp\htdocs\chirper\resources\views/welcome.blade.php ENDPATH**/ ?>