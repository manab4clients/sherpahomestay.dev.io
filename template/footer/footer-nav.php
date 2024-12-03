    <footer class="main-footer">
        <div class="footer-1-middle">
            <div class="auto-container">
                <div class="row">

                    <!-- Quick Links -->
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-widget-1 mb_30">
                            <div class="footer-widget-title">
                                <h4>Contact Us</h4>
                            </div>
                            <ul class="contact-widget-1-list">
                                <li><?= $address ?></li>
                                <li><a href="mailto:<?= $email ?>"><?= $email ?></a></li>
                                <li><a href="tel:<?= hrefPhoneNumber($phone) ?>"><?= $phone ?></a></li>
                            </ul>
                            <ul class="footer-social-icon d-flex align-items-center">
                                <li><a href="<?= $facebook ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?= $youtube ?>"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="//wa.me/<?= hrefPhoneNumber($phone) ?>"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6">
                        <div class="link-widget-1 mb_30">
                            <div class="footer-widget-title">
                                <h4>Links</h4>
                            </div>
                            <ul class="link-widget-1-list">
                                <li><a href="about">About Us</a></li>
                                <li><a href="tariff">Our Tariff</a></li>
                                <li><a href="gallery">Photo Gallery</a></li>
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6">
                        <div class="link-widget-1 mb_30">
                            <div class="footer-widget-title">
                                <h4>Links</h4>
                            </div>
                            <ul class="link-widget-1-list">
                                <li><a href="near-to-us">Around Us</a></li>
                                <li><a href="terms">Terms</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                <li><a href="javascript:void(0)">Declaimer</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-3 col-md-6">
                        <div class="link-widget-1 mb_30">
                            <div class="footer-widget-title">
                                <h4>Service Hours</h4>
                            </div>
                            <!-- <p class="mb_25">Tincidunt neque pretium lectus <br>donec risus.</p> -->
                            <p>
                                Check-In: 12:00 PM <br>
                                Check-Out: 10:00 AM <br>
                                Breakfast: 8:30 AM - 10:00 AM <br>
                                Lunch: 1:00 PM - 2:30 PM <br>
                                Dinner: 8:30 PM - 10:00 PM <br>
                            </p>
                        </div>
                    </div>

                    <!--Newsletter-->
                    <div class="col-lg-2 col-md-6">
                        <div class="about-widget-1 mb_30">
                            <div class="footer-widget-title">
                                <h4>Help Desk</h4>
                            </div>
                            <style>
                                .footer-helpdesk {
                                    color: #fff;
                                    display: inline-grid;
                                    align-content: space-around;
                                    justify-content: space-around;
                                    align-items: center;
                                    justify-items: center;
                                }

                                .footer-helpdesk i {
                                    font-size: 50px;
                                    margin-bottom: 20px;

                                }

                                .footer-helpdesk p a {
                                    color: #fff;
                                    font-size: 20px;
                                }
                            </style>
                            <div class="about-widget-1-text">
                                <!-- <p class="mb_30">Tincidunt neque pretium lectus <br>donec risus.</p> -->
                                <div class="footer-helpdesk">
                                    <i class="fas fa-headset"></i>
                                    <p>
                                        <!-- <a class="btn-1" href="//wa.me/<? //= hrefPhoneNumber($phone) 
                                                                            ?>">Live Chat</a> -->
                                        <a class="btn-1" href="//api.whatsapp.com/send?phone=<?= hrefPhoneNumber($phone) ?>">Live Chat</a>


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="footer-bottom-row">
                    <div class="footer-bottom-text">
                        <a href="javascript:void(0);">Jhandi Sherpa Homestay</a> &copy; <?= date('Y') ?>
                        Cared by <a href="//citytask.com">Citytask</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>