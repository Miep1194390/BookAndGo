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
    <title>Book and Go | Over ons</title>
</head>

<body class="body_over-ons">
    <main>
        <div class="top-center">
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
                                                                        echo $_SESSION['sess_name']; ?></a></div>
                </div>
            </div>
            <div class="spacer"></div>
            <div class="below_header_over-ons">
                <div class="content_below_header">
                    <img class="img_overons" src="../media/BookAndGoLogo.jpg" alt="BookAndGoLogo">
                    <h1 class="text-content_below_header">Over BookAndGo</h1><br>
                </div>
            </div>

            <div class="over-ons_first_div">
                <div class="container_text_content">
                    <div class="text-content_below_header2">Welkom bij Book and Go</div>
                </div>
                <div class="container_text_content2">
                    <div class="content_firstdiv_over-ons">Book and Go is een low cost carrier opgericht in 1965. Al meer dan 50 jaar brengen wij passagiers naar de mooiste zaken- en vakantiebestemmingen van Europa. Book and Go is onderdeel van de Air France-KLM Groep. Dit maakt ons een van de grootste luchtvaartgroepen in Europa. </div>
                </div>
            </div>
            <div class="spacer"></div>
            <div class="spacer"></div>
            <div class="over-ons_second_div">
                <div class="content_seconddiv_over-ons">
                    <div class="quote--container">
                        <p class="quote">
                            "Goed geïnspireerd&hellip; <span class="quote--highlight">is</span> ook goed."
                        </p>
                        <p class="quote--author">&ndash; Mirza & Ilias</p>

                    </div>
                </div>


                <div class="content_seconddiv_over-ons2">
                    <img class="over-ons_ilias" src="../media/ilias.jpg" alt="">
                    <img class="over-ons_mirza" src="../media/mirza.jpg" alt="">
                </div>
            </div>
            <div class="container_reviews">
                <div class="reviews">
                    <p class="review_text">Schrijf hier je review!</p>
                    <form class="over-ons_form" action="review_redirect.php" method="POST">
                        <input class="helpdesk_form_input" type="email" required name="email_review" id="" placeholder="E-Mail">
                        <div class="helpdesk_form_input">
                            <input class="range" type="range" value="3" min="1" max="5" required name="review" oninput="this.nextElementSibling.value = this.value">
                            <output>3</output>
                        </div>
                        <input class="helpdesk_form_input" type="text" required name="beschrijving" placeholder="Beschrijving">
                        <input class="helpdesk_form_input_submit2" type="submit" name="submit_review" value="Verzenden">
                    </form>
                </div>
            </div>
    </main>
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
    <script src="../js/main.js"></script>

</html>