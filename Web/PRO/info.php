<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/info.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">

    <title>Document</title>
</head>
<body>
    
    <?php include('header.php'); ?>
    <div class="banner">
        <img src="IMG/infopage banner.png" alt="">
    </div>

    <main>

        <section id="section-one">
            <div class="section-block">
                <!-- <div class="banner">
                    <img src="IMG/infopage banner.png" alt="">
                </div> -->
                <div class="block-text">
                    <p>
                        Houd jij van Formule 1 kijken? Droom jij er wel eens van om zelf in een Formule 1 auto te rijden?
                        Dat kan! Meldt je nu aan voor de opleiding Race car driver en wordt de volgende Max Verstappen!
                    </p>
                </div>
            </div>

            <div class="nav">
                <div class="nav-sticky">
                    <ul>
                        <li><a href="#">De opleiding</a></li>
                        <li><a href="#section-two">Toelatingseisen</a></li>
                        <li><a href="#section-three">Praktische informatie</a></li>
                        <li><a href="#section-four">Inschrijven</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="section-two">
            <div class="section-header">
                <div class="header-img">
                    <img src="IMG/image 3.png" alt="">
                </div>
                <div class="header-title">
                    <span>Vooropleiding en toelating</span>
                </div>
            </div>
            <div class="text-wrapper">
                <div class="text-1">
                    <p>
                        Geldt één van de onderstaande situaties voor jou? Dan mag je je aanmelden voor deze opleiding:
                    </p>
                </div>
                <div class="text-2">
                    <ul>
                        <li><span>Je hebt een diploma vmbo kader, GL, TL of MAVO</span></li>
                        <li><span>Je hebt een overgangsbewijs van havo 3 naar havo 4</span></li>
                        <li><span>Diploma mbo niveau 2 of 3</span></li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="section-three">
            <div class="section-header">
                <div class="header-img">
                    <img src="IMG/image 4.png" alt="">
                </div>
                <div class="header-title">
                    <span>Praktische informatie</span>
                </div>
            </div>
            <div class="text-wrapper">
                <div class="wrap">
                    <span>Duur:</span>
                    <span>4 jaar</span>
                </div>
                <div class="wrap">
                    <span>Start:</span><span>aug/sept 2021</span>
                </div>
                <div class="wrap">
                    <span>Locatie:</span><span>Circuit Zandvoort</span>
                </div>
            </div>
        </section>
        <section id="section-four">
            <div class="section-block">
                <div class="block-text">
                    <span>Lijkt deze opleiding iets voor jou?</span>
                </div>
                <div class="block-button">
                    <button>Schrijf je nu in!</button>
                </div>
            </div>
        </section>

    </main>

    <?php include('footer.php'); ?>

</body>
</html>