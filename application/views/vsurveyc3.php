<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $this->template->widget("tabsurvey"); ?>
<div class="ui-content" role="main">
<div><?php echo $this->session->flashdata('flashc3'); ?></div>
<form data-ajax="false" method="post" action="<?php echo base_url('survey/submitc3'); ?>">
<h4><i>Rincian Pendapatan Wiraswasta ATAU Pendapatan Istri berwiraswsta</i></h4>
	<label for="fs_pendapatan_tambahan">Pendapatan Tambahan:</label>
	<select name="fs_pendapatan_tambahan" id="fs_pendapatan_tambahan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($pendapatan_tambahan as $pt): ?>
		<option value="<?php echo $pt->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_pendapatan_tambahan == $pt->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $pt->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fs_jenis_pendapatan">Jenis Pendapatan:</label>
	<select name="fs_jenis_pendapatan" id="fs_jenis_pendapatan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($jenis_pendapatan as $jp): ?>
		<option value="<?php echo $jp->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_jenis_pendapatan == $jp->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $jp->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fn_omzet_perbulan">Omzet/bln:</label>
	<input type="number" name="fn_omzet_perbulan" id="fn_omzet_perbulan" value="<?php echo $debitur->fn_omzet_perbulan; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==9) this.value = this.value.slice(0, - 1);">
	<label for="fn_omzet_persen">Omzet % (Profit):</label>
	<input type="number" name="fn_omzet_persen" id="fn_omzet_persen" value="<?php echo $debitur->fn_omzet_persen; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==2) this.value = this.value.slice(0, - 1);">
	<label for="fn_hargasewa_perbulan">Harga Sewa/bln:</label>
	<input type="number" name="fn_hargasewa_perbulan" id="fn_hargasewa_perbulan" value="<?php echo $debitur->fn_hargasewa_perbulan; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==9) this.value = this.value.slice(0, - 1);">
	<label for="fn_hargasewa_persen">Harga Sewa % (Profit):</label>
	<input type="number" name="fn_hargasewa_persen" id="fn_hargasewa_persen" value="<?php echo $debitur->fn_hargasewa_persen; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==2) this.value = this.value.slice(0, - 1);">
	<label for="fn_pendapatan_utama">Pendapatan Utama:</label>
	<input type="number" name="fn_pendapatan_utama" id="fn_pendapatan_utama" value="<?php echo $debitur->fn_pendapatan_utama; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==9) this.value = this.value.slice(0, - 1);">
	<label for="fn_pendapatan_pasangan">Pendapatan Pasangan:</label>
	<input type="number" name="fn_pendapatan_pasangan" id="fn_pendapatan_pasangan" value="<?php echo $debitur->fn_pendapatan_pasangan; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==9) this.value = this.value.slice(0, - 1);">
	<label for="fn_pendapatan_tambahan">Pendapatan Tambahan:</label>
	<input type="number" name="fn_pendapatan_tambahan" id="fn_pendapatan_tambahan" value="<?php echo $debitur->fn_pendapatan_tambahan; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==9) this.value = this.value.slice(0, - 1);">
	<label for="fn_biaya_rutin">Biaya Rutin:</label>
	<input type="number" name="fn_biaya_rutin" id="fn_biaya_rutin" value="<?php echo $debitur->fn_biaya_rutin; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==9) this.value = this.value.slice(0, - 1);">
	<label for="fn_angsuran_lain">Angsuran Lain:</label>
	<input type="number" name="fn_angsuran_lain" id="fn_angsuran_lain" value="<?php echo $debitur->fn_angsuran_lain; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==9) this.value = this.value.slice(0, - 1);">
	<label for="fn_angsuran_lain">Biaya Perawatan:</label>
	<input type="number" name="fn_biaya_perawatan" id="fn_biaya_perawatan" value="<?php echo $debitur->fn_biaya_perawatan; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==9) this.value = this.value.slice(0, - 1);">
	<label for="fn_angsuran_diajukan">Angsuran yang Diajukan:</label>
	<input type="number" name="fn_angsuran_diajukan" id="fn_angsuran_diajukan" value="<?php echo $debitur->fn_angsuran_diajukan; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==9) this.value = this.value.slice(0, - 1);">
<h4>VALIDASI DOKUMEN</h4>
	<label for="fs_valid_ktp_pemohon">KTP Pemohon:</label>
	<select name="fs_valid_ktp_pemohon" id="fs_valid_ktp_pemohon" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($validasi_dokumen as $vd1): ?>
		<option value="<?php echo $vd1->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_valid_ktp_pemohon == $vd1->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $vd1->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fs_valip_ktp_pasangan">KTP Pasangan:</label>
	<select name="fs_valip_ktp_pasangan" id="fs_valip_ktp_pasangan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($validasi_dokumen as $vd2): ?>
		<option value="<?php echo $vd2->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_valip_ktp_pasangan == $vd2->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $vd2->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fs_valid_kartu_keluarga">Kartu Keluarga:</label>
	<select name="fs_valid_kartu_keluarga" id="fs_valid_kartu_keluarga" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($validasi_dokumen as $vd3): ?>
		<option value="<?php echo $vd3->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_valid_kartu_keluarga == $vd3->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $vd3->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fs_valid_shmpbbpln">SHM /  PBB / PLN / TLP:</label>
	<select name="fs_valid_shmpbbpln" id="fs_valid_shmpbbpln" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($validasi_dokumen as $vd4): ?>
		<option value="<?php echo $vd4->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_valid_shmpbbpln == $vd4->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $vd4->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fs_valid_slipgaji">Slip Gaji:</label>
	<select name="fs_valid_slipgaji" id="fs_valid_slipgaji" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($validasi_dokumen as $vd5): ?>
		<option value="<?php echo $vd5->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_valid_slipgaji == $vd5->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $vd5->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fs_valid_npwp">NPWP:</label>
	<select name="fs_valid_npwp" id="fs_valid_npwp" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($validasi_dokumen as $vd6): ?>
		<option value="<?php echo $vd6->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_valid_npwp == $vd6->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $vd6->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fs_valid_stnk">STNK:</label>
	<select name="fs_valid_stnk" id="fs_valid_stnk" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($validasi_dokumen as $vd7): ?>
		<option value="<?php echo $vd7->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_valid_stnk == $vd7->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $vd7->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<input type="hidden" name="fs_kode_cabang" value="<?php echo $this->uri->segment(3); ?>" />
	<input type="hidden" name="fn_no_apk" value="<?php echo $this->uri->segment(4); ?>" />
<br>
	<button data-theme="b">SIMPAN</button>
</form>
</div>