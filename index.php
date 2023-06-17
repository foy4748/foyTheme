<?php
/*
 *
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
<h1><?php echo get_theme_mod('site_title_setting'); ?></h1>
<img src="<?php echo get_theme_mod('brand_logo'); ?>" alt="brand logo" style="width:150px;">
<?php wp_footer(); ?>
</body>
</html>
