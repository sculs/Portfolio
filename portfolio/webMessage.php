<?php
/**
 * Created by PhpStorm.
 * User: songliu
 * Date: 2017-12-02
 * Time: 15:04
 */

$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

$sessionName = $_SESSION['name'];
$sessionEmail = $_SESSION['email'];
$sessionUserid = $_SESSION['userid'];

//$errors = array();
//if (empty($email)) { array_push($errors, "Email is required"); }
//if (empty($message)) { array_push($errors, "Please write something..."); }

if ($_SESSION['status'] == 'login'){
    $msg = "
        User's logged in.<br>
        User's information: <br>
        Actual Name: $sessionName <br>
        Actual E-mail: $sessionEmail<br>
        Actual UserID: $sessionUserid<br>
";
} else {
    $msg = "
        User's not logged in.<br>
        Session Name: $sessionName <br>
        Session E-mail: $sessionEmail<br>
        Session UserID: $sessionUserid<br>
    ";
}

// Send Email to me ================================
if ($email != '') {
    $to = "liusongscu@gmail.com";
    $from = "hi@liusong.xyz";
    $subject = "New Message from web-form on portfolio";
    $message = " 
    New Message from web-form on Portfolio:<br>
    Name: $name<br>
    E-mail: $email<br><br>
    Message: $message<br><br>
    
    Note: $msg<br>
    Message send from liusong.xyz<br>
    ";

    $headers = "From:" . $from . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to, $subject, $message, $headers);
}
// End of Email ================================

// Send information back to web-form
if ($email == '') {
    echo '
    <script>
        localStorage.setItem("submit", "E-mail missed");
    </script>
';
} elseif ($message == '') {
    echo '
    <script>
        localStorage.setItem("submit", "Leave me a message");
    </script>
';
} else {
    echo '
    <script>
        localStorage.setItem("submit", "Sent successfully, thanks!");
    </script>
';
}
echo '
    <script>
        window.location.assign("index.php#submit")
    </script>
';


//header('location: index.html#submit');



?>