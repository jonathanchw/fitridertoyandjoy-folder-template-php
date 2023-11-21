@extends('layouts.pages.index')
@section('head')
@include('templates.fit-rider-toy-and-joy-store.views.heads')
@endsection

@section('body_class', 'inner-page')
@section('content')
@include('templates.fit-rider-toy-and-joy-store.views.header')


<section id="medal_detail">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <img src="images/banners/thankyou.png" class="img-responsive" />

                <h2>Thank you for ordering.</h2>
                <p>Your order id is [[order_id]].</p>
            </div>
        </div>
    </div>
</section>

@include('templates.fit-rider-toy-and-joy-store.views.footer')
@endsection