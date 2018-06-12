		
		</div>
		<footer>
			<?php if(is_front_page()) { ?>		
				<div class="home-spotify">
					<?php the_field('music_player', 2); ?>
				</div>
			<?php } ?>
			<div class="newsletter">
				<p>Subscribe to our newsletter.</p>
				 <style> .pop-up-signup-in { background-color: #ffffff; border: 5px solid #eeeeee; border-radius: 5px; box-sizing: border-box; padding: 20px 15px; text-align: center; } .pop-up-signup-in p { color: #6a6a6a; font-size: 16px; line-height: 20px; margin: 0; } .pop-up-signup-in p.cont-link { background-color: #f0f0f0; border: 1px solid #dddddd; margin: 15px 0 10px; padding: 15px 25px; } #share_twitter { background: #7fbbdf url("https://www.fanbridge.com/images/widget/manage/video/share-twitter.png") no-repeat scroll 9px center; } #share_facebook { background: #3b5999 url("https://www.fanbridge.com/images/widget/manage/video/share-facebook.png") no-repeat scroll 11px center; } .button.share_button { color: #ffffff; font-weight: bold; height: 40px; line-height: 44px; margin-right: 10px; padding: 10px 15px 10px 40px !important; text-decoration: none; } #cboxLoadedContent { margin-bottom: 28px; overflow-x: hidden; overflow-y: auto; } .signup-pop-up #cboxClose { right: 0; top: -15px; } #cboxClose { background: rgba(0, 0, 0, 0) url("https://www.fanbridge.com/images/btn_close.png") no-repeat scroll 0 0; border: 0 none; height: 38px; position: absolute; right: -20px; text-indent: -9999px; top: -20px; width: 38px; z-index: 10001; } #cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow { cursor: pointer; } .fbridge select::-ms-expand { display: none; } input.fb-input-error { border: 1px solid red; } </style>
				<form id="html_form" action="https://www.fanbridge.com/signup/2.5/submit?userid=214622" method="get">
					<input type="email" placeholder="Enter Your Email Address" name="email" class="required email" id="email">
					<div style="display:none;"> <input type='text' name='favorite_color' value='WhiteSmoke'/> </div>
					<input type="hidden" name="userid" value="214622"/>
					<input type="submit" name="Submit" value="Submit">
				</form>
			</div>
			<p class="copyright">
				copyright © <?php echo date("Y"); ?> Electric Bird Records
			</p>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://www.fanbridge.com/js/fb/form/v1/platform.js"></script> <script type="text/javascript" src="https://www.fanbridge.com/js/jquery/colorbox.js"></script>
		<?php global $asset_v; ?>
		<script src="<?php bloginfo('template_url'); ?>/js/main.min.js?v=<?php echo $asset_v; ?>"></script>
		<?php wp_footer(); ?>
	</body>
</html>


