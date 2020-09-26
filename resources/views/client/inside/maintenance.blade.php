@extends('client.inside.layout')
@section('content')
<form method="post" action="{{route('change.pass')}}">
{{csrf_field()}}

<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐỔI MẬT KHẨU - TLTK</div>
                <div class="form-horizontal background-form" id="contact_form">
                    <div class="col-12">
                     <div class="alert alert-danger alert-dismissible show" role="alert">
                           <strong>Chức năng đang bảo trì</strong>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                     </div>
                    </div>
                </div>
            </div>
</form>
    @endsection