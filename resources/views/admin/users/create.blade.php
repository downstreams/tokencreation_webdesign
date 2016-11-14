@extends('webfire-admin.layouts.master')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <?php echo Breadcrumbs::render('Register_User');?>
    <div class="page-header">
        <h1>
            Users Management
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Add New User
            </small>
        </h1>
    </div>


    {{ Form::open([ 'route' => 'users.store','class'=>'form-horizontal','role'=>'form']) }}

    <div class="form-group">
        {{ Form::label('Name', 'First Name:', ['for'=>'first_name','class' => 'col-sm-3 control-label no-padding-right']) }}
        <div class="col-sm-9">
            {{ Form::text('first_name', null, ['class' => 'col-xs-10 col-sm-5','id'=>'first_name','placeholder'=>'Enter First Name']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('Last Name', 'Last Name:', ['for'=>'Last Name','class' => 'col-sm-3 control-label no-padding-right']) }}
        <div class="col-sm-9">
            {{ Form::text('last_name', null, ['class' => 'col-xs-10 col-sm-5','id'=>'last_name','placeholder'=>'Enter Last Name']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('UserName', 'UserName:', ['for'=>'username','class' => 'col-sm-3 control-label no-padding-right']) }}
        <div class="col-sm-9">
            {{ Form::text('user_name', null, ['class' => 'col-xs-10 col-sm-5','id'=>'username','placeholder'=>'Enter Username']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('Email', 'Email:', ['for'=>'Email','class' => 'col-sm-3 control-label no-padding-right']) }}
        <div class="col-sm-9">
            {{ Form::email('email', null, ['class' => 'col-xs-10 col-sm-5','id'=>'email','placeholder'=>'Enter Email Address']) }}
        </div>
    </div>


    <div class="form-group">
        {{ Form::label('password', 'Password:', ['for'=>'password','class' => 'col-sm-3 control-label no-padding-right']) }}
        <div class="col-sm-9">
            {{ Form::text('password', null,['class' => 'col-xs-10 col-sm-5','id'=>'password','placeholder'=>'Enter Password ']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('Disable', 'Active:', ['for'=>'options','class' => 'col-sm-3 control-label no-padding-right']) }}
        <div class="col-sm-9">
            {{ Form::checkbox('status','1','true',['class' => 'ace ace-switch ace-switch-5','id'=>'options']) }}
            <span class="lbl"></span>
        </div>
    </div>


    <div class="clearfix form-actions">
        <div class="col-md-offset-4 col-md-8">
            <a class="btn btn-danger btn-sm" href="{{ route('users.index') }}">
                <i class="ace-icon fa fa-reply icon-only"></i> Back
            </a>
            {{ Form::submit('Save', ['class' => 'btn btn-sm btn btn-info', 'title'=>'Click here to Save']) }}


        </div>
    </div>

    {{Form::close()}}

@stop