@extends('client.inside.layout')
@section('content')
<form method="post" action="{{route('change.pass2')}}">
{{csrf_field()}}
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐỔI MẬT KHẨU CẤP 2 - TLTK</div>

                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <center>Bạn có thể sử dụng 1 trong 2 cách để đổi mật khẩu cấp 2<br>Sử dụng <b>OTP SMS</b> hoặc sử dụng <b>Câu Hỏi - Câu Trả Lời Bí Mật</b><br>Mỗi ngày bạn có thể nhận 1 OTP SMS miễn phí (không cộng dồn tích lũy theo ngày)<br>Phí mỗi lần lấy mã OTP tiếp theo là 1000 Đồng ưu tiên Đồng Khuyến Mại</center>
                    </div>
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
                    <div class="form-group margin">
                        <select class="form-control">
                            <option selected="selected" value="Sử Dụng Thông Tin Tài Khoản">Sử Dụng Thông Tin Tài Khoản</option>
                            <option value="Sử Dụng OTP">Sử Dụng OTP</option>
                        </select>
                    </div>
                    
                    <!-- Mật khẩu-->
                    <div id="Noidung_panelpass2tttk">
                        <div class="form-group margin">
                            <select name="question" class="form-control">
                                @foreach($question as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group margin">
                            <input name="answer" type="text" placeholder="Nhập câu trả lời bí mật" class="form-control">
                        </div>
                </div>
                   <div class="form-group margin">
                        <input name="otp" type="text" placeholder="Mã OTP" class="form-control">
                    </div>
                    <!-- Mật khẩu -->
                    <div class="form-group margin">
                        <input name="password2" type="password" id="Noidung_txtpass2moi" placeholder="Nhập mật khẩu cấp 2 mới" class="form-control">
                    </div>

                    <div class="form-group margin">
                        <input name="password2_confirmation" type="password" id="Noidung_txtpass2moiagian" placeholder="Nhập lại mật khẩu cấp 2 mới" class="form-control">
                    </div>
                    <!-- Mật khẩu -->

                    <!-- Button -->
                    <div class="form-group margin">
                        <input type="submit" value="Đổi Mật Khẩu" class="submit">
                    </div>

                    <!-- Text Báo thành công -->
                </div>
            </div>
</form>
@endsection