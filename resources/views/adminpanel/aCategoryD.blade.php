@extends('adminlayouts')
@section('content')
    <div class="row nogutter">

        <div class="col-sm-2">
            @include('common.leftnavbar')
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-8 min-height">

            <h3>{{$aCategoryD->title}}</h3>
            <h4>{{$aCategoryD->category}}</h4>
            <hr>
            <img src="{{url($aCategoryD->photo)}}" alt="">

            <article style="margin-top: 10px;text-align: justify;">{{$aCategoryD->body}}</article>

            <a href="{{url('/category')}}" class="btn btn-info">Back</a>
        </div>
    </div>
@endsection