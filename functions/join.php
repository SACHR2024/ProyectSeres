<?php 

    include("./conection.php");

    if (isset($_POST['createSeres'])) {
        $nameUser = $_POST['userName'];
        $passwordUser = $_POST['userPassword'];
        $confirmPassordU = $_POST['passwordConfirm'];
        $emailUser = $_POST['userEmail'];

        if ($passwordUser == $confirmPassordU) {

            $Query = "EXEC SeresCreate'$nameUser', '$passwordUser', '$emailUser'";

            $execQuery = sqlsrv_query(conexionSqlsrv(), $Query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddUsers</title>
    <link rel="shortcut icon" href="../Osu!Favicon.ico" type="image/x-icon">
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

                <div class="forForm">
                    <?php 
                        if ($execQuery) {
                            echo "<img src='../static/image/success-icon-23194.png' alt='Success'> <br> <h2 style='color:green'>Success</h2> <br>";
                        }else {
                            echo "<img src='../static/image/error-icon-25266.png' alt='Error'> <br> <h2 style='color:red'>Error..</h2> <br>";
                        }
                    }
                    ?>

                    <div class="navButton">
                        <a class="navOption" href="../index.html">Return</a>
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
<?php 
    }else{
        echo "<h3>Error: 222</h3>";
        header("refresh:2; url=http://localhost/proyectSeres/templates/join.html");
    } 
