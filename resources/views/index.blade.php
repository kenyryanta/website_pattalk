<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PetTalk</title>
    <link rel="icon" href="{{'images/logo.jpg'}}" />
    <!-- ./assets/images/logo.jpg -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{'css/style.css'}}" />
    <!-- ./assets/css/style.css -->
  </head>
  @include('sweetalert::alert')

  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-lg">
      <div class="container">
        <a data-aos="fade-right" class="navbar-brand" href="#">
          <span><strong>Pet</strong></span
          >Talk
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          data-aos="fade-left"
          class="collapse navbar-collapse"
          id="navbarNav"
        >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#hero">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
          </ul>
          <a href="{{ route('signin') }}" class="btn btn-brand ms-lg-3">Sign in</a>
          <!-- SignIN.html -->
        </div>
      </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1
              data-aos="fade-left"
              class="text-uppercase text-white fw-semibold display-1"
            >
              Welcome to <span>PET</span>TALK
            </h1>
            <h5 class="text-white mt-3 mb-4 text" data-aos="fade-right">
              Caring for Your Pet is Easier than Ever and Get Professional
              Advice for Your Pet at Pettalk
            </h5>
            <div data-aos="fade-up" data-aos-delay="50">
              <a href="{{ route('signin') }}" class="btn btn-brand me-2">Sign in</a>
              <!-- SignIN.html -->
              <a href="{{ route('signup') }}" class="btn btn-light ms-2">sign Up</a>
              <!-- SignUp.html -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="50"
          ></div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
            <img
              style="
                max-width: 550px;
                max-height: 550px;
                min-width: 550px;
                min-height: 550px;
              " src="{{'images/about2.jpg'}}"s
              alt=""
            />
          </div>
          <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
            <h1>About <span>PetTalk</span></h1>
            <p class="mt-3 mb-4">
            PetTalk adalah platform web untuk pemilik hewan peliharaan yang menyediakan berbagai layanan,
            informasi, dan fitur interaktif untuk perawatan anjing dan kucing.
            </p>
            <div class="d-flex pt-4 mb-3">
              <div class="iconbox me-4">
                <i class="ri-mail-send-fill"></i>
              </div>
              <div>
                <h5>Konsultasi</h5>
                <p>
                Konsultasi kesehatan online dengan dokter hewan.
                </p>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="iconbox me-4">
                <i class="ri-user-5-fill"></i>
              </div>
              <div>
                <h5>Adopsi</h5>
                <p>
                  Informasi hewan yang tersedia untuk diadopsi dari shelter atau pengguna lain.
                </p>
              </div>
            </div>
            <div class="d-flex">
              <div class="iconbox me-4">
                <i class="ri-rocket-2-fill"></i>
              </div>
              <div>
                <h5>Forum Chat</h5>
                <p>
                  Wadah diskusi bagi pengguna untuk berbagi informasi dan pengalaman.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">
                Awesome <span>Services</span>
              </h1>

              <p>
                We love to craft digital experiances for brands rather than crap
                and more lorem ipsums and do crazy skills
              </p>
            </div>
          </div>
        </div>
        <div class="row g-4 text-center">
          <div
            class="col-lg-4 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="service shadow-lg p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-hospital-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Pet healty</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                fugiat sunt distinctio?
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="250"
          >
            <div class="service shadow-lg p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-timer-flash-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Time Efficiency</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                fugiat sunt distinctio?
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="350"
          >
            <div class="service shadow-lg p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-chat-3-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Chat Real Time</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                fugiat sunt distinctio?
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="450"
          >
            <div class="service shadow-lg p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-heart-add-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Pet Adoption</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                fugiat sunt distinctio?
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="550"
          >
            <div class="service shadow-lg p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-discuss-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Forum Discuss</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                fugiat sunt distinctio?
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6"
            data-aos="fade-down"
            data-aos-delay="650"
          >
            <div class="service shadow-lg p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-information-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Information</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                fugiat sunt distinctio?
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TEAM -->
    <section id="team" class="section-padding border-top">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Team <span>Members</span></h1>

              <p>
                We love to craft digital experiances for brands rather than crap
                and more lorem ipsums and do crazy skills
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-lg-4 col-md-8">
            <div class="team-member">
              <div class="image">
                <img src="{{'images/team3.jpg'}}" alt="" />
                <!-- assets/images/team3.jpg -->
              </div>

              <h5>M.Kenny Ryanta</h5>
              <p>Software Developer</p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook icon-box2"></i></a>
                <a href="#"><i class="bx bxl-twitter icon-box2"></i></a>
                <a href="#"><i class="bx bxl-instagram icon-box2"></i></a>
                <a href="#"><i class="bx bxl-linkedin icon-box2"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8">
            <div class="team-member">
              <div class="image">
                <img src="{{'images/team1.jpg'}}" alt="" />
                <!-- assets/images/team1.jpg -->
              </div>

              <h5>Andika Rizky Putrahutama</h5>
              <p>Software Developer</p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook icon-box2"></i></a>
                <a href="#"><i class="bx bxl-twitter icon-box2"></i></a>
                <a href="#"><i class="bx bxl-instagram icon-box2"></i></a>
                <a href="#"><i class="bx bxl-linkedin icon-box2"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8">
            <div class="team-member">
              <div class="image">
                <img src=" {{'images/team2.jpg'}} " alt="" />
                <!-- assets/images/team2.jpg -->
              </div>
              <h5>Patrick Adrian Nelwan</h5>
              <p>Software Developer</p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook icon-box2"></i></a>
                <a href="#"><i class="bx bxl-twitter icon-box2"></i></a>
                <a href="#"><i class="bx bxl-instagram icon-box2"></i></a>
                <a href="#"><i class="bx bxl-linkedin icon-box2"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8">
            <div class="team-member">
              <div class="image">
                <img src=" {{'images/team2.jpg'}} " alt="" />
                <!-- assets/images/team2.jpg -->
              </div>
              <h5>Christoper Parulian Marpaung</h5>
              <p>Software Developer</p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook icon-box2"></i></a>
                <a href="#"><i class="bx bxl-twitter icon-box2"></i></a>
                <a href="#"><i class="bx bxl-instagram icon-box2"></i></a>
                <a href="#"><i class="bx bxl-linkedin icon-box2"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8">
            <div class="team-member">
              <div class="image">
                <img src=" {{'images/team2.jpg'}} " alt="" />
                <!-- assets/images/team2.jpg -->
              </div>
              <h5>Owen Kartolo</h5>
              <p>Software Developer</p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook icon-box2"></i></a>
                <a href="#"><i class="bx bxl-twitter icon-box2"></i></a>
                <a href="#"><i class="bx bxl-instagram icon-box2"></i></a>
                <a href="#"><i class="bx bxl-linkedin icon-box2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section-padding border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            {{-- <form class="p-lg-5 row g-3 bg-white text-dark opacity-75">
                <div class="text-center">
                  <h1><span>Contact Us</span></h1>
                  <p>
                    Fell free to contact us and we will get back to you as soon as
                    possible
                  </p>
                </div>
                <div class="col-lg-6">
                  <label for="userName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="userName" />
                </div>
                <div class="col-lg-6">
                  <label for="userName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="userName" />
                </div>
                <div class="col-12">
                  <label for="userName" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="userName" />
                </div>
                <div class="col-12">
                  <label for="exampleInputEmail1" class="form-label"
                    >Enter Message</label
                  >
                  <textarea
                    name=""
                    class="form-control"
                    id=""
                    rows="4"
                  ></textarea>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-brand">
                    Send Message
                  </button>
                </div>
            </form> --}}
            <form action="{{ route('indext-create-contact') }}" class="p-lg-5 row g-3 bg-white text-dark opacity-75" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="text-center">
                <h1><span>Contact Us</span></h1>
                <p>
                  Fell free to contact us and we will get back to you as soon as
                  possible
                </p>
              </div>
              <div class="col-lg-6">
                <label for="first_name" class="form-label">First name</label>
                <input type="string" class="form-control" id="first_name" name="first_name" required/>
              </div>
              <div class="col-lg-6">
                <label for="last_name" class="form-label">Last name</label>
                <input type="string" class="form-control" id="last_name" name="last_name" required/>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required/>
              </div>
              <div class="col-12">
                <label for="message" class="form-label"
                  >Enter Message</label
                >
                <textarea
                  name="message"
                  class="form-control"
                  id="message"
                  rows="4"
                  required
                ></textarea>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-brand">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="blog" class="section-padding border-top">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center"
            data-aos="fade-down"
            data-aos-delay="150"
          >
            <div class="section-title">
              <h1 class="display-4 fw-semibold">
                Blog Posts<span>& Articles</span>
              </h1>

              <p>
                We love to craft digital experiances for brands rather than crap
                and more lorem ipsums and do crazy skills
              </p>
            </div>
          </div>
        </div>
        {{-- <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-0 shadow-sm h-100">
                <img
                  style="max-height: 300px; min-height: 300px"
                  class="card-img-top"
                  alt="..."
                  src="{{'images/gambar1.jpg'}}"
                />
                <div class="card-body shadow-lg mx-1">
                  <h5 class="card-title fw-bold">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-brand">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-0 shadow-sm h-100">
                <img
                  style="max-height: 300px; min-height: 300px"
                  class="card-img-top"
                  alt="..."
                  src="{{'images/gambar2.jpg'}}"
                />
                <div class="card-body shadow-lg mx-1">
                  <h5 class="card-title fw-bold">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-brand">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-0 shadow-sm h-100">
                <img
                  style="max-height: 300px; min-height: 300px"
                  class="card-img-top"
                  alt="..."
                  src="{{'images/gambar4.jpg'}}"
                />
                <div class="card-body shadow-lg mx-1">
                  <h5 class="card-title fw-bold">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                  </p>
                  <a href="#" class="btn btn-brand">Go somewhere</a>
                </div>
              </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row justify-content-center mt-3">
                @foreach ($blogs->take(3) as $blog)
                    <div class="col-md-4 mb-4 d-flex justify-content-center">
                        <div class="card border-dark shadow-lg h-100" style="width: 18rem; border-width: 1.5px; border-color: #720455; background-color: #f8f9fa;">
                            <img src="{{ asset('storage/image_blog/' . $blog->images) }}" class="card-img-top" alt="{{ $blog->title }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title small">{{ $blog->title }}</h5>
                                <p class="card-text small" style="text-align: justify;">{{ Str::words($blog->description, 20) }}</p>
                                <div class="mt-auto">
                                    <a href="{{ url('/blog-guest/' . $blog->id) }}" class="btn btn-primary" style="background-color: #720455;">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>
      <div class="footer-top text-center text-white">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h3 class="navbar-brand">Pet<span>Talk</span></h3>
              <p>
                Contrary to popular belief, Lorem Ipsum is not simply random
                text. It has roots in a piece of classical Latin literature from
              </p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook icon-box3"></i></a>
                <a href="#"><i class="bx bxl-twitter icon-box3"></i></a>
                <a href="#"><i class="bx bxl-instagram icon-box3"></i></a>
                <a href="#"><i class="bx bxl-linkedin icon-box3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom text-center text-white">
        <p class="mb-0">Copyright@2024. All rights Reserved</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{'js/main.js'}}"></script>
    <!-- ./assets/js/main.js -->
  </body>
</html>
