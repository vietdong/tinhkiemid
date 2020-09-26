@extends('client.inside.layout')
@section('content')
<form method="post" action="{{route('change.question')}}">
{{csrf_field()}}
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐỔI CÂU HỎI BÍ MẬT - TLTK</div>

                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <center>Bạn có thể sử dụng 1 trong 2 cách để đổi Câu Hỏi - Câu Trả Lời Bí Mật<br>Sử dụng <b>OTP SMS</b> hoặc sử dụng mã <b>Google Authenticator</b><br>Mỗi ngày bạn có thể nhận 1 OTP SMS miễn phí (không cộng dồn tích lũy theo ngày)<br>Phí mỗi lần lấy mã OTP tiếp theo là 1000 Đồng ưu tiên Đồng Khuyến Mại</center>
                    </div>

                    <div class="form-group margin">
                        <select  class="form-control">
	<option selected="selected" value="Sử Dụng Google Authenticator">Sử Dụng Google Authenticator</option>
	<option value="Sử Dụng OTP">Sử Dụng OTP</option>

</select>
                    </div>
                    <div class="form-group margin">
                        <input name="otp" type="text" placeholder="Mã OTP" class="form-control">
                    </div>
                    <!-- Mật khẩu-->
                    <div id="Noidung_panelchangequestgooglecode">
	
                        <div class="form-group margin">
                            <input  type="text" placeholder="Nhập mã Google Authenticator" class="form-control">
                        </div>
                    
</div>
                    <!-- Mật khẩu -->
                    <div class="form-group margin">
                        <select name="question" class="form-control">
                            @foreach($question as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                       </select>
                    </div>

                    <div class="form-group margin">
                        <input name="answer" type="text" placeholder="Nhập Câu Trả Lời Bí Mật" class="form-control">
                    </div>
                    <!-- Mật khẩu -->

                    <!-- Button -->
                    <div class="form-group margin">
                        <input type="submit" value="Đổi Câu Hỏi - Câu Trả Lời Bí Mật" class="submit">
                    </div>

                    <!-- Text Báo thành công -->
                </div>
            </div>
</form>
            @endsection