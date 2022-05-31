@extends('layouts.main')
@section('main-section')
<link rel="stylesheet" type="text/css" href="/css/explore.css" />
<div class="container-fluid">
        <div class="container">
            <h1 class="text-center explore">Explore Collections</h1>
            <ul class="nav nav-pills center-pills">
                <li class="nav-item">
                    <a href="#trending" class="nav-link pill-head show active" data-bs-toggle="pill">Trending</a>
                </li>
                <li class="nav-item">
                    <a href="#top" class="nav-link pill-head" data-bs-toggle="pill">Top</a>
                </li>
                <li class="nav-item">
                    <a href="#art" class="nav-link pill-head" data-bs-toggle="pill">Art</a>
                </li>
                <li class="nav-item">
                    <a href="#collectibles" class="nav-link pill-head" data-bs-toggle="pill">Collectibles</a>
                </li>
                <li class="nav-item">
                    <a href="#domain" class="nav-link pill-head" data-bs-toggle="pill">Domain Names</a>
                </li>
                <li class="nav-item">
                    <a href="#music" class="nav-link pill-head" data-bs-toggle="pill">Music</a>
                </li>
                <li class="nav-item">
                    <a href="#photography" class="nav-link pill-head" data-bs-toggle="pill">Photography</a>
                </li>
                <li class="nav-item">
                    <a href="#sports" class="nav-link pill-head" data-bs-toggle="pill">Sports</a>
                </li>
                <li class="nav-item">
                    <a href="#trading" class="nav-link pill-head" data-bs-toggle="pill">Trading Cards</a>
                </li>
                <li class="nav-item">
                    <a href="#utility" class="nav-link pill-head" data-bs-toggle="pill">Utility</a>
                </li>
                <li class="nav-item">
                    <a href="#virtual" class="nav-link pill-head" data-bs-toggle="pill">Virtual Worlds</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="trending" class="container tab-pane fade show active">
                        @foreach($trending as $collection)
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                            
                @php
                $count=0;
                @endphp
                <div id="top" class="container tab-pane fade">
                        @foreach($top as $collection)
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                @php
                $count=0;
                @endphp
                <div id="art" class="container tab-pane fade">
                        @foreach($art as $collection)
                            @if($count%3==0)
                                <div class="row">
                            @endif
                                <div class="col-12 col-lg-4 col-sm-12">
                                <a href="{{$collection->slugName}}">
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                @php
                $count=0;
                @endphp
                <div id="collectibles" class="container tab-pane fade">
                        @foreach($collectibles as $collection)
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                @php
                $count=0;
                @endphp
                <div id="domain" class="container tab-pane fade">
                        @foreach($domains as $collection)
                            @if($count%3==0)
                                <div class="row">
                            @endif
                            <div class="col-12 col-lg-4 col-sm-12">
                                <a href="/detail/{{$collection->slugName}}">
                                    <div class="nft-card">
                                        <div class="nft-banner"><img style="object-fit: cover;" src="{{substr($collection->Banner, 0, -5)}}" alt=""></div>
                                        <div class="nft-info">
                                            <div class="nft-img"><img src="{{substr($collection->Image, 0, -5)}}" alt=""></div>
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                @php
                $count=0;
                @endphp
                <div id="music" class="container tab-pane fade">
                        @foreach($music as $collection)
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                @php
                $count=0;
                @endphp
                <div id="photography" class="container tab-pane fade">
                        @foreach($photography as $collection)
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                @php
                $count=0;
                @endphp
                <div id="sports" class="container tab-pane fade">
                        @foreach($sports as $collection)
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                @php
                $count=0;
                @endphp
                <div id="trading" class="container tab-pane fade">
                        @foreach($trading as $collection)
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                @php
                $count=0;
                @endphp
                <div id="utility" class="container tab-pane fade">
                        @foreach($utility as $collection)
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
                @php
                $count=0;
                @endphp
                <div id="virtual" class="container tab-pane fade">
                        @foreach($virtual as $collection)
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
                            </div>
                            @if($count%3!=0)
                                </div>
                            @endif
            </div>

    </div></div>
</div>
@endsection