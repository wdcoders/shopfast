<?php
  ob_start();
  // INCLUDE CONFIG
  include('./config/config.php');
?>

<!-- hero section -->
<section class="section hero product-hero">

  <div class="container">
    <div class="hero-left">
      <h1>Home/T-Shirt</h1>
      <small>Shop through our latest selection of Women’s Clothing and Accessories.</small>
    </div>
    <!-- <div class="hero-right">
      <img src="<?=$baseurl?>assets/images/hero.png" alt="">
    </div>     -->
  </div>

</section>
<!-- hero section -->


<!-- product details -->
<section class="section product-details">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="product-details-left">
                <div class="product-detail-main">
                    <img src="<?=$baseurl?>assets/images/product1.jpg" alt="">
                </div>
                <div class="product-detail-thumbnails">
                    <div class="thumbnail"><img src="<?=$baseurl?>assets/images/product2.jpg" alt=""></div>
                    <div class="thumbnail"><img src="<?=$baseurl?>assets/images/product3.jpg" alt=""></div>
                    <div class="thumbnail"><img src="<?=$baseurl?>assets/images/product4.jpg" alt=""></div>
                    <div class="thumbnail"><img src="<?=$baseurl?>assets/images/product5.jpg" alt=""></div>
                </div>
            </div>
            <div class="product-details-right">
                <h1>Bambi Print Mini Backpack</h1>
                <div class="price">$50</div>
                <div class="product-detail-item">
                    <div>
                        <label for="">Color</label>
                        <ul class="color">
                            <li class="blue"></li>
                            <li class="indigo"></li>
                            <li class="orange"></li>
                            <li class="pink"></li>
                        </ul>
                    </div>
                    <div>
                        <label for="">Select Size</label>
                        <ul>
                            <li>S</li>
                            <li>M</li>
                            <li>L</li>
                        </ul>
                    </div>
                    <div class="m-0">
                        <label for="">Quantity</label>
                    </div>
                    <div class="d-flex align-content-center">
                        <div class="product-quantity">
                            <button><box-icon name='minus'></box-icon></button>
                            <input type="text" value="1"/>
                            <button><box-icon name='plus'></box-icon></button>
                        </div>
                        <button class="product-add-cart">ADD TO CART</button>
                    </div>
                    <div class="mt-4">
                        <label for="">Product Details</label>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- product details -->


<!-- products -->
<section class="section products">
  <div class="container-fluid">
    <div class="section-header">
      <h2 class="section-title">Related Products</h2>
      <p>Select from the premium product and save plenty money</p>
    </div>
    <div class="section-wrapper products-layout">

      
      <div class="product">
        <div class="product-img-container">
          <img src="<?=$baseurl?>assets/images/product1.jpg" alt="">
          <div class="product-add-cart">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <ul class="product-side-icons">
            <li><i class="fas fa-search"></i></li>
            <li><i class="fas fa-heart"></i></li>
            <li><i class="fas fa-sliders-h"></i></li>
          </ul>
        </div>
        <div class="product-bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-img-container">
          <img src="<?=$baseurl?>assets/images/product2.jpg" alt="">
          <div class="product-add-cart">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <ul class="product-side-icons">
            <li><i class="fas fa-search"></i></li>
            <li><i class="fas fa-heart"></i></li>
            <li><i class="fas fa-sliders-h"></i></li>
          </ul>
        </div>
        <div class="product-bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-img-container">
          <img src="<?=$baseurl?>assets/images/product3.jpg" alt="">
          <div class="product-add-cart">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <ul class="product-side-icons">
            <li><i class="fas fa-search"></i></li>
            <li><i class="fas fa-heart"></i></li>
            <li><i class="fas fa-sliders-h"></i></li>
          </ul>
        </div>
        <div class="product-bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-img-container">
          <img src="<?=$baseurl?>assets/images/product4.jpg" alt="">
          <div class="product-add-cart">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <ul class="product-side-icons">
            <li><i class="fas fa-search"></i></li>
            <li><i class="fas fa-heart"></i></li>
            <li><i class="fas fa-sliders-h"></i></li>
          </ul>
        </div>
        <div class="product-bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-img-container">
          <img src="<?=$baseurl?>assets/images/product5.jpg" alt="">
          <div class="product-add-cart">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <ul class="product-side-icons">
            <li><i class="fas fa-search"></i></li>
            <li><i class="fas fa-heart"></i></li>
            <li><i class="fas fa-sliders-h"></i></li>
          </ul>
        </div>
        <div class="product-bottom">
          <a href="">Bambi Print Mini Backpack</a>
          <div class="price">
            <span>$150</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- products -->

<?php
    $pageContent = ob_get_contents();
    ob_end_clean();
    $pageTitle = $wesiteName." | HOME";
    include("master.php");
?>