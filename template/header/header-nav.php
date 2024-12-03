    <!-- laoader-wrap -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">Preloader Close</div>
        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>
    <!-- header starts -->
    <header class="main-header header-style-one">
        <!-- header nav -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container d-flex align-items-center justify-content-between">
                    <div class="logo-box">
                        <div class="logo" style="width: 240px;"><a href="/"><img src="assets/images/logo.png" alt=""></a></div>
                    </div>
                    <div class="middle-column">
                        <div class="nav-outer">
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="about">About Us</a></li>
                                        <li><a href="tariff">Tariff</a></li>
                                        <!-- <li><a href="service">Services</a></li> -->
                                        <li><a href="gallery">Gallery</a></li>
                                        <!-- <li><a href="near-to-us">Near By</a></li> -->
                                        <!-- <li><a href="how-to-reach">How To Reach</a></li> -->
                                        <li><a href="contact">Contact</a></li>
                                        <!-- <li><a href="/README.html">Read Me</a></li> -->
                                        <li><a href="terms">Terms</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- sticky header on scroll -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container d-flex align-items-center justify-content-between">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo" style="width: 240px;"><a href="javascript:void(0)"><img src="assets/images/logo.png" alt=""></a></div>
                        </div>
                        <div class="middle-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                        </div>
                        <!-- <div class="right-column d-flex align-items-center">                        
                            <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1 btn-small btn-alt">Book Your Stay <span></span></a></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- mobile nav -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="fal fa-times"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="assets/images/logo-light.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">

                        <li><a href="<?= $facebook ?>"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="<?= $youtube ?>"><span class="fab fa-youtube"></span></a></li>
                        <li><a href="<?= $youtube ?>"><span class="fab fa-twitter"></span></a></li>
                        <!-- <li><a href=""><span class="fas fa-map-marker-alt"></span></a></li> -->
                        <li><a href="//wa.ma/<?= hrefPhoneNumber($phone) ?>"><span class="fab fa-whatsapp"></span></a></li>

                    </ul>
                </div>
            </nav>
        </div>

        <!-- overlay -->
        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>

    </header>
    <!-- header starts -->
    <!-- search popup -->
    <!-- <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fal fa-times"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="https://html.tonatheme.com/2022/royalking//">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            </div>
        </div>
    </div> -->