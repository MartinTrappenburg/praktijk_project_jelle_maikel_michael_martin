<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    
    <title>Race-opleiding</title>
</head>
<body>
    
    <?php include('header.php'); ?>

    <main>

        <div class="andere_opleidingen">
            <a href="https://www.mboutrecht.nl/opleidingen/" target="_blank">
        
                <div class="arrow">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.097631 7.68342 -0.097631 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM2 7H1L1 9H2L2 7Z" fill="black"/>
                    </svg>     
                </div>
                <div class="text">
                    Bekijk alle opleidingen
                </div>

            </a>
        </div>

        <div class="race-car">
            <img src="IMG/F1_car.png" alt="">
        </div>
        <div class="road">
            <img src="IMG/Road.png" alt="">
        </div>

        <div class="main_text">
            <div class="text">
                Do you want to be a <span>race car driver?</span>
            </div>
            <div class="button">
                <button onclick="location.href='info.php'">
                    Tell me more!
                    <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807611 1.97919 0.807611 1.3934 1.3934C0.807611 1.97919 0.807611 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807611 21.0711 0.807611 22.0208 1.3934 22.6066C1.97919 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM11 13.5H12V10.5H11V13.5Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="block_bg">
            
        </div>

    </main>

    <?php include('footer.php'); ?>

</body>
</html>