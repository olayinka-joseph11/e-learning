<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>

                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li class="active"><a href="#"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
                        <li class="nav-header">About US</li>
                        <li><a  href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>
                <br>


            </div>
            <div class="span9">
                <section class="main">
                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header clearfix">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>
                </section>


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Head Up!</strong>&nbsp;Welcome to Federal School of Surveying Course-Ware.
                </div>
                <div class="slider-wrapper theme-default">
                <?php include('slider.php'); ?>
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->
    <div class="container">

        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                    <div class="span9">
                        <div class="alert alert-success"><i class="icon-file icon-large"></i>&nbsp;<strong>Medical Mission</strong></div>
                        <div class="hero-unit-2">
                            Announcements
                            In support to the thrust of the government to improve the health status of FSS, the Faculty and Staff of FSS Oyo, Oyo State. It was conducted last March 2010, to address the health needs of the people. A medical consultation is given to the residents of Oyo Town to attend to their health related problems that may need medical treatment. Medical tablets for headache, flu, fever, antibiotics and others were availed by the residents.
                        </div>

                    </div>
                    <div class="span3">
                        <div class="alert alert-info">
                            <i class="icon-building icon-large"></i>&nbsp;Courses

                        </div>
                        <div class="hero-unit-3">
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Computer Science</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Surveying</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Photogrammetry</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Catography</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <br>
        <div class="alert alert-success"><i class="icon-file icon-large"></i>&nbsp;<strong>Federal School of Surveying</strong></div>
        <div class="hero-unit-2">The Federal School of Surveying, Oyo is a tertiary institution in Nigeria that offers courses in Surveying and Geoinformatics education. The school is located at Oyo town in Oyo State, Nigeria. You can find more information about the school on their official website 
        </div>

        <?php include('footer.php'); ?>
    </div>


</div>
</div>






</body>
</html>


