@extends('client.external.layout')
@section('content')
<form method="post" action="{{route('post.registration')}}" id="ctl00">
{{csrf_field()}}
   <div class="container">
      <div class="row" style="margin-top: 60px;">
         <div class="col-sm-8 col-sm-offset-2 text">
            <img src="{{asset('asset/img/tinhkiemid.png')}}">
            <h1>Đăng ký tài khoản</h1>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6 col-sm-offset-3 form-box">
               @if ($errors->any())
						<div class="col-12">
							<div class="alert alert-danger alert-dismissible show" role="alert" style="text-align:left">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
					@endif
               @if(session('check'))
                  <div class="col-12">
                     <div class="alert alert-danger alert-dismissible show" role="alert">
                           <strong>{{session('check')}}</strong>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                     </div>
                  </div>
               @endif
            <div class="form-bottom">
               <div id="ContentPlaceHolder1_UpdatePanel1">
                  <div class="form-horizontal bv-form" id="contact_form" novalidate="novalidate">
                     <div class="form-group margin">
                        <select name="server_id">
                           @foreach($server as $value)
                             <option value="{{$value->id}}">{{$value->name}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group margin">
                        <input name="name" type="text" placeholder="Tên đăng nhập (6-12 ký tự)" class="form-control" value="{{ old('name') }}">
                     </div>
                     <div class="form-group margin">
                        <input name="password" type="password"  placeholder="Mật khẩu  (6-12 ký tự)" class="form-control" value="{{ old('password') }}">
                     </div>
                     <div class="form-group margin">
                        <input name="password2" type="password" placeholder="Mật khẩu cấp 2  (6-12 ký tự)" class="form-control" value="{{ old('password2') }}">
                     </div>
                     <div class="form-group margin">
                        <input name="email" type="text" id="ContentPlaceHolder1_txtemail" placeholder="Email " class="form-control" value="{{ old('email') }}">
                     </div>
                     <div class="form-group margin">
                        <select name="secret_question_id">
                            @foreach($secret_question as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                     </div>
                     <div class="form-group margin">
                        <input name="answer" type="text"  placeholder="Câu trả lời (6-20 ký tự)" class="form-control" value="{{ old('answer') }}">
                     </div>
                     <div class="form-group margin">
                        <input name="phone" type="text" placeholder="Số điện thoại" class="form-control" value="{{ old('phone') }}">
                     </div>
                     <div class="form-group margin">
                        <input name="referral_code" type="text" placeholder="Mã giới thiệu" class="form-control" value="{{ old('referral_code') }}">
                     </div>
                     <div class="form-group margin">
                     </div>
                     <div class="form-group margin">
                        <input type="submit" value="ĐĂNG Ký"  class="submit">
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
</form>
@endsection