<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Joblister</title>
	<link rel="stylesheet" href="templates/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="templates/assets/css/style.css">
	<link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
</head>

<body>
	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right">
					<li role="presentation"><a href="index.php">Home</a></li>
					<li role="presentation"><a href="create.php">Add Job</a></li>
				</ul>
			</nav>
			<h3 class="text-muted">
				<?php if ( $_SERVER['PHP_SELF'] !== '/index.php' ) : ?>
					<a href="<?php echo SITE_URL; ?>"><?php echo SITE_TITLE ?></a>
				<?php else : ?>
					<?php echo SITE_TITLE ?>
				<?php endif; ?>
			</h3>
		</div>
		<?php displayMessage(); ?>