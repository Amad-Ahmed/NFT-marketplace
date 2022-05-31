@extends('layouts.main')
@section('main-section')

<link rel="stylesheet" href="/css/explore.css">
<link rel="stylesheet" href="/css/account.css">
<link rel="stylesheet" href="/css/detail.css">
@php
$user->WalletAddress = substr($user->WalletAddress, 0, 5).'....'.substr($user->WalletAddress, 38);
@endphp
<div>
    <div class="account-header">
        <div>
            <img class="account-banner" src="https://lh3.googleusercontent.com/E2L0w8teDd2IOHA_pdmrKxnJo4pQlpKRo0PebpBsicZuD2oJld-sItG2L7te_9srOb5XzsARhP0mo6zgoUhM9NRQHUtl24BQHxxpzQU=h200" alt="">
        </div>
        <div class="account-info">
            <div class="account-img"><img src="https://lh3.googleusercontent.com/XPbOCFUxXw5ZSK39hkX0_e7Yf89AgtKyWIUvA_VCW8lRsxwTcrpObMTIc343j7ldwNNOmi_9mnaTJ0oZS5eqQ0Wh6kJScZkHlNbc=s100" alt=""></div>
            <div class="account-name">
                <h1>{{$user->Username}}</h1>
            </div>
            <div>
                <button class="account-id">
                    <img class="eth" src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg">
                    <span class="wallet-address">{{$user->WalletAddress}}</span>
                </button>
            </div>
            <p class="join-date">Joined May 2022</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <ul class="nav nav-pills center-pills">
            <li class="nav-item">
                <a href="#collected" class="nav-link pill-head show active" data-bs-toggle="pill">Collected</a>
            </li>
            <li class="nav-item">
                <a href="#created" class="nav-link pill-head" data-bs-toggle="pill">Created</a>
            </li>
            <li class="nav-item">
                <a href="#favorites" class="nav-link pill-head" data-bs-toggle="pill">Favourited</a>
            </li>
            <li class="nav-item">
                <a href="#hidden" class="nav-link pill-head" data-bs-toggle="pill">Hidden</a>
            </li>
            <li class="nav-item">
                <a href="#activity" class="nav-link pill-head" data-bs-toggle="pill">Activity</a>
            </li>
            <li class="nav-item">
                <a href="#offers" class="nav-link pill-head" data-bs-toggle="pill">Offers</a>
            </li>
            <li class="nav-item">
                <a href="#listing" class="nav-link pill-head" data-bs-toggle="pill">Listings</a>
            </li>

        </ul>
        <div class="tab-content">
            <div id="collected" class="container tab-pane fade show active">
                <div class="nft-container">
                    @php
                    $count = 0;
                    @endphp
                    @for ($i=0; $i < 10 ; $i++)
                    @php
                    $fav = rand(20, 850);
                    @endphp
                    @if($count%4==0)
                    <div class="row">
                        @endif
                        <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                            <div class="nft-card">
                                <div class="nft-banner"><img style="object-fit: cover;" src="{{$collected[$i]['image_url']}}" alt=""></div>
                                <div class="nft-info">
                                    <div class="nft-creators">
                                        <div class="collection-name">Astra Collection</div>
                                        <div class="nft-name">{{$collected[$i]['name']}}</div>
                                    </div>
                                    <div class="bid-info">
                                        <div class="top-bid">Top Bid</div>
                                        @php
                                        $bid = round(rand(0, 100000000) / 10000000, 3);
                                        $time = rand(0, 24);
                                        @endphp
                                        <div class="bid-price"><img src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg" style="width: 14px; height: 14px; margin-right: 3px;">{{$bid}}</div>
                                        <div class="bid-time">{{$time}} hours left</div>
                                    </div>
                                </div>
                                <div class="user-actions">
                                    <div class="buy-btn"><span class="buy-text">BUY NOW</span></div>
                                    <div class="fav-btn"><span class="fav-amount">{{$fav}}</span><span class="fav-icon material-icons"> favorite_border </span></div>
                                </div>
                            </div>
                        </div>
                        @php
                        $count+=1;
                        @endphp
                        @if($count%4==0)
                    </div>
                    @endif
                    @endfor
                    @if($count%4!=0)
                </div>
                @endif
            </div>
        </div>
        <div id="created" class="container tab-pane fade">
            <div class="nft-container">
                @php
                $nftcounter = 0;
                $count = 0;
                @endphp
                @for ($i=11; $i < 17 ; $i++)
                @php
                $fav = rand(20, 850);
                @endphp
                @if($count%4==0)
                <div class="row">
                    @endif
                    <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                        <div class="nft-card">
                            <div class="nft-banner"><img style="object-fit: cover;" src="{{$created[$i]['image_url']}}" alt=""></div>
                            <div class="nft-info">
                                <div class="nft-creators">
                                    <div class="collection-name">Astra Collection</div>
                                    <div class="nft-name">{{$created[$i]['name']}}</div>
                                </div>
                                <div class="bid-info">
                                    <div class="top-bid">Top Bid</div>
                                    @php
                                    $bid = round(rand(0, 100000000) / 10000000, 3);
                                    $time = rand(0, 24);
                                    @endphp
                                    <div class="bid-price"><img src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg" style="width: 14px; height: 14px; margin-right: 3px;">{{$bid}}</div>
                                    <div class="bid-time">{{$time}} hours left</div>
                                </div>
                            </div>
                            <div class="user-actions">
                                <div class="buy-btn"><span class="buy-text">BUY NOW</span></div>
                                <div class="fav-btn"><span class="fav-amount">{{$fav}}</span><span class="fav-icon material-icons"> favorite_border </span></div>
                            </div>
                        </div>
                    </div>
                    @php
                    $count+=1;
                    $nftcounter+=1;
                    @endphp
                    @if($count%4==0)
                </div>
                @endif
                @endfor
                @if($count%4!=0)
            </div>
            @endif
           
        </div>
    </div>
    <div id="favorites" class="container tab-pane fade">
        <div class="nft-container">
            @php
            $count = 0;
            @endphp
            @for ($i=18; $i < 21 ; $i++)
            @php
            $fav = rand(20, 850);
            @endphp
            @if($count%4==0)
            <div class="row">
                @endif
                <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                    <div class="nft-card">
                        <div class="nft-banner"><img style="object-fit: cover;" src="{{$favorites[$i]['image_url']}}" alt=""></div>
                        <div class="nft-info">
                            <div class="nft-creators">
                                <div class="collection-name">Astra Collection</div>
                                <div class="nft-name">{{$favorites[$i]['name']}}</div>
                            </div>
                            <div class="bid-info">
                                <div class="top-bid">Top Bid</div>
                                @php
                                $bid = round(rand(0, 100000000) / 10000000, 3);
                                $time = rand(0, 24);
                                @endphp
                                <div class="bid-price"><img src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg" style="width: 14px; height: 14px; margin-right: 3px;">{{$bid}}</div>
                                <div class="bid-time">{{$time}} hours left</div>
                            </div>
                        </div>
                        <div class="user-actions">
                            <div class="buy-btn"><span class="buy-text">BUY NOW</span></div>
                            <div class="fav-btn"><span class="fav-amount">{{$fav}}</span><span class="fav-icon material-icons"> favorite_border </span></div>
                        </div>
                    </div>
                </div>
                @php
                $count+=1;
                @endphp
                @if($count%4==0)
            </div>
            @endif
            @endfor
            @if($count%4!=0)
        </div>
        @endif
    </div>
