<?php $settings = \Users\Models\Settings::fetch(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <legend>
                Register with your email address
            </legend>
            <form action="./register" method="post" class="form" role="form">
            
                <?php if ($settings->{'general.registration.username'}) { ?>
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="username" placeholder="Username" value="<?php echo $flash->old('username'); ?>" type="text" required autofocus />
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" name="first_name" placeholder="First Name" value="<?php echo $flash->old('first_name'); ?>" type="text" autocomplete="given-name" required />
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $flash->old('last_name'); ?>" type="text" autocomplete="family-name" required />
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control" name="email" placeholder="Email Address" value="<?php echo $flash->old('email'); ?>" type="email" required />
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="new_password" placeholder="New Password" type="password" required />
                </div>
                
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input class="form-control" name="confirm_new_password" placeholder="Confirm New Password" type="password" required />
                </div>
                 
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            </form>
        </div>
        
        <?php 
        if (class_exists('Hybrid_Auth')) 
        {
            ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-1">
            <?php // TODO Only display this if there is a properly configured, enabled Provider ?>
            <legend>
                or with a social profile
            </legend>
                        
            <?php echo $this->renderLayout('Users/Site/Views::login/social.php'); ?>
            </div>
            <?php  
        } 
        ?>        
    </div>
</div>