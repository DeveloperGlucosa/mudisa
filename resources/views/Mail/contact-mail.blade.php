<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <title>Mudisa</title>
    <style>
    @font-face {
     font-family: 'Open Sans';
     font-style: normal;
     font-weight: 400;
     src: local('Open Sans'), local('OpenSans'), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/cJZKeOuBrn4kERxqtaUH3bO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
    }
    @media screen { 
      @font-face {
       font-family: 'Open Sans';
       font-style: normal;
       font-weight: 400;
       src: local('Open Sans'), local('OpenSans'), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/cJZKeOuBrn4kERxqtaUH3bO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
      }
    }
    body {
      margin: 0;
      padding: 0;
      color: #000;
      background-color: #FFF;
      font-size: 12px;
      font-family: 'Open Sans', 'Gill Sans', Arial, Helvetica, sans-serif;
    }
    td {
      color: #000;
      font-size: 12px;
      font-family: 'Open Sans', 'Gill Sans', Arial, Helvetica, sans-serif;
    }
    </style>
  </head>
  <body text="#000000" bgcolor="#FFFFFF">
    <div style="width: 600px; margin: 0 auto; text-align: center"><a href="{{ route('home') }}"><img src="{{ $message->embed(asset('images/logo.png')) }}" alt="Mudisa" border="0"></a></div>
    <div style="background: #FFF url({{ asset('img/email/email_body.png') }}) repeat-y scroll 0 0; width: 446px; padding: 10px 77px; margin: 5px auto;">
        <h2 style="font-family: 'Open Sans', 'Gill Sans', Arial, Helvetica, sans-serif; font-size: 14px;">
            Hola
        </h2>
      
      <h1 style="font-family: 'Open Sans', 'Gill Sans', Arial, Helvetica, sans-serif; font-size: 24px; color: #C30C0E">Formulario de Contacto</h1>
      <p style="font-family: 'Open Sans', 'Gill Sans', Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 600; text-align: justify">
        Nombre: {{ $data['nombre'] }}
    </p>
    <p style="font-family: 'Open Sans', 'Gill Sans', Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 600; text-align: justify">
        Correo electrónico: {{ $data['email'] }}
    </p>
    <p style="font-family: 'Open Sans', 'Gill Sans', Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 600; text-align: justify">
        Empresa: {{ $data['empresa'] }}
    </p>
    <p style="font-family: 'Open Sans', 'Gill Sans', Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 600; text-align: justify">
        Teléfono: {{ $data['tel'] }}
    </p>
    <p style="font-family: 'Open Sans', 'Gill Sans', Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 600; text-align: justify">
        Mensaje: {{ $data['mensaje'] }}
    </p>
    </div>
    <div style="background-image: url({{ asset('img/email/email_footer.jpg') }}); width: 600px; height: 64px; margin: 0 auto; text-align: center; color: #FFF; font-size: 10px; padding-top: 5px">
      <p>Copyright © Mudisa. TODOS LOS DERECHOS RESERVADOS<br>
        <a href="mailto:{{env('MAIL_FROM_ADDRESS')}}?Subject=Soporte%20Mudisa" style="color:#FFF; text-decoration: none">{{env('MAIL_FROM_ADDRESS')}}</a> | <a href="{{ route('home') }}" style="color:#FFF; text-decoration: none">www.mudisa.com.mx</a>
      </p>
    </div>
  </body>
</html>