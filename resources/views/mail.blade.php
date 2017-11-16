@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <h1>Contact form</h1>


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

            <form method="post" action="{{url('/mail')}}">
                <div class="form-group">
                    {{csrf_field()}}
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="subject" value="{{old('subject')}}" class="form-control" id="exampleInputName">
                    <span class="text-danger">{{$errors->first('subject')}}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" >
                    <span class="text-danger">{{$errors->first('email')}}</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputText">Message</label>


                    <textarea  id="exampleInputText" class="form-control" name="message" rows="3">{{old('message')}}</textarea>
                    <span class="text-danger">{{$errors->first('message')}}</span>
                </div>



                <button type="submit"  class="btn btn-lg btn-success">Send message</button>
            </form>
        </div>

    </div>


@endsection()