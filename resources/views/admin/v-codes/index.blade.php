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

            Manage Codes

            <small>

                <i class="ace-icon fa fa-angle-double-right"></i>

                view Codes
                <a href="{{route('codes.create')}}" class="pull-right btn btn-sm btn btn-info">Import Code</a>
                <a href="{{url('delete-all')}}"  onclick="return confirm('Are you sure? You want to delete all codes')" class="pull-right btn btn-sm btn btn-danger" style="margin:0 5px">Delete All</a>

            </small>

        </h1>

    </div>

    <div class="table-responsive">

        <div class="col-lg-12">

            <table class="table table-striped table-bordered table-hover table sort_table">

                <thead>

                <tr>

                    <th>Id</th>
                    <th>Code</th>
                    <th  align="center" style="width: 45px!important">Action</th>

                </tr>

                </thead>

                <tbody>

                <?php

                if($codes){

                foreach($codes as $cd){?>

                <tr>

                    <td><span><?php echo $cd->id?></span></td>
                    <td><span><?php echo $cd->value?></span></td>
                    <td align="center">

                        <div class="action-buttons">


                            <a class="red" title="Delete Code" onclick="return confirm('Are you sure? You want to delete it')"

                               href="<?php echo url('codes/' . $cd->id . "/delete")?>">

                                <i class="ace-icon fa fa-trash-o bigger-130"></i>

                            </a>

                        </div>





                    </td>

                </tr>

                <?php

                }

                }

                ?>



                </tbody>



            </table>

        </div>

    </div>

    <div id="modal-table" class="modal fade" tabindex="-1">

        <div class="modal-dialog">

            <div id="popups" class="modal-content">

            </div><!-- /.modal-content -->



        </div><!-- /.modal-dialog -->



    </div>





@section('footer')

    @parent


@endsection

@stop