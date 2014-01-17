<div class="wrap">
	<div class="postbox">
		<h2>Review Disclaimer Options</h2>
		<p>Enter in a default disclaimer text, which you would like to include inside your reviews of products or services.</p>
		<form method='post' action='options.php'>
			<?php wp_nonce_field( 'update-options' ); ?>
			<?php settings_fields( 'oizuled-review-disclaimer-option-group' ); ?>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">Enter the text you wish to use to disclose your relationship with the company, product, or service you are reviewing.</th>
					<td><textarea rows="5" cols="36" name="oizuled-review-disclaimer"><?php echo get_option('oizuled-review-disclaimer'); ?></textarea><br />Use shortcode <strong>[ReviewDisclaimer]</strong></td>
				</tr>
				<tr valign="top">
					<td colspan="2"><input type="hidden" name="action" value="update" /><?php submit_button(); ?></td>
				</tr>
			</table>
		</form>
	</div>
	<div class="postbox">
		<p>If this plugin has helped you out at all, please consider making a donation to encourage future updates.<br />Your generosity is appreciated!</p>
			<a href="#" onclick="window.open('https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CJGP9D7VBYLN8');">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" width="147" height="47">
			</a>
		<p>To report any issues with <strong>this plugin</strong>, please visit the <a href="http://wordpress.org/support/plugin/review-disclaimer">support page on WordPress.org</a>.</p>
		<p>For all other WordPress support, please check out the following <a href="http://oizuled.com/wordpress-site-setup/">site set-up</a>, <a href="http://oizuled.com/wordpress-support-24x7-unlimited-fast-fixes/">24x7 support</a>, and other <a href="http://oizuled.com/live-wordpress-support-services/">WordPress training</a> services.</p>
		<p><a href="https://twitter.com/oizuled" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @oizuled</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>
	</div>
</div>