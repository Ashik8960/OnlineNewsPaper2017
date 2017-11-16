@extends('adminlayouts')
@section('content')
    <div class="row nogutter">

        <div class="col-md-2">
            @include('common.leftnavbar')
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <div class="page-header">
                <h2>Update Blog post</h2>
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

            <form method="post" action="{{url('/blogUpdate/'.$blog->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}" placeholder="Enter title..">
                        <span class="text-danger">{{$errors->first('title')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="body">Descption</label>
                        <textarea rows="5" class="form-control" id="body" name="body">{{$blog->body}}</textarea>
                        <span class="text-danger">{{$errors->first('body')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="image">Photo</label>
                        <input type="file" id="image" name="image" value="{{$blog->photo}}"><br>
                        <span class="text-danger">{{$errors->first('image')}}</span>
                    </div>
                </div>


                <button type="submit" class="btn btn-success btn-lg" name="signup">Update Post</button>
            </form>
        </div>
    </div>
@endsection