<?php
error_reporting(0);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Book and Go | Klantenservice</title>
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
        <div class="klantenservicewhitebg">
            <div class="klantenservice-whitebginner">
                <div class="klantenservice-text-outer">
                    <div class="klantenservice-text">Contact met het</div>
                    <div class="klantenservice-text3">BookAndGo</div>
                    <div class="klantenservice-text4">Contact Team</div>
                </div>
            </div>
            <div class="klantenservice-whitebginner">
                <div class="klantenservice-socialmedia">
                    <div class="klantenservice-socialmedia-contentboxes">
                        <i class="fa fa-whatsapp" aria-hidden="true" style="font-size:60px;color:#00d66c"></i>
                        <div class="klantenservice-socialmedia-text">Neem Contact met ons op via +31 682713669</div>
                    </div>
                    <div class="klantenservice-socialmedia-contentboxes">
                        <i class="fa fa-instagram" style="font-size:60px;color:#ff3268"></i>
                        <div class="klantenservice-socialmedia-text2">Volg ons op instagram voor de laatste nieuwtjes!</div>
                    </div>
                    <div class="klantenservice-socialmedia-contentboxes">
                        <i class="fa fa-twitter" style="font-size:60px;color:#1DA1F2"></i>
                        <div class="klantenservice-socialmedia-text3">Geinteresseerd in serieuzere zaken? Bekijk ons twitter account!</div>
                    </div>
                </div>
            </div>
        </div>
        <div id='klantenservice-form-outerid' class='klantenservice-form-outer'>
            <div class='klantenservice-form-text'>Stuur ons een mailtje!</div>
            <div class='klantenservice-form-inner'>
                <form class='klantenservice-form' action="../mailer/mailer.php" method="POST">
                    <div>
                        <input class='account-inloggen-form-input' type="email" name="mail" placeholder="E-Mail" required>
                    </div>
                    <div>
                        <input class='account-inloggen-form-input' type="text" name="subject" placeholder="Onderwerp" required>
                    </div>
                    <div>
                        <textarea class='account-inloggen-form-input' name="text" rows="3" placeholder="Bericht" style="resize: none;" required></textarea>
                    </div>
                    <div>
                        <button class="account-inloggen-form-submit" type="submit">Verzenden</button>
                    </div>
                </form>
            </div>
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
    </main>
    
    <script src="../js/main.js"></script>
    <script></script>
</html>