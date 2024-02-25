<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT CIPTO LANGGENG JOYO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url("images/logo/logo.png") ?>" rel="icon">
    <link href="<?php echo base_url("images/logo/logo.png") ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url("assets/landing/vendor/aos/aos.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/landing/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/landing/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/landing/vendor/glightbox/css/glightbox.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/landing/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/landing/vendor/swiper/swiper-bundle.min.css") ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url("assets/landing/css/style.css") ?>" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?php echo base_url("images/logo/logo.png") ?>" alt="">
                <span></span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#home">Home</a></li>
                    <li><a class="nav-link scrollto" href="#katalog">Katalog</a></li>
                    <li><a class="nav-link scrollto" href="#produk">Produk</a></li>
                    <li><a class="nav-link scrollto" href="#patner">Patner</a></li>
                    <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
                    <!-- <li><a class="getstarted scrollto" href="#about">Login</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="home" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">PT CIPTO LANGGENG JOYO</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Merupakan perusahaan yang bergerak di bidang pertanian yang memproduksi pupuk majemuk seperti NPK dan mendistribusikan berbagai jenis pupuk unggulan di indonesia. lokasi pembuatan kami di daerah khusus, Mojokerto, provinsi jawa timur indonesia</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#katalog" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Lanjut</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?php echo base_url("images/produk/welcome.png") ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Values Section ======= -->
        <section id="katalog" class="values">
            <?php
            $dataKatalog = [
                [
                    'gambar_katalog'     => 'images/produk/katalog 1.png',
                    'judul'              => 'PUPUK UNGGULAN JATI WARINGI',
                    'deskripsi'          => ''
                ],
                [
                    'gambar_katalog'     => 'images/produk/katalog 2.png',
                    'judul'              => 'PUPUK UNGGULAN JATI WARINGI',
                    'deskripsi'          => ''
                ],
                [
                    'gambar_katalog'     => 'images/produk/katalog 3.png',
                    'judul'              => 'PUPUK UNGGULAN JATI WARINGI',
                    'deskripsi'          => ''
                ],
            ]
            ?>
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Katalog</p>
                </header>

                <div class="row">
                    <?php foreach ($dataKatalog as $rows) : ?>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="box">
                                <img src="<?php echo base_url($rows['gambar_katalog']) ?>" class="img-fluid" alt="">
                                <h3><?= $rows['judul']; ?></h3>
                                <p><?= $rows['deskripsi']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="produk" class="portfolio">
            <?php
            $dataMenu = [
                [
                    'menu'      => '.filter-npk',
                    'nama_menu' => 'PUPUK NPK',
                ]
            ];
            $data = [
                [
                    'menu'              => 'filter-npk',
                    'judul'             => 'PUPUK NPK',
                    'detail'            => '15-15-15',
                    'gambar_produk'     => 'images/produk/produk 1.png',
                ],
                [
                    'menu'              => 'filter-npk',
                    'judul'             => 'PUPUK NPK',
                    'detail'            => '16-16-16',
                    'gambar_produk'     => 'images/produk/produk 2.png',
                    'gambar_produk_detail'     => 'images/produk/produk 2.png',
                ],
                [
                    'menu'              => 'filter-npk',
                    'judul'             => 'PUPUK NPK',
                    'detail'            => '12-12-17+2Mg0',
                    'gambar_produk'     => 'images/produk/produk 3.png',
                    'gambar_produk_detail'     => 'images/produk/produk 3.png',
                ],
                [
                    'menu'              => 'filter-npk',
                    'judul'             => 'PUPUK NPK',
                    'detail'            => '12-12-17+2Mg0',
                    'gambar_produk'     => 'images/produk/produk 4.png',
                ],
                [
                    'menu'              => 'filter-npk',
                    'judul'             => 'PUPUK NPK',
                    'detail'            => '12-12-17+2Mg0',
                    'gambar_produk'     => 'images/produk/produk 5.png',
                ],
                [
                    'menu'              => 'filter-npk',
                    'judul'             => 'PUPUK NPK',
                    'detail'            => '12-12-17+2Mg0',
                    'gambar_produk'     => 'images/produk/produk 6.png',
                ],
                [
                    'menu'              => 'filter-npk',
                    'judul'             => 'PUPUK NPK',
                    'detail'            => '12-12-17+2Mg0',
                    'gambar_produk'     => 'images/produk/produk 7.png',
                ],
                [
                    'menu'              => 'filter-npk',
                    'judul'             => 'PUPUK NPK',
                    'detail'            => '12-12-17+2Mg0',
                    'gambar_produk'     => 'images/produk/produk 8.png',
                ],
                [
                    'menu'              => 'filter-npk',
                    'judul'             => 'PUPUK NPK',
                    'detail'            => '12-12-17+2Mg0',
                    'gambar_produk'     => 'images/produk/produk 9.png',
                ]
            ]
            ?>
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>PRODUK</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <?php foreach ($dataMenu as $rows) : ?>
                                <li data-filter="<?= $rows['menu']; ?>"><?= $rows['nama_menu']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <?php foreach ($data as $rows) : ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-npk">
                            <div class="portfolio-wrap">
                                <img src="<?php echo base_url($rows['gambar_produk']) ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><?= $rows['judul']; ?></h4>
                                    <p><?= $rows['detail']; ?></p>
                                    <div class="portfolio-links">
                                        <a href="<?php echo base_url($rows['gambar_produk']) ?>" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimoni" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>TESTIMONI</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Tempat produsen Pupuk NPK Jatiwangi yang terpercaya
                                </p>
                                <div class="profile mt-auto">
                                    <img src="<?php echo base_url("images/testimoni/mulyono.jpg") ?>" class="testimonial-img" alt="">
                                    <h3>Mas Yon</h3>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->



        <!-- ======= Clients Section ======= -->
        <section id="patner" class="clients">
            <?php
            $dataPart = [
                [
                    'gambar'      => 'images/patner/agromax.jpg',
                ],
                [
                    'gambar'      => 'images/patner/gresik.jpg',
                ],
                [
                    'gambar'      => 'images/patner/pupuk indonesia.jpg',
                ],
                [
                    'gambar'      => 'images/patner/pusri.png',
                ],
                [
                    'gambar'      => 'images/patner/surya makmur.png',
                ],
                [
                    'gambar'      => 'images/patner/wirasena.jpg',
                ]
            ];
            ?>
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>PATNER</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php
                        foreach ($dataPart as $rows) :
                        ?>
                            <div class="swiper-slide"><img src="<?php echo base_url($rows['gambar']) ?>" class="img-fluid" alt=""></div>
                        <?php endforeach;  ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->


        <!-- ======= Contact Section ======= -->
        <section id="kontak" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>KONTAK</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>
                                        JL Raden Wijaya No.4 Gg. Serut RT. 01 <br>
                                        RW. 01 Dsn. Kemloko, Ds Jotangan,<br>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>HP</h3>
                                    <p>(0321) 6850855<br></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email</h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Oprasional</h3>
                                    <p>Senin - Minggu<br>24 Jam</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="" class="logo d-flex align-items-center">
                            <img src="<?php echo base_url("assets/landing/img/logo.png") ?>" alt="">
                            <span>PT Cipto Langgeng Joyo</span>
                        </a>
                        <p>Merupakan perusahaan yang bergerak di bidang pertanian yang memproduksi pupuk majemuk seperti NPK dan mendistribusikan berbagai jenis pupuk unggulan di indonesia.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>MENU</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>SERVIS</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">PRODUK NPK</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>KONTAK</h4>
                        <p>
                            JL Raden Wijaya No.4 Gg. Serut RT. 01 <br>
                            RW. 01 Dsn. Kemloko, Ds Jotangan,<br>
                            Kec. Mojosari, Mojokerto, Jawa Timur 61382 <br><br>
                            <strong>Phone:</strong> (0321) 6850855<br>
                            <strong>Email:</strong> <br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Cipto Langgeng Joyo</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- Nama yang desain -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url("assets/landing/vendor/purecounter/purecounter_vanilla.js") ?>"></script>
    <script src="<?php echo base_url("assets/landing/vendor/aos/aos.js") ?>"></script>
    <script src="<?php echo base_url("assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/landing/vendor/glightbox/js/glightbox.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/landing/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/landing/vendor/swiper/swiper-bundle.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/landing/vendor/php-email-form/validate.js") ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url("assets/landing/js/main.js") ?>"></script>

</body>

</html>