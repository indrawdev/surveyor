<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $this->template->widget("tabsurvey"); ?>
<div class="ui-content" role="main">
<div><?php echo $this->session->flashdata('flashc1'); ?></div>
<form data-ajax="false" method="post" action="<?php echo base_url('survey/submitc1'); ?>">
	<h4>DATA KONSUMEN</h4>
	<label for="fs_jenis_aplikasi">Jenis Aplikasi:</label>
	<select name="fs_jenis_aplikasi" id="fs_jenis_aplikasi" data-native-menu="false" required>
		<option>Pilih</option>
		<?php foreach ($jenis_aplikasi as $ja) : ?>
		<option value="<?php echo $ja->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_jenis_aplikasi == $ja->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $ja->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_nama_konsumen">Nama Konsumen:</label>
	<input type="text" name="fs_nama_konsumen" id="fs_nama_konsumen" value="<?php echo $debitur->fs_nama_konsumen; ?>" required>
	<label for="fs_nama_ibukandung">Nama Ibu Kandung:</label>
	<input type="text" name="fs_nama_ibukandung" id="fs_nama_ibukandung" value="<?php echo $debitur->fs_nama_ibukandung; ?>" data-clear-btn="true" required>
	<label for="ktp_konsumen">No KTP Konsumen:</label>
	<input type="text" name="ktp_konsumen" id="ktp_konsumen" value="<?php echo $debitur->fs_ktp_konsumen; ?>" data-clear-btn="true" required>
	<label for="npwp_konsumen">NPWP Konsumen:</label>
	<input type="text" name="npwp_konsumen" id="npwp_konsumen" value="<?php echo $debitur->fs_npwp_konsumen; ?>" data-clear-btn="true" required>
	<label for="tipe_konsumen">Customer Type:</label>
	<select name="tipe_konsumen" id="tipe_konsumen" data-native-menu="false" required>
		<option>Pilih</option>
		<?php foreach ($jenis_pembiayaan as $jp) : ?>
		<option value="<?php echo $jp->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_tipe_konsumen == $jp->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $jp->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_tempat_lahir_konsumen">Tempat Lahir:</label>
	<input type="text" name="fs_tempat_lahir_konsumen" id="fs_tempat_lahir_konsumen" value="<?php echo $debitur->fs_tempat_lahir_konsumen; ?>" data-clear-btn="true" required>
	<label for="fd_tanggal_lahir_konsumen">Tanggal Lahir Konsumen:</label>
	<input type="date" name="fd_tanggal_lahir_konsumen" id="fd_tanggal_lahir_konsumen" value="<?php echo $debitur->fd_tanggal_lahir_konsumen; ?>" data-clear-btn="true" required>
	<label for="fs_status_konsumen">Status Pernikahan:</label>
	<select name="fs_status_konsumen" id="fs_status_konsumen" data-native-menu="false" required>
		<option>Pilih</option>
		<?php foreach ($status_konsumen as $sk) : ?>
		<option value="<?php echo $sk->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_status_konsumen == $sk->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $sk->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_jenis_kelamin_konsumen">Jenis Kelamin:</label>
	<select name="fs_jenis_kelamin_konsumen" id="fs_jenis_kelamin_konsumen" data-native-menu="false" required>
		<option>Pilih</option>
		<?php foreach ($jenis_kelamin as $jk) : ?>
		<option value="<?php echo $jk->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_jenis_kelamin_konsumen == $jk->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $jk->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fd_tanggal_lahir_pasangan">Tanggal Lahir Pasangan:</label>
	<input type="date" name="fd_tanggal_lahir_pasangan" id="fd_tanggal_lahir_pasangan" value="<?php echo $debitur->fd_tanggal_lahir_pasangan; ?>" data-clear-btn="true" required>
	<label for="fs_agama_konsumen">Agama:</label>
	<select name="fs_agama_konsumen" id="fs_agama_konsumen" data-native-menu="false" required>
		<option>Pilih</option>
		<?php foreach ($agama_konsumen as $ak) : ?>
		<option value="<?php echo $ak->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_agama_konsumen == $ak->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $ak->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_mail_address">Mail Address:</label>
	<select name="fs_mail_address" id="fs_mail_address" data-native-menu="false" required>
		<option>Pilih</option>
		<?php foreach ($alamat_surat as $as) : ?>
		<option value="<?php echo $as->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_mail_address == $as->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $as->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_alamat_konsumen">Alamat Sesuai KTP:</label>
	<textarea cols="40" rows="8" name="fs_alamat_konsumen" id="fs_alamat_konsumen" required><?php echo $debitur->fs_alamat_konsumen; ?></textarea>
	<label for="fs_kelurahan_konsumen">Kelurahan Konsumen:</label>
	<input type="text" name="fs_kelurahan_konsumen" id="fs_kelurahan_konsumen" value="<?php echo $debitur->fs_kelurahan_konsumen; ?>" data-clear-btn="true" required>
	<label for="fs_kecamatan_konsumen">Kecamatan Konsumen:</label>
	<input type="text" name="fs_kecamatan_konsumen" id="fs_kecamatan_konsumen" value="<?php echo $debitur->fs_kecamatan_konsumen; ?>" data-clear-btn="true" required>
	<label for="fs_kota_konsumen">Kota Konsumen:</label>
	<input type="text" name="fs_kota_konsumen" id="fs_kota_konsumen" value="<?php echo $debitur->fs_kota_konsumen; ?>" data-clear-btn="true" required>
	<label for="fs_kodepos_konsumen">Kodepos Konsumen:</label>
	<input type="text" name="fs_kodepos_konsumen" id="fs_kodepos_konsumen" value="<?php echo $debitur->fs_kodepos_konsumen; ?>" data-clear-btn="true" required>
	<label for="fs_email_konsumen">Email Pribadi:</label>
	<input type="email" name="fs_email_konsumen" id="fs_email_konsumen" value="<?php echo $debitur->fs_email_konsumen; ?>" data-clear-btn="true" required>
	<label for="fs_handphone_konsumen">No Handphone Konsumen:</label>
	<input type="text" name="fs_handphone_konsumen" id="fs_handphone_konsumen" value="<?php echo $debitur->fs_handphone_konsumen; ?>" data-clear-btn="true" required>
	<label for="fs_telepon_konsumen">No Telepon Konsumen:</label>
	<input type="text" name="fs_telepon_konsumen" id="fs_telepon_konsumen" value="<?php echo $debitur->fs_telepon_konsumen; ?>" data-clear-btn="true" required>
