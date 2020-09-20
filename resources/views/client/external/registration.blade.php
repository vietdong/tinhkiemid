@extends('client.external.layout')
@section('content')
<form method="post" action="Register.aspx" id="ctl00">
   <div class="aspNetHidden">
      <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
      <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
      <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="9VNXVSjU2058kYCMnu7hPkYLNn7uTALxz0AGvnJes9zlAzJsO/8C8tFtrxAUsucC7Da6dfwSEi7cHq06OJt0FTF78d8o3BBEFBALuSYfUKKFs/uPAA+wUlgzlMvC7x80IGOr6Oo9yxn8wj+PAlmx0bJy0JBoyFO8ppc5HG5Vca7fmyAfZExiuwImAxRLqifNDBSeJUfkWxW+Jx7muAsV5+ZaFg0bVNwRuvWrxNrGb0wi25ZVxbOBczScBMau03AeelHELEkBfpr0aKLOsf+HupRwRq8qDpTbLSVD+dThzROICh64+GuRHcuxn2FkobfJITzXlEWeR3kC1hZkDKxuZHel5w9+7E1qT0hLzxA0RC4xYRhZVJ2m8twPk5x6OqhX64hOn7Sik+qwMN4cSPm+Xu9dem7RIiqaHDgDNb6j2Vq3eWqzvKBj4+BQT+viVAOGstDQFV21lnofPEo52VN6sifOGGEI/byT8sf1G57F/aHZ66V0v6bjppCsc5KGDkcfYMlaCfA8E48RXZeUcmPmmax/rlpouHqZqRVHmBy7F1Feh8/B+i0wyr8kRkLYUyaWsOBi0Pb4+iWY0BKSlSLekxX3Jrf9ghcDWr8rIy5pJWKjH2bK5W4uHWkMp/9X27TEGuEZpy5MJt0abcInoSW+Q9fqM2gcQF1ZeEyBAtXMC+LBeIkkpanJS98WnUKYURFW3v+6LYT8E+D4cq5CN2xwBi56AMNhxWXjqYXrJu4xWWbzdiMRVoDUB4APfViY5kutjy/P2e0jh2u3GFVXeh3smQtD8r1fVhPCgpfCEmnJFi94qA8/yc1kjtgxGrWQP3DbsTz1fpeuPX/4CLgAcURv/PfhazwDxm94EIU0N9wL+RHLAJO6kUyvsYrulh+zZTRaFURKR25pVx4Z54wWDe6cNvZoQgRgb9pjyPgPGhHnQl7sxswXLnpYXp9y86NCeSdWiRNQitVuEmgq2MPWlLr5GwPSCwiG3kf8mnrqc7AtFnGxbG+BlmU89IgmJ8hrhDmdHslh+hfEJRwMuIoLIEFLOFHcNoRcCNkpy/i8Isxnl/+Nj+6UmHAvB/nPEO4ZDfs/57yi69W+lIAkxaljclOqayf0XtQuQa9UXjJTODzZF7SmB4+MGse00eSO3FOU+4rzRHpGd6hkcU1HcFVOgufQKYy7cTu/4UnZrfwulnQa1X0CJI6HsNEmrxLHKdI47hsA5z8ygX0FnygGaMsUTXOUFHQ4906tIvM1KUUyoCrdyI6SvteHsc6dGDmYJwT06DyOWqH6RiRIfhrQarrot6uZKBOJdgYnHWP9Csx3C4uf7V326ZNUAbEK7emzlx/ZG51pUvMMZYj/sjoym+3KvsvCZTiK4U+D/usL8TEKCJzaIC9m7oXO2BcgcM2fXmo+QFTGVYRK2DOkUN76vJPSwnQ+p6zVk35zuHrKZP01Qv6jkzywVPxfdBxD0FY1MKiQhFhW7jYZhXjaE/P3lVshEtgWoeHfnV7dNlC6EyLt6/h7EMFuhp20CyfAY3MU2wjYT5mmgFZ2W6FiQ2jdxUZYzNTfu7MVO4O8U+iHp98viIXJU6ByEck58oZ0iSxPmpXLMfuVpxTOU3n+T6P6Ot+JR8dn311lZXhP2jBN1gUJS4FpOviaaX73i7SmfKZUFPbHMaJXqrDWE6euqWFi0vBMxWpAxu+GqDiQD2zdK19VFNEUr1W68V9hMah2or4OzhWtO6Fw">
   </div>

   <div class="aspNetHidden">
      <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="799CC77D">
      <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="Drup6vlixpRSDkd3xU2xaYNepiE8ottNxI4x83WUyKiueW3oKOBxBd5UVkAhc5e/3FPhFHCQuieUUOdkzLBHDXm41NW+CHXflgzlM6yH+BTkwgVF5HNoeNcxZYll5wEV+eN4jAgXwCjeg6spRRZYl8NAw0KnAFliNSEw7wQHJ1qCWANuWVQ7zKF5kF7I3SQk99MQPgAlFxYRR9ztUwW9KXyZgcvJKkslCXYZliy5Xfg0iyegWrAeAuv3xmHriyVi6wc9cR+qUJvS9reUd5NNaEy2dsS7+YYwSuglfbz+yIMFXYMJ4et5iqWFrZUKL4FQG3aTinAqxuUB6lBgVg4z6nf78m5H9GgBfpk5S/b+62ChCFvc98AtceA5909oGAa0Pda5uhEe0V32wbeusjGGaLshJdDBBxLuJ50DPKp7wU4U0a+rFQDKFehkqXJ/mA+EzsqkgONqzoAUiAJo/TpJ0WYOobnelJWHieIiVs7JyuCXNMzorNb7bJfaMMb+No2OtCpJLlVniYhF8symy9mWBuaP180ozbqNNY2dVxIKlriBSYw5fjvi0WuAn8XxqAznFn66+0ByizxvtNUhskUcUxIWgeIVRHjsigzSkeUm23NuxWm4Wp49Adv5lyETHo1eieYcXourfftUSSA2b1CCwqY3rqM10lIiZYhLcTQvB1jvICJucYiebplVFiboiJ1Z1pItFiErTud1TeJlxKW+6g==">
   </div>
   <div class="container">
      <div class="row" style="margin-top: 60px;">
         <div class="col-sm-8 col-sm-offset-2 text">
            <img src="{{asset('asset/img/tinhkiemid.png')}}">
            <h1>Đăng ký tài khoản</h1>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6 col-sm-offset-3 form-box">
            <div class="form-bottom">
               <div id="ContentPlaceHolder1_updateProgress" style="display:none;" role="status" aria-hidden="true">
                  <div style="position: fixed; text-align: center; height: 100%; width: 100%; top: 0; right: 0; left: 0; z-index: 9999999; background-color: #000000; opacity: 0.7;">
                     <img id="ContentPlaceHolder1_imgUpdateProgress" title="Loading ..." src="img/loading.gif" alt="Loading ..." style="padding: 10px; position: fixed; top: 45%; left: 50%;">
                  </div>
               </div>
               <div id="ContentPlaceHolder1_UpdatePanel1">
                  <div class="form-horizontal bv-form" id="contact_form" novalidate="novalidate">
                     <div class="form-group margin">
                        <select name="ctl00$ContentPlaceHolder1$dropmaychu" id="ContentPlaceHolder1_dropmaychu">
                           <option value="1">Nhất Kiếm</option>
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
                        <input name="ctl00$ContentPlaceHolder1$txttendn" type="text" id="ContentPlaceHolder1_txttendn" placeholder="Tên đăng nhập (6-12 ký tự)" class="form-control">
                     </div>
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txtmk" type="password" id="ContentPlaceHolder1_txtmk" placeholder="Mật khẩu  (6-12 ký tự)" class="form-control">
                     </div>
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txtmk1" type="password" id="ContentPlaceHolder1_txtmk1" placeholder="Mật khẩu cấp 2  (6-12 ký tự)" class="form-control">
                     </div>
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txtemail" type="text" id="ContentPlaceHolder1_txtemail" placeholder="Email " class="form-control">
                     </div>
                     <div class="form-group margin">
                        <select name="ctl00$ContentPlaceHolder1$dropcauhoibimat" id="ContentPlaceHolder1_dropcauhoibimat">
                           <option value="Biển số xe của bạn là gì?">Biển số xe của bạn là gì?</option>
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
                        <input name="ctl00$ContentPlaceHolder1$txtanser" type="text" id="ContentPlaceHolder1_txtanser" placeholder="Câu trả lời (6-20 ký tự)" class="form-control">
                     </div>
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txtphone" type="text" id="ContentPlaceHolder1_txtphone" placeholder="Số điện thoại" class="form-control">
                     </div>
                     <div class="form-group margin">
                        <div class="custom-control">
                           <input name="ctl00$ContentPlaceHolder1$ASPxCaptcha1$TxtCpatcha" type="text" id="ContentPlaceHolder1_ASPxCaptcha1_TxtCpatcha" placeholder="Nhập Captcha">
                           <img id="ContentPlaceHolder1_ASPxCaptcha1_ImgCaptcha" src="GetImgText.ashx?CaptchaText=Jz8%2bGFfL7oevdLR7bv17XM8Hf%2bP9gW3U%2bssv3d5jurA%3d">
                        </div>
                        <div id="passwordHelpBlock" class="invalid-feedback">
                           <span class="glyphicon glyphicon-refresh" style="font-size:12px"></span>
                           <a id="ContentPlaceHolder1_ASPxCaptcha1_btnTryNewWords" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$ASPxCaptcha1$btnTryNewWords','')" style="font-family:Tahoma;font-size:Smaller;"> Đổi Captcha</a>
                        </div>
                     </div>
                     <div class="form-group margin">
                        <input type="button" name="ctl00$ContentPlaceHolder1$butregister" value="ĐĂNG Ký" onclick="javascript:__doPostBack('ctl00$ContentPlaceHolder1$butregister','')" id="ContentPlaceHolder1_butregister" class="submit">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="link-dk"><a href="Login">Đăng nhập TLBB Tình Kiếm</a></div>
         <div class="dk-fb">
            <a href="https://www.facebook.com/groups/game4you.us/" target="_blank">
            <img src="img/cd.png" alt=""></a>
            <a href="https://www.facebook.com/tinhkiem/" target="_blank">
            <img src="img/fb.png" alt=""></a>
         </div>
      </div>
   </div>
   <script type="text/javascript">
      //<![CDATA[
      Sys.Application.add_init(function() {
          $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":null,"displayAfter":500,"dynamicLayout":true}, null, null, $get("ContentPlaceHolder1_updateProgress"));
      });
      //]]>
   </script>
</form>
@endsection