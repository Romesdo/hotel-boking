<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php 
  if(!isset($_SESSION['adminname'])){
    echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php' </script>";
  }

  $bookings = $conn->query("SELECT * FROM bookings");
  $bookings->execute();

  $allBookings = $bookings->fetchAll(PDO::FETCH_OBJ);
?>

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Check in</th>
                    <th scope="col">Check out</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Hotel name</th>
                    <th scope="col">Room name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Change Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php foreach($allBookings as $bookings) : ?>
                    <td><?php echo $bookings->check_in?></td>
                    <td><?php echo $bookings->check_out?></td>
                    <td><?php echo $bookings->email?></td>
                    <td><?php echo $bookings->phone_number?></td>
                    <td><?php echo $bookings->full_name?></td>
                    <td><?php echo $bookings->hotel_name?></td>
                    <td><?php echo $bookings->room_name?></td>
                    <td><?php echo $bookings->status?></td>
                    <td>$<?php echo $bookings->payment?></td>
                     <td><a href="status-bookings.php?id=<?php echo $bookings->id; ?>" class="btn btn-warning text-white text-center ">Status</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>
<?php require "../layouts/footer.php"; ?>
