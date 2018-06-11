<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="portfolio">
    <meta name="Song Liu" content="Portfolio">

    <title>Welcome</title>
    <!-- icon in title -->
    <link rel="shortcut icon" type="image/png" href="icon/liu.ico" />

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cookie|Dancing+Script|Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Permanent+Marker|Rock+Salt" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS, jQuery, Icons -->
    <link rel="stylesheet" href="tem.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="function.js"></script>
    <script src="jquery-3.2.1.js"></script>


    <!-- Own CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- reCAPTCHA from Google -->
    <script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
    
    

</head>

<body id="top">
<!-- Section 1, Navigation Bar -->
<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-color fixed-top" id="mainNav">
        <div class="container">
            <div class="row">
                <a class="navbar-brand js-scroll-trigger" href="#">
                    <h1>
                        <!-- icon on the title line -->
                        <img src="icon/liu.png" class="img-fluid" alt=" " style="width:50px; height:60px;"> Song Liu
                    </h1>
                </a>
                <a style="font-size: 1.3rem; height: 60%" class="js-scroll-trigger
                            btn btn-outline-light my-auto"
                   href="projects/onlineshop/index.php">Projects
                </a>
            </div>

            <!-- Navigation Bar shrinks to a button on small screen -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <span class="navbar-toggler-icon"></span>
            </button>

            <script>
                $(document).ready(function () {
                    $("#navbarResponsive").click(function () {
                        $(this).toggle();
                    });
                    $(".navbar-toggler").click(function () {
                        $("#navbarResponsive").toggle();
                    });

                });
            </script>


            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">

                    <!--<li class="nav-item active">-->
                        <!--<a class="nav-link js-scroll-trigger btn btn-outline-dark p-2 mr-4"-->
                           <!--href="projects/onlineshop/index.php">Projects</a>-->
                    <!--</li>-->
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#cv">CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>



<!-- Section 2, Welcome to my studio -->
<section>
    <div id="showcase">
        <div class="container text-uppercase">
            <h2 class="pb-3 pt-2">Welcome to my studio !</h2>
            <h3 class="">
                <i> —— my home on internet</i>
            </h3>

        </div>
    </div>
</section>

<!-- Section 3, Portfolio -->
<section>
    <div id="portfolio" class="bg-light">
        <div class="container">
            <h1 class="menu">portfolio</h1>
            <div class="row">
                <div class="img-display col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="box-img">
                        <a href="#portfolioModal1" data-toggle="modal" title="Panda" target="_blank">
                            <img class="single-img img-fluid" src="img/s-panda.jpg" alt="Panda">
                            <p>Panda's Hometown</p>
                        </a>
                    </div>
                </div>
                <div class="img-display col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="box-img">
                        <!-- <a href="img/l-char.jpg" title="Chinese Characters" target="_blank"> -->
                        <a href="#portfolioModal2" data-toggle="modal" title="Chinese Characters" target="_blank">
                            <img class="single-img img-fluid" src="img/s-char.jpg" alt="Chinese Characters">
                            <p>Chinese Characters</p>
                        </a>
                    </div>
                </div>
                <div class="img-display col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="box-img">
                        <!-- <a href="img/l-tea.jpg" title="Tea" target="_blank"> -->
                        <a href="#portfolioModal3" data-toggle="modal" title="Tea" target="_blank">
                            <img class="single-img img-fluid" src="img/s-tea.jpg" alt="Tea">
                            <p>Tea</p>
                        </a>
                    </div>
                </div>
                <div class="img-display col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="box-img">
                        <!-- <a href="img/l-cd.jpg" title="Chengdu" target="_blank"> -->
                        <a href="#portfolioModal4" data-toggle="modal" title="Chengdu" target="_blank">
                            <img class="single-img img-fluid" src="img/s-cd.jpg" alt="Chengdu">
                            <p>Hometown</p>
                        </a>
                    </div>
                </div>
                <div class="img-display col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="box-img">
                        <!-- <a href="img/l-solar.jpg" title="Solar Cell" target="_blank"> -->
                        <a href="#portfolioModal5" data-toggle="modal" title="Solar Cell" target="_blank">
                            <img class="single-img img-fluid" src="img/s-solar.jpg" alt="Solar Cell">
                            <p>Solar Cell</p>
                        </a>
                    </div>
                </div>
                <div class="img-display col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="box-img">
                        <!-- <a href="img/l-hotpot.jpg" title="Hotpot" target="_blank"> -->
                        <a href="#portfolioModal6" data-toggle="modal" title="Hotpot" target="_blank">
                            <img class="single-img img-fluid" src="img/s-hotpot.jpg" alt="Hotpot">
                            <p>Hotpot</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4, About me -->
