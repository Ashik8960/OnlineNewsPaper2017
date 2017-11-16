@extends('adminlayouts')
@section('content')
    <div class="row nogutter">

        <div class="col-sm-2">
            @include('common.leftnavbar')
        </div>
        <div class="col-md-1"></div>
        <div class="col-sm-8 min-height">

            <h3>{{$aBlogD->title}}</h3>
            <hr>
            <img src="{{url($aBlogD->photo)}}" alt="">

            <article style="margin-top: 10px;text-align: justify;">{{$aBlogD->body}}</article>

            <a href="{{url('/blog')}}" class="btn btn-info">Back</a>
        </div>
    </div>
@endsection