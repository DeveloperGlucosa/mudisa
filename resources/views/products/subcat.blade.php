@extends('layouts.app', [
  'title' => $lang=="es"?$subcategory->titulo:$subcategory->titulo2,
  'description' => $lang=="es"?$subcategory->seodesc1:$subcategory->seodesc2,
  'keys' => $lang=="es"?$subcategory->words1:$subcategory->words2,
])
@section('content')
<br>
  <div class="container">
    <div>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">{{ __('text.home_text') }}</a></li>
            <li class="active">{{ __('text.productos_text') }}</li>
            <li>
                <a href="{{route('category', ['param' => $category['seo1']])}}">
                    {{ ucfirst(mb_strtolower($lang=='es'?($category['nombre']):$category['nombre'])) }}
                </a>
            </li>
            <li class="active">{{ ucfirst(mb_strtolower($lang=='es'?($subcategory['nombre']):$subcategory['nombre'])) }}</li>
        </ol>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-md-3">
        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
            @include('layouts._sidebar')
        </div>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-9">
        @if (!empty($subcategory->banner))
        <p class="text-center"><img src="{{ asset('uploads/subcategorias/'.$subcategory->banner) }}" style="width: 100%; height: auto;"></p>
        @endif
        <h2>{{ ucfirst(mb_strtolower($lang=='es'?($subcategory->nombre):$subcategory->nombre2)) }}</h2>
          
        <p style="font-weight: 400;">
            {{ nl2br($lang == 'es'?$subcategory->descripcion:$subcategory->descripcion2) }}
        </p>
          <br>
            @isset($subcategory->Products)
            <div class="row">
                @foreach ($subcategory->Products as $product)
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="producto">
                        <a href="{{ asset('uploads/productos/'.$product->foto) }}" data-title="{{ $lang == "es" ? $product->nombre : $product->nombre2 }}" data-toggle="lightbox">
                        <img src="{{ asset('uploads/productos/m/'.$product->foto) }}" />
                        <h3>{{ $lang == "es" ? $product->nombre : $product->nombre2 }}</h3>
                        
                        </a>
                    </div>
                  </div>
                @endforeach
            </div>
            @else
            <p class="text-center">No existen productos.</p>
            @endisset
      </div>
    </div>
    @if(!empty($subcategory->tabla))
        <h3 class="text-center">{{ __('text.general_text1') }}:</h3>
        <p class="text-center"><img src="{{ asset('uploads/subcategorias/'.$subcategory->tabla) }}" style="width: 100%; height: auto;"></p>
    @endif
  </div>
@endsection