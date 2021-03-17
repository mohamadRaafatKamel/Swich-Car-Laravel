@extends('layouts.site')

@section('title','design Page')

@section('content')


    <div class="page-content-product">
        <div class="main-product">
            <div class="container">
                <div class="row clearfix">
                    <div class="find-box">
                        <h1>أختار سيارتك
                            <br>و بدل الان</h1>
                        <h4>لا يوجد اسهل من هذا</h4>
                        <div class="product-sh">
                            <div class="col-sm-8">
                                <div class="form-sh">
                                    <input type="text" placeholder="ابحث عن سيارة" >
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-sh"> <a class="btn" href="#">بحث</a> </div>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="categories_link">
                        <a href="#">اختار شركه السيارة</a>
                    </div>
                    <div class="product-slidr">
                        <div class="slider">
                            @foreach($Brands as $Brand)
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <a href="#">
                                        <div class="box-img">
                                            <h4>{{ $Brand->name }}</h4>
                                            <img src="{{ asset($Brand->image) }}" alt="{{ $Brand->name }}" />
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="categories_link">
                        <a href="#">Browse all categories here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cat-main-box" style="direction: rtl">
        <div class="container">
            <div class="row panel-row">
                <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="images/xpann-icon.jpg" class="icon-small" alt="">
                            <h4>قم بالبدل في احال</h4>
                            <p>سيارة سيارة سيارة سيارة سيارة سيارة
                                سيارة سيارة سيارة سيارة سيارة سيارة
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="images/create-icon.jpg" class="icon-small" alt="">
                            <h4>اختر سيارة</h4>
                            <p>سيارة سيارة سيارة سيارة سيارة سيارة
                                سيارة سيارة سيارة سيارة سيارة سيارة
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="images/get-icon.jpg" class="icon-small" alt="">
                            <h4>اضف سيارتك</h4>
                            <p>سيارة سيارة سيارة سيارة سيارة سيارة
                                سيارة سيارة سيارة سيارة سيارة سيارة
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="main-products">
            <h2>اختار شركه السيارة</h2>
            <div class="product-slidr">
                <div class="slider">

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="productpage.html">
                            <div class="box-img">
                                <h4>Product</h4>
                                <img src="images/product/2.png" alt="" />
                            </div>
                        </a>
                    </div>



                    <div>
                        <div class="prod-box">
                            <div class="prod-i">
                                <img src="images/tr2.png" alt="#" />
                            </div>
                            <div class="prod-dit clearfix">
                                <div class="dit-t clearfix">
                                    <div class="left-ti">
                                        <h4>Treehouse Bed</h4>
                                        <p>By <span>Beko</span> under <span>Lights</span></p>
                                    </div>
                                    <a href="#">$1220</a>
                                </div>
                                <div class="dit-btn clearfix">
                                    <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                                    <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="prod-box">
                            <div class="prod-i">
                                <img src="images/tr3.png" alt="#" />
                            </div>
                            <div class="prod-dit clearfix">
                                <div class="dit-t clearfix">
                                    <div class="left-ti">
                                        <h4>Wood Sofaplatform</h4>
                                        <p>By <span>Beko</span> under <span>Lights</span></p>
                                    </div>
                                    <a href="#">$1220</a>
                                </div>
                                <div class="dit-btn clearfix">
                                    <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                                    <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="prod-box">
                            <div class="prod-i">
                                <img src="images/tr4.png" alt="#" />
                            </div>
                            <div class="prod-dit clearfix">
                                <div class="dit-t clearfix">
                                    <div class="left-ti">
                                        <h4>Wall Sticker</h4>
                                        <p>By <span>Beko</span> under <span>Lights</span></p>
                                    </div>
                                    <a href="#">$1220</a>
                                </div>
                                <div class="dit-btn clearfix">
                                    <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                                    <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="prod-box">
                            <div class="prod-i">
                                <img src="images/tr1.png" alt="#" />
                            </div>
                            <div class="prod-dit clearfix">
                                <div class="dit-t clearfix">
                                    <div class="left-ti">
                                        <h4>Treehouse Bed</h4>
                                        <p>By <span>Beko</span> under <span>Lights</span></p>
                                    </div>
                                    <a href="#">$1220</a>
                                </div>
                                <div class="dit-btn clearfix">
                                    <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                                    <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="prod-box">
                            <div class="prod-i">
                                <img src="images/tr2.png" alt="#" />
                            </div>
                            <div class="prod-dit clearfix">
                                <div class="dit-t clearfix">
                                    <div class="left-ti">
                                        <h4>Treehouse Bed</h4>
                                        <p>By <span>Beko</span> under <span>Lights</span></p>
                                    </div>
                                    <a href="#">$1220</a>
                                </div>
                                <div class="dit-btn clearfix">
                                    <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                                    <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="prod-box">
                            <div class="prod-i">
                                <img src="images/tr3.png" alt="#" />
                            </div>
                            <div class="prod-dit clearfix">
                                <div class="dit-t clearfix">
                                    <div class="left-ti">
                                        <h4>Treehouse Bed</h4>
                                        <p>By <span>Beko</span> under <span>Lights</span></p>
                                    </div>
                                    <a href="#">$1220</a>
                                </div>
                                <div class="dit-btn clearfix">
                                    <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                                    <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



