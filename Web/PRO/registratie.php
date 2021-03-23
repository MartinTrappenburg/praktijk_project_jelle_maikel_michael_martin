<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/registratie.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">

    <title>Document</title>
</head>
<body>
    
    <?php include('header.php'); ?>

    <main>
    
        <div class="banner">
            <img src="IMG/image 5.png" alt="">
        </div>

        <div class="form">
            <div class="main-text">
                <div class="inschrijven-text">
                    <span>Inschrijven</span>
                </div>
                <div class="opleiding-text">
                    <span>Opleiding</span>
                    <span>Race car driver</span>
                </div>
            </div>
            <div class="form-inner">
                <form action="">
                    <div class="input-wrapper">
                        <label for="">Voornaam:</label>
                        <input type="text" placeholder="Voornaam">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Achternaam:</label>
                        <input type="text" placeholder="Achternaam">
                    </div>
                    
                    <div class="input-wrapper">
                        <label for="">Email:</label>
                        <input type="email" placeholder="Email">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Geboortedatum:</label>
                        <input type="date">
                    </div>

                    

                    

                    
                    <button type="submit" class="submit-button">
                        Inschrijven
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289L9.34315 0.928932C8.95262 0.538408 8.31946 0.538408 7.92893 0.928932C7.53841 1.31946 7.53841 1.95262 7.92893 2.34315L13.5858 8L7.92893 13.6569C7.53841 14.0474 7.53841 14.6805 7.92893 15.0711C8.31946 15.4616 8.95262 15.4616 9.34315 15.0711L15.7071 8.70711ZM0 9L15 9V7L0 7L0 9Z" fill="white"/>
                        </svg>
                    </button>

                    
                </form>
            </div>
        </div>

    </main>

    <?php include('footer.php'); ?>

</body>
</html>