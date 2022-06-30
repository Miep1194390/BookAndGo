<?php
include_once('../includes/connect.php');
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../mailer/Exception.php';
require '../mailer/PHPMailer.php';
require '../mailer/SMTP.php';
?>

<!DOCTYPE html>
<html class="html_boekenredirect" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../media/BookAndGoLogo.jpg" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Book And Go | Boeken</title>
</head>

<body>
    <main>
        <div class="header_vlucht_resultaten">
            <div class="headertext_vlucht_resultatenOuter">
                <div class="headertext_vlucht_resultaten">
                    <a class="header_logo" href="index.php"><img class="header_logo" src="../media/BookAndGoLogo.jpg" alt="BookAndGoLogo"></a>
                    <div class="header_logo_text">Book and Go</div>
                    <div class="dropdown">
                        <div class="Header-links">Beheren</div>
                        <div class="dropdown-content">
                            <div><a href="index.php">Vlucht boeken</a></div>
                            <div><a href="dashboard.php">Vlucht annuleren</a></div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="Header-links">Service</div>
                        <div class="dropdown-content">
                            <div><a href="klantenservice.php">Klantenservice</a></div>
                            <div><a href="contact.php">Contact</a></div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="Header-links">Account</div>
                        <div class="dropdown-content">
                            <div><a href="dashboard.php">Dashboard</a></div>
                            <div><a href="account.php">Inloggen</a></div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="Header-links">Over</div>
                        <div class="dropdown-content">
                            <div><a href="locaties.php">Locaties</a></div>
                            <div><a href="over_ons.php">Over ons</a></div>


                        </div>
                    </div>
                </div>
                <div class='session-naam'><a href="dashboard.php"><?php session_start();
                                                                    echo $_SESSION['sess_name'];
                                                                    ?></a></div>
            </div>
        </div>
        <div class="spacer2"></div>
        <div class="boekenrd-bg">
            <div class="mainbeige_vlucht_resultaten">
                <div class="resultaten">
                    <?php
                    include_once("../includes/connect.php");
                    $submit = $_POST['submit'];
                    if (!isset($submit)) {
                        header('location: index.php');
                    } else {
                        if (empty($_SESSION['sess_user_id'])) {
                            echo "<script>alert('Aub Inloggen!')</script>; <script>window.location = 'index.php'</script>";
                        } else {
                        }
                    }

                    if ($_POST['submit']) {
                        $key = $_POST['search'];
                        $query = $conn->prepare('SELECT * FROM vluchten WHERE place_departure LIKE :keyword OR place_destination LIKE :keyword ORDER BY place_departure');
                        $query->bindValue(":keyword", "%" . $key . "%", PDO::PARAM_STR);
                        $query->execute();
                        $results = $query->fetchAll();
                        $rows = $query->rowCount();

                        if ($rows != 0) {
                    ?>
                            <div class="tableinfo"></div>
                            <form method='get' action=''>
                                <?php foreach ($results as $r) { ?>

                                    <div class='tableouter'>
                                        <table class='tablevluchten'>
                                            <tr>
                                                <th>Vlucht ID</th>
                                                <th>Plaats van vertrek</th>
                                                <th>Bestemming</th>
                                                <th>Tijd van vertrek</th>
                                                <th>Tijd van aankomst</th>
                                            </tr>
                                            <tr>
                                                <td><?php echo $r['id'] ?></td>
                                                <td><?php echo $r['place_departure'] ?></td>
                                                <td><?php echo $r['place_destination'] ?></td>
                                                <td><?php echo $r['time_leaving'] ?></td>
                                                <td><?php echo $r['time_arrived'] ?></td>

                                            </tr>
                                        </table>
                                    </div>
                            </form>
                <?php
                                }
                            } else {
                                echo '<h4>Helaas er zijn geen vluchten gevonden.</h4>';
                            }
                        }
                ?>
                </div>

                <div class="boekenrd-bg">
                    <div class="account-inloggen-form">
                        <form class='account_login' action="boekenredirect.php" method="post">
                            <div>
                                <select class="account-inloggen-form-input" name="vluchtid">
                                    <?php foreach ($results as $r) { ?>
                                        <option value="<?php echo $r["id"]; ?>" placeholder="Vlucht Nummer"><?php echo $r["id"]; ?></option>
                                    <?php } ?>
                                    </select>
                            </div>
                            <div>
                                <input class='account-inloggen-form-submit' type="submit" value="Boeken" name="Boeken"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>

</html>

<?php
$key = $_POST['vluchtid'];
$query = $conn->prepare('SELECT id FROM vluchten WHERE id LIKE :keyword');
$query->bindValue(":keyword", $key, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll();
$rows = $query->rowCount();


if ($rows != 0) {
    $vluchtid = $_POST['vluchtid'];
    $sessie_id = $_SESSION['sess_user_id'];
    $sql = "INSERT INTO boekingen (boekingId, gebruikersId, vluchtId) VALUES ('', '$sessie_id', '$vluchtid')";
    $conn->exec($sql);
    header("Location: vluchtenannuleren.php");
    } else {
        header("Location: account.php");
}

?>