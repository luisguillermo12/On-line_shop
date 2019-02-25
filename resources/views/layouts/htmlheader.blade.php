<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Massaggi24') }}</title>
    <link rel="shortcut icon"  class="fa fa-cart-plus" href="{{ asset('/image/publications/shortcute.png') }}" >
                                                                       
	{{ Html::style("/vendor/css/font-awesome.min.css") }}
	{{ Html::style("/vendor/css/owl.carousel.css") }}
	{{ Html::style("/vendor/css/owl.theme.css") }}
	{{ Html::style("/vendor/css/animate.min.css") }}
	{{ Html::style('/vendor/css/bootstrap-dropdownhover.min.css') }}
	{{ Html::style('/css/appMassaggi.css') }}
	{{ Html::style('/css/app.css') }}

	{{ Html::style("/vendoradmin/bower_components/bootstrap/dist/css/bootstrap.min.css") }}
	{{ Html::style("/vendoradmin/bower_components/font-awesome/css/font-awesome.min.css") }}
	{{ Html::style("/vendoradmin/bower_components/Ionicons/css/ionicons.min.css") }}
	{{ Html::style("/vendoradmin/dist/css/AdminLTE.min.css") }}
	{{ Html::style("/vendoradmin/dist/css/skins/_all-skins.min.css") }}
	{{ Html::style("/vendoradmin/bower_components/morris.js/morris.css") }}
	{{ Html::style("/vendoradmin/bower_components/jvectormap/jquery-jvectormap.css") }}
	{{ Html::style("/vendoradmin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css") }}
	{{ Html::style("/vendoradmin/bower_components/bootstrap-daterangepicker/daterangepicker.css") }}
	{{ Html::style("/vendoradmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}
	{{ Html::style("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic") }}
    {{ Html::script('js/alert/sweetalert2.all.js') }}
</head>
