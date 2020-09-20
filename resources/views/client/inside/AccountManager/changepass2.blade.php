@extends('client.inside.layout')
@section('content')
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐỔI MẬT KHẨU CẤP 2 - TLTK</div>

                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <center>Bạn có thể sử dụng 1 trong 2 cách để đổi mật khẩu cấp 2<br>Sử dụng <b>OTP SMS</b> hoặc sử dụng <b>Câu Hỏi - Câu Trả Lời Bí Mật</b><br>Mỗi ngày bạn có thể nhận 1 OTP SMS miễn phí (không cộng dồn tích lũy theo ngày)<br>Phí mỗi lần lấy mã OTP tiếp theo là 1000 Đồng ưu tiên Đồng Khuyến Mại</center>
                    </div>

                    <div class="form-group margin">
                        <select name="ctl00$Noidung$droppas2chonloai" onchange="javascript:setTimeout('__doPostBack(\'ctl00$Noidung$droppas2chonloai\',\'\')', 0)" id="Noidung_droppas2chonloai" class="form-control">
                            <option selected="selected" value="Sử Dụng Thông Tin Tài Khoản">Sử Dụng Thông Tin Tài Khoản</option>
                            <option value="Sử Dụng OTP">Sử Dụng OTP</option>
                        </select>
                    </div>
                    
                    <!-- Mật khẩu-->
                    <div id="Noidung_panelpass2tttk">
	
                        <div class="form-group margin">
                            <select name="ctl00$Noidung$dropcauhoibimat" id="Noidung_dropcauhoibimat" class="form-control">
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
                            <input name="ctl00$Noidung$txtpass2cautraloibimat" type="text" id="Noidung_txtpass2cautraloibimat" placeholder="Nhập câu trả lời bí mật" class="form-control">
                        </div>
                    
                </div>
                    <!-- Mật khẩu -->
                    <div class="form-group margin">
                        <input name="ctl00$Noidung$txtpass2moi" type="password" id="Noidung_txtpass2moi" placeholder="Nhập mật khẩu cấp 2 mới" class="form-control">
                    </div>

                    <div class="form-group margin">
                        <input name="ctl00$Noidung$txtpass2moiagian" type="password" id="Noidung_txtpass2moiagian" placeholder="Nhập lại mật khẩu cấp 2 mới" class="form-control">
                    </div>
                    <!-- Mật khẩu -->

                    <!-- Button -->
                    <div class="form-group margin">
                        <input type="submit" name="ctl00$Noidung$butdoipass2" value="Đổi Mật Khẩu" id="Noidung_butdoipass2" class="submit">
                    </div>

                    <!-- Text Báo thành công -->
                </div>
            </div>
@endsection