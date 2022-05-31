
<?php $__env->startSection('main-section'); ?>
<link rel="stylesheet" type="text/css" href="/css/activity.css" />
<link rel="stylesheet" type="text/css" href="/css/rankings.css" />
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
<div class="stickyhead" id="heading1_container">
        <h1 id="h1_activity">Activity</h1>
    </div>
    <nav class=" navbar2 navbar-expand d-flex flex-column align-item-start" id="sidebar">
        <a href="#" class="navbar-brand text-light mt-5">
            <div id="event_type">Event Type</div>
        </a>
        <form>
        <button class="btn-light btn-secondary btn-lg" id="filter-button" href="<?php echo e(url('/activity/listings')); ?>">Listings</button>
        <button class="btn-light btn-secondary btn-lg" id="filter-button" href="<?php echo e(url('/activity/sales')); ?>">Sales</button>
        <button class="btn-light btn-secondary btn-lg" id="filter-button" href="<?php echo e(url('/activity/offers')); ?>">Offers</button>
        <button class="btn-light btn-secondary btn-lg" id="filter-button" href="<?php echo e(url('/activity/transfers')); ?>">Transfers</button>
        <button class="btn-light btn-secondary btn-lg" id="filter-button" href="<?php echo e(url('/activity/all')); ?>">ALL</button>
        </form>
    </nav>
    <section id="sec" class="p4 my-container">
        <div class="stickyhead1">
            <?php $s='>>'; ?>
        <button class=" ms-5 center btn-light btn-secondary btn-lg" id="menu-btn"><strong><?php echo e($s); ?></strong></button>
        </div>        
        
        <div id="ranking-list">
        <div id="t-head" class="hr d-flex mb-7">
            <div class="first-col2 me-auto p-2 text-center">Item</div>
            <div class="col-heading2 p-2 text-center">Price</div>
            <div class="col-heading2 p-2 text-center">Quantity</div>
            <div class="none col-heading2 p-2 text-center">From</div>
            <div class="none col-heading2 p-2 text-center">To</div>
        </div>
        <?php while($num_assets > 0): ?>
        <div class="hr d-flex mb-7">
            <div class="first-col2 me-5 p-2 ">
                <img class="row-img float-start" id="act_img" src="<?php echo e($x['asset_events'][$num_assets-1]['asset']['image_url']); ?>">
                <div class="none float-start ms-4" id="names">
                <div id="collection" class="mt-1">
                <?php echo e(Str::limit($x['asset_events'][$num_assets-1]['asset']['collection']['name'],23)); ?>

                </div>
                <div id="nft" ><b><?php echo e(Str::limit($x['asset_events'][$num_assets-1]['asset']['name'],23)); ?></b></div>
                </div>
            </div>
            <div class=" col-heading2 p-2 text-center">
                <div>
                <img class="vol" src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg">
                <?php if($x['asset_events'][$num_assets-1]['bid_amount']): ?>
                <span class="none col-heading2 p-2 text-center"><?php echo e(round($x['asset_events'][$num_assets-1]['bid_amount']/pow(10,18),4)); ?></span>
                <?php else: ?>
                <span class="none col-heading2 p-2 text-center"><?php echo e(round($x['asset_events'][$num_assets-1]['ending_price']/pow(10,18),4)); ?></span>
                <?php endif; ?>
                
                </div>
            </div>
            <div class=" col-heading2 p-2 text-center"><?php echo e($x['asset_events'][$num_assets-1]['quantity']); ?></div>
            <div class="none col-heading2 p-2 text-center" style="color: rgb(24, 104, 183);"><?php echo e(substr($x['asset_events'][$num_assets-1]['from_account']['address'],0, 7)); ?></div>
            <?php if($x['asset_events'][$num_assets-1]['to_account']): ?>
                <div class="none col-heading2 p-2 text-center" style="color: rgb(24, 104, 183);"><?php echo e(substr($x['asset_events'][$num_assets-1]['to_account']['address'],0, 7)); ?></div>
            <?php else: ?>
                <div class="none col-heading2 p-2 text-center" style="color: black;">---</div>
            <?php endif; ?>
        </div>
        <?php $num_assets--; ?>
        <?php endwhile; ?>

     </section>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/activity.blade.php ENDPATH**/ ?>