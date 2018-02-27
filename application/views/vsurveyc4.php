<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $this->template->widget("tabsurvey"); ?>
<div class="ui-content" role="main">
<div><?php echo $this->session->flashdata('flashc4'); ?></div>
<form id="c4" data-ajax="false" method="post" enctype="multipart/form-data" action="<?php echo base_url('survey/submitc4'); ?>">
	<label for="fs_jenis_dokumen">Jenis Dokumen:</label>
	<select name="fs_jenis_dokumen" id="fs_jenis_dokumen" data-native-menu="true" required>
		<option>Pilih</option>
		<?php foreach ($jenis_dokumen as $jd): ?>
		<option value="<?php echo $jd->fs_kode_dokumen; ?>"><?php echo $jd->fs_nama_dokumen; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fs_upload_file">Upload File:</label>
	<input type="file" data-clear-btn="true" name="fs_upload_file" id="fs_upload_file" required>
	<input type="hidden" name="fs_kode_cabang" value="<?php echo $this->uri->segment(3); ?>" />
	<input type="hidden" name="fn_no_apk" value="<?php echo $this->uri->segment(4); ?>" />
	<br>
	<button data-theme="b">UPLOAD</button>
</form>
<h4>LIST DOKUMEN</h4>
<ul data-role="listview" data-split-icon="minus" data-theme="e" data-split-theme="b" data-inset="true">
<?php foreach ($list_dokumen as $ld) : ?>
	<li>
		<a href="#<?php echo $ld->fs_kode_dokumen; ?>" data-rel="popup" data-position-to="window" data-transition="fade">
			<h2><?php echo $ld->fs_nama_dokumen; ?></h2>
		</a>
		<a href="<?php echo base_url('survey/delete'); ?>" data-rel="popup" data-position-to="window" data-transition="pop"></a>
	</li>
	<div data-role="popup" id="<?php echo $ld->fs_kode_dokumen; ?>" data-overlay-theme="a" data-theme="d" data-corners="false">
		<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
		<img class="popphoto" src="<?php echo base_url('uploads/' . $ld->fs_dokumen_upload); ?>" style="max-height:200px;" alt="<?php echo $ld->fs_nama_dokumen; ?>">
	</div>
<?php endforeach; ?>
</ul>
<br>
<h4>Yakin, data survey sudah benar?</h4>
<form id="sesuai" data-ajax="false" method="post" enctype="multipart/form-data" action="<?php echo base_url('survey/sesuai'); ?>">
	<label>
		<input name="fs_flag_survey" type="checkbox" value="1" required><i>Semua data sudah sesuai dan dapat dipertanggung jawabkan dengan bukti-bukti.</i>
	</label>
	<input type="hidden" name="fs_kode_cabang" value="<?php echo $this->uri->segment(3); ?>" />
	<input type="hidden" name="fn_no_apk" value="<?php echo $this->uri->segment(4); ?>" />
	<button data-theme="a">SELESAI</button>
</form>
</div>