<section>
    <div id="about">
        <h1 class="menu">A Student</h1>
        <div class=" lead text-secondary card card-body">
            <div class="container">
                <p>
                    I'm a student in developing mobile applications at
                    <b>Newton Kompetensutveckling</b>.
                    <br> With great interest and aiming to work in programming, I resolutely gave up what I was adept at,
                    and learn Information technology from the very beginning.
                    <br>
                </p>
                <ul>
                    <li>- With multi-cultural living
                        <b>experiences</b>, I am able and used to put myself in other's shoes and think ahead for others;</li>
                    <li>- With long-term
                        <b>education</b>, I learned how to learn and trend to learn things thoroughly;</li>
                    <li>- With several companies' working
                        <b>experiences</b>, I expanded my points of view and able to cooperate with people from different
                        cultures and in diverse environments.</li>
                </ul>
                <p>
                    Find my contact at the bottom of the page.
                    <br> Looking forward to hearing from you!
                </p>
            </div>
        </div>
    </div>
</section>



<!-- Section 5, CV -->
<section id="cv">
    <div class="container">
        <h1 class="menu pb-1">Curriculum Vitae</h1>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="pb-3">Programmer on the way</h2>
            </div>
        </div>
    </div>
    <section class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Education</h2>
                    <ul class="lead text-secondary list">
                        <li class="text-left">
                            <p>Stockholms Intensivsvenska För Akademiker</p>
                        </li>
                        <li class="text-left">
                            <p>KTH / Uppsala University (PhD Dropouts)</p>
                        </li>
                        <li class="text-left">
                            <p>Sichuan University (Master Degree)</p>
                        </li>
                        <li class="text-left">
                            <p>Sichuan University (Bachelor Degree)</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 mr-auto img-cv">
                    <img class="img-fluid rounded" src="img/cv-edu.jpg" alt="edu">
                </div>
            </div>

        </div>
    </section>


    <section class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mr-auto order-lg-2">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Work Experiences</h2>

                    <ul class="lead text-secondary list">
                        <li class="text-left">
                            <p>Solar Cell (Assistant Engineer)</p>
                        </li>
                        <li class="text-left">
                            <p>MLCC (Assistant Engineer)</p>
                        </li>
                        <li class="text-left">
                            <p>Volunteer in Great Wenchuan Earthquake</p>
                        </li>
                        <li class="text-left">
                            <p>Board Member of Student Union</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 ml-auto order-lg-1 img-cv">
                    <img class="img-fluid rounded" src="img/cv-solcell.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">A Future Coding Peasant</h2>

                    <ul class="lead text-secondary list">
                        <li class="text-left">
                            <p>Java (learning Objective C, Swift)</p>
                        </li>
                        <li class="text-left">
                            <p>HTML, CSS, JavaScript, PHP, SQL...</p>
                        </li>
                        <li class="text-left">
                            <p>iOS / Android Application Development</p>
                        </li>
                        <li class="text-left">
                            <p>Database</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 mr-auto img-cv">
                    <img class="img-fluid rounded" src="img/cv-coding.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</section>


