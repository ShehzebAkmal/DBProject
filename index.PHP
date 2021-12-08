<?php

$conn = mysqli_connect("localhost","root","","busmanagementsystem");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bus Managment System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.7.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Bus Management System</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <!--<li><a class="nav-link scrollto" href="#about">About Us</a></li>-->
          <li><a class="nav-link scrollto" href="#schedule">Schedule</a></li>
         <!-- <li><a class="nav-link scrollto" href="#portfolio">Login</a></li> -->
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
       <!--   <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> 
        </ul> -->
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="signin.php" class="book-a-table-btn scrollto d-none d-lg-flex">Login</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Find Your Way</h1>
      <h2>The cheapest and most convenient way to travel around Karachi</h2>
      <a href="#schedule" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <!--
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>Voluptatem dignissimos provident quasi</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>
            </div><!-- End .content-->
      <!--    </div>
        </div>

      </div>
    </section>--> <!-- End About Section -->
    
    <!-- booking Section -->
  <!--  <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Book Your Ride</h2>
          <!--<p>Booking</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->


    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Bus Schedule</h2>
          <p>Here is our bus schedule of this week</p>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Monday/Wednesday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Tuesday/Thursday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Friday/Saturday</a>
        </ul>

        <h3 class="sub-heading">Please first select the day.</h3>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>
              <?php
                    $sql="select time from schedule where bus_id=4";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?>

              </time></div>
              <div class="col-md-10">
                <h4>
                  <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=4 AND S.Day='M/W';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?>
                </h4>
                <p><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=4;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div> 

            <div class="row schedule-item">
              <div class="col-md-2"><time>
              <?php
                    $sql="select time from schedule where bus_id=1";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?>

              </time></div>
              <div class="col-md-10">
                <h4>
                <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=1 AND S.Day='M/W';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?>
                </h4>
                <p><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=1;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=2";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=2 AND S.Day='M/W';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=2;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=3";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=3 AND S.Day='M/W';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=3;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=5";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=5 AND S.Day='M/W';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=5;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=6";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=6 AND S.Day='M/W';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=6;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=7";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=7 AND S.Day='M/W';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=7;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=6";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=6 AND S.Day='T/T';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=6;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=7";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=7 AND S.Day='T/T';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=7;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=4";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=4 AND S.Day='T/T';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=4;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=5";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=5 AND S.Day='T/T';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=5;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=2";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=2 AND S.Day='T/T';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=2;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=1";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4> <?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=1 AND S.Day='T/T';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=1;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=1";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=1 AND S.Day='F/S';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=1;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=2";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=2 AND S.Day='F/S';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=2;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=6";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=6 AND S.Day='F/S';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=6;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=7";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=7 AND S.Day='F/S';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=7;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=4";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=4 AND S.Day='F/S';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=4;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?></p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time><?php
                    $sql="select time from schedule where bus_id=5";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    if($num> 0){
                       $row = mysqli_fetch_assoc($result);
                       echo $row['time'] ;
                  }
                  ?></time></div>
              <div class="col-md-10">
                <h4><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select S.DAY, s.source, s.destination, bt.perSeatCostWindow from schedule s inner join bus b on b.bus_id=s.bus_id inner join bus_type bt on bt.type_id=b.type_id and s.bus_id=5 AND S.Day='F/S';";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['source'] ." to ". $row['destination']. "  ||  Cost ". $row['perSeatCostWindow'];
                      echo "<br>";
                  }
                  ?></h4>
                <p><?php
                    $sql="select b.bus_id, b.bus_name, d.driver_id from driver d inner join bus b on b.driver_id=d.driver_id and b.bus_id=5;";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo "Bus ID= ".$row['bus_id'] ." Bus Name = ". $row['bus_name']. " driver ID=  ". $row['driver_id'];
                      echo "<br>";
                  }
                  ?>.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 3 -->

        </div>

      </div>

    </section><!-- End Schedule Section -->

    <!-- ======= Services Section ======= -->
   <!-- <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Schedule</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section --> 
  
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> <br>Since 2021</br></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Destinations</strong> <br>All over Karachi</br></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="110" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> <br>Since 2021</br></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong><br>From all over Pakistan</br></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
   <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
   <!-- <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Testimonials</h2>
          <p> All of the reviews belows are published by verfied customers.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I had an awesome journey with this website. Looking forward to using it again in future.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Ritik</h3>
                <h4>Student IBA</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The service is just on point. Thumbs up to team behind this website.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Akram</h3>
                <h4>Lecturer at IBA</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Great idea and I love to use it every single day. Lot's of love for the team.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Javeria Bibi</h3>
                <h4>Staff Worker</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  This website has saved a lot of my time and effort. Kudos to awesome team  behind it.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Mohammad Bilal</h3>
                <h4>Accountant at IBA</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I use it frequently to goto my workplace. I love how smooth it works.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Abraham</h3>
                <h4>Gym Instructor at IBA</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Team</h2>
          <p>Meet the team behind the website of the century. The trio has worked day and night to succesfully bring their dreams to reality.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Shehzeb Akmal</h4>
                <span>Chief Happyiness Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="150">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mariam Afzal</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Razi Moosa</h4>
                <span>Intern</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>For any queries please feel free to reach out to us. We're available for our customers 24/7. Happy to help.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Tower Number 1, NHS , Karsaz</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>imrankhan@iba.edu.pk</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+111-244-622</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
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

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Bus Management System</h3>
              <p class="pb-3"><em>The best bus management system in the world.</em></p>
              <p>
                Tower 1, NHS,Karsaz <br>
                KHI 755041, PK<br><br>
                <strong>Phone:</strong> +111-244-622<br>
                <strong>Email:</strong> imrankhan@khi.edu.pk<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Air Condition Buses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Non Air Condition Buses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Wifi Buses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Family Friendly Buses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Student Travel Buses</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to the most awesome newsletter in the world by entering your email in the dialog box below.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>