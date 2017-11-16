
@extends('adminlayouts')
@section('content')
    <div class="row nogutter">

        <div class="col-md-2">
            @include('common.leftnavbar')
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7">
            <h1 class="well">Profile Details</h1>
            <table class="table table-bordered">
                <thead>
                <tr>

                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Photo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{Auth::user()->first_name}}</td>
                    <td>{{Auth::user()->last_name}}</td>
                    <td>{{Auth::user()->email}}</td>
                    <td>{{Auth::user()->mobile_no}}</td>
                    <td><img class="img-thumbnail" style="width: 80px;height: 80px;" src="{{url(\Auth::user()->photo)}}" alt=""></td>


                </tr>

                </tbody>
            </table>

        </div>
    </div>

@endsection




















