@extends('client.external.layout')
@section('content')
<form method="post" action="LostPassByMail.aspx" id="ctl00">
   <div class="aspNetHidden">
      <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
      <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
      <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
      <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="DwBVRRS4z1BQ5Cfv2UCGRumUlS9oUhSgtDYt0gGkQ3Ff6NNEfD2ymojk3huSlxN9rvK/I0Jp6KEW2d9Na0XNpyJj39ILFoKgBdpWnmFQyySXe+yafqd9z1VSRMDQ5zE9kH4kOcWZg9tkXh49nwwx9bTCv1nFqgEJ4l6tXAX7o9Hi1UmAWdpnn9juVhyxUMruh9ZoY2lCPnFHuaV+VkpxT55Hp7I3JOtpoT89YnIGw7TPM22E4KXHIfwq2SvhAV9nMLdLMWanuLivFl6ei/N1l1j5duvplrBOgpvIdvMpRN7T1xGIDYl0sMikkv4oztEobjTkAqRsSKRYqo+PfmqdQoF8OgjslZIz7VnWauF3wpRmMs0ubOPVECgUsToUaueH1zd+h6bWWdhxldSUcXOowL/jopGhSEeqEt6Sh9tsF/12rMgshedP3btf2+7IrbaBc2rDriSZHrJfZ7IdJelRIwdbyHktk1nB/hMUCoAAaq0=">
   </div>
   
   <div class="aspNetHidden">
      <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="16A8FC75">
      <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="r4Q72bY3qqD3ogwiMROWBvBG9iYUIWho/qzUuDQP9Ubso889ikNsQqT7Zhp106bV8iHQ2J/+axPcbfGmDlrrp8xPGT2vdHvCXxhfLiHMGW/9Dc49+uNZ2HpFRncOfxqz78FP2rv60AqeZTczEYjYBsqRa5wm6PU59k4nY91YtgaX7m+abqfGa7KdwG+EnjYoZRcAsSBjU2tjuAwAiDdBLRtIJpVY0vjiQYpZnnP/kHvyMh4hnLXNKNULRZxHpd4hjcSg1DFfKB8RyPyLaj3pfJRKvtvycNgg5mbkpm974KdSlTwgDXruxFXXhv6Z2VKh3Yoaew3fbAqrn9pVWkkcfG5Fc6bjuh3+3RTUQfI8QpMiYeI0Ho/mg0RV0ZtaLBxEU3L9CIy8cxFeLTVMWXhje7K9tL2AYUakyBKTJmybscjkSzGvoHTVBuf82G42ziTESODyyDYyby2Pywn0y6R0hi72fpXw7gZ5S6LmRjw/WCW9o1nuT0B/FBJTYG4dgKpS">
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
               <h1>Lấy lại mật khẩu qua Email</h1>
               <div>
                  <h1 class="buoc1"><b>Bước 1:</b> Chọn máy chủ -&gt; Nhập tên tài khoản -&gt; Gửi mã xác thực </h1>
                  <span class="line"></span>
               </div>
               <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 form-box">
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
                        <input type="submit" name="ctl00$ContentPlaceHolder1$butlaymail" value="Gửi Mã Xác Thực" id="ContentPlaceHolder1_butlaymail" class="submit">
                     </div>
                  </div>
               </div>
               <div>
                  <h1 class="buoc1"><b>Bước 2:</b> Nhập mật khẩu -&gt; Nhập mã xác thực -&gt; Đổi mật khẩu</h1>
                  <span class="line"></span>
               </div>
               <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 form-box">
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txtmk" type="password" id="ContentPlaceHolder1_txtmk" class="form-control" placeholder="Nhập mật khẩu">
                     </div>
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txtmkagian" type="password" id="ContentPlaceHolder1_txtmkagian" class="form-control" placeholder="Nhập lại mật khẩu">
                     </div>
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txtopt" type="text" id="ContentPlaceHolder1_txtopt" class="form-control" placeholder="Mã xác thực">
                     </div>
                     <div class="form-group margin">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$submit" value="Đổi Mật Khẩu" id="ContentPlaceHolder1_submit" class="submit">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" style="margin-top: 60px;">
               <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 form-box">
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
         </div>
      </div>
   </div>
</form>
@endsection