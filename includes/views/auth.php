<div id="hype-container">
    <div class="form hype">
    	<div class="header-form"><img src="<?php echo plugin_dir_url( __DIR__ ) . 'img/logo.svg'?>" alt="Hype"></div>
    	<div class="description-form">
			<p><b>Connect your Hype account.</b><br>Your Account ID and API Key can be found in the WordPress app card settings by navigating to <a href="https://app.hype.co/apps" target="blank">Apps ► WordPress</a> in the Hype app.</p>
    	</div>
		<form class="login-form" action="<?php echo get_site_url(); ?>/wp-admin/admin.php?page=hype-plugin" method="post" autocomplete="off">
			<?php
                if ( function_exists('wp_nonce_field') )
                    wp_nonce_field('pico-connect');
            ?>
    		<p class="login-label">Account ID</p>
    		<input type="text" id="publisher_id" name="publisher_id">
    		<p class="login-label">API Key</p>
    		<input type="text" id="api_key" name="api_key">
    		<input type="hidden" name="action" value="enter-key">
    		<input type="submit" name="submit" id="submit" class="hype-button hype-button-primary" value="Connect">
    		<!-- <button>Connect</button> -->
    		<div style="clear: both"></div>
    	</form>
    </div>
    <div class="footer-form">
		<div class="f-left"><p>Manage user registration, revenue, and content access settings for this site in the <a href="https://app.hype.co" target="_blank">Hype app</a>.</p></div>
		<div class="f-right"><a href="https://app.hype.co" target="_blank"><img src="<?php echo plugin_dir_url( __DIR__ ) . 'img/ic_launch.svg'?>" alt="Launch Hype"></a></div>
    </div>
</div>
