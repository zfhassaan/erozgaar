<!--section -->
                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="public/images/circle.png"></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <?php $homepage = 'http://'.$_SERVER['PHP_SELF'];echo strpos($homepage,'about.php') !== false || strpos($homepage,'news.php') !== false ? '<h3>Join our online Community</h3>' : '<h3>Do You Have Questions ?</h3>'; ?>

                                        <p>Lorem ipsum dolor sit amet, harum dolor nec in, usu molestiae at no.</p>
                                    </div>
                                    <div class="col-md-4"><a href="<?php $homepage = 'http://'.$_SERVER['PHP_SELF'];echo strpos($homepage,'about.php') !== false ? '#' : 'contacts.html'; ?> " class="<?php $homepage = 'http://'.$_SERVER['PHP_SELF'];echo strpos($homepage,'about.php') !== false || strpos($homepage,'news.php') !== false ? 'join-wrap-btn modal-open' : 'join-wrap-btn'; ?> "><?php $homepage = 'http://'.$_SERVER['PHP_SELF'];echo strpos($homepage,'about.php') !== false || strpos($homepage,'news.php') !== false ? 'Sign Up <i class="fa fa-sign-in"></i>' : 'Get In Touch <i class="fa fa-envelope-o"></i>'; ?> </a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
