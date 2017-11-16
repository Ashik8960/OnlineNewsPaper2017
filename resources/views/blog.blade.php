
@extends('adminlayouts')
@section('content')
    <div class="row nogutter">

        <div class="col-sm-2">
            @include('common.leftnavbar')
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-8 text-center min-height">
            <h1 class="text-center well well-sm">All blog post</h1>
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
            @foreach(array_chunk($blogs->all(),4) as $row)
                <div class="row">
                    @foreach($row as $blog)
                        <div class="col-sm-3 ">
                            <div class="ashik img-thumbnail">


                                    <img src="{{url($blog->photo)}}" style="max-width:100%;height: 100px;" alt="">

                                        <h5>{{ \Illuminate\Support\Str::words($blog->title, 3,'....')  }}</h5>
                                   <p>{{ \Illuminate\Support\Str::words($blog->body, 5,'....')  }}</p>




                                <p><small><strong>{{$blog->created_at}}</strong></small></p>
                                <div class="btn-group">
                                    <a href="{{url('/blogEdit/'.$blog->id)}}" class="btn btn-info">Edit</a>

                                    <a href="#" onclick="checkDelete('{{url('/blogDelete/'.$blog->id)}};')" class="btn btn-danger">Delete</a>
                                    <a href="{{url('/adminBlogDetiles/'.$blog->id)}}}" class="btn btn-default">Detiles</a>
                                </div>
                            </div>

                        </div><!--/.col-xs-6.col-lg-4-->
                    @endforeach

                </div>
            @endforeach
            <div class="col-md-12 text-center">
                {{$blogs->links()}}
            </div>

            <hr>

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

