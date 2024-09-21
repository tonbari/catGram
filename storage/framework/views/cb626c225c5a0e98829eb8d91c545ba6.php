<?php $__env->startSection('content'); ?>

<div class="container">
   <form action="/p" enctype="multipart/form-data" method="post">

    <?php echo csrf_field(); ?>

    <div class="row">
        <h1>Add new post</h1>
    </div>
            <div class="row">
                    <div class="col-8 offset-2">

                    <div class="row mb-3">
                            <label for="caption" class="col-md-4 col-form-label"><?php echo e(__('Post caption')); ?></label>

                                <input id="caption" type="text"
                                class="form-control <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="caption" value="<?php echo e(old('caption')); ?>"
                                autocomplete="caption" autofocus>

                                <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8 offset-2">
                        <label for="image" class="col-md-4 col-form-label d-flex">Post image</label>
                        <input type="file" class="form-control-file" id="image" name="image">

                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <strong><?php echo e($message); ?></strong>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                    <button class="btn btn-primary p-2">Add New Post</button>
        </div>
   </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\codes\Laravel\catGram\resources\views/posts/create.blade.php ENDPATH**/ ?>