<?php
/**
 * Created by PhpStorm.
 * User: songliu
 * Date: 2017-12-05
 * Time: 14:50
 */

echo '

<style>
.info-popUp {
    padding: 0;
    height: 250px;
    width: 400px;
    margin: auto;
    position: fixed;
    top: 180px;
    text-align: center;
    z-index: 1; 
    font-size: 1.3rem;
    border: 5px solid rgba(52,58,64,0.8);
    border-radius: 10px 10px 7px 7px ;
    background-color: rgba(238,238,238,0.8);
    box-shadow: 1px 1px 10px grey, 
                -1px -1px 10px grey, 
                -1px 1px 10px grey, 
                1px -1px 10px grey;
}
.topright {
    margin-top: -12px;
    font-size: 50px;
}
.bottomcenter {
    position: absolute;
    left: 35%;
    bottom: 8px;
    margin: 0 auto;
    font-size: 18px;
    width: 30%;
    background-color: rgba(52,58,64,0.8);
}

.info-content{
    width: 390px;
    height: 132px;
    padding-top: 40px;
    color: black;
    font-size: 1.2rem;
}

.info-head{
    height: 55px;
    border-radius: 7px 7px 0 0;
    color: #ffffff; 
    font-size: 1rem;
    background-color: rgba(52,58,64,0.8);
    font-size: 25px;
    letter-spacing: 2px;
}

</style>

<div class="alert alert-dismissible fade show fixed-top mx-auto my-auto info-popUp"
    <div class="container">
        
        <button class="close topright" data-dismiss="alert">
            &times;
        </button>
        <div class="info-head py-2">
            <strong></strong>
        </div>
        
        <div class="info-content">
            <p>
                '.$_SESSION['info'].'
            </p>
        </div>
        
        <button class="btn btn-dark btn-lg bottomcenter" data-dismiss="alert" type="button">
            OK
        </button>
    </div>
</div>

';

$_SESSION['info'] = '';

?>