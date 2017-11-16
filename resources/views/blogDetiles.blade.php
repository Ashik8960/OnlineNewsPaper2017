
@extends('main')
@section('content')

    <div class="row">
       <div class="col-md-9">
           @if(\Auth::check())
            <a class="link-t" href="{{url('/')}}">Back</a> / <a class="link-t" href="{{url('/blog')}}">Blog Page</a>
           @else
               <a class="link-t" href="{{url('/')}}">Back</a>
           @endif

               <h1>{{$bDetiles->title}}</h1>
           <p><img style="height: 400px;width: 100%;" src="{{url($bDetiles->photo)}}" alt=""></p>
           <p><strong>{{$bDetiles->created_at}}</strong></p>
           <hr>
           <p class="blog-p">{{$bDetiles->body}}</p>

       </div>
        <div class="col-md-3 img-thumbnail">
            {{--<h5 class="well">Latest News</h5>--}}
            {{--@foreach($grobal as $gol)--}}
                {{--<a href="{{url('/blogDetiles/'.$gol->id)}}">--}}
                    {{--<p>{{ \Illuminate\Support\Str::words($gol->title, 7,'')  }}</p>--}}
                {{--</a>--}}
                {{--<p><img style="max-width: 100%; height: 98.5px;" src="{{url($gol->photo)}}" alt=""></p>--}}

                {{--<hr>--}}
            {{--@endforeach--}}
            <h5 class="well">Latest News</h5>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">সর্বশেষ খবর</a></li>
                <li><a data-toggle="tab" href="#menu1">শীর্ষ খবর</a></li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">

                    @foreach($grobal as $gol)
                        <div class="getup">
                        <a href="{{url('/blogDetiles/'.$gol->id)}}">
                            <h4>{{ \Illuminate\Support\Str::words($gol->title, 6,'...')  }}</h4>

                        <img style="max-width: 100%;" src="{{url($gol->photo)}}" alt="">
                        </a>

                        </div>

                    @endforeach

                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                </div>

            </div>
        </div>

    </div>
@endsection