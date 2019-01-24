
          <!--register form -->
            <div class="main-register-wrap modal" id="myModal" role="dialog">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Sign In <span>City<strong>Book</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-content">
                                    <div class="custom-form">

                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address * </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password * </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit" name="login"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>

                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">

                                           <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart-/form-data" name="registerform" class="main-register-form" id="main-register-form2">
                                                <?php echo !empty($message) ? $message : ''; ?>
                                                <label >First Name * </label>
                                                <input name="input_first" type="text"   onClick="this.select()" value="<?php if(isset($_GET['input_first'])) echo $_GET['input_first']; ?>">
                                                <label>Last Name *</label>
                                                <input name="input_last" type="text"  onClick="this.select()" value="<?php if(isset($_GET['input_last'])) echo $_GET['input_last']; ?>">
                                                <label>Email Address *</label>
                                                <input name="input_email" type="email"  onClick="this.select()" value="<?php if(isset($_GET['input_email'])) echo $_GET['input_email']; ?>">
                                                <label >Password *</label>
                                                <input name="input_password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit" name="register"    class="log-submit-btn"  ><span>Register</span></button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
            <!--register form end -->