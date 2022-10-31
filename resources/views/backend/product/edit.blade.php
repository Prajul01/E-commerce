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
            {!! Form::model($data['row'],['route' => [$route . 'update',$data['row']->id],'method' => 'put','files' => true]) !!}
{{--            {!! Form::model($data['row'], ['route' => [$route.'update', $data['row']->id,'files' => 'true' ]]) !!}--}}
            {!! Form::hidden('_method', 'PUT') !!}
            @csrf

            <div class="card-body">
                <div class="form-group row">
                    {!! Form::label('name', 'Name: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                    <br>
                    <div class="col-sm-10">
                        {!! Form::text('name', null, [ 'class'=>'form-control', 'placeholder'=>'Enter name']); !!}
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('price', 'Price: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                    <br>
                    <div class="col-sm-10">
                        {!! Form::text('price', null, [ 'class'=>'form-control', 'placeholder'=>'Enter price']); !!}
                        @error('price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('description', 'Description: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                    <br>
                    <div class="col-sm-10">
                        {!! Form::textarea('description', null, [ 'class'=>'ckeditor form-control', 'placeholder'=>'Enter Description','id'=>'summernotes',]); !!}
                        @error('description')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('short_description', 'Short-Description: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                    <br>
                    <div class="col-sm-10">
                        {!! Form::textarea('short_description', null, [ 'class'=>'ckeditor form-control', 'placeholder'=>'Enter Description','id'=>'summernotes',]); !!}
                        @error('short_description')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('category_id', 'Category: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                    <div class="col-sm-10">
                        {!! Form::select('category_id', $data['categories'], null,['class' => 'form-control','placeholder' => 'Select Category']) !!}
                        @error('category_id')
                        <span class="text text-danger">{{$message}}</span>
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
                <lable><strong>Old-Image</strong></lable>
                    <div class="col-sm-10">
                <img src="{{asset('uploads/images/product/'.$data['row']->image)}}" class=" col-form-label" alt=""
                     style="height: 250px; width: 250px; border-left:   75px solid white ; ">
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


