<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/<?php echo e($post->image); ?>" class="w-50">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="<?php echo e($post->user->profile->profileImage()); ?>" class="rounded-circle w-100" style="max-width: 50px;">
                    </div>
                    <div>
                        <div class="fw-bold">
                            <a href="/profile/<?php echo e($post->user->id); ?>">
                                <span class="text-dark"><?php echo e($post->user->username); ?></span>
                            </a>
                            <a href="#" class="ps-3">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

            </div>

            <p>
                <span class="fw-bold">
                    <a href="/profile/<?php echo e($post->user->id); ?>">
                        <span class="text-dark"><?php echo e($post->user->username); ?></span>
                    </a>
                </span> <?php echo e($post->caption); ?>

            </p>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\codes\Laravel\catGram\resources\views/posts/show.blade.php ENDPATH**/ ?>