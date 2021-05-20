<?php require_once("../../../private/initialize.php"); ?>

<?php

    $page_title = "HSY Shop | Home";
    $style_sheets = [
        "/css/common.css",
        "/css/cards.css",
        "/css/store/store.css",
        "/css/store/store-home.css",
    ];
    $scripts = [
        "/js/common.js",
        "/js/store/footer.js"
    ];

    include(SHARED_PATH . "/top.php");

?>

  <main>
      <?php require_once(SHARED_PATH . "/store/store-header.php"); ?>
      
      <section class="store-home-content">
        <section class="store-home-content-new mb-80">
          <div class="store-home-content-header text-align-center">
            <h1 class="mr-10">NEW PRODUCTS</h1>
            <a href="<?=url_for("/store/store-template/browse-product/by-date.php");?>">VIEW MORE</a>
          </div>

          <section class="store-product-cards">
            <div class="flex-container flex-justify-content-space-between flex-align-items-center flex-wrap">
              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/HSY_main_cover_square.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Purple Hyacinth Comic</a>
                  <p class="product-card-shop">Sophism &amp; Ephemerys</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">18/6/2018</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail-2");?>"><img alt="image of a product"
                  src="../../media/image/product-detail-2/yoohankim-trio_square.png"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail-2");?>">Omniscient Reader's Viewpoint Novel</a>
                  <p class="product-card-shop">Sing Shong</p>
                  <p class="product-card-price">$13.50</p>
                  <div class="product-card-sale-card">6/1/2018</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/HSY3.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/HSY4.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/HSY5.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/HSY6.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>
            </div>
          </section>
        </section>

        <section class="store-home-content-featured mb-80">
          <div class="store-home-content-header text-align-center">
            <h1 class="mr-10">FEATURED PRODUCTS</h1>
            <a href="">SEE ALL</a>
          </div>

          <section class="store-product-cards">
            <div class="flex-container flex-justify-content-space-between flex-align-items-center flex-wrap">
              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/HSY7.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/HSY8.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/HSY9.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/dan-gold-zvFrn0Ws7cw-unsplash.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/paolo-chiabrando-9dXSoi6VXEA-unsplash.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>

              <div class="product-card">
                <a href="<?=url_for("/store/store-template/product-detail");?>"><img alt="image of a product"
                  src="../../media/image/hsy_shop/thought-catalog-V5BGaJ0VaLU-unsplash.jpg"></a>
                <div class="product-card-details">
                  <a class="product-card-title" href="<?=url_for("/store/store-template/product-detail");?>">Product Title Goes Here</a>
                  <p class="product-card-shop">Short Description Goes Here</p>
                  <p class="product-card-price">$16.95</p>
                  <div class="product-card-sale-card">1/4/2020</div>
                </div>
              </div>
            </div>
          </section>
        </section>
      </section>
    
      <?php require_once(SHARED_PATH . "/store/store-footer.php"); ?>
  </main>

<?php include(SHARED_PATH . "/bottom.php"); ?>