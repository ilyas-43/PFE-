
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ROYAL EMIRALD - ABOUT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css" />
  <?php require('inc/links.php'); ?>
  <style>
    .box{
      border-top-color: var(--teal) !important;
    }
  </style>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>  

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Welcome to our hotel, where comfort meets hospitality. We are dedicated to providing a memorable experience with modern amenities, <br> attentive service, and a warm atmosphere. Whether you’re here for business or leisure, our goal is to make your stay enjoyable and relaxing.
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">About us</h3>
        <p>
          Welcome to our hotel, where comfort and quality service come together to create an unforgettable stay.
          Located in the heart of the city, we offer modern rooms, excellent amenities,
          and a friendly staff dedicated to making your visit as pleasant as possible.
          Whether you’re traveling for business or leisure, our hotel is the perfect choice for relaxation and convenience.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="images/about/about.jpg" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">200+ STAFFS</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

  <div class="comtainer px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/1.jpg" class="w-100">
          <h5 class="mt-2">Sophia Nguyen</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/2.jpg" class="w-100">
          <h5 class="mt-2">Emma Clark</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/3.avif" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/3.avif" class="w-100">
          <h5 class="mt-2">Daniel Foster</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/2.jpg" class="w-100">
          <h5 class="mt-2">Ethan Bennett</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/1.jpg" class="w-100">
          <h5 class="mt-2">Liam Rodriguez</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>

</body>
</html>
