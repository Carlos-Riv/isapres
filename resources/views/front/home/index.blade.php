@extends('front.layouts.master')

@section('head')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172898554-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172898554-1');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Asesoria planes de isapre. Cotiza tu mejor plan de isapre">
    <meta name="keywords" content="asesoria isapre, mejor isapre, plan isapre, cotiza isapre, plan isapre mujer, plan isapre hombre, ranking isapre, plan isapre personalizado, cotiza plan, cobertura salud, plan isapre joven, asesoria isapre sin costo, plan isapre economico, cotizador isapre, plan de salud, isapres chile">
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
    <title>IsapresChileAsesores</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="c__header">
    <header-component 
        src_brand="{{asset('img/brand.svg')}}" 
        text_btn="Cotizar isapre" 
        phone_btn="+569965876028"
        id_form="#extend"
        >
    </header-component>
</div>

@include('front.partials.slideshow')

@include('front.partials.howWorks')

@include('front.partials.moreClients')

<div id="c__extendform">
    <extendform-component>
    </extendform-component>
</div>

@endsection