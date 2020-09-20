<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Đăng nhập tài khoản - TLTK</title>
      <script src="./asset/js"></script>
      <link rel="stylesheet" href="{{asset('asset/css/css.css')}}">
      <link rel="stylesheet prefetch" href="https://id2.tinhkiem.us/css_login/180710_bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('asset/css/180710_bootstrap-theme.min.css')}}">
      <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
      <script src="{{asset('asset/js/jquery-1.11.1.min.js')}}"></script>
      <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('asset/js/index.js')}}"></script>

   </head>
<body>

<div id="modalConfirmYesNo" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 id="lblTitleConfirmYesNo" class="modal-title">Confirmation</h4>
               </div>
               <div class="modal-body">
                  <p id="lblMsgConfirmYesNo"></p>
               </div>
               <div class="modal-footer">
                  <button id="btnYesConfirmYesNo" type="button" class="btn btn-primary">Chắc Chắn</button>
                  <button id="btnNoConfirmYesNo" type="button" class="btn btn-default">Không</button>
               </div>
            </div>
         </div>
      </div>
      <div id="modalConfirm" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 id="lblTitleConfirm" class="modal-title">Confirmation</h4>
               </div>
               <div class="modal-body">
                  <p id="lblMsgConfirmY"></p>
               </div>
               <div class="modal-footer">
                  <button id="btnYesConfirm" type="button" class="btn btn-primary">OK</button>
               </div>
            </div>
         </div>
      </div>
      <div class="top-content">
         <div class="inner-bg">
            <div class="menu">
               <div class="container">
                  <nav class="navbar navbar-default menu-bg">
                     <div class="container-fluid padding-0">
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                           <a class="navbar-brand" href="http://game4you.us/">
                           <img src="{{asset('asset/img/logo.png')}}" style="width: auto">
                           </a>
                        </div>
                        <div id="navbar1" class="navbar-collapse collapse boder-0">
                           <ul class="nav navbar-nav menu-li">
                              <li><a href="http://game4you.us/" target="_blank">TRANG CHỦ </a></li>
                              <li><a>|</a></li>
                              <li><a href="{{route('login')}}">ĐĂNG NHẬP</a></li>
                              <li><a>|</a></li>
                              <li><a href="{{route('registration')}}">ĐĂNG KÝ</a></li>
                              <li><a>|</a></li>
                              <li><a href="{{route('forgotpassword')}}">QUÊN MẬT KHẨU</a></li>
                              <li><a>|</a></li>
                              <li><a href="http://game4you.us/guide-1159-download-game-thien-long-tinh-kiem.html" target="_blank">TẢI GAME</a></li>
                           </ul>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
            @yield('content')
            <div id="page" class="page" style="margin-top: 5.7%;">
               <footer id="footer-section13" class="bg-dark-blue padding-60px-tb xs-padding-40px-tb ">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12 sm-text-center sm-margin-five-bottom">
                           <a href="https://id2.tinhkiem.us/#">
                           <img src="./asset/id-logo-footer.png" data-img-size="(W)163px X (H)40px" alt="" data-selector="img" style=""></a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center sm-margin-five-bottom">
                           <div class="text-white text-medium sm-margin-two-bottom">
                              <p><a href="https://id2.tinhkiem.us/Policy">Điều khoản dịch vụ</a></p>
                           </div>
                           <div class="text-white text-medium sm-margin-two-bottom">
                              <p>® Website TLBBTK 2018</p>
                           </div>
                           <div class="text-white text-medium sm-margin-two-bottom">
                              <p>Developed by Game4You Copyright © 2009 Game4You.Us Limited.</p>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 text-right sm-text-center social-icon sm-margin-five-bottom">
                           <a href="https://www.facebook.com/tinhkiem/" target="_blank">
                           <i class="fa facebook"></i>
                           </a>
                           <a href="https://www.youtube.com/user/TLTinhKiem" target="_blank">
                           <i class="fa youtube"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </footer>
            </div>
         </div>
      </div>
</body>
</html>