<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $this->template->widget("tabsurvey"); ?>
<div class="ui-content" role="main">
<form id="c4" data-ajax="false" method="post" enctype="multipart/form-data" action="<?php echo base_url('survey/submitc4'); ?>">
	<div>
		<div class="field-contain">
			<label for="fs_jenis_dokumen">Jenis Dokumen:</label>
			<select name="fs_jenis_dokumen" id="fs_jenis_dokumen" data-native-menu="false">
			 	<option>Pilih</option>
			 	<?php foreach ($jenis_dokumen as $jd): ?>
			 	<option value="<?php echo $jd->fs_kode_dokumen; ?>"><?php echo $jd->fs_nama_dokumen; ?></option>
			 	<?php endforeach; ?>
			</select>
		</div>
		<div class="field-contain">
			<label for="fs_upload_file">Upload File:</label>
			<input type="file" data-clear-btn="true" name="fs_upload_file" id="fs_upload_file">
		</div>
		<div class="field-contain">
			<input type="hidden" name="fs_kode_cabang" value="<?php echo $this->uri->segment(3); ?>" />
			<input type="hidden" name="fn_no_apk" value="<?php echo $this->uri->segment(4); ?>" />
		</div>
		<br>
		<div class="field-contain">
			<button data-theme="b">UPLOAD</button>
		</div>
	</div>
</form>
<h4>LIST DOKUMEN</h4>
	<div>
		<div class="field-contain">
			<ul data-role="listview" data-split-icon="minus" data-theme="e" data-split-theme="b" data-inset="true">
				<?php foreach ($list_dokumen as $ld) : ?>
			    <li><a href="#<?php echo $ld->fs_kode_dokumen; ?>" data-rel="popup" data-position-to="window" data-transition="fade">
			        <h2><?php echo $ld->fs_nama_dokumen; ?></h2>
			        </a><a href="<?php echo base_url('survey/delete'); ?>" data-rel="popup" data-position-to="window" data-transition="pop"></a>
			    </li>
			    <div data-role="popup" id="<?php echo $ld->fs_kode_dokumen; ?>" data-overlay-theme="a" data-theme="d" data-corners="false">
				    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="popphoto" src="<?php echo base_url('uploads/' . $ld->fs_dokumen_upload); ?>" style="max-height:512px;" alt="<?php echo $ld->fs_nama_dokumen; ?>">
				</div>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>