@extends('layouts.app', ['title' => __('text.about_text')])
@section('content')
<div class="banner_section"><img src="{{ asset('images/acerca_banner.jpg') }}" alt="{{__('text.about_text')}}"></div>
   <div class="container">
      <h1 class="titulo_seccion">{!! __('text.about_text1') !!}<br><span>{!! __('text.about_text2') !!}</span><br>{!! __('text.about_text3') !!}</h1>
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-6 img_acerca1">
            <img src="{{ asset('images/acerca_1.jpg') }}">
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6">
            <h2 style="margin-top:0">{!! __('text.about_text4') !!}:</h2>
            <p><strong>{!! __('text.about_text5') !!}</strong></p>
            <p>{!! __('text.about_text6') !!}</p>
            <p>{!! __('text.about_text7') !!}</p>

         </div>
      </div>
      <div class="bloque_azul">
         <div class="mitad">
            <h2>{!! __('text.about_text8') !!}:</h2>
            <p>{!! __('text.about_text9') !!}</p>
            <p><strong>{!! __('about_text10') !!}</strong></p>
            <div class="boton_maps"><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.9648213725272!2d-103.286681884633!3d20.507668310737508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f4c6b4fb94a3d%3A0x27a80c1dafb33d81!2sCalle+Revolucion+200%2C+Zapote+del+Vallle%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1466741073483" data-title="Mudisa - Domicilio" data-toggle="lightbox" data-parent="" data-gallery="remoteload"><i class="fa fa-map-marker"></i> {!! __('text.about_text11') !!}</a></div>
         </div>
         <div class="mitad"><img src="{{ asset('images/acerca_2.jpg') }}"></div>
         <div class="clearfix"></div>
      </div>
      <div class="row" style="margin-top: 45px;">
         <div class="col-xs-12 col-sm-12 col-md-6 img_acerca1">
            <img src="{{ asset('images/acerca_3.jpg') }}">
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 acerca_3">
            <h2 style="margin-top:0">{!! __('text.about_text12') !!}:</h2>
            <p style="font-size: 23px;">{!! __('text.about_text13') !!}:</p>
            <ul>
                @foreach ($categories as $category)
                    <li>
                        @php
                            $slug = \App::getLocale()=='es'?$category->seo1:$category->seo2;
                        @endphp
                        <a href="{{ route('category', [
                            'param' => $slug
                        ]) }}">
                            <span>{{ \App::getLocale() == 'es'?$category->nombre:$category->nombre2 }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
         </div>
      </div>
   </div>
@endsection
@section('extrajs')
<script>
    jQuery(function($){
        $('.box').matchHeight({
          byRow: false,
          property: 'height',
          target: null,
          remove: false
      });
        $('.tituloCat').matchHeight({
          byRow: false,
          property: 'height',
          target: null,
          remove: false
      });
    });
</script>
@endsection
