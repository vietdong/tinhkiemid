@extends('client.inside.layout')
@section('content')
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐĂNG KÝ GOOGLE AUTHENTICATOR</div>

                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <span id="Noidung_txthongbaogooglecode"><center><font color="#FF0000"><b>Bước 1: </b></font>cài apps cho <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&amp;hl=vi" target="_blank">Android tại đây</a><br>hoặc <a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8" target="_blank">IOS tại đây</a> <br>hoặc sử dụng Google Chrome Extension <a href="http://game4you.us/guide-1199-huong-dan-dang-ky-ma-google-bang-trinh-duyet-google-chrome-.html" target="_blank">xem hướng dẫn tại đây <br></a><font color="#FF0000"><b>Bước 2 :</b></font>Mở Apps Google Authenticator --&gt; Scan mã QR code hiện bên dưới-&gt;Nhập mã Google Authenticator từ Apps<br>Hướng dẫn sử dụng các bạn có thể xem <a href="https://www.youtube.com/watch?v=A6AC3VpVlgY" target="_blank">tại đây</a></center></span>
                    </div>

                    <div class="form-group margin">
                        <center> <img id="Noidung_txtimageqrcodeurl" src="https://chart.googleapis.com/chart?cht=qr&amp;chs=300x300&amp;chl=otpauth%3A%2F%2Ftotp%2Fdemo12345%3Fsecret%3DGVSTCYRYGU4GEZLGGJSGCMBSGI2GCZTBHBQWIYZVHAYDMMRQMI2A%26issuer%3DTLTK%2520Account"></center>
                    </div>
                    

                    <div id="Noidung_panelregistergoogleplay">
	
                        <div class="form-inline">
                            <div class="form-group">
                                <input name="ctl00$Noidung$txtgooglecodeemailcode" type="text" id="Noidung_txtgooglecodeemailcode" placeholder="Nhập mã xác thực" class="form-control">
                            </div>

                            <input type="submit" name="ctl00$Noidung$butgetCode" value="Lấy Mã Xác Thực" id="Noidung_butgetCode" class="btn btn-primary mb-2 opt">
                        </div>
                        <br>
                        <div class="form-group margin">
                            <input name="ctl00$Noidung$txtgooglecodeapps" type="text" id="Noidung_txtgooglecodeapps" placeholder="Nhập mã Google Authenticator từ Apps" class="form-control">
                        </div>
                        <!-- Mật khẩu-->
                        <div class="form-group margin">
                            <select name="ctl00$Noidung$dropgooglecodecauhoibimat" id="Noidung_dropgooglecodecauhoibimat" class="form-control">
		<option selected="selected" value="Biển số xe của bạn là gì?">Biển số xe của bạn là gì?</option>
		<option value="Bạn tốt nghiệp trung học tại trường nào?">Bạn tốt nghiệp trung học tại trường nào?</option>
		<option value="Ngày cưới của bạn là ngày nào?">Ngày cưới của bạn là ngày nào?</option>
		<option value="Bạn mong muốn được sống ở đâu?">Bạn mong muốn được sống ở đâu?</option>
		<option value="Bộ phim nào gây ấn tượng với bạn nhất?">Bộ phim nào gây ấn tượng với bạn nhất?</option>
		<option value="Môn thể thao yêu thích của bạn là gì?">Môn thể thao yêu thích của bạn là gì?</option>
		<option value="Bạn ghét con vật nào nhất?">Bạn ghét con vật nào nhất?</option>
		<option value="Bạn yêu thích con vật nào nhất?">Bạn yêu thích con vật nào nhất?</option>

	</select>
                        </div>
                        <div class="form-group margin">
                            <input name="ctl00$Noidung$txtgooglecodecautraloibimat" type="text" id="Noidung_txtgooglecodecautraloibimat" placeholder="Nhập câu trả lời bí mật" class="form-control">
                        </div>
                        <!-- Mật khẩu -->

                        <!-- Button -->
                        <div class="form-group margin">
                            <input type="submit" name="ctl00$Noidung$butregistergoooglecode" value="Đăng Ký Google Authenticator" id="Noidung_butregistergoooglecode" class="submit">
                        </div>
                    
</div>
                    <!-- Text Báo thành công -->
                </div>
            </div>
            @endsection