<!-- Section 6, Contact -->
<section class="menu-last bg-color">
    <div class="row mx-auto container">

        <form class="footer col col-lg-6 col-md-12 col-12"
              action="webMessage.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" name="name"
                           id="inputName" placeholder="Name">
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="email"
                           id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group col-md-12 message">
                <label for="inputMessage">Message</label>
                <textarea class="form-control" name="message"
                          id="inputMessage" rows="3" placeholder="Leave message here"></textarea>
            </div>

            <!-- I'm not a robot from Google -->
            <div class="g-recaptcha" data-sitekey="6LcN3zwUAAAAAFxR5tFTmsb4uCkGGizZnEj8FrsT"></div>            

            <div id="submit">
                <button type="submit" class="btn btn-outline-light"
                       id="button-submit" href="#contact">
                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                    &nbsp;&nbsp;Send
                </button>

                <span id="submit-info" class="alert pl-5 text-warning"></span>

                <script>
                    document.getElementById("submit-info").innerHTML
                        = localStorage.getItem("submit");
                    localStorage.setItem("submit", "");

                    $(document).ready(function () {
                        setTimeout(myTimeout, 3000)
                    });
                    function myTimeout() {
                        $("#submit-info").fadeOut(3000);
                    }
                </script>

                <!--<span style="display: none" id="submit-info"-->
                <!--class="alert pl-5">-->
                <!--Submitted, thanks!-->
                <!--</span>-->
            </div>

            <!-- ============================================== -->
            <?php 
                foreach ($_POST as $key => $value) {
                    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
                }
            ?>
            <!-- ============================================== -->
        </form>

        <div class="footer container col col-lg-6 col-md-12 col-12">
            <div class="block col-lg-12 col-md-12 col-12 text-center">
                <div id="social" class="list-inline">
                    <div id="facebook" class="icon list-inline-item">
                        <!-- class="mx-auto" style="width: 200px;" -->
                        <a href="https://www.facebook.com/sculs" target="_blank">
                            <img src="icon/facebook-bw.png" id="facebook-bw" class="img-fluid" alt="facebook">
                            <img src="icon/facebook.png" style="display:none" id="facebook-color" class="img-fluid" alt="facebook">
                        </a>
                    </div>

                    <div id="linkedin" class="icon list-inline-item">
                        <a href="https://www.linkedin.com/in/liu-song/" target="_blank">
                            <img src="icon/linkedin-bw.png" id="linkedin-bw" class="img-fluid" alt="linkedin">
                            <img src="icon/linkedin.png" style="display:none" id="linkedin-color" class="img-fluid" alt="linkedin">
                        </a>
                    </div>
                    <div id="wechat" class="icon list-inline-item">
                        <a href="https://wx.qq.com/?lang=en_US" target="_blank">
                            <img src="icon/wechat-bw.png" id="wechat-bw" alt="wechat" class="img-fluid">
                            <img src="icon/wechat.png" style="display:none" id="wechat-color" class="img-fluid" alt="wechat">
                        </a>
                    </div>
                    <div id="qq" class="icon list-inline-item">
                        <a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" target="_blank">
                            <img src="icon/qq-bw.png" id="qq-bw" alt="qq" class="img-fluid">
                            <img src="icon/qq.png" style="display:none" id="qq-color" class="img-fluid" alt="qq">
                        </a>
                    </div>
                    <div id="weibo" class="icon list-inline-item">
                        <a href="https://www.weibo.com/sculs" target="_blank">
                            <img src="icon/weibo-bw.png" id="weibo-bw" alt="weibo" class="img-fluid">
                            <img src="icon/weibo.png" style="display:none" id="weibo-color" class="img-fluid" alt="weibo">
                        </a>
                    </div>

                    <script>
                        $(document).ready(function () {
                            $("#facebook").mouseenter(function () {
                                $("#facebook-bw").hide();
                                $("#facebook-color").show();
                            });
                            $("#facebook").mouseleave(function () {
                                $("#facebook-bw").show();
                                $("#facebook-color").hide();
                            });
                            $("#linkedin").mouseenter(function () {
                                $("#linkedin-bw").hide();
                                $("#linkedin-color").show();
                            });
                            $("#linkedin").mouseleave(function () {
                                $("#linkedin-bw").show();
                                $("#linkedin-color").hide();
                            });
                            $("#qq").mouseenter(function () {
                                $("#qq-bw").hide();
                                $("#qq-color").show();
                            });
                            $("#qq").mouseleave(function () {
                                $("#qq-bw").show();
                                $("#qq-color").hide();
                            });
                            $("#wechat").mouseenter(function () {
                                $("#wechat-bw").hide();
                                $("#wechat-color").show();
                            });
                            $("#wechat").mouseleave(function () {
                                $("#wechat-bw").show();
                                $("#wechat-color").hide();
                            });
                            $("#weibo").mouseenter(function () {
                                $("#weibo-bw").hide();
                                $("#weibo-color").show();
                            });
                            $("#weibo").mouseleave(function () {
                                $("#weibo-bw").show();
                                $("#weibo-color").hide();
                            });
                        });
                    </script>
                </div>
            </div>

            <!--change form here-->
            <div id="qr-code" class="container block ">
                <div class="row">
                    <div class="list-inline col col-5 pl-3 pr-0">
                        <div id="qr-wechat" class="list-inline-item pr-0">
                            <p class="text-center">
                                <strong>WeChat</strong>
                            </p>
                            <img src="icon/wechat-qr.jpg" alt="WeChat-QR Code">
                        </div>
                    </div>
                    <div id="contact" class="col col-7 ml-0 mt-2 text-left">
                        <div id="tel" class="mb-3">
                            <span>Mobile:</span>
                            <span style="position: absolute; left:60px">
                                <a href="tel:+46-73-268-0512">(+46) 73 268 05 12</a>
                            </span>
                        </div>
                        <div class="row ml-0" style="height: 45px;">
                            <div >
                                <span id="email">E-mail:</span>
                            </div>
                            <div>
                                <a href="mailto:contact@liusong.xyz">&nbsp;
                                    contact@liusong.xyz
                                </a>
                                <a href="mailto:liusongscu@gmail.com"
                                   style="position: absolute; left:60px">
                                    liusongscu@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div id="copyright">
                <p>Copyright &copy;
                    <span id="year"></span> Song Liu
                </p>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>



