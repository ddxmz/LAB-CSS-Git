<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>



<section id="middle-heading">

    <div class="middle-heading-conatiner">

        <div class="abstract2">
            <div class="top-line2"></div>
            <div class="middle-sqare"></div>
        </div>

        <div class="middle-heading">
            <div class="heading-text"> VALORANT MAP</div>
            <div class="abstract3">
                <p class="mb-0">VLRT PR0T0C0L</p>
                <p class="mb-0">MR0C - SWD - BR4</p>
                <div></div>
            </div>
        </div>

    </div>


</section>




<section id="middle-heading">


    <div class="middle-heading-conatiner middle-heading-conatiner-hero">
        <div class="title-map-box-hero">
            <div class="title-map-hero">
                <button id="icebox-button" class="map-button-hero">
                    <div class="middle-heading">
                        <div class="heading-text heading-text-hero">ICEBOX</div>
                    </div>
                </button>
                <button id="haven-button" class="map-button-hero">
                    <div class="middle-heading">
                        <div class="heading-text heading-text-hero">HAVEN</div>
                    </div>
                </button>
                <button id="ascent-button" class="map-button-hero">
                    <div class="middle-heading">
                        <div class="heading-text heading-text-hero">ASCENT</div>
                    </div>
                </button>
            </div>
        </div>
    </div>


</section>


<section id="your-maps">


    <div class="map-section" id="icebox-section">
        <div class="vertical-abstract">
            <div><img src="./assets/top-abstract.png" alt="" srcset=""></div>
            <div><img src="./assets/bottom-abstract.png" alt="" srcset=""></div>
        </div>
        <div class="white-map-gradient">
            <div class="btn-border btn-border-black bottom-btn-mobo">
                <button class="play-free-btn">
                    VIEW ALL MAPS
                    <div class="button-dot"></div>
                </button>
            </div>
        </div>
        <div class="map-section-container-icebox">
            <div class="your-maps your-maps-hero">
                <div class="map-top-line"></div>
                <div class="your-maps-heading">ICEBOX</div>
                <p id="galleryLink">VIEW GALLERY</p>
                <p>Each map is a playground to showcase your creative thinking. Purpose-built for team strategies,
                    spectacular plays, and
                    clutch moments. Make the play others will imitate for years to come.</p>

                <div class="map-video-hero">
                    <video preload="true" autoplay loop muted class="video-frame">
                        <source src="./assets/icebox.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <div class="map-section" id="haven-section">
        <div class="vertical-abstract">
            <div><img src="./assets/top-abstract.png" alt="" srcset=""></div>
            <div><img src="./assets/bottom-abstract.png" alt="" srcset=""></div>
        </div>
        <div class="white-map-gradient">
            <div class="btn-border btn-border-black bottom-btn-mobo">
                <button class="play-free-btn">
                    VIEW ALL MAPS
                    <div class="button-dot"></div>
                </button>
            </div>
        </div>
        <div class="map-section-container-haven">
            <div class="your-maps your-maps-hero">
                <div class="map-top-line"></div>
                <div class="your-maps-heading">HAVEN</div>
                <p id="galleryLink">VIEW GALLERY</p>
                <p>Beneath a forgotten monastery, a clamour emerges from rival Agents clashing to control three sites.
                    There’s more territory to control, but defenders can use the extra real estate for aggressive pushes.</p>
                <div class="map-video-hero">
                    <video preload="true" autoplay loop muted class="video-frame">
                        <source src="./assets/mhaven.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <div class="map-section" id="ascent-section">
        <div class="vertical-abstract">
            <div><img src="./assets/top-abstract.png" alt="" srcset=""></div>
            <div><img src="./assets/bottom-abstract.png" alt="" srcset=""></div>
        </div>
        <div class="white-map-gradient">
            <div class="btn-border btn-border-black bottom-btn-mobo">
                <button class="play-free-btn">
                    VIEW ALL MAPS
                    <div class="button-dot"></div>
                </button>
            </div>
        </div>
        <div class="map-section-container-ascent">
            <div class="your-maps your-maps-hero">
                <div class="map-top-line"></div>
                <div class="your-maps-heading">ASCENT</div>
                <p id="galleryLink">VIEW GALLERY</p>
                <p>An open playground for small wars of position and attrition divide two sites on Ascent.
                    Each site can be fortified by irreversible bomb doors; once they’re down,
                    you’ll have to destroy them or find another way. Yield as little territory as possible.</p>

                <div class="map-video-hero">
                    <video preload="true" autoplay loop muted class="video-frame">
                        <source src="./assets/ascent.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

</section>


<script>
    const iceboxButton = document.getElementById("icebox-button");
    const havenButton = document.getElementById("haven-button");
    const ascentButton = document.getElementById("ascent-button");
    const iceboxSection = document.getElementById("icebox-section");
    const havenSection = document.getElementById("haven-section");
    const ascentSection = document.getElementById("ascent-section");

    function hideAllSections() {
        iceboxSection.style.display = "none";
        havenSection.style.display = "none";
        ascentSection.style.display = "none";
    }

    function showIceboxSection() {
        hideAllSections();
        iceboxSection.style.display = "block";
    }

    function showhavenSection() {
        hideAllSections();
        havenSection.style.display = "block";
    }

    function showAscentSection() {
        hideAllSections();
        ascentSection.style.display = "block";
    }
    showIceboxSection();
    iceboxButton.addEventListener("click", showIceboxSection);
    havenButton.addEventListener("click", showhavenSection);
    ascentButton.addEventListener("click", showAscentSection);
</script>

<script>
    var galleryLink = document.getElementById('galleryLink');
    galleryLink.addEventListener('click', function() {
        var newPageURL = 'https://playvalorant.com/en-us/maps/';
        window.location.href = newPageURL;
    });
</script>

<section id="news-container">
    <div class="double-dot">
        <div></div>
        <div></div>
    </div>
    <div class="backgrond-container background-video-box-map-hero">
        <div class="main-bg-text">
            <p class="mb-0">WE ARE <br> </p>
            <P class="mb-0">VALORANT</P>
        </div>


        <div class="latest-news">MORE</div>
        <div class="news-cards-container video-maps-hero">

            <div class="video-maps-box-hero">
                <video preload="true" autoplay loop muted class="video-frame">
                    <source src="./assets/map-drift.mp4" type="video/mp4">
                </video>
            </div>
            <div class="video-maps-box-hero">
                <video preload="true" autoplay loop muted class="video-frame">
                    <source src="./assets/map-breeze.mp4" type="video/mp4">
                </video>
            </div>



        </div>

    </div>


</section>