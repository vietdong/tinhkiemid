@extends('client.inside.layout')
@section('content')
<form method="post" action="{{route('change.pass')}}">
{{csrf_field()}}

<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">ĐỔI MẬT KHẨU - TLTK</div>
                
                <div class="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <center>Bạn có thể sử dụng 1 trong 2 cách để đổi mật khẩu<br>Sử dụng <b>OTP SMS</b> hoặc sử dụng <b>Mật Khẩu Cấp 2</b><br>Mỗi ngày bạn có thể nhận 1 OTP SMS miễn phí (không cộng dồn tích lũy theo ngày).<br>Phí mỗi lần lấy mã OTP tiếp theo là 1000 Đồng ưu tiên Đồng Khuyến Mại</center>
                    </div>
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
                    <div class="form-group margin">
                        <select class="form-control">
                        <option selected="selected" value="Sử Dụng Pass2">Sử Dụng Pass2</option>
                        <option value="Sử Dụng OTP">Sử Dụng OTP</option>

                    </select>
                    </div>
                    
                    <!-- Mật khẩu-->
                    <div id="Noidung_panel1">
	
                        <div class="form-group margin">
                            <input name="password2" type="password" placeholder="Nhập vào mật khẩu cấp 2" class="form-control" value="{{ old('password2') }}">
                        </div>
                    
                    </div>
                    <!-- Mật khẩu -->
                    <div class="form-group margin">
                        <input name="password" type="password" placeholder="Nhập mật khẩu mới" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group margin">
                        <input name="password_confirmation" type="password" placeholder="Nhập lại mật khẩu mới" class="form-control" value="{{ old('password_confirmation') }}">
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