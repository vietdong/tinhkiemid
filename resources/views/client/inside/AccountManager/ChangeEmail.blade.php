@extends('client.inside.layout')
@section('content')
<form method="post" action="{{route('change.email')}}">
{{csrf_field()}}
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐỔI EMAIL - TLTK</div>

                <div class="form-horizontal background-form" >

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <center>Bạn có thể sử dụng 1 trong 2 cách để đổi Email<br>Sử dụng <b>OTP SMS</b> hoặc sử dụng mã <b>Google Authenticator</b><br>Mỗi ngày bạn có thể nhận 1 OTP SMS miễn phí (không cộng dồn tích lũy theo ngày)<br>Phí mỗi lần lấy mã OTP tiếp theo là 1000 Đồng ưu tiên Đồng Khuyến Mại</center>
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
                        <select  class="form-control">
	<option selected="selected" value="Sử Dụng Google Authenticator">Sử Dụng Google Authenticator</option>
	<option value="Sử Dụng OTP">Sử Dụng OTP</option>

</select>
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