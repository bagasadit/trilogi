<!DOCTYPE html>
<html lang="en">	
<head>
	<meta charset="utf-8" />
	<title><?php echo $title;?> | Development & Digital Marketing | PHIXIT</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/prettyPhoto.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.min.css')?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/prefixfree.min.js');?>"></script>
<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome-4.4.0/css/font-awesome.min.css');?>">
<!--
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
-->
</head>
<body>
<header class="navbar-headcontainer-clone">
	<div class="container-fluid">
		<div class="row">
			<div id="brand" class="col-xs-2">
				<a href="<?php echo base_url('home');?>" >
					<img src="<?php echo base_url('assets/images/logo-edit.png');?>" />
				</a>
			</div>
			<nav class="col-xs-10 pull-right nav">
				<ul class="menu pull-right">
					<li><a href="<?php echo base_url('home');?>">Home</a></li>
					<li><a href="<?php echo base_url('work');?>">Work</a></li>
					<li><a href="<?php echo base_url('services');?>">Services</a></li>
					<li><a href="<?php echo base_url('about');?>">About</a></li>
					<li><a href="<?php echo base_url('blog');?>">Blog</a></li>
					<li><a href="<?php echo base_url('contact');?>">Contact</a></li>
					<li><a href="<?php echo base_url('start-project');?>" class="unique-menu">Get started</a></li>
				</ul>
			</nav>
			<div id="nav-icon1" class="col-xs-6">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="drop-down">
				<nav class="navigation-dropdown">
					<ul>
						<li><a href="<?php echo base_url('home');?>">Home</a></li>
						<li><a href="<?php echo base_url('work');?>">Work</a></li>
						<li><a href="<?php echo base_url('services');?>">Services</a></li>
						<li><a href="<?php echo base_url('about');?>">About</a></li>
						<li><a href="<?php echo base_url('blog');?>">Blog</a></li>
						<li><a href="<?php echo base_url('contact');?>">Contact</a></li>
						<li><a href="<?php echo base_url('start-project');?>" class="unique-dropdown">Get started</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
