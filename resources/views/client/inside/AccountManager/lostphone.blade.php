@extends('client.inside.layout')
@section('content')
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">HỖ TRỢ MẤT SIM ĐIỆN THOẠI</div>

                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <span id="Noidung_txthongtinlaylaisodienthoai">Hướng dẫn:<br>- Sử dụng email để cập nhật lại số điện thoại của bạn.<br>- Hệ thống sẽ gửi đường dẫn cập nhật lại số điện thoại vào email của bạn.<br>- Thời gian xử lý yêu cầu tối đa: 14 ngày làm việc.</span>
                    </div>

                    <div id="Noidung_paneldoisodienthoai">
	
                        <div class="form-group margin">
                            <input name="ctl00$Noidung$txtemailhientai" type="text" id="Noidung_txtemailhientai" placeholder="" class="form-control" disabled="disabled" value="Email hiện tại : ***123@gmail.com">
                        </div>

                        <div class="form-group margin">
                            <input name="ctl00$Noidung$txtemailnhapvao" type="text" id="Noidung_txtemailnhapvao" placeholder="(Nhập vào email đã sử dụng để đăng ký tài khoản)" class="form-control">
                        </div>

                        
<div class="form-group margin">

    <div class="custom-control">       
        <input name="ctl00$Noidung$txtcapthcayeucauguiemail$TxtCpatcha" type="text" id="Noidung_txtcapthcayeucauguiemail_TxtCpatcha" placeholder="Nhập Captcha">
         <img id="Noidung_txtcapthcayeucauguiemail_ImgCaptcha" src="GetImgText.ashx?CaptchaText=SIOkhBcN5rnmpXxfxlX7yKQ5LnCWgDdv9RCSivoc6X4%3d">
    </div>
    <div id="passwordHelpBlock" class="invalid-feedback">
        <span class="glyphicon glyphicon-refresh" style="font-size:12px"></span>
        <a id="Noidung_txtcapthcayeucauguiemail_btnTryNewWords" href="javascript:__doPostBack('ctl00$Noidung$txtcapthcayeucauguiemail$btnTryNewWords','')" style="font-family:Tahoma;font-size:Smaller;"> Đổi Captcha</a>
    </div>
</div>

                        <div class="form-group margin">
                            <input type="submit" name="ctl00$Noidung$buttonrequestchangephone" value="GỬI YÊU CẦU" id="Noidung_buttonrequestchangephone" class="submit">
                        </div>
                    
</div>

                    

                    <!-- Text Báo thành công -->
                </div>
            </div>
        @endsection