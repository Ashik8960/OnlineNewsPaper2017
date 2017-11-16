@extends('main')

@section('content')
	<div class="row">
		<div class="col-md-4">
			@if(session()->has('success'))
				<div class="alert alert-success">{{session()->get('success')}}</div>
			@endif

			@if(session()->has('error'))
				<div class="alert alert-danger">{{session()->get('error')}}</div>
			@endif


			<form method="post" action="{{url('contact')}}">
				<div class="form-group">
					{{csrf_field()}}
					<label for="exampleInputName">Name</label>
					<input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputName" placeholder="Name">
					<span class="text-danger">{{$errors->first('name')}}</span>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" placeholder="Email">
					<span class="text-danger">{{$errors->first('email')}}</span>
				</div>
				<div class="form-group">
					<label for="exampleInputMobile">Mobile</label>
					<input type="text" name="mobile" value="{{old('mobile')}}" class="form-control" id="exampleInputMobile" placeholder="mobile">
					<span class="text-danger">{{$errors->first('mobile')}}</span>
				</div>
				<div class="form-group">
					<label for="exampleInputText">Message</label>

					<input type="text" name="message" value="{{old('message')}}" class="form-control" id="exampleInputText" placeholder="message">
					<span class="text-danger">{{$errors->first('message')}}</span>
				</div>


				<button type="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
			</form>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Message</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				@foreach($submit as $info)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$info->name}}</td>
						<td>{{$info->email}}</td>
						<td>{{$info->mobile}}</td>
						<td>{{$info->message}}</td>

						<td>
							<div class="btn btn-group">
								<a href="{{url('/edit/'.$info->id)}}" class="btn btn-success">Edit</a>
								<a href="#" onclick="checkDelete('{{url('/delete/'.$info->id)}};')" class="btn btn-danger">Delete</a>
							</div>
						</td>

					</tr>
				@endforeach
				</tbody>
			</table>
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

@endsection()