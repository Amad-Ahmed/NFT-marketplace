
<?php $__env->startSection('main-section'); ?>
<div class="container-fluid searchDiv">
    <form class="container-fluid formSetting" method="post" action="<?php echo e(url('/search')); ?>" role="search">
        <?php echo csrf_field(); ?>
        <div class="input-group search-wrapper">
            <input name="q" id="searchBar" type="search" class="form-control search-bar-astra" placeholder="Search items, Collections and Accounts" aria-label="Username" aria-describedby="basic-addon1">
            <img src="/images/search.png">
        </div>
    </form>
</div>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img class="imgOptions" src="/images/started.png">
            </div>
            <div class="col-sm">
                <img class="imgOptions" src="/images/buying.png">
            </div>
            <div class="col-sm">
                <img class="imgOptions" src="/images/selling.png">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img class="imgOptions" src="/images/creating.png">
            </div>
            <div class="col-sm">
                <img class="imgOptions" src="/images/faq.png">
            </div>
            <div class="col-sm">
                <img class="imgOptions" src="/images/safety.png">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm lastRow">
                <img class="imgOptions" src="/images/partners.png">
            </div>
            <div class="col-sm lastRow2">
                <img class="imgOptions" src="/images/developers.png">
            </div>
        </div>

    </div>
</div>

<div class="container-fluid reads">
    <h2 class="readh2">Recommended Reads</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm card">
                <span class="cardText">How do I create an Astra account?</span>
            </div>
            <div class="col-sm card">
                <span class="cardText">How does Solana work on Astra?</span>
            </div>
            <div class="col-sm card">
                <span class="cardText">What Crypto Wallets can I use with Astra?</span>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm card">
                <span class="cardText">How do I sell an NFT?</span>
            </div>
            <div class="col-sm card">
                <span class="cardText">How do I create an NFT?</span>
            </div>
            <div class="col-sm card">
                <span class="cardText">Whats WETH? How do I get it?</span>
            </div>
        </div>
        <br>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.helpmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/help.blade.php ENDPATH**/ ?>