@extends('backend.layout.backend')

@section('content')
    <div class="col-sm-6 col-md-9 col-lg-9">
        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">{{$title}}-Form
                    <a href="{{route($route .'index')}}" class="btn btn-success">List</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {!! Form::model($data['row'], ['route' => [$route.'statusUpdate', $data['row']->id ]]) !!}
            {!! Form::hidden('_method', 'PUT') !!}
            @csrf

            <div class="card-body">
                <div class="form-group row">
                    {!! Form::label('name', 'Name: <span class="required">*</span>',['class' => 'col-form-label'],false); !!}
                    <br>
                    <div class="col-sm-10">
                        {!! Form::text('name', null, [ 'class'=>'form-control', 'placeholder'=>'Enter name']); !!}
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    {!! Form::label('email', 'Email: <span class="required">*</span>',['class' => 'col-form-label'],false); !!}
                    <br>
                    <div class="col-sm-10">
                        {!! Form::text('email', null, [ 'class'=>'form-control', 'placeholder'=>'Enter name']); !!}
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    {!! Form::label('status', 'Status: <span class="required">*</span>',['class' => 'col-form-label'],false); !!}
                    <div class="col-sm-10">

                        {!! Form::radio('status', '1'); !!}Admin
                        {!! Form::radio('status','0'); !!}User
                        @error('status')
                        <p class="text-danger">{{$message}}</p>
                        @enderror




                    </div>
                </div>





                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('csss')
    <style>
        .required{
            color: red;
        }
    </style>
@endsection


