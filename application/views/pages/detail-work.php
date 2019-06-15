<section class="detail_team wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
	<div class="container-fluid">
		<div class="row">
			<?php
			$query = $this->db->get_where('work', array('unique_title_work' => $this->uri->segment(3)));
			foreach ($query->result() as $data) {
				?>
					<div class="title-sections text-center margin-bottom-40">
						<h2>Descriptions</h2>	
					</div>
					<div class="content-work">
						<p><?php echo $data->desc_work;?></p>
					</div>
				<?php
			}
			?>
		</div>
		<div class="row">
			<div class="title-sections text-center margin-bottom-40 margin-top-40">
				<h2>Other Work</h2>	
			</div>
			<div class="work-items">
            <?php
            $query_work = $this->db->query("SELECT * FROM `work`");
            foreach ($query_work->result() as $data) {
            	if(!($data->unique_title_work === $this->uri->segment(3))){
            		?>
            		<div class="work-item <?php echo $data->category_work; ?> col-lg-4 col-sm-6 col-xs-12">
                    <a href="<?php echo base_url();?>work/detail/<?php echo $data->unique_title_work;?>">
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
            }
            ?>
        </div>	
		</div>
	</div>
</section>