<section class="contact wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
	<div class="container-fluid">
		<div class="row">
            <aside class="col-xs-12 col-lg-4 title-contact">
                <img src="<?php echo base_url('assets/images/acc/contact.png');?>" />
                <hr style="background: #cecece;height: 1px;"/>
                <div class="address text-left">
                    <address><div class="address-location">Phixit headquarters</div> Phixit building suite V124, AB 01 Someplace 16425 Earth North Amerika</address>
                    <address><div class="address-location margin-top-20">Call or fax</div> Phixit building suite V124, AB 01 Someplace 16425 Earth North Amerika</address>
                    <address><div class="address-location margin-top-20">Find us</div> 
                    <a href="#">
                        <i class="fa fa-behance fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-pinterest fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                    </a>
                </address>
                </div>
            </aside>
            <div class="col-xs-12 col-lg-8 leave-message">
                <h2>Leave us a message</h2>
                <div class="margin-top-30"></div>
                <?php
                if(@$_SESSION["send_message_success"] === 1){
                    ?>
                    <div class="alert alert-message">
                        <h2>Send Message Success, Thank you for submitting</h2>
                    </div>
                    <?php
                }unset($_SESSION["send_message_success"]);
                ?>
                <div class="margin-top-30"></div>
                <?php echo form_open('proses/input');?>
                  <div class="form-group col-lg-6 col-xs-12 clear-padding-left">
                    <label for="name" class="label-form">Your Name</label>
                    <input type="text" name="name" class="form-control form-contact" id="name" required>
                  </div>
                  <div class="form-group col-lg-6 col-xs-12 clear-padding-right">
                    <label for="email" class="label-form">Your Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="pwd" class="label-form">Message</label>
                    <textarea class="textarea-style form-control" name="message" style="resize: none;" rows="8" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-submit">Submit</button>
                <?php echo form_close();?>
            </div>
		</div>
	</div>
</section>