@extends('webfire-admin.layouts.master')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <?php echo Breadcrumbs::render('user_list');?>
    <div class="page-header">
        <h1>
           Users Management
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                view User List
                <a href="{{route('users.create')}}" class="pull-right btn btn-sm btn btn-info">Add New</a>
            </small>
        </h1>
    </div>
    <div class="table-responsive">
        <div class="col-lg-12">
            <table  class="table table-striped table-bordered table-hover table sort_table">
                <thead>
                <tr>
                    <th><i class="ace-icon fa fa-envelope"></i>Email</th>
                    <th><i class="ace-icon fa fa-user"></i>User Name</th>
                    <th><i class="ace-icon fa fa-key"></i>Password</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if($users){
                foreach($users as $user){?>
                <tr>
                    <td><span><?php echo $user->email?></span></td>
                    <td><span><?php echo $user->user_name?></span></td>
                    <td><span><?php echo $user->token?></span></td>
                    <td><span><?php if($user->status==1){echo "<span class='label label-sm label-success'><span>Active";}else {echo "<span class='label label-sm label-warning'><span>Inactive";}?></span></td>
                    <td><span><?php echo date('Y-m-d h:m:s a',strtotime($user->created_at))?></span></td>

                    <td>
                        <div class="action-buttons">
                            <!-- <a class="blue" href="abc.com">
                                 <i class="ace-icon fa fa-search-plus bigger-130"></i>
                             </a>-->

                            <a class="green" href="<?php echo route('users.edit', $user->id) ?>">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>

                            <a class="red" onclick="return confirm('Are you sure? You want to delete it')" href="<?php echo url('users/'.$user->id."/delete")?>">
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
@stop