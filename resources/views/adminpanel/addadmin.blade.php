@extends('adminlayouts')
@section('content')
    <div class="row nogutter">

        <div class="col-sm-2">
            @include('common.leftnavbar')
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">

    <div class="page-header">
    <h2>Add Admin</h2>
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

    <form method="post" action="{{url('/signup')}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
    <div class="form-group col-sm-6">
    <label for="first_name">First Name</label>

    <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="Enter First Name..">
    <span class="text-danger">{{$errors->first('first_name')}}</span>
    </div>
    <div class="form-group col-sm-6">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Enter Last Name..">
    <span class="text-danger">{{$errors->first('last_name')}}</span>
    </div>
    </div>
    <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter Email Address..">
    <span class="text-danger">{{$errors->first('email')}}</span>
    </div>
    <div class="form-group">
    <label for="mobile_no">Mobile No</label>
    <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{old('mobile_no')}}" placeholder="Mobile No...">
    <span class="text-danger">{{$errors->first('mobile_no')}}</span>
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="password...">
    <span class="text-danger">{{$errors->first('password')}}</span>
    </div>
    <div class="form-group">
    <label for="password">Re-type Password</label>
    <input type="password" class="form-control" id="retype_password" name="retype_password" value="{{old('retype_password')}}" placeholder="retype password...">
    <span class="text-danger">{{$errors->first('retype_password')}}</span>
    </div>
    <div class="form-group">
    <label for="image">Photo</label>
    <input type="file" id="image" name="image"><br>
    <span class="text-danger">{{$errors->first('image')}}</span>
    </div>

    <button type="submit" class="btn btn-success btn-lg" name="signup">Sign up</button>
    </form>
</div>
</div>
@endsection