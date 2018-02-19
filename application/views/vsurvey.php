<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form method="post" id="c1" class="content_div">
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
			<input type="text" name="nama_konsumen" id="nama_konsumen" value="" class="required" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="nama_ibukandung">Nama Ibu Kandung:</label>
			<input type="text" name="nama_ibukandung" id="nama_ibukandung" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="ktp_konsumen">No KTP Konsumen:</label>
			<input type="text" name="ktp_konsumen" id="ktp_konsumen" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="npwp_konsumen">NPWP Konsumen:</label>
			<input type="text" name="npwp_konsumen" id="npwp_konsumen" value="" data-clear-btn="true">
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
			<label for="tanggal_lahir">Tanggal Lahir:</label>
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
		    <label for="agama_konsumen">Agama:</label>
		    <select name="agama_konsumen" id="agama_konsumen" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($agama_konsumen as $ak) : ?>
		        <option value="<?php echo $ak->fs_nilai1_referensi; ?>"><?php echo $ak->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="mail_address">Alamat Surat:</label>
		    <select name="mail_address" id="mail_address" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($alamat_surat as $as) : ?>
		        <option value="<?php echo $as->fs_nilai1_referensi; ?>"><?php echo $as->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="alamat_konsumen">Alamat Konsumen:</label>
			<textarea cols="40" rows="8" name="alamat_konsumen" id="alamat_konsumen"></textarea>
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
		<hr>
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
			<button data-theme="b">Submit</button>
		</div>
	</div>
</form>
<form method="post" id="c2" class="content_div">
	<div>
		<div class="field-contain">
		    <label for="dealer">Dealer:</label>
		    <select name="dealer" id="dealer" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($dealer as $d) : ?>
		        <option value="<?php echo $d->fs_nama_dealer; ?>"><?php echo $d->fs_nama_dealer; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="kondisi_kendaraan">Kondisi:</label>
		    <select name="kondisi_kendaraan" id="kondisi_kendaraan" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($kondisi_kendaraan as $k) : ?>
		        <option value="<?php echo $k->fs_nilai1_referensi; ?>"><?php echo $k->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="merk_kendaraan">Merk Kendaraan:</label>
			<input type="text" name="merk_kendaraan" id="merk_kendaraan" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="type_kendaraan">Type Kendaraan:</label>
			<input type="text" name="type_kendaraan" id="type_kendaraan" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
		    <label for="jenis_kendaraan">Jenis Kendaraan:</label>
		    <select name="jenis_kendaraan" id="jenis_kendaraan" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($jenis_kendaraan as $jk) : ?>
		        <option value="<?php echo $jk->fs_nilai1_referensi; ?>"><?php echo $jk->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="no_bpkb">No. BPKB:</label>
			<input type="text" name="no_bpkb" id="no_bpkb" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="nama_bpkb">Nama BPKB:</label>
			<input type="text" name="nama_bpkb" id="nama_bpkb" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="no_rangka">No. Rangka:</label>
			<input type="text" name="no_rangka" id="no_rangka" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="no_polisi">No. Polisi:</label>
			<input type="text" name="no_polisi" id="no_polisi" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="no_faktur">No. Faktur:</label>
			<input type="text" name="no_faktur" id="no_faktur" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="warna_kendaraan">Warna:</label>
			<input type="text" name="warna_kendaraan" id="warna_kendaraan" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="tahun_kendaraan">Tahun Kendaraan:</label>
			<input type="text" name="tahun_kendaraan" id="tahun_kendaraan" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="tahun_rakit">Tahun Rakit:</label>
			<input type="text" name="tahun_rakit" id="tahun_rakit" value="" data-clear-btn="true">
		</div>
		<hr>
		<div class="field-contain">
			<label for="harga_otr">Harga OTR:</label>
			<input type="number" name="harga_otr" id="harga_otr" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="jenis_uangmuka">Jenis Uang Muka:</label>
			<select name="jenis_uangmuka" id="jenis_uangmuka" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($jenis_uangmuka as $ju) : ?>
		    	<option value="<?php echo $ju[0]; ?>"><?php echo $ju[1]; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="uang_muka">Uang Muka:</label>
			<input type="number" name="uang_muka" id="uang_muka" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="tenor">Tenor:</label>
			<input type="number" name="tenor" id="tenor" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="pokok">Pokok:</label>
			<input type="number" name="pokok" id="pokok" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
		    <label for="jenis_asuransi">Jenis Asuransi:</label>
		    <select name="jenis_asuransi" id="jenis_asuransi" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($jenis_asuransi as $ja) : ?>
		        <option value="<?php echo $ja[0]; ?>"><?php echo $ja[1]; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="asuransi">Asuransi:</label>
			<input type="number" name="asuransi" id="asuransi" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="total_pokok">Total Pokok:</label>
			<input type="number" name="total_pokok" id="total_pokok" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="bunga">Bunga:</label>
			<input type="number" name="bunga" id="bunga" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="bunga_flat">Bunga Flat:</label>
			<input type="number" name="bunga_flat" id="bunga_flat" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="bunga_efektif">Bunga Efektif:</label>
			<input type="number" name="bunga_efektif" id="bunga_efektif" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="total_hutang">Total Hutang:</label>
			<input type="number" name="total_hutang" id="total_hutang" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="angsuran">Angsuran:</label>
			<input type="number" name="angsuran" id="angsuran" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="biaya_admin">Biaya Admin:</label>
			<input type="number" name="biaya_admin" id="biaya_admin" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="biaya_provisi">Biaya Provisi:</label>
			<input type="number" name="biaya_provisi" id="biaya_provisi" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="biaya_cek_bpkb">Biaya Cek BPKB:</label>
			<input type="number" name="biaya_cek_bpkb" id="biaya_cek_bpkb" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="komersil">Komersil:</label>
			<select name="komersil" id="komersil" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($komersil as $k) : ?>
		    	<option value="<?php echo $k[0]; ?>"><?php echo $k[1]; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<br>
		<div class="field-contain">
			<button data-theme="b">Submit</button>
		</div>
	</div>
