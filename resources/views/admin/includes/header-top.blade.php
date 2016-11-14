<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title><?php if(isset($title)){echo $title; } else echo "DownStream";?></title>
<link rel="icon" type="image/png"  href="{{asset('assets/home/images/favicon.ico')}}">
<meta name="description" content="overview &amp; stats" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta  name="csrf-token" content="{{ csrf_token() }}" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/font-awesome/css/font-awesome.min.css')}}" />

<!-- page specific plugin styles -->

<!-- text fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

<!-- ace styles -->
<link rel="stylesheet" href="{{asset('assets/admin/css/ace.min.css')}}" />

<!--[if lte IE 9]>
<link rel="stylesheet" href="{{asset('assets/admin/css/ace-part2.min.css')}}" />
<![endif]-->
<link rel="stylesheet" href="{{asset('assets/admin/css/ace-skins.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/css/ace-rtl.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/css/datepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/css/chosen.css')}}" />

<!--[if lte IE 9]>
<link rel="stylesheet" href="{{asset('assets/admin/css/ace-ie.min.css')}}" />
<![endif]-->
<link rel="stylesheet" href="{{asset('media/css/jquery.dataTables.min.css')}}" />
<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="{{asset('assets/admin/js/ace-extra.min.js')}}"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="{{asset('assets/admin/js/html5shiv.js')}}"></script>
<script src="{{asset('assets/admin/js/respond.min.js')}}"></script>
<![endif]-->