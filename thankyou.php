<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>CodeWizard - Thankyou</title>
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
              href="index.php"
              class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center"
            >
              <h2 class="m-0 text-primary text-uppercase">CodeWizard</h2>
            </a>
          </div>
          <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
              <a href="index.php" class="navbar-brand d-block d-lg-none">
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
                  <a href="index.html" class="nav-item nav-link active">Home</a>
                  <!-- <a href="about.html" class="nav-item nav-link">About</a> -->

                  <div class="nav-item dropdown">
                    <a
                      href="about.html"
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

    <!-- Sponsors Start -->

    <div class="container-xxl py-5 px-md-5 wow zoomIn" data-wow-delay="0.1s">
      <div class="col-lg-10 align-items-center">
        <div class="video1">
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-body">
      <!-- 16:9 aspect ratio -->
      <div class="ratio ratio-16x9">
        <iframe class="embed-responsive-item" src="" id="video1" allowfullscreen allowscriptaccess="always"
          allow="autoplay"></iframe>
      </div>
    </div>
  </div>
  <!-- Sponsors End -->

  <!-- Newsletter Start -->
  <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row justify-content-center">
      <div class="col-lg-10 border rounded p-1">
        <div class="border rounded text-center p-1">
          <div class="bg-white rounded text-center p-5">
            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span>
            </h4>
            <div class="position-relative mx-auto" style="max-width: 400px;">
              <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
              <button type="button"
                class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Newsletter End -->

  <?php include 'footer.php';?>

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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