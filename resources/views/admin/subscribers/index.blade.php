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

            Manage Subscribers

            <small>

                <i class="ace-icon fa fa-angle-double-right"></i>

                view Subscribers Status
                <a href="{{url('delete-all-sub')}}"  onclick="return confirm('Are you sure? You want to delete all Subscribers')" class="pull-right btn btn-sm btn btn-danger" style="margin:0 5px">Delete All</a>

            </small>

        </h1>

    </div>

    <div class="table-responsive">

        <div class="col-lg-12">

            <table class="table table-striped table-bordered table-hover table sort_table">

                <thead>

                <tr>

                    <th>Email</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Subscription Date</th>
                    <th>Verified Date</th>
                    <th  align="center" style="width: 45px!important">Action</th>

                </tr>

                </thead>

                <tbody>

                <?php

                if($subscribers){

                foreach($subscribers as $sb){?>

                <tr>

                    <td><span><?php echo $sb->email?></span></td>
                    <td><span><?php echo $sb->vcode?></span></td>

                    <td><span><?php if ($sb->status == 1) {

                                echo "<span class='label label-sm label-success'><span>Verified";

                            } else {

                                echo "<span class='label label-sm label-warning'><span>Unverified";

                            }?></span></td>



                    <td><span><?php echo $sb->created_at?></span></td>
                    <td><span><?php echo $sb->updated_at?></span></td>
                     <td align="center">

                        <div class="action-buttons">


                            <a class="red" title="Delete Code" onclick="return confirm('Are you sure? You want to delete it')"

                               href="<?php echo url('subscribers/' . $sb->id . "/delete")?>">

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