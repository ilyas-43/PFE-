<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel - ROOM DETAILS</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <style>
    .custom-bg {
      background-color: #2ec1ac;
    }
  </style>
</head>
<body class="bg-light">

  <!-- Header (simplified) -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"><img src="images/logo/trans_bg.png" height="50"></a>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-12 my-5 mb-4 px-4">
        <h2 class="fw-bold">Standard Room</h2>
        <div style="font-size: 14px;">
          <a href="index.html" class="text-secondary text-decoration-none">HOME</a>
          <span class="text-secondary"> > </span>
          <a href="rooms.html" class="text-secondary text-decoration-none">ROOMS</a>
        </div>
      </div>

      <div class="col-lg-7 col-md-12 px-4">
        <div id="roomCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class='carousel-item active'>
              <img src="images/rooms/1.jpg" class='d-block w-100 rounded' alt='Room image'>
            </div>
            <div class='carousel-item'>
              <img src="images/rooms/3.png" class='d-block w-100 rounded' alt='Room image'>
            </div>
            <div class='carousel-item'>
              <img src="images/rooms/4.png" class='d-block w-100 rounded' alt='Room image'>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="col-lg-5 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow-sm rounded-3">
          <div class="card-body">
            <h4>$220 per night</h4>
            
            <div class="mb-3">
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-half text-warning'></i>
            </div>
            
            <div class="mb-3">
              <h6 class="mb-1">Features</h6>
              <span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                Air Conditioning
              </span>
              <span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                Flat-screen TV
              </span>
              <span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                Mini-bar
              </span>
            </div>
            
            <div class="mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                Swimming Pool
              </span>
              <span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                Spa
              </span>
              <span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                Free WiFi
              </span>
            </div>
            
            <div class="mb-3">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Child
              </span>
            </div>
            <button class="btn w-100 text-white custom-bg shadow-none mb-1">Book Now</button>
          </div>
        </div>
      </div>

      <div class="col-12 mt-4 px-4">
        <div class="mb-5">
          <h5>Description</h5>
          <p>
            Our Deluxe Room offers a spacious and elegant space with a stunning view. 
            Featuring a king-size bed, marble bathroom, and all modern amenities, 
            it's the perfect choice for a comfortable and luxurious stay.
          </p>
        </div>

        <div>
          <h5 class="mb-3">Reviews & Ratings</h5>

          <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
              <img src="images/features/6.png" class="rounded-circle" loading="lazy" width="30px" alt="User">
              <h6 class="m-0 ms-2">John Smith</h6>
            </div>
            <p class="mb-1">
              Excellent stay, very comfortable room and attentive staff.
            </p>
            <div>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
            </div>
          </div>

          <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
              <img src="images/features/7.webp" class="rounded-circle" loading="lazy" width="30px" alt="User">
              <h6 class="m-0 ms-2">Mary Johnson</h6>
            </div>
            <p class="mb-1">
              Very nice room but a bit noisy on the street side.
            </p>
            <div>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star-fill text-warning'></i>
              <i class='bi bi-star text-warning'></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer (simplified) -->
  <footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center">
      <p class="m-0">Designed and Developed by ILYAS and MOHAMMED.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function checkLoginToBook(login, roomId) {
      if(login) {
        window.location.href = 'confirm_booking.php?id=' + roomId;
      } else {
        window.location.href = 'login.php';
      }
    }
  </script>
</body>
</html>