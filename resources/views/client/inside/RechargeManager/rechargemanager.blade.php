@extends('client.inside.layout')
@section('content')
<div class="col-sm-9 nav-tabs-right">
   <div class="title-left margin-five-top-768">NẠP ĐỒNG THIÊN LONG TÌNH KIẾM</div>
   <marquee behavior="scroll" direction="left">
      <font color="#FF0000"><span id="Noidung_txtkhuyenmai"></span></font>
   </marquee>
   <div role="tabpanel" class="tab-pane active" id="left-1">
      <div class="row four-column" id="section02">
         <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(100)">
            <div class="margin-ten-bottom">
               <a href="{{route('zalo.pay')}}">
               <img alt="" src="{{asset('asset/inside/img/credit-card.png')}}" data-selector="img"></a>
              
            </div>
            <a href="{{route('zalo.pay')}}" class="text-tilte">Sử dụng Thẻ Cào</a>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(34)">
            <div class="margin-ten-bottom">
               <a href="{{route('zalo.pay')}}">
               <img alt="" src="{{asset('asset/inside/img/zalopay1.png')}}" data-selector="img"></a>
              
            </div>
            <a href="{{route('zalo.pay')}}" class="text-tilte">Sử dụng Zalo Pay</a>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(35)">
            <div class="margin-ten-bottom">
               <a>
               <img alt="" src="{{asset('asset/inside/img/295384.png')}}" data-selector="img"></a>
              
            </div>
            <a class="text-tilte">Sử dụng App Thien Long Tinh Kiem</a>
         </div>
         <!-- end feature box -->
         <!-- end feature box -->
         <!-- end feature box -->
         <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(6)">
            <div class="margin-ten-bottom">
               <a>
               <img alt="" src="{{asset('asset/inside/img/paymentwall.png')}}" data-selector="img"></a>
               <input type="submit" name="ctl00$Noidung$butnapbangthedienthoai" value="" id="Noidung_butnapbangthedienthoai" class="btn btn-primary mb-2 opt" style="display: none;">
            </div>
            <a class="text-tilte">Sử dụng PaymentWall</a>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(36)">
            <div class="margin-ten-bottom">
               <a>
               <img alt="" src="{{asset('asset/inside/img/paymentwall.png')}}" data-selector="img"></a>
               <input type="submit" name="ctl00$Noidung$butofferwall" value="" id="Noidung_butofferwall" class="btn btn-primary mb-2 opt" style="display: none;">
            </div>
            <a class="text-tilte">Offerwall</a>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(7)">
            <div class="margin-ten-bottom">
               <a>
               <img alt="" src="{{asset('asset/inside/img/charts.png')}}" data-selector="img"></a>
               <input type="submit" name="ctl00$Noidung$butxemlichsunap" value="" id="Noidung_butxemlichsunap" class="btn btn-primary mb-2 opt" style="display: none;">
            </div>
            <a class="text-tilte">Lịch sử thẻ nạp</a>
         </div>
         <!-- end feature box -->
         <!-- end feature box -->
      </div>
   </div>
   <!--END LEFT 1-->
</div>
@endsection