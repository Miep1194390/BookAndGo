<?php
include_once('../includes/connect.php');
session_start();
if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {

    if ($_SESSION['sess_name'] == "admin") {
        header('location:../admin/account-admin.php');
    }
} else {
    header('location:account.php');
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../media/BookAndGoLogo.jpg" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Book And Go | Dashboard</title>
</head>

<body>
    <main class='main-dashboard'>
        <div class="sidebar">
            <header><?php echo  'Ingelogd als: ' . $_SESSION['sess_user_name'] ?></header>
            <ul>
                <li>
                    <a href="index.php"></i>Book and Go</a>
                    <a href="dashboard.php">Dashboard</a>
                    <a href="vluchtenannuleren.php">Vluchten</a>
                    <a href="profiel.php">Profiel</a>
                    <a href="uitloggen.php">Uitloggen</a>
                </li>
            </ul>
        </div>
        <div class="dashboardouter">
            <div class="dashboardinner">
                <div class="dashboardbackground">
                    <div class="dashboard-header-text-outer">
                        <div class="dashboard-header-text">Book and Go | <div class="dashboard-header-text2">&nbsp;Dashboard</div></div>
                    </div>
                    <div class="dashboard-spacer"></div>
                    <div class="dashboard-middlecontent-outer">
                        <img class="dashboard-middlecontent" src="../media/pexels-troy-squillaci-2521619.jpg" alt="BookAndGo Logo">
                        <img class="dashboard-middlecontent" src="../media/pexels-pok-rie-1130221.jpg" alt="BookAndGo Logo">
                        <img class="dashboard-middlecontent" src="../media/pexels-chris-molloy-921392.jpg" alt="BookAndGo Logo">
                    </div>
                    <div class="dashboard-middlecontent-outer2">
                        <div class="dashboard-countdown-outer">
                            <div class="dashboard-timer">Zomer-kortingen geldig tot &nbsp;</div>
                            <div class="dashboard-timer2" id="timer"></div>
                            <div class="dashboard-timer">&nbsp;!</div>
                        </div>
                    </div>
                    <div class="dashboard-middlecontent-outer3">
                    </div>
                    
                </div>
            </div>
        </div>

    </main>

</body>
<script src="https://kit.fontawesome.com/426386addb.js" crossorigin="anonymous"></script>
<script src="../js/countdowntimer.js"></script>

</html>