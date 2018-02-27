<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui-content" role="main">
	<div><?php echo $this->session->flashdata('login'); ?></div>
	<form data-ajax="false" method="post" action="<?php echo base_url('login/ceklogin'); ?>">
	<label for="fs_username">USERNAME</label>
	<input type="text" name="fs_username" id="fs_username" autocomplete="off" data-clear-btn="true" required>
	<label for="fs_password">PASSWORD</label>
	<input type="password" name="fs_password" id="fs_password" autocomplete="off" data-clear-btn="true" required>
	<br>
	<button data-theme="b">LOGIN</button>
	</form>
</div>