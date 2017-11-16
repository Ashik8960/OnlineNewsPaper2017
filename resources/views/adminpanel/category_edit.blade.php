@extends('adminlayouts')
@section('content')
    <div class="row nogutter">

        <div class="col-sm-2">
            @include('common.leftnavbar')
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7">
            <div class="page-header">
                <h2>Category Post Update<small>Subtext for header</small></h2>
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

            <form method="post" action="{{url('/categoryEdit/'.$users->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Title</label>

                    <input type="text" class="form-control" id="title" name="title" value="{{$users->title}}" placeholder="title">
                    <span class="text-danger">{{$errors->first('title')}}</span>
                </div>
                <div class="form-group">
                    <label for="">Category News</label>
                    <select name="category" class="form-control">
                        <option value="{{$users->category}}">{{$users->category}}</option>
                        <option value="national">National</option>
                        <option value="politics">Politics</option>
                        <option value="sports">Sports</option>
                        <option value="economics">Economics</option>
                        <option value="international">International </option>
                        <option value="entertainment">Entertainment </option>
                        <option value="educations">Educations </option>
                        <option value="features">Features </option>
                        <option value="editor">Editor Pick </option>
                        <option value="others">Others </option>


                    </select>
                </div>

                <div class="form-group">
                    <label >Descption</label>
                    <textarea rows="4"  class="form-control"  name="body">{{$users->body}}</textarea>
                    <span class="text-danger">{{$errors->first('body')}}</span>
                </div>



                <div class="form-group">
                    <label for="image">Photo</label>
                    <input type="file" id="image" value="{{$users->photo}}" name="image"><br>
                    <span class="text-danger">{{$errors->first('image')}}</span>
                </div>

                <button type="submit" class="btn btn-success btn-lg">Create Category Post</button>
            </form>
        </div>
    </div>
@endsection