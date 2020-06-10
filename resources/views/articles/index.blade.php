@extends('layout')
@section('articles')
    <div class="container ">
        <div class="row pt-2">
            <div class="col-md-9 col-sm-12 ">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-8 ">
                            <a href=""><h1>Title</h1></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur distinctio
                                eligendi illum molestias nulla odio optio, quasi rem repudiandae!
                            </p>
                        </div>
                        <div class="col-1 d-flex align-items-center justify-content-center border-left border-info">
                            <h1>1</h1>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-center">
                            <img src="img/need.jpg" alt="" class="img-thumbnail d-flex">
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-3  d-md-flex d-none border-round">
                <div class="col-12  justify-content-center d-flex flex-column">
                    <div class="dropdown-platform py-2 ">
                        <button class="btn btn-outline-success dropdown-toggle btn-block" data-toggle="dropdown">All
                            Platform
                        </button>
                        <div class="dropdown-menu btn-block py-2 ">
                            <a href="#" class="dropdown-item dropdown-item  text-center">PC</a>
                            <a href="#" class="dropdown-item dropdown-item text-center">PS4</a>
                            <a href="#" class="dropdown-item dropdown-item  text-center">XBOX</a>
                        </div>
                    </div>
                    <div class="dropdown-gener">
                        <button class="btn btn-outline-success dropdown-toggle btn-block" data-toggle="dropdown">
                            All Gener
                        </button>
                        <div class="dropdown-menu btn-block">
                            <a href="#" class="dropdown-item dropdown-item text-center">2D</a>
                            <a href="#" class="dropdown-item dropdown-item text-center">3D</a>
                            <a href="#" class="dropdown-item dropdown-item text-center">PixelArt</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
