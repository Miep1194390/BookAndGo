<?php
include_once('../includes/connect.php');
session_start();
if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {

    if ($_SESSION['sess_name'] == "admin") {
        header('location:admin.php');
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
    <title>Book And Go | Profiel</title>
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
                        <div class="dashboard-header-text">Book and Go | <div class="dashboard-header-text2">&nbsp;Profiel</div>
                        </div>
                    </div>
                    <div class="dashboard-spacer"></div>
                    <?php
                    $sessie_id = $_SESSION['sess_user_id'];
                    $query = $conn->prepare('SELECT * FROM users WHERE id = :sessie_id ');
                    $query->bindParam(':sessie_id', $sessie_id);
                    $query->execute();
                    $resultaten = $query->fetchAll();
                    $rows = $query->rowCount();

                    foreach ($resultaten as $r) { ?>
                        <table class='table_dashboard'>
                            <form action="../admin/usersAUTH.php" method="post">
                                <tr>
                                    <th>Email</th>
                                    <th>Gebruikersnaam</th>
                                    <th>Wachtwoord</th> 
                                    <th>Naam</th>
                                </tr>
                                <td><input type="text" value="<?php echo $r['email'] ?>" name="email" /></td>
                                <td><input type="text" value="<?php echo $r['username'] ?>" name="username" /></td>
                                <td><input type="text" value="<?php echo $r['password'] ?>" name="password" /></td>
                                <td><input type="text" value="<?php echo $r['name'] ?>" name="name" /></td>
                        </table>
                        <div class="update">
                            <button class="update" type="submit" name="update2">Wijzigen</button>
                        </div>
                        </form>

                    <?php
                    }
                    ?>



                </div>
            </div>
        </div>

    </main>

</body>
<script src="https://kit.fontawesome.com/426386addb.js" crossorigin="anonymous"></script>
<script src="../js/countdowntimer.js"></script>

</html>