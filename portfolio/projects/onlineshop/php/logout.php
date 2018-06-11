<?php
    session_start();

    // remove all session variables, and redirect to login page;
    // 删除部分会影响订单的SESSION数据
    $_SESSION['status'] = '';
    $_SESSION['name'] = '';
    $_SESSION['itemCount'] = 0;
    $_SESSION['email'] = '';
    $_SESSION['totalPrice'] = 0;
    $_SESSION['itemCount'] = 0;
    $_SESSION['orderNumber'] = '';
    $_SESSION['userid'] = '';
     session_unset();
    $_SESSION['payPopUp'] = 'popedOnce';
    $_SESSION['indexPopUp'] = 'popedOnce';




//    echo '<script>alert("You have logged out!"); history.back();</script>';

    header("Location: ../index.php");
    exit();

?>