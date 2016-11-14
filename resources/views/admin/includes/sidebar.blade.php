<div id="sidebar" class="sidebar responsive">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <ul class="nav nav-list">
        <li class="<?php if (Request::segment(1) == 'dashboard') {echo 'active'; }?>">
            <a href="{{url('/dashboard')}}">
                <i class="menu-icon  glyphicon glyphicon-th green"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="<?php if (Request::segment(1)=='codes' ) { echo 'active open hsub';}?>">
            <a href="{{route('codes.index')}}">
                <i class="menu-icon fa fa-database blue"></i>
                <span class="menu-text">Imports Code</span>
            </a>
        </li>
        <li class="<?php if (Request::segment(1)=='subscribers' ) { echo 'active open hsub';}?>">
            <a href="{{route('subscribers.index')}}">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">Subscribers</span>
            </a>
        </li>



    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>