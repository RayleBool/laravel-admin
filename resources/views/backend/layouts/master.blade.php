@extends('layouts.master')

@section('stylesheets')

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/backend-styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link href="http://cdn.bootcss.com/datatables/1.10.13/css/jquery.dataTables.css" rel="stylesheet">

    @yield('stylesheets-page')

@endsection


@section('body')

<div class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('backend.layouts.header')

        @include('backend.layouts.menu')

        @yield('content')

    </div>
</div>



@endsection

@section('javascripts')

    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ mix('/js/backend-js.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.js') }}"></script>
    <!-- <script src="http://cdn.bootcss.com/datatables/1.10.13/js/jquery.dataTables.js"></script> -->
    @yield('javascripts-page')


@endsection
