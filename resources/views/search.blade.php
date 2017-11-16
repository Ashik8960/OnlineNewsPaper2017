@extends('main')
@section('content')

    <div class="row">
       <div class="col-md-5">
            <form action="{{url('/search')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">

                    <input type="text" class="form-control" id="first_name" name="search"  placeholder="Searching">

                </div>
                <button type="submit" class="btn btn-primary">Searching</button>
            </form>
       </div>
        <div class="col-md-5">

        </div>

    </div>
@endsection