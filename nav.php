<?php require 'header.php'; ?>

<body>

    <nav id="navbar">
        <div class="navbar-container">
            <div class="riot-logo-conatiner">
                <div class="riot-logo"></div>
            </div>
            <div class="nav-links">
                <div class="nav-items">

                    <script src="navigation.js"></script>

                    <div class="main-navs" onclick="navigate('MEDIA')">MEDIA</div>
                    <div class="main-navs" onclick="navigate('WE ARE VALORANT')">WE ARE VALORANT</div>
                    <div class="main-navs" onclick="navigate('AGENTS')">AGENTS</div>
                    <div class="main-navs" onclick="navigate('MAPS')">MAPS</div>
                    <div class="main-navs" onclick="navigate('CHAMPIONS')">CHAMPIONS</div>
                    


                </div>
                <div class="right-nav-btns">
                    <div class="globe-cover"><i class="fas "></i></div>
                    <div id="play-now" class="play-now-button">PLAY NOW</div>
                    <script>
                        var galleryLink = document.getElementById('play-now');
                        galleryLink.addEventListener('click', function() {
                            var newPageURL = 'https://authenticate.riotgames.com/?client_id=prod-xsso-playvalorant&code_challenge=LR_6NGGwJpUGjA0hmkRD9eCfr-h-bR7JJF_lOcHzpGg&method=riot_identity_signup&platform=web&redirect_uri=https%3A%2F%2Fauth.riotgames.com%2Fauthorize%3Fclient_id%3Dprod-xsso-playvalorant%26code_challenge%3DLR_6NGGwJpUGjA0hmkRD9eCfr-h-bR7JJF_lOcHzpGg%26code_challenge_method%3DS256%26prompt%3Dsignup%26redirect_uri%3Dhttps%253A%252F%252Fxsso.playvalorant.com%252Fredirect%26response_type%3Dcode%26scope%3Dopenid%2520account%2520email%26show_region%3Dtrue%26state%3D509cfeb7488915e8670a445f50%26uri%3Dhttps%253A%252F%252Fplayvalorant.com%252Fen-us%252Fdownload&show_region=true';
                            window.location.href = newPageURL;
                        });
                    </script>

                </div>


                <div class="tablet-nav-items">

                    <div class="logo-cover">

                        <div class="mobile-nav-valo-logo">
                            <img src="./assets/Valorant_logo-White.png" alt="" srcset="">
                        </div>
                    </div>

                    <div class="tablet-right-nav-btns">
                        <div class="globe-cover"><i class="fas fa-globe"></i></div>
                        <div class="hambuger-icon">

                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </nav>