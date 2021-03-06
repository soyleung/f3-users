<?php 
	$opts = array(
			array( 'value' => 1, 'text' => 'Yes' ),
			array( 'value' => 0, 'text' => 'No' ),
	);

?>
<div class="row">
    <div class="col-md-12">

        <div class="alert alert-info">
        When registering your applications with each provider, the Callback URL will use the following format:
        <p><?php $f3 = \Base::instance(); echo $f3->get('SCHEME') . '://' . $f3->get('HOST') . $f3->get('BASE') . '/login/social?hauth.done={provider}'; ?></p>
        </div>
        
        <div class="row">
            <div class="col-md-2">

                <h3>Facebook</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][Facebook][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.Facebook.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App ID</label>
                    <input type="text" name="social[providers][Facebook][keys][id]" placeholder="App ID" value="<?php echo $flash->old('social.providers.Facebook.keys.id'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App Secret</label>
                    <input type="text" name="social[providers][Facebook][keys][secret]" placeholder="App Secret" value="<?php echo $flash->old('social.providers.Facebook.keys.secret'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->

        <hr />

        <div class="row">
            <div class="col-md-2">

                <h3>Twitter</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][Twitter][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.Twitter.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App ID</label>
                    <input type="text" name="social[providers][Twitter][keys][key]" placeholder="App ID" value="<?php echo $flash->old('social.providers.Twitter.keys.key'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App Secret</label>
                    <input type="text" name="social[providers][Twitter][keys][secret]" placeholder="App Secret" value="<?php echo $flash->old('social.providers.Twitter.keys.secret'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->
        
        <hr />

        <div class="row">
            <div class="col-md-2">

                <h3>Google</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][Google][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.Google.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App ID</label>
                    <input type="text" name="social[providers][Google][keys][id]" placeholder="App ID" value="<?php echo $flash->old('social.providers.Google.keys.id'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App Secret</label>
                    <input type="text" name="social[providers][Google][keys][secret]" placeholder="App Secret" value="<?php echo $flash->old('social.providers.Google.keys.secret'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->
        
        <hr/>

        <div class="row">
            <div class="col-md-2">

                <h3>GitHub</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][GitHub][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.GitHub.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Client ID</label>
                    <input type="text" name="social[providers][GitHub][keys][id]" placeholder="Client ID" value="<?php echo $flash->old('social.providers.GitHub.keys.id'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Client Secret</label>
                    <input type="text" name="social[providers][GitHub][keys][secret]" placeholder="Client Secret" value="<?php echo $flash->old('social.providers.GitHub.keys.secret'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->
        
        <hr />

        <div class="row">
            <div class="col-md-2">

                <h3>LinkedIn</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][LinkedIn][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.LinkedIn.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App Key</label>
                    <input type="text" name="social[providers][LinkedIn][keys][key]" placeholder="App Key" value="<?php echo $flash->old('social.providers.LinkedIn.keys.key'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Secret Key</label>
                    <input type="text" name="social[providers][LinkedIn][keys][secret]" placeholder="Secret Key" value="<?php echo $flash->old('social.providers.LinkedIn.keys.secret'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->
        
        <hr />

        <div class="row">
            <div class="col-md-2">

                <h3>PayPal</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][PaypalOpenID][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.PaypalOpenID.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Client ID</label>
                    <input type="text" name="social[providers][PaypalOpenID][keys][id]" placeholder="Client ID" value="<?php echo $flash->old('social.providers.PaypalOpenID.keys.id'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Client Secret</label>
                    <input type="text" name="social[providers][PaypalOpenID][keys][secret]" placeholder="Client Secret" value="<?php echo $flash->old('social.providers.PaypalOpenID.keys.secret'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->
        
        <hr />
        
        <div class="row">
            <div class="col-md-2">

                <h3>Instagram</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][Instagram][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.Instagram.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Client ID</label>
                    <input type="text" name="social[providers][Instagram][keys][id]" placeholder="Client ID" value="<?php echo $flash->old('social.providers.Instagram.keys.id'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>Client Secret</label>
                    <input type="text" name="social[providers][Instagram][keys][secret]" placeholder="Client Secret" value="<?php echo $flash->old('social.providers.Instagram.keys.secret'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->
        
        <hr />
        
        <?php
        /**
         * This shouldn't be necessary
         * ?>
         * <label>Base URL</label>
         * <input name="social[base_url]" type="url" required="required" value="<?php echo $flash->old('social.base_url'); ?>">
         * <?php if(empty($flash->old('social.base_url'))) : ?>
         * <pre>http://your-site-url.com/social</pre>
         * <?php endif; ?>
         */
        ?>

    </div>
</div>
