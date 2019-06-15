<section class="about-us wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
	<div class="container-fluid">
		<div class="row">
			<div class="title-about">
				<img src="<?php echo base_url('assets/images/logo-edit.png');?>" alt="" />
				<h2>About Phixit</h2>
				<p>We are a small group of developers, marketers and designers who are experts in their field. We work hard to surpass our clients’ goals; word-of-mouth is our best friend. Our unique expertise in both internet marketing and development allows us to accomplish projects that others simply can’t. If you are looking to choose the steak over the sizzle, you’re in the right place.</p>
			</div>
			<div class="title-sections col-xs-12">
				<img src="<?php echo base_url('assets/images/acc/2.png');?>" />
				<h2>Our Team</h2>
				<strong class="span-ttle">Our experienced team</strong>
			</div>
			<div class="content-team">
				<?php
				$query = $this->db->query("SELECT * FROM `team`");
				foreach ($query->result() as $data) {
					?>
						<div class="col-md-3 col-sm-3">
		                    <div class="team-item text-center">
		                    	<a href="<?php echo base_url();?>team/detail/<?php echo $data->id_team;?>">
							        <img src="<?php echo base_url($data->photo_team);?>" class="img-responsive background-gray" alt="">
							        <h2><?php echo $data->name_team;?></h2>
							        <strong class="font-black"><?php echo $data->job_team;?></strong>
						        </a>
		                    </div>
						</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>