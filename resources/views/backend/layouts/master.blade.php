@extends('layouts.master')

@section('stylesheets')

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/backend-styles.css') }}">
    <link href="//cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.css" rel="stylesheet">
     <link href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="{{url('dist/css/AdminLTE.css')}}">
     <link rel="stylesheet" href="{{url('dist/css/skins/_all-skins.min.css')}}">
    @yield('stylesheets-page')

@endsection


@section('body')

    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    @include('backend.layouts.topnav')
    @include('backend.layouts.menu')

    {{--中间的内容--}}
    <div class="content-wrapper">
        <section class="content-header">
            @section('content-header')
            @show
        </section>
        <section class="content">
            @section('content')
            @show
        </section>
    </div>
    {{--/中间的内容--}}

@include('backend.layouts.footer')


    </div>




    <!-- <div class="body">
        <div class="row">
        <!-- @if(Auth::check()) -->
     <!-- @endif -->
     <!-- @include('backend.layouts.menu')

         <div class="col-md-10">

                @yield('content')

            </div>
        </div>
    </div> -->
@endsection

@section('javascripts')

    <script scr="{{ mix('/js/app.js') }}"></script>
    <script scr="{{ mix('/js/semantic.js') }}"></script>
    <script src="//cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/vue/2.0.0-rc.5/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/vue.resource/1.0.2/vue-resource.min.js"></script>
    <script src="{{url('dist/js/admin.js')}}"></script>
    <script src="{{url('dist/js/demo.js')}}"></script>
    @yield('javascripts-page')

    <script type="text/javascript">
    $(document).ready(function () {
        var path_array = window.location.pathname.split('/');
        var scheme_less_url = '//' + window.location.host + window.location.pathname;
        if (path_array[1] == 'dashboard') {
            scheme_less_url = window.location.protocol + '//' + window.location.host + '/' + path_array[1];
        } else {
            scheme_less_url = window.location.protocol + '//' + window.location.host + '/' + path_array[1] + '/' + path_array[2] + '/' + 'index';
        }
        $('ul.treeview-menu>li').find('a[href="' + scheme_less_url + '"]').closest('li').addClass('active');  //二级链接高亮
        $('ul.treeview-menu>li').find('a[href="' + scheme_less_url + '"]').closest('li.treeview').addClass('active');  //一级栏目[含二级链接]高亮
        $('.sidebar-menu>li').find('a[href="' + scheme_less_url + '"]').closest('li').addClass('active');  //一级栏目[不含二级链接]高亮
    });
</script>

@endsection
