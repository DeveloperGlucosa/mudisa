@foreach ($categories as $key=>$category)
<div class="panel {{ $id == $category->id ? 'panel-default': 'panel-gris' }}">
    <div class="panel-heading" role="tab" id="heading{{$key}}">
      <h4 class="panel-title">
        
        @php
            $slug = $lang =='es'?$category->seo1:$category->seo2;
        @endphp
        <a href="{{route('category', ['param' => $slug])}}" style="text-transform: capitalize">
         {{ $lang =='es'?$category->nombre:$category->nombre2 }}
        </a>
      </h4>
    </div>
    <div id="collapse{{$key}}" class="panel-collapse collapse-in" role="tabpanel" aria-labelledby="heading{{$key}}">
      <div class="panel-body">
        @if($category->layout == 'N')
            @isset($category->Products)
            <ul>
                @foreach ($category->Products as $product)

                <li>
                    <a href="#">
                        • {{ $lang == 'es'?$product->nombre:$product->nombre2 }}
                    </a>
                </li>
                @endforeach
            </ul>
            @endisset
        @endif
      </div>
    </div>
  </div>
@endforeach
