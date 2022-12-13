<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Personal Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/frontend/assets/img/favicon.png" rel="icon">
    <link href="/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> --}}
    <link href="/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    {{-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> --}}
    <link href="/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    {{-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> --}}
    <link href="/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    {{-- <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"> --}}
    <link href="/frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    {{-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}
    <link href="/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
    <link href="/frontend/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Personal - v4.9.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main id="main">

        <!-- ======= Portfolio Details ======= -->
        <div id="portfolio-details" class="portfolio-details">
            <div class="container">

                @foreach ($portfolioDetaislData as $portfolioDetails)
                    <div class="row">

                        <div class="col-lg-8">
                            <h2 class="portfolio-title">{{ $portfolioDetails->app_title }}</h2>

                            <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">

                                    <div class="swiper-slide">
                                        <img src="{{ url('') . '/' . $portfolioDetails->slide_image_1 }}"
                                            alt="">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="{{ url('') . '/' . $portfolioDetails->slide_image_2 }}"
                                            alt="">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="{{ url('') . '/' . $portfolioDetails->slide_image_3 }}"
                                            alt="">
                                    </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>

                        <div class="col-lg-4 portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: Web
                                    design</li>
                                <li><strong>Client</strong>: {{ $portfolioDetails->client }}</li>
                                {{-- <li><strong>Project date</strong>: {{ $portfolioDetails->project_date->format('F j\\, Y') }}</li> --}}
                                <li><strong>Project date</strong>:
                                    {{ date('d-M-Y', strtotime($portfolioDetails->project_date)) }}</li>
                                <li><strong>Project URL</strong>: <a
                                        href="{{ $portfolioDetails->project_url }}">{{ $portfolioDetails->project_url }}</a>
                                </li>
                            </ul>
                            <p>{{ $portfolioDetails->description }}</p>
                        </div>

                    </div>
                @endforeach

            </div>
        </div><!-- End Portfolio Details -->

    </main><!-- End #main -->

    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>

    <!-- Vendor JS Files -->
    <script src="/frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/frontend/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/frontend/assets/js/main.js"></script>

</body>

</html>
