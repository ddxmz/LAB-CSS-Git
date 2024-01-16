<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>

<section>

    <div class="video-container">
        <div class="main-video">
            <video id="cinematic_" preload="true" autoplay loop muted>
                <source src="./assets/RECKONING __ Episode 8 Cinematic - VALORANT.mp4" type="video/mp4">
            </video>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var video = document.getElementById("cinematic_");
                video.currentTime = 199;
            });
        </script>

        <div class="main-text-container">
            <p></p>
            <div class="valo-main-logo-container">
                <img src="./assets/Valorant_logo-White.png" alt="" srcset="">
            </div>


            <div class="btn-border">



                <button id="play-free" class="play-free-btn">

                    PLAY FREE
                    <div class="button-dot"></div>
                    <script>
                        var galleryLink = document.getElementById('play-free');
                        galleryLink.addEventListener('click', function() {
                            var newPageURL = 'https://authenticate.riotgames.com/?client_id=prod-xsso-playvalorant&code_challenge=LR_6NGGwJpUGjA0hmkRD9eCfr-h-bR7JJF_lOcHzpGg&method=riot_identity_signup&platform=web&redirect_uri=https%3A%2F%2Fauth.riotgames.com%2Fauthorize%3Fclient_id%3Dprod-xsso-playvalorant%26code_challenge%3DLR_6NGGwJpUGjA0hmkRD9eCfr-h-bR7JJF_lOcHzpGg%26code_challenge_method%3DS256%26prompt%3Dsignup%26redirect_uri%3Dhttps%253A%252F%252Fxsso.playvalorant.com%252Fredirect%26response_type%3Dcode%26scope%3Dopenid%2520account%2520email%26show_region%3Dtrue%26state%3D509cfeb7488915e8670a445f50%26uri%3Dhttps%253A%252F%252Fplayvalorant.com%252Fen-us%252Fdownload&show_region=true';
                            window.location.href = newPageURL;
                        });
                    </script>

                </button>
            </div>

        </div>

    </div>
    </div>


</section>


<!-- **********************************NEWS SECTION************************************** -->

<section id="news-container">
    <div class="backgrond-container">
        <div class="main-bg-text">
            <p class="mb-0">WE ARE <br> </p>
            <P class="mb-0">VALORANT</P>
        </div>


        <div class="latest-news">LATEST NEWS</div>
        <div class="news-cards-container">
            <div class="news-card">
                <div class="card-img" id="news-navigate-1">
                    <div class="overlayBox "></div>
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blteb9f6c0679d1db4e/659715d12d2612f223e75ceb/EP8_Act_1_Outlaw-Deep-Dive-Article_1920x1080.jpg?auto=webp&disable=upscale&width=390" alt="" srcset="">
                </div>
                <div class="card-info">
                    <span class="publish-date">09/01/24</span>
                    <span class="news-category">GAME UPDATES</span>
                    <h4 class="news-heading">A NEW ADDITION TO THE ARSENAL:
                        <br>OUTLAW INSIGHTS
                    </h4>
                </div>

            </div>
            <div class="news-card">
                <div class="card-img" id="news-navigate-2">
                    <div class="overlayBox "></div>
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt0750736bd8247a67/659894f8254eff4d79747d6c/8-1-Kickoff-Textless-Thumb-V2.jpg?auto=webp&amp;disable=upscale&amp;height=690" alt="" srcset="">
                </div>
                <div class="card-info">
                    <span class="publish-date">09/01/24</span>
                    <span class="news-category">GAME UPDATES</span>
                    <h4 class="news-heading">TAKE THE LEAD//EPISODE 8:ACT |
                        <br>KICK OFF - VALORANT
                    </h4>
                </div>

            </div>
            <div class="news-card">
                <div class="card-img" id="news-navigate-3">
                    <div class="overlayBox "></div>
                    <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt50b907680c36b068/6595f28fbe5d26aff965a0f1/EP8_Act_1_Patch-Notes-8_0_1920x1080.jpg?auto=webp&disable=upscale&width=390" alt="" srcset="">
                </div>
                <div class="card-info">
                    <span class="publish-date">09/01/24</span>
                    <span class="news-category">GAME UPDATES</span>
                    <h4 class="news-heading">VALORANT PATCH NOTES 8.0</h4>
                </div>

            </div>

        </div>

    </div>

</section>


<script>
    var galleryLink = document.getElementById('news-navigate-1');
    galleryLink.addEventListener('click', function() {
        var newPageURL = 'https://playvalorant.com/en-us/news/game-updates/a-new-addition-to-the-arsenal-outlaw-insights/';
        window.location.href = newPageURL;
    });

    var galleryLink = document.getElementById('news-navigate-2');
    galleryLink.addEventListener('click', function() {
        var newPageURL = 'https://www.youtube.com/watch?v=iq4A2z6rUxQ&ab_channel=VALORANT';
        window.location.href = newPageURL;
    });

    var galleryLink = document.getElementById('news-navigate-3');
    galleryLink.addEventListener('click', function() {
        var newPageURL = 'https://playvalorant.com/en-us/news/game-updates/valorant-patch-notes-8-0/';
        window.location.href = newPageURL;
    });
</script>

<section>
    <div class="abstract">
        <div class="left-sqare"></div>
        <div class="top-line"></div>
        <div class="right-sqare"></div>
    </div>
</section>

<?php require 'footer.php'; ?>