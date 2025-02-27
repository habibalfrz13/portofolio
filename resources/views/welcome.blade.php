<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template/frontend')}}/img/favicon.png" rel="icon">
  <link href="{{asset('template/frontend')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template/frontend')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('template/frontend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('template/frontend')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('template/frontend')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('template/frontend')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('template/frontend')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template/frontend')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('storage/galery/user_image/' . $biodata->foto) }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{$biodata->nama}}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="{{ $biodata->x }}" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="{{$biodata->fb}}" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="{{$biodata->ig}}" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="{{$biodata->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="{{$biodata->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{$biodata->nama}}</h1>
      <p>I'm <span class="typed" data-typed-items="Batman, Inaffable, Iron Man"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('storage/galery/user_image/' . $biodata->foto) }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Developer.</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$biodata->tanggal_lahir}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.habibalfrz.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$biodata->no_hp}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$biodata->kota}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$biodata->umur}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$biodata->gelar}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{$biodata->email}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-cup-hot-fill"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $fakta->coffe }}" data-purecounter-duration="1" class="purecounter"></span>
              <h1><strong>Coffe</strong></h1>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-balloon-heart-fill"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $fakta->candy }}" data-purecounter-duration="1" class="purecounter"></span>
              <h1><strong>Candy</strong></h1>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $fakta->jam }}" data-purecounter-duration="1" class="purecounter"></span>
              <h1><strong>Hours</strong></h1>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $fakta->project }}" data-purecounter-duration="1" class="purecounter"></span>
              <h1><strong>Project</strong></h1>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>
        <div class="row skills-content">
          <div class="col-lg" data-aos="fade-up">
            @foreach($skill as $skill)
            <div class="progress">
                <span class="skill">{{ $skill['nama_skill'] }} <i class="val">{{ $skill['persentase_keahlian'] }}%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill['persentase_keahlian'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">
      <div class="section-title">
          <h2>Resume</h2>
      </div>

      <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Education</h3>
              @foreach($pendidikan as $edu)
                  <div class="resume-item">
                      <h4>{{ $edu['jenjang_pendidikan'] }}</h4>
                      <h5>{{ $edu['nama_sekolah'] }}</h5>
                      <p><em>{{ $edu['tahun_masuk'] }} - {{ $edu['tahun_lulus'] }}</em></p>
                      <p>{{ $edu['keterangan'] }}</p>
                  </div>
              @endforeach
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Professional Experience</h3>
              @foreach($pengalaman as $experience)
                  <div class="resume-item">
                      <h4>{{ $experience['nama_pengalaman'] }}</h4>
                      <h5>{{ $experience['perusahaan'] }}</h5>
                      <p><em>{{ $experience['tahun_mulai'] }} - {{ $experience['tahun_selesai'] }}</em></p>
                      <p>{{ $experience['kerjaan'] }}</p>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
</section>
<!-- End Resume Section -->

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
      <div class="section-title">
          <h2>Portfolio</h2>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          @foreach($project as $item)
              <div class="col-lg-4 col-md-6 portfolio-item">
                  <div class="portfolio-wrap">
                      <img src="{{ asset('storage/galery/project_images/' . $item['image']) }}" class="img-fluid img-cover" style="width: 100%; height: 200px;" alt="{{ $item['judul_project'] }}">
                      <div class="portfolio-links">
                          <a href="{{ asset('storage/galery/project_images/' . $item['image']) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $item['judul_project'] }}"><i class="bx bx-plus"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
</section>




    {{-- <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section --> --}}

    {{-- <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('template/frontend')}}/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('template/frontend')}}/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('template/frontend')}}/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('template/frontend')}}/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('template/frontend')}}/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

   <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

      <div class="section-title">
          <h2>Contact</h2>
      </div>

      <div class="row" data-aos="fade-in">

          <!-- Left Column -->
          <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                  <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Location:</h4>
                      <p>{{$biodata->kota}}</p>
                  </div>

                  <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>{{$biodata->email}}</p>
                  </div>

                  <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p>{{$biodata->no_hp}}</p>
                  </div>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127669.04951183649!2d101.35877311062241!3d0.5139623343795998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab80690ee7b1%3A0x94dde92c3823dbe4!2sPekanbaru%2C%20Kota%20Pekanbaru%2C%20Riau!5e0!3m2!1sid!2sid!4v1709573368275!5m2!1sid!2sid" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
          </div>

          <!-- Right Column -->
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="name">Your Name</label>
                          <input type="text" name="name" class="form-control" id="name" required>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="email">Your Email</label>
                          <input type="email" class="form-control" name="email" id="email" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group">
                      <label for="message">Message</label>
                      <textarea class="form-control" name="message" rows="10" required></textarea>
                  </div>
                  <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
          </div>

      </div>

  </div>
</section>
<!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ALFRZ</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('template/frontend')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('template/frontend')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('template/frontend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template/frontend')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('template/frontend')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('template/frontend')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('template/frontend')}}/vendor/typed.js/typed.umd.js"></script>
  <script src="{{asset('template/frontend')}}/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{asset('template/frontend')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template/frontend')}}/js/main.js"></script>

</body>

</html>