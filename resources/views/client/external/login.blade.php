@extends('client.external.layout')
@section('content')

            <form method="post" action="{{route('post.login')}}">
            {{csrf_field()}}
             
               <div class="container">
                  <div class="row" style="margin-top: 60px;">
                     <div class="col-sm-8 col-sm-offset-2 text">
                        <img src="{{asset('asset/img/tinhkiemid.png')}}">
                        <h1>Đăng nhập tài khoản</h1>
                     </div>
                  </div>
                  
                  <div class="row">
                     <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-bottom">
                           <div id="ContentPlaceHolder1_UpdatePanel1">
                           @if(session('errMsg'))
                              <div class="col-12">
                                 <div class="alert alert-danger alert-dismissible show" role="alert">
                                       <strong>{{session('errMsg')}}</strong>
                                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                       </button>
                                 </div>
                              </div>
                           @endif
                              <div class="form-horizontal bv-form" id="contact_form" novalidate="novalidate">
                                 <div class="form-group margin">
                                    <select name="server_id">
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
                                    <input name="name" type="text" placeholder="Tài Khoản" class="form-control" required>
                                 </div>
                                 <div class="form-group margin">
                                    <input name="password" type="password" placeholder="Mật khẩu" class="form-control" required>
                                 </div>
                                 <div class="form-group margin">
                                    <input type="submit" value="Đăng Nhập" class="submit">
                                 </div>
                                 <div class="qmk_ntk">
                                    <a class="qmk" href="https://id2.tinhkiem.us/Forgotpassword">Quên mật khẩu?</a>
                                    <div class="ntk">
                                       <label>Ghi nhớ truy cập</label>
                                       <span class="loginkeeping" name="loginkeeping">
                                       <input name="remember" type="checkbox" ></span>
                                    </div>
                                 </div>
               
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="link-dk"><a href="https://id2.tinhkiem.us/Register">Đăng Ký Tài Khoản</a></div>
                     <div class="dk-fb">
                        <a href="https://www.facebook.com/groups/game4you.us/" target="_blank">
                        <img src="./asset/cd.png" alt=""></a>
                        <a href="https://www.facebook.com/tinhkiem/" target="_blank">
                        <img src="./asset/fb.png" alt=""></a>
                     </div>
                  </div>
               </div>
            </form>
@endsection