<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Panda</h2>
                            <p class="item-intro text-muted">
                                The giant panda (literally "black and white cat-foot")
                            </p>
                            <img class="img-fluid d-block mx-auto" src="img/l-panda.jpg" alt="">
                            <p>
                                The giant panda (大熊猫), also known as panda bear or simply panda, is a bear native to south central China. It is easily recognized
                                by the large, distinctive black patches around its eyes, over the ears, and across its
                                round body. The name "giant panda" is sometimes used to distinguish it from the unrelated
                                red panda. Though it belongs to the order Carnivora, the giant panda's diet is over 99%
                                bamboo. Giant pandas in the wild will occasionally eat other grasses, wild tubers, or
                                even meat in the form of birds, rodents, or carrion. In captivity, they may receive honey,
                                eggs, fish, yams, shrub leaves, oranges, or bananas along with specially prepared food.
                                <a href="https://en.wikipedia.org/wiki/Giant_panda" target="_blank">[wikipedia]</a>
                            </p>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Chinese Characters</h2>

                            <img class="img-fluid d-block mx-auto" src="img/l-char.jpg" title="Chinese Characters" target="_blank">
                            <p>
                                Chinese characters are logograms used in the writing of Chinese, Japanese, Korean and some other Asian languages. In Standard
                                Chinese, they are called hanzi (simplified Chinese: 汉字; traditional Chinese: 漢字, lit
                                "Han characters"). They have been adapted to write a number of other languages, including
                                Japanese, where they are known as kanji (漢字); Korean, where they are known as hanja (漢字);
                                and Vietnamese, in a system known as chữ Nôm. Collectively, they are known as CJK characters.
                                Chinese characters constitute the oldest continuously used system of writing in the world.
                                By virtue of their widespread current use in East Asia, and historic use throughout the
                                Sinosphere, Chinese characters are among the most widely adopted writing systems in the
                                world by number of users.
                                <a href="https://en.wikipedia.org/wiki/Chinese_characters" target="_blank">[wikipedia]</a>
                            </p>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">
                                Tea
                            </h2>

                            <img class="img-fluid d-block mx-auto" src="img/l-tea.jpg" title="Tea" target="_blank">
                            <p>
                                Tea is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis,
                                an evergreen shrub native to Asia. After water, it is the most widely consumed drink
                                in the world. There are many different types of tea; some teas, like Darjeeling and Chinese
                                greens, have a cooling, slightly bitter, and astringent flavour, while others have vastly
                                different profiles that include sweet, nutty, floral or grassy notes.
                                <a href="https://en.wikipedia.org/wiki/Tea" target="_blank">[wikipedia]</a>
                            </p>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">
                                Chengdu
                            </h2>

                            <img class="img-fluid d-block mx-auto" src="img/l-cd.jpg" title="Chengdu" target="_blank">
                            <p>
                                Chengdu, formerly romanized as Chengtu, is a sub-provincial city which has served as capital of China's Sichuan province.
                                It is one of the three most populous cities in Western China (the other two are Chongqing
                                and Xi'an). As of 2014, the administrative area houses 14,427,500 inhabitants, with an
                                urban population of 10,152,632. At the time of the 2010 census, Chengdu was the 5th-most
                                populous agglomeration in China, with 10,484,996 inhabitants in the built-up area including
                                Xinjin County and Deyang's Guanghan City.
                                <a href="https://en.wikipedia.org/wiki/Chengdu" target="_blank">[wikipedia]</a>
                            </p>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">
                                Solar Cell
                            </h2>

                            <img class="img-fluid d-block mx-auto" src="img/l-solar.jpg" title="Solar Cell" target="_blank">
                            <p>
                                A solar cell, or photovoltaic cell (previously termed "solar battery"), is an electrical device that converts the energy
                                of light directly into electricity by the photovoltaic effect, which is a physical and
                                chemical phenomenon. It is a form of photoelectric cell, defined as a device whose electrical
                                characteristics, such as current, voltage, or resistance, vary when exposed to light.
                                Solar cells are the building blocks of photovoltaic modules, otherwise known as solar
                                panels.
                                <a href="https://en.wikipedia.org/wiki/Solar_cell" target="_blank">[wikipedia]</a>


                            </p>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">
                                Hot Pot
                            </h2>

                            <img class="img-fluid d-block mx-auto" src="img/l-hotpot.jpg" title="Hotpot" target="_blank">
                            <p>
                                Hot pot is a Chinese soup containing a variety of East Asian foodstuffs and ingredients, prepared with a simmering pot of
                                soup stock at the dining table. While the hot pot is kept simmering, ingredients are
                                placed into the pot and are cooked at the table. Typical hot pot dishes include thinly
                                sliced meat, leaf vegetables, mushrooms, wontons, egg dumplings, tofu, and seafood. The
                                cooked food is usually eaten with a dipping sauce.
                                <a href="https://en.wikipedia.org/wiki/Hot_pot" target="_blank">[wikipedia]</a>
                            </p>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>



</body>

</html>