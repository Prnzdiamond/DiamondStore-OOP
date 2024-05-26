<?php
function renderProductCard($key) {
    $prod_images = unserialize($key['product_images']);
    $img_path = $key['img_path'];
    $prod_title = $key['product_title'];
    $prod_desc = $key['product_desc'];
    $prod_id = $key['product_id'];
    $cat = $key['select_category'];
    $price = floatval(str_replace(",", "", $key['product_price']));
    ?>
    <div class='col-md-4'>
        <div class='card'>
            <a href='./select-all.php?product_id=<?= $prod_id ?>'>
                <img src='./images/product_images/<?= "{$img_path}/{$prod_images[0]}" ?>' class='card-img-top' alt='<?= $prod_title ?>' />
            </a>
            <div class='card-body'>
                <h5 class='card-title'><?= $prod_title ?></h5>
                <p class='card-text'>
                    <?= $prod_desc ?>
                    <p>Price: <span><?= number_format($price) ?></span></p>
                </p>
                <a href='../DIAMONDSTORE-OOP/includes/add_to_cart.inc.php?prod_id=<?= $prod_id ?>&add-to-cart=index'' class='btn btn-info'>Add to cart</a>
                <a href='./select-all.php?product_id=<?=$prod_id ?>&cat=<?= $cat ?> ' class='btn btn-secondary'>View more</a>
            </div>
        </div>
    </div>
    <?php
}
?>


<?php  
function renderSidenav(){?>
          <div class="col-md-2 bg-secondary p-0 text-center">
            <ul class="navbar-nav m-auto p-0">
              <li class="nav-item bg-info fs-3 text-light">
                Delivery Brands
              </li>
               <ul class="navbar-nav text-light mt-3">
                  <?php
                  $brands = new BrandView();
                   $brands->displayBrandview();
                  
                  ?>
            </ul>
              <li class="nav-item bg-info fs-3 text-light">
                Categories
              </li>
               <ul class="navbar-nav text-light mt-3">
                 <?php $cat = new CatView();
                   $cat->displaycatview();
                  
                  ?>
            </ul>
          </div>

<?php }
?>

