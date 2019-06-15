<section class="detail_team wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
	<div class="container-fluid">
		<div class="row">
			<div class="title-sections text-center">
			<?php
			$query = $this->db->get_where('team', array('id_team' => $this->uri->segment(3)));
			foreach ($query->result() as $data) {
				?>
					<h2><?php echo $data->name_team;?></h2>
					<strong><?php echo $data->job_team;?></strong>
				<?php
			}
			?>
			</div>
			<div class="desc-team text-center">
				<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</section>