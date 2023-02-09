@extends('layouts.app', [
    'title' => $lang=="es"?$category->titulo:$category->titulo2,
    'description' => $lang=="es"?$category->seodesc1:$category->seodesc2,
    'keys' => $lang=="es"?$category->words1:$category->words2,
    ])
@section('content')

<br>
<div class="container">
    <div>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">{{ __('text.home_text') }}</a></li>
            <li class="active">{{ __('text.productos_text') }}</li>
            <li class="active">{{ ucfirst(mb_strtolower($lang=='es'?($category->nombre):$category->nombre2)) }}</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">

            @include('layouts._sidebar')
        
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9">
            @isset($category->banner)
                <p class="text-center">
                    <img src="{{ asset('uploads/categorias/'.$category->banner) }}" 
                    style="width: 100%; height: auto;">
                </p>
            @endisset
            <h2>
               
                {{ ucfirst(mb_strtolower($lang=='es'?$category->nombre:$category->nombre2)) }}
            </h2>
            <p style="font-weight: 400;">
                {!! nl2br($lang == 'es'?$category->descripcion:$category->descripcion2) !!}
            </p>
            <br>
            
            @if(!$category->Products->isEmpty())
            <div class="row">
                @foreach ($category->Products->sortBy('nombre') as $product)
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="producto">
                        <a href="{{ route('product', ['param' => $product->seo1]) }}">
                            <img src="{{ asset('uploads/productos/s/'.$product->foto) }}" />
                            <h3>{{ $lang == "es" ? $product->nombre : $product->nombre2 }}</h3>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            @foreach ($subcategories->sortBy('nombre') as $subcategory)
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="producto">
                        <a href="{{ route('subcategory', ['param' => $subcategory['seo1']]) }}">
                            <img src="{{ asset('uploads/subcategorias/'.$subcategory->home) }}" />
                            <h3>{{ $lang == "es" ? $subcategory->nombre : $subcategory->nombre2 }}</h3>
                        </a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
    @if(!empty($category->tabla))
    <h3 class="text-center">{{__('text.general_text1')}}:</h3>
    <p class="text-center">
        <img src="{{ asset('uploads/categorias/'.$category->tabla) }}" style="width: 100%; height: auto;"></p>
    @endif
</div>
@endsection
@section('extrajs')
<script>
    jQuery(function($){
        $('#accordion2').on('show.bs.collapse', function (e) {
          $('#accordion2 .panel-default').removeClass('panel-default').addClass('panel-gris');
          $(e.target).parent().addClass('panel-default').removeClass('panel-gris');
        });
    });
</script>
@endsection