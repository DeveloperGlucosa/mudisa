@extends('layouts.app', ['title' => $lang=="es"?$category->nombre:$category->nombre2])
@section('content')

<br>
<div class="container">
    <div>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">{{ __('text.home_text') }}</a></li>
            <li class="active">{{ __('text.productos_text') }}</li>
            <li class="active">{{ ucfirst($lang=='es'?($category->nombre):$category->nombre2) }}</li>
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
                {{ $lang=='es'?$category->nombre:$category->nombre2 }}
            </h2>
            <p style="font-weight: 400;">
                {{ $lang == 'es'?$category->descripcion:$category->descripcion2 }}
            </p>
            <br>
            @isset($category->Products)
            <div class="row">
                @foreach ($category->Products as $product)
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="producto">
                        <a href="#">
                            <img src="{{ asset('uploads/productos/s/'.$product->foto) }}" />
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
    @isset($category->table)
    <h3 class="text-center">{{__('text.general_text1')}}:</h3>
    <p class="text-center">
        <img src="{{ asset('uploads/categorias/'.$category->table) }}" style="width: 100%; height: auto;"></p>
    @endisset
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