<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://img.freepik.com/premium-vector/sweet-feline-pink-kawaii-cartoon-cat-icon-with-saturated-colors-white-amber-accents-ani_801298-60.jpg" style="height: 180px; width: 180px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1><?php echo e($user->username); ?></h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong><?php echo e($user->profile->title); ?></strong></div>
            <div><?php echo e($user->profile->description); ?></div>
            <div><a href="#"><?php echo e($user->profile->url); ?></a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_square.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_square.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_square.jpg" class="w-100">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\codes\Laravel\catGram\resources\views/home.blade.php ENDPATH**/ ?>