@extends('layout')

{{---------------------------------------------
                    <<carousel>>
----------------------------------------------}}
@section('header')
    <div class="row header">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('hotArticle')

    {{---------------------------------------------
                      <<hot-article>>
    ----------------------------------------------}}
    <div class="container ">
        <div class="row  py-5 ">
            <div class="col-lg-3 col-md-6 hot-article"
                 data-aos="fade-up" data-aos-delay="200">
                <div class="hotArticle-img  mb-4 ">
                    <a href="#"><img src="img/assassins.jpg" alt="" class="img-fluid"></a>
                    <div class="article-info bg-dark text-center text-muted">
                        <a href=""><h4>assassins creed</h4></a>
                        <p>release 2020 aug</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4"
                 data-aos="fade-up"
                 data-aos-delay="200 ">
                <div class="hotArticle-img ">
                    <a href="#"><img src="img/assassins2.jpg" alt="" class="img-fluid"></a>
                    <div class="article-info bg-dark text-center text-muted">
                        <a href=""><h4>assassins creed</h4></a>
                        <p>release 2020 aug</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4"
                 data-aos="fade-up"
                 data-aos-delay="200 ">
                <div class="hotArticle-img">
                    <a href="#"><img src="img/lastous.jpg" alt="" class="img-fluid"></a>
                    <div class="article-info bg-dark text-center text-muted">
                        <a href=""><h4>the last of us</h4></a>
                        <p>release 2020 aug</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4"
                 data-aos="fade-up"
                 data-aos-delay="200 ">
                <div class="hotArticle-img">
                    <a href="#"><img src="img/need.jpg" alt="" class="img-fluid"></a>
                    <div class="article-info bg-dark text-center text-muted">
                        <a href=""><h4>Need For Speed</h4></a>
                        <p>release 2020 aug</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('onfire')

    {{---------------------------------------------
                      <<On-fire-title>>
    ----------------------------------------------}}
    <div class="row py-5">
        <div class="col-12 " data-aos="fade-right"
             data-aos-offset="300"
             data-aos-easing="ease-in-sine">
            <div class="display2 text-center"><h1>ON FIRE</h1>
                <span class="line w-75 align-items-center"></span>
            </div>
        </div>
    </div>
@endsection
@section('latestArticle')
{{---------------------------------------------
                  <<latest-article>>
----------------------------------------------}}
<section id="latestArticle">
    <hr class="w-75">
    <div class="row">
        <div class="col-12 pb-5">
            <h1 class="display-4 text-center"> Latest Article</h1>
        </div>
    </div>
    <hr class="w-75">
</section>
@endsection
@section('articles')
    <div class="container ">
        <div class="row no-gutters ">
            <div class="col-8 no-gutters">
                <div class="col-12  ">
                    <div class="row no-gutters">
                        <div class="col-4">
                            <img src="img/need.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-8 px-4 align-self-center">
                            <a href=""><h1>Title</h1></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur distinctio
                                eligendi illum molestias nulla odio optio, quasi rem repudiandae!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 top10-item ">
                <div class="row no-gutters justify-content-center">
                    <div class="col-2 top10 pl-4 ">
                        <a href="#">1</a>
                    </div>
                    <div class="col-6 top10 pl-4 justify-content-center">
                        <a href="#">need for speed</a>
                    </div>
                    <div class="col-4 top10 justify-content-center ">
                        <a href="#" >8</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection


