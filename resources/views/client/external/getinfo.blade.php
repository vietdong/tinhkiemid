@extends('client.external.layout')
@section('content')
<form method="post" action="GetInfo.aspx" id="ctl00">
   <div class="aspNetHidden">
      <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
      <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
      <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
      <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="CeFtBIUNhhYmR3dWl0iYpUnvkXxDLyLmgyL0oUhObL5FsvjsIMp6wPJvxu6amzS2ltsXKdrK9wx6ZpbOI8RhbRozul+9FpjBLeYy2xuIlR7RJsgiM1rervLVWzkImrMLoD9N5VUKCxk+jf8dJ7NUWUQ0pJ/3mnrQa4hIygQfrepdhQ+SJcgvzvtToBLujtRPT9QOXvZvdSCp+V+YK5R/zoP+qRmj5Jfx1WZCvSH6OFuus7N0k5J4PuVTGK487iiXkXUev7AEE6i98Hcc9+flh21jDKXcESN/AOSoejjmVxamqvxYebWAsnaFMOObB/sp8ylOoA3NkZ6BBKUgEmXbj+EGwdyqTXDF9l/iL0Zx/HAGXWEkL8x9qJnjAqqYYekvjMz/QXO1v8yGpp64aNr3OKbM14HWPF6Rl4uhD/SuPkbC6L/hblGYS4TMeE4Q6dN7pK+/cIVFy3MtsJ6TOEaiBX1/IyKterMbAC8Z+gVJLGLJDPc2r/JwAxT1/8Jk/cFEDXrSx4r50zW9VdG5xaR1uUil+N2eXUbk0KsHOJrlhaiXY4Kei7kZCbvUFXcSnQ8vVhKLYNHS8KNJs4CDLyqxkSckkBuKkiMshbrtZGWwoWMmIwHx8eKsOy4T0rhWF78lk/EE889sHQCWzVR3RCzAnTFS5bd1rJbw3ZIVYryMPNU=">
   </div>
   <div class="aspNetHidden">
      <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="D4525AF0">
      <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="1xPTFyOv7H4hmGHAhI+Xu7zS0QpX9zLjnB2hcqhj4POZpIiKYAe7UyrRjwXtjjAD/1ZB44uMM0+QxkOCBS6IepJlMGVnaPrN2jdC7YHvqSrAmrWDN47s6tEjrqC+lG85BzY7PIP//83F90xqIXX2Wo7dBsvSwgKuvO4h9JM+BruNeY0nL1ZUuH1QzJD205SW2cy4EiPsRUS1iS5d1Z1p+7tNuozQgrCb/38OsJE49AVKQOGzV/Lo7ImkJd33GWxFvJDoOa+DkWLLbjrGIaiajgIB1Yz1hsXrDZfw8Lhx8cRRthQLrZXECX2RbKmJvOvi2ki6YzXYu8WhkuleT6uGMAWDtQSbv7WTsLc/1YXmX6oG2unkKC9uF2JjwewzlmWZuiLXD37qpqR+zEwFNDJ6yzFh/MBKvZidOUQiMNq2892XA0kTaownp7futRTi8w79/hQjHRZPgloq3oSk86W1Vg==">
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
               <h1>Lấy thông tin tài khoản qua Email</h1>
               <br>
               <div>
                  <h1 class="buoc1"><b>Vui lòng cung cấp đầy đủ thông tin dưới Form </b></h1>
                  <span class="line"></span>
               </div>
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-3 form-box">
                     <div class="form-group margin">
                        <select name="ctl00$ContentPlaceHolder1$dropmaychu" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$dropmaychu\',\'\')', 0)" id="ContentPlaceHolder1_dropmaychu">
                           <option selected="selected" value="1">Nhất Kiếm</option>
                           <option value="2">Nhị Kiếm</option>
                           <option value="3">Tam Kiếm</option>
                           <option value="4">Tứ Kiếm</option>
                           <option value="5">Tiếu Ngạo</option>
                           <option value="6">Long Kiếm</option>
                           <option value="11">Tái Chiến</option>
                           <option value="20">Song Kiếm</option>
                           <option value="21">Du Kiếm</option>
                           <option value="22">Ảnh Kiếm</option>
                           <option value="23">Phong Hỏa</option>
                           <option value="24">Bảo Kiếm</option>
                        </select>
                     </div>
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txttendn" type="text" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$txttendn\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="ContentPlaceHolder1_txttendn" class="form-control" placeholder="Tên đăng nhập">
                     </div>
                     <div class="form-group margin">
                        <div class="form-group margin">
                           <div class="custom-control">
                              <input name="ctl00$ContentPlaceHolder1$txtcaptcha$TxtCpatcha" type="text" id="ContentPlaceHolder1_txtcaptcha_TxtCpatcha" placeholder="Nhập Captcha">
                              <img id="ContentPlaceHolder1_txtcaptcha_ImgCaptcha" src="GetImgText.ashx?CaptchaText=1%2b9hViSD3vZ97KiTiydR97caHDXCECwnmk898VB6DH4%3d">
                           </div>
                           <div id="passwordHelpBlock" class="invalid-feedback">
                              <span class="glyphicon glyphicon-refresh" style="font-size:12px"></span>
                              <a id="ContentPlaceHolder1_txtcaptcha_btnTryNewWords" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$txtcaptcha$btnTryNewWords','')" style="font-family:Tahoma;font-size:Smaller;"> Đổi Captcha</a>
                           </div>
                        </div>
                     </div>
                     <div class="form-group margin">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$butlaymail" value="Lấy Lại Thông Tin" id="ContentPlaceHolder1_butlaymail" class="submit">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" style="margin-top: 60px;">
               <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 form-box">
                     <div class="link-dk"><a href="#">Đăng ký tài khoản mới</a></div>
                     <div class="dk-fb">
                        <a href="#" target="_blank">
                        <img src="img/cd.png" alt=""></a>
                        <a href="https://www.facebook.com/tinhkiem/" target="_blank">
                        <img src="img/fb.png" alt=""></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>
@endsection