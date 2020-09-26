@extends('client.inside.layout')
@section('content')
<form method="post" action="{{route('change.total.info')}}">
{{csrf_field()}}
<input name="id" type="hidden" value="{{Auth::user()->id}}">
<div class="col-sm-9 col-xs-12 nav-tabs-right">
                <div class="title-left margin-five-top-768">CẬP NHẬT THÔNG TIN TÀI KHOẢN</div>

                <div cl ass="form-horizontal background-form" id="contact_form">

                    <div class="alert alert-danger" role="alert" id="success_message">
                        <b>Chú ý: Điền thông tin vào các danh mục bạn muốn thay đổi/Cập nhật. Có thể để trống nếu giữ nguyên thông tin tài khoản cũ.</b>
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
                        Tên tài khoản:
                        <input name="name" type="text" placeholder="" disabled="disabled" class="form-control" value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group margin">
                        <input name="otp" type="text" placeholder="Mã OTP" class="form-control">
                    </div>
                    <div class="form-group margin">
                        Mật khẩu mới:
                        <input name="password" type="password" placeholder="(Nhập mật khẩu mới nếu muốn thay đổi)" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group margin">
                        Nhập lại mật khẩu mới:
                        <input name="password_confirm" type="password" placeholder="(Nhập mật khẩu mới nếu muốn thay đổi)" class="form-control" value="{{ old('password_confirm') }}">
                    </div>

                    <div class="form-group margin">
                        Số điện thoại mới:
                        <input name="password_new" type="text" placeholder="(Nhập số điện thoại mới nếu muốn thay đổi)" class="form-control" value="{{ old('phone') }}">
                    </div>

                    <div class="form-group margin">
                        Email mới:
                        <input name="email" type="text" placeholder="(Nhập email mới nếu muốn thay đổi)" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group margin">
                        Số CMND mới:
                        <input name="cnnd" type="text" placeholder="(Nhập CMT mới nếu muốn thay đổi)" class="form-control" value="{{ old('cmnd') }}">
                    </div>
                    <br>

                    <div class="form-group margin">
                        <input type="submit" value="CẬP NHẬT THÔNG TIN" class="submit">
                    </div>

                    <!-- Text Báo thành công -->
                </div>
            </div>
            </form>
@endsection