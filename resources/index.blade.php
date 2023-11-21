@extends('layouts.pages.index')

@section('head')
@include('templates.fit-rider-toy-and-joy-store.views.heads')
@endsection

@section('body_class', 'front-page')
@section('content')
@include('templates.fit-rider-toy-and-joy-store.views.header')



<div class="banner-section7">
  <div class="banner overlay-background">
    <div class="container">
      <div class="row align-items-center g-0">
        <div class="col-md-7 col-xl-7 order-1 order-md-1">
          <div class="head-title banner-text-color">
            <h1 class="banner-heading-color">
              <span>{{$content -> top_banner_title}}</span>
            </h1>
            <p class="banner-tagline-color">
              <span>{{$content -> top_banner_description}}</span>
            </p>
            <a href="/products" class="btn btn-primary mt-3 banner-btn-color">Buy It Now</a>
          </div>
        </div>
        <div class="col-md-5 order-2 order-md-1">
          <div class="prod-img-wrapper">
            <img src="images/{{$content->inside_banner_image}} " alt="" /><!--asign key in content to reder a product-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="about-section7">
  <div class="container-fluid position-relative">
    <div class="row">
      <div class="col-12 col-sm-5 left"></div>
      <div class="col-sm-7 d-none d-sm-flex right"></div>
    </div>
    <div class="container data-container">
      <div class="row about-row">
        <div class="col-sm-6 data-left">
          <img src="images/{{$content->about_banner_image}}" alt="" />
        </div>
        <div class="col-sm-6 data-right">
          <h1 class="about-title">{{$content -> about_banner_title}}</h1>
          <p>{{$content -> about_description}}</p>
          <div class="about-button"><a href="/products">Buy It Now</a></div>
        </div>
      </div>
    </div>
  </div>
</div>


@include('templates.fit-rider-toy-and-joy-store.views.all-products')
<section class="contact-section contact-section7">
  <div class="container">
    <h1 class="contact-heading">Our Contact</h1>
    <p class="contact-text">
      Have any Questions? Feel free to Contact Us at
      <span class="contact-email">
        <a href="">{{ $page->support_email ?? '' }}</a>
      </span>
    </p>
  </div>
</section>

@include('templates.fit-rider-toy-and-joy-store.views.footer')
@endsection