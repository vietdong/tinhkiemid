@extends('client.external.layout')
@section('content')
<form method="post" action="LostPassByInfo.aspx" id="ctl00">
   <div class="aspNetHidden">
      <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
      <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
      <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
      <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="Hk3yU6bUCAipglMAjFObBzjW/YMNc7TWTzUyRx4X0J5NR4JejQooyJL/wx9O5i8IFF1hL5+BtJY1tIupT8i0J3xS4rQQ7/Sj9+68HKx7k9u2dhENxEItjDuY17QHQ7ITA4UruzhNz0fHV0f46tKPT1Z9XDbAWKJn0ITDhTU6m4lrZ6hR77+iuQjjxEnKb/rVOVgYwsSP0xRkz62z6ePnHnCOgOtcvfoXYXX9ZqeGWIe1ieAzV+h1RvukJXkqVr8zAv0kxU9f02sQjpc0YLBSMdU3/+6p79Por5OfT9kE8WR2GfJ1J6QMs8Ud85gv791f8QrVTvNXChhLMp+Gb5XfuMXANgIk5PyqLgVuFEarujWdaHFZFmV8siVY9sJtiwlYsiO4VrqHBOlJjgGirQaDW5XCgq+CVetIXyYCJjsz4N9sXS4SnRWr0n2uX3Lh/tB8G2feqGCJUf4oaLq27XwX3yIvAzdAmSxqInNb5vbLBCJDMBiYWIreIlGFJJ/dnyiHH9vXJsbeXvCyuH04mAza5zP7HYnCp0FLV7DvMd5k5u4iXwOhEmij4/5TLbIWm/1+eWXKfzud71riYskuR8WjuJab6aQQC3rWspyGFdo/qr2JwSDlILiDaMZOUFb2bjN8UczJ0N8Qo/csxSYaKjI3FiezXS9bq46OhPzC5mjOc4CJ1UFRqAoOtUQrMfkgdVP8sjP8QuSpn3GU0cR3DICniftTVpiTAWX+eRMRWtlgWTjs6pdYdqb6atv/VomJdv3pG2oneYawMW+dH5IF89+pAclJaGVdoLrWFq2qmWb3neKyd3+FEZvEZ9E/IyV2ffVmg+6Thk/jQ0ka9dH8uUcr/U/i32ymvjFR2UQt/Tf1LGt7Lg8ovEPDGoZdLQohNLY7eun2SH+Wwn7y28D1TCyuC/Tdwdzwb56ALN2VUGO/tqmWu3a0VFN5Ow6EE45bRuPdXiQQFntG2yUqXqLpFmXzEmz7EJbUdvIl/2WxJxmTwmaw0bhMFPzniHkpXbU3xyR3ybtYbjVmjLrvUqTn24woAzMx5fzkjhZ/24uWUlLTstsjQeRQRxjYyTZnfgOGugPsFBEpGQlRXJMj1pAi3DrNwvHFAYVZxVF7nmr80uYbsUGbaV/2b3RjifesmVhyn6aarfmIum1SgOM+yup9gnjdBboRPXe/n5FRnZzFovC+GHH9WbnfM7UnXMdR28sNljTtVCB625JVYMmAGHh/ROYj0q9aVmsWph/pe7bHiWhZYquZY+BBpTQ53Idgvk7YlOcc8Ec1Kkrv1UOSRP9R3KTkSqIRaG0VxgsHJosPrZYzmXEKNAbTrqnAXksctpGaF9+9rQUftQ+zUQMbodLQAZrhAthTqPqvPrfkUCbRFuOirnA2/1Zk2AzVDTJud3q5F68ugWQkUUOjdGRgVo86qL+fIspmSGFse7SJ0aU7WbVVXHBSzkRuPUtXC3wKOaOvxIfgBgOgUUKDnQC9QuC8/Rb0QsGAdA/j2NrA5MoGEfXZMUY=">
   </div>
   <div class="aspNetHidden">
      <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="FFED8191">
      <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="UjOn867BqbDH/CGPsSY/W+ptc7JzkTPhyIaLlDnkC93Ul9jS9PuiF3j1IuqDvMVYUjDGG71nUhrFs+myZdGDxXRgP+tpc49iYPHPe86gaWzGQsTPYy+P7FHDHDaUa+Kw9Zr6+KjFGhYprVkaISGD6s19kPLoLDRngHOEV+oKsferhAShjFpQZjfcQfgWe6R9YYDcCVcuKf0SR2CSJLT0Dsj1LD7yvKJk3P7L6GcClxIu7BL/y3bEhKRTWBKmKnbaYav6mgdDxPFelxCo3T9UkU12SBFGRrzESAplalA3a+fb/ZiAiGYQ5LOfd5c/n3pfSh4BLtFVqNa2lTZRRjovYAMmPuWVYNYQK05ELTVpV6m1bptTsaCLW7idw21HmM+u8dbOttmGNAaNa0uDuVaadW4cwltJQwZnAUMdlH2tmy0/ZLHxr+fIy990htEOej3xYRz/TcX84AME7MOtq7W5QCUr0nZdq0N6sScSJ+THjGFvZpVv4pCzLsQzAKZsKEyjZftc5HEz1pvfzz4o6zmQYvnVTkCVE5eS1jz5pR1VeTFoGGUGwnAyl2d/nbHax8vsxQUJy3ijwQ2bYJvQcK79vQzChmEcvVFGfsTnVmrzaKGpIZ/aOvSnlZNYsHQMU0/6PC2+MRPmz+S83zz9Zg94lNBQhJbI2ByA1OMvY98rX+Q=">
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
               <h1>Lấy lại mật khẩu bằng câu hỏi bí mật</h1>
               <br>
               <div>
                  <h1 class="buoc1"><b>Vui lòng cung cấp đủ thông tin xuống bên dưới</b> </h1>
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
                        <input name="ctl00$ContentPlaceHolder1$txttendn" type="text" id="ContentPlaceHolder1_txttendn" class="form-control" placeholder="Tên đăng nhập">
                     </div>
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txtmk" type="password" id="ContentPlaceHolder1_txtmk" class="form-control" placeholder="Nhập mật khẩu mới">
                     </div>
                     <div class="form-group margin">
                        <input name="ctl00$ContentPlaceHolder1$txtmkagain" type="password" id="ContentPlaceHolder1_txtmkagain" class="form-control" placeholder="Nhập lại mật khẩu mới">
                     </div>
                     <div class="form-group margin">
                        <select name="ctl00$ContentPlaceHolder1$dropcauhoibimat" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$dropcauhoibimat\',\'\')', 0)" id="ContentPlaceHolder1_dropcauhoibimat">
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
                        <input name="ctl00$ContentPlaceHolder1$txtcautraloibimat" type="text" id="ContentPlaceHolder1_txtcautraloibimat" class="form-control" placeholder="Câu trả lời bí mật">
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