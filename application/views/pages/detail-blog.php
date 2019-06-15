<section class="detail_blog wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-lg-8 blog-page-content">
			<?php
			$uri_title_blog = $this->uri->segment(3);
			$query_blog = $this->db->query("select * from `blog` where `unique_title_blog` = '$uri_title_blog'");
			foreach ($query_blog->result() as $data) {
				?>
				<div class="wrap-blog-page col-xs-12 clear-padding">
						<div class="col-xs-12 date-and-by border-top-date">
							<span class="col-xs-6 date"><?php echo $data->date_blog;?></span>
							<strong class="col-xs-6">By : <?php echo $data->author_blog;?></strong>
						</div>
						<div class="col-xs-12 desc-blog">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum....</p>
							<h2>Lorem Ipsum :</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum....</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum....</p>
							<figure class="wrap-images-blog margin-top-20">
							<img src="<?php echo base_url($data->images_blog);?>" />
							</figure>
						</div>
				</div>
				<?php
			}
			?>
			</div>
			<div class="col-xs-12 col-lg-4 recent-blog">
				<div class="title-recent-blog">
					<h2>Recent Blog</h2>
				</div>
				<div class="link-recent-blog">
					<ul>
						<?php
						$query_blog = $this->db->query("select * from `blog` order by id_blog asc limit 0,4");
						foreach ($query_blog->result() as $data) {
							?>
							<li><a href="<?php echo base_url();?>blog/detail/<?php echo $data->unique_title_blog;?>"><?php echo $data->title_blog;?></a></li>
							<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>