{{--    <div>--}}
{{--        <div class="prod-box">--}}
{{--            <div class="prod-i">--}}
{{--                <img src="images/tr1.png" alt="#" />--}}
{{--            </div>--}}
{{--            <div class="prod-dit clearfix">--}}
{{--                <div class="dit-t clearfix">--}}
{{--                    <div class="left-ti">--}}
{{--                        <h4>Table with Lights</h4>--}}
{{--                        <p>By <span>Beko</span> under <span>Lights</span></p>--}}
{{--                    </div>--}}
{{--                    <a href="#">$1220</a>--}}
{{--                </div>--}}
{{--                <div class="dit-btn clearfix">--}}
{{--                    <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>--}}
{{--                    <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <div class="products_exciting_box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="exciting_box f_pd">
                        <img src="images/exciting_img-01.jpg" class="icon-small" alt="" />
                        <h4>Explore <strong>exciting</strong> and exotic products
                            tailored to you.
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris..
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                    <div class="exciting_box l_pd">
                        <img src="images/exciting_img-02.jpg" class="icon-small" alt="" />
                        <h4><strong>List your products on</strong> chamb and grow connections.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="start-free-box">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="main-start-box">
                        <div class="free-box-a clearfix">
                            <div class="col-md-6 col-sm-6">
                                <div class="left-a-f">
                                    <h3>A platform built for scale & expansion. Start for free.</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="right-a-f">
                                    <p>Over the comming years, way thet business through the web
                                        works will change at agreat - and chamb is the
                                        gamebreaker.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="main-start-box">
                    <div class="bg_img_left"><img src="images/bg_img1.png" alt="#" /></div>
                    <div class="container">
                        <div class="buyer-box clearfix">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="left-buyer">
                                    <img class="img-responsive" src="images/creat_pro.png" alt="#" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="right-buyer">
                                    <h4>buyer</h4>
                                    <h2>Empower your factory<br>
                                        <span>With a new lead Channel</span>
                                    </h2>
                                    <p>Never worry about sales or income ftom outbound
                                        channels. with chamb your store is directly
                                        connected to thousands of interested in your
                                        products.
                                    </p>
                                    <a href="#">Create a buyer account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="bg_img_right"><img src="images/bg_img1.png" alt="#" /></div>
                <div class="main-start-box">
                    <div class="container">
                        <div class="supplier clearfix">
                            <div class="col-md-5 col-sm-6">
                                <div class="left-supplier">
                                    <h4>supplier</h4>
                                    <h2>Grow your store <br><span>With a new sales channel</span></h2>
                                    <p>Never worry about sales or income ftom outbound
                                        channels. with chamb your store is directly
                                        connected to thousands of interested in your
                                        products.
                                    </p>
                                    .
                                    <a href="#">Create a supplier account</a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-6">
                                <div class="right-supplier">
                                    <img class="img-responsive" src="images/supplier-pc-img.png" alt="#" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
