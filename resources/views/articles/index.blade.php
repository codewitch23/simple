@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                @include('layouts.carousel')
            </div>
            <div class="col-4 border border-info d-flex flex-column align-items-center justify-content-center">
                <h1>score</h1>
                <p>
                <h1>The last Of Us</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto distinctio perspiciatis
                rerum. Ab doloribus eius quaerat, sapiente tempore voluptates!
                </p>
            </div>
        </div>
    </div>


    @include('layouts.hotArticle')
    <div class="container">
        <div class="grid">
            <div class="main-box border-right border-info ">
                @foreach($articles as $article)
                    <div class="inside-box ">
                        <a href="{{$article->path()}}"><h1>{{$article->title}}</h1></a>
                        <h1>1</h1>
                        <img src="img/need.jpg" alt="" class="img-thumbnail ">
                    </div>
                    <hr>
                @endforeach
            </div>

            <div class="side-box ">
                <div class="dropdown-platform py-2 ">
                    <button class="btn btn-outline-success dropdown-toggle btn-block" data-toggle="dropdown">All
                        Platform
                    </button>
                    <div class="dropdown-menu btn py-2 ">
                        @foreach($tags as $tag)
                        <a href="/articles/?tag={{$tag->name}}" class="dropdown-item dropdown-item  text-center">{{$tag->name}}</a>
                        @endforeach
                    </div>
                    <div class="dropdown-gener">
                        <button class="btn btn-outline-success dropdown-toggle btn-block" data-toggle="dropdown">
                            All Gener
                        </button>
                        <div class="dropdown-menu ">
                            <a href="#" class="dropdown-item dropdown-item text-center">2D</a>
                            <a href="#" class="dropdown-item dropdown-item text-center">3D</a>
                            <a href="#" class="dropdown-item dropdown-item text-center">PixelArt</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
