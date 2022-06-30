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
  <title>Book and Go | Vluchten</title>
</head>

<body>
  <main>
  <div class="header_vlucht_resultaten">
                <div class="headertext_vlucht_resultatenOuter">
                    <div class="headertext_vlucht_resultaten">
                    <a class="header_logo" href="index.php" ><img class="header_logo" src="../media/BookAndGoLogo.jpg" alt="BookAndGoLogo"></a>
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
                </div>
            </div>
        </div>

    <div class="spacer2"></div>
    <div class="mainbeige_vlucht_resultaten">
      <div class="resultaten">
        <?php
        include_once("../includes/connect.php");
        session_start();
        $submit = $_POST['submit'];
        if (!isset($submit)) {
          header('location: index.php');
        } else {
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
        <?php foreach ($results as $r) {
              echo "<form method='get' action='boeken.php'>";
              echo "<div class='tableouter'>";
              echo "<table class='tablevluchten'>";
              echo "<tr>";
              echo "<td>" . $r['id'] . "</td>";
              echo "<td>" . $r['place_departure'] . "</td>";
              echo "<td>" . $r['place_destination'] . "</td>";
              echo "<td>" . $r['time_leaving'] . "</td>";
              echo "<td>" . $r['time_arrived'] . "</td>";
              echo "</tr>";
              echo "</table>";
              echo "</div>";
              echo "</form>";
            }
          } else {
            echo '<h4>Helaas er zijn geen vluchten gevonden.</h4>';
          }
        }
        ?>



      </div>

      <div class="VluchtBoekenButtonOuter">
        <form class='VluchtBoekenButtonOuter' action="boeken.php">
          <input class="VluchtboekenButton" type="submit" value="Boeken" name="Boekengaan"></input>
        </form>

      </div>
    </div>

    <footer>
        <div class="underheader-vluchten">
            <div class="underheaderInner-vluchten">
                <a class="headerlinks-vluchten" href="locaties.php">Locaties</a>
                <a class="headerlinks-vluchten" href="index.php">Boeken</a>
                <a class="headerlinks-vluchten" href="klantenservice.php">Klantenservice</a>
                <a class="headerlinks-vluchten" href="over_ons.php">Over Ons</a>
            </div>
        </div>
        </footer>
    </div>
    </div>
    </div>