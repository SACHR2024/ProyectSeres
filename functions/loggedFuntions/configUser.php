<?php
    include("../conection.php");
    include("../class/seresUser.php");

    if (isset($_POST['updateSeres'])) {
        $toConect = conexionPDO();
        $userActions = new SeresUser();
        $userActions->idUser = $_POST['userID'];
        $userActions->nameUser = $_POST['userName'];
        $userActions->passwordUser = $_POST['userPassword'];
        $userActions->emailUser = $_POST['userEmail'];
        $passwordConfirm = $_POST['passwordConfirm'];

        $updateResp = $userActions->UpdateUser($toConect, $passwordConfirm);
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddUsers</title>
    <link rel="shortcut icon" href="../Osu!Favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/formsStyles.css">
</head>
<body>
    <div class="contend">
        <header>

            <div class="divLogo">
                <img class="logo" src="../../static/image/Osu!_Logo_2016.svg.png" alt="Logo">
            </div>
    
            <nav>
                <ul class="navigator">
                    <li class="navButton">
                        <a class="navOption" href="index.html">Home</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="templates/about.html">About</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="templates/login.html">login</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="mainAsideContend">
            <main>
            <div class="arts">

                <div class="forForm">
                    <?php 
                        if ($updateResp) {
                            echo "<img src='../../static/image/success-icon-23194.png' alt='Success'> <br> <h2 style='color:green'>Success</h2> <br>";
                        }else {
                            echo "<img src='../../static/image/error-icon-25266.png' alt='Error'> <br> <h2 style='color:red'>Error..</h2> <br>";
                        }
                    }
                    ?>

                    <div class="navButton">
                        <a class="navOption" href="../../templates/logged/userHome.php?user=<?php echo $userActions->idUser; ?>">Return</a>
                    </div>
                </div>

            </div>
            </main>
        </div>
        <footer>
            <i>SACHR</i> | <a href="https://osu.ppy.sh" target="_blank">OSU!</a>
        </footer>
    </div>
</body>
</html>
    