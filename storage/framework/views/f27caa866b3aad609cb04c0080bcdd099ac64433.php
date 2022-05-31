
<?php $__env->startSection('main-section'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/rankings.css')); ?>" />
<body>

<div id="heading_container">
        <h1 id="h1_top_nfts">Top NFTs</h1>
        <p id="ranking_description">The top NFTs on OpenSea, ranked by volume, floor price and other statistics.</p>
        <div class="btn-grp">
            <?php
            if(!isset($_SESSION['Category'])){
                $_SESSION['Category']="All Categories";

            }
            else{
                $Category=$_SESSION['Category'];
                if(isset($_POST['a'])){
                    $Category="All Categories";
                }
                elseif(isset($_POST['b'])){
                    $Category="New";
                }
                elseif(isset($_POST['c'])){
                    $Category="Art";
                }
                elseif(isset($_POST['d'])){
                    $Category="Collectibles";
                }
                elseif(isset($_POST['e'])){
                    $Category="Domain Names";
                }
                elseif(isset($_POST['f'])){
                    $Category="Music";
                }
                elseif(isset($_POST['g'])){
                    $Category="Photography";
                }
                elseif(isset($_POST['h'])){
                    $Category="Sports";
                }
                elseif(isset($_POST['i'])){
                    $Category="Trading";
                }
                elseif(isset($_POST['j'])){
                    $Category="Utility";
                }
                elseif(isset($_POST['k'])){
                    $Category="Virtual";
                }
                $_SESSION['Category']=$Category;
            }
            
            echo '<span class="dropdown-center" id="filters">
            <button id="categories_btn"
                class="btn btn-light btn-secondary dropdown-toggle btn-outline-secondary btn-lg" type="button"
                id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">'.$_SESSION['Category'].'
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
            <form method="post" >
            <li><input class="dropdown-item" name="a" type="submit" value="All Categories"></li>
            <li><input class="dropdown-item" name="b" type="submit" value="New"></input></li>
            <li><input class="dropdown-item" name="c" type="submit" value="Art"></input></li>
            <li><input class="dropdown-item" name="d" type="submit" value="Collections"></input></li>
            <li><input class="dropdown-item" name="e" type="submit" value="Domain Names"></input></li>
            <li><input class="dropdown-item" name="f" type="submit" value="Music"></input></li>
            <li><input class="dropdown-item" name="g" type="submit" value="Photography"></li>
            <li><input class="dropdown-item" name="h" type="submit" value="Sports"></input></li>
            <li><input class="dropdown-item" name="i" type="submit" value="Trading"></input></li>
            <li><input class="dropdown-item" name="j" type="submit" value="Utility"></input></li>
            <li><input class="dropdown-item" name="k" type="submit" value="Vitual"></input></li>
            </form>
            </ul>
        </span>';
        
         
            
            if(!isset($_SESSION["Items"])){
                $_SESSION["Items"]='All Items';
                $_SESSION["Item_lower_val"]=0.0;
                $_SESSION["Item_upper_val"]=NULL;
            }
            else{
                $Items=$_SESSION["Items"];
                $Item_lower_val=$_SESSION["Item_lower_val"];
                $Item_upper_val=$_SESSION["Item_upper_val"];
                
                if (isset($_POST['one'])) {
                    $Items='All Items';
                    $Item_lower_val=0.0;
                    $Item_upper_val=NULL;
                }
                elseif(isset($_POST['two'])){
                    $Items='Items: 0K - 1K';
                    $Item_lower_val=0.0;
                    $Item_upper_val=1000.0;
                }
                elseif (isset($_POST['three'])){
                    $Items='Items: 1K - 2K';
                    $Item_lower_val=1000.0;
                    $Item_upper_val=2000.0;
                }
                elseif (isset($_POST['four'])){
                    $Items='Items: 2K - 3K';
                    $Item_lower_val=2000.0;
                    $Item_upper_val=3000.0;
                }
                elseif (isset($_POST['five'])){
                    $Items='Items: 3K - 4K';
                    $Item_lower_val=3000.0;
                    $Item_upper_val=4000.0;
                }
                elseif (isset($_POST['six'])){
                    $Items='Items > 4K';
                    $Item_lower_val=4000.0;
                    $Item_upper_val=NULL;
                }
                $_SESSION["Items"]=$Items;
                $_SESSION["Item_lower_val"]=$Item_lower_val;
                $_SESSION["Item_upper_val"]=$Item_upper_val;
            }
            
            echo'<span class="dropdown-center" id="filters">
            <button id="time_btn" class="btn btn-light btn-secondary dropdown-toggle btn-outline-secondary btn-lg"
                type="button" id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                '.$_SESSION['Items'].'</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
                <form method="post" >
                <li><input class="dropdown-item" name="one" type="submit" value="All Items"></li>
                <li><input class="dropdown-item" name="two" type="submit" value="Items: 0K - 1K"></input></li>
                <li><input class="dropdown-item" name="three" type="submit" value="Items: 1K - 2K"></input></li>
                <li><input class="dropdown-item" name="four" type="submit" value="Items: 2K - 3K"></input></li>
                <li><input class="dropdown-item" name="five" type="submit" value="Items: 3K - 4K"></input></li>
                <li><input class="dropdown-item" name="six" type="submit" value="Items &gt 4K"></input></li>
                </form>
            </ul>

        </span>';

        if(!isset($_SESSION["Owners"])){
            $_SESSION["Owners"]='All Owners';
            $_SESSION["Owner_lower_val"]=0.0;
            $_SESSION["Owner_upper_val"]=NULL;
        }
        else{
            $Owners=$_SESSION["Owners"];
            $Owner_lower_val=$_SESSION["Owner_lower_val"];
            $Owner_upper_val=$_SESSION["Owner_upper_val"];
            
            if (isset($_POST['seven'])) {
                $Owners='All Owners';
                $Owner_lower_val=0.0;
                $Owner_upper_val=NULL;
            }
            elseif(isset($_POST['eight'])){
                $Owners='Owners: 0K - 1K';
                $Owner_lower_val=0.0;
                $Owner_upper_val=1000.0;
            }
            elseif (isset($_POST['nine'])){
                $Owners='Owners: 1K - 2K';
                $Owner_lower_val=1000.0;
                $Owner_upper_val=2000.0;
            }
            elseif (isset($_POST['ten'])){
                $Owners='Owners: 2K - 3K';
                $Owner_lower_val=2000.0;
                $Owner_upper_val=3000.0;
            }
            elseif (isset($_POST['eleven'])){
                $Owners='Owners: 3K - 4K';
                $Owner_lower_val=3000.0;
                $Owner_upper_val=4000.0;
            }
            elseif (isset($_POST['twelve'])){
                $Owners='Owners > 4K';
                $Owner_lower_val=4000.0;
                $Owner_upper_val=NULL;
            }
            $_SESSION["Owners"]=$Owners;
            $_SESSION["Owner_lower_val"]=$Owner_lower_val;
            $_SESSION["Owner_upper_val"]=$Owner_upper_val;
        }
            echo '<span class="dropdown-center" id="filters">
            <button id="chains_btn" class="btn btn-light btn-secondary dropdown-toggle btn-outline-secondary btn-lg"
                type="button" id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                '.$_SESSION["Owners"].'
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
            <form method="post" >
                <li><input class="dropdown-item" name="seven" type="submit" value="All Owners"></li>
                <li><input class="dropdown-item" name="eight" type="submit" value="Owners: 0K - 1K"></input></li>
                <li><input class="dropdown-item" name="nine" type="submit" value="Owners: 1K - 2K"></input></li>
                <li><input class="dropdown-item" name="ten" type="submit" value="Owners: 2K - 3K"></input></li>
                <li><input class="dropdown-item" name="eleven" type="submit" value="Owners: 3K - 4K"></input></li>
                <li><input class="dropdown-item" name="twelve" type="submit" value="Owners &gt 4K"></input></li>
                </form>
            </ul>
        </span>';
            ?>
            
        </div>
    </div>
    <div id="ranking-list">
        <div id="t-head" class="d-flex mb-7">
            <div class="first-col me-auto p-2 text-start">Collection</div>
            <div class="none col-heading p-2 text-end">Volume</div>
            <div class="none col-heading p-2 text-end">24h %</div>
            <div class="none col-heading p-2 text-end">7d %</div>
            <div class="col-heading p-2 text-end">Floor Price</div>
            <div class="col-heading p-2 text-end">Owners</div>
            <div class="col-heading p-2 text-end">Items</div>
        </div>
        <hr>

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
}
      $query;
        $Category_string="";
        $Item_string="";
        $Owner_string="";
        //strings for sql query
        if($_SESSION['Category']=="All Categories"){
            $Category_string="";
        }
        else{
            $Category_string= ' AND ( Category=\''.$_SESSION['Category'] .'\')' ;
        }
        if(!isset($_SESSION["Item_upper_val"])){
            $Item_string='(Total >= '.$_SESSION['Item_lower_val'].')';
        }
        else{
            $Item_string='(Total >= '.$_SESSION['Item_lower_val'].') AND (Total <= '.$_SESSION['Item_upper_val'].')';
        }
        if(!isset($_SESSION["Owner_upper_val"])){
            $Owner_string=' AND (Owners >= '.$_SESSION['Owner_lower_val'].')';
        }
        else{
            $Owner_string=' AND (Owners >= '.$_SESSION['Owner_lower_val'].') AND (Owners <= '.$_SESSION['Owner_upper_val'].')';
        }
        $q='SELECT * FROM collections WHERE'. $Item_string .$Category_string . $Owner_string;
        $query = mysqli_query($conn,$q);
        $count = mysqli_num_rows($query);
        $i=1;
        while($row = mysqli_fetch_array($query)){
            echo '<div class="d-flex mb-7">
            <div class="first-col me-auto p-2 text-start">
                <span>
                '.$i.'
                </span>
                <img class="row-img" src="'.$row['Image'].'">
                <span>'.$row['Name'].'</span>
            </div>
            <div class="none col-heading p-2 text-end">
                <img class="vol" src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg">
                <span>'.$row['Volume'].'</span>
            </div>
            <div class="none col-heading p-2 text-end">---</div>
            <div class="none col-heading p-2 text-end">---</div>
            <div class="col-heading p-2 text-end">
                <img class="none vol" src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg">
                <span>'.$row['Floor'].'</span>
            </div>
            <div class="col-heading p-2 text-end">'.(float)$row['Owners']/1000 .'K</div>
            <div class="col-heading p-2 text-end">'. (float)$row['Total']/1000 . 'K</div>
        </div>
        <hr>';
        $i++;
        }
?>
    </div>

    </div>

</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/home.blade.php ENDPATH**/ ?>