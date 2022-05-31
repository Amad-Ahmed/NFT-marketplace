
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Navbar -->
    <link rel="stylesheet" type="text/css" href="/css/navbar.css" />
        <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('.login-icon').addClass('visually-hidden');
        $('.account-icon').removeClass('visually-hidden');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@alch/alchemy-web3@latest/dist/alchemyWeb3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@walletconnect/web3-provider@1.7.1/dist/umd/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
<!--FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    <script type="text/javascript">
        var SearchBar=document.getElementById("searchBar");

            // Execute a function when the user presses a key on the keyboard
            SearchBar.addEventListener("keypress", function (event) {
                // If the user presses the "Enter" key on the keyboard
                if (event.key === "Enter") {
                    window.alert('f');
                }
            });
            
    </script>
    
</head>
<header class="header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-wrapper">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img class="imgsetting" src="/images/logoBG.png" alt="">Astra</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <form class="container-fluid formSetting" method="POST" action="<?php echo e(url('/search')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="input-group search-wrapper">
                                <input name="q" id="searchBar" type="search" class="form-control search-bar-astra"
                                    placeholder="Search items, Collections and Accounts" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <img src="/images/search.png">
                            </div>
                        </form>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle optionsSetting" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Explore
                            </a>
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo e(url('/explore')); ?>">All NFTs</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item " href="/collection/art">Art</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/collection/collectibles">Collectibles</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/collection/domain-names">Domain Names</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/collection/music">Music</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/collection/photography">Photography</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/collection/sports">Sports</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/collection/trading-cards">Trading Cards</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/collection/utility">Utility</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/collection/virtual-worlds">Virtual Worlds</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle optionsSetting" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Stats
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo e(url('/rankings')); ?>">Rankings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Activity</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle optionsSetting" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Help Center</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Platform Status</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Partners</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Gas-Free MarketPlace</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Taxes</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Blog</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Docs</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Newsletter</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active optionsSetting " aria-current="page" href="#">Create</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active optionsSetting" aria-current="page" href="<?php echo e(url('/login')); ?>"><span
                                    class="material-icons">
                                    account_circle
                                </span></a>
                            <a  class="nav-link active optionsSetting account-icon visually-hidden" aria-current="page" href="<?php echo e(url('/account')); ?>">
                                
                                <span class="">
                                    <img src="https://storage.googleapis.com/opensea-static/opensea-profile/4.png" style="width: 24 px; height: 24px; border-radius: 12px;">
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active optionsSetting " aria-current="page" href="<?php echo e(url('/login')); ?>"><span
                                    class="material-icons">
                                    account_balance_wallet
                                </span></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
</header>
<body>
<?php /**PATH C:\xampp\htdocs\web_project\resources\views/layouts/header.blade.php ENDPATH**/ ?>