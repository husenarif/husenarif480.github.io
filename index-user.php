<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Layanan Kearsipan Yogyakarta</title>
    <link href="css/media_query.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
    <style>

    </style>
    <script>

    </script>
</head>

<body>
    <div class="container-fluid fh5co_header_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 fh5co_mediya_center"><a href="https://time.is/id/"
                        class="color_fff fh5co_mediya_setting">
                        <script language="JavaScript">
                            var tanggallengkap = new String();
                            var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
                            namahari = namahari.split(" ");
                            var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
                            namabulan = namabulan.split(" ");
                            var tgl = new Date();
                            var hari = tgl.getDay();
                            var tanggal = tgl.getDate();
                            var bulan = tgl.getMonth();
                            var tahun = tgl.getFullYear();
                            tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
                        </script>

                        <span id='jam'></span>
                        <script language='JavaScript'>document.write(tanggallengkap);</script>
                        <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#"
                                class="treding_btn">arsipjogja12@brin.go.id</a>
                            <div class="fh5co_treding_position_absolute"></div>
                        </div>
                        <a href="#" class="color_fff fh5co_mediya_setting">Layanan Sistem Informasi Kearsipan
                            Yogyakarta</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 fh5co_padding_menu">
                    <img src="images/Logo BRIN_Lanscape_Colour.png" alt="img" class="fh5co_logo_width" />
                </div>
                <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://www.linkedin.com/company/brin-ri/" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://www.brin.go.id/" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-google"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://x.com/brin_indonesia?s=20" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://www.facebook.com/brin.indonesia?mibextid=MKOS29" target="_blank"
                            class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a>
                    </div>
                    <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                    <div class="d-inline-block text-center dd_position_relative">
                        <select class="form-control fh5co_text_select_option" onchange="navigateToPage(this.value)">
                            <option value="">Pilih Halaman</option>
                            <option value="index.php">Guset</option>
                            <option value="login-user.php">Login</option>
                        </select>
                    </div>

                    <script>
                        function navigateToPage(selectedValue) {
                            // Redirect ke halaman yang dipilih
                            if (selectedValue !== "") {
                                window.location.href = selectedValue;
                            }
                        }
                    </script>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
        <div class="container padding_786">
            <nav class="navbar navbar-toggleable-md navbar-light ">
                <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <a class="navbar-brand" href="#"><img src="img/Logo BRIN_Lanscape_Colour.png" alt="img"
                        class="mobile_logo_width" /></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Halaman <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="layanan-user.php">Layanan <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="single-user.php">Profil <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="publikasi-user.php">Publikasi <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Berita&Opini <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="blog-user.php">Berita</a>
                                <a class="dropdown-item" href="opini-user.php">Opini</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Galeri <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="foto-user.php">Foto</a>
                                <a class="dropdown-item" href="vidio-user.php">Video</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Lainya <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="penelitian-user.php">E-Arsip Penelitian</a>
                                <a class="dropdown-item" href="akunsaya-user.php">Akun Saya</a>
                                <a class="dropdown-item" href="Contact_us-user.php">Hubungi Kami</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <br>
    </br>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-left:200px;">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" style=" width:1090px; height:500px;">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/FOTOteamkearsipan.jpeg" alt="First slide"
                    style=" width:350px; height:500px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Proker.png" alt="Second slide"
                    style=" width:350px; height:500px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/STRUKTUR ORGANISASI_page-0001.jpg" alt="Third slide"
                    style=" width:350px; height:500px;">
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

    <div class="container-fluid pt-3">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Berita Hangat</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/pemusnahanarsip.jpeg" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita1-admin.php" class="text-white">Pemusnahan Arsip Tahap 1</a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - Maret 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/kunjunganugm.png" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita2-admin.php" class="text-white"> Layanan Arsip Kawasan Yogyakarta Studi
                                Banding ke
                                Arsip UGM </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - Oktober 7,2023</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/kunjunganarsipkarangsambung.jpg" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita3-admin.php" class="text-white"> Kunjungan Tim Layanan Kearsipan
                                Karangsambung
                                Kebumen</a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - Maret 7,2023</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/kunjungankedinasperpustakaanasrip.jpg"
                                alt="" class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita4-admin.php" class="text-white">Kunjungan Layanan Arsip Yogyakarta Ke Dinas
                                Perpustakaan Dan Arsip Daerah

                            </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - Juni 7,2019</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/sertifikasi_jabatan.jpeg" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita5-admin.php" class="text-white">3 SDM Layanan Arsip Kawasan Yogyakarta Telah
                                Lulus Mengikuti Uji Kompetensi Tahun 2023</a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - Agus 25,2023</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/Picture1.jpg" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita5-admin.php" class="text-white">SDM dari Layanan Arsip
                                Kawasan Yogyakarta berhasil meraih predikat Juara 2 dalam Lomba (LKTK) Tahun 2023,</a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - Agus 25,2023</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid fh5co_video_news_bg pb-4">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4 ">Video</div>
            </div>
            <div>
                <div class="owl-carousel owl-theme" id="slider3">
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe width="345" height="215"
                                        src="https://www.youtube.com/embed/AQwmLz_BIZ8?si=3SoU4i7uI5iRriMW"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                    <img src="images/" width="345" height="215" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide"
                                    id="play-video">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">Profil BRIN </span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> November 07,2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe width="345" height="215"
                                        src="https://www.youtube.com/embed/RuoKWTSOayg?si=eVntsuuech0u5JHF"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
                                    <img src="images/" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_2"
                                    id="play-video_2">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">Pentingnya Arsip</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> November 07,2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe width="345" height="215"
                                        src="https://www.youtube.com/embed/2Gi523pc0ek?si=EZsf4GAskSUYONIn"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
                                    <img src="images/" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_3"
                                    id="play-video_3">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">Layanan BRIN</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> November 07,2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe width="345" height="215"
                                        src="https://www.youtube.com/embed/2Gi523pc0ek?si=EZsf4GAskSUYONIn"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                    <img src="images/" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4"
                                    id="play-video_4">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">Layanan BRIN</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> November 07,2023</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div class>
                        <div class>
                            <div class>
                                <div class><img src="images/POJOK ARSIP.png"
                                        style="width: 725px;height: 420px;margin-top:60px;" alt="" /></div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Banyak Dicari</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/kunjunganugm.png" alt="img" class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Layanan Arsip Kawasan Yogyakarta Studi Banding
                                Kearsipan UGM .</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/kunjungankedinasperpustakaanasrip.jpg" alt="img"
                                class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> KUNJUNGAN LAYANAN ARSIP YOGYAKARTA KE DINAS
                                PERPUSTAKAAN DAN ARSIP DAERAH.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2019</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/kunjunganarsipkarangsambung.jpg" alt="img" class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Kunjungan Tim Layanan Arsip Karang Sambung Kebumen.
                            </div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center"><img src="images/pemusnahanarsip.jpeg" alt="img"
                                class="fh5co_most_trading" /></div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Pemusnahan Arsip Tahap 1.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center"><img src="images/sertifikasi_jabatan.jpeg" alt="img"
                                class="fh5co_most_trading" /></div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font">3 SDM Layanan Arsip Kawasan Yogyakarta Telah Lulus
                                Mengikuti Uji Kompetensi Tahun 2023.</div>
                            <div class="most_fh5co_treding_font_123"> Agustus 25, 2018</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center"><img src="images/Picture1.jpg" alt="img"
                                class="fh5co_most_trading" /></div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font">SDM dari Layanan Arsip
                                Kawasan Yogyakarta berhasil meraih predikat Juara 2 dalam Lomba (LKTK) Tahun 2023,.</div>
                            <div class="most_fh5co_treding_font_123"> Agustus 25, 2018</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
                <div class="col-12 text-center pb-4 pt-4">
                    <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp;
                        Sebelumnya</a>
                    <a href="#" class="btn_pagging">1</a>
                    <a href="#" class="btn_pagging">2</a>
                    <a href="#" class="btn_pagging">3</a>
                    <a href="#" class="btn_pagging">...</a>
                    <a href="#" class="btn_mange_pagging">Selanjutnya <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp;
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid fh5co_footer_bg pb-3">
        <div class="container animate-box">
            <div class="row">
                <div class="col-12 spdp_right py-5"><img
                        src=images/Main_Logo_of_National_Research_and_Innovation_Agency_of_Indonesia.svg.png alt=" img"
                        class="footer_logo" /></div>
                <div class="clearfix"></div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="footer_main_title py-3"> Sekilas Layanan Arsip </div>
                    <div class="footer_sub_about pb-3" style="text-align: justify;"> Arsip sering dibutuhkan dan dipakai
                        dalam bidang manajemen serta administrasi".
                        Berdasarkan Undang-Undang Nomor 43 Tahun 2009 tentang Kearsipan, arsip adalah rekaman
                        kegiatan atau peristiwa dalam berbagai bentuk serta media, yang dibuat dan diterima oleh
                        lembaga negara, pemerintah daerah, lembaga pendidikan, perusahaan, organisasi politik,
                        organisasi masyarakat maupun perseorangan, dalam rangka melaksanakan kehidupan
                        bermasyarakat, berbangsa dan bernegara.
                        Arsip dapat didefinisikan sebagai bukti atau rekaman aktivitas dan transaksi, mulai dari
                        pembayaran hingga langkah pengambilan keputusan.
                    </div>
                    <div class="footer_mediya_icon">
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a></div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <div class="footer_main_title py-3"> Kategori</div>
                    <ul class="footer_menu">
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Study Banding</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Kunjungan</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Penelitian</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Layanan Arsip</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Buat Akun</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Sumber Daya</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Teknologi</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Lingkungan</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                    <div class="footer_main_title py-3"> Paling banyak dilihat</div>
                    <div class="footer_makes_sub_font"> Oktober 10,2023</div>
                    <a href="#" class="footer_post pb-4"> Study Banding </a>
                    <div class="footer_makes_sub_font"> Oktober 17,2023</div>
                    <a href="#" class="footer_post pb-4"> Pemusnahan Arsip Tahap 1 </a>
                    <div class="footer_makes_sub_font"> Juni 17, 2022</div>
                    <a href="#" class="footer_post pb-4"> Kunjungan Tim Kearsipan Karang Sambung Kebumen </a>
                    <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img"
                            class="width_footer_sub_img" /></div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 ">
                    <div class="footer_main_title py-3"> Terakhir di Ubah</div>
                    <a href="berita1-user.php" class="footer_img_post_6"><img src="images/pemusnahanarsip.jpeg"
                            alt="img" /></a>
                    <a href="berita1-user.php" class="footer_img_post_6"><img
                            src="images/pemusnahan arsip foto ke 2.jpg" alt="img" /></a>
                    <a href="profil-user.php" class="footer_img_post_6"><img
                            src="images/STRUKTUR ORGANISASI_page-0001.jpg" alt="img" /></a>
                    <a href="berita3-user.php" class="footer_img_post_6"><img
                            src="images/kunjunganarsipkarangsambung.jpg" alt="img" /></a>
                    <a href="berita2-user.php" class="footer_img_post_6"><img src="images/kunjunganugm.png"
                            alt="img" /></a>
                    <a href="profil.php" class="footer_img_post_6"><img src="images/LOGO BATAN.png" alt="img" /></a>
                    <a href="profil.php" class="footer_img_post_6"><img src="images/Tusi.png" alt="img" /></a>
                    <a href="profil.php" class="footer_img_post_6"><img src="images/Proker.png" alt="img" /></a>
                    <a href="profil.php" class="footer_img_post_6"><img src="images/profil.jpeg" alt="img" /></a>
                </div>
            </div>
            <div class="row justify-content-center pt-2 pb-4">
                <div class="col-12 col-md-8 col-lg-7 ">
                    <div class="input-group">
                        <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i
                                class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..."
                            aria-describedby="basic-addon1">
                        <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i
                                class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_footer_right_reserved">
        <div class="container">
            <div class="row  ">
                <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2023, All rights reserved. Design by <a
                        href="https://freehtml5.co" title="Free php5 Bootstrap templates">Layanan Sistem Informasi
                        Kawasan Yogyakarta</a>. </div>
                <div class="col-12 col-md-6 spdp_right py-4">
                    <a href="#" class="footer_last_part_menu">Halaman</a>
                    <a href="Contact_us.php" class="footer_last_part_menu">Tentang Kami</a>
                    <a href="Contact_us.php" class="footer_last_part_menu">Kontak</a>
                    <a href="blog.php" class="footer_last_part_menu">Berita Terakhir ini</a>
                </div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>