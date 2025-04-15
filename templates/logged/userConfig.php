
<?php
    include("../../functions/conection.php");

    session_name("seresUser");
    session_start();

    $toConexion = conexionSqlsrv();
    define("NODATA", "usuario no encontrado");

    if ($_SESSION['identity'] > 0) {
        
        $target = "EXEC userSelected " . $_SESSION['identity'];
        $toGet = sqlsrv_query($toConexion, $target);

        $user = sqlsrv_fetch_array($toGet);
        $oldName = $user['serName'];
        $oldPass = $user['serPassword'];
        $oldMail = $user['serEmail'];

    }else {
        $oldName = NODATA;
        $oldPass = NODATA;
        $oldMail = NODATA;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuracion</title>
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
                    <a class="navOption" href="about.html">History</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="userProfile.php">Profile</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="./userHome.php">Home</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="mainAsideContend">
            <main>
                <div class="arts">
                    <form method="post" action="../../functions/loggedFuntions/configUser.php" class="forForm" enctype="multipart/form-data" >

                        <input type="hidden" value="<?php echo $userIdentity; ?>" name="userID" readOnly required>

                        <label for="userName">Username</label>
                        <input class="toInput" type="text" placeholder="Seres" value="<?php echo $oldName; ?>" id="userName" name="userName" required>

                        <label for="userPassword">Password</label>
                        <input class="toInput" type="password" placeholder="1234" value="<?php echo $oldPass; ?>" id="userPassword" name="userPassword" required>

                        <label for="passwordConfirm">Comfirm Password</label>
                        <input class="toInput" type="password" placeholder="1234" value="<?php echo $oldPass; ?>" id="passwordConfirm" name="passwordConfirm" required>

                        <label for="userEmail">Email</label>
                        <input class="toInput" type="email" placeholder="example@domain.com" value="<?php echo $oldMail; ?>" id="userEmail" name="userEmail" required>

                        <label for="userProfileImage">imagen de perfil</label>
                        <input class="toInput" type="file" placeholder="example@domain.com" value="<?php echo $_SESSION['profile_image']; ?>" id="userProfileImage" name="userProfileImage">

                        <label for="userProfileBG">fondo de perfil</label>
                        <input class="toInput" type="file" placeholder="example@domain.com" value="<?php echo $_SESSION['profile_image']; ?>" id="userProfileBG" name="userProfileBG">

                        <br>

                        <div class="toActions">
                            <button class='toButton' type="submit" name="updateSeres">Send</button>
                        </div>
                    </form>
                </div>

                <div style="margin-bottom:10px;">
                    <a style="color:red;" href=" userConfig.php?toDelete=<?php echo $userIdentity; ?>">¿Borrar Cuenta?</a>
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