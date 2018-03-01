<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $this->template->widget("tabsurvey"); ?>
<div class="ui-content" role="main">
<div><?php echo $this->session->flashdata('flashc2'); ?></div>
<form data-ajax="false" method="post" action="<?php echo base_url('survey/submitc2'); ?>">
<h4>CHARACTER</h4>
	<label for="fs_pemohon_didampingi">Didampingi pasangan:</label>
	<select name="fs_pemohon_didampingi" id="fs_pemohon_didampingi" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($didampingi as $d) : ?>
		<option value="<?php echo $d[0]; ?>" <?php if ($debitur->fs_pemohon_didampingi == $d[0]) { echo "selected"; } ?>><?php echo $d[1]; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_handphone_pasangan">No. Handphone Pasangan:</label>
	<input type="number" name="fs_handphone_pasangan" id="fs_handphone_pasangan" value="<?php echo $debitur->fs_handphone_pasangan; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==15) this.value = this.value.slice(0, - 1);">
	<label for="fs_alamat_survey">Alamat Survey:</label>
	<textarea cols="40" rows="8" name="fs_alamat_survey" id="fs_alamat_survey"><?php echo $debitur->fs_alamat_survey; ?></textarea>
	<label for="fs_alamat_surat">Alamat Surat:</label>
	<textarea cols="40" rows="8" name="fs_alamat_surat" id="fs_alamat_surat"><?php echo $debitur->fs_alamat_surat; ?></textarea>
	<label for="fs_kodepos_pasangan">Kodepos:</label>
	<input type="text" name="fs_kodepos_pasangan" id="fs_kodepos_pasangan" value="<?php echo $debitur->fs_kodepos_pasangan; ?>" data-clear-btn="true" maxlength="5">
<h4>KORESPONDENSI</h4>
	<label for="fs_cek_lingkungan">Cek Lingkungan:</label>
	<select name="fs_cek_lingkungan" id="fs_cek_lingkungan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($cek_lingkungan as $cl) : ?>\
		<option value="<?php echo $cl->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_cek_lingkungan == $cl->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $cl->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_rekomendasi">Rekomendasi:</label>
	<select name="fs_rekomendasi" id="fs_rekomendasi" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($rekomendasi as $r) : ?>
		<option value="<?php echo $r->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_rekomendasi == $r->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $r->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_nama_korespondensi">Nama Korespondensi:</label>
	<input type="text" name="fs_nama_korespondensi" id="fs_nama_korespondensi" value="<?php echo $debitur->fs_nama_korespondensi; ?>" data-clear-btn="true" maxlength="45">
	<label for="fs_telepon_korespondensi">Telepon Korespondensi:</label>
	<input type="number" name="fs_telepon_korespondensi" id="fs_telepon_korespondensi" value="<?php echo $debitur->fs_telepon_korespondensi; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==15) this.value = this.value.slice(0, - 1);">
<h4>DATA KELUARGA KANDUNG <i>(TIDAK TINGGAL SERUMAH)</i></h4>
	<label for="fs_nama_saudara">Nama:</label>
	<input type="text" name="fs_nama_saudara" id="fs_nama_saudara" value="<?php echo $debitur->fs_nama_saudara; ?>" data-clear-btn="true" maxlength="45">
	<label for="fs_jenis_kelamin_saudara">Jenis Kelamin:</label>
	<select name="fs_jenis_kelamin_saudara" id="fs_jenis_kelamin_saudara" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($jenis_kelamin as $jk) : ?>
		<option value="<?php echo $jk->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_jenis_kelamin_saudara == $jk->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $jk->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_alamat_saudara">Alamat:</label>
	<textarea cols="40" rows="8" name="fs_alamat_saudara" id="fs_alamat_saudara"><?php echo $debitur->fs_alamat_saudara; ?></textarea>
	<label for="fs_relasi_pemohon">Relasi dengan Pemohon:</label>
	<select name="fs_relasi_pemohon" id="fs_relasi_pemohon" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($relasi_pemohon as $rp) : ?>
		<option value="<?php echo $rp->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_relasi_pemohon == $rp->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $rp->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_telepon_saudara">No Telepon/Handphone:</label>
	<input type="number" name="fs_telepon_saudara" id="fs_telepon_saudara" value="<?php echo $debitur->fs_telepon_saudara; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==15) this.value = this.value.slice(0, - 1);">
<h4>COLLATERAL</h4>
	<label for="fs_body">Body:</label>
	<select name="fs_body" id="fs_body" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($body as $b) : ?>
		<option value="<?php echo $b->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_body == $b->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $b->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_interior">Interior:</label>
	<select name="fs_interior" id="fs_interior" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($interior as $i) : ?>
		<option value="<?php echo $i->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_interior == $i->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $i->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_mesin">Mesin:</label>
	<select name="fs_mesin" id="fs_mesin" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($mesin as $m) : ?>
		<option value="<?php echo $m->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_mesin == $m->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $m->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_rangka">Rangka:</label>
	<select name="fs_rangka" id="fs_rangka" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($rangka as $r) : ?>
		<option value="<?php echo $r->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_rangka == $r->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $r->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_aksesoris">Aksesoris:</label>
	<select name="fs_aksesoris" id="fs_aksesoris" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($aksesoris as $a) : ?>
		<option value="<?php echo $a->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_aksesoris == $a->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $a->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fn_harga_pasar">Harga Pasar saat ini:</label>
	<input type="number" name="fn_harga_pasar" id="fn_harga_pasar" value="<?php echo $debitur->fn_harga_pasar; ?>" data-clear-btn="true" maxlength="11">
