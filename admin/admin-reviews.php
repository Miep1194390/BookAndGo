<?php
include_once('../includes/connect.php');

session_start();
if ($_SESSION['sess_name'] == "admin") {
} else {
    header('Location: ../main/index.php');
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
                    <div class="block-header-admin3">
                        <p class="welkom_text_admin">Welkom terug: <?php echo $_SESSION['sess_name'] ?></p>
                        <?php
                        include_once("../includes/connect.php");

                        $query = "SELECT * FROM reviews";
                        $stmt = $conn->prepare($query);
                        $stmt->execute();
                        $result = $stmt->fetchAll();

                        foreach ($result as $review) { ?>
                            <form class="form-admin-crud" action="../admin/reviewsAUTH.php" method="POST">
                                <div class="id_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $review['id'] ?>" name="id" readonly />
                                    <hr>
                                </div>
                                <div class="naam_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $review['email'] ?>" name="email" />
                                    <hr>
                                </div>
                                <div class="aantal_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $review['review'] ?>" name="review" />
                                    <hr>
                                </div>
                                <div class="aantal_reservering">
                                    <input class="input-admin-crud" type="text" value="<?php echo $review['beschrijving'] ?>" name="beschrijving" />
                                    <hr>
                                </div>
                                <div class="update">
                                    <button class="update" type="submit" name="update">Wijzigen</button>
                                </div>
                                <div class="delete">
                                    <button class="delete" type="submit" name="delete">
                                        <p>Wissen</p>
                                    </button>
                                </div>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
    </main>
</body>
<script src="https://kit.fontawesome.com/426386addb.js" crossorigin="anonymous"></script>

</html>