</form>
<form method="post" id="c3" class="content_div">
	<div>
		<div class="field-contain">
		    <label for="didampingi_pasangan">Didampingi pasangan:</label>
		    <select name="didampingi_pasangan" id="didampingi_pasangan" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($didampingi as $d) : ?>
		    	<option value="<?php echo $d[0]; ?>"><?php echo $d[1]; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="handphone_pasangan">No. Handphone Pasangan:</label>
			<input type="text" name="handphone_pasangan" id="handphone_pasangan" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="alamat_survey">Alamat Survey:</label>
			<textarea cols="40" rows="8" name="alamat_survey" id="alamat_survey"></textarea>
		</div>
		<div class="field-contain">
			<label for="alamat_surat">Alamat Surat:</label>
			<textarea cols="40" rows="8" name="alamat_surat" id="alamat_surat"></textarea>
		</div>
		<div class="field-contain">
			<label for="kodepos_pasangan">Kodepos:</label>
			<input type="text" name="kodepos_pasangan" id="kodepos_pasangan" value="" data-clear-btn="true">
		</div>
		<hr>
		<div class="field-contain">
		    <label for="cek_lingkungan">Cek Lingkungan:</label>
		    <select name="cek_lingkungan" id="cek_lingkungan" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($cek_lingkungan as $cl) : ?>
		        <option value="<?php echo $cl->fs_nilai1_referensi; ?>"><?php echo $cl->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="rekomendasi">Rekomendasi:</label>
		    <select name="rekomendasi" id="rekomendasi" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($rekomendasi as $r) : ?>
		        <option value="<?php echo $r->fs_nilai1_referensi; ?>"><?php echo $r->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="nama_korespondensi">Nama Korespondensi:</label>
			<input type="text" name="nama_korespondensi" id="nama_korespondensi" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="handphone_korespondensi">HP Korespondensi:</label>
			<input type="text" name="handphone_korespondensi" id="handphone_korespondensi" value="" data-clear-btn="true">
		</div>
		<br>
		<div class="field-contain">
			<button data-theme="b">Submit</button>
		</div>
	</div>
