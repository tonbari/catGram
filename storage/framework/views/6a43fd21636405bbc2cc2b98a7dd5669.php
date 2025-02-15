<?php $__env->startSection('content'); ?>

<div class="container">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-4 offset-2">
                <a href="/profile/<?php echo e($post->user->id); ?>">
                    <img src="/storage/<?php echo e($post->image); ?>" class="w-100">
                </a>
            </div>
        </div>

        <div class="row pt-2 pb-4">
            <div class="col-4 offset-2">
                <div>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <?php echo e($posts->links('pagination::bootstrap-4')); ?>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\codes\Laravel\catGram\resources\views/posts/index.blade.php ENDPATH**/ ?>