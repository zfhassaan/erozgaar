<?php
@include('layout/header.php')
?>
		<!-- img full -->
        <div class="king-full-image-area bg-img" id="home" style="background-image: url('<?php echo asset_url(); ?>images/full-width-images/section-bg-homr.svg')">
            <div class="king-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="home-contain text-white">

                                <!-- <p>Landing page for</p> -->
                                <h1>
                                    K-Beats Wireless Headphone
                                </h1>
                                <h4>Hear the music. Not the noise.</h4>
                                <div class="text-center">
                                    <a data-fancybox data-type="iframe" href="https://www.youtube.com/embed/YQVR4RfQ1gA"
                                        class="video-play-button">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-7 ">
                            <div class="home-right wow slideInRight">
                                <img src="<?php echo asset_url(); ?>images/product/headphones-1.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end img full -->


        <!-- Section Chosse color -->
        <section id="p-color" class="product-colors" style="background-image: url('<?php echo asset_url(); ?>images/full-width-images/section-bg-color.png')">
            <div class="container">
                <div class="row">
                    <!-- Left Column / Headphones Image -->
                    <div class="col-md-6 ">
                        <div class="product-color-imgs wow slideInLeft">
                            <img data-image="shadow" class="active" src="<?php echo asset_url(); ?>images/color/shadow.png" alt="">
                            <img data-image="black" src="<?php echo asset_url(); ?>images/color/black.png" alt="">
                            <img data-image="blue" src="<?php echo asset_url(); ?>images/color/blue.png" alt="">
                            <img data-image="red" src="<?php echo asset_url(); ?>images/color/red.png" alt="">
                        </div>

                    </div>
                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="product-colors-right wow slideInRight">
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Headphones
                                </span>
                                <h1>K-Beats Wireless Headphone
                                </h1>
                                <p>K-Beats Wireless Headphone headphones deliver a premium listening experience with
                                    Pure
                                    Adaptive Noise Cancelling (Pure ANC) to actively block external noise, and
                                    real-time
                                    audio calibration to preserve clarity, range and emotion. It continuously pinpoints
                                    external sounds to block while automatically responding to individual fit in
                                    real-time,
                                    optimizing sound output to preserve a premium listening experience the way artists
                                    intended.
                                </p>
                            </div>
                            <!-- Product Configuration -->
                            <div class="product-configuration">
                                <!-- Product Color -->
                                <div class="product-color">
                                    <span>Select Color
                                    </span>
                                    <div class="color-choose">
                                        <div>
                                            <input data-image="shadow" type="radio" id="shadow" name="color" value="shadow"
                                                checked>
                                            <label for="shadow">
                                                <span>
                                                </span>
                                            </label>
                                        </div>
                                        <div>
                                            <input data-image="red" type="radio" id="red" name="color" value="red">
                                            <label for="red">
                                                <span>
                                                </span>
                                            </label>
                                        </div>
                                        <div>
                                            <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                                            <label for="blue">
                                                <span>
                                                </span>
                                            </label>
                                        </div>
                                        <div>
                                            <input data-image="black" type="radio" id="black" name="color" value="black">
                                            <label for="black">
                                                <span>
                                                </span>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- Product Pricing -->
                            <div class="product-price">
                                <span>$ 349.95 </span>
                                <a href="product-single.html" class="btn btn-gradient btn-lg btn-rounded ml-auto">Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section Feature -->
        <section id="features" class="p-feature ">

            <div class="container">
                <div class="heading ">
                    <h2> <b>Features</b> HeadPhone</h2>
                    <p>Hear the music. Not the noise.</p>
                </div>
                <div class="row">

                    <div class="col-lg-6">
                        <div class="feature-slider">
                            <div class="feature-circle wow slideInLeft" data-wow-delay="2s"></div>
                            <div id="device-slider-1" class="owl-carousel screens owl-theme wow slideInLeft">
                                <div class="item text-center">
                                    <div class="client-img">
                                        <img src="<?php echo asset_url(); ?>images/features/features-1.png" alt="features">
                                    </div>

                                </div>
                                <div class="item text-center">
                                    <div class="client-img">
                                        <img src="<?php echo asset_url(); ?>images/features/features-2.png" alt="features">
                                    </div>

                                </div>
                                <div class="item text-center">
                                    <div class="client-img">
                                        <img src="<?php echo asset_url(); ?>images/features/features-3.png" alt="features">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="p-feature-content">
                                <div class="collapse-feature active" data-toggle_screen="1" data-toggle_slider="device-slider-1">

                                    <div class="d-flex align-items-center">
                                        <div class="icon-box">
                                            <div class="inner">
                                                <i class="flaticon-headphones"></i>
                                            </div><!-- /.inner -->
                                        </div><!-- /.icon-box -->

                                        <div class="collapse-feature-text">
                                            <div class="text-box">
                                                <h4>Responsive Noise Blocking</h4>
                                            </div>
                                            <div class="collapse-feature-body">
                                                Pure ANC continuously pinpoints and blocks external sounds while
                                                automatically responding to individual fit and music playback.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse-feature" data-toggle_screen="2" data-toggle_slider="device-slider-2">

                                    <div class="d-flex align-items-center">
                                        <div class="icon-box">
                                            <div class="inner">
                                                <i class="flaticon-mute-button"></i>
                                            </div><!-- /.inner -->
                                        </div><!-- /.icon-box -->

                                        <div class="collapse-feature-text">
                                            <div class="text-box">
                                                <h4>Sealed For Sound</h4>
                                            </div>
                                            <div class="collapse-feature-body">
                                                Soft, over-ear cushions feature advanced venting and signature
                                                ergonomic pivoting for a custom, flexible fit that keeps the music in
                                                and the noise out.
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="collapse-feature" data-toggle_screen="3" data-toggle_slider="device-slider-3">

                                    <div class="d-flex align-items-center">
                                        <div class="icon-box">
                                            <div class="inner">
                                                <i class="flaticon-music-controller"></i>
                                            </div><!-- /.inner -->
                                        </div><!-- /.icon-box -->

                                        <div class="collapse-feature-text">
                                            <div class="text-box">
                                                <h4>Real-Time Audio Calibration</h4>
                                            </div>
                                            <div class="collapse-feature-body">
                                                Pure ANC constantly optimizes sound output to preserve clarity, range,
                                                emotion, and a premium listening experience.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Section b-Feature -->
        <div class="container">
            <div class="heading">
                <h2> Pair. <b>Power.</b> Connect. </h2>
                <p class="sub-heading">Beats and Apple are changing the way you listen to music with the Apple W1 chip
                    in K-Beats Wireless Headphone headphones.
                </p>
            </div>
        </div>
        <section class="b-features" style="background-image: url('<?php echo asset_url(); ?>images/full-width-images/section-bg-b-features-1.png')">
            <div class="container">
                <div class="row no-gutters ">
                    <div class="col-md-6 ">
                        <div class="b-features-content wow slideInLeft">
                            <i class="flaticon-tools"></i>
                            <h3>All-Day Play</h3>
                            <p>Up to 22 hours of battery life enables full-featured, all-day wireless playback. Turning
                                Pure ANC off for low-power mode provides up to 40 hours of playback without sacrificing
                                audio quality.</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <img src="<?php echo asset_url(); ?>images/b-features/b-features-1.jpg" class="has-dropshadow wow slideInRight" alt="Awesome Image">
                    </div>
                </div>
            </div>
        </section>


        <section class="b-features">
            <div class="b-features-decor">
                <div class="b-features-triangle-1"><img src="<?php echo asset_url(); ?>images/animation/ratings-1.png" alt=""></div>
                <div class="b-features-circle-1"><img src="<?php echo asset_url(); ?>images/animation/ratings-2.png" alt=""></div>
            </div>
            <div class="container">
                <div class="row no-gutters ">
                    <div class="col-md-6 order-2 order-md-1">
                        <img src="<?php echo asset_url(); ?>images/b-features/b-features-2.jpg" class="has-dropshadow wow slideInLeft" alt="Awesome Image">
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 order-1">
                        <div class="b-features-content wow slideInRight">
                            <i class="flaticon-tools"></i>
                            <h3>Charge and Go</h3>
                            <p>Fast Fuel technology can turn 10 minutes of charging into 3 hours of playback when
                                battery is low.</p>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="b-features">
            <div class="container">
                <div class="row no-gutters ">
                    <div class="col-md-6">
                        <div class="b-features-content wow slideInLeft">
                            <i class="flaticon-tools"></i>
                            <h3>Industry-Leading Bluetooth®</h3>
                            <p>Class 1 Bluetooth® technology allows for extended range with fewer dropouts than ever,
                                so you can move freely and keep the music going./p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo asset_url(); ?>images/b-features/b-features-3.jpg" class="has-dropshadow wow slideInRight" alt="Awesome Image">
                    </div>
                </div>
            </div>
        </section>

        <section class="b-features" style="background-image: url('<?php echo asset_url(); ?>images/full-width-images/section-bg-b-features-2.png')">
            <div class="container">
                <div class="row no-gutters ">
                    <div class="col-md-6 order-2 order-md-1">
                        <img src="<?php echo asset_url(); ?>images/b-features/b-features-4.jpg" class="has-dropshadow wow slideInLeft" alt="Awesome Image">
                    </div>

                    <div class="col-md-6 order-1">
                        <div class="b-features-content wow slideInRight">
                            <i class="flaticon-tools"></i>
                            <h3>Seamless Switching</h3>
                            <p>iOS 10 or iOS 11 users have the ability to seamlessly switch between iCloud-registered
                                devices*, meaning you can conveniently transfer from taking a call on your iPhone to
                                watching a movie on your MacBook.
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Section b-Feature -->


        <!-- Section shop -->
        <section id="shop" class="shop bg-img" style="background-image: url('<?php echo asset_url(); ?>images/full-width-images/section-bg-shop.png')">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel owl-p owl-theme">

                        <?php foreach ($product as $row) {
                                        echo '<div class="product-item">
                            <div class="product-item-images">
                                <a href="" class="product-item-image-inner">
                                    <img src="'.asset_url().'images/shop/'.$row->product_image.'" alt="">
                                    <img src="'.asset_url().'images/shop/'.$row->product_image_two.'" alt="product image">
                                </a>
                            </div>
                            <div class="product-item-content">
                                <h5><a href="">'.$row->product_name.' </a></h5>
                                <div class="price-box">
                                    <a href="'.base_url().'index.php/shoppingcart/add/'.$row->product_id.'" class="add-to-cart-button">

                                        <span name="add_cart" class="add-top-cart-button add_cart" data-productname="'.$row->product_name.'" data-price="'.$row->product_price.'" data-productid="'.$row->product_id.'">Add to cart</span>
                                    </a>
                                    <span class="pricebox-price"><b>$</b>'.$row->product_price.'</span>
                                </div>
                            </div>
                        </div>';
                                    }
                                 ?>
                        


                    </div>
                </div>
            </div>
        </section>
        <!-- End Section shop -->

        <!-- background-video -->
        <div class="section-bg-video">
            <div class="container-video text-center text-white">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="heading-white">

                        <h2><b>k</b>-beats </h2>
                        <h4 class="sub-heading">
                            Hear the music. Not the noise.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="bg-overlay transparent-dark bg-black"></div>
            <div class="videobox">
                <video autoplay loop muted poster="<?php echo asset_url(); ?>video/video.jpg">
                    <source src="<?php echo asset_url(); ?>video/video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="curve curve-bottom curve-center"></div>
        </div>
        <!-- end background-video -->





        <!-- Section Unboxed -->
        <section id="unboxed" class="unboxed">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="unboxed-content">
                            <div class="center">
                                <div class="heading-two">
                                    <h2> <b>U</b>nboxed </h2>
                                    <p class="sub-heading"></p>
                                </div>

                                <div class="d-flex ">
                                    <div class="number-content">
                                        <div class="number">0,24</div>
                                        <span>Weight (KG)</span>
                                    </div>

                                    <div class="number-content">
                                        <div class="number">204</div>
                                        <span>Height (MM)</span>
                                    </div>
                                </div>

                                <ul class="unboxedlist">
                                    <li><b>01.</b> Beats Studio<sup>3</sup> Wireless Headphones</li>
                                    <li><b>02.</b> Carrying Case</li>
                                    <li><b>03.</b> 3.5mm RemoteTalk cable</li>
                                    <li><b>04.</b> Universal USB charging cable</li>
                                    <li><b>05.</b> Quick Start Guide</li>
                                    <li><b>06.</b> Warranty Card</li>
                                </ul>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="unboxed-img">
                            <img src="<?php echo asset_url(); ?>images/unboxed/unboxed.png" alt="unboxed">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section Unboxed -->

        <!-- Ratings  -->
        <section id="ratings" class="ratings" style="background-image: url('<?php echo asset_url(); ?>images/full-width-images/section-bg-ratings.png')">
            <div class="ratings-decor">
                <div class="ratings-circle1"><img src="<?php echo asset_url(); ?>images/animation/ratings-1.png" alt=""></div>
                <div class="ratings-circle2"><img src="<?php echo asset_url(); ?>images/animation/ratings-2.png" alt=""></div>
            </div>

            <div class="container">
                <div class="heading">
                    <h2> Ratings and <b>Reviews</b> </h2>
                    <p class="sub-heading">
                        <div class="ratting-box">
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                        </div>

                        <div class="review-count">3.48 Average (122 Reviews)</div>
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="owl-carousel owl-t owl-theme">
                            <div class="ratings-item">
                                <div class="ratings-block">
                                    <div class="ratings-avtar">
                                        <img src="<?php echo asset_url(); ?>images/testimonials/testimonials-1.jpg" alt="">
                                    </div>

                                    <div class="ratings-text">
                                        <div class="ratting-box">
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000
                                            years
                                            old.Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                                        <h3>Andrea King </h3>

                                    </div>
                                </div>
                            </div>
                            <div class="ratings-item">
                                <div class="ratings-block">
                                    <div class="ratings-avtar">
                                        <img src="<?php echo asset_url(); ?>images/testimonials/testimonials-2.jpg" alt="">
                                    </div>

                                    <div class="ratings-text">
                                        <div class="ratting-box">
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                        </div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000
                                            years
                                            old.Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                                        <h3>Luis King</h3>

                                    </div>
                                </div>
                            </div>
                            <div class="ratings-item">
                                <div class="ratings-block">
                                    <div class="ratings-avtar">
                                        <img src="<?php echo asset_url(); ?>images/testimonials/testimonials-3.jpg" alt="">
                                    </div>

                                    <div class="ratings-text">
                                        <div class="ratting-box">
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                            <span class="active"><i class="fa fa-star"></i></span>
                                        </div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000
                                            years
                                            old.Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                                        <h3>Alice King</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Ratings  end-->

        <section class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="newsletter-text">
                            <div class="heading ">
                                <h2><b>Hear </b> it first</h2>
                                <p class="sub-heading ">Get updates on product drops, collaborations and all things
                                    Beats.
                                </p>
                            </div>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="enter your email">
                                </div>
                                <div class="newsletter-button">
                                    <button type="submit" class="btn btn-lg btn-gradient btn-rounded">send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact -->
        <section id="contact" class="contact" style="background-image: url('<?php echo asset_url(); ?>images/full-width-images/section-bg-contact.png')">
            <div class="container ">

                <div class="row ">
                    <div class="col-md-6">
                        <img src="<?php echo asset_url(); ?>images/contact/contact.png" class="wow slideInLeft" alt="contact">
                    </div>
                    <div class="col-md-6 ">
                        <div class="heading mb-0">
                            <h2>Contact <b> US </b></h2>
                            <p class="sub-heading ">Get updates on product drops, collaborations and all things Beats.
                            </p>
                        </div>
                        <div class="contact-form">
                            <div id="form-messages"></div>

                            <form class="needs-validation" id="ajax-contact" novalidate>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" id="name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xs-6 ">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email"
                                            id="email" required>
                                    </div>
                                </div>

                                <div class="col-xs-12 ">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message"
                                            id="message" required></textarea>
                                    </div>
                                </div>

                                <button id="btnSubmit" type="submit" name="submit" class="btn btn-lg btn-block btn-gradient btn-rounded">Send
                                </button>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- contact end-->
<?php 
@include('layout/footer.php');
?>