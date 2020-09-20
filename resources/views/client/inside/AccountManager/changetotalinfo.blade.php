@extends('client.inside.layout')
@section('content')
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">CẬP NHẬT THÔNG TIN TÀI KHOẢN</div>

                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        Hướng dẫn:
                        <br>
                        - Mỗi ngày bạn có thể nhận 1 OTP SMS miễn phí (không cộng dồn tích lũy theo ngày).<br>
                        - Sử dụng 1 mã OTP SMS có thể thay đổi hoặc cập nhật tất cả thông tin
tài khoản của bạn.<br>
                        - Nếu 1 ngày bạn thay đổi hoặc cập nhật thông tin tài khoản &gt; 1 lần. Phí
mỗi lần lấy mã OTP SMS tiếp theo là 1000 Đồng của tài khoản.
                        <br>
                        <b>Chú ý: Điền thông tin vào các danh mục bạn muốn thay đổi/Cập nhật. Có
thể để trống nếu giữ nguyên thông tin tài khoản cũ.</b>
                    </div>

                    <div class="form-group margin">
                        Tên tài khoản:
                        <input name="ctl00$Noidung$txttentaikhoan" type="text" id="Noidung_txttentaikhoan" placeholder="" disabled="disabled" class="form-control" value="demo12345">
                    </div>

                    <div class="form-group margin">
                        Mật khẩu mới:
                        <input name="ctl00$Noidung$txttotalinfotxtmk" type="password" id="Noidung_txttotalinfotxtmk" placeholder="(Nhập mật khẩu mới nếu muốn thay đổi)" class="form-control">
                    </div>

                    <div class="form-group margin">
                        Nhập lại mật khẩu mới:
                        <input name="ctl00$Noidung$txttotalinfotxtmk1" type="password" id="Noidung_txttotalinfotxtmk1" placeholder="(Nhập mật khẩu mới nếu muốn thay đổi)" class="form-control">
                    </div>

                    <div class="form-group margin">
                        Số điện thoại mới:
                        <input name="ctl00$Noidung$txttotalinfosdt" type="text" id="Noidung_txttotalinfosdt" placeholder="(Nhập số điện thoại mới nếu muốn thay đổi)" class="form-control">
                    </div>

                    <div class="form-group margin">
                        Email mới:
                        <input name="ctl00$Noidung$txttotalinfoemail" type="text" id="Noidung_txttotalinfoemail" placeholder="(Nhập email mới nếu muốn thay đổi)" class="form-control">
                    </div>

                    <div class="form-group margin">
                        Số CMND mới:
                        <input name="ctl00$Noidung$txttotalinfocmt" type="text" id="Noidung_txttotalinfocmt" placeholder="(Nhập CMT mới nếu muốn thay đổi)" class="form-control">
                    </div>
                    Nhập mã OTP:
                    <div class="form-inline">

                        <div class="form-group">
                            <input name="ctl00$Noidung$txtidopttotalinfo" type="text" id="Noidung_txtidopttotalinfo" class="form-control" placeholder="Nhập OTP">
                        </div>

                        <input type="submit" name="ctl00$Noidung$butnhanoptdoitotalinfo" value="Nhận OTP" id="Noidung_butnhanoptdoitotalinfo" class="btn btn-primary mb-2 opt">
                    </div>
                    <br>

                    <div class="form-group margin">
                        <input type="submit" name="ctl00$Noidung$butchangtoltalinfo" value="CẬP NHẬT THÔNG TIN" id="Noidung_butchangtoltalinfo" class="submit">
                    </div>

                    <!-- Text Báo thành công -->
                </div>
            </div>
@endsection