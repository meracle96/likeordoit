@extends('front.partials.layout')
@section('title')
All Challenges
@endsection

@section('content')
<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="section-overlay">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">All Challenges</h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li> - </li>
                        <li>Challenges</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<!-- Blog posts -->
<section class="main-content page-listing-full">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                      <h1>{{ $challenges->count() }} Challenges Found.</h1>
                      <h3>Want to search challenge by their difficulty ?</h3>
                      <button type="button" name="button" class="btn btn-success">Very Easy</button>
                      <button type="button" name="button" class="btn btn-primary">Easy</button>
                      <button type="button" name="button" class="btn btn-info">Normal</button>
                      <button type="button" name="button" class="btn btn-warning">Hard</button>
                      <button type="button" name="button" class="btn btn-danger">Very Hard</button>
                    </div>
                </div>
                <br><br>

                <div class="row">
                  @foreach($challenges as $challenge)
                    <div class="col-lg-4 col-sm-6">
                        <div class="flat-product">
                            <div class="featured-product">
                              @if($challenge->photo == 'default.jpg')
                                @if($challenge->difficulty == 'Very Easy')
                                <img src="{{ asset('uploads/challenge/veryeasy.jpg') }}" alt="image">
                                @elseif($challenge->difficulty == 'Easy')
                                <img src="{{ asset('uploads/challenge/easy.jpg') }}" alt="image">
                                @elseif($challenge->difficulty == 'Normal')
                                <img src="{{ asset('uploads/challenge/normal.jpg') }}" alt="image">
                                @elseif($challenge->difficulty == 'Hard')
                                <img src="{{ asset('uploads/challenge/hard.jpg') }}" alt="image">
                                @else
                                <img src="{{ asset('uploads/challenge/veryhard.jpg') }}" alt="image">
                                @endif
                              @else
                              <img src="{{ asset('uploads/challenge') }}/{{ $challenge->photo }}" alt="image">
                              @endif
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <div class="button-product float-left">
                                            <button type="button" class="flat-button" onclick="location.href='#'">{{ $challenge->difficulty }}</button>
                                        </div>
                                        <div class="start-review float-right">
                                            <a href="#" class="review">( 0 People Follow )</a>
                                        </div>
                                    </div>
                                    <div class="info-product">
                                      <a href="#" class="heart">
                                        <i class="ion-android-favorite-outline"></i>
                                      </a>
                                      <br>
                                        <h6 class="title"><a href="{{ route('front.challenge.show-with-slug', ['slug' => $challenge->slug]) }}">{{ $challenge->title }}</a></h6>
                                        <p>{{ str_limit($challenge->desc, 100) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content-product">
                                <div class="tm">
                                    TM
                                </div>
                                <div class="text">
                                    <p>{{ $challenge->user->name }}</p>
                                    <p>{{ $challenge->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="flat-row v1 bg-theme">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-section">
                    <h1 class="title">Subscribe</h1>
                    <div class="sub-title">
                        Subscribe now and receive new challenge in your email directly.
                    </div>
                </div>
                <form id="subscribe-form" class="flat-mailchimp" method="post" action="#" data-mailchimp="true">
                    <div class="field clearfix" id="subscribe-content">
                        <p class="wrap-input-email">
                            <input type="text" tabindex="2" id="subscribe-email" name="subscribe-email" placeholder="Your Email Here">
                        </p>
                        <p class="wrap-btn">
                            <button type="button" id="subscribe-button" class=" subscribe-submit effect-button" title="Subscribe now">SUBSCRIBE</button>
                        </p>
                    </div>
                    <div id="subscribe-msg"></div>
                </form>
            </div>
            <div class="col-lg-2">
                <div class="flat-counter text-center">
                    <div class="content-counter">
                        <div class="icon-count">
                            <i class="ion-waterdrop"></i>
                        </div>
                        <div class="name-count">Challenge</div>
                        <div class="numb-count" data-to="1897" data-speed="2000" data-waypoint-active="yes">1897</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="flat-counter text-center">
                    <div class="content-counter">
                        <div class="icon-count">
                            <i class="ion-pricetags"></i>
                        </div>
                        <div class="name-count">Completed Challenge</div>
                        <div class="numb-count" data-to="967" data-speed="2000" data-waypoint-active="yes">967</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="flat-counter text-center">
                    <div class="content-counter">
                        <div class="icon-count">
                            <i class="ion-ios-people"></i>
                        </div>
                        <div class="name-count">Registered Users</div>
                        <div class="numb-count" data-to="1101" data-speed="2000" data-waypoint-active="yes">1101</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
