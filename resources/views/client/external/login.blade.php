@extends('client.external.layout')
@section('content')

            <form method="post" action="https://id2.tinhkiem.us/Login.aspx" id="ctl00">
               <div class="aspNetHidden">
                  <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
                  <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
                  <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="GHr2LB9wmyK1pcymGqgQBgYhOmzSsV5+h7sGy2UgBgklstRWv4M7OGd2RmvbjOWDmqkoE4g6qN30dk2dm/JIU8epMWeqeI5XtRlTr8uvyAmzV4FEeLMWZLiv+5LYoa3XFEqnfI51Ia2FFhlNE+C7zrCFQeDwmUKo6cg0R1X2oxmZ55MIX5w2pRFoowasuef/MamFBXqOIoWnRfvDLinmM/qNtrY2Kcpv2wQ0cDM+BvvoCNCmwZ1P9gZl+YTtAPiafNpu+q1v0NB23WChYiZ+9XKQ1MeyaBkncth2No3mF5NTyXgTDebPlt0flW6atHiyCe3HTV/VVTmgjeOuF48j3Eduq5IuSsjphN4foV9jp0q76bJJevSWU9zXyxK/8X4i2bjEyIGqz6hRDVWHwfxXqg4OfDzEzJRYZM/RmOol1C2dw34rnZK03wI2b966nSkQ8HKmKeO8eBm1SFNbkKl/C9vsWSgJ4Z1fGxZ1OQ8LRY12nJj4B/NfPgDTS3aDqEBETboRFPQTzmH71G5/2AiZGnS26F4y7+KGfTSKJPmccqlurk1IlZ6AlaJ+gJpOKqTmVD1bA+FriMZp8ljhaW9hOA==">
               </div>
               <script src="./asset/ScriptResource(1).axd" type="text/javascript"></script>
               <div class="aspNetHidden">
                  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C2EE9ABB">
                  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="GuCrQY26KEHF4nOz6/OULqVmIiZKMcm9bAFjgUsleSsxZ7myYvqKnLgqyRGa630LeEJQSOYkBZM6qMdkHQKdJLq/dDS/zxl9WxRqqEf2oKSJ/3wtWYIzJnAZpVW8n+5RK+lOIFbMm6AxKu1kT7p3wJFcOFsPfM3zSjnDzRWeOgNETFQQ+DO3E93lD4AFf7LqVZJhBHDYbDM7PbXM0pC3ugNNFi08Nfnbi/vbOATsnap+NFDWh130OeWSBdH7bHP0c/W3T1hUksvGckbBSSX2JJTC48zjzrcFimBMVPRUoSerjmfbPOHoos5sGiqistpqQgXDEjSO61oWzPFdtucrk/qdAKTdu0CQL6DMJdFtxXYf6yp+AJvrEaDVy4wKEZyspHGbPceRbi2pAkqFV0KM6yvKUB1yto3jd3WKlFUcJR/NfJaaaE1yyjcvmNW2BV0e">
               </div>
               <script type="text/javascript">
                  //<![CDATA[
                  Sys.WebForms.PageRequestManager._initialize('ctl00$ContentPlaceHolder1$ScriptManager1', 'ctl00', ['tctl00$ContentPlaceHolder1$UpdatePanel1','ContentPlaceHolder1_UpdatePanel1'], [], [], 90, 'ctl00');
                  //]]>
               </script>
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
                           <div id="ContentPlaceHolder1_updateProgress" style="display:none;" role="status" aria-hidden="true">
                              <div style="position: fixed; text-align: center; height: 100%; width: 100%; top: 0; right: 0; left: 0; z-index: 9999999; background-color: #000000; opacity: 0.7;">
                                 <img id="ContentPlaceHolder1_imgUpdateProgress" title="Loading ..." src="./asset/loading.gif" alt="Loading ..." style="padding: 10px; position: fixed; top: 45%; left: 50%;">
                              </div>
                           </div>
                           <div id="ContentPlaceHolder1_UpdatePanel1">
                              <div class="form-horizontal bv-form" id="contact_form" novalidate="novalidate">
                                 <div class="form-group margin">
                                    <select name="ctl00$ContentPlaceHolder1$dropmaychu" id="ContentPlaceHolder1_dropmaychu">
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
                                    <input name="ctl00$ContentPlaceHolder1$txttendn" type="text" id="ContentPlaceHolder1_txttendn" placeholder="Tài Khoản" class="form-control">
                                 </div>
                                 <div class="form-group margin">
                                    <input name="ctl00$ContentPlaceHolder1$txtmk" type="password" id="ContentPlaceHolder1_txtmk" placeholder="Mật khẩu" class="form-control">
                                 </div>
                                 <div class="form-group margin">
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$Button1" value="Đăng Nhập" id="ContentPlaceHolder1_Button1" class="submit">
                                 </div>
                                 <div class="qmk_ntk">
                                    <a class="qmk" href="https://id2.tinhkiem.us/Forgotpassword">Quên mật khẩu?</a>
                                    <div class="ntk">
                                       <label>Ghi nhớ truy cập</label>
                                       <span class="loginkeeping" name="loginkeeping">
                                       <input name="ctl00$ContentPlaceHolder1$checkremeber" type="checkbox" id="ContentPlaceHolder1_checkremeber"></span>
                                    </div>
                                 </div>
                                 <input type="hidden" name="ctl00$ContentPlaceHolder1$Button1" value="Đăng Nhập">
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