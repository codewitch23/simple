@extends('layout')
@section('content')
    <div class="row drak-back">
        <div class="col-lg-12 d-flex align-items-center justify-content-center overlay">
            <img src="/img/need.jpg" alt="" class="img-fluid ">
            <div class="content">
                <h1>{{$article->title}}</h1>
            </div>
        </div>
        <div class="container py-5">
            <div class="col-lg-10  mx-auto">
                <p class="d-flex">{{$article->excerpt}}</p>
                <p class="d-flex">{{$article->body}}</p>
            </div>
            @foreach($article->tag as $tag)
                <a href="/articles?tag={{$tag->name}}">{{$tag->name}} </a>
            @endforeach
        </div>

    </div>

@endsection
