@extends('main')
@section('content')
    <div class="container">
        <div class="row">

    <div class="col-md-10 col-md-offset-1">
    <h3 class="text-success">All Users Data</h3>
    <hr>
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>SL</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Photo</th>

    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$user->first_name}}</td>
    <td>{{$user->last_name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->mobile_no}}</td>
    <td><img style="height: 50px;width: 50px;" src="{{url($user->photo)}}" alt=""></td>

    <td>
    <div class="btn btn-group">
    <a href="{{url('/signupEdit/'.$user->id)}}" class="btn btn-success">Edit</a>
    <a href="#" onclick="checkDelete('{{url('/signupDelete/'.$user->id)}};')" class="btn btn-danger">Delete</a>
    </div>
    </td>

    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.js"></script>
    <script>
    function checkDelete(url){
    //            var check = confirm('Are you sure delete this?');
    //            if(check){
    //                return true;
    //            }else{
    //                return false;
    //            }

    swal({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then(function () {
    window.location.href = url;
    //                swal(
    //                    'Deleted!',
    //                    'Your file has been deleted.',
    //                    'success'
    //                )
    })
    }

    </script>

@endsection


