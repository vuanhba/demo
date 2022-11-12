<?php include ("head.php")?>
<div id="body-wrapper">
    <!-- Wrapper for the radial gradient background -->
    <div id="sidebar">
        <div id="sidebar-wrapper" class="print"> <!-- Sidebar with logo and menu -->

            <?php
            include("logo_profile.php");
            include ("nav.php");
            include ("massage.php");
            ?>
        </div>
    </div>
    <!-- End #sidebar -->
    <div id="main-content">
    <!-- Main Content Section with everything -->
    <?php //include ("noScript.php") ?>
    <!-- Page Head -->
    <div class="print">
        <?php include ("pageHead.php") ?>
    </div>
    <div class="clear"></div> <!-- End .clear -->
        <!-- End Page Head -->
        <!-- Content -->
        <?php
        include ("content.php");
        //include ("content_left.php");
       // include ("content_right.php");

        ?>
        <!-- end Content -->
        <div class="clear"></div>
        <!-- Start Notifications -->
     <?php //include ("notification.php");

        include ("footer.php");
        ?>