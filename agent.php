<?php require 'header.php'; ?>
<?php require 'nav.php'; ?>

<section id="agent-bg">


    <div class="agent-btn-hero">
        <div class="hide-btn agent-btn-border-hero">
            <div class="agent-btn-select-hero">
                <button class="heroa" onclick="showAgent('iso', this)">
                    <div class="icon-class-hero">
                        <div class="flex-hero">
                            <div class="your-agent-heading hero-mapping">ISO</div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="hide-btn agent-btn-border-hero">
            <div class="agent-btn-select-hero">
                <button class="heroa" onclick="showAgent('jett', this)">
                    <div class="icon-class-hero">
                        <div class="flex-hero">
                            <div class="your-agent-heading hero-mapping">JETT</div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="hide-btn agent-btn-border-hero">
            <div class="agent-btn-select-hero">
                <button class="heroa" onclick="showAgent('sage', this)">
                    <div class="icon-class-hero">
                        <div class="flex-hero">
                            <div class="your-agent-heading hero-mapping">SAGE</div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="hide-btn agent-btn-border-hero">
            <div class="agent-btn-select-hero">
                <button class="heroa" onclick="showAgent('reyna', this)">
                    <div class="icon-class-hero">
                        <div class="flex-hero">
                            <div class="your-agent-heading hero-mapping">REYNA</div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <div class="agent-bg-conatiner">
        <div id="isoAgent" style="display: none;">
            <div class="agent-image">
                <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt34e30d5669e7309c/653add3080274d040a37d656/ISO_KeyArt_Final.png" alt="">
            </div>
            <div class="your-agents">
                <div class="your-agent-top-line"></div>
                <div class="class-type-hero">
                    <div class="your-agent-heading">ISO</div>
                    <div class="icon-class-hero">
                        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt213441880cf2cdf5/5eaa06851b51e36d7c1b61d4/Duelist.png" width="25%">
                    </div>
                </div>
                <p>BIOGRAPHY.</p>
                <p>// DUELIST // Chinese fixer for hire, Iso falls into a flow state to dismantle the opposition. Reconfiguring
                    ambient energy into bulletproof protection, he advances with focus towards his next duel to the death.</p>
                <video preload="true" autoplay loop muted class="video-frame">
                    <source src="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt9b8f8e24e51409a8/653ae016b78a75040aa24f7c/Iso_Ability_X-Larger.mp4" type="video/mp4">
                </video>
                <div class="hide-btn agent-btn-border">
                    <a href="https://playvalorant.com/en-us/agents/iso/">
                        <button class="agent-btn btn-hero">
                            MORE ABOUT THIS AGENT
                            <div class="button-dot"></div>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div id="jettAgent" style="display: none;">
            <div class="agent-image">
                <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltceaa6cf20d328bd5/5eb7cdc1b1f2e27c950d2aaa/V_AGENTS_587x900_Jett.png" alt="">
            </div>
            <div class="your-agents">
                <div class="your-agent-top-line"></div>
                <div class="class-type-hero">
                    <div class="your-agent-heading">JETT</div>
                    <div class="icon-class-hero">
                        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt213441880cf2cdf5/5eaa06851b51e36d7c1b61d4/Duelist.png" width="25%">
                    </div>
                </div>
                <p>BIOGRAPHY.</p>
                <p>// DUELIST // Representing her home country of South Korea, 
                    Jett's agile and evasive fighting style lets her take risks 
                    no one else can. She runs circles around every skirmish, 
                    cutting enemies before they even know what hit them.</p>
                <video preload="true" autoplay loop muted class="video-frame">
                    <source src="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/blta43d8d506e2f5e00/5ecad7f6957e405e0990574d/Jett_X_v001_web.mp4" type="video/mp4">
                </video>
                <div class="hide-btn agent-btn-border">
                    <a href="https://playvalorant.com/en-us/agents/JETT/">
                        <button class="agent-btn btn-hero">
                            MORE ABOUT THIS AGENT
                            <div class="button-dot"></div>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div id="sageAgent" style="display: none;">
            <div class="agent-image">
                <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt8a627ec10b57f4f2/5eb7cdc16509f3370a5a93b7/V_AGENTS_587x900_sage.png" alt="">
            </div>
            <div class="your-agents">
                <div class="your-agent-top-line"></div>
                <div class="class-type-hero">
                    <div class="your-agent-heading">SAGE</div>
                    <div class="icon-class-hero">
                        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt72ffc2e48d4a7a58/5eaa06852b79652f27c31ff6/Sentinel.png" width="25%">
                    </div>
                </div>
                <p>BIOGRAPHY.</p>
                <p>// SENTINEL // The stronghold of China, Sage creates safety for herself and her team wherever she goes.
                    Able to revive fallen friends and stave off aggressive pushes, she provides a calm center to a hellish fight.</p>
                <video preload="true" autoplay loop muted class="video-frame">
                    <source src="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltef1820f276fbaa0c/5ecad871957e405e09905755/Sage_X_v001_web.mp4" type="video/mp4">
                </video>
                <div class="hide-btn agent-btn-border">
                    <a href="https://playvalorant.com/en-us/agents/sage/">
                        <button class="agent-btn btn-hero">
                            MORE ABOUT THIS AGENT
                            <div class="button-dot"></div>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div id="reynaAgent" style="display: none;">
            <div class="agent-image">
                <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6577b1f58530e6b2/5eb7cdc121a5027d77420208/V_AGENTS_587x900_Reyna.png" alt="">
            </div>
            <div class="your-agents">
                <div class="your-agent-top-line"></div>
                <div class="class-type-hero">
                    <div class="your-agent-heading">REYNA</div>
                    <div class="icon-class-hero">
                        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt213441880cf2cdf5/5eaa06851b51e36d7c1b61d4/Duelist.png" width="25%">
                    </div>
                </div>
                <p>BIOGRAPHY.</p>
                <p>// DUELIST // Forged in the heart of Mexico, Reyna dominates single combat,
                    popping off with each kill she scores. Her capability is only limited by her raw skill,
                    making her highly dependent on performance.</p>
                <video preload="true" autoplay loop muted class="video-frame">
                    <source src="https://assets.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltadf53a38e449cb4d/5ecad85cbab1845d392dfd0f/Reyna_X_v001_web.mp4" type="video/mp4">
                </video>
                <div class="hide-btn agent-btn-border">
                    <a href="https://playvalorant.com/en-us/agents/reyna/">
                        <button class="agent-btn btn-hero">
                            MORE ABOUT THIS AGENT
                            <div class="button-dot"></div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    window.onload = function() {
        showAgent('jett');
    };

    function showAgent(agentName, button) {
        document.getElementById('isoAgent').style.display = 'none';
        document.getElementById('jettAgent').style.display = 'none';
        document.getElementById('sageAgent').style.display = 'none';
        document.getElementById('reynaAgent').style.display = 'none';
        const buttons = document.querySelectorAll('.agent-btn');
        buttons.forEach((btn) => {
            btn.classList.remove('selected-button');
        });
        document.getElementById(agentName + 'Agent').style.display = 'block';
        button.classList.add('selected-button');
    }
</script>
<?php require 'endless-footer.php'; ?>