@extends('layouts.main')
@section('title','Trang chủ')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li class="active">Detail product</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!--  Product Details -->
                <div class="product product-details clearfix">
                    <div class="col-md-6">
                        <div id="product-main-view">
                            <div class="product-view">
                                <img src="{{ asset('/uploads/' .$product->avatar) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-body">
                            @if($product->old_price != 0)
                                <div class="product-label">
                                    <span>Sale</span>
                                    <span class="sale">{{ floor(($product->price/$product->old_price)*100) }}%</span>
                                </div>
                            @endif
                            <h2 class="product-name">{{ $product->title }}</h2>
                            @if($product->old_price == 0)
                                <h3 class="product-price">{{ number_format($product->price,0,'.','.') }} đ</h3>
                            @else
                                <h3 class="product-price">{{ number_format($product->price,0,'.','.') }} đ
                                    <del
                                        class="product-old-price">{{ number_format($product->old_price,0,'.','.') }}
                                        đ
                                    </del>
                                </h3>
                            @endif
                            <div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <a href="#">3 Review(s)</a>
                            </div>
                            <p><strong></strong></p>
                            <p><strong></strong></p>
                            <p>{{ $product->summary }}</p><br>
                            <div class="product-btns">
                                <a href="{{ url('/cart/' . $product->id) }}">
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                    </button>
                                </a>
                                <div class="pull-right">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="product-tab">
                            <ul class="tab-nav">
                                <li class="active"><a data-toggle="tab" href="#tab1">Mô tả tổng quát</a></li>
                                <li><a data-toggle="tab" href="#tab1">Details</a></li>
                                <li><a data-toggle="tab" href="#tab2">Reviews (3)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane fade in active">
                                    <p>{{ $product->content }}</p>
                                </div>
                                <div id="tab2" class="tab-pane fade in">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="product-reviews">
                                                <div class="single-review">
                                                    <div class="review-heading">
                                                        <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                        <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0
                                                                PM</a></div>
                                                        <div class="review-rating pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua.Ut enim ad minim veniam, quis nostrud exercitation
                                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis
                                                            aute
                                                            irure dolor in reprehenderit in voluptate velit esse cillum
                                                            dolore eu fugiat nulla pariatur.</p>
                                                    </div>
                                                </div>

                                                <div class="single-review">
                                                    <div class="review-heading">
                                                        <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                        <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0
                                                                PM</a></div>
                                                        <div class="review-rating pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua.Ut enim ad minim veniam, quis nostrud exercitation
                                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis
                                                            aute
                                                            irure dolor in reprehenderit in voluptate velit esse cillum
                                                            dolore eu fugiat nulla pariatur.</p>
                                                    </div>
                                                </div>

                                                <div class="single-review">
                                                    <div class="review-heading">
                                                        <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                        <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0
                                                                PM</a></div>
                                                        <div class="review-rating pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua.Ut enim ad minim veniam, quis nostrud exercitation
                                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis
                                                            aute
                                                            irure dolor in reprehenderit in voluptate velit esse cillum
                                                            dolore eu fugiat nulla pariatur.</p>
                                                    </div>
                                                </div>

                                                <ul class="reviews-pages">
                                                    <li class="active">1</li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="text-uppercase">Write Your Review</h4>
                                            <p>Your email address will not be published.</p>
                                            <form class="review-form">
                                                <div class="form-group">
                                                    <input class="input" type="text" placeholder="Your Name"/>
                                                </div>
                                                <div class="form-group">
                                                    <input class="input" type="email" placeholder="Email Address"/>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="input" placeholder="Your review"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-rating">
                                                        <strong class="text-uppercase">Your Rating: </strong>
                                                        <div class="stars">
                                                            <input type="radio" id="star5" name="rating"
                                                                   value="5"/><label for="star5"></label>
                                                            <input type="radio" id="star4" name="rating"
                                                                   value="4"/><label for="star4"></label>
                                                            <input type="radio" id="star3" name="rating"
                                                                   value="3"/><label for="star3"></label>
                                                            <input type="radio" id="star2" name="rating"
                                                                   value="2"/><label for="star2"></label>
                                                            <input type="radio" id="star1" name="rating"
                                                                   value="1"/><label for="star1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="primary-btn">Submit</button>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Product Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Picked For You</h2>
                    </div>
                </div>
                <!-- section title -->

            @foreach($products AS $product)
                <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            @if($product->old_price != 0)
                                <div class="product-label">
                                    <span>Sale</span>
                                    <span
                                        class="sale">{{ floor(100-($product->price/$product->old_price)*100) }}%</span>
                                </div>
                            @endif
                            <div class="product-thumb">
                                <img src="{{ asset('/uploads/'. $product->avatar) }}" alt="" height="150px">
                            </div>
                            <div class="product-body">
                                @if($product->old_price == 0)
                                    <h3 class="product-price">{{ number_format($product->price,0,'.','.') }} đ</h3>
                                @else
                                    <h3 class="product-price">{{ number_format($product->price,0,'.','.') }} đ
                                        <del
                                            class="product-old-price">{{ number_format($product->old_price,0,'.','.') }}
                                            đ
                                        </del>
                                    </h3>
                                @endif
                                <h2 class="product-name"><a href="{{ url('/product/'.\App\Helper::alias($product->title).'/'.$product->id) }}">{{ $product->title }}</a></h2>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <a href="{{ url('/cart/' . $product->id) }}">
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Thêm vào giỏ hàng
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                @endforeach
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
