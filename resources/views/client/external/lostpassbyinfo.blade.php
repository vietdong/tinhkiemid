@extends('client.external.layout')
@section('content')

<form method="post" action="{{route('lost.pass.by.info')}}">
   {{csrf_field()}}

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
                        <select name="server">
                           @foreach($server as $value)
                             <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach 
                        </select>
                     </div>
                     <div class="form-group margin">
                        <input name="name" type="text" class="form-control" placeholder="Tên đăng nhập">
                     </div>
                     <div class="form-group margin">
                        <input name="password" type="password" id="ContentPlaceHolder1_txtmk" class="form-control" placeholder="Nhập mật khẩu mới">
                     </div>
                     <div class="form-group margin">
                        <input name="password_confirmation" type="password" id="ContentPlaceHolder1_txtmkagain" class="form-control" placeholder="Nhập lại mật khẩu mới">
                     </div>
                     <div class="form-group margin">
                        <select  name="question">
                           @foreach($secret_question as $value)
                             <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach 
                        </select>
                     </div>
                     <div class="form-group margin">
                        <input name="answer" type="text" class="form-control" placeholder="Câu trả lời bí mật">
                     </div>
                     <div class="form-group margin">
                        <input type="submit" value="Đổi Mật Khẩu" class="submit">
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