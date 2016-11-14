@extends('admin.layouts.master')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="page-header">
        <h1>
            Import Code
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                upload File(Excel file)

            </small>
        </h1>
    </div>
    <Form action="{{route('codes.store')}}" method="post" class='form-horizontal' role ='form' enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="form-group">
        <label for="upload-file" class="col-sm-3 control-label no-padding-right"></label>
        <div class="col-sm-9">
            <input type="file" name="code_file" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-4 col-md-8">
            <a class="btn btn-danger btn-sm" href="{{ route('codes.index') }}">
                <i class="ace-icon fa fa-reply icon-only"></i> Back
            </a>
            <input type="submit" value="Import" title="Click to import codes " class="btn btn-sm btn btn-info"/>



        </div>
    </div>


   </form>
@section('footer')
    @parent

@endsection

@stop
