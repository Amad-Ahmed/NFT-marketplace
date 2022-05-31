
<?php $__env->startSection('main-section'); ?>

<link rel="stylesheet" href="/css/explore.css">
<link rel="stylesheet" href="/css/account.css">
<div>
            <div class="account-header">
                <div>
                    <img class="account-banner" src="https://lh3.googleusercontent.com/E2L0w8teDd2IOHA_pdmrKxnJo4pQlpKRo0PebpBsicZuD2oJld-sItG2L7te_9srOb5XzsARhP0mo6zgoUhM9NRQHUtl24BQHxxpzQU=h200" alt=""></div>
                    <div class="account-info">
                        <div class="account-img"><img src="https://lh3.googleusercontent.com/XPbOCFUxXw5ZSK39hkX0_e7Yf89AgtKyWIUvA_VCW8lRsxwTcrpObMTIc343j7ldwNNOmi_9mnaTJ0oZS5eqQ0Wh6kJScZkHlNbc=s100" alt=""></div>
                        <div class="account-name"><h1>Unnamed</h1></div>
                    <div >
                    <button class="account-id" >
                        <img class="eth" src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg">
                        <span class="wallet-address">0x7E3f...28a3</span>
                    </button>
                    </div >
                        <p class="join-date">Joined May 2022</p>
                    </div>
            </div>
    </div>
    <div class="container" style="background-color:red">
                    <?php $__currentLoopData = $coll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($collection->Name); ?>

                    <?php echo e($collection->Category); ?>

                    <?php echo e($collection->Banner); ?>

</p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    hehehehe
                </div>
    <div class="container-fluid">
        <div class="container">
            <ul class="nav nav-pills center-pills">
                <li class="nav-item">
                    <a href="<?php echo e(url('/account/Music')); ?>" class="nav-link pill-head show active" data-bs-toggle="pill">Collected</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/account/Art')); ?>" class="nav-link pill-head" data-bs-toggle="pill">Created</a>
                </li>
                <li class="nav-item">
                    <a href="#art" class="nav-link pill-head" data-bs-toggle="pill">Favourited</a>
                </li>
                <li class="nav-item">
                    <a href="#collectibles" class="nav-link pill-head" data-bs-toggle="pill">Hidden</a>
                </li>
                <li class="nav-item">
                    <a href="#domains" class="nav-link pill-head" data-bs-toggle="pill">Activity</a>
                </li>
                <li class="nav-item">
                    <a href="#music" class="nav-link pill-head" data-bs-toggle="pill">Offfers</a>
                </li>
                <li class="nav-item">
                    <a href="#photography" class="nav-link pill-head" data-bs-toggle="pill">Listings</a>
                </li>
                
            </ul>

            

            <!-- <div id="top" class="container tab-pane fade">
                <div class="row">
                    <div class="col col-lg-4 col-sm-12">
                        <div class="nft-card">
                            <div class="nft-banner"><img style="object-fit: cover;" src="" alt=""></div>
                            <div class="nft-info">
                                <div class="nft-img"><img src="" alt=""></div>
                                <div class="nft-name"></div>
                                <div class="nft-author">
                                    <p class="by">by <span class="author-name"></span></p>
                                </div>
                                <span class="nft-desc"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-sm-12">
                        <div class="nft-card">
                            <div class="nft-banner"><img style="object-fit: cover;" src="" alt=""></div>
                            <div class="nft-info">
                                <div class="nft-img"><img src="" alt=""></div>
                                <div class="nft-name"></div>
                                <div class="nft-author">
                                    <p class="by">by <span class="author-name"></span></p>
                                </div>
                                <span class="nft-desc"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-sm-12">
                        <div class="nft-card">
                            <div class="nft-banner"><img style="object-fit: cover;" src="" alt=""></div>
                            <div class="nft-info">
                                <div class="nft-img"><img src="" alt=""></div>
                                <div class="nft-name"></div>
                                <div class="nft-author">
                                    <p class="by">by <span class="author-name"></span></p>
                                </div>
                                <span class="nft-desc"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
           
            <div class="tab-content">
                
            <?php 
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections ORDER BY Likes DESC LIMIT 15");
                $count = 0;
                echo '<div id="trending" class="container tab-pane fade show active">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div>'
                ?>

                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections ORDER BY Volume DESC LIMIT 15");
                $count = 0;
                echo '<div id="top" class="container tab-pane fade">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div>'
                ?>
                
                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections WHERE Category='Art'");
                $count = 0;
                echo '<div id="art" class="container tab-pane fade">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div>'
                ?>

                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections WHERE Category='Collectibles'");
                $count = 0;
                echo '<div id="collectibles" class="container tab-pane fade">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div>'
                ?>

                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections WHERE Category='Domain Names'");
                $count = 0;
                echo '<div id="domains" class="container tab-pane fade">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div></div>'
                ?>

                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections WHERE Category='Music'");
                $count = 0;
                echo '<div id="music" class="container tab-pane fade">';
                echo "testing music";
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div>'
                ?>
         
                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections WHERE Category='Photography'");
                $count = 0;
                echo '<div id="photography" class="container tab-pane fade">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div></div>'
                ?>
         
                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections WHERE Category='Sports'");
                $count = 0;
                echo '<div id="sports" class="container tab-pane fade">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div>'
                ?>
                
                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections WHERE Category='Trading'");
                $count = 0;
                echo '<div id="trading" class="container tab-pane fade">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div>'
                ?>

                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections WHERE Category='Utility'");
                $count = 0;
                echo '<div id="utility" class="container tab-pane fade">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div>'
                ?>

                <?php 
                $servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
} //include connecttion file to connect to database
                $query = mysqli_query($conn,"SELECT * FROM collections WHERE Category='Virtual'");
                $count = 0;
                echo '<div id="virtual" class="container tab-pane fade">';
                while($row = mysqli_fetch_array($query)) {
                    if($count%3==0) {
                        echo '<div class="row">';
                    }
                    echo '<div class="col col-lg-4 col-sm-12">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="' . $row['Banner'] . '" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-img"><img src="'. $row['Image'] . '" alt=""></div>
                                    <div class="nft-name">' . $row['Name'] . '</div>
                                    <div class="nft-author">
                                        <p class="by">by <span class="author-name">' . $row['Developer'] . '</span></p>
                                    </div>
                                    <span class="nft-desc">' . substr($row['Description'], 0, 105).'...' . '</span>
                                </div>
                            </div>
                        </div>';
                    $count += 1;
                    if($count%3==0) {
                        echo '</div>';
                    }
                }
                echo '</div>'
                ?>
            </div>
        </div>
    </div>

    <?php echo '</div></div>'?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/account.blade.php ENDPATH**/ ?>