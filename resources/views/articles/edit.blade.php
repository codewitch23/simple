@extends('layout')
@section('content')
    <form method="POST" action="/articles/{{$article->id}}">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-10  ">
                    <h4>Create article</h4>
                    <div class="form-group " data-aos="fade-right"
                         data-aos-offset="300"
                         data-aos-easing="ease-in-sine">
                        <label for="title">Title</label>
                        <input type="text"
                               name="title"
                               id="title"
                               value="{{$article->title}}"
                               class="form-control  ">
{{--                        @if($errors->has('title'))--}}
{{--                            <p>--}}
{{--                                {{$errors->first('title')}}--}}
{{--                            </p>--}}
{{--                        @endif--}}
                    </div>
                    <div class="form-group" data-aos="fade-left"
                         data-aos-offset="200"
                         data-aos-easing="ease-in-sine">
                        <label for="excerpt">excerpt</label>
                        <textarea name="excerpt"
                                  id="excerpt"
                                  cols="30" rows="3"
                                  class="form-control">{{$article->excerpt}}
                        </textarea>
{{--                        @if($errors->has('excerpt'))--}}
{{--                            <p>{{$errors->first('excerpt')}}</p>--}}
{{--                        @endif--}}
                    </div>

                    <div class="form-group" data-aos="fade-right"
                         data-aos-offset="100"
                         data-aos-easing="ease-in-sine">
                        <label for="body">Body</label>
                        <textarea name="body"
                                  id="body"
                                  cols="30" rows="7"
                                  class="form-control">{{$article->excerpt}}
                        </textarea>
{{--                        @if ($errors->has('body'))--}}
{{--                            <p>--}}
{{--                                {{$errors->first('body')}}--}}
{{--                            </p>--}}
{{--                        @endif--}}
                        <button type="submit" class="btn btn-outline-success btn-block my-3"> Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
