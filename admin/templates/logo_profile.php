<a href="quantri.php"><img id="logo" src="public/layout/resources/images/logo3.jpg" alt="Simpla Admin logo" /></a>
<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="#" title="Edit your profile">
        <?php
        @session_start();
        echo $_SESSION["fullname"];?>
    </a><br />
    <br />
    <a href="#" title="View the Site">View the Site</a> |
    <a href="quantri.php?func=exit" title="Sign Out">Sign Out</a> </div>
