<!DOCTYPE HTML>
<html>
<!--Head-->
<?php include ('theme/headtags.php');?>
<!--Head-->
<body>
    <div class="all">
    <div class="leftbar">
        <h1 class="sidebarsitename">Your Site Name Here!</h1>
    <div class="dashboard">
    <h3 class="active"><a href="determination.php?dashboard=true">Dashboard<h3>
    </div>

    <div class="users">
        <h3>Users<h3>
    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="altsidebar">
        <div class="logout">
        <h3 class="colormagenta">Log Out</h3>    
        </div>
        <div class="changeuser">
        <h3 class="colormagenta">Change User</h3>
        </div>
        </div>
    </div>
    <div class="ydo">
        <?php
        if($dashboard == true) {
            include("dashboard.php");
        } else if($user == true) {
            include("user.php")
        }
        ?>
</div>
    </div>
    <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
</body>
</html>