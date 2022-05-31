
<?php $__env->startSection('main-section'); ?>
<link rel="stylesheet" type="text/css" href="/css/news.css" />
<div class="container-fluid card">
    <div class="container card2">
        <div class="row">
            <div class="col">
                <h1>Sign up for The Tide, Astras newsletter!</h1>
                <p>Sign up to receive our monthly newsletter, featuring updates from the team, new decentralized applications
                    and NFT projects, and trends we’re seeing in the space.</p>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Your email address..." aria-label="Search">
                    <button type="button" class="btn btn-primary btnSetting">Subscribe</button>
                </form>
            </div>
            <div class="col">
                <img src="https://opensea.io/blog/wp-content/uploads/2021/07/newsletter-graphic.png">
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/newsletter.blade.php ENDPATH**/ ?>