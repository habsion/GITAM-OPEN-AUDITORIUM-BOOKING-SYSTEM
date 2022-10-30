<!DOCTYPE html>
<html lang="en">
<?php 
include 'connect.php'; 
$id = $_SESSION['id'];
$query = "SELECT * FROM `userdetails` where `userid` ='$id'";
$result = mysqli_query($con , $query);
$rows = mysqli_fetch_assoc($result);

?>
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css_for_booking.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>You're just one<br>step ahead to<br>book your<br>tickets!!</h1>
                <h1></h1>
                <p id="tagline">Grab your passes now!!!</p>
            </div>
        </div>

        
        <div class="right">
            <h5>Book your tickets here</h5>
            <form action="bookingvalues.php" , method="POST">
            <div class="inputs">
                <input type="text" placeholder="Full Name" value="<?php echo $rows['name']; ?>" name = "name">
                <br>
                <input type="text" placeholder="Registeration number" value="<?php echo $rows['reg_no']; ?>" name = "regno">
                <br>
                <input type="number" placeholder="Phone number" value="<?php echo $rows['phone']; ?>" >
                <br>
                <input type="text" placeholder="Email" value="<?php echo $rows['mail']; ?>">
                <br><br>
                <label for="row" >Row-Number:</label>
                <select name="row" id="rows">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>

            </div>
            <br><br><br>
            <button id="confirm" onclick="confirm()">Confirm</button>
            <p style="color:red;">
            <?php
            if(isset($_GET['message']))  {
							echo $_GET['message'];
						}
                        ?>
            </p>           
            </form>
        </div>

    </div>
</body>

</html>