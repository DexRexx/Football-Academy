<?php
session_start();
require 'config/database.php';

?>

<!-- Start of Header -->
<header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <img src="assets/img/logo.png" alt="" />
          <!-- Uncomment the line below if you also wish to use an text logo -->
          <h1 class="sitename">ADVSA</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="index.php">Home<br /></a>
            </li>
            <li><a href="icons.php">Icons</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="programs.php">Programs</a></li>
            <li><a href="team.php">Team</a></li>           
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="appointment.php"
          >Book an Appointment</a
        >
      </div>
    </header>