<?php
if(@$pages === 'home'){
				?>
				<header class="featured">	
				<?php
			} elseif(@$pages === 'about') {
				?>
				<header class="featured featured-work">
				<?php
			} elseif(@$pages === 'blog') {
				?>
				<header class="featured featured-work">
				<?php
			} elseif(@$pages === 'services') {
				?>
				<header class="featured featured-work">
				<?php
			} elseif(@$pages === 'work') {
				?>
				<header class="featured featured-work">
				<?php
			} elseif(@$pages === 'contact') {
				?>
				<header class="featured featured-work">
				<?php
			} elseif(@$pages === 'detail_team') {
				?>
				<header class="featured featured-work">
				<?php
			} elseif(@$pages === 'detail_blog'){
				$uri_unique_title = $this->uri->segment(3);
				$query_blog_detail = $this->db->query("select * from `blog` WHERE `unique_title_blog` = '$uri_unique_title'");
				foreach ($query_blog_detail->result() as $data) {
					$images = substr($data->images_blog,19);
					?>
					<header class="featured featured-blog" style="background: url(<?php echo base_url($data->images_blog);?>);">
					<?php
				}
				?>
				<?php
			} elseif(@$pages === 'detail_work'){
				$uri_unique_title_work = $this->uri->segment(3);
				$query_work_detail = $this->db->query("select * from `work` WHERE `unique_title_work` = '$uri_unique_title_work'");
				foreach ($query_work_detail->result() as $data) {
					?>
					<header class="featured featured-work-detail" style="background: url(<?php echo base_url($data->images_work);?>);">
					<?php
				}
				?>
				<?php
			} elseif(@$pages === 'start_project'){
				?>
				<header class="featured featured-start">
				<?php
			}
		?>
	<div class="container-fluid">
		<div class="row">
			<div id="brand" class="col-xs-2">
				<a href="<?php echo base_url('home');?>">
					<img src="<?php echo base_url('assets/images/logo-edit.png');?>" />
				</a>
			</div>
			<nav class="col-xs-10 pull-right nav">
				<ul class="menu pull-right">
					<li><a href="<?php echo base_url('home');?>">Home</a></li>
					<li><a href="<?php echo base_url('work');?>">Work</a></li>
					<li><a href="<?php echo base_url('services');?>">Services</a></li>
					<li><a href="<?php echo base_url('about');?>">About</a></li>
					<li><a href="<?php echo base_url('blog');?>">Blog</a></li>
					<li><a href="<?php echo base_url('contact');?>">Contact</a></li>
					<li><a href="<?php echo base_url('start-project');?>" class="unique-menu">Get started</a></li>
				</ul>
			</nav>
			<div id="nav-icon2" class="col-xs-6">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="drop-down-2">
				<nav class="navigation-dropdown">
					<ul>
						<li><a href="<?php echo base_url('home');?>">Home</a></li>
						<li><a href="<?php echo base_url('work');?>">Work</a></li>
						<li><a href="<?php echo base_url('services');?>">Services</a></li>
						<li><a href="<?php echo base_url('about');?>">About</a></li>
						<li><a href="<?php echo base_url('blog');?>">Blog</a></li>
						<li><a href="<?php echo base_url('contact');?>">Contact</a></li>
						<li><a href="<?php echo base_url('start-project');?>" class="unique-dropdown">Get started</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="row">
		<?php
			if(@$pages === 'home'){
				?>
				<div class="emblem col-xs-12 text-center">
					<img class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms" src="<?php echo base_url('assets/images/emblem1.png');?>" />
					<h1 class="col-xs-12 col-lg-6 col-lg-offset-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">You are Our Priority</h1>
				</div>	
				<?php
			} elseif(@$pages === 'about') {
				?>
				<div class="emblem wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
					<h1 class="col-xs-12 col-lg-6 col-lg-offset-3 text-center">About Us</h1>
					<h2 class="featured-caption text-center">A small group of developers</h2>
				</div>
				<?php
			} elseif(@$pages === 'blog') {
				?>
				<div class="emblem wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
					<h1 class="col-xs-12 col-lg-6 col-lg-offset-3 text-center">Our Blog</h1>
					<h2 class="featured-caption text-center">Life Become Simple, Afordable, and Digital</h2>
				</div>
				<?php
			} elseif(@$pages === 'services') {
				?>
				<div class="emblem wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
					<h1 class="col-xs-12 col-lg-6 col-lg-offset-3 text-center">Our Services</h1>
					<h2 class="featured-caption text-center">Accomodating variety needs</h2>
				</div>
				<?php
			} elseif(@$pages === 'work') {
				?>
				<div class="emblem wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
					<h1 class="col-xs-12 col-lg-6 col-lg-offset-3 text-center">Our Work</h1>
					<h2 class="featured-caption text-center">Digital way into conveniences</h2>
				</div>
				<?php
			} elseif(@$pages === 'contact'){
				?>
				<div class="emblem wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
					<h1 class="col-xs-12 col-lg-6 col-lg-offset-3 text-center">Leave Us Message</h1>
					<h2 class="featured-caption text-center">You can find us literally anywhere, just push a button and were there</h2>
				</div>
				<?php
			} elseif(@$pages === 'detail_team') {
				?>
				<?php
				$uri = $this->uri->segment(3);
				$query_title_team = $this->db->query("SELECT * FROM `team` WHERE `id_team` = '$uri'");
				foreach ($query_title_team->result() as $data) {
					?>
					<div class="emblem wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
						<img class="images-title-team" src="<?php echo base_url($data->photo_team);?>">
					</div>
					<?php
				}
			} elseif(@$pages === 'detail_blog'){
				foreach ($query_blog_detail->result() as $data) {
					?>
					<div class="emblem wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h2 class="featured-caption-blog text-center"><?php echo $data->title_blog;?></h2>
					</div>
					<?php
				}
			} elseif(@$pages === 'detail_work'){
				foreach ($query_work_detail->result() as $data) {
					?>
					<div class="emblem wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h2 class="featured-caption-work text-center"><?php echo $data->title_work;?></h2>		
						<strong class="detail_work"><?php echo $data->category_detail_work;?></strong>	
					</div>
					<?php
				}
			} elseif(@$pages === 'start_project'){
				?>
				<div class="emblem wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
					<h2 class="started">Lets Build Something Together</h2>
					<?php
					if(isset($_SESSION['start_project_success'])){
						?>
						<div class="alert-in-start-project">
							Submit Success
						</div>
						<?php
					}unset($_SESSION['start_project_success']);
					?>
					<span></span>
					<?php
					echo form_open('proses/start_project');
					?>
					<input type="text" name="email" class="form-style" placeholder="Your Email" required>
					<input type="submit" class="submit-style" />
					<?php
					echo form_close();
					?>
				</div>
				<?php
			}
		?>
		</div>
	</div>
</header>