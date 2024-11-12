<?php 

    include("conection.php");

    if (isset($_POST['createSeres'])) {
        $nameUser = $_POST['userName'];
        $passwordUser = $_POST['userPassword'];
        $confirmPassordU = $_POST['passwordConfirm'];
        $emailUser = $_POST['userEmail'];
        $BirthdayUser = $_POST['userbirthday'];
        $genderUser = $_POST['userGender'];

        if ($passwordUser == $confirmPassordU) {

            $Query = "insert into seresUsers vales ('$nameUser', '$passwordUser', '$emailUser', '$BirthdayUser', '$genderUser', 0);";

            $execQuery = sqlsrv_query($TheConexion, $Query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddUsers</title>
    <link rel="shortcut icon" href="Osu!Favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/formsStyles.css">
</head>
<body>
    <div class="contend">
        <header>

            <div class="divLogo">
                <img class="logo" src="../static/image/Osu!_Logo_2016.svg.png" alt="Logo">
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
                <?php 
                    if ($execQuery) {
                        echo "<img src='../static/image/success-icon-23194.png' alt='Success'> <br> <h2 style='color:green'>Success</h2>";
                    }else {
                        echo "<img src='../static/image/error-icon-25266.png' alt='Error'> <br> <h2 style='color:red'>Error..</h2>";
                    }
                ?>
            </div>
            </main>
        </div>
        <footer>
            <i>SACHR</i> | <a href="https://osu.ppy.sh" target="_blank">OSU!</a>
        </footer>
    </div>

    <?php 
        }
    } ?>
</body>
</html>