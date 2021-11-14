<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hotel = $_POST['hotel'];

    $message = "Welcome to NMEC Application <br>
    Your request for booking is done <br>
    Hotel: $hotel <br>
    Name: $name <br>
    Phone: $phone <br>
    Email: $email <br>";

    mail($email , "Booking Hotel (NMEC) Application" , $message);

    $_SESSION['message'] = 'Request is sent, you will get mail as soon as to confirm your request.';

    header("Loction: booking.php");

}
else{
    header("Loction: booking.php");
}

?>