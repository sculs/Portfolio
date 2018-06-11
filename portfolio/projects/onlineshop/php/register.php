<?php
session_start();
require('db.php');

$errors = array();
global $connection;
$_SESSION['info'] = '';

$name       = mysqli_real_escape_string($connection, $_POST['name']);
$email      = mysqli_real_escape_string($connection, $_POST['email']);
$_SESSION['valueEmail'] = $email;
$password_1 = mysqli_real_escape_string($connection, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($connection, $_POST['password_2']);
$number     = mysqli_real_escape_string($connection, $_POST['number']);

// form validation: ensure that the form is correctly filled
//if (empty($name)) { $errors = $_SESSION['info'] = "Name is required";}
if (empty($email)) { $errors = $_SESSION['info'] = "Email is required"; }
if (empty($password_1)) { $errors = $_SESSION['info'] = "Password is required"; }
if (empty($password_2)) { $errors = $_SESSION['info'] = "Confirmed password is required"; }
//if (empty($number)) { array_push($errors, "Contact number is required"); }
if ($password_1 != $password_2) {
    $errors = $_SESSION['info'] = "Please repeat the same password!";

    //echo '<script>alert("Please re-enter the same password!");
    //history.back();
    //window.location.assign("../register.php")
    //</script>';
}

if (count($errors) == 0) {

    // Extract email from database;
    $email = strtolower($email); // lowercase;
    $sql1 = "SELECT * FROM users WHERE email =  '" .$email. "'";
    $query1 = mysqli_query($connection, $sql1);
    $row = mysqli_fetch_assoc($query1);
    $dbEmail = $row['email'];

    if (empty($dbEmail)) {
        $password = md5($password_1);//encrypt the password before saving in the database
        $sql2 = "INSERT INTO users (name, number, email, password) 
                VALUES('$name', '$number', '$email', '$password')";
        mysqli_query($connection, $sql2);

//        echo '<script>alert("Welcome '.$name.', You are successfully registered. Log in and shopping.");
//        history.back();</script>';

        $_SESSION['email'] = $email;
        $_SESSION['valueEmail'] = '';


        // Send Email to customer ================================
        $to = $email;
        $from = "hi@liusong.xyz";
        $subject = "Welcome";
        $message = " 
        Hello $name,</br></br>
        
        Thanks for registering Bookstore!</br>
        Welcome to join our book store, the sea of knowledge.</br></br>
        
        Best wishes,</br>
        Book Store</br><br>
        Note:<br>
        This is a simulated shopping site as a homework.
        As a new web designer, this site might have some bugs,
        please do not fill in any confidential information.<br><br>
        In addition, all purchases are also simulated,
        nothing will be charged, and no book will be delivered.<br><br>
        Thanks for trying my website! Have fun!<br>
        ";

        $headers = "From:".$from . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $headers);
        // End of Email to customer ================================


        // Send Email to admin ================================
        $toAdmin = "liusongscu@gmail.com";
        $fromAdmin = "hi@liusong.xyz";
        $subjectAdmin = "new registered";
        $messageAdmin = "
            A new user has registered, Here are the information:<br><br>
            Name: $name<br>
            Email: $email<br>
            Contact number: $number<br><br>
            Sent from system(hi@liusong.xyz)<br><br>
            
            Notification has sent as below:<br><br>
            Note:<br>
            This is a simulated shopping site as a homework.
            As a new web designer, this site might have some bugs,
            please do not fill in any confidential information.<br><br>
            In addition, all purchases are also simulated,
            nothing will be charged, and no book will be delivered.<br><br>
            Thanks for trying my website! Have fun!<br>
            ";
        $headersAdmin = "From:". $from . "\r\n";
        $headersAdmin .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        mail($toAdmin, $subjectAdmin, $messageAdmin, $headersAdmin); // in spam mail-box.
        // End of Email to admin ================================


        $_SESSION['info'] = "Successfully registered. <br><br>Log in and shopping.";
        header('location: ../login.php');

    } else {
        $_SESSION['info'] = "Email is already taken!";
        header('location: ../register.php');

//        echo '<script>
//            alert("Email is already taken!");
//            history.back();
//            window.location.assign("../register.php")
//        </script>';
    }

} else {

    header('location: ../register.php');

}



?>