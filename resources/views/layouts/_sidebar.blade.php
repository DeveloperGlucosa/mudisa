@foreach ($categories as $key=>$category)
<div class="panel {{ $id == $category->id ? 'panel-default': 'panel-gris' }}">
    <div class="panel-heading" role="tab" id="heading{{$key}}">
      <h4 class="panel-title">
        
        @php
            $slug = $lang =='es'?$category->seo1:$category->seo2;
        @endphp
        <a href="{{route('category', ['param' => $slug])}}" style="text-transform: capitalize">
         {{ ucfirst(mb_strtolower($lang =='es'?$category->nombre:$category->nombre2)) }}  
        </a>
      </h4>
    </div>
    <div id="collapse{{$key}}" class="panel-collapse {{ $id == $category->id ? 'collapse-in': 'collapse' }}" role="tabpanel" aria-labelledby="heading{{$key}}">
      <div class="panel-body">
        @if($category->layout == 'N')
          @isset($category->Products)
            <ul>
              @foreach ($category->Products->sortBy('nombre') as $product)

              <li>
                  <a href="{{ route('product', ['param' => $product->seo1]) }}">
                      • {{ $lang == 'es'?$product->nombre:$product->nombre2 }}
                  </a>
              </li>
              @endforeach
            </ul>
          @endisset
        @else
            <ul>
              @foreach($category->Subcategories() as $subcategory)
                @if($subcategory['subcat'] == $category->id)
                <li>
                  <a href="{{ route('subcategory', ['param' => $subcategory['seo1']]) }}">
                    • {{ ucfirst(mb_strtolower($lang =='es'?$subcategory['nombre']:$subcategory['nombre2'])) }} 
                  </a>
                </li>
                @endif
              @endforeach
            </ul>

        @endif
      </div>
    </div>
  </div>
@endforeach
