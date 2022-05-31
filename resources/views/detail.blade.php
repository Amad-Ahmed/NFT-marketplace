@extends('layouts.main')
@section('main-section')
<link rel="stylesheet" type="text/css" href="/css/detail.css" />


<div class="col collection-header">
    
</div>

<div class="detail-display">
  <div class="col collection-header">
    <div class="col banner-container">
        <div class="banner-wrapper">
            <div class="banner-image">
                <img class="collection-banner" src="{{substr($collection->Banner, 0, -5)}}=h4000" style="object-fit: cover;" alt="">
            </div>
        </div>
    </div>
  </div>
  <div class="collection-info">
    <div class="img-wrapper">
      <div class="col image-container">
          <div class="image-wrapper">
              <div class="collection-img">
                  <img class="collection-image" src="{{substr($collection->Image, 0, -5)}}" style="object-fit: cover;" alt="">
              </div>
          </div>
      </div>
    </div>
      <div class="collection-name"><h1>{{$collection->Name}}</h1></div>
      <div class="collection-dev">By <span style="font-weight:bold;">{{$collection->Developer}}</span></div>
      <div class="collection-details">
      <div class="collection-desc"><p>{{$collection->Description}}</p></div>
      <div class="collection-stats">
          <div class="col-stats">
            <div class="stat">
              <span class="stat-data">{{$collection->Total}}</span>
              <span class="stat-txt">items</span>
            </div>
            <div></div>
            <div class="stat">
              <span class="stat-data">{{$collection->Owners}}</span>
              <span class="stat-txt">owners</span>
            </div>
            <div></div>
            <div class="stat">
              <span class="stat-data"><img src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg" style="width: 16px; height: 16px; margin-right: 5px;">{{$collection->Floor}}</span>
              <span class="stat-txt">floor price</span>
            </div>
            <div></div>
            <div class="stat">
              <span class="stat-data"><img src="https://openseauserdata.com/files/6f8e2979d428180222796ff4a33ab929.svg" style="width: 16px; height: 16px; margin-right: 5px;">{{$collection->Volume}}</span>
              <span class="stat-txt">total volume</span>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="nft-container">
    @php
    $count = 0;
    @endphp
    @foreach($json as $nft)
      @php
        $fav = rand(20, 850);
      @endphp
      @if($count%4==0)
        <div class="row">
      @endif
      <div class="col-6 col-lg-3 col-md-4 col-sm-6">
      <div class="nft-card">
        <div class="nft-banner"><img style="object-fit: cover;" src="{{$nft['image_url']}}" alt=""></div>
        <div class="nft-info">
            <div class="nft-creators">
              <div class="collection-name">{{$nft['asset_contract']['name']}}</div>
              <div class="nft-name">{{$nft['name']}}</div>
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
          <div class="buy-btn" ><span class="buy-text">BUY NOW</span></div>
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
    @endforeach
            @if($count%4!=0)
                </div>
            @endif
    </div>
</div>
@endsection