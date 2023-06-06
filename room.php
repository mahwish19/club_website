<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>CodeWizard - Events</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

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

    <link rel="stylesheet"type="text/css"href="calender/evo-calendar/css/evo-calendar.min.css"/>
    <link rel="stylesheet" type="text/css" href="calender/evo-calendar/css/evo-calendar.midnight-blue.min.css" />
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
                  <a href="/codewizard/" class="nav-item nav-link">Home</a>
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
                      <a href="room.php" class="dropdown-item active">Events</a>
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0"
      style="background-image: url(img/programming-background-with-person-working-with-codes-computer.jpg);">
      <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Events</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
              
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="section-title text-center text-primary text-uppercase">
        Ongoing Events
      </h1>
    </div>
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
      <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-center">
          <div class="p-5">
            <h1 class="text-white mb-4">Mobile Development: Zero To Hero!</h1>
            <h6 class="section-title text-start text-white text-uppercase mb-3">
              NED University of Engineering and Technology.
              <br />
              Sun, May 30, 2023, 8:00 PM (PKT)
            </h6>
            <p class="text-white mb-4">
              <i>Let's build a TodoApp in React Native and Showcase our very
                first build.</i>
            </p>
            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Read More</a> -->
            <!-- <a href="" class="btn btn-light py-md-3 px-md-5">Book A Room</a> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="video">
            <!-- <button type="button" class="btn-play" data-bs-toggle="modal"
              data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
              <span></span>
            </button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Event Video</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- 16:9 aspect ratio -->
            <div class="ratio ratio-16x9">
              <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                allow="autoplay"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- calender starts -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
      <h1 class="section-title text-center text-primary text-uppercase">
        Upcoming Events
      </h1>
    </div>
    <br>
    <div class="console-log">
      <div class="log-content">
        <div class="--noshadow midnight-blue" id="demoEvoCalendar"></div>
      </div>
    </div>
    <br> <br>
    <!-- calender ends -->

    <!-- Events start -->
    <!-- <hr class="featurette-divider" /> -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.5s">
      <h1 class="section-title text-center text-primary text-uppercase">
        Previous Events
      </h1>
    </div>
    <br> <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Workshop on Big Data Analytics</h2>
        <br />
        <p class="lead">
          On 20th November 2018, the CSI GITAM Student Branch, in association
          with the Department of Computer Science Engineering, had organised a
          workshop on Big Data Analytics. The resource person and the Chief
          Guest for the event was Prof. Ravi Vatrapu, Centre of Business Data
          Analytics, Copenhagen Business School, Denmark. The workshop began
          as an interactive session with Prof. Ravi Vatrapu laying out the
          foundation of Social Set Analysis with examples of where an
          organisation can leverage its benefits. He introduced several
          fundamentals to serve as a base to the workshop and involved
          students with his questions.
        </p>
        <p><b>Participation</b> 150+ students</p>
        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">View Details >>
        </a>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
          height="400" src="img/2018_1.jpg" alt="remote">
      </div>
    </div>

    <hr class="featurette-divider" />
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Two-Day Workshop on Cyber Security</h2>
        <br />
        <p class="lead">
          From 31st August to 1st September 2018, the CSI GITAM Student
          Branch, in association with the Department of Computer Science
          Engineering, had organized a two-day workshop on Cyber Security
          which was made to inculcate the students with a basic understanding
          of the world of ethical hacking and cyber security. The speaker for
          the workshop was Mr. Vinod T. Senthil, Founder, Managing Director &
          Chief Technical Officer, infySEC, Chennai. The session was a mix of
          theory and hands-on where the participants tried hacking their way
          through a "Capture The Flag" challenge hosted by infySEC.
        </p>
        <p><b>Participation</b> 100+ students</p>
        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">View Details >>
        </a>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
          height="400" src="img/006.png" alt="remote">
      </div>
    </div>

    <hr class="featurette-divider" />
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">
          Career Options after Engineering Education.
        </h2>
        <br />
        <p class="lead">
          On 17th July 2018, a seminar on "Career Options after Engineering
          Education" was organized by the CSI, GITAM Student Branch, in
          association with the Department of CSE. The guest speakers for the
          event were Mr Alosies George, Founder and Director, George Prep, and
          Shri Ram Mohan Adibhatla, Head - Verbal Ability, George Prep. The
          Principal, Head of Department, CSE, and the Training & Placements
          Officer (TPO) addressed the gathering and offered their exprience
          and advice regarding the ever-changing demands of placements.
        </p>
        <p><b>Participation</b> 150+ students</p>
        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">View Details >>
        </a>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
          height="400" src="img/005.png" alt="remote">
      </div>
    </div>

    <hr class="featurette-divider" />
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Cloud Computing and NLP.</h2>
        <br />
        <p class="lead">
          The CSI GITAM Student Branch in association with the department of
          Computer Science Engineering organized a seminar on Cloud Computing
          and Natural Language Processing on 9th March 2018. The main speaker
          for the event was Vijay Ponduru, Lead Application Developer, Nuveen
          Technologies, San Francisco. He gave an insight on the working of
          the cloud computing systems and the basics of natural language
          processing while explaining its relevance in the industry and its
          scope in the future.
        </p>
        <p><b>Participation</b> 150+ students</p>
        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">View Details >>
        </a>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
          height="400" src="img/008.png" alt="remote">
      </div>
    </div>

    <hr class="featurette-divider" />
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Ethereal 2K18, Annual Fest</h2>
        <br />
        <p class="lead">
          The CSI GITAM Student Branch in association with the Department of
          Computer Science Engineering had organized the Annual fest named
          "Ethereal 2k18" on 5th and 6th March 2018. The fest was inaugurated
          by Professor Siba K Udgata. The two-day fest featured a vast variety
          of technical and non-technical events to promote the talent among
          students. A workshop on Smart Automation was also be conducted over
          the two days dealing with technologies based on Internet-of-Things
          (IoT) and Computational Intelligence.
        </p>
        <p><b>Participation</b> 150+ students</p>
        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">View Details >>
        </a>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
          height="400" src="img/2017_1.png" alt="remote">
      </div>

      <hr class="featurette-divider" />
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Cloud Computing and NLP.</h2>
          <br />
          <p class="lead">
            On 17th July 2018, a seminar on "Career Options after Engineering
            Education" was organized by the CSI, GITAM Student Branch, in
            association with the Department of CSE. The guest speakers for the
            event were Mr Alosies George, Founder and Director, George Prep, and
            Shri Ram Mohan Adibhatla, Head - Verbal Ability, George Prep. The
            Principal, Head of Department, CSE, and the Training & Placements
            Officer (TPO) addressed the gathering and offered their exprience
            and advice regarding the ever-changing demands of placements.
          </p>
        </div>

        <div class="col-md-5 order-md-1">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
            height="400" src="img/2018_6.JPG" alt="remote">
        </div>
      </div>
      <!-- events end -->
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="calender/evo-calendar/js/evo-calendar.min.js"></script>
    <script src="calender/demo/demo.js"></script>
</body>
</html>