<?php
  ob_start();
  // INCLUDE CONFIG
  include('./config/config.php');
?>

<!-- hero section -->
<section class="section hero product-hero">

  <div class="container">
    <div class="hero-left">
      <h1>Women</h1>
      <small>Shop through our latest selection of Women’s Clothing and Accessories.</small>
    </div>
    <!-- <div class="hero-right">
      <img src="<?=$baseurl?>assets/images/hero.png" alt="">
    </div>     -->
  </div>

</section>
<!-- hero section -->


<!-- products -->
<section class="section products">
  <div class="container products-layout-outer">

    <div class="products-filter" id="productsFilter">
        <label class="product-filter-toggle" id="productFilterToggle"><i class="fas fa-times"></i></label>
        <div class="product-filter-wrapper">
            <div class="products-filter-inner">
                <h3 class="products-filter-title">Categories</h3>
                <ul class="products-filter-content">
                    <li>
                        <input type="checkbox">
                        <label for="">
                            <span>Shoes</span>
                            <small>(10)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">
                            <span>Bags</span>
                            <small>(7)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">
                            <span>Accessories</span>
                            <small>(3)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">
                            <span>Clothings</span>
                            <small>(3)</small>
                        </label>
                    </li>
                </ul>            
            </div>
            <div class="products-filter-inner">
                <h3 class="products-filter-title">Brands</h3>
                <ul class="products-filter-content">
                    <li>
                        <input type="checkbox">
                        <label for="">
                            <span>Gucci</span>
                            <small>(10)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">
                            <span>Buryberry</span>
                            <small>(7)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">
                            <span>Valentino</span>
                            <small>(3)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">
                            <span>Dolce & Gabban</span>
                            <small>(3)</small>
                        </label>
                    </li>
                </ul>            
            </div>
        </div>
    </div>

    <div class="products-content">
        <label class="btn btn-primary wd-xs wd-sm wd-md" id="productFilterIcon">
            <i class="fas fa-filter"></i>
        </label>
        <form action="">
            <div class="products-layout-item">
                <label for="">Sort By</label>
                <select name="sort-by" id="">
                    <option value="title">Name</option>
                    <option value="number">Price</option>
                    <option value="search_api_relevance">Relevance</option>
                    <option value="created">Newest</option>
                </select>
            </div>
            <div class="products-layout-item">
                <label for="">Order</label>
                <select name="sort-by" id="">
                    <option value="ASC" selected="selected">ASC</option>
                    <option value="DESC">DESC</option>
                </select>
            </div>
            <div class="products-layout-item">
                <button class="btn btn-primary btn-rounded">Apply</button>
            </div>
        </form>
        <div class="products-layout">

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

        <!-- pagination -->
        <nav aria-label="Page navigation example" class="pagination-outer mt-4">
            <ul class="pagination justify-content-start">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>            
        <!-- pagination -->
        
    </div>
  </div>
</section>
<!-- products -->


<!-- overlay -->
<!-- <div class="page-overlay" id="pageOverlay"></div> -->
<!-- overlay -->

<?php
    $pageContent = ob_get_contents();
    ob_end_clean();
    $pageTitle = $wesiteName." | HOME";
    include("master.php");
?>