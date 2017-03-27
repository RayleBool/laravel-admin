@extends('layouts.master')

@section('stylesheets')

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/backend-styles.css') }}">
    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet">   
    <link href="http://cdn.bootcss.com/datatables/1.10.13/css/jquery.dataTables.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.metismenu/2.7.0/metisMenu.min.css">

    @yield('stylesheets-page')

@endsection


@section('body')

   <div class="container-fluid">
    <div class="row-fluid">
        @include('backend.layouts.header')

        @include('backend.layouts.menu')

        @yield('content')   

        @include('backend.layouts.footer')
        </div>
    </div>
</div>
   


@endsection

@section('javascripts')

    <script scr="{{ mix('/js/app.js') }}"></script>
    <script src="http://cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/datatables/1.10.13/js/jquery.dataTables.js"></script>
   <script src="http://cdn.jsdelivr.net/jquery.metismenu/2.7.0/metisMenu.min.js"></script>
    @yield('javascripts-page')


@endsection
