<?php 
  session_start();
  if (!isset($_SESSION["username"]))
   {
      header("location: ../index.html");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION['username'] ?> - VRCTC</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="img/logo_1.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body  style="background-image:url('../img/8.jpg'); background-repeat: no-repeat; background-size: 110%;">
<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="../img/vrctc2.png" class="img-fluid" height="50" width="50">VRCTC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li> -->
            </ul>
            <div class="d-flex">
                <a href="logout.php"><button class="btn btn-sm btn-secondary">Logout <i class="bi bi-box-arrow-right"></i></button></a>
            </div>
          </div>
        </div>
      </nav>
</header>
<section class="container">
<div class="lead text-center mb-4">Welcome, <?php echo $_SESSION['username']; ?>! to VRCTC</div>
  <!-- <div class="container col-md card card-body shadow">
        HOME
  </div><br><br> -->
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <h4 class="alert-heading">Alert!</h4>
      <p class="text-center">
        Hon'ble Prime Minister message on "Public Health Response to COVID-19: Campaign for COVID-Appropriate Behaviour". <br><a class="alert-link" href="http://contents.irctc.co.in/en/Covid19PMMessage.pdf" target="_blank">Wear Mask, Follow Physical Distancing, Maintain Hand Hygine.</a><br>
        Get your favourite food at your train seat through <a class="alert-link" href="https://www.ecatering.irctc.co.in/" target="_blank">e-Catering</a> available at selected stations.<br><br>
      </p>        
        COVID 19 Alert:
        <ul type=".">
          <li>
            <a class="link" href="http://contents.irctc.co.in/en/CovidVaccinationInfoEng.pdf" target="_blank">Information on Covid 19 Vaccination Programme</a>
          </li>
          <li>
            All passengers are hereby informed that downloading of Aarogya Setu App on their mobile phone, that they are carrying along, is advisable.
          </li>
          <li>
            All Passenger to kindly note that on arrival at their destination, the traveling passengers will have to adhere to such health protocols as are prescribed by the destination State/UT. <a class="link" href="http://contents.irctc.co.in/en/stateWiseAdvisory.html" target="_blank">Click Here to see state wise advisory on Arrival(As available).</a> For other states, State Govt websites may be visited to ascertain the same.
          </li>
          <li>
            Though various State Governments' Advisories have been provided on IRCTC Website, Still Users are advised to surf Destination State Government URL/ Website for latest instructions on Covid-19 pandemic and Covid appropriate behaviour.
          </li>
          <li>
            No blanket and linen shall be provided in the train. Although Take Away Bedroll Kit is available in some trains on payment basis. <a class="link" href="http://contents.irctc.co.in/en/Trains_Bedroll_Kit_Available.pdf" target="_blank">Click here to see the train list.</a>
          </li>
        </ul>
      <hr>
    <p class="mb-0 text-center">
      <button type="button" class="btn btn-sm btn-warning text-white" data-bs-dismiss="alert" aria-label="Close">Close</button>
    </p>
  </div>
  <br><br>
</section>
<footer>

</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>