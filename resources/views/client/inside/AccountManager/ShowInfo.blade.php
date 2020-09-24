@extends('client.inside.layout')
@section('content')
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">THÔNG TIN NHÂN VẬT</div>

                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <center>Trang web chỉ hỗ trợ hiển thị Email đăng kí tài khoản hiện tại được ẩn phần đầu với lý do bảo mật<br>Để lấy được các thông tin khác như : mật khẩu cấp 1, mật khẩu cấp2...<br>Vui lòng sử dụng chức năng Lấy lại thông tin<br>Mọi ý kiến góp ý, thắc mắc và khiếu nại về vấn đề tài khoản vui lòng liên hệ địa chỉ email hỗ trợ.<br></center>
                    </div>

                    <div class="form-group margin">
                        <span id="Noidung_txttentk"><b>Tên Đăng Nhập : </b> {{Auth::user()->name}}</span>
                    </div>
                    <div class="form-group margin">
                        <span id="Noidung_txtemail"><b>Email : </b><span class="vali_email"></span></span>
                    </div>
                    <div class="form-group margin">
                        <span id="Noidung_txtsdt"><b>Số ĐT : </b><span class="vali_phone"></span></span>
                    </div>
                    <div class="form-group margin">
                        <span id="Noidung_txtcmtnd"><b>Số CMTND :{{Auth::user()->cmnd ? Auth::user()->cmnd : 'Số chứng minh thư không hợp lệ vui lòng cập nhật'}} </b></span>
                    </div>
                </div>
            </div>
        <script>
            var my_email="{{Auth::user()->email}}";
            var my_slice=my_email.split('@');
            var email = '';
                email +=conver(my_slice[0]);
                email += '@'+my_slice[1];
               $('.vali_email').html('***'+email);
            var my_phone = "{{Auth::user()->phone}}";
            var phone = ''
                phone += conver(my_phone);
                $('.vali_phone').html('***'+phone);
            function conver(my_slice){
               
                var text = '';
                text += my_slice.split('')[my_slice.split('').length-3];
                text += my_slice.split('')[my_slice.split('').length-2];
                text += my_slice.split('')[my_slice.split('').length-1];
                return text;
            }
        </script>
    @endsection