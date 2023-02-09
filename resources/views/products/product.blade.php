@extends('layouts.app', [
  'title' => $lang=="es"?$product->nombre:$product->nombre2,
  'description' => $lang=="es"?$product->seodesc1:$product->seodesc2,
  'keys' => $lang=="es"?$product->words1:$product->words2,
])
@section('content')
<br>
  <div class="container">
    <div>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">{{ __('text.home_text') }}</a></li>
        <li class="active">{{ __('text.productos_text') }}</li>
        <li><a href="{{route('category', ['param' => $product->Category->seo1])}}">
            {{ ucfirst(mb_strtolower($lang == "es" ? $product->Category->nombre: $product->Category->nombre2)) }}</a></li>
        <li class="active">{{ $lang == "es" ? $product->nombre : $product->nombre2 }}</li>
      </ol>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-md-3">
        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
            @include('layouts._sidebar')
        </div>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-9">
            @isset($product->foto)
            <p class="text-center"><img src="{{ asset('uploads/productos/'.$product->foto) }}" style="width: 100%; height: auto;"></p>
            @endisset   
            <h2>
                {{ $lang == "es" ? $product->nombre : $product->nombre2 }}
            </h2>
            <p style="font-weight: 400;">
                {!! nl2br($lang == "es" ? $product->info1 : $product->info2) !!}
            </p>
            
            @if(!empty($product->tabla))
            <h3>{{__('text.general_text1')}}:</h3>
                <p class="text-center">
                    <img src="{{ asset('uploads/tablas/'.$product->tabla) }}" style="width: 100%; height: auto;">
                </p>
            @endif
            @if(!empty($product->pdf))
                <p class="text-center"><a href="{{ asset('uploads/pdf/'.$product->pdf) }}" target="_blank" class="btn btn-black">{{ __('text.general_text8') }} <i class="fa fa-angle-right"></i></a></p>    
            @endisset
      </div>
    </div>
    
  </div>
@endsection