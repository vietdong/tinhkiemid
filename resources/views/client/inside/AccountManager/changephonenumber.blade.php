@extends('client.inside.layout')
@section('content')
<form method="post" action="{{route('change.phone')}}">
{{csrf_field()}}
<div class="col-sm-9 col-xs-12 nav-tabs-right">
               
                <div class="title-left margin-five-top-768">ĐỔI SỐ ĐIỆN THOẠI - TLTK</div>
                
                <div class="form-horizontal background-form">
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
                    <div >
                        <!-- Mật khẩu-->

                        <!-- Mật khẩu -->
                        <div class="form-group margin">
                            <input  type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại mới" >
                        </div>

                        <!-- Mật khẩu -->

                        <!-- Button -->
                        <div class="form-group margin">
                            <input type="submit"  value="Đổi Số Điện Thoại" class="submit">
                        </div>
                    
                    </div>

                    
                    <!-- Text Báo thành công -->
                </div>
            </div>
</form>
@endsection