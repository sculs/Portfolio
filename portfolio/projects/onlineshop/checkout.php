<?php include "site/header.php" ?>

<div class="container">
    <?php include "site/searchBar.php" ?>
    <div class="row">
        <?php include "site/sidebar.php" ?>
        <div class="col-lg-9">
            <div class="row">

                <!-- Cart session =================== -->
                <div class="container">

                    <h1 class="text-center py-3">Check out</h1>
                    <div class="">
                        <?php
                        require('php/db.php');
                        global $connection;

                        $x = 0;
                        $userid = '';
                        $payPrice = 0;

                        if ($_SESSION['status'] == "login") {
                            //with shopStatus of "active" to loop all products the user added
                            $query = "SELECT * FROM sale WHERE shopStatus ='active' 
                                    AND userid = '".$customerID."' AND amount > 0 ";
                            $result = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $bookAdded = $row['bookid'];
                                $query2 = "SELECT * FROM books WHERE bookid ='" . $bookAdded . "'";
                                $result2 = mysqli_query($connection, $query2);
                                $row2 = mysqli_fetch_assoc($result2);
                                $x += $row['amount'];
                                $payPrice += ($row2['price'] * $row['amount']);
                                $userid = $row['userid'];


                                // List the book that selected from database
                                echo '<hr>';
                                echo '
                            <div class="row">
                            <div class="col">
                                <img height="160" width="auto" src="' . $row2['link'] . '" 
                                alt="' . $row['title'] . '">
                            </div>
                            <div class="col-8 my-auto">
                                <h5>' . $row2['title'] . '</h5>
                                <h6>' . $row2['category'] . '</h6>
                                <h4>' . number_format($row2['price']) . ' kr</h4>
                            </div>
                            
                            <div class="col my-auto">
                            <div class="row">                           
                                <a href="php/removeFromCart.php?productID=' . $row2['bookid'] . '" 
                                    method="post">
                                    <i class="material-icons">indeterminate_check_box</i>
                                </a>
                                <span class="cart-st">
                                    <p>' . $row['amount'] . '</p>
                                </span>
                                <a href="php/addToCart.php?productID=' . $row2['bookid'] . '"
                                 method="post">
                                    <i class="material-icons">add_box</i>
                                </a>
                                </div>
                            </div>
                            </div>
                            <hr>
                            ';
                            }
                        }
                        // =================================================


                        echo '
                        <div class="container">
                            <div class="row">
                            
                            <div class="col-4 text-center">
                                <h5><b style="color: #cf0000">'.$x.'</b>
                                &nbsp;&nbsp; books </h5>
                            </div>
                            <div class="col-4">
                                <h5>Total Price: &nbsp;&nbsp;
                                <b style="color: #cf0000">'.$payPrice. ' </b>&nbsp;kr</h5>
                            </div>
                            <div class="col-4 text-right sumUp">
                                <button type="button" class="btn btn-primary" 
                                style="height: 50px;">
                                <a href="index.php">
                                    << Continue shopping
                                </a>
                                </button>
                            </div>
                            <div class="col text-right my-3 sumUp">
                                <button type="button" class="btn btn-lg btn-success"
                                style="font-size: 30px; text-shadow: 3px 2px #4f4f4f;
                                letter-spacing: 3px; width: 192px">
                                <a href="pay.php?userid='.$userid.'"
                                 method="post">PAY</a></button>
                            </div>
             
                            </div>
                        </div>
                        ';
                        ?>
                    </div>
                </div>

                <!-- Cart session ends =================== -->



            </div>
            <div class="my-5"></div>
        </div>
    </div>
</div>



<?php include "site/footer.php" ?>

