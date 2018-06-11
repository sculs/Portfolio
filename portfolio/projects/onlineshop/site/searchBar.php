
<!-- Search function-->
<?php
if (!isset($_SESSION['itemCount'])) {
    $_SESSION['itemCount'] = 0;
}

include('php/db.php');
$customerID = $_SESSION['email'];
$productID = $_GET['productID'];
$amountInCart = 0;
global $connection;

if ($_SESSION['status'] == 'login') {

    $queryInSearch = "SELECT * FROM sale WHERE userid = '".$customerID."' AND shopStatus = 'active' ";
    $resultInSearch = mysqli_query($connection, $queryInSearch);

    while ($rowInSearch = mysqli_fetch_assoc($resultInSearch)) {
        $amountInCart += $rowInSearch['amount'];
    }
}
?>

<div class="searchBar">
<div class="container my-1 py-3 ">
    <div class="row">
        <div class="col">
            <form action="search.php" method="post">
                <div class="input-group">
                    <input type="text" class="form-control input-lg"
                           name="search" placeholder="Search" required>
                    <div class="input-group-btn">
                        <button class="btn btn-info" type="submit">
                            Search
                        </button>
                    </div>
                </div>
            </form>
            <small class="mt-0" style="font-size: 0.7rem; color: #aaaaaa; margin-left: 2%">
                <i>Try to type in Java, or 2014, or translated,
                    or whatever you are interested, and Press Enter</i>
            </small>
        </div>


        <div class="col col-2 box">
            <i class="material-icons" style="font-size:50px;color:white">
                add_shopping_cart</i>
            <span class="shoppingCart">
                <?php

                echo "$amountInCart";
                ?>
            </span>
            <?php
            $link = "checkout.php?ordNumber=" . $_SESSION['productID'];
//            $link = "php/cart.php?ordNumber=" . $_SESSION['productID'];
            ?>
        <a href="checkout.php">
            <img src="img/logo.png" alt="" width="180" height="60">
        </a>
        </div>
    </div>
    </div>
</div>

