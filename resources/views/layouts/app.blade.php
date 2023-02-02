<!DOCTYPE html>
<html lang="es">
  <head>
    {{-- <base href="{{ url }}"> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="{{ __('text.general_text3') }}">
    <meta name="keywords" content="plasticos, llantas, rodajas, metales especiales, pipe and joint">
    <meta name="author" content="Glucosa Comunicación">
    <link rel="icon" href="favicon.png">
    <title>Mudisa {{ isset($title)? '| '.$title:'' }}</title>
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/ekko-lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    
    {{-- @if (existe('css/'~section~'.css'))
        <link href="css/{{ section }}.css" rel="stylesheet">
    @endif --}}
    
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('inlinejs')
  </head>
<!-- NAVBAR
================================================== -->
  {{-- <body class="encima {{ dispositivo }}"> --}}
  <body class="encima">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ request()->routeIs('home')?'active':'' }}">
                <a href="{{ route('home') }}">{{ __('text.home_text') }}</a>
            </li>
            <li class="">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{__('text.productos_text')}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                @foreach($categories as $category)
                <li>
                    <a href="#">
                        @if(\App::getLocale() == 'es')
                        {{ $category->nombre }}
                        @else
                        {{ $category->nombre2 }}
                        @endif
                    </a>
                </li>
                @endforeach
                
              </ul>
            </li>
            <li class="{{ request()->routeIs('about')?'active':'' }}">
                <a href="{{ route('about') }}">
                    {{ __('text.about_text') }}
                </a>
            </li>
            <li class="{{ request()->routeIs('contact')?'active':'' }}">
                <a href="{{ route('contact') }}">
                    {{ __('text.about_text') }}
                </a>
            </li>
          </ul>
          <!--<form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Búsqueda rápida">
            </div>
            <button type="submit" class="btn btn-transparent"><i class="fa fa-search"></i></button>
          </form>-->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                {{ \App::getLocale() == "es" ? "ESP" : "ENG" }} 
                <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="{{ (\App::getLocale() =="es")? 'active':'' }}">
                    <a href="#">ESP </a></li>
                <li class="{{ (\App::getLocale() =="en")? 'active':'' }}">
                    <a href="#">ENG</a></li>
              </ul>
            </li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <main>
      @yield('content')
    </main>
    
    <footer>
      <div class="container" style="padding-bottom: 20px;">
        <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-3 text-center"><img src="images/logo_footer.png" alt="Mudisa"></div>
          <div class="col-xs-12 col-sm-3 col-md-3">
            <h4>{{__('text.footer_text2')}}:</h4>
            <p>52 (33) 3696.0686<br>52 (33) 3696.0785<br>Fax/ 52 (33) 3696.0536</p>
            <h4>{{__('text.footer_text3')}}:</h4>
            <p>Revolución No. 200<br>Colonia El Zapote.<br>Tlajomulco de Zúniga<br>C.P. 45672, Jalisco, México</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <h4>{{__('text.contacto_text')}}:</h4>
            <p>{{__('text.footer_text1')}}</p>
            <form class="form-horizontal" id="form_contacto" name="form_contacto" method="post" action="#">
              <div class="row" style="margin-left: 0; margin-right: 0;">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="form-group"><input type="text" class="form-control" name="nombre" placeholder="{{__('text.footer_text6')}}" required></div>
                  <div class="form-group"><input type="text" class="form-control" name="empresa" placeholder="{{__('text.footer_text7')}}" required></div>
                  <div class="form-group"><input type="text" class="form-control" name="tel" placeholder="{{__('text.footer_text8')}}" required></div>
                  <div class="form-group"><input type="email" class="form-control" name="email" placeholder="{{__('text.footer_text9')}}" required></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="form-group"><textarea class="form-control" name="mensaje" placeholder="{{__('text.footer_text10')}}" style="height: 166px; resize: none" required></textarea></div>
                  <button class="btn btn-primary pull-right">{{__('text.footer_text4')}} <i class="fa fa-angle-right"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="copy text-center">
        {{__('text.footer_text5')}} <a href="http://www.glucosacomunicacion.com/" target="_blank">GLUCOSA COMUNICACIÓN</a>
      </div>
    </footer>
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
    <script src="{{ asset('js/bootbox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/ekko-lightbox.min.js') }}"></script>
    <script>
        jQuery(function($){
          $('.contacto_link').click(function(e){
            e.preventDefault();
            $(window).scrollTo('#form_contacto', 800);
          });
            $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
            $('#form_contacto').submit(function(e){
              e.preventDefault();
              $(this).find('button').prop('disabled', true);
              $.post($(this).attr('action'), $(this).serialize(), function(data){
                data = JSON.parse(data);
                bootbox.alert(data.mensaje);
                $(this).find('button').prop('disabled', false);
                if(data.result == "success"){
                  $('#form_contacto input, #form_contacto textarea').val('');
                }
              });
            });
            $('#boletin_form').submit(function(e){
                e.preventDefault();
                var $form = $(this);
                $form.find('button[type=submit]').addClass('active');
                $.post($form.attr('action'), $form.serialize())
                .done(function(data) {
                    data = jQuery.parseJSON(data);
                    bootbox.alert(data.mensaje);
                    $form.find('button[type=submit]').removeClass('active');
                    $('#boletin_form input, #boletin_form textarea').not(':input[type=button], :input[type=submit], :input[type=reset], :input[type=radio], :input[type=checkbox]').val('');
                }).fail(function(data){
                    bootbox.alert(data.mensaje);
                    $form.find('button[type=submit]').removeClass('active');
                });
            });
        });
    </script>
    
  </body>
</html>