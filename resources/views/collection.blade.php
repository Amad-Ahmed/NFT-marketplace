@extends('layouts.main')
@section('main-section')
<link rel="stylesheet" type="text/css" href="/css/collection.css" />
<link rel="stylesheet" type="text/css" href="/css/explore.css" />

<div class="col collection-header">
    <div class="col banner-container">
        <div class="banner-wrapper">
            <div class="banner-image">
                <img class="collection-banner" src="{{substr($collection->Banner, 0, -5)}}=h4000" style="object-fit: cover;" alt="">
            </div>
        </div>
    </div>
    <div class="col header-container">
        <h1>Explore {{$collection->Name}}</h1>
        <div class="header-description text-center">{!!$collection->Description!!}</div>
    </div>
    <hr>
</div>
<div class="col collection-trending">
    <h3>Trending collections in {{$collection->Name}}</h3>
    <div class="container">
        @php
        $count = 0;
        @endphp
        @foreach($collections as $collection)
            @if($count%3==0)
                <div class="row">
            @endif
            <div class="col-12 col-lg-4 col-sm-12">
            <a href="/detail/{{$collection->slugName}}">
                <div class="nft-card">
                    <div class="nft-banner"><img style="object-fit: cover;" src="{{$collection->Banner}}" alt=""></div>
                    <div class="nft-info">
                        <div class="nft-img"><img src="{{$collection->Image}}" alt=""></div>
                        <div class="nft-name">{{$collection->Name}}</div>
                        <div class="nft-author">
                            <p class="by">by <span class="author-name">{{$collection->Developer}}</span></p>
                        </div>
                        <span class="nft-desc">{{Str::limit($collection->Description, 105)}}</span>
                    </div>
                </div>
            </a>
            </div>
            @php
            $count+=1;
            @endphp
            @if($count%3==0)
                </div>
            @endif
        @endforeach
            @if($count%3!=0)
                </div>
            @endif
    </div>
</div>
@endsection