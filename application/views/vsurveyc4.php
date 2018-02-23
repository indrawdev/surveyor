<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $this->template->widget("tabsurvey"); ?>
<div class="ui-content" role="main">
<form data-ajax="false" method="post" action="<?php echo base_url('survey/submitc4'); ?>">
	<div>
		<div class="field-contain">
			<input type="hidden" name="fs_kode_cabang" value="<?php echo $this->uri->segment(3); ?>" />
			<input type="hidden" name="fn_no_apk" value="<?php echo $this->uri->segment(4); ?>" />
		</div>
		<br>
		<div class="field-contain">
			<button data-theme="b">SIMPAN</button>
		</div>
	</div>
</form>
</div>