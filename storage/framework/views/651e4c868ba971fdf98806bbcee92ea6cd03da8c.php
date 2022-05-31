
<?php $__env->startSection('main-section'); ?>
<link rel="stylesheet" type="text/css" href="/css/rankings.css" />
<body>
<div id="heading_container">
        <h1 id="h1_top_nfts">Top NFTs</h1>
        <p id="ranking_description">The top NFTs on Astra, ranked by volume, floor price and other statistics.</p>
        <div class="btn-grp">
        <form method="get" action="<?php echo e(url('/rankings/filter')); ?>" >
            <span class="dropdown-center" id="filters">
            <button id="categories_btn"
                class="btn btn-light btn-secondary dropdown-toggle btn-outline-secondary btn-lg" type="button"
                id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e($c); ?>

            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
            <li><input class="dropdown-item" name="a" type="submit" value="All Categories"></li>
            <li><input class="dropdown-item" name="a" type="submit" value="New"></input></li>
            <li><input class="dropdown-item" name="a" type="submit" value="Art"></input></li>
            <li><input class="dropdown-item" name="a" type="submit" value="Collectibles"></input></li>
            <li><input class="dropdown-item" name="a" type="submit" value="Domain Names"></input></li>
            <li><input class="dropdown-item" name="a" type="submit" value="Music"></input></li>
            <li><input class="dropdown-item" name="a" type="submit" value="Photography"></li>
            <li><input class="dropdown-item" name="a" type="submit" value="Sports"></input></li>
            <li><input class="dropdown-item" name="a" type="submit" value="Trading"></input></li>
            <li><input class="dropdown-item" name="a" type="submit" value="Utility"></input></li>
            <li><input class="dropdown-item" name="a" type="submit" value="Vitual"></input></li>
            </ul>
            </span>
        
            <span class="dropdown-center" id="filters">
            <button id="time_btn" class="btn btn-light btn-secondary dropdown-toggle btn-outline-secondary btn-lg"
                type="button" id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e($i); ?>

                </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
                <li><input class="dropdown-item" name="b" type="submit" value="All Items"></li>
                <li><input class="dropdown-item" name="b" type="submit" value="Items: 0K - 1K"></input></li>
                <li><input class="dropdown-item" name="b" type="submit" value="Items: 1K - 2K"></input></li>
                <li><input class="dropdown-item" name="b" type="submit" value="Items: 2K - 3K"></input></li>
                <li><input class="dropdown-item" name="b" type="submit" value="Items: 3K - 4K"></input></li>
                <li><input class="dropdown-item" name="b" type="submit" value="Items &gt 4K"></input></li>
            </ul>

            </span>
            <span class="dropdown-center" id="filters">
            <button id="chains_btn" class="btn btn-light btn-secondary dropdown-toggle btn-outline-secondary btn-lg"
                type="button" id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e($o); ?>

            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
                <li><input class="dropdown-item" name="c" type="submit" value="All Owners"></li>
                <li><input class="dropdown-item" name="c" type="submit" value="Owners: 0K - 1K"></input></li>
                <li><input class="dropdown-item" name="c" type="submit" value="Owners: 1K - 2K"></input></li>
                <li><input class="dropdown-item" name="c" type="submit" value="Owners: 2K - 3K"></input></li>
                <li><input class="dropdown-item" name="c" type="submit" value="Owners: 3K - 4K"></input></li>
                <li><input class="dropdown-item" name="c" type="submit" value="Owners &gt 4K"></input></li>
            </ul>
            </span>
        </form>
        </div>
    </div>
    <div id="ranking-list">
        <div id="t-head" class="d-flex mb-7">
            <div class="first-col col-heading me-auto p-2 text-start">Collection</div>
            <div class="none col-heading p-2 text-end">Volume</div>
            <div class="none col-heading p-2 text-end">24h %</div>
            <div class="none col-heading p-2 text-end">7d %</div>
            <div class="col-heading p-2 text-end">Floor Price</div>
            <div class="col-heading p-2 text-end">Owners</div>
            <div class="col-heading p-2 text-end">Items</div>
        </div>
        <hr>
        <?php $__currentLoopData = $List; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex mb-7">
            <div class="first-col me-auto p-2 text-start">
                <span>
                <?php echo e($Count); ?>

                </span>
                <img class="row-img" src="<?php echo e($collection->Image); ?>">
                <span class="col-heading"><?php echo e($collection->Name); ?></span>
            </div>
            <div class="none col-heading p-2 text-end">
                <img class="vol" src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg">
                <span><?php echo e($collection->Volume); ?></span>
            </div>
            <?php            
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'X-API-KEY' => '2065401f46a84c019b3945684dbfa278'
            ])->get('https://api.opensea.io/api/v1/collection/'.$collection->slugName.'/stats', [
            ]);

            if($response->successful()) {
                $json = json_decode($response->body(), true);
                $oneday = round($json['stats']['one_day_change']*100, 2);
                $oneweek = round($json['stats']['seven_day_change']*100, 2);

                if($oneday > 0){
                echo '<div style="color:lightgreen"  class="none col-heading p-2 text-end">+'.abs($oneday).'%</div>';
                }
                else if($oneday < 0){
                    echo '<div style="color:red"  class="none col-heading p-2 text-end">-'.abs($oneday).'%</div>';
                }
                else {
                    echo '<div class="none col-heading p-2 text-end">---</div>';
                }
                if($oneweek > 0){
                echo '<div style="color:lightgreen"  class="none col-heading p-2 text-end">+'.abs($oneweek).'%</div>';
                }
                else if($oneweek < 0){
                    echo '<div style="color:red"  class="none col-heading p-2 text-end">-'.abs($oneweek).'%</div>';
                }
                else {
                    echo '<div class="none col-heading p-2 text-end">---</div>';
                }
            }
            else {
                echo '<div class="none col-heading p-2 text-end">---</div>';
                echo '<div class="none col-heading p-2 text-end">---</div>';
            }

            
            ?>
            <div class="col-heading p-2 text-end">
                <img class="none vol" src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg">
                <span><?php echo e($collection->Floor); ?></span>
            </div>
            <div class="col-heading p-2 text-end"><?php echo e($collection->Owners/1000); ?>K</div>
            <div class="col-heading p-2 text-end"><?php echo e($collection->Total/1000); ?>K</div>
        </div>
        <hr>
        <?php $Count++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/rankings.blade.php ENDPATH**/ ?>