<h4>DATA PEKERJAAN / USAHA</h4>
	<label for="perkerjaan">Perkerjaan:</label>
	<select name="perkerjaan" id="perkerjaan" data-native-menu="false" required>
		<option>Pilih</option>
		<?php foreach ($pekerjaan as $p) : ?>
		<option value="<?php echo $p->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_pekerjaan == $p->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $p->fs_nama_referensi; ?></option>
		<?php endforeach; ?>
	</select>
	<label for="fs_nama_perusahaan">Nama Perusahaan:</label>
	<input type="text" name="fs_nama_perusahaan" id="fs_nama_perusahaan" value="<?php echo $debitur->fs_nama_perusahaan; ?>" data-clear-btn="true">
	<label for="fs_alamat_perusahaan">Alamat Perusahaan:</label>
	<textarea cols="40" rows="8" name="fs_alamat_perusahaan" id="fs_alamat_perusahaan"><?php echo $debitur->fs_alamat_perusahaan; ?></textarea>
	<label for="fs_kota_perusahaan">Kota:</label>
	<input type="text" name="fs_kota_perusahaan" id="fs_kota_perusahaan" value="<?php echo $debitur->fs_kota_perusahaan; ?>" data-clear-btn="true">
	<label for="fs_kodepos_perusahaan">Kodepos:</label>
	<input type="text" name="fs_kodepos_perusahaan" id="fs_kodepos_perusahaan" value="<?php echo $debitur->fs_kodepos_perusahaan; ?>" data-clear-btn="true">
	<label for="fn_lama_kerja">Lama Kerja:</label>
	<input type="text" name="fn_lama_kerja" id="fn_lama_kerja" value="<?php echo $debitur->fn_lama_kerja; ?>" data-clear-btn="true">
	<label for="fs_jabatan_perusahaan">Jabatan:</label>
	<input type="text" name="fs_jabatan_perusahaan" id="fs_jabatan_perusahaan" value="<?php echo $debitur->fs_jabatan_perusahaan; ?>" data-clear-btn="true">
	<label for="fs_telepon_perusahaan">Telepon Perusahaan:</label>
	<input type="text" name="fs_telepon_perusahaan" id="fs_telepon_perusahaan" value="<?php echo $debitur->fs_telepon_perusahaan; ?>" data-clear-btn="true">
	<label for="fs_pendidikan">Pendidikan:</label>
	<select name="fs_pendidikan" id="fs_pendidikan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($pendidikan as $p) : ?>
		<option value="<?php echo $p->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_pendidikan == $p->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $p->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_kegiatan_usaha">Kegiatan Usaha:</label>
	<textarea cols="40" rows="8" name="fs_kegiatan_usaha" id="fs_kegiatan_usaha"><?php echo $debitur->fs_kegiatan_usaha; ?></textarea>
