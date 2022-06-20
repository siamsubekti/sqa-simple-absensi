<h2 class="mt-2 text-center" style="color:#656565">Login To Continue...</h2>
<div class="container">
	<?php if ($this->session->flashdata("userlogin")) { ?>
	<div class="row justify-content-center alert alert-success">
		<?php echo $this->session->flashdata("userlogin"); ?>
	</div>
	<?php } ?>
	<?php if (validation_errors()) { ?>
	<div class="row justify-content-center alert alert-danger">
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
	<div class="row justify-content-center d-flex mt-4">
		<div class="col"></div>

		<div class="col-4">
			<?php echo form_open('user/signin'); ?>
			<div class="form-froup">
				<label for="">Username</label>
				<input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Enter Username">
			</div>
			<div class="form-froup mt-2">
				<label for="">Password</label>
				<input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Enter Password">
			</div>
			<div class="form-froup text-center mt-4">
				<button type="submit" class="btn btn-dark btn-block" style="border-radius:0%;">Login</button>
			</div>
		<?php echo form_close(); ?>
		</div>

		<div class="col"></div>
	</div>
</div>
