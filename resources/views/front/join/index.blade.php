@extends('front.layouts.master')

@section('head')
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PJPNHSC');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="postulacion trabajo isapres chile asesores 2020">
    <meta name="keywords" content="trabajo, postulacion vendedor isapres, isapres, ejecutivo de ventas">
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
    <title>Postulacion ejecutivo ventas isapres</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="c__header">
    <header-component 
        src_brand="{{asset('img/brand.svg')}}" 
        text_btn="Postular" 
        phone_btn="+569965876028"
        id_form="#join"
        >
    </header-component>
</div>

<div id="c__topslideshow">
<topslideshow-component 
    bg_path="{{asset("img/bg-meet.jpg")}}"
    >
</topslideshow-component>
</div>

<section id="c__how">
    <how-component></how-component>
</section>

<section id="c__aboutus">
    <aboutus-component></aboutus-component>
</section>

<div id="c__joinformmodal">
    <joinform-component url_store="{{route('joinform.store')}}"></joinform-component>
</div>
@endsection