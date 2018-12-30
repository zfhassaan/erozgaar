<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart-/form-data" name="registerform" class="main-register-form" id="main-register-form2">
                                                <div class="alert alert-danger"><?php $_SESSION['message'] ?></div>
                                                <label >First Name * </label>
                                                <input name="input_first" type="text"   onClick="this.select()" value="">
                                                <label>Last Name *</label>
                                                <input name="input_last" type="text"  onClick="this.select()" value="">
                                                <label>Email Address *</label>
                                                <input name="input_email" type="text"  onClick="this.select()" value="">
                                                <label >Password *</label>
                                                <input name="input_password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit" name="register"    class="log-submit-btn"  ><span>Register</span></button>

                                            </form>