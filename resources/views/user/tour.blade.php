@extends('layouts.layout')

@section('content')
<main>
		
    <section class="hero_in tours">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Paris tours grid</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    
    <div class="filters_listing sticky_horizontal">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <div class="switch-field">
                        <input type="radio" id="all" name="listing_filter" value="all" checked>
                        <label for="all">All</label>
                        <input type="radio" id="popular" name="listing_filter" value="popular">
                        <label for="popular">Popular</label>
                        <input type="radio" id="latest" name="listing_filter" value="latest">
                        <label for="latest">Latest</label>
                    </div>
                </li>
                <li>
                    <div class="layout_view">
                        <a href="tours-grid.html#0" class="active"><i class="icon-th"></i></a>
                        <a href="tours-list-isotope.html"><i class="icon-th-list"></i></a>
                    </div>
                </li>
                <li>
                    <a class="btn_map" data-toggle="collapse" href="tours-grid.html#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /filters -->
    
    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60_35">
        
    <div class="wrapper-grid">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid">
                    <figure>
                        <a href="tours-grid.html#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="img/tour_1.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Historic</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Arc Triomphe</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$54</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /box_grid -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid">
                    <figure>
                        <a href="tours-grid.html#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="img/tour_2.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Churches</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Notredam</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$124</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /box_grid -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid">
                    <figure>
                        <a href="tours-grid.html#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="img/tour_3.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Historic</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Versailles</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$25</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /box_grid -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid">
                    <figure>
                        <a href="tours-grid.html#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="img/tour_4.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Museum</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Pompidue Museum</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$45</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 2h 30min</li>
                        <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /box_grid -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid">
                    <figure>
                        <a href="tours-grid.html#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="img/tour_5.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Walking</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Tour Eiffel</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$65</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /box_grid -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid">
                    <figure>
                        <a href="tours-grid.html#0" class="wish_bt"></a>
                        <a href="tour-detail.html"><img src="img/tour_6.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>Museum</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="tour-detail.html">Louvre Museum</a></h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                        <span class="price">From <strong>$95</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.8</strong></div></li>
                    </ul>
                </div>
            </div>
            <!-- /box_grid -->
        </div>
        <!-- /row -->
        </div>
        <!-- /wrapper-grid -->
        
        <p class="text-center"><a href="tours-grid.html#0" class="btn_1 rounded add_top_30">Load more</a></p>
        
    </div>
    <!-- /container -->
    
    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-md-4">
                    <a href="tours-grid.html#0" class="boxed_list">
                        <i class="pe-7s-help2"></i>
                        <h4>Need Help? Contact us</h4>
                        <p>Cum appareat maiestatis interpretaris et, et sit.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="tours-grid.html#0" class="boxed_list">
                        <i class="pe-7s-wallet"></i>
                        <h4>Payments</h4>
                        <p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="tours-grid.html#0" class="boxed_list">
                        <i class="pe-7s-note2"></i>
                        <h4>Cancel Policy</h4>
                        <p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
                    </a>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
    
</main>
<!--/main-->
@endsection