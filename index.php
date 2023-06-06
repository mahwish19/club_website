<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>CodeWizard - NED Coding Club</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="scroll-bg">
    </div>
    <div class="container-xxl bg-white p-0" id="full-wrapper">
      <!-- Spinner Start -->
      <!-- <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div> -->
      <!-- Spinner End -->

      <!-- Header Start -->

      <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
          <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a
              href="/codewizard/"
              class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center"
            >
              <h2 class="m-0 text-primary text-uppercase">CodeWizard</h2>
            </a>
          </div>
          <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
              <a href="/codewizard/" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 text-primary text-uppercase">CodeWizard</h1>
              </a>
              <button
                type="button"
                class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse justify-content-between"
                id="navbarCollapse"
              >
                <div class="navbar-nav mr-auto py-0">
                  <a href="/codewizard/" class="nav-item nav-link active">Home</a>
                  <!-- <a href="about.html" class="nav-item nav-link">About</a> -->

                  <div class="nav-item dropdown">
                    <a
                      href="about.php"
                      class="nav-link dropdown-toggle"
                      data-bs-toggle="dropdown"
                      >About</a
                    >
                    <div class="dropdown-menu rounded-0 m-0">
                      <a href="about.php" class="dropdown-item">About Us</a>
                      <a href="room.php" class="dropdown-item">Events</a>
                      <a href="Team.php" class="dropdown-item">Gallery</a>
                    </div>
                  </div>

                  <a href="service.php" class="nav-item nav-link">Blogs</a>
                  <a href="sponsors.php" class="nav-item nav-link">Sponsors</a>

                  <!-- <a href="booking.html" class="nav-item nav-link">Registration</a> -->
                  <div class="nav-item dropdown">
                    <a
                      href=" "
                      class="nav-link dropdown-toggle"
                      data-bs-toggle="dropdown"
                      >Registration</a
                    >
                    <div class="dropdown-menu rounded-0 m-0">
                      <a href="membership.php" class="dropdown-item"
                        >Club Membership</a
                      >
                      <a href="booking.php" class="dropdown-item"
                        >Competition Registration</a
                      >
                    </div>
                  </div>

                  <a href="contact.php" class="nav-item nav-link">Contact</a>
                  <a href="leaderboard.php" class="nav-item nav-link"
                    >Leaderboard</a
                  >
                  <a href="testimonial.php" class="nav-item nav-link"
                    >Testimonial</a
                  >
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <!-- Header End -->

      <!-- Carousel Start -->
      <div class="container-fluid p-0 mb-5">
        <div
          id="header-carousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                class="w-100"
                src="img/programming-background-with-person-working-with-codes-computer.jpg"
                alt="Image"
              />
              <div
                class="carousel-caption d-flex flex-column align-items-center justify-content-center"
              >
                <div class="p-3" style="max-width: 700px">
                  <div class="capt-logo">
                    <img class="" src="img/capt_logo.png" alt="Image">
                  </div>
                  <h1
                    class="section-title text-white text-uppercase mb-3 animated slideInDown"
                  >
                    CodeWizard
                  </h1>
                  <h5
                    class="section-title text-white mb-3 animated slideInDown"
                  >
                    CodeWizard, the Coding Club of NED University, focuses on
                    enriching students' interest in programming.
                  </h5>
                  <a
                    href="membership.php"
                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                    >Join Us</a
                  >
                  <a
                    href="contact.php"
                    class="btn btn-light py-md-3 px-md-5 animated slideInRight"
                    >Contact Us</a
                  >
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img
                class="w-100"
                src="img/shahadat-rahman-BfrQnKBulYQ-unsplash.jpg"
                alt="Image"
              />
              <div
                class="carousel-caption d-flex flex-column align-items-center justify-content-center"
              >
                <div class="p-3" style="max-width: 700px">
                  <div class="capt-logo">
                    <img class="" src="img/capt_logo.png" alt="Image">
                  </div>
                  <h1
                    class="section-title text-white text-uppercase mb-3 animated slideInDown"
                  >
                    <b>CodeWizard</b>
                  </h1>
                  <h5
                    class="section-title text-white mb-3 animated slideInDown"
                  >
                    CodeWizard, the Coding Club of NED University, focuses on
                    enriching students' interest in programming.
                  </h5>
                  <a
                    href="membership.php"
                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                    >Join Us</a
                  >
                  <a
                    href="contact.php"
                    class="btn btn-light py-md-3 px-md-5 animated slideInRight"
                    >Contact us</a
                  >
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Carousel End -->

      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6">
              <h3 class="section-title text-start text-primary text-uppercase">
                About Us
              </h3>
              <h1 class="mb-4">
                Welcome to
                <span class="text-primary text-uppercase">Codewizard</span>
              </h1>
              <p class="mb-4">
                <b>CodeWizard</b> is the first and largest body of computer
                professionals in NED. It was started on 6th March, 2023, by a
                few computer professionals and has now grown to be the national
                body representing computer professionals. <br /><br />
                The <b>CodeWizard</b> is a non-profit professional meet to
                exchange views and information, learn and share ideas. The wide
                spectrum of members is committed to the advancement of theory
                and practice of Computer Engineering and Technology Systems,
                Science and Engineering, Information Processing and related Arts
                and Sciences
              </p>

              <a class="btn btn-primary py-3 px-5 mt-2" href="about.php" target="_blank">Read More</a>
            </div>
            <div class="col-lg-6">
              <div class="row g-3">
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.1s"
                    src="img/MelRibeiro - Overview.gif"
                    style="margin-top: 25%"
                  />
                </div>
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.3s"
                    src="img/download.jfif"
                  />
                </div>
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-50 wow zoomIn"
                    data-wow-delay="0.5s"
                    src="img/programming-background-collage.jpg"
                  />
                </div>
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.7s"
                    src="img/Premium Vector _ Software development, programming language, coding.jfif"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- event Start -->
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title text-center text-primary text-uppercase">
          Ongoing Events
        </h6>
        <h1 class="mb-5">
          Explore Our
          <span class="text-primary text-uppercase">Ongoing Events</span>
        </h1>
      </div>
      <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
        <div class="row g-0">
          <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5">
              <h1 class="text-white mb-4">Mobile Development: Zero To Hero!</h1>
              <h6
                class="section-title text-start text-white text-uppercase mb-3"
              >
                NED University of Engineering and Technology.
                <br />
                Sun, May 30, 2023, 8:00 PM (PKT)
              </h6>
              <p class="text-white mb-4">
                <i
                  >Let's build a TodoApp in React Native and Showcase our very
                  first build.</i
                >
              </p>
              <a href="room.php" target="_blank" class="btn btn-primary py-md-3 px-md-5 me-3"
                >Read More</a
              >
              <!-- <a href="" class="btn btn-light py-md-3 px-md-5">Book A Room</a> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="video">
              <!-- <button
                type="button"
                class="btn-play"
                data-bs-toggle="modal"
                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                data-bs-target="#videoModal"
              >
                <span></span>
              </button> -->
            </div>
          </div>
        </div>
      </div>

      <div
        class="modal fade"
        id="videoModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content rounded-0">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Event Video</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <!-- 16:9 aspect ratio -->
              <div class="ratio ratio-16x9">
                <iframe
                  class="embed-responsive-item"
                  src=""
                  id="video"
                  allowfullscreen
                  allowscriptaccess="always"
                  allow="autoplay"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- event End -->

      <!-- Sponsors Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">
              Sponsors
            </h6>
            <h1 class="mb-5">
              Meet Our <span class="text-primary text-uppercase">Sponsors</span>
            </h1>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.6s">
              <div class="room-item shadow rounded overflow-hidden">
                <div class="position-relative">
                  <img
                    class="img-fluid"
                    src="img/Untitled design (2).jpg"
                    alt="" style=" max-height: 500px; width: 100%; object-fit: cover; "
                  />
                </div>
                <div class="p-4 mt-2">
                  <div class="d-flex justify-content-between mb-3">
                    <h5 class="mb-0">OctDaily</h5>
                    <div class="ps-2">
                      <small class="fa fa-star text-primary"></small>
                      <small class="fa fa-star text-primary"></small>
                      <small class="fa fa-star text-primary"></small>
                      <small class="fa fa-star text-primary"></small>
                      <small class="fa fa-star text-primary"></small>
                    </div>
                  </div>
                  <p class="text-body mb-3">
                    OctDaily is a leading IT firm that provides 3PL & Warehouse
                    Management Solutions, CRM Consulting, Implementation, and
                    Maintenance.At the heart of our company we're techies first with a collective experience of 30 plus years in various technology stacks. Our team of engineers and business analysts identify the critical areas in your business operations and recommend technological solutions.
                  </p>
                  <div class="d-flex justify-content-between">
                    <a
                      class="btn btn-sm btn-primary rounded py-2 px-4"
                      href="https://octdaily.com/"
                      target="_blank"
                      >View Detail</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <!-- Sponsors End -->

      <!-- Team Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">
              Team
            </h6>
            <h1 class="mb-5">
              Explore Our <span class="text-primary text-uppercase">Team</span>
            </h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="rounded shadow overflow-hidden">
                <div class="position-relative">
                  <img class="img-fluid" src="img/team-1.jpg" alt="" />
                </div>
                <div class="text-center p-4 mt-3">
                  <h5 class="fw-bold mb-0">David Willey</h5>
                  <small>President</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="rounded shadow overflow-hidden">
                <div class="position-relative">
                  <img class="img-fluid" src="img/team-2.jpg" alt="" />
                </div>
                <div class="text-center p-4 mt-3">
                  <h5 class="fw-bold mb-0">Tom Banton</h5>
                  <small>Vice President</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="rounded shadow overflow-hidden">
                <div class="position-relative">
                  <img class="img-fluid" src="img/team-3.jpg" alt="" />
                </div>
                <div class="text-center p-4 mt-3">
                  <h5 class="fw-bold mb-0">Daniel Gabriel</h5>
                  <small>General Secretary</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="rounded shadow overflow-hidden">
                <div class="position-relative">
                  <img class="img-fluid" src="img/team-4.jpg" alt="" />
                </div>
                <div class="text-center p-4 mt-3">
                  <h5 class="fw-bold mb-0">John Wick</h5>
                  <small>Media Head</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between" style="position: relative; float: right;margin-right: 23px;">
        <a
          class="btn btn-sm btn-primary rounded py-2 px-4"
          href="about.php"
          target="_blank"
          >View Detail</a
        >
      </div>
      <!-- Team End -->

      <!-- Blogs Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">
              Blogs
            </h6>
            <h1 class="mb-5">
              Explore Our <span class="text-primary text-uppercase">Blogs</span>
            </h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <a
                class="service-item rounded"
                href="https://blackboxofpm.com/product-management-mental-models-for-everyone-31e7828cb50b"
                target="_blank"
              >
                <h5 class="mb-3">
                  Product Management Mental Models for Everyone
                </h5>
                <p class="text-body mb-0">
                  Mental models are simple expressions of complex processes or
                  relationships. These models are accumulated over time by an
                  individual and used to make faster and better decisions.<br /><br />
                  Read More>>
                </p>
              </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <a
                class="service-item rounded"
                href="https://blackboxofpm.com/product-management-mental-models-for-everyone-31e7828cb50b"
                target="_blank"
              >
                <h5 class="mb-3">
                  8+ Free Resources & Tools for Web Developers and Designers
                </h5>
                <p class="text-body mb-0">
                  Web development and design can be a challenging task, but with
                  the right resources, the process can become much more
                  efficient and enjoyable. In this article we'll highlight eight
                  Free resources that can help web developers<br /><br />
                  Read More>>
                </p>
              </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <a
                class="service-item rounded"
                href="https://dev.to/fredy/8-free-resources-tools-for-web-developers-and-designers-1k3p"
                target="_blank"
              >
                <h5 class="mb-3">
                  OpenCommit: GPT generates impressive commits in 1 second 🤯🔫
                </h5>
                <p class="text-body mb-0">
                  Web development and design can be a challenging task, but with
                  the right resources, the process can become much more
                  efficient and enjoyable. In this article we'll highlight eight
                  Free resources that can help<br /><br />
                  Read More>>
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between" style="position: relative; float: right;margin-right: 23px;">
        <a
          class="btn btn-sm btn-primary rounded py-2 px-4"
          href="service.php"
          target="_blank"
          >View Detail</a
        >
      </div>
      <!-- Blogs End -->
      <br>
      <?php include 'footer.php';?>
  </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>