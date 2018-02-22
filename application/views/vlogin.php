<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui-content" role="main">
	<form id="login">
		<div class="field-contain">
			<label for="fs_username">USERNAME</label>
			<input type="text" name="fs_username" id="fs_username" data-clear-btn="true">
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