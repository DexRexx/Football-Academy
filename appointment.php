<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Appointment | ADVSA</title>
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
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
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
        style="background-image: url(assets/img/app-back.jpg)"
      >
        <div class="container position-relative">
          <h1>Schedule an Appointment with Us</h1>
          <p>
            We’re here to help! Whether you’re looking to discuss a specific
            service, need expert advice, or simply wish to explore your options,
            booking an appointment is the first step.
          </p>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Contact Us</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- ============ Appointment Section ============= -->
      <section id="appointment" class="appointment section-bg">
        <div class="container">
          <div class="section-title">
            <h2>Make an Appointment</h2>
            <p>
              Our team is ready to provide personalized support at a time that
              suits you. Please use the form below to select your preferred date
              and time, and we’ll confirm your appointment as soon as possible.
            </p>
          </div>

          <form
            action="forms/appointments.php"
            method="post"
            role="form"
            class="php-email-form"
          >
            <div class="row">
              <div class="col-md-4 form-group">
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="name"
                  placeholder="Your Name"
                  required
                />
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                  required
                />
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input
                  type="tel"
                  class="form-control"
                  name="phone"
                  id="phone"
                  placeholder="Your Phone"
                  required
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group mt-3">
                <input
                  type="datetime"
                  name="date"
                  class="form-control datepicker"
                  id="date"
                  placeholder="Appointment Date"
                  required
                />
              </div>
              <div class="col-md-4 form-group mt-3">
                <select name="level" id="department" class="form-select">
                  <option value="">Select Level</option>
                  <option value="Department 1">Primary Level</option>
                  <option value="Department 2">Secondary Level</option>
                  <option value="Department 3">Elite Level</option>
                </select>
              </div>
              <div class="col-md-4 form-group mt-3">
                <select name="program" id="doctor" class="form-select">
                  <option value="">Select Program</option>
                  <option value="program 1">Health & Fitness</option>
                  <option value="program 2">Youth Development</option>
                  <option value="program 3">Leadership and Teamwork</option>
                  <option value="program 4">Technical Skills</option>
                </select>
              </div>
            </div>

            <div class="form-group mt-3">
              <textarea
                class="form-control"
                name="message"
                rows="5"
                placeholder="Message (Optional)"
              ></textarea>
            </div>
            <div class="my-3">
              <!-- <div class="loading">Loading</div>
              <div class="error-message"></div> -->
              <div class="sent-message">
                Your appointment request has been sent successfully. Thank you!
              </div>
            </div>
            <div class="text-center">
              <button type="submit">Make an Appointment</button>
            </div>
          </form>
        </div>
      </section>

      <!-- /Appointment Section -->
    </main>

    <!-- footer Include File -->
    <?php
      include 'partials/footer.php';
    ?>