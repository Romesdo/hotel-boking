<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php 
  if(!isset($_SESSION['adminname'])){
    echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php' </script>";
  }

  $rooms = $conn->query("SELECT * FROM rooms");
  $rooms->execute();

  $allRooms = $rooms->fetchAll(PDO::FETCH_OBJ);
?>

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Rooms</h5>
             <a  href="create-rooms.php" class="btn btn-primary mb-4 text-center float-right">Create Room</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Room name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Number of persons</th>
                    <th scope="col">Size</th>
                    <th scope="col">View</th>
                    <th scope="col">Number of beds</th>
                    <th scope="col">Hotel name</th>
                    <th scope="col">Status value</th>
                    <th scope="col">Change status</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allRooms as $rooms) : ?>
                  <tr>
                    <th scope="row"><?php echo $rooms->id;?></th>
                    <td><?php echo $rooms->name;?></td>
                    <td>$<?php echo $rooms->price;?></td>
                    <td><?php echo $rooms->num_persons;?></td>
                    <td><?php echo $rooms->size;?></td>
                    <td><?php echo $rooms->view;?></td>
                    <td><?php echo $rooms->num_beds;?></td>
                    <td><?php echo $rooms->hotel_name;?></td>
                    <td><?php echo $rooms->status;?></td>

                    <td><a href="status-rooms.php?id=<?php echo $rooms->id; ?>" class="btn btn-warning text-white text-center ">Status</a></td>
                    <td><a href="delete-rooms.php?id=<?php echo $rooms->id; ?>" class="btn btn-danger text-white text-center ">Delete</a></td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>
<?php require "../layouts/footer.php"; ?>
