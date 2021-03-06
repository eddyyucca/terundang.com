<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wedding Eddy & Yunita</title>


    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets') ?>/favicon.ico" type="image/x-icon">

    <!-- musik -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Root-Icon -->
    <link rel="stylesheet" href="https://cdn.rootpixel.net/assets/rooticon/v2/rooticon.css">
    <!-- Glide -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css" integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css" integrity="sha512-wCwx+DYp8LDIaTem/rpXubV/C1WiNRsEVqoztV0NZm8tiTvsUeSlA/Uz02VTGSiqfzAHD4RnqVoevMcRZgYEcQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Lightgallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" integrity="sha512-kwJUhJJaTDzGp6VTPBbMQWBFUof6+pv0SM3s8fo+E6XnPmVmtfwENK0vHYup3tsYnqHgRDoBDTJWoq7rnQw2+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Aos Animation on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- App -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/musik/css/app.min.css">
    <!-- end -->
    <!-- Library CSS -->
    <link href="<?= base_url('assets') ?>/css/glanz_library.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="<?= base_url('assets') ?>/fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?= base_url('assets') ?>/css/glanz_style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700%7COpen+Sans:300,400,700%7CPlayfair+Display:400,400i,700,700i" rel="stylesheet">

    <!-- Other Fonts -->
    <link href="<?= base_url('assets') ?>/fonts/marsha/stylesheet.css" rel="stylesheet">

</head>


<!-- Body -->

