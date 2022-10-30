<?php 
include 'connect.php'; 
$regno = $_POST['regno'];
$rowno = $_POST['row'];
$_SESSION['reg_no'] = $regno;
$_SESSION['row_no'] = $rowno;
$login_select_query="SELECT * FROM tickets WHERE reg_no='$regno'";
$login_select_result=mysqli_query($con,$login_select_query);
$total_rows= mysqli_num_rows($login_select_result);
if($total_rows>0)
{
    header('location:booking.php?message=You\'re already registered for this event!!!');
}
else{
    if($rowno=='A'){
        $login_select_query="SELECT * FROM tickets WHERE row_no='A'";
        $login_select_result=mysqli_query($con,$login_select_query);
        $total_rows= mysqli_num_rows($login_select_result);
        if($total_rows>=10){
            header('location:booking.php?message="Row is full, go with another one!!"');
        }
        else{
            header('location:payment_portal.php?');
        }

    }
    else if($rowno=='B'){
        $login_select_query="SELECT * FROM tickets WHERE row_no='B'";
        $login_select_result=mysqli_query($con,$login_select_query);
        $total_rows= mysqli_num_rows($login_select_result);
        if($total_rows>=20){
            header('location:booking.php?message="Row is full, go with another one!!"');
        }
        else{
            header('location:payment_portal.php?');
        }

    }
    else if($rowno=='C'){
        $login_select_query="SELECT * FROM tickets WHERE row_no='C'";
        $login_select_result=mysqli_query($con,$login_select_query);
        $total_rows= mysqli_num_rows($login_select_result);
        if($total_rows>=30){
            header('location:booking.php?message="Row is full, go with another one!!"');
        }
        else{
            header('location:payment_portal.php?');
        }

    }
    else if($rowno=='D'){
        $login_select_query="SELECT * FROM tickets WHERE row_no='D'";
        $login_select_result=mysqli_query($con,$login_select_query);
        $total_rows= mysqli_num_rows($login_select_result);
        if($total_rows>=40){
            header('location:booking.php?message="Row is full, go with another one!!"');
        }
        else{
            header('location:payment_portal.php?');
        }

    }
    else if($rowno=='E'){
        $login_select_query="SELECT * FROM tickets WHERE row_no='E'";
        $login_select_result=mysqli_query($con,$login_select_query);
        $total_rows= mysqli_num_rows($login_select_result);
        if($total_rows>=50){
            header('location:booking.php?message="Row is full, go with another one!!"');
        }
        else{
            header('location:payment_portal.php?');
        }

    }
}
?>