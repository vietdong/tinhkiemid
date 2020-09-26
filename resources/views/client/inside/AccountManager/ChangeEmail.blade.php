@extends('client.inside.layout')
@section('content')
<form method="post" action="{{route('change.email')}}">
{{csrf_field()}}
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐỔI EMAIL - TLTK</div>

                <div class="form-horizontal background-form" >

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <center>Bạn có thể sử dụng mã OTP để đổi email</center>
                    </div>
                    @if(session('check'))
                    <div class="col-12">
                     <div class="alert alert-danger alert-dismissible show" role="alert">
                           <strong>{{session('check')}}</strong>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                     </div>
                    </div>
                    @endif
                    <div class="form-group margin">
                        <input name="otp" type="text" placeholder="Mã OTP" class="form-control">
                    </div>
                    
                    <!-- Mật khẩu-->
                    <div id="Noidung_panelchangemailgooogleCode">
	
                        <div class="form-group margin">
                            <input  type="text" placeholder="Nhập mã Google Authenticator" class="form-control">
                        </div>
                    
</div>
                    <!-- Mật khẩu -->
                    <div class="form-group margin">
                        <input name="email" type="text" placeholder="Nhập Email mới" class="form-control">
                    </div>

                    <div class="form-group margin">
                        <input name="email_confirmation" type="text"  placeholder="Nhập lại Email mới" class="form-control">
                    </div>
                    <!-- Mật khẩu -->

                    <!-- Button -->
                    <div class="form-group margin">
                        <input type="submit" value="Đổi Email"  class="submit">
                    </div>

                    <!-- Text Báo thành công -->
                </div>
            </div>
</form>
            @endsection