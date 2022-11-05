@extends('backend.layout.backend')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-sm-6 col-md-9 col-lg-9">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}} Form
                                <a href="{{route($route .'index')}}" class="btn btn-success">List</a>
                            </h3>
                        </div>
        <!-- /.card-header -->
        <!-- form start -->
        {!! Form::open(['route' => $route .'store' , 'method' => 'post' , 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) !!}
        @csrf

        <div class="card-body">
            <div class="form-group row">
                {!! Form::label('title', 'Title: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                <br>
                <div class="col-sm-10">
                    {!! Form::text('title', '', [ 'class'=>'form-control', 'placeholder'=>'Enter  off percent']); !!}
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                {!! Form::label('description', 'Description: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                <br>
                <div class="col-sm-10">
                    {!! Form::textarea('description', '', [ 'class'=>'ckeditor form-control', 'placeholder'=>'Enter Description','id'=>'summernotes',]); !!}
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                {!! Form::label('image','Image: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                <div class="col-sm-10">
                    {!! Form::file('image', [ 'class'=>'form-control','id'=>'image_file','name'=>'image_file']); !!}
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('status','Status: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                <div class="form-check form-check-inline">
                    {{Form::radio('status','1',['class'=>'form-check-input'])}}
                    <label class="form-check-label ml-2" for="inlineRadio1">Active</label>
                </div>
                <div class="form-check form-check-inline">
                    {{Form::radio('status','0',['class'=>'form-check-input'])}}
                    <label class="form-check-label ml-2" for="inlineRadio2">De-active</label>
                </div>
            </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
                        {!! Form::close() !!}

    </div>
</div>






            </div>
            <!-- /.card -->
        </div>
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('csss')
    <style>
        .required{
            color: red;
        }
    </style>
@endsection
