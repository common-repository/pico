<form id="hype-container" action="<?php echo get_site_url(); ?>/wp-admin/admin.php?page=hype-plugin" method="post">
	<?php
        if ( function_exists('wp_nonce_field') )
            wp_nonce_field('pico-disconnect');
    ?>
    <!--Connect form -->
	<div class="form hype">
		<div class="header-form"><img src="<?php echo plugin_dir_url( __DIR__ ) . 'img/logo.svg'?>" alt="Hype"></div>
		<div class="description-form">
			<p><b>Connect your Hype account.</b><br>Your Account ID and API Key can be found in the WordPress app card settings by navigating to <a href="https://app.hype.co/apps" target="blank">Apps ► WordPress</a> in the Hype app.</p>
		</div>
		<p class="login-label">Account ID</p>
		<div class="input-wrapper">
            <?php $publisher_creds = Pico_Setup::get_publisher_id(true); ?>
			<input type="text" id="publisher_id" name="publisher_id" value="<?php echo $publisher_creds['publisher_id']?>" disabled>
			<img src="<?php echo plugin_dir_url( __DIR__ ) . 'img/ic_selected.svg'?>" class="input-img">
		</div>
		<p class="login-label">API Key</p>
		<div class="input-wrapper">
			<input type="password" id="api_key" name="api_key" value="<?php echo $publisher_creds['api_key']?>" disabled>
			<img src="<?php echo plugin_dir_url( __DIR__ ) . 'img/ic_selected.svg'?>" class="input-img">
		</div>
		<?php $health_status = Pico_Menu::health_check(); ?>
		<?php echo $health_status; ?>
		<input type="hidden" name="action" value="disconnect-pp">
		<input type="button" class="hype-button hype-button-danger open-modal" value="Disconnect">
		<!-- <button>Connect</button> -->
		<div style="clear: both"></div>
	</div>
    <!--Dashboard link -->
	<div class="footer-form">
		<div class="f-left"><p>Manage user registration, revenue, and content access settings for this site in the <a href="https://app.hype.co" target="_blank">Hype app</a>.</p></div>
		<div class="f-right"><a href="https://app.hype.co" target="_blank"><img src="<?php echo plugin_dir_url( __DIR__ ) . 'img/ic_launch.svg'?>" alt="Launch Hype"></a></div>
	</div>
    <!--Confirm disconnect -->
	<div id="modal-container" class="modal-disconnect">
	  <div class="modal" id="alert">
		<div class="header">
			<div class="close-alert"><img src="<?php echo plugin_dir_url( __DIR__ ) . 'img/ic_close.svg'?>" alt="Close"></div>
			<div class="alert-title"><b>Disconnect Hype?</b></div>
		</div>
		<div class="message">
		    User registration, revenue, and content access settings for this site will be suspended effective immediately.
		</div>
		<div class="footer">
			<input type="submit" name="submit" id="submit" class="hype-button hype-button-danger close-modal" value="Disconnect">
			<input type="button" name="cancel" id="cancel" class="hype-button hype-button-neutral close-modal" value="Cancel">
		</div>
	  </div>
	</div>
</form>
