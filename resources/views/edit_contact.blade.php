@extends('main')
@section('content')
 <div class="row">
        <div class="col-md-4">
            <h2>Update Information</h2>
            @if(session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session()->get('error')}}</div>
            @endif


            <form method="post" action="{{url('/signupEdit')}}">
                <div class="form-group">
                    {{csrf_field()}}
                    <input type="hidden" value="{{$submit->id}}" name="id">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="name" value="@if(old('name')){{old('name') }} @else {{ $submit->name}}@endif" class="form-control" id="exampleInputName" placeholder="Name">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" value="@if(old('email')){{old('email')}} @else{{$submit->email}}@endif" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputMobile">Mobile</label>
                    <input type="text" name="mobile" value="@if(old('mobile')){{old('mobile')}} @else{{$submit->mobile}}@endif" class="form-control" id="exampleInputMobile" placeholder="mobile">
                    <span class="text-danger">{{$errors->first('mobile')}}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Message</label>
                    <input type="text" name="message" value="@if(old('message')){{old('message')}} @else{{$submit->message}}@endif" class="form-control" id="exampleInputText" placeholder="message">
                    <span class="text-danger">{{$errors->first('message')}}</span>
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    </div>

@endsection()