<?php
function renderProductDets($key) {
    $prod_images = unserialize($key['product_images']);
    $img_path = $key['img_path'];
    $prod_title = $key['product_title'];
    $prod_desc = $key['product_desc'];
    $prod_id = $key['product_id'];
    $price = floatval(str_replace(",", "", $key['product_price']));
    $qty=1;
    ?>
    <div class='row'>
    <div class='col-lg-5 col-md-6'>
        <!-- Product Details Left -->
        <div class='product-details-left'>
            <div class='product-details-images slider-navigation-1'>
                <?php foreach ($prod_images as $image) { ?>
                    <div class='lg-image'>
                        <a class='popup-img venobox vbox-item' href='images/product_images/<?php echo $img_path . '/' . $image; ?>' data-gall='myGallery'>
                            <img src='images/product_images/<?php echo $img_path . '/' . $image; ?>' alt='product image'>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class='product-details-thumbs slider-thumbs-1 extra-photos'>
                <?php foreach ($prod_images as $image) { ?>
                    <div class='sm-image'>
                        <img src='images/product_images/<?php echo $img_path . '/' . $image; ?>' alt='product image thumb'>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!--// Product Details Left -->
    </div>
    <div class='col-lg-7 col-md-6'>
        <div class='product-details-view-content pt-60'>
            <div class='product-info'>
                <h2><?php echo $prod_title; ?></h2>
                <span class='product-details-ref'>Reference: demo_15</span>
                <div class='price-box pt-20 mt-3'>
                    <span class='new-price new-price-2'>#<?php echo number_format($price); ?></span>
                </div>
                <div class='product-desc'>
                    <p>
                        <span><?php echo $prod_desc; ?></span>
                    </p>
                </div>
                <div class='single-add-to-cart'>
                    <form action='../DIAMONDSTORE-OOP/includes/add_to_cart.inc.php' method='post' class='cart-quantity mb-5'>
                        <input type="hidden" name="prod_id" value="<?php echo $prod_id ?>">
                        <div class='quantity'>
                            <label>Quantity</label>
                            <div class='cart-plus-minus'>
                                <input name='qty' class='cart-plus-minus-box' value='<?php echo $qty; ?>' type='text'>
                                <div class='dec qtybutton'><i class='fa fa-angle-down'></i></div>
                                <div class='inc qtybutton'><i class='fa fa-angle-up'></i></div>
                            </div>
                        </div>
                        <input value='Add to cart' name='add-to-cart' class='add-to-cart mt-3' type='submit'>
                    </form>
                </div>
                <div class='product-additional-info pt-25'>
                    <a class='wishlist-btn' href='wishlist.html'><i class='fa fa-heart-o'></i>Add to wishlist</a>
                    <div class='product-social-sharing pt-25 mt-3'>
                        <ul>
                            <li class='facebook'><a href='#'><i class='fa fa-facebook'></i>Facebook</a></li>
                            <li class='twitter'><a href='#'><i class='fa fa-twitter'></i>Twitter</a></li>
                            <li class='google-plus'><a href='#'><i class='fa fa-google-plus'></i>Google +</a></li>
                            <li class='instagram'><a href='#'><i class='fa fa-instagram'></i>Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class='block-reassurance'>
                    <ul>
                        <li>
                            <div class='reassurance-item'>
                                <div class='reassurance-icon'>
                                    <i class='fa fa-check-square-o'></i>
                                </div>
                                <p>Security policy (edit with Customer reassurance module)</p>
                            </div>
                        </li>
                        <li>
                            <div class='reassurance-item'>
                                <div class='reassurance-icon'>
                                    <i class='fa fa-truck'></i>
                                </div>
                                <p>Delivery policy (edit with Customer reassurance module)</p>
                            </div>
                        </li>
                        <li>
                            <div class='reassurance-item'>
                                <div class='reassurance-icon'>
                                    <i class='fa fa-exchange'></i>
                                </div>
                                <p>Return policy (edit with Customer reassurance module)</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
}
?>
<?php
function renderCatprod($key) {
    $prod_images = unserialize($key['product_images']);
    $img_path = $key['img_path'];
    $prod_title = $key['product_title'];
    $prod_desc = $key['product_desc'];
    $prod_id = $key['product_id'];
    $price = floatval(str_replace(",", "", $key['product_price']));
    $cat = $key['select_category'];
    $qty = 1;
?>
    <div class='col-lg-12'>
        <!-- single-product-wrap start -->
        <div class=''>
            <div class='product-image'>
                <a href='./select-all.php?product_id=<?= $prod_id ?>&cat=<?= $cat ?>'>
                    <img src='images/product_images/<?php echo $img_path . '/' . $prod_images[0]; ?>' alt='Li's Product Image'>
                </a>
                <span class='sticker'>New</span>
            </div>
            <div class='product_desc'>
                <div class='product_desc_info'>
                    <div class='product-review'>
                        <h5 class='manufacturer'>
                            <?php echo $prod_desc; ?>
                        </h5>
                    </div>
                    <h4><a class='product_name' href='select-all.php?product_id=<?= $prod_id ?>&cat=<?= $cat ?>'><?php echo $prod_title; ?></a></h4>
                    <div class='price-box'>
                        <span class='new-price'>#<?php echo $price; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-product-wrap end -->
        <div class='cat-btn'>
            <a href='./select-all.php?product_id=<?= $prod_id ?>&cat=<?= $cat ?>' class='btn btn-secondary'>View more</a>
        </div>
    </div>
<?php
}
?>

<?php
function renderCart($cartItems, $total) {
    if (empty($cartItems)) {
        // Display message if cart is empty
        echo '<div class="empty-cart-message">';
        echo '<p>No items in cart.</p>';
        echo '<a href="shop.php" class="button">Continue Shopping</a>';
        echo '</div>';
    } else {
        ?>
        <form action="./includes/cart_function.inc.php" method="get">
            <div class="table-content table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="li-product-thumbnail">Images</th>
                            <th class="cart-product-name">Product</th>
                            <th class="li-product-price">Unit Price</th>
                            <th class="li-product-quantity">Quantity</th>
                            <th class="li-product-subtotal">Total</th>
                            <th class="li-product-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cartItems as $item){
                        $prod_images = unserialize($item['product_images']); // Assuming product_images is serialized
                        $img_path = $item['img_path'];
                        $prod_title = $item['product_title'];
                        $product_price = floatval(str_replace(',','',$item['product_price']));
                        $prod_id = $item['product_id'];
                        $qty = $item['quantity'];
                        $prod_total = $product_price * $item['quantity'];
                        ?>
                        <tr>
                            <td class='li-product-thumbnail'><a href='#'><img class='' src='./images/product_images/<?php echo $img_path.'/'.$prod_images[0]; ?>' alt='Product Image'></a></td>
                            <td class='li-product-name'><a href='#'><?php echo $prod_title; ?></a></td>
                            <td class='li-product-price'><span class='amount'>#<?php echo number_format($product_price, 2); ?></span></td>
                            <input name='prod_id[]' type='hidden' value='<?php echo $prod_id; ?>'>
                            <td class='quantity'>
                                <label>Quantity</label>
                                <div class='cart-plus-minus'>
                                    <input class='cart-plus-minus-box' name='quant[]' value='<?php echo $qty; ?>' type='text'>
                                    <div class='dec qtybutton'><i class='fa fa-angle-down'></i></div>
                                    <div class='inc qtybutton'><i class='fa fa-angle-up'></i></div>
                                </div>
                            </td>
                            <td class='product-subtotal'><span class='amount'>#<?php echo number_format($prod_total); ?></span></td>
                            <td class='li-product-remove'><a href='./includes/cart_function.inc.php?removeitem=<?php echo $prod_id; ?>'><i class='fa fa-times'></i></a></td>
                        </tr>
                    <?php }; ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="coupon-all">
                        <div class="coupon2">
                            <input class="button" name="update_cart" value="Update cart" type="submit">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 ml-auto">
                    <div class="cart-page-total">
                        <h2>Cart totals</h2>
                        <ul>
                            <li>Total <span>#<?php echo number_format($total, 2); ?></span></li>
                        </ul>
                        <a href="./checkout.php" class="mb-3">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </form>
        <?php
    }
}?>