</div>
<div id="hidden" class="container tab-pane fade">
    <div class="nft-container">
        @php
        $count = 0;
        @endphp
        @for ($i=22; $i < 27 ; $i++)
        @php
        $fav = rand(20, 850);
        @endphp
        @if($count%4==0)
        <div class="row">
            @endif
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <div class="nft-card">
                    <div class="nft-banner"><img style="object-fit: cover;" src="{{$hidden[$i]['image_url']}}" alt=""></div>
                    <div class="nft-info">
                        <div class="nft-creators">
                            <div class="collection-name">Astra Collection</div>
                            <div class="nft-name">{{$hidden[$i]['name']}}</div>
                        </div>
                        <div class="bid-info">
                            <div class="top-bid">Top Bid</div>
                            @php
                            $bid = round(rand(0, 100000000) / 10000000, 3);
                            $time = rand(0, 24);
                            @endphp
                            <div class="bid-price"><img src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg" style="width: 14px; height: 14px; margin-right: 3px;">{{$bid}}</div>
                            <div class="bid-time">{{$time}} hours left</div>
                        </div>
                    </div>
                    <div class="user-actions">
                        <div class="buy-btn"><span class="buy-text">BUY NOW</span></div>
                        <div class="fav-btn"><span class="fav-amount">{{$fav}}</span><span class="fav-icon material-icons"> favorite_border </span></div>
                    </div>
                </div>
            </div>
            @php
            $count+=1;
            @endphp
            @if($count%4==0)
        </div>
        @endif
        @endfor
        @if($count%4!=0)
    </div>
    @endif
