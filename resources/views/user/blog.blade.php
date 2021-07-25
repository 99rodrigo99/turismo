@extends('layouts.layout')

@section('css')
    <!-- SPECIFIC CSS -->
    <link href="css/blog.css" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section class="hero_in general">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Panagea blog</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-12">
                    <article class="blog wow fadeIn">
                        <div class="row no-gutters">
                            <div class="col-lg-7">
                                <figure>
                                    <a href="blog-post.html"><img src="img/blog-1.jpg" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="post_info">
                                    <small>20 Nov. 2017</small>
                                    <h3><a href="blog-post.html">Nec nihil menandri appellantur ut</a></h3>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="img/thumb_blog.jpg" alt=""></div> Jessica Hoops
                                        </li>
                                        <li><i class="icon_comment_alt"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- /article -->

                    <article class="blog wow fadeIn">
                        <div class="row no-gutters">
                            <div class="col-lg-7">
                                <figure>
                                    <a href="blog-post.html"><img src="img/blog-2.jpg" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="post_info">
                                    <small>20 Nov. 2017</small>
                                    <h3><a href="blog-post.html">Nec nihil menandri appellantur ut</a></h3>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="img/thumb_blog.jpg" alt=""></div> Jessica Hoops
                                        </li>
                                        <li><i class="icon_comment_alt"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- /article -->

                    <article class="blog wow fadeIn">
                        <div class="row no-gutters">
                            <div class="col-lg-7">
                                <figure>
                                    <a href="blog-post.html"><img src="img/blog-3.jpg" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="post_info">
                                    <small>20 Nov. 2017</small>
                                    <h3><a href="blog-post.html">Nec nihil menandri appellantur ut</a></h3>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="img/thumb_blog.jpg" alt=""></div> Jessica Hoops
                                        </li>
                                        <li><i class="icon_comment_alt"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- /article -->

                    <article class="blog wow fadeIn">
                        <div class="row no-gutters">
                            <div class="col-lg-7">
                                <figure>
                                    <a href="blog-post.html"><img src="img/blog-4.jpg" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="post_info">
                                    <small>20 Nov. 2017</small>
                                    <h3><a href="blog-post.html">Nec nihil menandri appellantur ut</a></h3>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="img/thumb_blog.jpg" alt=""></div> Jessica Hoops
                                        </li>
                                        <li><i class="icon_comment_alt"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- /article -->

                    <nav aria-label="...">
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                                <a class="page-link" href="blog.html#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="blog.html#">1</a></li>
                            <li class="page-item"><a class="page-link" href="blog.html#">2</a></li>
                            <li class="page-item"><a class="page-link" href="blog.html#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="blog.html#">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /pagination -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
@endsection
