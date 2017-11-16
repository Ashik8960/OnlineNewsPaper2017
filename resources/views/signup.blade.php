@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            {{--<div class="page-header">--}}
                {{--<h2>Signup <small>Subtext for header</small></h2>--}}
            {{--</div>--}}

            {{--@if(session()->has('success'))--}}
                {{--<div class="alert alert-success" role="alert">--}}
                    {{--{{session()->get('success')}}--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--@if(session()->has('error'))--}}
                {{--<div class="alert alert-danger" role="alert">--}}
                    {{--{{session()->get('error')}}--}}
                {{--</div>--}}
            {{--@endif--}}

     {{--<form method="post" action="{{url('/signup')}}" enctype="multipart/form-data">--}}
                {{--{{csrf_field()}}--}}
                {{--<div class="row">--}}
                    {{--<div class="form-group col-md-6">--}}
                        {{--<label for="first_name">First Name</label>--}}

                        {{--<input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="Enter First Name..">--}}
                        {{--<span class="text-danger">{{$errors->first('first_name')}}</span>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-6">--}}
                        {{--<label for="last_name">Last Name</label>--}}
                        {{--<input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Enter Last Name..">--}}
                        {{--<span class="text-danger">{{$errors->first('last_name')}}</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="email">Email Address</label>--}}
                    {{--<input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter Email Address..">--}}
                    {{--<span class="text-danger">{{$errors->first('email')}}</span>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="mobile_no">Mobile No</label>--}}
                    {{--<input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{old('mobile_no')}}" placeholder="Mobile No...">--}}
                    {{--<span class="text-danger">{{$errors->first('mobile_no')}}</span>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="password">Password</label>--}}
                    {{--<input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="password...">--}}
                    {{--<span class="text-danger">{{$errors->first('password')}}</span>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="password">Re-type Password</label>--}}
                    {{--<input type="password" class="form-control" id="retype_password" name="retype_password" value="{{old('retype_password')}}" placeholder="retype password...">--}}
                    {{--<span class="text-danger">{{$errors->first('retype_password')}}</span>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="image">Photo</label>--}}
                    {{--<input type="file" id="image" name="image"><br>--}}
                    {{--<span class="text-danger">{{$errors->first('image')}}</span>--}}
                {{--</div>--}}

                {{--<button type="submit" class="btn btn-success btn-lg" name="signup">Sign up</button>--}}
            {{--</form>--}}
        </div>
    </div>
        {{--<div class="col-md-8">--}}
            {{--<h3 class="text-success">All Users Data</h3>--}}
            {{--<hr>--}}
            {{--<table class="table table-bordered">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>SL</th>--}}
                    {{--<th>First Name</th>--}}
                    {{--<th>Last Name</th>--}}
                    {{--<th>Email</th>--}}
                    {{--<th>Mobile</th>--}}

                    {{--<th>Action</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--@foreach($users as $user)--}}
                    {{--<tr>--}}
                        {{--<td>{{$loop->iteration}}</td>--}}
                        {{--<td>{{$user->first_name}}</td>--}}
                        {{--<td>{{$user->last_name}}</td>--}}
                        {{--<td>{{$user->email}}</td>--}}
                        {{--<td>{{$user->mobile_no}}</td>--}}

                        {{--<td>--}}
                            {{--<div class="btn btn-group">--}}
                                {{--<a href="{{url('/signupEdit/'.$user->id)}}" class="btn btn-success">Edit</a>--}}
                                {{--<a href="#" onclick="checkDelete('{{url('/signupDelete/'.$user->id)}};')" class="btn btn-danger">Delete</a>--}}
                            {{--</div>--}}
                        {{--</td>--}}

                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--</tbody>--}}
            {{--</table>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.css">--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.js"></script>--}}
{{--<script>--}}
    {{--function checkDelete(url){--}}
{{--//            var check = confirm('Are you sure delete this?');--}}
{{--//            if(check){--}}
{{--//                return true;--}}
{{--//            }else{--}}
{{--//                return false;--}}
{{--//            }--}}

        {{--swal({--}}
            {{--title: 'Are you sure?',--}}
            {{--text: "You won't be able to revert this!",--}}
            {{--type: 'warning',--}}
            {{--showCancelButton: true,--}}
            {{--confirmButtonColor: '#3085d6',--}}
            {{--cancelButtonColor: '#d33',--}}
            {{--confirmButtonText: 'Yes, delete it!'--}}
        {{--}).then(function () {--}}
            {{--window.location.href = url;--}}
{{--//                swal(--}}
{{--//                    'Deleted!',--}}
{{--//                    'Your file has been deleted.',--}}
{{--//                    'success'--}}
{{--//                )--}}
        {{--})--}}
    {{--}--}}

{{--</script>--}}

@endsection


