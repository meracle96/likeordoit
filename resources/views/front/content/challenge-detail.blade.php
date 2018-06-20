@extends('front.partials.layout')
@section('title')
{{ $challenge->title }}
@endsection

@section('custom_css')
@endsection

@section('custom_js')
<script src="{{ asset('front/javascript/bootstrap-datetimepicker.fr.js') }}"></script>
<script  src="{{ asset('front/javascript/jquery.flexslider-min.js') }}"></script>
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
                    <h1 class="title">{{ $challenge->title }}</h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li> - </li>
                        <li><a href="/challenge">Challenge</a></li>
                        <li> - </li>
                        <li>{{ $challenge->title }}</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<!-- Blog posts -->
<section class="main-content page-listing">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="listing-wrap">
                    <div class="tf-gallery">
                        <div id="tf-slider">
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('front/images/services/f1.jpg') }}" alt="image">
                                </li>
                                <li>
                                    <img src="{{ asset('front/images/services/f1.jpg') }}" alt="image">
                                </li>
                                <li>
                                    <img src="{{ asset('front/images/services/f1.jpg') }}" alt="image">
                                </li>
                                <li>
                                    <img src="{{ asset('front/images/services/f1.jpg') }}" alt="image">
                                </li>
                            </ul>
                        </div>

                        <div id="tf-carousel">
                            <ul class="slides">
                                <li>
                                   <img src="{{ asset('front/images/services/s4.jpg') }}" alt="image">
                                </li>
                                <li>
                                   <img src="{{ asset('front/images/services/s3.jpg') }}" alt="image">
                                </li>
                                <li>
                                   <img src="{{ asset('front/images/services/s2.jpg') }}" alt="image">
                                </li>
                                <li>
                                   <img src="{{ asset('front/images/services/s1.jpg') }}" alt="image">
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.tf-gallery -->
                    <div class="content-listing">
                        <div class="text">
                            <h3 class="title-listing">Apricot West Britford Arch</h3>
                            <ul class="rating-listing">
                                <li>
                                    <div class="start-review">
                                        <span class="flat-start">
                                            <i class="ion-ios-star"></i>
                                            <i class="ion-ios-star"></i>
                                            <i class="ion-ios-star"></i>
                                            <i class="ion-ios-star"></i>
                                            <i class="ion-ios-star"></i>
                                        </span>
                                        <span class="like"> ( 3 reviewers )</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="heart">
                                        <i class="ion-android-favorite-outline"></i>
                                        <span>3</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="social-links">
                                        <span>Share:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <h3 class="title-listing">Features</h3>
                        <div class="wrap-list clearfix">
                            <ul class="list float-left">
                                <li><span><i class="fa fa-check"></i></span>Booking online</li>
                                <li><span><i class="fa fa-check"></i></span>Free ship</li>
                            </ul>
                            <ul class="list float-left">
                                <li><span><i class="fa fa-check"></i></span>Booking online</li>
                                <li><span><i class="fa fa-check"></i></span>Booking online</li>
                            </ul>
                        </div>
                        <div class="list-tab">
                            <h3 class="title-listing">Our Menu</h3>
                            <div class="flat-tabs" data-effect="fadeIn">
                                <ul class="menu-tab clearfix">
                                    <li class="active"><a href="#">Vegetarian</a></li>
                                    <li class=""><a href="#">Tacos</a></li>
                                    <li class=""><a href="#">Burritos</a></li>
                                    <li class=""><a href="#">Specialties</a></li>
                                    <li class=""><a href="#">Breakfast</a></li>
                                </ul><!-- /.menu-tab -->
                                <div class="content-tab">
                                    <div class="content-inner active">
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t1.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Nellara</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $10.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t2.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Quesarito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $2.49
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t3.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">XXL Grilled Stuft Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $3.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t4.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Cantina Power Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $3.79
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-inner">
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t4.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Cantina Power Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $7.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t2.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Quesarito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $5.49
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t3.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">XXL Grilled Stuft Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $14.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t1.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Nellara</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $5.79
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-inner">
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t3.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Nellara</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $15.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t2.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Quesarito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $2.49
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t1.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">XXL Grilled Stuft Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $3.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t4.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Cantina Power Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $3.79
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-inner">
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t4.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">food puttu</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $12.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t2.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Quesarito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $6.49
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t3.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">XXL Grilled Stuft Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $3.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t4.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Cantina Power Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $3.79
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-inner">
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t1.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Nellara</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $10.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t2.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Quesarito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $2.49
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t3.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">XXL Grilled Stuft Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $3.99
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-food clearfix">
                                            <div class="featured-food float-left">
                                                <span class="effect"><img src="{{ asset('front/images/services/t4.jpg') }}" alt=""></span>
                                            </div>
                                            <div class="content-food float-left">
                                                <h5><a href="#">Cantina Power Burrito</a></h5>
                                                <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake </p>
                                            </div>
                                            <div class="rate-food float-right">
                                                <div class="price">
                                                    $3.79
                                                </div>
                                                <div class="flat-start">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.content-tab -->
                            </div>
                        </div>
                        <div class="list-comment">
                            <h3 class="title-listing">2 Reviews</h3>
                            <div class="comments-area">
                                <ol class="comment-list">
                                    <li class="comment">
                                        <article class="comment-body clearfix">
                                            <div class="comment-author">
                                                <img src="{{ asset('front/images/services/c1.png') }}" alt="image">
                                            </div><!-- .comment-author -->
                                            <div class="comment-text">
                                                <div class="comment-metadata">
                                                    <h5><a href="#">Admin</a></h5>
                                                    <p class="day">12/01/2017</p> <div class="flat-start">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div><!-- .comment-metadata -->
                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                                                </div><!-- .comment-content -->
                                            </div><!-- /.comment-text -->
                                        </article><!-- .comment-body -->
                                    </li><!-- #comment-## -->
                                    <li class="comment">
                                        <article class="comment-body clearfix">
                                            <div class="comment-author">
                                                <img src="{{ asset('front/images/services/c2.png') }}" alt="image">
                                            </div><!-- .comment-author -->
                                            <div class="comment-text">
                                                <div class="comment-metadata">
                                                    <h5><a href="#">Admin</a></h5>
                                                    <p class="day">12/01/2017</p> <div class="flat-start">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div><!-- .comment-metadata -->
                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                                                </div><!-- .comment-content -->
                                            </div><!-- /.comment-text -->
                                        </article><!-- .comment-body -->
                                    </li><!-- #comment-## -->
                                    <li class="comment">
                                        <article class="comment-body clearfix">
                                            <div class="comment-author">
                                                <img src="{{ asset('front/images/services/c3.png') }}" alt="image">
                                            </div><!-- .comment-author -->
                                            <div class="comment-text">
                                                <div class="comment-metadata">
                                                    <h5><a href="#">Admin</a></h5>
                                                    <p class="day">12/01/2017</p> <div class="flat-start">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div><!-- .comment-metadata -->
                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                                                </div><!-- .comment-content -->
                                            </div><!-- /.comment-text -->
                                        </article><!-- .comment-body -->
                                    </li><!-- #comment-## -->
                                </ol><!-- .comment-list -->

                                <div class="comment-respond" id="respond">
                                    <h3 class="title-listing">Add a Review</h3>
                                    <form novalidate="" class="comment-form clearfix" id="commentform" method="post" action="#">
                                        <div class="wrap-input clearfix">
                                             <p class="comment-notes">
                                                <input type="email" placeholder="Your Email" size="30" value="" name="email">
                                            </p>
                                            <p class="comment-form-email">
                                                <input type="text" placeholder="Your Name" aria-required="true" name="title">

                                            </p>
                                        </div>
                                        <p class="comment-form-comment">
                                            <textarea class="" tabindex="4" placeholder="Preview" name="comment" required></textarea>
                                        </p>
                                        <div class="start-review">
                                            <span class="flat-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>
                                            <span> ( Your rating )</span>
                                        </div>
                                        <p class="form-submit">
                                            <button class="comment-submit effect-button">Send Review</button>
                                        </p>
                                    </form>
                                </div><!-- /.comment-respond -->
                            </div><!-- /.comments-area -->
                        </div>

                    </div>
                </div><!-- /.listing-wrap -->
            </div><!-- /.col-lg-9 -->
            <div class="col-lg-3">
                <div class="sidebar">
                  <div class="widget widget-contact text-center">
                      <h5 class="widget-title pull-left">Challenge Creator</h5>
                      <img src="{{ asset('uploads/profile') }}/{{ $challenge->user->photo }}" class="img-circle text-center" width="150" style="margin-bottom: 10px;">
                      <p class="">Name : {{ $challenge->user->name }}</p>
                      <p class="">Email : {{ $challenge->user->email }}</p>
                  </div>
                    <div class="widget widget_listing">
                        <h5 class="widget-title">Popular Challenge</h5>
                        <ul>
                          <?php $count = 0; ?>
                          @foreach($popularchallenges as $popularchallenge)
                          <?php if($count == 4) break; ?>
                            <li>
                                <div class="featured" style="margin-bottom:10px;">
                                  @if($popularchallenge->photo == 'default.jpg')
                                    @if($popularchallenge->difficulty == 'Very Easy')
                                    <a href="{{ route('front.challenge.show-with-slug', ['slug' => $popularchallenge->slug]) }}" class="effect"><img src="{{ asset('uploads/challenge/veryeasy.jpg') }}" alt="image"></a>
                                    @elseif($popularchallenge->difficulty == 'Easy')
                                    <a href="{{ route('front.challenge.show-with-slug', ['slug' => $popularchallenge->slug]) }}" class="effect"><img src="{{ asset('uploads/challenge/easy.jpg') }}" alt="image"></a>
                                    @elseif($popularchallenge->difficulty == 'Normal')
                                    <a href="{{ route('front.challenge.show-with-slug', ['slug' => $popularchallenge->slug]) }}" class="effect"><img src="{{ asset('uploads/challenge/normal.jpg') }}" alt="image"></a>
                                    @elseif($popularchallenge->difficulty == 'Hard')
                                    <a href="{{ route('front.challenge.show-with-slug', ['slug' => $popularchallenge->slug]) }}" class="effect"><img src="{{ asset('uploads/challenge/hard.jpg') }}" alt="image"></a>
                                    @else
                                    <a href="{{ route('front.challenge.show-with-slug', ['slug' => $popularchallenge->slug]) }}" class="effect"><img src="{{ asset('uploads/challenge/veryhard.jpg') }}" alt="image"></a>
                                    @endif
                                  @else
                                  <a href="{{ route('front.challenge.show-with-slug', ['slug' => $popularchallenge->slug]) }}" class="effect"><img src="{{ asset('uploads/challenge') }}/{{ $popularchallenge->photo }}" alt="image"></a>
                                  @endif
                                </div>
                                <div class="info-listing">
                                    <h6><a href="{{ route('front.challenge.show-with-slug', ['slug' => $popularchallenge->slug]) }}" >{{ $popularchallenge->title }}</a></h6>
                                    <div class="start-review">
                                        <span class="flat-start">
                                          @if($popularchallenge->difficulty == 'Very Easy')
                                          <i class="fa fa-star"></i>
                                          @elseif($popularchallenge->difficulty == 'Easy')
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          @elseif($popularchallenge->difficulty == 'Normal')
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          @elseif($popularchallenge->difficulty == 'Hard')
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          @else
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          @endif
                                        </span>
                                        @if($popularchallenge->difficulty == 'Very Easy')
                                        <a href="#" class="review">Very Easy</a>
                                        @elseif($popularchallenge->difficulty == 'Easy')
                                        <a href="#" class="review">Easy</a>
                                        @elseif($popularchallenge->difficulty == 'Normal')
                                        <a href="#" class="review">Normal</a>
                                        @elseif($popularchallenge->difficulty == 'Hard')
                                        <a href="#" class="review">Hard</a>
                                        @else
                                        <a href="#" class="review">Very Hard</a>
                                        @endif
                                        <p>{{ $popularchallenge->views }} Views</p>
                                    </div>
                                </div>
                            </li>
                            <?php $count++; ?>
                          @endforeach
                        </ul>
                    </div>
                </div><!-- /.sidebar -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="flat-row v1 bg-theme">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-section">
                    <h1 class="title">Newsletter</h1>
                    <div class="sub-title">
                        Subscribe now and receive weekly newsletter with
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
                        <div class="name-count">Listing</div>
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
                        <div class="name-count">Categories</div>
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
                        <div class="name-count">Users</div>
                        <div class="numb-count" data-to="1101" data-speed="2000" data-waypoint-active="yes">1101</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
