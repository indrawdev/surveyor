<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form method="post" id="c1" class="content_div">
	<div>
		<div class="field-contain">
		    <label for="jenis_aplikasi">Jenis Aplikasi:</label>
		    <select name="jenis_aplikasi" id="jenis_aplikasi" data-native-menu="false">
		    	<?php foreach ($jenis_aplikasi as $ja) : ?>
		        <option value="<?php echo $ja->fs_nilai1_referensi; ?>"><?php echo $ja->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="nama_konsumen">Nama Konsumen:</label>
			<input type="text" name="nama_konsumen" id="nama_konsumen" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="nama_ibukandung">Nama Ibu Kandung:</label>
			<input type="text" name="nama_ibukandung" id="nama_ibukandung" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="alamat_konsumen">Alamat Konsumen:</label>
			<textarea cols="40" rows="8" name="alamat_konsumen" id="alamat_konsumen"></textarea>
		</div>
		<div class="field-contain">
			<label for="telepon_konsumen">No Telepon Konsumen:</label>
			<input type="text" name="telepon_konsumen" id="telepon_konsumen" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="handphone_konsumen">No Handphone Konsumen:</label>
			<input type="text" name="handphone_konsumen" id="handphone_konsumen" value="" data-clear-btn="true">
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
		    	<?php foreach ($status_konsumen as $sk) : ?>
		        <option value="<?php echo $sk->fs_nilai1_referensi; ?>"><?php echo $sk->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="jenis_kelamin">Jenis Kelamin:</label>
		    <select name="jenis_kelamin" id="jenis_kelamin" data-native-menu="false">
		        <?php foreach ($jenis_kelamin as $jk) : ?>
		        <option value="<?php echo $jk->fs_nilai1_referensi; ?>"><?php echo $jk->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="mail_address">Alamat Surat:</label>
		    <select name="mail_address" id="mail_address" data-native-menu="false">
		        <option value="1">The 1st Option</option>
		        <option value="2">The 2nd Option</option>
		        <option value="3">The 3rd Option</option>
		        <option value="4">The 4th Option</option>
		    </select>
		</div>
		<div class="field-contain">
			<button data-theme="b">Submit</button>
		</div>
	</div>
</form>
<form method="post" id="c2" class="content_div">
	<div>
		<div class="field-contain">
		    <label for="perkerjaan">Perkerjaan:</label>
		    <select name="perkerjaan" id="perkerjaan" data-native-menu="false">
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
			<label for="lama_kerja">Lama Kerja:</label>
			<input type="text" name="lama_kerja" id="lama_kerja" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
			<label for="nama_perusahaan">Telepon Perusahaan:</label>
			<input type="text" name="telepon_perusahaan" id="telepon_perusahaan" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
		    <label for="pendidikan">Pendidikan:</label>
		    <select name="pendidikan" id="pendidikan" data-native-menu="false">
		    	<?php foreach ($pendidikan as $p) : ?>
		        <option value="<?php echo $p->fs_nilai1_referensi; ?>"><?php echo $p->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="kegiatan_usaha">Kegiatan Usaha:</label>
			<textarea cols="40" rows="8" name="kegiatan_usaha" id="kegiatan_usaha"></textarea>
		</div>
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
		        <option value="1">The 1st Option</option>
		        <option value="2">The 2nd Option</option>
		        <option value="3">The 3rd Option</option>
		        <option value="4">The 4th Option</option>
		    </select>
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
		    <label for="cek_lingkungan">Cek Lingkungan:</label>
		    <select name="cek_lingkungan" id="cek_lingkungan" data-native-menu="false">
		        <?php foreach ($cek_lingkungan as $cl) : ?>
		        <option value="<?php echo $cl->fs_nilai1_referensi; ?>"><?php echo $cl->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="rekomendasi">Rekomendasi:</label>
		    <select name="rekomendasi" id="rekomendasi" data-native-menu="false">
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
		        <?php foreach ($status_kepemilikan as $sk) : ?>
		        <option value="<?php echo $sk->fs_nilai1_referensi; ?>"><?php echo $sk->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="bukti_kepemilikan">Bukti Kepemilikan:</label>
		    <select name="bukti_kepemilikan" id="bukti_kepemilikan" data-native-menu="false">
		        <?php foreach ($bukti_kepemilikan as $bk) : ?>
		        <option value="<?php echo $bk->fs_nilai1_referensi; ?>"><?php echo $bk->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="dinding_rumah">Dinding Rumah:</label>
		    <select name="dinding_rumah" id="dinding_rumah" data-native-menu="false">
		    	<?php foreach ($dinding_rumah as $dr) : ?>
		        <option value="<?php echo $dr->fs_nilai1_referensi; ?>"><?php echo $dr->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="tempat_kendaraan">Tempat Kendaraan:</label>
		    <select name="tempat_kendaraan" id="tempat_kendaraan" data-native-menu="false">
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
		        <?php foreach ($jalanan_rumah as $jr) : ?>
		        <option value="<?php echo $jr->fs_nilai1_referensi; ?>"><?php echo $jr->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="lebar_jalanan">Lebar Jalanan:</label>
		    <select name="lebar_jalanan" id="lebar_jalanan" data-native-menu="false">
		        <?php foreach ($lebar_jalanan as $lj): ?>
		        <option value="<?php echo $lj->fs_nilai1_referensi; ?>"><?php echo $lj->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="kondisi_lingkungan">Kondisi Lingkungan:</label>
		    <select name="kondisi_lingkungan" id="kondisi_lingkungan" data-native-menu="false">
		        <?php foreach ($kondisi_lingkungan as $kl): ?>
		        <option value="<?php echo $kl->fs_nilai1_referensi; ?>"><?php echo $kl->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="perabotan_rumah">Perabotan Rumah:</label>
		    <select name="perabotan_rumah" id="perabotan_rumah" data-native-menu="false">
		        <?php foreach ($perabotan_rumah as $pr): ?>
		        <option value="<?php echo $pr->fs_nilai1_referensi; ?>"><?php echo $pr->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="bukti_kepemilikan_aset">Bukti Kepemilikan:</label>
		    <select name="bukti_kepemilikan_aset" id="bukti_kepemilikan_aset" data-native-menu="false">
		        <option value="1">The 1st Option</option>
		        <option value="2">The 2nd Option</option>
		        <option value="3">The 3rd Option</option>
		        <option value="4">The 4th Option</option>
		    </select>
		</div>
		<div class="field-contain">
			<button data-theme="b">Submit</button>
		</div>
	</div>
</form>