<h4>CAPITAL</h4>
	<label for="fn_luas_bangunan">Luas Bangunan:</label>
	<input type="number" name="fn_luas_bangunan" id="fn_luas_bangunan" value="<?php echo $debitur->fn_luas_bangunan; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==4) this.value = this.value.slice(0, - 1);">
	<label for="fn_luas_tanah">Luas Tanah:</label>
	<input type="number" name="fn_luas_tanah" id="fn_luas_tanah" value="<?php echo $debitur->fn_luas_tanah; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==4) this.value = this.value.slice(0, - 1);">
	<label for="fs_status_kepemilikan">Status Kepemilikan:</label>
	<select name="fs_status_kepemilikan" id="fs_status_kepemilikan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($status_kepemilikan as $sk) : ?>
		<option value="<?php echo $sk->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_status_kepemilikan == $sk->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $sk->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_bukti_kepemilikan">Bukti Kepemilikan:</label>
	<select name="fs_bukti_kepemilikan" id="fs_bukti_kepemilikan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($bukti_kepemilikan as $bk) : ?>
		<option value="<?php echo $bk->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_bukti_kepemilikan == $bk->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $bk->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_dinding_rumah">Dinding Rumah:</label>
	<select name="fs_dinding_rumah" id="fs_dinding_rumah" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($dinding_rumah as $dr) : ?>
		<option value="<?php echo $dr->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_dinding_rumah == $dr->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $dr->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_tempat_kendaraan">Tempat Kendaraan:</label>
	<select name="fs_tempat_kendaraan" id="fs_tempat_kendaraan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($tempat_kendaraan as $tk) : ?>
		<option value="<?php echo $tk->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_tempat_kendaraan == $tk->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $tk->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_alamat_penyimpanan">Alamat Penyimpanan:</label>
	<textarea cols="40" rows="8" name="fs_alamat_penyimpanan" id="fs_alamat_penyimpanan"><?php echo $debitur->fs_alamat_penyimpanan; ?></textarea>
	<label for="fs_jalanan_rumah">Jalanan Rumah:</label>
	<select name="fs_jalanan_rumah" id="fs_jalanan_rumah" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($jalanan_rumah as $jr) : ?>
		<option value="<?php echo $jr->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_jalanan_rumah == $jr->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $jr->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_lebar_jalanan">Lebar Jalanan:</label>
	<select name="fs_lebar_jalanan" id="fs_lebar_jalanan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($lebar_jalanan as $lj): ?>
		<option value="<?php echo $lj->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_lebar_jalanan == $lj->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $lj->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_kondisi_lingkungan">Kondisi Lingkungan:</label>
	<select name="fs_kondisi_lingkungan" id="fs_kondisi_lingkungan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($kondisi_lingkungan as $kl): ?>
		<option value="<?php echo $kl->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_kondisi_lingkungan == $kl->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $kl->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_kondisi_rumah">Kondisi Rumah:</label>
	<select name="fs_kondisi_rumah" id="fs_kondisi_rumah" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($kondisi_rumah as $kr): ?>
		<option value="<?php echo $kr->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_kondisi_rumah == $kr->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $kr->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_perabotan_rumah">Perabotan Rumah:</label>
	<select name="fs_perabotan_rumah" id="fs_perabotan_rumah" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($perabotan_rumah as $pr): ?>
		<option value="<?php echo $pr->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_perabotan_rumah == $pr->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $pr->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fn_unit_rumah">Unit Rumah:</label>
	<input type="number" name="fn_unit_rumah" id="fn_unit_rumah" value="<?php echo $debitur->fn_unit_rumah; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==3) this.value = this.value.slice(0, - 1);">
	<label for="fn_unit_kendaraan">Unit Kendaraan:</label>
	<input type="number" name="fn_unit_kendaraan" id="fn_unit_kendaraan" value="<?php echo $debitur->fn_unit_kendaraan; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==3) this.value = this.value.slice(0, - 1);">
	<label for="fn_harga_asset">Harga Aset:</label>
	<input type="number" name="fn_harga_asset" id="fn_harga_asset" value="<?php echo $debitur->fn_harga_asset; ?>" data-clear-btn="true" onKeyDown="if(this.value.length==11) this.value = this.value.slice(0, - 1);">
	<label for="fs_bukti_kepemilikan_aset">Bukti Kepemilikan Aset:</label>
	<select name="fs_bukti_kepemilikan_aset" id="fs_bukti_kepemilikan_aset" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($bukti_kepemilikan_aset as $bka): ?>
		<option value="<?php echo $bka->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_bukti_kepemilikan_aset == $bka->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $bka->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<input type="hidden" name="fs_kode_cabang" value="<?php echo $this->uri->segment(3); ?>" />
	<input type="hidden" name="fn_no_apk" value="<?php echo $this->uri->segment(4); ?>" />
<br>
	<button data-theme="b">SIMPAN</button>
</form>
</div>