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
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map</a></li>
                        <li><a href="#"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us</a></li>
                        <li class="nav-header">About US</li>
                        <li><a href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission</a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision</a></li>
                        <li  class="active"><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History</a></li>

                    </ul>
                </div>

            </div>

            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>FSS History</strong>
                </div>


                <p>
                <div class="hero-unit-2">

                Historical Background
The School was founded on 1st July, 1908 as a Government Departmental Training Institution attached to the Colonial Survey Department in Lagos for the training of Technical Assistants. It later moved from Lagos to Ibadan in 1926 and later to Oyo in 1934.

When regionisation came and Surveying was no longer in the exclusive list, the School was split into two. One belonged to Federal Surveys and the other maintained by the then Western Region Survey Department. This arrangement continued till 1965 when the Federal School then located at Okene had a storm disaster. The Federal Students were then relocated to the Western Regional School still at Oyo.

With this cohabitation, the Federal Surveys Department continued to support the School with staff and materials (instruments and funds inclusive) until 1976. In that year, the Western Region, then known as Western State was split into three States – Oyo, Ogun and Ondo States and the proprietorship of the School was transferred to Federal Surveys again.

For about 80 years of its existence, the School was running programmes only in Land Surveying. In January 1989, the Federal Survey School of Photogrammetry and Cartography earlier based at Ebute-Metta, Lagos was transferred to Oyo and merged with the School. In effect, from 1989, the School started to run Basic (Later Intermediate) and Advanced Certificates Programmes in Photogrammetry and Cartography.

The School had also changed its name at various times. It had been known as “Survey School”, “School of Surveying”. “Federal Survey School” and finally by virtue of decree 19 of 1990 it was established as “Federal School of Surveying”.

Enabling Law (Decree (now Act) 19 of 25th June, 1990)
In response to Federal Government’s directive that all Federal Institutions should be legally established, Decree (now Act) 19 of 25th June, 1990 otherwise known as Federal School of Surveying Decree 1990 was promulgated. This decree gave the School its new dispensation. One significant aspect of this decree is that the School commenced being administered through a Governing Council as against being run directly by Federal Surveys Department.
                </div>
                </p>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


