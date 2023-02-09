<form class="form-horizontal" id="form_contacto">
    @csrf
    <div class="row" style="margin-left: 0; margin-right: 0;">
        <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group"><input type="text" class="form-control" name="nombre" placeholder="{{__('text.footer_text6')}}" required></div>
        <div class="form-group"><input type="text" class="form-control" name="empresa" placeholder="{{__('text.footer_text7')}}" required></div>
        <div class="form-group"><input type="text" class="form-control" name="tel" placeholder="{{__('text.footer_text8')}}" required></div>
        <div class="form-group"><input type="email" class="form-control" name="email" placeholder="{{__('text.footer_text9')}}" required></div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group"><textarea class="form-control" name="mensaje" placeholder="{{__('text.footer_text10')}}" style="height: 166px; resize: none" required></textarea></div>
        <button type="submit" class="btn btn-primary pull-right">{{__('text.footer_text4')}} <i class="fa fa-angle-right"></i></button>
        </div>
    </div>
</form>
