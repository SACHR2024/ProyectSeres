<?php $userIdentity = $_GET['user']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is AddUsers</title>
    <link rel="shortcut icon" href="Osu!Favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/logged_Styles/Logged.css">
</head>
<body>
    <div class="contend">
        <header>

            <div class="divLogo">
                <img class="logo" src="static/image/Osu!_Logo_2016.svg.png" alt="Logo">
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
                        <a class="navOption" href="userConfig.php?identity=<?php echo $userIdentity; ?>">Config</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="mainAsideContend">
            <main>
                <h2>Noticias</h2>
                <article>
                    <img class="toImg" src="../../static/image/angel-halo-anime-mecha-wings-fantasy-8k-wallpaper-uhdpaper.com-619@0@j.jpg" alt="image1">


                    <div>
                        <h4>New!!!!!!</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit amet esse deleniti saepe sapiente perspiciatis eius, aliquid nulla hic odio dolores blanditiis iure possimus soluta quibusdam temporibus natus eum sunt?
                        </p>
                    </div>
                </article>
        
            </main>
            <aside>
                <div class="asideContend">
                    <img src="static/image/21465_IGDB-272x380.jpg" alt="osuChan"  height="100%">
                </div>
            </aside>
        </div>
        <footer>
            <i>SACHR</i> | <a href="https://osu.ppy.sh" target="_blank">OSU!</a>
        </footer>
    </div>
</body>
</html>