
@extends('main')
@section('content')

        <div class="row shironam">
            <div class="title-head">
                <div class="col-md-2 title-head-p">
                    <p>শিরোনাম</p>
                </div>
                <div class="col-md-10">
                    <div class="headline">
                        <p><marquee class="marquee">
                                @foreach($headline as $head)
                                    <span>{{$head->title}}</span>
                                    <span>......।</span>
                                @endforeach

                            </marquee></p>
                    </div>
                </div>
            </div>
        </div>





    <div class="row">
        <div class="col-md-9">
            @if(\Auth::check())
                <a class="link-t" href="{{url('/')}}">Back</a> / <a class="link-t" href="{{url('/category')}}">Blog Page</a>
            @else
                <a class="link-t" href="{{url('/')}}">পিছুনে</a>
            @endif
            <hr>

            <h1>{{$categoryDetiles->title}}</h1>
            <p><img style="height: 400px;width: 100%;" src="{{url($categoryDetiles->photo)}}" alt=""></p>
            <p><strong>{{$categoryDetiles->created_at}}</strong></p>
            <hr>
            <p class="blog-p">{{$categoryDetiles->body}}</p>

        </div>
        <div class="col-md-3 img-thumbnail">
            @include('common.rightside')
        </div>

    </div>
@endsection