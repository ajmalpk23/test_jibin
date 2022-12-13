@extends('web.layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>

            <div class="row">
                @foreach ($aboutData as $about)
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ url('') . '/' . $about->profile_image }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{ $about->about_title }}</h3>
                        <p class="fst-italic">{{ $about->short_description }}</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{ $about->birth_day }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>{{ $about->web_site }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{ $about->phone }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{ $about->city }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ $about->age }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>{{ $about->Degree }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ $about->email }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>{{ $about->freelance }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>{{ $about->description }}</p>
                    </div>
                @endforeach
            </div>

        </div><!-- End About Me -->

        <!-- ======= Counts ======= -->
        <div class="counts container">

            <div class="row">

                @foreach ($aboutData as $about)
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $about->happy_client }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                @endforeach


                @foreach ($aboutData as $about)
                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $about->projects }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                @endforeach


                @foreach ($aboutData as $about)
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $about->hours_of_support }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                @endforeach


                @foreach ($aboutData as $about)
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $about->awards }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div>
                @endforeach


            </div>

        </div><!-- End Counts -->

        <!-- ======= Skills  ======= -->
        <div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>


            <div class="row skills-content">


                @foreach ($skillData as $skill)
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill">{{ $skill->skill_name }} <i
                                    class="val">{{ $skill->skill_value }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->skill_value }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div><!-- End Skills -->

        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="section-title">
                <h2>Interests</h2>
            </div>

            <div class="row">
                @foreach ($interestData as $interest)
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="" style="color: #00FF00;"></i>
                            <h3>{{ $interest->interest_title }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>

        </div><!-- End Interests -->

        <!-- ======= Testimonials ======= -->
        <div class="testimonials container">

            <div class="section-title">
                <h2>Testimonials</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($testimonData as $testimon)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{ $testimon->description }}<i
                                        class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('') . '/' . $testimon->image }}" class="testimonial-img" alt="">
                                <h3>{{ $testimon->name }}</h3>
                                <h4>{{ $testimon->position }}</h4>
                            </div>
                        </div><!-- End testimonial item -->
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="owl-carousel testimonials-carousel">

            </div>

        </div><!-- End Testimonials  -->

    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>My Self</h4>
                        <p><em>Innovative and deadline-driven Software Developer with 2+ years of experience designing and
                                developing user-centered digital/print marketing material from initial concept to final,
                                polished deliverable.</em></p>
                        <p>
                        <ul>
                            <li>Parappanangadi,Malappuram,Kerala,India</li>
                            <li>+91 9995650423</li>
                            <li>jibinkp770@gmail.com</li>
                        </ul>
                        </p>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    @foreach ($resumeEducationData as $resumeEducation)
                        <div class="resume-item">
                            <h4>{{ $resumeEducation->title }}</h4>
                            <h5>{{ $resumeEducation->start_year }} - {{ $resumeEducation->end_year }}</h5>
                            <p><em>{{ $resumeEducation->company_name }}</em></p>
                            <p>{{ $resumeEducation->description }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    @foreach ($resumeProfessionData as $resumeProfession)
                        <div class="resume-item">
                            <h4>{{ $resumeProfession->title }}</h4>
                            <h5>{{ $resumeProfession->start_year }} - {{ $resumeProfession->end_year }}</h5>
                            <p><em>{{ $resumeProfession->company_name }}</em></p>
                            <p>{{ $resumeProfession->description }}
                                {{-- <ul>
                            <li>Lead in the design, development, and implementation of the graphic, layout, and production
                                communication materials</li>
                            <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the
                                project. </li>
                            <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of
                                the design</li>
                            <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                        </ul> --}}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>My Services</p>
            </div>

            <div class="row">
                @foreach ($servicesData as $services)
                    <div class="col-lg-4 col-md-6 d-flex ">
                        <div class="icon-box">
                            <div class="icon"><i class="{{ $services->icon }}"></i></div>
                            <h4><a href="">{{ $services->service_name }}</a></h4>
                            <p>{{ $services->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My Works</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    {{-- <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($portfolioCatData as $portfolioCat)
                            <li data-filter=".filter-app">{{ $portfolioCat->cat_name }}</li>
                        @endforeach
                    </ul> --}}
                </div>
            </div>

            <div class="row portfolio-container">
                @foreach ($portfolioData as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ url('') . '/' . $portfolio->cover_image }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $portfolio->app_title }}</h4>
                                <p>{{ $portfolio->portfolioCategory[0]->cat_name }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('') . '/' . $portfolio->cover_image }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="{{ $portfolio->app_title }}"><i class="bx bx-plus"></i></a>
                                    {{-- <a href="{{ route('portfolio_details') }}"><i class="bx bx-link"></i></a> --}}
                                    {{-- <a href="{{ url('portfolio_details', $portfolio->portfolio_id) }}"
                                        data-glightbox="type: external" data-gallery="portfolioDetailsGallery" class="portfolio-details-lightbox" title="Portfolio Details"><i
                                            class="bx bx-link" ></i></a> --}}

                                    <a href="{{ url('portfolio_details', $portfolio->portfolio_id) }}"
                                        data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                                        class="portfolio-details-lightbox" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p>Kizhakkepurakkal PO. Ullanam 676303 Parappanangadi,Malappuram,Kerala,India</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="https://twitter.com/JibinKp8" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100079129246071" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/le_njan_jibin/" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://join.skype.com/invite/wkMeIluqdSok" class="google-plus"><i
                                    class="bi bi-skype"></i></a>
                            <a href="https://www.linkedin.com/in/jibin-kp-a14043221/" class="linkedin"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p>jibinkp770@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p>+91 9995650423</p>
                    </div>
                </div>
            </div>

            <form action="{{url('save-form')}}" method="post" role="form" class="php-email-form mt-4">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

        </div>
    </section><!-- End Contact Section -->

    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>


    </html>
@endsection
