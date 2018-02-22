<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $this->template->widget("tabsurvey"); ?>
<div class="ui-content" role="main">
	<form id="c1">
		<h4>DATA KONSUMEN</h4>
		<div>
			<div class="field-contain">
			    <label for="jenis_aplikasi">Jenis Aplikasi:</label>
			    <select name="jenis_aplikasi" id="jenis_aplikasi" data-native-menu="false">
			    	<option>Pilih</option>
			    	<?php foreach ($jenis_aplikasi as $ja) : ?>
			        <option value="<?php echo $ja->fs_nilai1_referensi; ?>"><?php echo $ja->fs_nama_referensi; ?></option>
			        <?php endforeach ; ?>
			    </select>
			</div>
			<div class="field-contain">
				<label for="nama_konsumen">Nama Konsumen:</label>
				<input type="text" name="nama_konsumen" id="nama_konsumen" value="<?php echo $debitur->fs_nama_konsumen; ?>">
			</div>
			<div class="field-contain">
				<label for="nama_ibukandung">Nama Ibu Kandung:</label>
				<input type="text" name="nama_ibukandung" id="nama_ibukandung" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="ktp_konsumen">No KTP Konsumen:</label>
				<input type="text" name="ktp_konsumen" id="ktp_konsumen" value="<?php echo $debitur->fs_ktp_konsumen; ?>" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="npwp_konsumen">NPWP Konsumen:</label>
				<input type="text" name="npwp_konsumen" id="npwp_konsumen" value="<?php echo $debitur->fs_npwp_konsumen; ?>" data-clear-btn="true">
			</div>
			<div class="field-contain">
			    <label for="tipe_konsumen">Customer Type:</label>
			    <select name="tipe_konsumen" id="tipe_konsumen" data-native-menu="false">
			    	<option>Pilih</option>
			        <?php foreach ($jenis_pembiayaan as $jp) : ?>
			        <option value="<?php echo $jp->fs_nilai1_referensi; ?>"><?php echo $jp->fs_nama_referensi; ?></option>
			        <?php endforeach ; ?>
			    </select>
			</div>
			<div class="field-contain">
				<label for="tempat_lahir">Tempat Lahir:</label>
				<input type="text" name="tempat_lahir" id="tempat_lahir" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="tanggal_lahir">Tanggal Lahir Konsumen:</label>
				<input type="date" name="tanggal_lahir" id="tanggal_lahir" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
			    <label for="status_pernikahan">Status Pernikahan:</label>
			    <select name="status_pernikahan" id="status_pernikahan" data-native-menu="false">
			    	<option>Pilih</option>
			    	<?php foreach ($status_konsumen as $sk) : ?>
			        <option value="<?php echo $sk->fs_nilai1_referensi; ?>"><?php echo $sk->fs_nama_referensi; ?></option>
			        <?php endforeach ; ?>
			    </select>
			</div>
			<div class="field-contain">
			    <label for="jenis_kelamin">Jenis Kelamin:</label>
			    <select name="jenis_kelamin" id="jenis_kelamin" data-native-menu="false">
			    	<option>Pilih</option>
			        <?php foreach ($jenis_kelamin as $jk) : ?>
			        <option value="<?php echo $jk->fs_nilai1_referensi; ?>"><?php echo $jk->fs_nama_referensi; ?></option>
			        <?php endforeach ; ?>
			    </select>
			</div>
			<div class="field-contain">
				<label for="tanggal_lahir_pasangan">Tanggal Lahir Pasangan:</label>
				<input type="date" name="tanggal_lahir_pasangan" id="tanggal_lahir_pasangan" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
			    <label for="agama_konsumen">Agama:</label>
			    <select name="agama_konsumen" id="agama_konsumen" data-native-menu="false">
			    	<option>Pilih</option>
			        <?php foreach ($agama_konsumen as $ak) : ?>
			        <option value="<?php echo $ak->fs_nilai1_referensi; ?>"><?php echo $ak->fs_nama_referensi; ?></option>
			        <?php endforeach ; ?>
			    </select>
			</div>
			<div class="field-contain">
			    <label for="mail_address">Mail Address:</label>
			    <select name="mail_address" id="mail_address" data-native-menu="false">
			    	<option>Pilih</option>
			        <?php foreach ($alamat_surat as $as) : ?>
			        <option value="<?php echo $as->fs_nilai1_referensi; ?>"><?php echo $as->fs_nama_referensi; ?></option>
			        <?php endforeach ; ?>
			    </select>
			</div>
			<div class="field-contain">
				<label for="alamat_konsumen">Alamat Sesuai KTP:</label>
				<textarea cols="40" rows="8" name="alamat_konsumen" id="alamat_konsumen"><?php echo $debitur->fs_alamat_konsumen; ?></textarea>
			</div>
			<div class="field-contain">
				<label for="kelurahan_konsumen">Kelurahan Konsumen:</label>
				<input type="text" name="kelurahan_konsumen" id="kelurahan_konsumen" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="kecamatan_konsumen">Kecamatan Konsumen:</label>
				<input type="text" name="kecamatan_konsumen" id="kecamatan_konsumen" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="kota_konsumen">Kota Konsumen:</label>
				<input type="text" name="kota_konsumen" id="kota_konsumen" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="kodepos_konsumen">Kodepos Konsumen:</label>
				<input type="text" name="kodepos_konsumen" id="kodepos_konsumen" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="email_konsumen">Email Pribadi:</label>
				<input type="email" name="email_konsumen" id="email_konsumen" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="handphone_konsumen">No Handphone Konsumen:</label>
				<input type="text" name="handphone_konsumen" id="handphone_konsumen" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="telepon_konsumen">No Telepon Konsumen:</label>
				<input type="text" name="telepon_konsumen" id="telepon_konsumen" value="" data-clear-btn="true">
			</div>
			<h4>DATA PEKERJAAN / USAHA</h4>
			<div class="field-contain">
			    <label for="perkerjaan">Perkerjaan:</label>
			    <select name="perkerjaan" id="perkerjaan" data-native-menu="false">
			    	<option>Pilih</option>
			    	<?php foreach ($pekerjaan as $p) : ?>
			        <option value="<?php echo $p->fs_nilai1_referensi; ?>"><?php echo $p->fs_nama_referensi; ?></option>
			    	<?php endforeach; ?>
			    </select>
			</div>
			<div class="field-contain">
				<label for="nama_perusahaan">Nama Perusahaan:</label>
				<input type="text" name="nama_perusahaan" id="nama_perusahaan" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="alamat_perusahaan">Alamat Perusahaan:</label>
				<textarea cols="40" rows="8" name="alamat_perusahaan" id="alamat_perusahaan"></textarea>
			</div>
			<div class="field-contain">
				<label for="kota_perusahaan">Kota:</label>
				<input type="text" name="kota_perusahaan" id="kota_perusahaan" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="kodepos_perusahaan">Kodepos:</label>
				<input type="text" name="kodepos_perusahaan" id="kodepos_perusahaan" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="lama_kerja">Lama Kerja:</label>
				<input type="text" name="lama_kerja" id="lama_kerja" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="jabatan">Jabatan:</label>
				<input type="text" name="jabatan" id="jabatan" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
				<label for="nama_perusahaan">Telepon Perusahaan:</label>
				<input type="text" name="telepon_perusahaan" id="telepon_perusahaan" value="" data-clear-btn="true">
			</div>
			<div class="field-contain">
			    <label for="pendidikan">Pendidikan:</label>
			    <select name="pendidikan" id="pendidikan" data-native-menu="false">
			    	<option>Pilih</option>
			    	<?php foreach ($pendidikan as $p) : ?>
			        <option value="<?php echo $p->fs_nilai1_referensi; ?>"><?php echo $p->fs_nama_referensi; ?></option>
			        <?php endforeach ; ?>
			    </select>
			</div>
			<div class="field-contain">
				<label for="kegiatan_usaha">Kegiatan Usaha:</label>
				<textarea cols="40" rows="8" name="kegiatan_usaha" id="kegiatan_usaha"></textarea>
			</div>
			<br>
			<div class="field-contain">
				<button data-theme="b">SIMPAN</button>
			</div>
		</div>
	</form>
</div>