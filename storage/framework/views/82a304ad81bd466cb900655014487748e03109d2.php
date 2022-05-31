
<?php $__env->startSection('main-section'); ?>
<link rel="stylesheet" type="text/css" href="/css/index.css" />

    <div class="container landing-box" style="margin-top: 5%;">
    <div class="row landing-row">
        <div class="col" style="margin-top: 55px; margin-left: 30px;">
            <h1 id="landing-title">Discover, collect, and sell extraordinary NFTs</h1>
            <p id="landing-subtitle">Astra is the world's first and largest NFT marketplace</p>
            <div class="row">
                <a  class="col landing-btn1" href="<?php echo e(url('/explore')); ?>"><div >Explore</div></a>
                <div class="col landing-btn2">Create</div>
                <div class="col-4"></div>
            </div>
        </div>
        <div class="col-1 empty-col"></div>
        <a class="col img-responsive landing-nft" href="/detail/<?php echo e($coll->slugName); ?>">
        <div class="">
            <div class="col">
                <img style="border-radius: 20px 20px 0% 0%;" src="<?php echo e(substr($coll->Image,0,-5)); ?>" width="450" height="450">
                <div class="row nft-footer">
                    <div class="col-1">
                        <div><img style="height: 40px; width: 40px; border-radius: 50%;"
                                src="<?php echo e($coll->Image); ?>">
                        </div>
                    </div>
                    <div class="col nft-text">
                        <span><b><?php echo e($coll->Name); ?></b></span><br>
                        <span class="resiSpan"><?php echo e($coll->Developer); ?></span>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>
    
    <div class="container solana">
        <div class="row align-items-center">
            <div class="col align-items-center solana-col">
                <h3>Solana is in beta on Astra</h3>
            </div>
            <div class="col-5"></div>
            <div class="col align-items-center solana-col">
                <div class="col landing-btn1 solana-btn">Explore</div>
            </div>
        </div>
    </div>
    <div class="container notable-drops" style="margin-top: 80px;">
    <h2 classs="drop-h2"
        style="text-align: center; font-weight: 600; font-size: 24px; color: rgb(4, 17, 29); font-family: Poppins, sans-serif; margin-bottom: 25px;">
        Notable Drops</h2>
    <div class="row">
        <div class="col">
            <img class="NotablePics" src="/images/<?php echo e($extras[0]['Image']); ?>">
        </div>
        <div class="col">
            <img class="NotablePics" src="/images/<?php echo e($extras[1]['Image']); ?>">
        </div>
        <div class="col">
            <img class="NotablePics" src="/images/<?php echo e($extras[2]['Image']); ?>">
        </div>
    </div>
</div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <h2 classs="drop-h2"
            style="text-align: center; font-weight: 600; font-size: 24px; color: rgb(4, 17, 29); font-family: Poppins, sans-serif;">
            Popular NFTs</h2>
        <div class="carousel-item active">
            <img src="<?php echo e($top[5]['Banner']); ?>"
                style="height: 100%; margin: auto;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e($top[6]['Banner']); ?>"
                style="height: 100%; margin: auto;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e($top[7]['Banner']); ?>"
                style="height: 100%; margin: auto;" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container-fluid">
<div class="row" style="margin: 5% auto; width: 80%;">
    <div class="col-sm-3"><img class="img-setup2" src="/images/<?php echo e($extras[4]['Image']); ?>"><br>
        <h4 class="heading1">Set up your wallet</h4>
        <p style="text-align: center;"><?php echo e($extras[4]['Description']); ?></p>
    </div>
    <div class="col-sm-3"><img class="img-setup2" src="/images/<?php echo e($extras[5]['Image']); ?>"><br>
        <h4 class="heading">Create your collection</h4>
        <p style="text-align: center;"><?php echo e($extras[5]['Description']); ?></p>
    </div>
    <div class="col-sm-3"><img class="img-setup" src="/images/<?php echo e($extras[6]['Image']); ?>"><br>
        <h4 class="heading2">Add your NFTs</h4>
        <p style="text-align: center;"><?php echo e($extras[6]['Description']); ?></p>
    </div>
    <div class="col-sm-3"><img class="img-setup2" src="/images/<?php echo e($extras[7]['Image']); ?>"><br>
        <h4 class="heading3">List them for sale</h4>
        <p style="text-align: center;"><?php echo e($extras[7]['Description']); ?></p>
    </div>
</div>
    
        <div class="container features">


        </div>
        <div class="container features" style="float: left;">


        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/index.blade.php ENDPATH**/ ?>