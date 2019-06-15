<section class="work wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
	<div class="container-fluid">
		<div class="row">
            <ul class="work-filter text-center">
                <li><a class="active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn-filter" href="#" data-filter=".mobileapp">Mobile App</a></li>
                <li><a class="btn-filter" href="#" data-filter=".webapp">Web Development</a></li>
            </ul><!--/#work-filter-->
		<div class="work-items">
            <?php
            $query_work = $this->db->query("SELECT * FROM `work`");
            foreach ($query_work->result() as $data) {
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
            ?>
        </div>	
		</div>
	</div>
</section>