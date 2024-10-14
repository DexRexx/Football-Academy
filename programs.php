<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Programs | ADVSA</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicons/2.png" rel="icon" />
    <link href="assets/img/favicons/2.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=SUSE:wght@100..800&family=Teko:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>
  <body class="index-page">
    <!-- Header Include File -->
    <?php
      include 'partials/header.php';
    ?>

    <main class="main">
      <!-- Page Title -->
      <div
        class="page-title"
        style="background-image: url(assets/img/schedule/5.jpg)"
      >
        <div class="container position-relative">
          <h1>Our Programs</h1>
          <p>
            Our academy offers a range of programs designed to suit players at
            all levels, from beginners to advanced athletes.
          </p>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Programs</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Get Started Section -->
      <section id="get-started" class="get-started section">
        <div class="container">
          <div class="row justify-content-between gy-4">
            <div class="col-lg-6 d-flex align-items-center">
              <div class="content">
                <h3>Your Journey to Becoming a Better Player</h3>
                <p>
                  Getting started on your football journey begins with building
                  a strong foundation in both physical fitness and technical
                  skills. Whether you're new to the sport or looking to improve,
                  the key is consistent practice, dedication, and a willingness
                  to learn. Joining a football academy can accelerate your
                  growth by providing structured training, expert coaching, and
                  a supportive environment.
                </p>
                <p>
                  Start by focusing on the basics—dribbling, passing, and ball
                  control—and gradually develop your tactical awareness and
                  teamwork. With the right mindset and effort, you'll be well on
                  your way to becoming a better player.
                </p>
              </div>
            </div>

            <div class="col-lg-5">
              <form
                action="forms/quote.php"
                method="post"
                class="php-email-form"
              >
                <h3>Get a quote</h3>
                <p>Leave us a message, we are here to help.</p>
                <div class="row gy-3">
                  <div class="col-12">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Name"
                      required=""
                    />
                  </div>

                  <div class="col-12">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Email"
                      required=""
                    />
                  </div>

                  <div class="col-12">
                    <input
                      type="text"
                      class="form-control"
                      name="phone"
                      placeholder="Phone"
                      required=""
                    />
                  </div>

                  <div class="col-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="6"
                      placeholder="Message"
                      required=""
                    ></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    
                    <div class="sent-message">
                      
                    </div>

                    <button type="submit">Get a quote</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- End Quote Form -->
          </div>
        </div>
      </section>
      <!-- /Get Started Section -->

      <!-- Features Section -->
      <section id="features" class="features section">
        <!-- Section Title -->
        <div class="container section-title">
          <h2>Our Programs</h2>
          <p>We offer various field programs based on your level</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <ul class="nav nav-tabs row g-2 d-flex" role="tablist">
            <li class="nav-item col-3" role="presentation">
              <a
                class="nav-link active show"
                data-bs-toggle="tab"
                data-bs-target="#features-tab-1"
                aria-selected="true"
                role="tab"
              >
                <h4>Health & Fitness</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item col-3" role="presentation">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#features-tab-2"
                aria-selected="false"
                tabindex="-1"
                role="tab"
              >
                <h4>Youth Development Program</h4> </a
              ><!-- End tab nav item -->
            </li>
            <li class="nav-item col-3" role="presentation">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#features-tab-3"
                aria-selected="false"
                tabindex="-1"
                role="tab"
              >
                <h4>Leadership and Teamwork Program</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item col-3" role="presentation">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#features-tab-4"
                aria-selected="false"
                tabindex="-1"
                role="tab"
              >
                <h4>Technical Skills</h4>
              </a>
            </li>
            <!-- End tab nav item -->
          </ul>

          <div class="tab-content">
            <div
              class="tab-pane fade active show"
              id="features-tab-1"
              role="tabpanel"
            >
              <div class="row">
                <div
                  class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                >
                  <h3>Strength and Conditioning Program</h3>
                  <p class="fst-italic">
                    Tailored fitness sessions to improve speed, agility,
                    endurance, and overall physical performance, ensuring
                    players are in peak condition for match play.
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >This program focuses on developing key athletic
                        qualities such as speed, agility, endurance, strength,
                        and power.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Players participate in tailored workouts, including
                        strength training, plyometrics, sprint drills, and
                        endurance exercises.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >This program also emphasizes injury prevention by
                        teaching proper movement mechanics and recovery
                        strategies.</span
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img
                    src="assets/img/programs/1.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
            <!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
              <div class="row">
                <div
                  class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                >
                  <h3>Our Youth Program</h3>
                  <p class="fst-italic">
                    The Youth Development Program is designed to provide young
                    players with a strong foundation in football
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span>
                        It focuses on teaching essential skills such as
                        dribbling, passing, shooting, and ball control in a fun
                        and engaging environment.
                      </span>
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >The program emphasizes individual development while
                        fostering teamwork, discipline, and sportsmanship.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Through age-appropriate drills and small-sided games,
                        young athletes gain confidence, improve their technical
                        abilities, and develop a deeper understanding of the
                        game.
                      </span>
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >The program also encourages creativity and
                        problem-solving on the pitch, helping players build a
                        solid base for future progression in the sport.</span
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img
                    src="assets/img/programs/2.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
            <!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
              <div class="row">
                <div
                  class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                >
                  <h3>Leadership and Teamwork Program</h3>
                  <p class="fst-italic">
                    The Leadership and Teamwork Program is aimed at developing
                    crucial interpersonal skills that are essential for success
                    both on and off the football field.
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >This program focuses on cultivating leadership
                        qualities such as communication, decision-making, and
                        motivation.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Through group exercises, role-playing scenarios, and
                        real-game situations, participants learn how to work
                        together, build trust, and resolve conflicts.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >The program also emphasizes the importance of
                        understanding team dynamics, supporting teammates, and
                        being accountable, teaching players how to be both
                        leaders and reliable team members.</span
                      >
                    </li>
                  </ul>
                  <p class="fst-italic">
                    These skills enhance not only their performance in matches
                    but also their overall character development, preparing them
                    for future leadership roles in football and life.
                  </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img
                    src="assets/img/programs/3.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
            <!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
              <div class="row">
                <div
                  class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                >
                  <h3>Physical abilities a player must master.</h3>
                  <p class="fst-italic">
                    Technical skills in football refer to the specific physical
                    abilities a player must master to effectively control and
                    manipulate the ball during a game.
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Dribbling: The ability to maneuver the ball while
                        moving, keeping close control and navigating through
                        defenders.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Passing: Executing accurate and well-timed passes,
                        whether short or long, to teammates in order to maintain
                        possession and create attacking opportunities.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Shooting: Striking the ball with precision and power to
                        score goals from various positions on the field.</span
                      >
                    </li>
                    <li>
                      <i class="bi bi-check2-all"></i>
                      <span
                        >Ball Control: Mastering first touch, trapping, and
                        receiving the ball to retain possession and set up the
                        next play.</span
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img
                    src="assets/img/programs/4.jpeg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
            <!-- End tab content item -->
          </div>
        </div>
      </section>
      <!-- /Features Section -->
    </main>

    <!-- Footer Include File -->
    <?php
      include 'partials/footer.php';
    ?>