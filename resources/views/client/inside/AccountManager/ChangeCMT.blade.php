@extends('client.inside.layout')
@section('content')
<form method="post" action="{{route('change.CMT')}}">
{{csrf_field()}}
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐỔI CMT NHÂN DÂN</div>

                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <center>Bạn có thể sử dụng 1 trong 2 cách để đổi CMTND<br>Sử dụng <b>OTP SMS</b> hoặc sử dụng <b>Câu Hỏi - Câu Trả Lời Bí Mật</b><br>Mỗi ngày bạn có thể nhận 1 OTP SMS miễn phí (không cộng dồn tích lũy theo ngày)<br>Phí mỗi lần lấy mã OTP tiếp theo là 1000 Đồng ưu tiên Đồng Khuyến Mại</center>
                    </div>

                    <div class="form-group margin">
                        <select  class="form-control">
	<option selected="selected" value="Sử Dụng Thông Tin Tài Khoản">Sử Dụng Thông Tin Tài Khoản</option>
	<option value="Sử Dụng OTP">Sử Dụng OTP</option>

</select>
                    </div>
                    
                    <!-- Mật khẩu-->
                    <div id="Noidung_panelchangecmtbyquest">
	
                        <div class="form-group margin">
                            <select name="question" id="Noidung_dropchangecmtcauhoibimat" class="form-control">
                            @foreach($question as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
	                   </select>
                        </div>
                        <div class="form-group margin">
                            <input name="answer" type="text" id="Noidung_txtchangecmtcautraloi" placeholder="Nhập câu trả lời bí mật" class="form-control">
                        </div>
                    
</div>
                    <!-- Mật khẩu -->
                    <div class="form-group margin">
                        <input name="cmnd" type="text" id="Noidung_txtchangecmtsocmtnd" placeholder="Nhập số CMTND mới" class="form-control">
                    </div>

                    <div class="form-group margin">
                        <input name="cmnd_confirmation" type="text" id="Noidung_txtchangecmtsocmtndagian" placeholder="Nhập lại số CMTND mới" class="form-control">
                    </div>
                    <!-- Mật khẩu -->

                    <!-- Button -->
                    <div class="form-group margin">
                        <input type="submit" value="Cập Nhật CMT" class="submit">
                    </div>

                    <!-- Text Báo thành công -->
                </div>
            </div>
</form>
            @endsection