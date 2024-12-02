    <div class="page-title" style="background-image: url(assets/images/background/gallery.webp);">
        <div class="auto-container">
            <h1>Gallery</h1>
        </div>
    </div>
    <div class="bredcrumb-wrap">
        <div class="auto-container">
            <ul class="bredcrumb-list">
                <li><a href="index.html">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>

    <!--gallery-->
    <section class="section-padding">
        <div class="auto-container">

            <!-- <div class="filters">
                <ul class="filter-tabs filter-btns d-flex justify-content-center">
                    <li class="filter active" data-role="button" data-filter=".all">All Works</li>
                    <li class="filter" data-role="button" data-filter=".cat-1">Nursing</li>
                    <li class="filter" data-role="button" data-filter=".cat-2">Medical </li>
                    <li class="filter" data-role="button" data-filter=".cat-3">Senior</li>
                </ul>
            </div> -->

            <!--Sortable Galery-->
            <div class="sortable-masonry">

                <div class="items-container row">

                    <?php
                    $galPath = 'assets/images/gallery';
                    $objScanDIR = new ScanDirectory($galPath, 1);
                    $imgList = $objScanDIR->getList();
                    // echo "<pre>";
                    // print_r($imgList);
                    // die();
                    foreach ($imgList as $img):
                        $src =  $galPath . '/' . $img['basename'];
                        $alt =  'Jhandi Sherpa Home Stay';
                    ?>

                        <!-- Project Block -->
                        <div class="col-lg-4 col-md-6 gallery-block-1 masonry-item all">
                            <div class="gallery-block-1-inner-box">
                                <div class="gallery-block-1-image">
                                    <img src="<?= $src ?>" alt="">
                                </div>
                                <div class="gallery-block-1-overlay">
                                    <div class="gallery-block-1-lower-content">
                                        <div class="gallery-block-1-link-btn">
                                            <a href="<?= $src ?>" class="lightbox-image" data-fancybox="gallery"><span class="icon-24"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>