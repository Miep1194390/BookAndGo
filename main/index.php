<?php
include_once('../includes/connect.php')


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
    <title>Book And Go</title>
</head>

<body>

    <main>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="../media/vacationpicture1.jpg" style="width:100%; height:85vh;">
            </div>

            <div class="mySlides fade">
                <img src="../media/vacationpicture2.jpg" style="width:100%; height:85vh">
            </div>

            <div class="mySlides fade">
                <img src="../media/vacationpicture3.jpg" style="width:100%; height:85vh">
            </div>
        </div>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="slideshow-overlay">
            <div class="header_vlucht_resultaten">
                <div class="headertext_vlucht_resultatenOuter">
                    <div class="headertext_vlucht_resultaten">
                    <div class="dropdown">
                            <div class="Header-links">Beheren</div>
                            <div class="dropdown-content">
                                <div><a href="index.php">Vlucht boeken</a></div>
                                <div><a href="dashboard.php">Vlucht wijzigen</a></div>
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

            <div class="OuterPHPEngine">
                <div class="InnerPHPEngine">
                    <div class="InnerHigh"><img class="Airplane" src="../media/airplane.png" alt="Vliegtuig">
                        <h1 class="AirplaneText">Vluchten</h1>
                    </div>
                    <div class="VluchtenzoekenOuter">
                        <form class="vluchtenzoeken" name="form1" method="post" action="vluchten.php">
                            <div class="ZoekenInvoerVeldenOuter">
                                <h1 class="VluchtenZoekenHeader">Vanaf</h1>
                                <input class="Vertrekluchthaven" type="text" placeholder="Vertrekluchthaven" name="search" aria-label="Search" required>
                            </div>
                            <div class="ZoekenInvoerVeldenOuter">
                                <h1 class="VluchtenZoekenHeader">Bestemming</h1>
                                <input class="Bestemming" type="text" placeholder="Bestemming" name="search" aria-label="Search" required>
                            </div>
                            <div class="ZoekenInvoerVeldenOuter">
                                <h1 class="VluchtenZoekenHeader">Wie gaan er mee?</h1>
                                <input class="Bestemming" type="number" placeholder="1 Volwassene" aria-label="Search" min="1" max="25" required>
                            </div>
                            <div class="ZoekenInvoerVeldenOuter">
                                <h1 class="VluchtenZoekenHeader">Vertrekdatum</h1>
                                <input class="Bestemming" type="date" placeholder="Bestemming" name="indexcalender" aria-label="Search" required>
                            </div>
                            <div class="ZoekenOuter">
                                <input class="Zoeken" type="submit" value="Zoeken" name="submit"></input>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="threeboxes">
            <div class="contextbox">
                <div class="purplebox">
                    <img class="contextboximg" src="../media/corona.png" alt="">
                </div>
                <h1 class="contextboxtext1">Alles over het coronavirus</h1>
                <a href='contact.php' class="contextboxundertext">Alle informatie omtrend SARS-19</a>
                <a href='contact.php' class="contextboxundertext">De Reisvoorwaarden</a>
            </div>
            <div class="contextbox">
                <div class="greenbox">
                    <img class="contextboximg" src="../media/ticket.png" alt="">
                </div>
                <h1 class="contextboxtext2">Boeken met vertrouwen</h1>
                <a href='index.php' class="contextboxundertext">Vluchten zoeken</a>
                <a href='locaties.php' class="contextboxundertext">Locaties bekijken</a>
                <a href='account.php' class="contextboxundertext">Inloggen</a>
            </div>
            <div class="contextbox">
                <div class="redbox">
                    <img class="contextboximg" src="../media/contacthuman.png" alt="">
                </div>
                <h1 class="contextboxtext3">Vind online het antwoord op je vraag</h1>
                <a href='dashboard.php' class="contextboxundertext">Vlucht wijzigen</a>
                <a href='dashboard.php' class="contextboxundertext">Vlucht annuleren</a>
            </div>
        </div>
        <div class="underheader-vluchten">
            <div class="underheaderInner-vluchten">
                <a class="headerlinks-vluchten" href="locaties.php">Locaties</a>
                <a class="headerlinks-vluchten" href="index.php">Boeken</a>
                <a class="headerlinks-vluchten" href="klantenservice.php">Klantenservice</a>
                <a class="headerlinks-vluchten" href="over_ons.php">Over Ons</a>
            </div>
        </div>
    </main>
</body>
<script src="../js/main.js"></script>

</html>