<?php
include('config.php');

$email = $_POST['email'];
$password = $_POST['password'];
$data = "admin";
$data2 = "1234";

if ($email == $data && $password == $data2) {
    header('location:./admin_panel/index.php');
} else {
    // echo "Going for customers";

    echo "<script>
 alert('You data is incorrect');
 window.location.href='http://localhost/PhotoFolio/login.php';
</script>";
}
