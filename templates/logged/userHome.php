<?php
    include("../../functions/conection.php");
    include("../../functions/Service/noticeService.php");

    $userIdentity = $_GET['user'];
    $getNotices = new noticeService();

    $getNotices->userIdentity=$userIdentity;
    $contenido = $getNotices->getNotices(conexionPDO());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is AddUsers</title>
    <link rel="shortcut icon" href="../../Osu!Favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/logged_Styles/mainLoggedStyle.css">
    <link rel="stylesheet" href="../../styles/logged_Styles/Logged.css">
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
                        <a class="navOption" href="#">History</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="userProfile.php?user=<?php echo $userIdentity; ?>">Profile</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="userConfig.php?user=<?php echo $userIdentity; ?>">Config</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="mainAsideContend">
            <main>
                <h2>Noticias</h2>
                <br>
                    
                <?php

                while($imagenx = $contenido->fetch()) {
                    $showIMG = $imagenx['imgName'];
                // while($notices = sqlsrv_fetch_array($toGetCommand)) {
                //     $showIMG = $notices['imgName'];
                
                 ?>
                <article class="tarjeta">
                    <img class="toImg" src="../../static/image/<?php echo $showIMG;?>.jpg" alt="image <?php echo $showIMG?>">


                    <div>
                        <h4>New!!!!!!</h4>
                        <br>
                        <p>Esta es la imagen: <?php echo $showIMG; ?></p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit amet esse deleniti saepe sapiente perspiciatis eius, aliquid nulla hic odio dolores blanditiis iure possimus soluta quibusdam temporibus natus eum sunt?
                        </p>

                        <br>
                        <div class="icons">
                            <img class="modeIco" src="../../static/image/osu-icon-15.jpg" alt="icon..">
                            <img class="modeIco" src="../../static/image/osu-icon-16.jpg" alt="icon..">
                        </div>
                    </div>
                </article>
                <br>
                <?php
                     }
                ?>
            </main>
            <aside>
                <div class="asideContend">
                    <img src="../../static/image/21465_IGDB-272x380.jpg" alt="osuChan">
                </div>
            </aside>
        </div>
        <footer>
            <i>SACHR</i> | <a href="https://osu.ppy.sh" target="_blank">OSU!</a>
        </footer>
    </div>
</body>
</html>