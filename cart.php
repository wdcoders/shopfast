<?php
  ob_start();
  // INCLUDE CONFIG
  include('./config/config.php');
?>

<!-- hero section -->
<section class="section hero product-hero">

  <div class="container">
    <div class="hero-left">
      <h1>Cart</h1>
      <small>Shop through our latest selection of Women’s Clothing and Accessories.</small>
    </div>
    <!-- <div class="hero-right">
      <img src="<?=$baseurl?>assets/images/hero.png" alt="">
    </div>     -->
  </div>

</section>
<!-- hero section -->


<!-- product details -->
<section class="section products-cart">
    <div class="container">

        <div class="products-cart-wrapper">
            <div class="table-responsive w-100">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>                        
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="<?=$baseurl?>assets/images/product1.jpg" alt="">
                                    <div>
                                        <p>Bambi Print Mini Backpack</p>
                                        <span><strong>Price:</strong> $50.00</span>
                                        <a href="">Remove</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-quantity">
                                    <button><box-icon name='minus'></box-icon></button>
                                    <input type="text" value="1"/>
                                    <button><box-icon name='plus'></box-icon></button>
                                </div>
                            </td>
                            <td>$50.00</td>
                        </tr>   
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="<?=$baseurl?>assets/images/product1.jpg" alt="">
                                    <div>
                                        <p>Bambi Print Mini Backpack</p>
                                        <span><strong>Price:</strong> $50.00</span>
                                        <a href="">Remove</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-quantity">
                                    <button><box-icon name='minus'></box-icon></button>
                                    <input type="text" value="1"/>
                                    <button><box-icon name='plus'></box-icon></button>
                                </div>
                            </td>
                            <td>$50.00</td>
                        </tr>                        
                    </tbody>
                </table>                
            </div>


            <div class="subtotal-table">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Sub Total</th>
                            <td>$50.00</td>
                        </tr>   
                        <tr>
                            <th>Tax</th>
                            <td>$50.00</td>
                        </tr>   
                        <tr>
                            <th>Total</th>
                            <td>$50.00</td>
                        </tr>                         
                    </tbody>
                </table>  
                <div class="d-grid mt-3">
                    <button class="btn btn-lg btn-primary">PROCEED TO CHECKOUT</button>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- product details -->


<?php
    $pageContent = ob_get_contents();
    ob_end_clean();
    $pageTitle = $wesiteName." | HOME";
    include("master.php");
?>