@extends('layouts.app', ['title' => 'Home'])
@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators hidden-xs">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('images/home_1.jpg') }}" alt="Distribución y comercialización">
      </div>
      <div class="item">
        <img src="{{ asset('images/home_2.jpg') }}" alt="Sistemas pipe and joint">
      </div>
      <div class="item">
        <img src="{{ asset('images/home_3.jpg') }}" alt="Fenólicos / Epoxicos">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container">
    <h2 class="text-center">{{__('text.general_text7')}}</h2>
    <div class="row productos_home">
        
        @foreach ($categories as $category)
        @php
             if(\App::getLocale() == 'es'){
                    $catName = $category->nombre;
                }else{
                    $catName = $category->nombre2;
                }
        @endphp
        <div class="col-xs-6 col-sm-4 col-md-4 box">
            <a href="#">
                <img src="{{ asset('uploads/categorias/'.$category->home) }}" alt="{{ $catName }}">
            </a>
            <div>
                <a href="#" class="tituloCat">
                    @if (strlen($catName) < 30)
                    <div class="visible-xs-block" style="font-size:1px; height: 10px; width: 100%">
                    </div>
                    @endif
                    {{$catName}}
                </a>
            </div>
        </div>
        @endforeach
      
    </div>
  </div>

  <div class="container marginTop45">
    <div class="row acerca">
      <div class="col-xs-12 col-sm-6 col-md-6"><img src="{{ asset('images/mapa.png') }}" class="img-responsive"></div>
      <div class="col-xs-12 col-sm-6 col-md-6 pull-right">
        <h3>{{__('text.about_text')}}</h3>
        <p>{!! __('text.general_text3') !!}<br><br>{{__('text.general_text4')}}</p>
        <ul class="lista-nostyle">
            @foreach ($categories as $category)
                <li>
                    <a href="#">
                        <span>• {{ \App::getLocale() == 'es'?$category->nombre:$category->nombre2 }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        <br>
        <a href="{{ route('about') }}" class="btn btn-black">
            {{__('text.general_text5')}} 
            <i class="fa fa-angle-right"></i>
        </a>
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