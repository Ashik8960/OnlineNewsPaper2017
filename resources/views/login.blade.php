@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="page-header">
                    <h2>Log In <small>Subtext for header</small></h2>
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

                <form method="post" action="{{url('/login')}}">
                    {{csrf_field()}}

                    <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-email"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="example@example.com" aria-describedby="sizing-email">
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>

                    <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-password"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="password" aria-describedby="sizing-password">
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg">Log In</button>
                </form>
            </div>

        </div>
    </div>


@endsection


