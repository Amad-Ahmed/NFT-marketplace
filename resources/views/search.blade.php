@extends('layouts.main')
@section('main-section')
<link rel="stylesheet" type="text/css" href="/css/explore.css" />
<div class="container">
    @php
    $count = 0;
    @endphp
    @foreach($search as $collection)
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
@endsection