<br>
<h4>DATA PINJAMAN</h4>
	<label for="fs_nama_dealer">Dealer:</label>
	<select name="fs_nama_dealer" id="fs_nama_dealer" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($dealer as $d) : ?>
		<option value="<?php echo $d->fs_nama_dealer; ?>" <?php if ($debitur->fs_nama_dealer == $d->fs_nama_dealer) { echo "selected"; } ?>><?php echo $d->fs_nama_dealer; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_kondisi_kendaraan">Kondisi:</label>
	<select name="fs_kondisi_kendaraan" id="fs_kondisi_kendaraan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($kondisi_kendaraan as $k) : ?>
		<option value="<?php echo $k->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_kondisi_kendaraan == $k->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $k->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_merk_kendaraan">Merk Kendaraan:</label>
	<input type="text" name="fs_merk_kendaraan" id="fs_merk_kendaraan" value="<?php echo $debitur->fs_merk_kendaraan; ?>" data-clear-btn="true">
	<label for="fs_tipe_kendaraan">Type Kendaraan:</label>
	<input type="text" name="fs_tipe_kendaraan" id="fs_tipe_kendaraan" value="<?php echo $debitur->fs_tipe_kendaraan; ?>" data-clear-btn="true">
	<label for="fs_jenis_kendaraan">Jenis Kendaraan:</label>
	<select name="fs_jenis_kendaraan" id="fs_jenis_kendaraan" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($jenis_kendaraan as $jk) : ?>
		<option value="<?php echo $jk->fs_nilai1_referensi; ?>" <?php if ($debitur->fs_jenis_kendaraan == $jk->fs_nilai1_referensi) { echo "selected"; } ?>><?php echo $jk->fs_nama_referensi; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fs_nomor_bpkb">No. BPKB:</label>
	<input type="text" name="fs_nomor_bpkb" id="fs_nomor_bpkb" value="<?php echo $debitur->fs_nomor_bpkb; ?>" data-clear-btn="true">
	<label for="fs_nama_bpkb">Nama BPKB:</label>
	<input type="text" name="fs_nama_bpkb" id="fs_nama_bpkb" value="<?php echo $debitur->fs_nama_bpkb; ?>" data-clear-btn="true">
	<label for="fs_no_rangka">No. Rangka:</label>
	<input type="text" name="fs_no_rangka" id="fs_no_rangka" value="<?php echo $debitur->fs_no_rangka; ?>" data-clear-btn="true">
	<label for="fs_no_polisi">No. Polisi:</label>
	<input type="text" name="fs_no_polisi" id="fs_no_polisi" value="<?php echo $debitur->fs_no_polisi; ?>" data-clear-btn="true">
	<label for="fs_no_faktur">No. Faktur:</label>
	<input type="text" name="fs_no_faktur" id="fs_no_faktur" value="<?php echo $debitur->fs_no_faktur; ?>" data-clear-btn="true">
	<label for="fs_warna_kendaraan">Warna:</label>
	<input type="text" name="fs_warna_kendaraan" id="fs_warna_kendaraan" value="<?php echo $debitur->fs_warna_kendaraan; ?>" data-clear-btn="true">
	<label for="fn_tahun_kendaraan">Tahun Kendaraan:</label>
	<input type="text" name="fn_tahun_kendaraan" id="fn_tahun_kendaraan" value="<?php echo $debitur->fn_tahun_kendaraan; ?>" data-clear-btn="true">
	<label for="fn_tahun_rakit">Tahun Rakit:</label>
	<input type="text" name="fn_tahun_rakit" id="fn_tahun_rakit" value="<?php echo $debitur->fn_tahun_rakit; ?>" data-clear-btn="true">
