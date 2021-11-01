<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <p>You are 30 seconds away from joining your class!</p>
            <input type="submit" name="" value="Login" /><br />
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <form method="POST">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register as New Class Member</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo $first_name; ?>" />
                                    <?php echo $loi_first_name; ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo $last_name; ?>" />
                                    <?php echo $loi_last_name; ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control" placeholder="Password - First word must be UPPERcase" value="<?php echo $pass; ?>" />
                                    <?php echo $loi_pass; ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="c_pass" class="form-control" placeholder="Confirm Password" value="<?php echo $c_pass; ?>" />
                                    <?php echo $loi_c_pass; ?>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" />
                                    <?php echo $loi_email; ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" minlength="10" maxlength="10" class="form-control" placeholder="09x/07x/08x/03x" value="<?php echo $phone; ?>" />
                                    <?php echo $loi_phone; ?>
                                </div>
                                <div class="form-group">
                                    <select name="question" class="form-control">
                                        <option class="hidden">What is your Birthday?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="date" name="answer" class="form-control" placeholder="Your Birthday" value="<?php echo $answer; ?>" />
                                    <?php echo $loi_answer; ?>
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />

                            </div>
                            <?php echo $loi_exist; ?>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>