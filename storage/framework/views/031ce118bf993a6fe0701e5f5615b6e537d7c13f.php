
<?php $__env->startSection('main-section'); ?>
<link rel="stylesheet" type="text/css" href="/css/explore.css" />
<div class="container">
    <?php
    $count = 0;
    ?>
    <?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($count%3==0): ?>
            <div class="row">
        <?php endif; ?>
        <div class="col-12 col-lg-4 col-sm-12">
            <a href="/detail/<?php echo e($collection->slugName); ?>">
            <div class="nft-card">
                <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                <div class="nft-info">
                    <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                    <div class="nft-name"><?php echo e($collection->Name); ?></div>
                    <div class="nft-author">
                        <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                    </div>
                    <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                </div>
            </div>
            </a>
        </div>
        <?php
        $count+=1;
        ?>
        <?php if($count%3==0): ?>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($count%3!=0): ?>
            </div>
        <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/search.blade.php ENDPATH**/ ?>