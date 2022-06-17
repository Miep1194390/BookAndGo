<?php
include_once('../includes/connect.php');
session_start();
if ($_SESSION['sess_name'] == "admin") {
} else {
    header('location:index.php');
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
    <title>Book And Go | Admin</title>
</head>

<body>
    <main class="main-dashboard-admin">
        <div class="sidebar-admin">
            <header>BookAndGo | Admin Panel</header>
            <ul class="admin">
                <li>
                    <a href="../main/index.php"><i class="fa-solid fa-house-user"></i>Book and Go</a>
                    <a href="../admin/account-admin.php"><i class="fa-solid fa-eye"></i>Accounts - C.R.U.D</a>
                    <a href="../admin/vluchten-admin.php"><i class="fa-solid fa-sliders"></i>Vluchten - C.R.U.D</a>
                    <a href="../admin/boekingen-admin.php"><i class="fa-solid fa-sliders"></i>Boekingen - C.R.U.D</a>
                    <a href="../admin/admin-reviews.php"><i class="fa-solid fa-eye"></i>Reviews inzien</a>
                    <a href="../main/uitloggen.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Uitloggen</a>
            </ul>
        </div>
        <div class="dashboardouter-admin">
            <div class="dashboardinner-admin">
                <div class="flex">
                    <div class="block-header-admin2">
                        <p class="welkom_text_admin">Welkom terug: </p>
                        <div class="username_echo"><?php echo $_SESSION['sess_name'] ?></div>
                        <h2 class="boekingen_text_admin" >Klant Boekingen</h1>

                        <?php
                        $query = $conn->prepare('SELECT vluchtId FROM boekingen WHERE gebruikersId > 1 ');
                        $query->bindColumn('vluchtId', $vluchtId);
                        $query->execute();
                        $results = $query->fetchAll();
                        $rows = $query->rowCount();
                        $stmt = $conn->prepare("SELECT * FROM vluchten WHERE id = '" . $vluchtId . "'");
                        $stmt->execute();
                        $resultaten = $stmt->fetchAll();
                        $rows = $stmt->rowCount();


                        foreach ($resultaten as $r) {
                        ?>
                            <form class="form-admin-crud" action="../admin/boekingenAUTH.php" method="POST">
                                <div class="id_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $r['id'] ?>" name="vluchtId" readonly />
                                    <hr>
                                </div>
                                <div class="naam_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $r['place_departure'] ?>" name="place_departure" />
                                    <hr>
                                </div>
                                <div class="aantal_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $r['place_destination'] ?>" name="place_destination" />
                                    <hr>
                                </div>
                                <div class="telnummer_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $r['time_arrived'] ?>" name="time_arrived" />
                                    <hr>
                                </div>
                                <div class="bericht_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $r['time_leaving'] ?>" name="time_leaving" />
                                    <hr>
                                </div>
                                <div class="datum_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $r['seats'] ?>" name="seats" />
                                    <hr>
                                </div>
                                <div class="delete">
                                    <button class="delete" type="submit" name="delete"><p>Annuleren</p></button>
                                </div>
                            </form>

                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="https://kit.fontawesome.com/426386addb.js" crossorigin="anonymous"></script>

</html>