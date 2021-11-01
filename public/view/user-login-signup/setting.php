<div class="container register">
    <div class="row">
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <form method="POST">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Setting your info</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?= $user->first_name; ?>" />
                                    <?= $loi_first_name; ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?= $user->last_name; ?>" />
                                    <?= $loi_last_name; ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password - First word must be UPPERcase" value="<?= $user->password; ?>" />
                                    <?= $loi_pass; ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="c_password" class="form-control" placeholder="Confirm Password" />
                                    <?= $loi_c_pass; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email" value="<?= $user->email; ?>" />
                                    <?= $loi_email; ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" minlength="10" maxlength="10" class="form-control" placeholder="09x/07x/08x/03x" value="<?= $user->phone; ?>" />
                                    <?= $loi_phone; ?>
                                </div>
                                <input type="submit" class="btnRegister" value="Update" />
                            </div>
                            <?= $loi_exist; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>