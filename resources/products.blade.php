@extends('layouts.pages.index')
@section('head')
@include('templates.fit-rider-toy-and-joy-store.views.heads')
@endsection
@section('body_class', 'inner-page')
@section('content')
@include('templates.fit-rider-toy-and-joy-store.views.header')
@include('templates.fit-rider-toy-and-joy-store.views.all-products')
@include('templates.fit-rider-toy-and-joy-store.views.footer')
@endsection
@section('scripts')
<script type="text/javascript" src="js/jquery-3.6.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

@endsection