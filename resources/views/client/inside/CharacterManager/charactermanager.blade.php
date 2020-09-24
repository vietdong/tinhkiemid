@extends('client.inside.layout')
@section('content')
<div class="col-sm-9 nav-tabs-right">
                <div class="title-left margin-five-top-768">QUẢN LÝ NHÂN VẬT</div>
                <div role="tabpanel" class="tab-pane active" id="left-1">

                    <div class="row four-column" id="section02">
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(13)">
                            <div class="margin-ten-bottom">
                                <a>
                                    <img alt="" src="{{asset('asset/inside/img/chuyendong.png')}}" data-selector="img"></a>
                                <input type="submit" name="ctl00$Noidung$butviewchuyendong" value="" id="Noidung_butviewchuyendong" style="display: none;">
                            </div>
                            <a class="text-tilte">Chuyển đồng</a>
                        </div>
                        <!-- end feature box -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(15)">
                            <div class="margin-ten-bottom">
                                <input type="submit" name="ctl00$Noidung$Button3" value="" id="Noidung_Button3" style="display: none;">
                                <a>
                                    <img alt="" src="{{asset('asset/inside/img/sualoikethon.png')}}" data-selector="img"></a>
                                <input type="submit" name="ctl00$Noidung$butviewfixloikethon" value="" id="Noidung_butviewfixloikethon" style="display: none;">
                            </div>
                            <a class="text-tilte">Sửa lỗi kết hôn</a>
                        </div>
                        <!-- end feature box -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(16)">
                            <div class="margin-ten-bottom">
                                <a>
                                    <img alt="" src="{{asset('asset/inside/img/ducvohon.png')}}" data-selector="img"></a>
                                <input type="submit" name="ctl00$Noidung$butviewduclovohon" value="" id="Noidung_butviewduclovohon" style="display: none;">
                            </div>
                            <a class="text-tilte">Đục lỗ võ hồn</a>
                        </div>
                        <!-- end feature box -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(17)">
                            <div class="margin-ten-bottom">
                                <a>
                                    <img alt="" src="{{asset('asset/inside/img/duclocuonghoa.png')}}" data-selector="img"></a>
                                <input type="submit" name="ctl00$Noidung$butviewduclolongvan" value="" id="Noidung_butviewduclolongvan" style="display: none;">
                            </div>
                            <a class="text-tilte">Đục lỗ - Cường hóa Long Văn</a>
                        </div>
                        <!-- end feature box -->

                        <!-- end feature box -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(18)">
                            <div class="margin-ten-bottom">
                                <a>
                                    <img alt="" src="{{asset('asset/inside/img/fixhp.png')}}" data-selector="img"></a>
                                <input type="submit" name="ctl00$Noidung$butchangeviewfixhp" value="" id="Noidung_butchangeviewfixhp" style="display: none;">
                            </div>
                            <a class="text-tilte">Sửa lỗi âm HP</a>
                        </div>
                        <!-- end feature box -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(19)">
                            <div class="margin-ten-bottom">
                                <a>
                                    <img alt="" src="{{asset('asset/inside/img/unlock.png')}}" data-selector="img"></a>
                                <input type="submit" name="ctl00$Noidung$butviewfixunlockchar" value="" id="Noidung_butviewfixunlockchar" style="display: none;">
                            </div>
                            <a class="text-tilte">Mở khóa nhân vật</a>
                        </div>
                        <!-- end feature box -->
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(21)">
                            <div class="margin-ten-bottom">
                                <a>
                                    <img alt="" src="{{asset('asset/inside/img/fixexp.png')}}" data-selector="img"></a>
                                <input type="submit" name="ctl00$Noidung$butviewfixexp" value="" id="Noidung_butviewfixexp" style="display: none;">
                            </div>
                            <a class="text-tilte">Sửa lỗi EXP</a>
                        </div>
                        <!--END
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(33)">
                            <div class="margin-ten-bottom">
                                <a>
                                    <img alt="" src="img/deleteeffect.png" data-selector="img"></a>
                                <input type="submit" name="ctl00$Noidung$butanhthanh" value="" id="Noidung_butanhthanh" style="display: none;" />
                            </div>
                            <a class="text-tilte">Xóa hiệu ứng</a>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center placeholder" onclick="CallServerMethod(26)">
                            <div class="margin-ten-bottom">
                                <a href="#FIXTHUONGHOI">
                                    <img alt="" src="img/depvkl.png" data-selector="img"></a>
                                <input type="submit" name="ctl00$Noidung$butviewthuongthoiweb" value="" id="Noidung_butviewthuongthoiweb" style="display: none;" />
                            </div>
                            <a class="text-tilte">Shop Thương Hội</a>
                        </div>
                     LEFT 1-->
                    </div>
                </div>
                <!--END LEFT 1-->
</div>
@endsection