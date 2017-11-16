@extends('adminlayouts')
@section('content')
    <div class="row nogutter">

        <div class="col-sm-2">
            @include('common.leftnavbar')
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7">
            <div class="page-header">
                <h2>Category Post <small>Subtext for header</small></h2>
            </div>

            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{session()->get('error')}}
                </div>
            @endif

            <form method="post" action="{{url('/blog')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Enter title..">
                        <span class="text-danger">{{$errors->first('title')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="body">Descption</label>
                        <textarea rows="5" type="text" class="form-control" id="body" name="body" value="{{old('body')}}"></textarea>
                        <span class="text-danger">{{$errors->first('body')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="image">Photo</label>
                        <input type="file" id="image" name="image" value="{{old('image')}}"><br>
                        <span class="text-danger">{{$errors->first('image')}}</span>
                    </div>
                </div>


                <button type="submit" class="btn btn-success btn-lg" name="signup">Create Post</button>
            </form>
        </div>
    </div>
@endsection