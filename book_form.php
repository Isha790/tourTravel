<?php
$connection =mysqli_connect('localhost','root','','book');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST[ 'send'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST[ 'phone'];
 $address = $_POST['address'];
 $location = $_POST['location'];
 $guests = $_POST[ 'guests'];
 $arrivals = $_POST['arrivals'];
 $leaving = $_POST[ 'leaving'];

$request = " insert into book_form(name, email, phone, address,	location, guests, arrivals, leaving) values('$name','$email',
'$phone','$address','$location','$guests','$arrivals','$leaving') ";
if (mysqli_query($connection, $request)) {
mysqli_query($connection, $request);
$message = "Form submitted successfully!";
            // Use JavaScript to display an alert
            echo "<script>alert('" . $message . "');</script>";
}
header('location:book.php');
}else{
    echo 'something went wrong try again';
}
}
?>