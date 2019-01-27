        <!-- start header -->
        <header>

            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <div class="container p-relative">
                    <a class="navbar-brand logo" href="<?php echo base_url(); ?>" title="Logo">
                        <img src="<?php echo asset_url(); ?>images/logo.png" class="b-logo" alt="K-Beats">
                        <img src="<?php echo asset_url(); ?>images/logo-white.png" class="w-logo" alt="K-Beats">
                    </a>


                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <!-- start menu item -->

                            <li class="nav-item active">
                                <a href="#home" class="nav-link scroll">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="#features" class="nav-link scroll">Features</a>
                            </li>

                            <li class="nav-item">
                                <a href="#shop" class="nav-link scroll">Shop</a>
                            </li>

                            <li class="nav-item">
                                <a href="#unboxed" class="nav-link scroll">Unboxed</a>
                            </li>


                            <li class="nav-item">
                                <a href="#ratings" class="nav-link scroll">Reviews</a>
                            </li>

                            <li class="nav-item">
                                <a href="#contact" class="nav-link scroll">Contact</a>
                            </li>
                        </ul>

                    </div>

                    <div class="cart-wrapper" id="cart_details">
                        <i class="flaticon-paper-bag" aria-hidden="true"></i>
                            <?php $i = 0; ?>
                       <span class="noti"><?php

echo count($this->cart->contents()); ?></span>

                        <div class="cart-item-wrapper">
                            <div class="cart-product-content">

                            <?php foreach ($this->cart->contents() as $items): ?>

                                <div class="single-cart-item d-flex">
                                    <div class="cart-img">
                                        <a href="#."><img src="<?php echo asset_url(); ?>images/shop/<?php echo $this->cart->has_options->product_image ?>" alt=""></a>
                                    </div>
                                    <div class="cart-text-btn">
                                        <div class="cart-text">
                                            <h5><a href="#."><?php echo $items['name']; ?></a></h5>
                                            <span class="cart-qty mr-auto">Qty: <?php $items['qty']; ?></span>
                                            <span class="cart-price">$<?php echo $items['price']; ?></span>
                                        </div>
                            <a href="<?php echo base_url().'index.php/shoppingcart/delete/'.$items['rowid'] ?>">
                                            <button type="button"><i class="flaticon-cross"></i></button></a>
                                    </div>
                                </div>

                                <?php $i++; ?>
                            <?php endforeach; ?>
                            </div>

                            <div class="cart-price-total d-flex justify-content-between">
                                <span>Subtotal:</span>
                                <span> $<?php echo $this->cart->format_number($items['subtotal']); ?></span>
                                <span>Total:</span>
                                <span> $<?php echo $this->cart->format_number($this->cart->total()); ?></span>
                            </div>
                            <div class="cart-links d-flex">
                                <a href="#." class="btn btn-dark btn-lg btn-rounded mr-auto">View cart</a>
                                <a href=" checkout.html" class="btn btn-gradient btn-lg btn-rounded">Checkout</a>
                            </div>
                        </div>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
            </nav>

        </header>
        <!-- end header -->