@extends('frontEnd.master')
@section('title')
    Grocery Store || Home
    @endsection
@section('content')
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    @foreach($sliders as $slider)
                    <li>
                        <div class="w3l_banner_nav_right_banner" style="background-image: url({{asset($slider->slider_image)}}); height:auto ;">
                            <h3>{{$slider->slider_text_one}}<span>{{$slider->slider_text_two}}</span>{{$slider->slider_text_three}}</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="{{asset('/frontEndAssets/')}}/css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="{{asset('/frontEndAssets/')}}/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
    <div class="clearfix"></div>
    </div>
    <!-- banner -->
    <div class="banner_bottom">
        <div class="wthree_banner_bottom_left_grid_sub">
        </div>
        <div class="wthree_banner_bottom_left_grid_sub1">
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="{{asset('/frontEndAssets/')}}/images/4.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_bottom_left_grid_pos">
                        <h4>Discount Offer <span>25%</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="{{asset('/frontEndAssets/')}}/images/5.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos">
                        <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="{{asset('/frontEndAssets/')}}/images/6.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos1">
                        <h3>Save <span>Upto</span> $10</h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Hot Offers</h3>
            <div class="agile_top_brands_grids">
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="tag"><img src="{{asset('/frontEndAssets/')}}/images/tag.png" alt=" " class="img-responsive" /></div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb">
                                            <a href="single.html"><img title=" " alt=" " src="{{asset('/frontEndAssets/')}}/images/1.png" /></a>
                                            <p>fortune sunflower oil</p>
                                            <h4>$7.99 <span>$10.00</span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="checkout.html" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                                                    <input type="hidden" name="amount" value="7.99" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>

                                            </form>

                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb">
                                            <a href="single.html"><img title=" " alt=" " src="{{asset('/frontEndAssets/')}}/images/3.png" /></a>
                                            <p>basmati rise (5 Kg)</p>
                                            <h4>$11.99 <span>$15.00</span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="basmati rise" />
                                                    <input type="hidden" name="amount" value="11.99" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="{{asset('/frontEndAssets/')}}/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="single.html"><img src="{{asset('/frontEndAssets/')}}/images/2.png" alt=" " class="img-responsive" /></a>
                                            <p>Pepsi soft drink (2 Ltr)</p>
                                            <h4>$8.00 <span>$10.00</span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Pepsi soft drink" />
                                                    <input type="hidden" name="amount" value="8.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="{{asset('/frontEndAssets/')}}/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="single.html"><img src="{{asset('/frontEndAssets/')}}/images/4.png" alt=" " class="img-responsive" /></a>
                                            <p>dogs food (4 Kg)</p>
                                            <h4>$9.00 <span>$11.00</span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="dogs food" />
                                                    <input type="hidden" name="amount" value="9.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //top-brands -->
    <!-- fresh-vegetables -->
    <div class="fresh-vegetables">
        <div class="container">
            <h3>Top Products</h3>
            <div class="w3l_fresh_vegetables_grids">
                <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                    <div class="w3l_fresh_vegetables_grid2">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/product')}}">All Brands</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/vegetables')}}">Vegetables</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/vegetables')}}">Fruits</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/softDrinks')}}">Juices</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/petFood')}}">Pet Food</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/breadBakery')}}">Bread & Bakery</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/households')}}">Cleaning</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/product')}}">Spices</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/product')}}">Dry Fruits</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{url('/product')}}">Dairy Products</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="{{asset('/frontEndAssets/')}}/images/8.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <div class="w3l_fresh_vegetables_grid1_rel">
                                <img src="{{asset('/frontEndAssets/')}}/images/7.jpg" alt=" " class="img-responsive" />
                                <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                    <div class="more m1">
                                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="{{asset('/frontEndAssets/')}}/images/10.jpg" alt=" " class="img-responsive" />
                            <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                                <h5>Special Offers</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="{{asset('/frontEndAssets/')}}/images/9.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="{{asset('/frontEndAssets/')}}/images/11.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="agileinfo_move_text">
                        <div class="agileinfo_marquee">
                            <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                        </div>
                        <div class="agileinfo_breaking_news">
                            <span> </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //fresh-vegetables -->
    @endsection