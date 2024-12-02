            <!-- Four Bed -->

            <div class="room-1-block wow fadeInUp animated" data-wow-delay=".2s" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="room-1-image hvr-img-zoom-1">
                    <img src="assets/images/resource/room-4.webp" alt="">
                </div>
                <div class="room-1-content">
                    <p class="room-1-meta-info">With food <span class="theme-color"><i class="fas fa-rupee-sign"></i> 6400</span>/night</p>
                    <div class="room-1-rating">
                        <i class="icon-6"></i>
                        <i class="icon-6"></i>
                        <i class="icon-6"></i>
                        <i class="icon-6"></i>
                        <i class="icon-7"></i>
                    </div>
                    <h4 class="room-1-title mb_20"><a href="tariff">Quad Share</a></h4>
                    <p class="room-1-text mb_30">Designed for four guests, providing ample space, two double beds, and a relaxing stay. ₹ 1600/- per head, including meals.</p>
                    <?php
                    $page = $page ?? $_GET['page'] ?? 'index';
                    if ($page != 'tariff') {
                        echo '<div class="link-btn"><a href="tariff" class="btn-1 btn-alt">Know more <span></span></a></div>';
                    }
                    ?>
                </div>
            </div>