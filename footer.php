<style>
    .fk_a {
        color: none;
        text-decoration: none;
    }

    .download-hero {
        color: white;
        text-decoration: none;
    }

    .download-hero a {
        color: white;
        text-decoration: none;
    }

    .download-hero:hover {
        color: #BEBEBE !important;
    }

    .download-hero a:hover {
        color: #BEBEBE;
    }
</style>


<section id="footer">


    <a class="fk_a" href="https://www.riotgames.com/en">
        <div class="download-hero"> DOWNLOAD GAME CLIENT</div>
    </a>
    <div><img src="./assets/riot-logotype-white.png" alt="" srcset=""></div>

    <div class="social-logo-container">
        <i id="social-youtube" class="fab fa-youtube"></i>
        <i id="social-instagram" class="fab fa-instagram"></i>
        <i id="social-facebook" class="fab fa-facebook"></i>
        <i id="social-discord" class="fab fa-discord"></i>

    </div>

    <p>© 2020-2024 Riot Games, Inc. Riot Games, VALORANT, and any associated logos are trademarks, service marks, and/or
        registered
        trademarks of Riot Games, Inc.</p>

    <style>
        .footer-credit-hero {
            display: flex;
            align-items: center;
        }
    </style>

    <div class="social-logo-container footer-credit-hero">
        <div>
            
        </div>
        <div>
            <p>Valorant website clone by <a href="https://www.instagram.com/d_dreaminn/">dreamdream</a>.</p>
        </div>
    </div>

    <div class="certification">
        <div>
            <img src="./assets/na-esrb.png" alt="" srcset="">
        </div>

        <div>
            <span>Blood</span>
            <span>languages</span>
            <span>Violence</span>
            <span>User Interact</span>
            <span>In-Game Purchase</span>

        </div>

    </div>
</section>

<script>
    var galleryLink = document.getElementById('social-youtube');
    galleryLink.addEventListener('click', function() {
        var newPageURL = 'https://www.youtube.com/@valorant';
        window.location.href = newPageURL;
    });

    var galleryLink = document.getElementById('social-instagram');
    galleryLink.addEventListener('click', function() {
        var newPageURL = 'https://www.instagram.com/valorant?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==';
        window.location.href = newPageURL;
    });

    var galleryLink = document.getElementById('social-facebook');
    galleryLink.addEventListener('click', function() {
        var newPageURL = 'https://www.facebook.com/VALORANTth';
        window.location.href = newPageURL;
    });

    var galleryLink = document.getElementById('social-discord');
    galleryLink.addEventListener('click', function() {
        var newPageURL = 'https://discord.gg/E6jfnvD5';
        window.location.href = newPageURL;
    });
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./app.js"></script>
</body>

</html>