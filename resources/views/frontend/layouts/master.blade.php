<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.partiel.head')
<body>
@include('frontend.layouts.partiel.header')
<!-- Header End====================================================================== -->

@include('frontend.layouts.partiel.slider')

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span3">
                <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="{{asset('front/images/ico-cart.png')}}" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu open"><a> ELECTRONICS [230]</a>
                        <ul>
                            <li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
                        </ul>
                    </li>
                    <li class="subMenu"><a> CLOTHES [840] </a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
                        </ul>
                    </li>
                    <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
                        </ul>
                    </li>
                    <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
                    <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
                    <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
                </ul>
                <br/>
                <div class="thumbnail">
                    <img src="{{asset('front/images/products/panasonic.jpg')}}')}}" alt="Bootshop panasonoc New camera"/>
                    <div class="caption">
                        <h5>Panasonic</h5>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div><br/>
                <div class="thumbnail">
                    <img src="{{asset('front/images/products/kindle.png')}}" title="Bootshop New Kindel" alt="Bootshop Kindel">
                    <div class="caption">
                        <h5>Kindle</h5>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div><br/>
                <div class="thumbnail">
                    <img src="{{asset('front/images/payment_methods.png')}}" title="Bootshop Payment Methods" alt="Payments Methods">
                    <div class="caption">
                        <h5>Payment Methods</h5>
                    </div>
                </div>
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <div class="well well-small">
                    <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="{{asset('front/images/products/b1.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="{{asset('front/images/products/b2.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="{{asset('front/images/products/b3.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="{{asset('front/images/products/b4.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="{{asset('front/images/products/5.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="{{asset('front/images/products/6.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/7.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/8.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/9.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/10.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/11.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/1.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/2.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/3.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/4.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="{{asset('front/images/products/5.jpg')}}" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>
                </div>
                <h4>Latest Products </h4>
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="{{asset('front/images/products/6.jpg')}}" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>

                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="{{asset('front/images/products/7.jpg')}}" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="{{asset('front/images/products/8.jpg')}}" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="{{asset('front/images/products/9.jpg')}}" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="{{asset('front/images/products/10.jpg')}}" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="{{asset('front/images/products/11.jpg')}}" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!-- Footer ================================================================== -->
@include('frontend.layouts.partiel.footer')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
@include('frontend.layouts.partiel.script')

<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
    <div id="themeContainer">
        <div id="hideme" class="themeTitle">Style Selector</div>
        <div class="themeName">Oregional Skin</div>
        <div class="images style">
            <a href="front/css/#" name="bootshop"><img src="{{asset('front/switch/images/clr/bootshop.png')}}" alt="bootstrap business templates" class="active"></a>
            <a href="front/css/#" name="businessltd"><img src="{{asset('front/switch/images/clr/businessltd.png')}}" alt="bootstrap business templates" class="active"></a>
        </div>
        <div class="themeName">Bootswatch Skins (11)</div>
        <div class="images style">
            <a href="front/css/#" name="amelia" title="Amelia"><img src="{{asset('front/switch/images/clr/amelia.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="spruce" title="Spruce"><img src="{{asset('front/switch/images/clr/spruce.png')}}" alt="bootstrap business templates" ></a>
            <a href="front/css/#" name="superhero" title="Superhero"><img src="{{asset('front/switch/images/clr/superhero.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="cyborg"><img src="{{asset('front/switch/images/clr/cyborg.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="cerulean"><img src="{{asset('front/switch/images/clr/cerulean.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="journal"><img src="{{asset('front/switch/images/clr/journal.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="readable"><img src="{{asset('front/switch/images/clr/readable.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="simplex"><img src="{{asset('front/switch/images/clr/simplex.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="slate"><img src="{{asset('front/switch/images/clr/slate.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="spacelab"><img src="{{asset('front/switch/images/clr/spacelab.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="united"><img src="{{asset('front/switch/images/clr/united.png')}}" alt="bootstrap business templates"></a>
            <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
        </div>
        <div class="themeName">Background Patterns </div>
        <div class="images patterns">
            <a href="front/css/#" name="pattern1"><img src="{{asset('front/switch/images/pattern/pattern1.png')}}" alt="bootstrap business templates" class="active"></a>
            <a href="front/css/#" name="pattern2"><img src="{{asset('front/switch/images/pattern/pattern2.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern3"><img src="{{asset('front/switch/images/pattern/pattern3.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern4"><img src="{{asset('front/switch/images/pattern/pattern4.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern5"><img src="{{asset('front/switch/images/pattern/pattern5.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern6"><img src="{{asset('front/switch/images/pattern/pattern6.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern7"><img src="{{asset('front/switch/images/pattern/pattern7.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern8"><img src="{{asset('front/switch/images/pattern/pattern8.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern9"><img src="{{asset('front/switch/images/pattern/pattern9.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern10"><img src="{{asset('front/switch/images/pattern/pattern10.png')}}" alt="bootstrap business templates"></a>

            <a href="front/css/#" name="pattern11"><img src="{{asset('front/switch/images/pattern/pattern11.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern12"><img src="{{asset('front/switch/images/pattern/pattern12.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern13"><img src="{{asset('front/switch/images/pattern/pattern13.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern14"><img src="{{asset('front/switch/images/pattern/pattern14.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern15"><img src="{{asset('front/switch/images/pattern/pattern15.png')}}" alt="bootstrap business templates"></a>

            <a href="front/css/#" name="pattern16"><img src="{{asset('front/switch/images/pattern/pattern16.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern17"><img src="{{asset('front/switch/images/pattern/pattern17.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern18"><img src="{{asset('front/switch/images/pattern/pattern18.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern19"><img src="{{asset('front/switch/images/pattern/pattern19.png')}}" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern20"><img src="{{asset('front/switch/images/pattern/pattern20.png')}}" alt="bootstrap business templates"></a>

        </div>
    </div>
</div>
<span id="themesBtn"></span>

<link rel="stylesheet" href="{{asset('front/switch/themeswitch.css')}}" type="text/css" media="screen" />
<script src="{{asset('front/switch/theamswitcher.js')}}" type="text/javascript" charset="utf-8"></script>
<!-- Themes switcher section end ========================================================================================== -->
</body>
</html>

