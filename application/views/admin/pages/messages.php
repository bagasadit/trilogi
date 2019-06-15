<!DOCTYPE html>
<html>
<head>
	<title>Messages | Adminstrator Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/prettyPhoto.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.min.css')?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/prefixfree.min.js');?>"></script>
<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome-4.4.0/css/font-awesome.min.css');?>">
<body style="background: #e8eaea;">
<div class="w100">
	<div class="col-lg-3 clear-padding" style="position: fixed;z-index: 99;">
		<div class="title-admin">
			<h2>Admin Panel</h2>
		</div>
		<div class="nav-admin">
			<nav>
				<ul>
					<li><a href="<?php echo base_url('admin/home');?>">Dashboard</a></li>
					<li><a href="<?php echo base_url('admin/project');?>">Project</a></li>
					<li><a href="<?php echo base_url('admin/messages');?>">Messages</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="col-xs-12 text-right clear-padding">
		<div class="wrap-logout">
			<a href="<?php echo base_url('proses/logout')?>" style="color: #333;">
	            <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
	        </a>
        </div>
        <div class="content-admin text-left col-xs-offset-3">
        	<h2>Messages</h2>
        	<div class="line-height"></div>
        	<?php
        	if(isset($_SESSION['delete_success'])){
        		?>
        		<div class="alert-delete-message">
        			Delete Success !
        		</div>
        		<?php
        	}unset($_SESSION['delete_success']);
        	?>
        	<div class="table-responsive">          
			  <table class="table">
			    <thead class="head-style">
			      <tr>
			        <th>#</th>
			        <th>Email Sender</th>
			        <th>Name Sender</th>
			        <th>Message Sender</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    $query_messages = $this->db->query("select * from `message`");
			    $no = 1;
			    foreach ($query_messages->result() as $data) {
			    ?>
			    	<tr>
				        <td><?php echo $no++;?></td>
				        <td><?php echo $data->email_sender_message;?></td>
				        <td><?php echo $data->name_sender_message;?></td>
				        <td><?php echo $data->message_sender;?></td>
				        <td><a href="<?php echo base_url();?>proses/delete_messages/<?php echo $data->id_message;?>" style="color: #ff0000;"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
				      </tr>
			    <?php
			    }
			    ?>
			    </tbody>
			  </table>
			  </div>
        </div>
	</div>
</div>
</body>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.12.1.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/html5shiv.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.isotope.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/script.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/core.js')?>"></script>
</html>