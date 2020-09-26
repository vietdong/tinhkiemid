@extends('client.inside.layout')
@section('content')
<div class="col-sm-9 nav-tabs-right">
                           <div class="title-left margin-five-top-768">
                              QUẢN LÝ TÀI KHOẢN
                              <marquee behavior="scroll" direction="left">
                                 <font color="#FF0000"><span id="Noidung_txtthongbaotaikhoan"></span></font>
                              </marquee>
                           </div>
                           <div role="tabpanel" class="tab-pane active" id="left-1">
                              <div class="row four-column" id="section02">
                                 <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(30)">
                                    <div class="margin-ten-bottom">
                                       <a href="{{route('change.total.info')}}">
                                       <img alt="" src="{{asset('asset/inside/totalaccount.png')}}" data-selector="img"></a>
                                     
                                    </div>
                                    <a href="{{route('change.total.info')}}" class="text-tilte">Thay đổi/Cập nhật toàn bộ thông tin tài khoản</a>
                                 </div>
                                 <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(2)">
                                    <div class="margin-ten-bottom">
                                       <a href="{{route('change.pass')}}">
                                       <img alt="" src="{{asset('asset/inside/icon-1.png')}}" data-selector="img"></a>
                              
                                    </div>
                                    <a href="{{route('change.pass')}}" class="text-tilte">Thay đổi mật khẩu game và web</a>
                                 </div>
                                 <!-- end feature box -->
                                 <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(4)">
                                    <div class="margin-ten-bottom">
                                    
                                       <a href="{{route('change.pass2')}}">
                                       <img alt="" src="{{asset('asset/inside/icon-2.png')}}" data-selector="img"></a>
                                    </div>
                                    <a href="{{route('change.pass2')}}" class="text-tilte">Thay đổi mật khẩu cấp 2</a>
                                 </div>
                                 <!-- end feature box -->
                                 <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(8)">
                                    <div class="margin-ten-bottom">
                                       <a href="{{route('change.phone')}}">
                                       <img alt="" src="{{asset('asset/inside/icon-3.png')}}" data-selector="img"></a>
                                    
                                    </div>
                                    <a href="{{route('change.phone')}}" class="text-tilte">Cập nhật số điện thoại</a>
                                 </div>
                                 <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(29)">
                                    <div class="margin-ten-bottom">
                                       <a href="{{route('lost.phone')}}">
                                       <img alt="" src="{{asset('asset/inside/sim-card.png')}}" data-selector="img"></a>
                  
                                    </div>
                                    <a href="{{route('lost.phone')}}" class="text-tilte">Hỗ trợ mất số điện thoại</a>
                                 </div>
                                 <!-- end feature box -->
                                 <!-- <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(10)">
                                    <div class="margin-ten-bottom">
                                       <a href="{{route('register.google.auth')}}">
                                       <img alt="" src="{{asset('asset/inside/icon-4.png')}}" data-selector="img"></a>
                                    
                                    </div>
                                    <a href="{{route('register.google.auth')}}" class="text-tilte">Đăng kí mã Google Authenticator</a>
                                 </div> -->
                                 <!-- end feature box -->
                                 <!-- end feature box -->
                                 <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(9)">
                                    <div class="margin-ten-bottom">
                                       <a href="{{route('change.email')}}">
                                       <img alt="" src="{{asset('asset/inside/icon-6.png')}}" data-selector="img"></a>
                                      
                                    </div>
                                    <a  href="{{route('change.email')}}" class="text-tilte">Thay đổi Email</a>
                                 </div>
                                 <!-- end feature box -->
                                 <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(11)">
                                    <div class="margin-ten-bottom">
                                       <a href="{{route('change.question')}}">
                                       <img alt="" src="{{asset('asset/inside/icon-7.png')}}" data-selector="img"></a>
                                      
                                    </div>
                                    <a href="{{route('change.question')}}" class="text-tilte">Đổi câu hỏi &amp; câu trả lời bí mật</a>
                                 </div>
                                 <!-- end feature box -->
                                 <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(12)">
                                    <div class="margin-ten-bottom">
                                       <a href="{{route('change.CMT')}}">
                                       <img alt="" src="{{asset('asset/inside/icon-8.png')}}" data-selector="img"></a>

                                    </div>
                                    <a href="{{route('change.CMT')}}" class="text-tilte">Cập nhật CMND</a>
                                 </div>
                                 <!-- end feature box -->
                                 <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(24)">
                                    <div class="margin-ten-bottom">
                                       <a href="{{route('show.info')}}">
                                       <img alt="" src="{{asset('asset/inside/icon-9.png')}}" data-selector="img"></a>
                    
                                    </div>
                                    <a href="{{route('show.info')}}" class="text-tilte">Xem thông tin tài khoản</a>
                                 </div>
                                 <!--
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(28)">
                                        <div class="margin-ten-bottom">
                                            <a>
                                                <img alt="" src="img/icon-10.png" data-selector="img"></a>
                                            <input type="submit" name="ctl00$Noidung$butchangeviewunlockaccount" value="" id="Noidung_butchangeviewunlockaccount" style="display: none;" />
                                        </div>
                                        <a class="text-tilte">Khóa/ Mở khóa tài khoản</a>
                                    </div>
                                     -->
                                 <!-- end feature box -->
                              </div>
                           </div>
                           <!--END LEFT 1-->
                        </div>
@endsection