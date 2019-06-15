<section class="services">
	<div class="container-fluid">
		<div class="row">
			<div class="title-sections col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<img src="<?php echo base_url('assets/images/acc/1.png');?>" />
				<h2>Our Services</h2>
				<strong class="span-title">Accomodating variety needs</strong>
			</div>
			<div class="content-sections col-xs-12">
				<div class="services-content col-xs-12 col-sm-4 col-lg-4 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
					<img src="<?php echo base_url('assets/images/services/1.png');?>" />
					<h2>Experiences In Digital</h2>
					<p>We keep a small team. We’re experienced. We’re flexible. We’re used to accommodating a variety of business needs, models and requirements into outstanding user experience</p>
				</div>
				<div class="services-content col-xs-12 col-sm-4 col-lg-4 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
					<img src="<?php echo base_url('assets/images/services/2.png');?>" />
					<h2>Fulfill your needs</h2>
					<p>Identify client's needs, decided accesible technology, provide the assistive technology experts, and finishing job punctually</p>
				</div>
				<div class="services-content col-xs-12 col-sm-4 col-lg-4 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
					<img src="<?php echo base_url('assets/images/services/3.png');?>" />
					<h2>Your Trusted Partner</h2>
					<p>Design and make products with creativity and orginality, using a range of materials and techniques. we produce the satisfying</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="our-team">
	<div class="container-fluid">
		<div class="row">
			<div class="title-sections col-xs-12 wow fadeInDown" data-wow-duration="700ms" data-wow-delay="600ms">
				<img src="<?php echo base_url('assets/images/acc/2_white.png');?>" />
				<h2 class="white">Our Team</h2>
				<strong class="span-ttle">Together achieve more</strong>
			</div>
			<div class="content-team">
				<?php
				$query_team = $this->db->query("SELECT * FROM `team` ORDER BY `id_team` ASC LIMIT 0,4");
				foreach ($query_team->result() as $data) {
					?>
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="600ms" data-wow-delay="800ms">
			                    <div class="team-item text-center">
			                    	<a href="team/detail/<?php echo $data->id_team;?>">
								        <img src="<?php echo base_url($data->photo_team);?>" class="img-responsive background-gray" alt="">
								        <h2><?php echo $data->name_team;?></h2>
								        <strong class="white"><?php echo $data->job_team;?></strong>
							        </a>
			                    </div>
							</div>
					<?php
				}
				?>
			</div>
			<div class="col-xs-12 text-center see-more wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1000ms">
				<a href="<?php echo base_url('about');?>">See more</a>
			</div>
		</div>
	</div>
</section>
<section class="work">
	<div class="container-fluid">
		<div class="row">
			<div class="title-sections col-xs-12 wow fadeInDown" data-wow-duration="800ms" data-wow-delay="600ms">
				<img src="<?php echo base_url('assets/images/acc/3.png');?>" />
				<h2>What we do?</h2>
				<strong class="span-title">Digital way into conveniences</strong>
			</div>
			<ul class="work-filter text-center wow fadeInDown" data-wow-duration="700ms" data-wow-delay="800ms">
                <li><a class="active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn-filter" href="#" data-filter=".mobileapp">Mobile App</a></li>
                <li><a class="btn-filter" href="#" data-filter=".webapp">Web Development</a></li>
            </ul><!--/#work-filter-->
			<div class="work-items wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1000ms">
			<?php
			$query_work = $this->db->query("SELECT * FROM `work`");
			foreach ($query_work->result() as $data) {
				?>
				<div class="work-item <?php echo $data->category_work; ?> col-lg-4 col-sm-6 col-xs-12">
                    <a href="work/detail/<?php echo $data->unique_title_work;?>">
                        <div class="recent-work-wrap">
                        	<figure class="figure-work">
                            	<img class="img-responsive" src="<?php echo base_url($data->images_work);?>" alt="">
                            	<i class="fa fa-eye fa-4x" aria-hidden="true"></i>
                            </figure>
                            <div class="desc-work">
                            	<h2><?php echo $data->title_work;?></h2>
                            	<p><?php echo substr($data->desc_work,0,40);?></p>
                            </div>
                        </div>
                    </a>
                </div><!--/.work-item-->
				<?php
			}
			?>
                </div>
                <div class="col-xs-12 text-center see-more">
					<a href="#">See more</a>
				</div>
		</div>
	</div>
</section>
<!-- END PR DIRUMAH -->
<section class="blog">
	<div class="title-sections col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
		<img src="<?php echo base_url('assets/images/acc/4.png');?>" />
		<h2>Our Blog</h2>
		<strong class="span-title">Life Become Simple, Afordable, and Digital</strong>
	</div>
	<?php
	$query_blog = $this->db->query("select * from `blog` order by id_blog asc limit 0,4");
	foreach ($query_blog->result() as $data) {
		?>
		<div class="content-blog col-xs-12 col-lg-6 clear-padding wow fadeInDown" data-wow-duration="800ms" data-wow-delay="900ms">
			<a href="blog/detail/<?php echo $data->unique_title_blog;?>">
				<img src="<?php echo base_url($data->images_blog);?>" />
				<figcaption><?php echo $data->title_blog;?></figcaption>
			</a>
		</div>
		<?php
	}
	?>
</section>
<section class="get-started">
	<div class="container">
		<div class="row">
			<div class="col-xs-7 col-lg-7 col-md-6 pull-right mockup-images text-right wow slideInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
				<img src="<?php echo base_url('assets/images/mockup.png');?>" />
			</div>
			<div class="col-xs-5 col-lg-5 col-md-6 title-started wow slideInRight" data-wow-duration="900ms" data-wow-delay="800ms">
				<h2>LETS GET YOU IN TOUCH WITH ONE OF OUR EXPERTS</h2>
				<div class="start-project-button">
					<a href="<?php echo base_url('start-project');?>">Start Project</a>
				</div>
			</div>
		</div>
	</div>
</section>