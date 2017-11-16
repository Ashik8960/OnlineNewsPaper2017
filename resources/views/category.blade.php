
@extends('adminlayouts')
@section('content')
    <div class="row nogutter">

        <div class="col-md-2">
            @include('common.leftnavbar')
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <div class="container-fluid">

                <div class="row">
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
                    <div class="col-md-12">
                        <h1>National</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryNational as $singlerow)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                     <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categoryNational->links()}}


                    </div>


                    <div class="col-md-12">
                        <h1>Politics</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryPolitics as $singlerow)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categoryPolitics->links()}}

                    </div>


                    <div class="col-md-12">
                        <h1>sports</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categorySports as $singlerow)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categorySports->links()}}


                    </div>
                    <div class="col-md-12">
                        <h1>Economics</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryEconomics as $singlerow)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categoryEconomics->links()}}

                    </div>
                    <div class="col-md-12">
                        <h1>International</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryInternational as $singlerow)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categoryInternational->links()}}

                    </div>

                    <div class="col-md-12">
                        <h1>Entertainment</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryEntertainment as $singlerow)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categoryEntertainment->links()}}

                    </div>



                    <div class="col-md-12">
                        <h1>Educations</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryEducations as $singlerow)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categoryEducations->links()}}


                    </div>

                    <div class="col-md-12">
                        <h1>Features</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryFeatures as $singlerow)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categoryFeatures->links()}}


                    </div>

                    <div class="col-md-12">
                        <h1>Editors Pick</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryEditor as $singlerow)

                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categoryEditor->links()}}


                    </div>
                    <div class="col-md-12">
                        <h1>Others</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>No</td>
                                <th>Title</th>

                                <th>Descptions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryOthers as $singlerow)

                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->title, 2,'....')  }}</td>

                                    <td>{{ \Illuminate\Support\Str::words($singlerow->body, 3,'....')  }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/aCategoryD/'.$singlerow->id)}}" class="btn btn-default">Detiles</a>
                                            <a href="{{url('/categoryUpdate/'.$singlerow->id)}}" class="btn btn-info">Edit</a>

                                            <a href="#" onclick="checkDelete('{{url('/categoryDelete/'.$singlerow->id)}};')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categoryOthers->links()}}


                    </div>
                </div>
               {{--end row--}}





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

