<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<style type="text/css">
		body { background-color: #F2F2F2; margin: 45px 0 0 0; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size: 18px }
		#wrapper { width: 740px; margin: 0 auto; }
		h1 { color: #333333; font: normal normal normal 62px/1em Impact, Charcoal, sans-serif; margin: 0 0 15px 0; }
		pre { padding: 15px; background-color: #FFF; border: 1px solid #CCC; font-size: 16px;}
		#footer p { font-size: 14px; text-align: right; }
		a { color: #000; }
	</style>
    <?php echo Asset::js('jquery-1.6.1.min.js'); ?>
</head>
<body>
	<div id="wrapper">
		<h1><?php echo $title; ?></h1>

		<div id="content">
            <ul class="nav">
				<?php if ( $logged_in ): ?>
				<li><?php echo Html::anchor('users/logout', 'Logout'); ?></li>
				<li><?php echo Html::anchor('users', 'users'); ?></li>
			<?php else: ?>
				<li><?php echo Html::anchor('users/login', 'Login'); ?></li>
				<li><?php echo Html::anchor('users/signup', 'Sign Up'); ?></li>
			<?php endif; ?>
			</ul>

			<?php if (Session::get_flash('success')): ?>
				<?php echo Session::get_flash('success'); ?>
			<?php elseif (Session::get_flash('notice')): ?>
				<?php echo Session::get_flash('notice'); ?>
			<?php elseif (Session::get_flash('error')): ?>
				<?php echo Session::get_flash('error'); ?>
			<?php endif; ?>

			<?php echo $content; ?>

		</div>
	</div>
</body>
</html>