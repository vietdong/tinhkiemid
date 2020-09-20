@extends('client.inside.layout')
@section('content')
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐỔI MẬT KHẨU - TLTK</div>

                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <center>Bạn có thể sử dụng 1 trong 2 cách để đổi mật khẩu<br>Sử dụng <b>OTP SMS</b> hoặc sử dụng <b>Mật Khẩu Cấp 2</b><br>Mỗi ngày bạn có thể nhận 1 OTP SMS miễn phí (không cộng dồn tích lũy theo ngày).<br>Phí mỗi lần lấy mã OTP tiếp theo là 1000 Đồng ưu tiên Đồng Khuyến Mại</center>
                    </div>

                    <div class="form-group margin">
                        <select name="ctl00$Noidung$droploaithe" onchange="javascript:setTimeout('__doPostBack(\'ctl00$Noidung$droploaithe\',\'\')', 0)" id="Noidung_droploaithe" class="form-control">
	<option selected="selected" value="Sử Dụng Pass2">Sử Dụng Pass2</option>
	<option value="Sử Dụng OTP">Sử Dụng OTP</option>

</select>
                    </div>
                    
                    <!-- Mật khẩu-->
                    <div id="Noidung_panel1">
	
                        <div class="form-group margin">
                            <input name="ctl00$Noidung$txtmkcap2" type="password" id="Noidung_txtmkcap2" placeholder="Nhập vào mật khẩu cấp 2" class="form-control">
                        </div>
                    
</div>
                    <!-- Mật khẩu -->
                    <div class="form-group margin">
                        <input name="ctl00$Noidung$txtmkmoi" type="password" id="Noidung_txtmkmoi" placeholder="Nhập mật khẩu mới" class="form-control">
                    </div>

                    <div class="form-group margin">
                        <input name="ctl00$Noidung$txtmkmoi2" type="password" id="Noidung_txtmkmoi2" placeholder="Nhập lại mật khẩu mới" class="form-control">
                    </div>
                    <!-- Mật khẩu -->

                    <!-- Button -->
                    <div class="form-group margin">
                        <input type="submit" name="ctl00$Noidung$butnap" value="Đổi Mật Khẩu" id="Noidung_butnap" class="submit">
                    </div>

                    <!-- Text Báo thành công -->
                </div>
            </div>
    @endsection