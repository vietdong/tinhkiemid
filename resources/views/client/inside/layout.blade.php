<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="Page-Enter" content="blendTrans(Duration=0)">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Quản lý tài khoản</title>
      <style>
         select:invalid {
         color: gray;
         }
      </style>
      <link href="{{asset('asset/inside/bootstrap.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('asset/inside/jquery-ui.css')}}">
      <link href="{{asset('asset/inside/css.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('asset/inside/style.css')}}">
      <link rel="stylesheet" href="{{asset('asset/inside/khampha.css')}}">
      <link rel="stylesheet" href="{{asset('asset/inside/form.css')}}">
      <link rel="stylesheet" href="{{asset('asset/inside/reply.css')}}">
      <script src="{{asset('asset/inside/jquery-1.11.1.min.js')}}"></script>
      <script src="{{asset('asset/inside/bootstrap.min.js')}}"></script>
      <script src="{{asset('asset/inside/bootstrapvalidator.min.js')}}"></script>
      <script src="{{asset('asset/inside/index.js')}}"></script>
      <script src="{{asset('asset/inside/jquery-ui.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('asset/inside/tether.min.js')}}"></script>
      <style>
         label {
         display: inline-block;
         width: 5em;
         }
      </style>
   </head>
   <body onload="pageLoad()">
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
                  <button id="btnYesConfirm" type="button" class="btn btn-primary">Đồng ý</button>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-default navbar-fixed-top menu" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="{{route('login')}}">
               <img src="{{asset('asset/inside/id-logo.png')}}" alt="ID tình kiếm"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right menu-right">
                  <li class="dropdown tk-an">
                     <a href="https://id2.tinhkiem.us/Home?Index=AccountManager#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <span class="icon infoaccount"></span><span class="textinfo">
                     <span id="txttentk">{{Auth::user()->name}}[{{Auth::user()->id}}]</span>
                     </span><i class="arrowdow"></i>
                     </a>
                     <ul class="dropdown-menu menu-click">
                        <a >Thông tin tài khoản</a>
                        <a href="{{route('logout')}}">Thoát</a>
                     </ul>
                  </li>
                  <li>
                     <div class="Menuthanh">
                        OTP Miễn Phí : <span style="color: #f6ff00;">
                        <span id="txtotpmienphi">0</span>
                        </span>|
                     </div>
                     <div class="Menuthanh">
                        Đồng : <span style="color: #f6ff00;">
                        <span id="txtdong">0</span>
                        </span>|
                     </div>
                     <div class="Menuthanh">
                        Đồng Khuyến Mãi : <span style="color: #f6ff00;">
                        <span id="txtdongkm">0</span>
                        </span>
                     </div>
                  </li>
                  <li class="768"><a href="http://game4you.us/guide-1159-download-game-thien-long-tinh-kiem.html" target="_blank">Tải Game</a></li>
                  <li class="768"><a href="http://game4you.us/guide" target="_blank">Hướng Dẫn Tân Thủ</a></li>
                  <li class="768"><a href="https://fb.com/tinhkiem/" target="_blank">Fanpage</a></li>
                  <li class="768"><a href="https://id2.tinhkiem.us/Logout.aspx" target="_blank">Thoát</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-default menu-bot" role="navigation">
         <div class="container">
            <div class="navbar-header menu-bot-2">
               <ul class="mainmenu">
                  <li><a href="http://game4you.us/" target="_blank"><span class="hidden-xs">TRANG CHỦ</span></a></li>
                  <li><a href="http://game4you.us/guide-1159-download-game-thien-long-tinh-kiem.html" target="_blank"><span class="hidden-xs">TẢI GAME</span></a></li>
                  <li><a href="http://game4you.us/guide" target="_blank"><span class="hidden-xs">HƯỚNG DẪN TÂN THỦ</span></a></li>
                  <li><a href="https://www.facebook.com/tinhkiem/" target="_blank"><span class="hidden-xs">FANPAGE</span></a></li>
               </ul>
            </div>
         </div>
      </nav>
      <div id="wrapper">
         <section class="bg-slide">
            <div class="container">
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                     <div class="item active">
                        <a href="http://tinhkiem.us/events-1442-su-kien-dang-nhap-nhan-qua.html" target="_blank">
                        <img src="{{asset('asset/inside/7ngay.jpg')}}"></a>
                     </div>
                     <div class="item">
                        <a href="http://tinhkiem.us/hpbd/" target="_blank">
                        <img src="{{asset('asset/inside/chuoisk.png')}}"></a>
                     </div>
                     <div class="item">
                        <a href="http://tinhkiem.us/events-1440-su-kien-lao-huu-quy-lai-cung-thien-long-tinh-kiem.html" target="_blank">
                        <img src="{{asset('asset/inside/laohuu.jpg')}}"></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-white" id="section1">
            <div class="container">
               <div class="row">
                  
                     <div class="aspNetHidden">
                        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
                        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
                     </div>
                     <div class="aspNetHidden">
                     </div>
                     <div id="updateProgress" style="display:none;" role="status" aria-hidden="true">
                        <div style="position: fixed; text-align: center; height: 100%; width: 100%; top: 0; right: 0; left: 0; z-index: 9999999; background-color: #000000; opacity: 0.7;">
                           <img id="imgUpdateProgress" title="Loading ..." src="./Quản lý tài khoản_files/loading.gif" alt="Loading ..." style="padding: 10px; position: fixed; top: 45%; left: 50%;">
                        </div>
                     </div>
                     <div id="UpdatePanel1">
                        <div class="nav-side-menu col-sm-3">
                           <div class="brand title-left">
                              Danh Mục Quản Lý[<span id="Noidung_txtsvname">Nhất Kiếm</span>]
                              <marquee style="color: red"><span id="Noidung_txtnapthe2"></span></marquee>
                           </div>
                           <i class="toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                           <div class="menu-list">
                              <ul id="menu-content" class="menu-content collapse out">
                                 <li>
                                    <a href="{{route('recharge.manager')}}">
                                    <i class="icon-nt">
                                    </i>
                                    Nạp thẻ
                                    </a>
                                 </li>
                                 <li>
                                    <a href="{{route('account.manager')}}">
                                    <i class="icon-tk">
                        
                                    </i>Quản lý tài khoản
                                    </a>
                                 </li>
                                 <li>
                                    <a href="{{route('character.manager')}}">
                                    <i class="icon-ql">
                                    </i>Quản lý nhân vật
                                    </a>
                                 </li>
                                 <li>
                                    <a>
                                    <i class="icon-sgd">
                                    <input type="submit" name="ctl00$Noidung$butviewsellcharacter" value="" id="Noidung_butviewsellcharacter" style="display: none;">
                                    </i>Sàn giao dịch
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        @yield('content')
                     </div>
                     <span style="display: none !important;"><input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="7V1Sb/huHAHLU3D9ryJjSKnO6Y+57XooS2sOlmvp0EeqPU82vwR7dPKQjEiYh0GYdKDda3yn0CrA6xUFrrHid6w2zwavaf99F+OJOfD5SA2+oDFHQHmfAidZhv9ftaWrXdhWTi03M8274IKqBIsur4oDmRXrAgaYwFeq0Pmz/4ootrFNNoWSNaQPULE44n+jl4AKH6Uas7QI/fPE3lCosruarE7l98GYsluvgW1pR6RQUofQrehi5TNSFPXOAYoHSoyUIbdKZSlg3gP8vXXBM/QntzGKpyWCEFL0SzZ3NpZfKRYQRfMnZ1sqVhlbmeHnnOEQRBOdVrzEE61mgxft0QLYe4NXDeTfDQtyiM8zWOTA8APiuxEsubzy/4SUx5e/lKT2Mlwm8vdW8PNBjRFRX9auRmB9Phokhjrs8+yQA6esWwdfQY3RoiqoeBmJTPnk8Wztiph0b1oPiE8TCQdDdyQp8EWbbCGCVWSTziiwMJFQSxSODkJO2RvFqrwPfaWOykkKnR5Ei2oyXyQvaLChW7OMJX7xaEaBVFe72oQhvFXjN7r+rJtjVqopW0Oecje984W9wyLVCi/PTr2flqQMy9L8AObyVqmt0AS8bGCMSfF8uqIEeDUwZYB9zNFBzDRmtr+Id+BmwfqYKp5ej1WW9K8wgr4CkcdM4eLO/0tDxWl+j9x/qLscbC+hKOoD8W654q+To4C33x+2JMWXL4A+XcIncDGdD3Zti+gr4Na/YmPWhgRX8FRj7SpfEjqKN3HMtZay1h94Ou8ZiNYE/uPQa3KgaM75q/lwCuNmT1jM8fDL74CQuBs55Y7AJ67rviH/+amgZurxLwNTedl1DtUtNV+mPeWK7Ubm5gDxUJW90f4qLBOZIfWQBjbm1TITlRedfizeTNkrYgxsEgLDZAdE3eIyRtimBZofMkc3B57KhkFl4NfpiEgfOEgFM8oPX1jdCtfZf+otAFh5Qa2XmRVx+d/U/ufMfJr8Xgxqg4JXOeMLgCbVTjeK+1/0/gqtSo1PUcRUAQuaQZVJG+QQAiX0k0kgfjlFErBMOX3w0JTtTVfZJ4HoSl4cNmlhD6Z5pJsgklaSvsexLxKiydxW0rK56kwXnJKYdKVbxP2MdMP3h1o7cMBf6C+BpaVW6uV1nUoPBTIxprGNdDFlsjkO5bYG7FK19b5qAKAmBE9GbolQIkiqLfqjyzjTjDHJJoSeYFTpF4tAGm2sDCjQMhTI1Qm+YnCYy5DAuTzPpaKCzaEeKpA5JXOsaMXicpMMPMGShZYADb3UMsAuEg0oI8/6MwSfci0JeTTM+XJEHVCr6KXjsWrNsKPe1b9jwbT2CX5J1W+6csWoyDnJAOOfo7G023vK+pty/7f1BWYxWCaZFMV65ZTaZT5RSvYLFNDEzu0kgBRw5VtmC1JNW/Y0FbcWos4XCby2N6zH0Z8TkTWTto2qPi9s6LD27S438WLzm/tbLfT/G1HqgX8RIy+iu5ONKLO5PrEurlubBzk+4bHDbac4Ajum1cEjNZyezkIHo8ZPngilh7TAPmou7soG12Hzph/3SJbXMiV/JpTvrVCc6qP6Dag1v8cJiAKqVg7D8wzSbysH38OqGBMgePwRc4ELTx2hiydZnJRZCBUy6TqrS6mjfarE7HtZUGILJGb2Y/uRstPxCbyoqrHf5oq6TmjnwProCLhmE+V0kQR0QZaPKavTiCVVKa4B5pbNCDWCQtmvSJDPfiETdT6UPLU5jvDaHNyFswR49Rf0eQOeSjoR/Va7xdFfKNB3sACSNXG49SukSuE4GDoLiNDKtGQQgCrenO0Gdfb7DEY5xQGIbr+KGbaeFAOSGXomTgR7lA31a40JwozD52h2ScRvtuU295dU466n49GrET6XYL16f3aBPzZBKtmiOPxBJCKG8eNVi4cYqjSRerp/tHwmw8CYcmqdgsPIFNyMvfZ4EX7bEXJz21Ql0Xw+/+2dguizGtc20cLcGDBcXM1E4593bzO4k+oxrrDeVQNOHgCSFHcYRd8F/zudY2Qv7+Cm5f7DvAYgMwX5Bm8vp3k/7oQMYxNCdTel5FWxBBUEPh+Uxu9QCbIH/4Dm/A5hmcEasSE5Sl5fthUefTEPJpaKtUXEWTirGqR3LMfv2eUF/8un8nuXZXRkAxQGoj1DBgY5HEJP+SmmE7fX9csrJKlE+bcUzXE4KgZRAUT+rY3iGZphPqcO04p5FUz8TizmiNoEb17VbwQENGtKDnzBNXzMpCoMym+S8ffXTvYqj7DKBVy1NxjAilt7m4/qIvM2PAAQZ+ND/VMoKnzNfMR8FqLgrg3/LSrThcLY2eVh5EescQ+xewc5esd+VjmAr3Ka8Jy3nPyNaCj+bOnWwahMfQhPkWZZhrXDUm8wuf54cVqAD73P77OUrppVVO2cxa5eFmzKHwi6Y9TD2eCVmnmCp6t4pglgz05EHa0QZ4Pt9xQF66JVfdCMxjGhiT8x2ZiXksJsuWW2JRnCUFfQPCo2AsGCMW2P3Mr5Dk+niIYnJPJqX3o36Je0gd7Z4nLHy0c0HNts/LDcVESwn/wEF0xk00CDVXyNrYY7wHgpvVXAEZW53hfrrD6IXH212wYBO1UJ2uFuXROMV7VamW/ccKBhVLURnwab6Hw6B0hn1EccrN667CTOut4UIqBcrrTzhvtNtAQBU4JmeljiGj3WebIhULjxw6iUnzpjS+xkQydQGZs8AJdNWs5AJFnYoJbVQDOK4pYCr4a77wKKQsIVzxTJK2GhsVMGTfog+u1KDTxPcyveieYzfzyWX2IARrs+JmmNoEYGuh/anJy9SmEOE8cyaTEfx8elY674jPf4Z8vHRQ4PzmeGgXp9lCGkdqAZTStHa1NHOFS4RYivL1Z9v9QXg/6pAaCxjRdhoGFDu8z833bBheNuFhDyh7T7StVfe5WZqLoxh4CYbM1OBOZ1z7RZvkUjogIOjSj3t6LsSENnAh7d423WIyLxHqO9Lcs2mbo/Uo3hv4PzS+2HTowKvYGRIV7hzEULKKuh6UK1vcGgtFXpK6onU05FYXW7BNH46tghjnTILxebhQsDGm3OTWGxX7wsw9//4osXBe9C1Vx1in211mY8Cc9CLtzQzmvj+KJSX3MCIy/wzJBMMx4HQiq0LKhICwYgYy/D2rzmWqpezSZz79FYeJICidjth7pvHDfCJxbSgOn17Qfnn7XY2D8WRQoYF/4AW+PBBTaQR2KHoVGwWqz5aLY9Sgyuz6Tmt7PQiBfVYX2v350h/2g3ZqbEj3OZ/asMFY/P2Z2+H8LE3tqhSkWq9mfUVi/KOU+R7zofRcR3ku52X6oYbbqW45M6m70JnE3WkMhD5NH5wkudVuZbOwUk3UxnpktNhrXuavk3H2FnYwYFGmsO91HiBC8caJ0ExxJXlt5ANebjWFMKgUsGkn9aLTRfMZsl5gyyWaWHq4nuTm6zP0IiKHyZOzUIsZifqNJdpEUl8KdfQ86Ar03IvxWslyA/SI+WC36DskIut1TdgKHZaIuZlufHqL5r1AtcdkxxcVZ7rT5TvvAW3A=="></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="8D0E13E6"></span>
               </div>
            </div>
         </section>
      </div>
      <div id="page" class="page">
         <footer id="footer-section13" class="bg-dark-blue padding-60px-tb xs-padding-40px-tb ">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-12 col-xs-12 sm-text-center sm-margin-five-bottom">
                     <a href="https://id2.tinhkiem.us/Home?Index=AccountManager#">
                     <img src="./Quản lý tài khoản_files/id-logo-footer.png" data-img-size="(W)163px X (H)40px" alt="" data-selector="img" style=""></a>
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
   </body>
</html>