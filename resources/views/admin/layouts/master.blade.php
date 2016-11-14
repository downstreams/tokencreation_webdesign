<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 13 Jun 2014 06:37:43 GMT -->
<head>
    @include('admin.includes.header-top')
</head>
<body class="no-skin">
@include('admin.includes.navbar')
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>
    @include('admin.includes.sidebar')
    <div class="main-content">

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    {{--<div class="wf-logo">
                        <img src="{{asset('assets/home/images/downstreams.png')}}"/>

                    </div>--}}
                    <!-- PAGE CONTENT BEGINS -->
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
                    @if(Session::has('error_msg'))
                        <div class="alert alert-danger">
                            {{ Session::get('error_msg') }}
                        </div>
                        @endif
                        @yield('content')

                                <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
    @include('admin.includes.footer')
</div><!-- /.main-container -->
<!-- basic scripts -->
@section('footer')

        <!--[if !IE]> -->
<script src="{{asset('assets/admin/ajaxgoogleapis/ajax/libs/jquery/2.1.0/jquery.min.js')}}"></script>


<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{asset('assets/admin/js/jquery.min.js')}}'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{asset('assets/admin/js/jquery1x.min.js')}}'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='{{asset('assets/admin/js/jquery.mobile.custom.min.js')}}'>" + "<" + "/script>");
</script>
<script src="{{asset('assets/admin/bootstrap/3.1.1/js/bootstrap.min.js')}}"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="{{asset('assets/admin/js/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset('assets/admin/js/jquery-ui.custom.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/admin/js/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('assets/admin/js/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('assets/admin/js/flot/jquery.flot.resize.min.js')}}"></script>

<!-- ace scripts -->
<script src="{{asset('assets/admin/js/ace-elements.min.js')}}"></script>
<script src="{{asset('assets/admin/js/ace.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/admin/js/chosen.jquery.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.sort_table').DataTable({
            "bSort": false
        } );
    });
    $('.chosen-select').chosen({allow_single_deselect: true});
    //resize the chosen on window resize
    $(window).on('resize.chosen', function () {
        var w = $('.chosen-select').parent().width();
        $('.chosen-select').next().css({'width': w});
    }).trigger('resize.chosen');

    $('#chosen-multiple-style').on('click', function (e) {
        var target = $(e.target).find('input[type=radio]');
        var which = parseInt(target.val());
        if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
        else $('#form-field-select-4').removeClass('tag-input-style');
    });




</script>


<!-- inline scripts related to this page -->
@show
<div id="loader"
     style="display:none;position: absolute; left: 0px; right: 0px; bottom: 0px; text-align: center; font-size: 103px; top: 40%;">
    <i aria-hidden="true" class="fa fa-spinner fa-spin"></i></div>
</body>
<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 13 Jun 2014 06:38:36 GMT -->
</html>
