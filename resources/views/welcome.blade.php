@extends('main')
@section('content')
  <div class="row">
         <div class="col-md-9">
             <div class="img-thumbnail margin-b" style="width: 100%">
                 <a style="color: #000;text-decoration: none;" href="{{url('/blogDetiles/'.$last->id)}}">

                     <h1 style="font-weight: normal;">{{ \Illuminate\Support\Str::words($last->title, 5,'....')  }}</h1>

                     <p><img style="width: 100%;height: 400px;" src="{{url($last->photo)}}" alt=""></p>
                     <p>{{ \Illuminate\Support\Str::words($last->body, 45,'....')  }}</p>
                     <p><strong>{{$last->created_at}}</strong></p>
                 </a>

             </div>

             @foreach(array_chunk($blogs->all(),3) as $row)
             <div class="row">
                 @foreach($row as $blog)
                     <div class="col-md-4">
                         <div class="ashik">

                                 <div class="khan">
                                     <img src="{{url($blog->photo)}}" style="max-width:100%;height: 140px;min-width: 262px;" alt="">
                                     <a style="color:#000;text-decoration: none;" class="" href="{{url('/blogDetiles/'.$blog->id)}}">
                                     <h2 style="font-size: 16px;font-weight:100;line-height: 22px;">{{ \Illuminate\Support\Str::words($blog->title, 7,'....')  }}</h2>
                                     {{--<p>{{ \Illuminate\Support\Str::words($blog->body, 15,'....')  }}</p>--}}


                                 </div>
                             </a>
                             <p><small><strong>{{$blog->created_at->format('h:i:s  /D-M-Y ')}}</strong></small></p>
                         </div>
                         <hr>
                     </div><!--/.col-xs-6.col-lg-4-->
                 @endforeach

             </div>
             @endforeach
            <div class="col-md-12 text-center">
                {{$blogs->links()}}
            </div>

         </div>



         <div class="col-md-3 img-thumbnail">
             <h5 class="well">News</h5>
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
     </div>

@endsection
