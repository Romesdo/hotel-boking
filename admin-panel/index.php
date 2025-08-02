<?php require "layouts/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php 
  if(!isset($_SESSION['adminname'])){
    echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php' </script>";
  }

  //Hotels Count
  $hotels = $conn->query("SELECT COUNT(*) AS count_hotels FROM hotels");
  $hotels->execute();

  $allHotels = $hotels->fetch(PDO::FETCH_OBJ);
  
  //Rooms Count
  $rooms = $conn->query("SELECT COUNT(*) AS count_rooms FROM rooms");
  $rooms->execute();
 
  $allRooms = $rooms->fetch(PDO::FETCH_OBJ);

  //Admins Count
  $admins = $conn->query("SELECT COUNT(*) AS count_admins FROM admins");
  $admins->execute();
 
  $allAdminds = $admins->fetch(PDO::FETCH_OBJ);

  //Bookings Count
  $bookings = $conn->query("SELECT COUNT(*) AS count_bookings FROM bookings");
  $bookings->execute();
 
  $allBookings = $bookings->fetch(PDO::FETCH_OBJ);

?>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hotels</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 3.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">Number of hotels: <?php echo $allHotels->count_hotels?></p>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rooms</h5>
              <p class="card-text">Number of rooms: <?php echo $allRooms->count_rooms?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>
              <p class="card-text">Number of admins: <?php echo $allAdminds->count_admins?></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bookings</h5>
              <p class="card-text">Number of bookings: <?php echo $allBookings->count_bookings?></p>
              
            </div>
          </div>
        </div>
      </div>
   
<?php require "layouts/footer.php"; ?>
  