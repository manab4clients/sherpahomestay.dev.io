    <div class="page-title" style="background-image: url(assets/images/background/contact-us.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        </div>
    </div>
    <div class="bredcrumb-wrap">
        <div class="auto-container">
            <ul class="bredcrumb-list">
                <li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>


    <section class="section-padding ">
        <div class="auto-container">
            <div class="section_heading mb_40">
                <span class="section_heading_title_small">Our location</span>
                <h2 class="section_heading_title_big">Jhandi Sherpa Home Stay</h2>
            </div>
            <ul class="contact-info-1 d-flex flex-wrap mb_40">
                <li>
                    <h4 class="fs_20 mb_10"><i class="icon-27 mr_10 fs_18"></i>Location</h4>
                    <p><?= $address ?></p>
                </li>
                <li>
                    <h4 class="fs_20 mb_10"><i class="icon-28 mr_10 fs_18"></i>Phone No</h4>
                    <p><a href="tel:<?= hrefPhoneNumber($phone) ?>"><?= $phone ?></a></p>
                </li>
                <li>
                    <h4 class="fs_20 mb_10"><i class="fab fa-whatsapp"></i> Whats App</h4>
                    <p><a href="//api.whatsapp.com/send?phone=<?= hrefPhoneNumber($phone) ?>"><?= $phone ?></a></p>
                </li>
                <li>
                    <h4 class="fs_20 mb_10"><i class="icon-29 mr_10 fs_15"></i>Email</h4>
                    <p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
                </li>
            </ul>
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="form-alt form-alt3 with-shadow">
                        <form method="post" id="contact-form">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="form_name" value="" placeholder="Your Name" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="text" name="email" value="" placeholder="Your Email" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="text" name="form_subject" value="" placeholder="Subject" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <textarea name="form_message" placeholder="Massage"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-1" type="submit" data-loading-text="Please wait...">Submit Now <i class="flaticon-right-arrow-1"></i><span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <style>
                    iframe {
                        width: 100%;
                        height: 535px;
                        /* or use relative units for responsiveness */
                        border: 0;
                    }
                </style>
                <div class="col-lg-7">
                    <div class="map mb_30">
                        <iframe src="<?= $google_map ?>" allowfullscreen aria-hidden="false"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>