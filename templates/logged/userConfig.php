
<?php 
    include("../../functions/configUser.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar usuario</title>
    <link rel="shortcut icon" href="../../Osu!Favicon.ico" type="image/x-icon">
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
                        <a class="navOption" href="../../index.html">Home</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="about.html">About</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="login.html">login</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div>
            <main>
                <div class="arts">
                    <form method="post" action="../../functions/join.php" class="forForm" >
                        <label for="userName">Username</label>
                        <input class="toInput" type="text" placeholder="Seres" value="<?php echo $upName; ?>" id="userName" name="userName" required>

                        <label for="userPassword">Password</label>
                        <input class="toInput" type="password" placeholder="1234" value="<?php echo $upPass; ?>" id="userPassword" name="userPassword" required>

                        <label for="passwordConfirm">Comfirm Password</label>
                        <input class="toInput" type="password" placeholder="1234" value="<?php echo $upPass; ?>" id="passwordConfirm" name="passwordConfirm" required>

                        <label for="userEmail">Email</label>
                        <input class="toInput" type="email" placeholder="example@domain.com" value="<?php echo $upmail; ?>" id="userEmail" name="userEmail" required>

                        <br>

                        <div class="toActions">
                            <button class='toButton' type="submit" name="createSeres">Send</button>
                            <button class='toButton' type="reset">Reset</button>
                        </div>
                    </form>
                </div>

                <div class="arts">
                    <a style="color:red;" href=" userConfig.php?toDelete=<?php echo $upId; ?>">¿Borrar Cuenta?</a>
                </div>
            </main>

            <?php 
                if (isset($_GET['toDelete'])) {
                    include("../../functions/deleteUser.php");
                }
            ?>
            
        </div>
        <footer>
            <i>SACHR</i> | <a href="https://osu.ppy.sh" target="_blank">OSU!</a>
        </footer>
    </div>
</body>
</html>