<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php

    // if(isset($_SESSION['username'])){
    //     echo "<script>window.location.href='".APPURL."' </script>";
    // }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // if($_SESSION['id'] != $id){
		// 	echo "<script>window.location.href='".APPURL."' </script>";
		// }

        $bookings = $conn->query("SELECT * FROM bookings WHERE user_id= '$id'");
        $bookings->execute();
    
        $allBookings = $bookings->fetchAll(PDO::FETCH_OBJ);
    }
    else{
		echo "<script>window.location.href='".APPURL."/404.php' </script>";
	}
?>
    <div class="container">
        <?php if (count($allBookings) > 0) :?>
        <table class="table mt-5">
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
            <th scope="col">Created at</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($allBookings as $bookings) : ?>
                <tr>
                <th scope="row"><?php echo $bookings->check_in?></th>
                <td><?php echo $bookings->check_out?></td>
                <td><?php echo $bookings->email?></td>
                <td><?php echo $bookings->phone_number?></td>
                <td><?php echo $bookings->full_name?></td>
                <td><?php echo $bookings->hotel_name?></td>
                <td><?php echo $bookings->room_name?></td>
                <td><?php echo $bookings->status?></td>
                <td><?php echo $bookings->payment?></td>
                <td><?php echo $bookings->created_at?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
        </table>
        <?php else : ?>
            <div class="alert alert-primary" role="alert">
                You have not made any bookings just yet 
            </div>
            <?php endif;?>
    </div>
<?php require "../includes/footer.php"; ?>
