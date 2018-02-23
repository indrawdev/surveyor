<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui-content" role="main">
	<form data-ajax="false" method="post" action="<?php echo base_url('login/ceklogin'); ?>">
		<?php if (!empty($this->session->flashdata('message'))) : ?>
			<div data-role="popup">
				<?php echo $this->session->flashdata('message'); ?>
			</div>
		<?php endif; ?>
		<div class="field-contain">
			<label for="fs_username">USERNAME</label>
			<input type="text" name="fs_username" id="fs_username" autocomplete="off" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="fs_password">PASSWORD</label>
			<input type="password" name="fs_password" id="fs_password" autocomplete="off" data-clear-btn="true">
		</div>
		<br>
		<div class="field-contain">
			<button data-theme="b">LOGIN</button>
		</div>
	</form>
</div>