</form>
<form method="post" id="c4" class="content_div">
	<div>
		<div class="field-contain">
			<label for="luas_bangunan">Luas Bangunan:</label>
			<input type="number" name="luas_bangunan" id="luas_bangunan" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="luas_tanah">Luas Tanah:</label>
			<input type="number" name="luas_tanah" id="luas_tanah" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
		    <label for="status_kepemilikan">Status Kepemilikan:</label>
		    <select name="status_kepemilikan" id="status_kepemilikan" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($status_kepemilikan as $sk) : ?>
		        <option value="<?php echo $sk->fs_nilai1_referensi; ?>"><?php echo $sk->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="bukti_kepemilikan">Bukti Kepemilikan:</label>
		    <select name="bukti_kepemilikan" id="bukti_kepemilikan" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($bukti_kepemilikan as $bk) : ?>
		        <option value="<?php echo $bk->fs_nilai1_referensi; ?>"><?php echo $bk->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="dinding_rumah">Dinding Rumah:</label>
		    <select name="dinding_rumah" id="dinding_rumah" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($dinding_rumah as $dr) : ?>
		        <option value="<?php echo $dr->fs_nilai1_referensi; ?>"><?php echo $dr->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="tempat_kendaraan">Tempat Kendaraan:</label>
		    <select name="tempat_kendaraan" id="tempat_kendaraan" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($tempat_kendaraan as $tk) : ?>
		        <option value="<?php echo $tk->fs_nilai1_referensi; ?>"><?php echo $tk->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="alamat_penyimpanan">Alamat Penyimpanan:</label>
			<textarea cols="40" rows="8" name="alamat_penyimpanan" id="alamat_penyimpanan"></textarea>
		</div>
		<div class="field-contain">
		    <label for="jalanan_rumah">Jalanan Rumah:</label>
		    <select name="jalanan_rumah" id="jalanan_rumah" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($jalanan_rumah as $jr) : ?>
		        <option value="<?php echo $jr->fs_nilai1_referensi; ?>"><?php echo $jr->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="lebar_jalanan">Lebar Jalanan:</label>
		    <select name="lebar_jalanan" id="lebar_jalanan" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($lebar_jalanan as $lj): ?>
		        <option value="<?php echo $lj->fs_nilai1_referensi; ?>"><?php echo $lj->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="kondisi_lingkungan">Kondisi Lingkungan:</label>
		    <select name="kondisi_lingkungan" id="kondisi_lingkungan" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($kondisi_lingkungan as $kl): ?>
		        <option value="<?php echo $kl->fs_nilai1_referensi; ?>"><?php echo $kl->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="perabotan_rumah">Perabotan Rumah:</label>
		    <select name="perabotan_rumah" id="perabotan_rumah" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($perabotan_rumah as $pr): ?>
		        <option value="<?php echo $pr->fs_nilai1_referensi; ?>"><?php echo $pr->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="bukti_kepemilikan_aset">Bukti Kepemilikan:</label>
		    <select name="bukti_kepemilikan_aset" id="bukti_kepemilikan_aset" data-native-menu="false">
		    	<option>Pilih</option>
		        <option value="1">The 1st Option</option>
		        <option value="2">The 2nd Option</option>
		        <option value="3">The 3rd Option</option>
		        <option value="4">The 4th Option</option>
		    </select>
		</div>
		<br>
		<div class="field-contain">
			<button data-theme="b">Submit</button>
		</div>
	</div>
</form>