<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('homepage/index.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<header>
    <div class="container">
        <div class="row nav">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="./assets/img/Logo.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">tin tức</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            sự kiện
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">sự kiện 1</a>
                            <a class="dropdown-item" href="#">sự kiện 2</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            cẩm nang
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">cẩm nang 1</a>
                            <a class="dropdown-item" href="#">cẩm nang 2</a>
                            </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">cộng đồng</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">hỗ trợ</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0)"  data-toggle="modal" data-target="#exampleModalCenter">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </li>
                      </ul>
                      
                    </div>
                  </nav>
            </div>
        </div>
    </div>
 <!-- slide -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./assets/img/co-kiem.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/img/Baro Kieesm.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block view-1">
              <a href=""><img src="./assets/img/e1.png"></a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/img/3333.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block view-2">
              <a href=""><img src="./assets/img/e2.png"></a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/img/BG Section 111-min.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block view-3">
              <!-- <a href=""><img src="./assets/img/e3.png"></a> -->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="may d-none d-md-block">
        <img src="./assets/img/22.png">
      </div>
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="main-left col-md-12 col-lg-9 col-xl-9">
                <div class="option row">
                    <div class="col-4 col-md-4 col-css" data-aos="zoom-in" style="position: relative;"><img class="down" src="./assets/img/tai-game.png" ></div>
                    <div class="col-4 col-md-4 col-css" data-aos="zoom-in"><img src="./assets/img/b.png" ></div>
                    <div class="col-4 col-md-4 col-css" data-aos="zoom-in"><img src="./assets/img/c.png" ></div>
                </div>
                <div class="row">
                    <div class="col-md-4 " data-aos="fade-right">
                        <ul class="content-left">
                            <li><a href="" >sự kiện</a></li>
                            <li><a href="" >tin tức</a></li>
                            <li><a href="" >cẩm nang</a></li>
                          
                        </ul>
                        <div class="maintenance-time">
                            <div class="title">THỜI GIAN BẢO TRÌ</div>
                            <div class="time background">6-7 H SÁNG</div>
                        </div>
                    </div>
                    <div class="col-md-8 col-css">
                        <div class="content-1 background" data-aos="flip-up" >
                            <span class="title">bài đăng mới nhất</span>
                            
                            <div class="row">
                                <div class="col-css col-md-7">
                                    <div class="text">
                                    <h1>NGẬP TRÀN ƯU ĐÃI NẠP VÀNG CUỐI THÁNG 7</h1>
                                    <div class="date">Ngày đăng: 30/07/2020</div>
                                    <p>
                                        Nhiều vật phẩm vô cùng hấp dẫn trong ưu đãi nạp Vàng cuối
                                        tháng 7/2020 đang chờ đón quý nhân sỹ.
                                        Chư vị nhân sĩ,
                                        Từ ngày 30/07 - 31/07/2020, quý nhân sĩ tiến hành nạp Vàng s
                                        được nhận thêm quà thưởng hấp dẫn Cùng xem những ưu đãi
                                        nạp Vàng trong hai ngày cuối 7 này nhé!
                                    </p>
                                </div>
                                </div>
                                <div class="col-css col-md-5">
                                    <ul>
                                        <li><a href=""><h5>Ngập tràn ưu đãi nạp vàng trong tháng 7 này</h5><div class="date">Ngày đăng: 30/07/2020</div></a></li>
                                        <li><a href=""><h5>Ngập tràn ưu đãi nạp vàng trong tháng 7 này</h5><div class="date">Ngày đăng: 30/07/2020</div></a></li>
                                        <li><a href=""><h5>Ngập tràn ưu đãi nạp vàng trong tháng 7 này</h5><div class="date">Ngày đăng: 30/07/2020</div></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content-2 " data-aos="slide-up" >
                            <div class="row">
                                <div class="col-css col-md-7 background">
                                    <div class="title" style="text-align: left;padding-left: 30px !important;">VỀ CHÚNG TÔI</div>
                                    <p>
                                        Nhiều vật phẩm vô cùng hấp dẫn trong ưu đãi nạp Vàng cuối
                                        tháng 7/2020 đang chờ đón quý nhân sỹ.
                                        Chư vị nhân sĩ,
                                        Từ ngày 30/07 - 31/07/2020, quý nhân sĩ tiến hành nạp Vàng s
                                        được nhận thêm quà thưởng hấp dẫn Cùng xem những ưu đãi
                                        nạp Vàng trong hai ngày cuối 7 này nhé!
                                    </p>
                                </div>
                    
                                <div class="col-css col-md-5 background">
                                    <div class="title">BẢNG XẾP HẠNG</div>
                                    <ul>
                                        <li style="background-image: url('./assets/img/14.png');">Namduong</li>
                                        <li style="background-image: url('./assets/img/15.png');">Namduong</li>
                                        <li style="background-image: url('./assets/img/16.png');">Namduong</li>
                                        <li style="background-image: url('./assets/img/17.png');">Namduong</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-right col-md-12 col-lg-3 col-xl-3 col-css" data-aos="fade-left">
                 <div class="background">
                    <div class="title">CONTACT US</div>
                    <ul>
                        <li><a href="" style="background-image: url('./assets/img/fa.png')">Link Facebook</a></li>
                        <li><a href="" style="background-image: url('./assets/img/mail.png');">Email</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
    <!-- <div class="pp-left">
        <img src="./assets/img/9.png">
    </div>
    <div class="pp-right">
        <img src="./assets/img/10.png">
    </div> -->
    <div class="may-2 d-none d-md-block">
      <img src="./assets/img/23.png">
    </div>
</main>
<footer>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
          <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
        </div>
      </div>
    </div>
</footer>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-inline">
          <div class="form-group mx-sm-5 mb-2">
            <input type="password" class="form-control" id="inputPassword2" placeholder="Tìm Kiếm">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Tìm Kiếm</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
 AOS.init();

  </script>
</html>