
<?php
    include("../../functions/conection.php");

    $toConexion = conexionSqlsrv();
    $userIde = $_GET['user'];

    if ($userIde > 0) {
        $target = "SELECT * FROM seresUsers2 WHERE serID = $userIde";
        $toGet = sqlsrv_query($toConexion, $target);

        $user = sqlsrv_fetch_array($toGet);
        
        $oldName = $user['serName'];
        $oldPass = $user['serPassword'];
        $oldMail = $user['serEmail'];

    }else {
        $oldName = "Usuario no encontrado";
        $oldPass = "Usuario no encontrado";
        $oldMail = "Usuario no encontrado";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar usuario</title>
    <link rel="shortcut icon" href="../../Osu!Favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/logged_Styles/mainLoggedStyle.css">
    <link rel="stylesheet" href="../../styles/logged_Styles/formsLoggedStyles.css">
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
                        <a class="navOption" href="./userHome.php?user=<?php echo $userIde; ?>">Home</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="about.html">History</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="login.html">Profile</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="mainAsideContend">
            <main>
                <div class="arts">
                    <form method="post" action="../../functions/loggedFuntions/configUser.php" class="forForm" >

                        <input type="hidden" value="<?php echo $userIde; ?>" name="userID" readOnly required>

                        <label for="userName">Username</label>
                        <input class="toInput" type="text" placeholder="Seres" value="<?php echo $oldName; ?>" id="userName" name="userName" required>

                        <label for="userPassword">Password</label>
                        <input class="toInput" type="password" placeholder="1234" value="<?php echo $oldPass; ?>" id="userPassword" name="userPassword" required>

                        <label for="passwordConfirm">Comfirm Password</label>
                        <input class="toInput" type="password" placeholder="1234" value="<?php echo $oldPass; ?>" id="passwordConfirm" name="passwordConfirm" required>

                        <label for="userEmail">Email</label>
                        <input class="toInput" type="email" placeholder="example@domain.com" value="<?php echo $oldMail; ?>" id="userEmail" name="userEmail" required>

                        <br>

                        <div class="toActions">
                            <button class='toButton' type="submit" name="updateSeres">Send</button>
                        </div>
                    </form>
                </div>

                <div style="margin-bottom:10px;">
                    <a style="color:red;" href=" userConfig.php?toDelete=<?php echo $userIde; ?>">¿Borrar Cuenta?</a>
                </div>
            </main>

            <?php 
                if (isset($_GET['toDelete'])) {
                    include("../../functions/loggedFuntions/deleteUser.php");
                }
            ?>
            
        </div>
        <footer>
            <i>SACHR</i> | <a href="https://osu.ppy.sh" target="_blank">OSU!</a>
        </footer>
    </div>
</body>
</html>