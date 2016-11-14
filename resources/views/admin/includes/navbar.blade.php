<div id="navbar" class="navbar navbar-default">

    <script type="text/javascript">

        try{ace.settings.check('navbar' , 'fixed')}catch(e){}

    </script>



    <div class="navbar-container" id="navbar-container">

        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">

            <span class="sr-only">Toggle sidebar</span>



            <span class="icon-bar"></span>



            <span class="icon-bar"></span>



            <span class="icon-bar"></span>

        </button>



        <div class="navbar-header pull-left">

            <a href="{{url('/dashboard')}}" class="navbar-brand">

                <i class="ace-icon fa fa-laptop orange2"></i>

                <span class="logo-admin">DownStream </span>

                <span class="logo-admin" id="id-text2">Admin</span>

            </a>

        </div>



        <div class="navbar-buttons navbar-header pull-right" role="navigation">

            <ul class="nav ace-nav">

                <li class="light-blue">

                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                        <img class="nav-user-photo" src="{{asset('assets/admin/avatars/user.jpg')}}" alt="Jason's Photo" />

								<span class="user-info">

									<small>Welcome,</small>

                                    <?php $user = Auth::user();echo $user->name;?>

								</span>



                        <i class="ace-icon fa fa-caret-down"></i>

                    </a>



                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                        {{--<li>

                            <a href="">

                                <i class="ace-icon fa fa-cog"></i>

                               Profile Settings

                            </a>

                        </li>--}}





                        <li class="divider"></li>



                        <li>

                            <a href="{{url('/logout')}}">

                                <i class="ace-icon fa fa-power-off"></i>

                                Logout

                            </a>

                        </li>

                    </ul>

                </li>

            </ul>

        </div>

    </div><!-- /.navbar-container -->

</div>