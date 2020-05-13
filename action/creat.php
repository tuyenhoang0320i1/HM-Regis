<?php
$usernameErr = NULL;
$passwordErr = NULL;
$emailErr = NULL;
$phoneErr = NULL;
$username = NULL;
$password = NULL;
$email = NULL;
$phone = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../function.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $has_error = false;

    if ($username === "username" && $password === "password") {
        echo "<h2>Welcome <span style='color: red'>" . $username . "</span> to website</h2>";
    } else {
        echo "<h2><span style='color: red'>Login Error</span></h2>";
    }
    if (empty($username)) {
        $usernameErr = "Ten dang nhap khong duoc de trong!";
        $has_error = true;
    }
    if (empty($password)) {
        $passwordErr = "Password khong duoc de trong!";
        $has_error = true;
    }
    if (empty($email)) {
        $emailErr = "Email khong duoc de trong!";
        $has_error =  true;
    } else {
        if (!filter_var($emailErr, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Dinh dang email sai (example: name@xxx.com)!";
            $has_error = true;
        }
    }
    if (empty($phone)) {
        $phoneErr = "So dien thoai khong duoc de trong";
        $has_error = true;
    }


    $customer = [
        "username" => $username,
        "password" => $password,
        "email" => $email,
        "phone" => $phone
    ];
    store($customer,"../data.json");
    header("Location: ../index.php");
}

?>
