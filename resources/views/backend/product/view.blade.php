@extends('backend.layout.backend')

@section('content')
    <div class="col-sm-6 col-md-9 col-lg-9">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}
                        <a href="{{route($route .'index')}}" class="btn btn-success">List</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{$data['row']->name}}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>Rs {{$data['row']->price}}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{$data['row']->Category->name}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{!!$data['row']->description!!}</td>
                        </tr>
                        <tr>
                            <td>Short-Description</td>
                            <td>{!! $data['row']->short_description !!}</td>
                        </tr>
                        <tr>
                            <td>Created-By</td>
                            <td>{{$data['row']->Creator->name}}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>

                                <img src="{{asset('uploads/images/product/'.$data['row']->image)}}"  alt="" style="height: 200px; width: 200px; boarder:15px" >
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>














@endsection


