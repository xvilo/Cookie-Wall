<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta charset="utf-8">
	<meta content="ie=edge" http-equiv="x-ua-compatible">
	<title><?php echo apply_filters('the_title', $post->post_title); ?></title>
	<?php echo self::getStyles() ?>
	<style>
	    .background {
	        background:<?php echo self::getPageBgColor() ?> url('<?php echo self::getPageBgImage() ?>') no-repeat top center;
	        <?php $blur = self::getBGBlur() ?>
	        -webkit-filter: blur(<?php echo $blur ?>px);
	        -moz-filter: blur(<?php echo $blur ?>px);
	        -o-filter: blur(<?php echo $blur ?>px);
	        -ms-filter: blur(<?php echo $blur ?>px);
	        filter: blur(<?php echo $blur ?>px);
	    }
	</style>
</head>
<body class="cookie_wall">
	<section class="background"></section>
	<section class="overlay"></section>
	<main>
		<section>
			<img alt="logo" id="logo" src="<?php echo self::getLogoUrl(); ?>">
			<h1><?php echo apply_filters('the_title', $post->post_title); ?></h1>
			<p></p>
			<?php echo apply_filters('the_content', $post->post_content); ?>
		</section>
	</main>
		<?php echo self::getScripts() ?>
		<?php echo self::getTrackingCode() ?>
</body>
</html>