<br>
	<label for="fn_harga_otr">Harga OTR:</label>
	<input type="number" name="fn_harga_otr" id="fn_harga_otr" value="<?php echo $debitur->fn_harga_otr; ?>" data-clear-btn="true">
	<label for="fs_angsuran_dimuka">Jenis Uang Muka:</label>
	<select name="fs_angsuran_dimuka" id="fs_angsuran_dimuka" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($jenis_uangmuka as $ju) : ?>
		<option value="<?php echo $ju[0]; ?>" <?php if ($debitur->fs_angsuran_dimuka == $ju[0]) { echo "selected"; } ; ?>><?php echo $ju[1]; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fn_dp_bayar">Uang Muka:</label>
	<input type="number" name="fn_dp_bayar" id="fn_dp_bayar" value="<?php echo $debitur->fn_dp_bayar; ?>" data-clear-btn="true">
	<label for="fn_kali_angsuran_dimuka">Tenor:</label>
	<input type="number" name="fn_kali_angsuran_dimuka" id="fn_kali_angsuran_dimuka" value="<?php echo $debitur->fn_kali_angsuran_dimuka; ?>" data-clear-btn="true">
	<label for="fn_pokok_pembiayaan">Pokok:</label>
	<input type="number" name="fn_pokok_pembiayaan" id="fn_pokok_pembiayaan" value="<?php echo $debitur->fn_pokok_pembiayaan; ?>" data-clear-btn="true">
	<label for="fs_jenis_asuransi">Jenis Asuransi:</label>
	<select name="fs_jenis_asuransi" id="fs_jenis_asuransi" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($jenis_asuransi as $ja) : ?>
		<option value="<?php echo $ja[0]; ?>" <?php if ($debitur->fs_jenis_asuransi == $ja[0]) { echo "selected"; } ?>><?php echo $ja[1]; ?></option>
		<?php endforeach ; ?>
	</select>
	<label for="fn_premi_asuransi">Asuransi:</label>
	<input type="number" name="fn_premi_asuransi" id="fn_premi_asuransi" value="<?php echo $debitur->fn_premi_asuransi; ?>" data-clear-btn="true">
	<label for="fn_total_pokok_pembiayaan">Total Pokok:</label>
	<input type="number" name="fn_total_pokok_pembiayaan" id="fn_total_pokok_pembiayaan" value="<?php echo $debitur->fn_total_pokok_pembiayaan; ?>" data-clear-btn="true">
	<label for="fn_bunga">Bunga:</label>
	<input type="number" name="fn_bunga" id="fn_bunga" value="<?php echo $debitur->fn_bunga; ?>" data-clear-btn="true">
	<label for="fn_persen_bunga_flat">Bunga Flat:</label>
	<input type="number" name="fn_persen_bunga_flat" id="fn_persen_bunga_flat" value="<?php echo $debitur->fn_persen_bunga_flat; ?>" data-clear-btn="true">
	<label for="fn_persen_bunga_efektif">Bunga Efektif:</label>
	<input type="number" name="fn_persen_bunga_efektif" id="fn_persen_bunga_efektif" value="<?php echo $debitur->fn_persen_bunga_efektif; ?>" data-clear-btn="true">
	<label for="fn_piutang">Total Hutang:</label>
	<input type="number" name="fn_piutang" id="fn_piutang" value="<?php echo $debitur->fn_piutang; ?>" data-clear-btn="true">
	<label for="fn_angsuran">Angsuran:</label>
	<input type="number" name="fn_angsuran" id="fn_angsuran" value="<?php echo $debitur->fn_angsuran; ?>" data-clear-btn="true">
	<label for="fn_biaya_adm">Biaya Admin:</label>
	<input type="number" name="fn_biaya_adm" id="fn_biaya_adm" value="<?php echo $debitur->fn_biaya_adm; ?>" data-clear-btn="true">
	<label for="fn_biaya_provisi">Biaya Provisi:</label>
	<input type="number" name="fn_biaya_provisi" id="fn_biaya_provisi" value="<?php echo $debitur->fn_biaya_provisi; ?>" data-clear-btn="true">
	<label for="fn_biaya_cek_bpkb">Biaya Cek BPKB:</label>
	<input type="number" name="fn_biaya_cek_bpkb" id="fn_biaya_cek_bpkb" value="<?php echo $debitur->fn_biaya_cek_bpkb; ?>" data-clear-btn="true">
	<label for="fs_komersial">Komersil:</label>
	<select name="fs_komersial" id="fs_komersial" data-native-menu="false">
		<option>Pilih</option>
		<?php foreach ($komersil as $k) : ?>
		<option value="<?php echo $k[0]; ?>" <?php if ($debitur->fs_komersial == $k[0]) { echo "selected"; } ?>><?php echo $k[1]; ?></option>
		<?php endforeach ; ?>
	</select>
	<input type="hidden" name="fs_kode_cabang" value="<?php echo $this->uri->segment(3); ?>" />
	<input type="hidden" name="fn_no_apk" value="<?php echo $this->uri->segment(4); ?>" />
<br>
	<button data-theme="b">SIMPAN</button>
</form>
</div>