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
<body style="background-image:url('../img/10.jpg'); background-repeat: no-repeat; background-size: 96%;">
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
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="booking.php">Booking</a>
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
  <div class="container col-md card card-body shadow">
    <form class="form" method="post">
      <div class="row g-2">
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <select class="form-select" id="bookingFrom" name="bookingFrom" aria-label="From" required>
                <option value="">-- Select from --</option>
                <option value="Bandra Terminus BDT">Bandra Terminus</option>
                <option value="Agra">Agra</option>
                <option value="Chennai">Chennai</option>
                <option value="Kalyan Junction">Kalyan Junction</option>
                <option value="Dadar Junction">Dadar Junction</option>
                <option value="Thane">Thane</option>
                <option value="Gorakhpur">Gorakhpur</option>
                <option value="Ahemdabad">Ahemdabad</option>
                <option value="Jodhpur">Jodhpur</option>
                <option value="Sikkim">Sikkim</option>
            </select>
            <label for="bookingFrom">From Station</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <select class="form-select" id="bookingTo" name="bookingTo" aria-label="To" required>
              <option value="">-- Select to --</option>
                <option value="Bandra Terminus BDT">Bandra Terminus</option>
                <option value="Agra">Agra</option>
                <option value="Chennai">Chennai</option>
                <option value="Kalyan Junction">Kalyan Junction</option>
                <option value="Dadar Junction">Dadar Junction</option>
                <option value="Thane">Thane</option>
                <option value="Gorakhpur">Gorakhpur</option>
                <option value="Ahemdabad">Ahemdabad</option>
                <option value="Jodhpur">Jodhpur</option>
                <option value="Sikkim">Sikkim</option>
            </select>
            <label for="bookingTo">To Station</label>
          </div>
        </div>
      </div>
      <div class="row g-2">
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="bookingDate" name="bookingDate" placeholder="date" required>
            <label for="bookingDate">Booking date</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <select class="form-select" id="bookingClass" name="bookingClass" aria-label="Class" required>
              <option value="">-- Select class --</option>
                <option value="Exec. Chair Class (EC)">Exec. Chair Class (EC)</option>
                <option value="AC II Tier">AC II Tier</option>
                <option value="First Class (FC)">First Class (FC)</option>
                <option value="AC III Tier">AC III Tier</option>
                <option value="AC Chair Car (CC)">AC Chair Car (CC)</option>
                <option value="AC 3 Economy (3A)">AC 3 Economy (3A)</option>
                <option value="Sleeper (SL)">Sleeper (SL)</option>
                <option value="Second Sitting (2S)">Second Sitting (2S)</option>
            </select>
            <label for="bookingClass">Class</label>
          </div>
        </div>
      </div>
      <div class="row g-2">
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <select class="form-select" id="bookingQuota" name="bookingQuota" aria-label="Quota" required>
              <option value="">-- Select quota --</option>
              <option value="General">General</option>
              <option value="Ladies">Ladies</option>
              <option value="Lower Berth/Sr.Citizen">Lower Berth/Sr.Citizen</option>
              <option value="Divyaang">Divyanng</option>
              <option value="Tatkaal">Tatkaal</option>
              <option value="Prem.Tatkaal">Prem.Tatkaal</option>
            </select>
            <label for="bookingQuota">Quota</label>
          </div>
        </div>
      </div>
      <div class="mb-3 text-center">
        <input class="btn btn-sm btn-success ps-3 pe-3" type="submit" value="Search" id="btn-booking-search" name="bookingSearchBtn">
      </div>
    </form>
  </div>
</section>
<div class="modal fade" id="bookingConfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <i class="bi bi-check2-circle text-success"></i> Your Ticket has been booked successfully!!
      </div>
    </div>
  </div>
</div>
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

<?php
  error_reporting(0);
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $db = 'VRCTC';
  
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
  
  $bookingFrom = $_POST['bookingFrom'];
  $bookingTo = $_POST['bookingTo'];
  $bookingDate = $_POST['bookingDate'];
  $bookingClass = $_POST['bookingClass'];
  $bookingQuota = $_POST['bookingQuota'];

  $sql = "SELECT * FROM trains WHERE bookingFrom LIKE '%$bookingFrom%' OR bookingTo LIKE '%$bookingTo%'";
  
  $result=mysqli_query($conn,$sql);
  if(!$_POST['bookingSearchBtn']){
    echo "";
  }else{
      echo "</br></br><table class='table table-responsive table-bordered container'style=background-color:white>";
      echo "<thead><tr>";
      echo "<th>Booking From</th> <th>Booking To</th> <th>Booking Class</th> <th>Price</th> <th>Action</th>";
      echo "</tr></thead>";
    while($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$row['bookingFrom']."</td><td>".$row['bookingTo']."</td><td>".$row['bookingClass']."</td><td>&nbsp;₹ ".$row['bookingPrice']."</td><td><button type='submit' name='Book' class='btn btn-sm btn-success' data-bs-toggle='modal' data-bs-target='#bookingConfirm'>Book</button></td>";
      echo "</tr>";
    }
    echo "</table></br></br>";
 }
?>