<body class="opening-show gla_middle_titles ">

    <!-- <body class="opening-show"> -->
    <!-- <body> -->

    <section id="opening">
        <div class="container text-center" data-aos="fade-in" data-aos-duration="1500">
            <div class="text-dec text-dec-white mb-4">Wedding Invitation</div>

            <h2 class="font-type-secondary mb-2"></h2>
            <h3>Eddy & Yunita</h3>
            <img src="<?= base_url('assets') ?>/musik/img/decoration/foliage-horizontal-1.svg" alt="" class="w-75 w-md-30rem my-3">

            <div class="fw-bold mt-8">
                <?php if ($undang == false) { ?>
                    <h3> <?php echo "Mengundang Anda"; ?> </h3>
                <?php } else { ?>
                    <h3> <?php echo   str_replace("_", " ", $undang); ?> </h3>
                <?php } ?>

                <p hidden> <span id="guest"></span></p>

            </div>
            <br>
            <div>Anda diundang dalam acara pernikahan kami!</div>

            <br>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <button id="btn-open-opening" class="btn btn-primary">Buka Undangan</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Page -->


    <div class="gla_page" id="gla_page">
        <!-- To Top -->
        <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>
        <!-- Header -->
        <header>
            <nav class="gla_light_nav gla_transp_nav">

                <div class="container">

                    <div class="gla_logo_container clearfix">
                        <!-- <img src="images/glanz_logo.png" alt="" class="gla_logo_rev"> -->
                        <div class="gla_logo_txt">
                            <!-- Logo -->
                            <a href="<?= base_url('home') ?>/" class="gla_logo">Eddy & Yunita</a>

                            <!-- Text Logo -->
                            <div class="gla_logo_und">13 Maret 2022</div>
                        </div>
                    </div>

                    <!-- Menu -->
                    <!-- Menu Content -->
                    <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)" data-image="http://placehold.it/1400x800">
                        <!-- Over -->
                        <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
                    </div>




                </div>
                <!-- container end -->
            </nav>

        </header>
        <!-- Header End -->


        <!-- Slider -->
        <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed" data-image="<?= base_url('assets') ?>/images/tes2.jpg" data-stellar-background-ratio="0.8">

            <!-- Over -->
            <div class="gla_over" data-color="#9abab6" data-opacity="0.2"></div>


            <div class="container">


                <!-- Slider Texts -->
                <div class="gla_slide_txt gla_slide_center_bottom text-center">
                    <p><img src="<?= base_url('assets') ?>/images/animations/ourwedding_wh.gif" data-top-bottom="@src:<?= base_url('assets') ?>/images/animations/ourwedding_wh.gif" alt="" height="150"></p>

                </div>
                <!-- Slider Texts End -->

            </div>
            <!-- container end -->

            <!-- Slide Down -->
            <a class="gla_scroll_down gla_go" href="#gla_content">
                <b></b>
                Scroll
            </a>


        </div>
        <!-- Slider End -->

        <!-- Content -->
        <section id="gla_content" class="gla_content">

            <!-- section -->
            <section class="gla_section">
                <div class="container text-center">
                    <p><img src="<?= base_url('assets') ?>/images/animations/flower6.gif" data-bottom-top="@src:<?= base_url('assets') ?>/images/animations/flower6.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                    <h2>Mempelai</h2>
                    <h3 class="gla_subtitle">Assalamu'alaikum Warahmatullah</h3>
                    <h4>Dengan Rahmat Allah yang Maha Kuasa InsyaAllah kami akan melangsungkan pernikahan pada:</h4>

                    <!-- foto berdua -->
                    <div class="row text-center">
                        <div class="col-md-6 gla_round_block">
                            <div class="gla_round_im gla_image_bck" data-image="<?= base_url('assets/images/eddy.jpg') ?>"></div>
                            <h3>Eddy Adha Saputra, S.Kom <br>
                                Putra Dari <br>
                                H. Jarmani, S.Pt <br>
                                Hj. Irmawati</h3>

                        </div>
                        <div class="col-md-6 gla_round_block">
                            <div class="gla_round_im gla_image_bck" data-image="<?= base_url('assets/images/yunita.jpg') ?>"></div>
                            <h3>Yunita Noor Maulidayanti, A.Md.Kes
                                <br>
                                Putri Dari <br>
                                Armi Siswani, S.Pd <br>
                                Peltu (Purn) Pagianto
                            </h3>
                        </div>
                    </div>


                </div>
                <!-- container end -->

            </section>
            <!-- section end -->


            <!-- section -->
            <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="<?= base_url('assets/images/date.jpg') ?>">

                <!-- Over -->
                <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>

                <div class="container text-center">
                    <p><img src="<?= base_url('assets') ?>/images/animations/savethedate_wh.gif" data-bottom-top="@src:<?= base_url('assets') ?>/images/animations/savethedate_wh.gif" height="150" alt=""></p>
                    <h2>13 Maret, 2022</h2>
                    <h3 class="gla_subtitle">komplek asabri citra kartika eka paksi blok.B No.8 rt.013 rw.005. rangda malingkung. tapin utara. tapin. kalimantan selatan</h3>
                    <div class="gla_countdown" data-year="2022" data-month="03" data-day="13"></div>

                </div>
                <!-- container end -->

            </section>
            <!-- section end -->


            <!-- section -->

            <!-- section end -->
            <!-- ssss -->
            <section class="gla_section">


                <div class="container text-center">
                    <h2 class="gla_subtitle">FIlter Instagram</h2>
                    <h4>Gunakan filter instagram di acara wedding kami</h4>
                    <div class="gla_icon_boxes row text-left">
                        <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        </div>
                        <div class="col-sm-4 gla_anim_box grid-item ceremony">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/filter.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/filter.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="https://www.instagram.com/ar/663738727963179" target="_blank" class="btn btn-primarry mt-3">Klik FIlter Instagram</a>
                    <!-- boxes end -->


                </div>
                <!-- container end -->

            </section>
            <!-- section -->
            <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="<?= base_url('assets') ?>/images/pay1.jpg">

                <!-- Over -->
                <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>

                <div class="container text-center">

                    <h3>Amplop Digital</h3>
                    <h5 class="gla_subtitle mt-2">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami.
                        Dan jika memberi adalah ungkapan tanda kasih anda, Anda dapat memberi kado secara cashless.</h5>
                    <div class=" col-sm-4 gla_anim_box grid-item engagement">
                    </div>
                    <div class="col-md-4 col-sm-6">

                        <a class="gla_news_block">
                            <span class="gla_news_img">
                                <span class="gla_over" data-image="<?= base_url('assets') ?>/images/BANK.png"></span>
                            </span>
                            <span class="gla_news_title">BRI - 456301007959539</span>
                            <p><strong>An. Eddy Adha Saputra</strong></p>


                        </a>
                    </div>



                </div>
                <!-- container end -->

            </section>
            <!-- section end -->


            <!-- section -->
            <section class="gla_section gla_image_bck">


                <div class="container text-center">
                    <p><img src="<?= base_url('assets') ?>/images/animations/flowers3.gif" data-bottom-top="@src:<?= base_url('assets') ?>/images/animations/flowers3.gif" height="130" alt=""></p>
                    <h2>Galeri Photo</h2>

                    <!-- filters -->
                    <div class="button-group filter-button-group">
                        <a data-filter="*">Show All</a>
                        <a data-filter=".engagement">Engagement</a>
                        <a data-filter=".ceremony">Ceremony</a>
                    </div>
                    <!-- filters end -->

                    <!-- grid -->
                    <div class="gla_portfolio_no_padding grid">

                        <!-- item -->
                        <div class="col-sm-4 gla_anim_box grid-item engagement">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/foto/HBBP0634_1.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/foto/HBBP0634_1.jpg" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="col-sm-4 gla_anim_box grid-item engagement">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/foto/HBBP0621_1.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/foto/HBBP0621_1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 gla_anim_box grid-item engagement">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/foto/HBBP0629_1.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/foto/HBBP0629_1.jpg" alt="">
                                </a>
                            </div>
                        </div>


                        <!-- item -->
                        <div class="col-sm-4 gla_anim_box grid-item ceremony">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/foto/HBBP0626_1.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/foto/HBBP0626_1.jpg" alt="">
                                </a>
                            </div>
                        </div>


                        <!-- item -->
                        <div class="col-sm-4 gla_anim_box grid-item engagement">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/foto/HBBP0623_1.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/foto/HBBP0623_1.jpg" alt="">
                                </a>
                            </div>
                        </div>


                        <!-- item -->
                        <div class="col-sm-4 gla_anim_box grid-item ceremony">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/foto/HBBP0627_1.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/foto/HBBP0627_1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- item -->
                    </div>
                    <!-- grid end -->

                </div>
                <!-- container end -->

            </section>
            <!-- section end -->
            <!-- section -->
            <!-- s -->
            <!-- section end -->

            <!-- section -->
            <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="<?= base_url('assets/images/thanks.jpg') ?>">

                <!-- Over -->
                <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>

                <div class="container text-center">

                    <h2>Danah Lokasi</h2>

                    <p>komplek asabri citra kartika eka paksi blok.B No.8 rt.013 rw.005. rangda malingkung. tapin utara. tapin. kalimantan selatan.
                    </p>
                    <div class="col-sm-2"></div>
                    <div class=" col-sm-8 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="https://goo.gl/maps/LxD9rWN7cCcdSJjJ6" class="lightbox">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15938.213841374276!2d115.1573353!3d-2.943759!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9cdcac2d18040683!2sRumah%20Yunita!5e0!3m2!1sid!2sid!4v1645964168025!5m2!1sid!2sid" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </a>
                        </div>
                    </div>


                    <!-- icon boxes -->

                    <!-- icon boxes end -->

                </div>
                <!-- container end -->

            </section>
            <!-- section end -->

            <section class="gla_section">
                <div class="container text-center">
                    <p><img src="<?= base_url('assets') ?>/images/animations/flowers2.gif" data-bottom-top="@src:<?= base_url('assets') ?>/images/animations/flowers2.gif" height="150" alt=""></p>
                    <br>
                    <h3 class="gla_subtitle">Terapkan Protokol Kesehatan</h3>

                    <div class="gla_icon_boxes row text-left">

                        <div class="col-sm-3 gla_anim_box grid-item ceremony">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/2.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 gla_anim_box grid-item ceremony">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/1.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 gla_anim_box grid-item ceremony">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/4.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 gla_anim_box grid-item ceremony">
                            <div class="gla_shop_item">
                                <a href="<?= base_url('assets') ?>/images/3.jpg" class="lightbox">
                                    <img src="<?= base_url('assets') ?>/images/3.jpg" alt="">
                                </a>
                            </div>
                        </div>


                    </div>
                    <!-- boxes end -->


                </div>
                <!-- container end -->

            </section>
            <!-- section -->
            <section class="gla_section">


                <div class="container text-center">
                    <p><img src="<?= base_url('assets') ?>/images/animations/rsvp.gif" data-bottom-top="@src:<?= base_url('assets') ?>/images/animations/rsvp.gif" height="180" alt=""></p>

                    <div class="row">
                        <div class="col-md-8 col-md-push-2">
                            <form action="<?= base_url('home/ucapan') ?>" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Anda</label>
                                        <input type="text" name="nama" class="form-control form-opacity" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail Anda</label>
                                        <input type="text" required name="email" class="form-control form-opacity">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Datang Saat Acara ?</label>

                                        <input type="radio" name="kehadiran" value="Ya">
                                        <span>Ya, Saya Hadir.</span><br>
                                        <input type="radio" name="attend" value="Tidak">
                                        <span>Maaf Tidak Bisa Hadir</span>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Notes</label>
                                        <textarea name="isi" required class="form-control form-opacity"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn submit" value="Kirim">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- container end -->
            </section>
            <!-- section end -->

            <!-- section -->
            <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="<?= base_url('assets/images/thanks.jpg') ?>">
                <!-- Over -->
                <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>

                <div class="container text-center">
                    <p><img src="<?= base_url('assets') ?>/images/animations/thnyou_wh.gif" alt="" height="200" data-bottom-top="@src:<?= base_url('assets') ?>/images/animations/thnyou_wh.gif"></p>
                </div>
                <!-- container end -->
            </section>
            <!-- section end -->
        </section>
        <!-- Content End -->

    </div>

    <button id="btn-play" class="btn btn-light">
        <i class="ri ri-volume-high"></i>
    </button>
    <audio controls id="audio" class="d-none">
        <source src="<?= base_url('assets/musik/') ?>musik_wedding.mp3" type="audio/mpeg">
        <!-- Your browser does not support the audio element. -->
    </audio>
    <!-- Page End -->
    <!-- JQuery -->
    <script src="<?= base_url('assets') ?>/js/jquery-1.12.4.min.js"></script>
    <!-- Library JS -->
    <script src="<?= base_url('assets') ?>/js/glanz_library.js"></script>

    <!-- Theme JS -->
    <script src="<?= base_url('assets') ?>/js/glanz_script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Lightgallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Countdown -->
    <script src="https://cdn.jsdelivr.net/npm/timezz@6.1.0/dist/timezz.min.js"></script>
    <!-- Glide -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Aos Animation os scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Anime js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- App -->
    <script src="<?= base_url('assets') ?>/musik/js/app.js"></script>



</body>

</html>