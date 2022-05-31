
<?php $__env->startSection('main-section'); ?>
<link rel="stylesheet" type="text/css" href="/css/collection.css" />
<link rel="stylesheet" type="text/css" href="/css/explore.css" />

<div class="col collection-header">
    <div class="col banner-container">
        <div class="banner-wrapper">
            <div class="banner-image">
                <img class="collection-banner" src="<?php echo e(substr($collection->Banner, 0, -5)); ?>=h4000" style="object-fit: cover;" alt="">
            </div>
        </div>
    </div>
    <div class="col header-container">
        <h1>Explore <?php echo e($collection->Name); ?></h1>
        <div class="header-description text-center"><?php echo $collection->Description; ?></div>
    </div>
    <hr>
</div>
<div class="col collection-trending">
    <h3>Trending collections in <?php echo e($collection->Name); ?></h3>
    <div class="container">
        <?php
        $count = 0;
        ?>
        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/collection.blade.php ENDPATH**/ ?>