</div>
</div>
<div id="activity" class="container tab-pane fade">
    <div class="nft-container">
        @php
        $count = 0;
        @endphp
        @for ($i=28; $i < 35 ; $i++)
        @php
        $fav = rand(20, 850);
        @endphp
        @if($count%4==0)
        <div class="row">
            @endif
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <div class="nft-card">
                    <div class="nft-banner"><img style="object-fit: cover;" src="{{$activity[$i]['image_url']}}" alt=""></div>
                    <div class="nft-info">
                        <div class="nft-creators">
                            <div class="collection-name">Astra Collection</div>
                            <div class="nft-name">{{$activity[$i]['name']}}</div>
                        </div>
                        <div class="bid-info">
                            <div class="top-bid">Top Bid</div>
                            @php
                            $bid = round(rand(0, 100000000) / 10000000, 3);
                            $time = rand(0, 24);
                            @endphp
                            <div class="bid-price"><img src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg" style="width: 14px; height: 14px; margin-right: 3px;">{{$bid}}</div>
                            <div class="bid-time">{{$time}} hours left</div>
                        </div>
                    </div>
                    <div class="user-actions">
                        <div class="buy-btn"><span class="buy-text">BUY NOW</span></div>
                        <div class="fav-btn"><span class="fav-amount">{{$fav}}</span><span class="fav-icon material-icons"> favorite_border </span></div>
                    </div>
                </div>
            </div>
            @php
            $count+=1;
            @endphp
            @if($count%4==0)
        </div>
        @endif
        @endfor
        @if($count%4!=0)
    </div>
    @endif
</div>
</div>
<div id="offers" class="container tab-pane fade">
    <div class="nft-container">
        @php
        $count = 0;
        @endphp
        @for ($i=36; $i < 42 ; $i++)
        @php
        $fav = rand(20, 850);
        @endphp
        @if($count%4==0)
        <div class="row">
            @endif
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <div class="nft-card">
                    <div class="nft-banner"><img style="object-fit: cover;" src="{{$offers[$i]['image_url']}}" alt=""></div>
                    <div class="nft-info">
                        <div class="nft-creators">
                            <div class="collection-name">Astra Collection</div>
                            <div class="nft-name">{{$offers[$i]['name']}}</div>
                        </div>
                        <div class="bid-info">
                            <div class="top-bid">Top Bid</div>
                            @php
                            $bid = round(rand(0, 100000000) / 10000000, 3);
                            $time = rand(0, 24);
                            @endphp
                            <div class="bid-price"><img src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg" style="width: 14px; height: 14px; margin-right: 3px;">{{$bid}}</div>
                            <div class="bid-time">{{$time}} hours left</div>
                        </div>
                    </div>
                    <div class="user-actions">
                        <div class="buy-btn"><span class="buy-text">BUY NOW</span></div>
                        <div class="fav-btn"><span class="fav-amount">{{$fav}}</span><span class="fav-icon material-icons"> favorite_border </span></div>
                    </div>
                </div>
            </div>
            @php
            $count+=1;
            @endphp
            @if($count%4==0)
        </div>
        @endif
        @endfor
        @if($count%4!=0)
    </div>
    @endif
</div>
</div>
<div id="listing" class="container tab-pane fade">
    <div class="nft-container">
        @php
        $count = 0;
        @endphp
        @for ($i=42; $i < 49 ; $i++)
        @php
        $fav = rand(20, 850);
        @endphp
        @if($count%4==0)
        <div class="row">
            @endif
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <div class="nft-card">
                    <div class="nft-banner"><img style="object-fit: cover;" src="{{$listing[$i]['image_url']}}" alt=""></div>
                    <div class="nft-info">
                        <div class="nft-creators">
                            <div class="collection-name">Astra Collection</div>
                            <div class="nft-name">{{$listing[$i]['name']}}</div>
                        </div>
                        <div class="bid-info">
                            <div class="top-bid">Top Bid</div>
                            @php
                            $bid = round(rand(0, 100000000) / 10000000, 3);
                            $time = rand(0, 24);
                            @endphp
                            <div class="bid-price"><img src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg" style="width: 14px; height: 14px; margin-right: 3px;">{{$bid}}</div>
                            <div class="bid-time">{{$time}} hours left</div>
                        </div>
                    </div>
                    <div class="user-actions">
                        <div class="buy-btn"><span class="buy-text">BUY NOW</span></div>
                        <div class="fav-btn"><span class="fav-amount">{{$fav}}</span><span class="fav-icon material-icons"> favorite_border </span></div>
                    </div>
                </div>
            </div>
            @php
            $count+=1;
            @endphp
            @if($count%4==0)
        </div>
        @endif
        @endfor
        @if($count%4!=0)
    </div>
    @endif

</div>
</div>
</div>

@endsection