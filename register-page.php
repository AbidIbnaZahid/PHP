<?php
include "inc/db.php";
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$flag = TRUE;
if (!$name) {
    $_SESSION['name'] = "Your Name Field is Empty";
    $flag = false;
} else {
    $_SESSION['old_name'] = $name;
}
if (!$email) {
    $_SESSION['email'] = "Your email field is Empty";
    $flag = false;
} else {
    $_SESSION['old_email'] = $email;
}

if (!$phone) {
    $_SESSION['phone'] = "Your phone field is Empty";
    $flag = false;
} else {
    $_SESSION['old_phone'] = $phone;
}

if (!$password) {
    $_SESSION['password'] = "Your password field is Empty";
    $flag = false;
} else if (strlen($password) < 5) {
    $_SESSION['minimum_password'] = "Password should be at least 6 characters in length";
    $flag = FALSE;
}

if (!$confirm_password) {
    $_SESSION['confirm_password'] = "Your confirm password field is empty";
    $flag = FALSE;
}
if ($password != $confirm_password) {
    $_SESSION['confirm_match_password'] = "Your password Don't match";
    $flag = FALSE;
}

if ($flag) {
    $email_check_query = "SELECT COUNT(*) AS email_count FROM users WHERE email = '$email'";
    if (mysqli_fetch_assoc(mysqli_query(db(), $email_check_query))['email_count'] == 0) {
        $phone_check_query = "SELECT COUNT(*) AS phone_count FROM users WHERE phone = '$phone'";
        $increpetd_pass = md5($password);
        if (mysqli_fetch_assoc(mysqli_query(db(), $phone_check_query))['phone_count'] == 0) {
            $insert_quary = "INSERT INTO users(name, email,phone, password)VALUES('$name','$email','$phone','$increpetd_pass')";
            $quary = mysqli_query(db(), $insert_quary);
            if ($quary) {
                $_SESSION['email_sent'] = $email;
                $_SESSION['sent_massage'] = "$name, Your registration successfully. Now log in";

                // SMS Start
                //POST Method example
                // $url = "http://66.45.237.70/api.php";
                // $number = $phone;
                // $text =  "Hi $name, your account create successfully!!";;
                // $data = array(
                //     'username' => "01834833973",
                //     'password' => "TE47RSDM",
                //     'number' => "$number",
                //     'message' => "$text"
                // );

                // $ch = curl_init(); // Initialize cURL
                // curl_setopt($ch, CURLOPT_URL, $url);
                // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // $smsresult = curl_exec($ch);
                // $p = explode("|", $smsresult);
                // $sendstatus = $p[0];

                // SMS End
                header('location: login.php');
            }
        } else {
            $_SESSION['mobile_exit_error'] = "$name, This mobile Number Alrady have an Account";
            header('location: register.php');
        }
    } else {
        $_SESSION['email_exit_error'] = "$email, This Email Address Alrady have an Account";
        header('location: register.php');
    }
} else {
    header('location: register.php');
}
