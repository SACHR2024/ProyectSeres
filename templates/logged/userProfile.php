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
    <title>Profile</title>
    <link rel="shortcut icon" href="../../Osu!Favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/logged_Styles/profile.css">
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
                        <a class="navOption" href="userHome.php?user=<?php echo $userIdentity; ?>">Home</a>
                    </li>
                    <li class="navButton">
                        <a class="navOption" href="userConfig.php?user=<?php echo $userIdentity; ?>">Config</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="mainAsideContend">
            <main class="profileMain">
               <div class="profileBackground">
                        <img class="profileImage" src="../../static/image/profileTest.jpg" alt="profile">
                        <h2>UserName</h2>
               </div>
               <div class="profileInfo">
                <div>
                    <p>biografia, etc</p>
                </div>
                <div>
                    <p>historial de mapas</p>
                </div>
                <div>
                    <p>rango y nivel</p>
                </div>
               </div>
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