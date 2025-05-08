  <?php 
    include 'navbar.php';
  ?>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="container mt-5">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="Style/Resources/1.jpg" class="d-block w-100" alt="1">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="Style/Resources/2.jpg" class="d-block w-100" alt="2">
      </div>
      <div class="carousel-item">
        <img src="Style/Resources/3.jpg" class="d-block w-100" alt="3">
      </div>
      <div class="carousel-item">
        <img src="Style/Resources/4.jpg" class="d-block w-100" alt="4">
      </div>
    </div>
  </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="quick_service container">
    <h3>Quick service:- </h3>
    <button class="service_btn"><a href="book.php" style="text-decoration: none;color: black;">Junk man</a></button>
    <button class="service_btn"><a href="sell.php" style="text-decoration: none;color: black;">Junk sell</a></button>

  </div>
  <h1 class="container">Who we are</h1>
  <p class="pera">The bye bye junk is a doorstep service intends to help out people to sell their household scrap like Newspaper, iron, plastic books, copies, metal etc. and get paid for it. It is intended to recycle, reuse, reduce up-cycle and resell the scrap.It is a platform for the residents to participate in responsible waste management and is best in class technology, logistics to process the scrap.</p>
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <h5 class="heading-5">Our Vision</h5>
        <p>Our Vision is to clean india and educate junk recyclers about online binsness So, they can also contribute in smart india.</p>
      </div>
      <div class="col">
        <h5 class="heading-5">Our Mission</h5>
        <p>Our mission is to raise the small junk selling men , give them an experience of Digital India </p>
      </div>
      <div class="col">
        <h5 class="heading-5">Our Message</h5>
        <p>Our message is to the society to appreciate the small business. educate everyone about online business.</p>
      </div>
    </div>
  </div>
<h1 class="container mt-5">FAQ</h1>
<?php include 'footer.php'?>