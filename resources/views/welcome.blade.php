@extends('layout')
@section('content')
    @include('layouts.carousel')
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
    @include('layouts.hotArticle')

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
