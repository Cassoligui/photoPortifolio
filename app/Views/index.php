<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Photography Site</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
</head>

<body>

<?php echo view('commom/header'); ?>
</body>
<!-- main -->
<section class="section-two">
	<div class="container">
		<h2>FOLLOW ON INSTAGRAM</h2>
		<span>@sarah_photographer</span>
		<div class="insta-imgs">
			<div>
				<img src="images/insta-1.jpg">
				<div class="icon-overlay flex">
					<i class="fab fa-instagram"></i>
				</div>
			</div>
			<div>
				<img src="images/insta-2.jpg">
				<div class="icon-overlay flex">
					<i class="fab fa-instagram"></i>
				</div>
			</div>
			<div>
				<img src="images/insta-3.jpg">
				<div class="icon-overlay flex">
					<i class="fab fa-instagram"></i>
				</div>
			</div>
			<div>
				<img src="images/insta-4.jpg">
				<div class="icon-overlay flex">
					<i class="fab fa-instagram"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of main -->

<footer><?php echo view('commom/footer'); ?></footer>

</html>