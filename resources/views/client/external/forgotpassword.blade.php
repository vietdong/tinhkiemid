@extends('client.external.layout')
@section('content')
<form method="post" action="Forgotpassword.aspx" id="ctl00">
   <div class="aspNetHidden">
      <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
      <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
      <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="yqvJwWscggP9xoqDD27B9fvkRcUtukgZvV8dZ1VPcB5RuNJSV/wM/VnTVpUEUN9+VvgAuH8G7WwxsruJiKY+kH6NEthbXh8SlpUjiU6eVxY=">
   </div>
   
   <div class="aspNetHidden">
      <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C633E78B">
   </div>

   <div id="ContentPlaceHolder1_updateProgress" style="display:none;" role="status" aria-hidden="true">
      <div style="position: fixed; text-align: center; height: 100%; width: 100%; top: 0; right: 0; left: 0; z-index: 9999999; background-color: #000000; opacity: 0.7;">
         <img id="ContentPlaceHolder1_imgUpdateProgress" title="Loading ..." src="img/loading.gif" alt="Loading ..." style="padding: 10px; position: fixed; top: 45%; left: 50%;">
      </div>
   </div>
   <div id="ContentPlaceHolder1_UpdatePanel1">
      <div class="container">
         <div class="row" style="margin-top: 60px;">
            <div class="col-sm-8 col-sm-offset-2 text">
               <img src="{{asset('asset/img/tinhkiemid.png')}}">
               <h1>Quên mật khẩu</h1>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
               <div class="form-qmk">
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center place">
                     <a href="{{route('lost.pass.by.info')}}">
                        <div class="margin-ten-bottom">
                           <img alt="" src="{{asset('asset/img/icon1.png')}}" data-selector="img">
                        </div>
                     </a>
                     <a href="{{route('lost.pass.by.info')}}" class="text-qmk">Sử dụng câu hỏi &amp; câu trả lời bí mật</a>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center place">
                     <a onclick="ShowConfirm('Thông Báo','Chức năng hiện đang bảo trì')">
                        <div class="margin-ten-bottom">
                           <img alt="" src="{{asset('asset/img/icon2.png')}}" data-selector="img">
                        </div>
                     </a>
                     <a onclick="ShowConfirm('Thông Báo','Chức năng hiện đang bảo trì')" class="text-qmk">Sử dụng SĐT</a>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center place">
                     <a href="{{route('lost.pass.by.mail')}}">
                        <div class="margin-ten-bottom">
                           <img alt="" src="{{asset('asset/img/icon3.png')}}" data-selector="img">
                        </div>
                     </a>
                     <a href="{{route('lost.pass.by.mail')}}" class="text-qmk">Sử dụng Email</a>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-center place">
                     <a href="{{route('get.info')}}">
                        <div class="margin-ten-bottom">
                           <img alt="" src="{{asset('asset/img/icon4.png')}}" data-selector="img">
                        </div>
                     </a>
                     <a href="{{route('get.info')}}" class="text-qmk">Lấy lại thông tin</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="link-dk"><a href="Register">Đăng ký tài khoản mới</a></div>
            <div class="dk-fb">
               <a href="https://www.facebook.com/groups/game4you.us/" target="_blank">
               <img src="img/cd.png" alt=""></a>
               <a href="https://www.facebook.com/tinhkiem/" target="_blank">
               <img src="img/fb.png" alt=""></a>
            </div>
         </div>
      </div>
   </div>
</form>
@endsection