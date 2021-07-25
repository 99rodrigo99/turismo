@extends('layouts.layout')
@section('content')
    <main>
        <section class="hero_single version_2">
            <div class="wrapper">
                <div class="container">
                    <h3>Busca tu mejor destino</h3>
                    <p>Disfruta tus vacaciones con la mejor empresa de turismo</p>
                    <form>
                        <div id="custom-search-input">
                            <div class="input-group">
                                <input type="text" class=" search-query" placeholder="Buscar">
                                <input type="submit" class="btn_search" value="Buscar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /hero_single -->

        <div class="container container-custom margin_80_0">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Los mejores planes turisticos</h2>
                <p>Te llevamos a disfrutar de los mejores destinos en el mundo.</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="tour-detail.html"><img src="img/tour_1.jpg" class="img-fluid" alt="" width="800"
                                    height="533">
                                <div class="read_more"><span>ver más</span></div>
                            </a>
                            <small>Cartagena</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Cartagena de indias</a></h3>
                            <p>Disfruta de tus vacaciones al lado de tu familia en las hermosas playas de cartagena.</p>
                            <span class="price">3 días / 2 noches</span>
                        </div>
                        <ul>
                            <li>Precio por persona</li>
                            <li>
                                <div class="score"><strong>$800.000</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
            </div>
            <!-- /carousel -->
            <p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">Ver todos los Tours</a></p>
            <hr class="large">
        </div>
        <!-- /container -->

        <div class="container container-custom margin_30_95">
            <section class="add_bottom_45">
                <div class="main_title_3">
                    <span><em></em></span>
                    <h2>Hospedate en los mmejores hoteles</h2>
                    <p>Siempre pensamos en la comodidad y descanso de nuestros clientes.</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="hotel-detail.html" class="grid_item">
                            <figure>
                                <img src="img/hotel_1.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <h3>Mariott Hotel</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /row -->
                <p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">Ver todos los Hoteles</a></p>
            </section>
            <!-- /section -->

            <div class="banner mb-0">
                <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                    <div>
                        <small>Aventurate</small>
                        <h3>Vive tu mejor<br>experiencia con la mejor agencia</h3>
                        <p>Actividades y descanso</p>
                        <a href="adventure.html" class="btn_1">Conoce nuestros planes</a>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <!-- /banner -->

        </div>
        <!-- /container -->

        <div class="bg_color_1">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h3>Blog</h3>
                    <p>Echale un vistaso a nuestras experiencias.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a class="box_news" href="index-6.html#0">
                            <figure><img src="img/news_home_1.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Mark Twain</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Pri oportere scribentur eu</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse
                                ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="index-6.html#0">
                            <figure><img src="img/news_home_2.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Jhon Doe</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Duo eius postea suscipit ad</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse
                                ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="index-6.html#0">
                            <figure><img src="img/news_home_3.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Luca Robinson</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Elitr mandamus cu has</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse
                                ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="index-6.html#0">
                            <figure><img src="img/news_home_4.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Paula Rodrigez</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Id est adhuc ignota delenit</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse
                                ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                </div>
                <!-- /row -->
                <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">Ver blog</a></p>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!-- /main -->
@endsection
