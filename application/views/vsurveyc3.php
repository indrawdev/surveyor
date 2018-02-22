<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $this->template->widget("tabsurvey"); ?>
<div class="ui-content" role="main">
<form id="c3">
	<div>
		<h4>CHARACTER</h4>
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
		<h4>KORESPONDENSI</h4>
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
		<h4>DATA KELUARGA KANDUNG <i>(TIDAK TINGGAL SERUMAH)</i></h4>
		<div class="field-contain">
			<label for="nama_saudara">Nama:</label>
			<input type="text" name="nama_saudara" id="nama_saudara" value="" data-clear-btn="true">
		</div>
		<div class="field-contain">
		    <label for="jekel_saudara">Jenis Kelamin:</label>
		    <select name="jekel_saudara" id="jekel_saudara" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($jenis_kelamin as $jk) : ?>
		        <option value="<?php echo $jk->fs_nilai1_referensi; ?>"><?php echo $jk->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="alamat_saudara">Alamat:</label>
			<textarea cols="40" rows="8" name="alamat_saudara" id="alamat_saudara"></textarea>
		</div>
		<div class="field-contain">
		    <label for="relasi_pemohon">Relasi dengan Pemohon:</label>
		    <select name="relasi_pemohon" id="relasi_pemohon" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($relasi_pemohon as $rp) : ?>
		        <option value="<?php echo $rp->fs_nilai1_referensi; ?>"><?php echo $rp->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="fs_telepon_saudara">No Telepon/Handphone:</label>
			<input type="text" name="fs_telepon_saudara" id="fs_telepon_saudara" value="" data-clear-btn="true">
		</div>
		<h4>COLLATERAL</h4>
		<div class="field-contain">
		    <label for="body">Body:</label>
		    <select name="body" id="body" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($body as $b) : ?>
		        <option value="<?php echo $b->fs_nilai1_referensi; ?>"><?php echo $b->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="interior">Interior:</label>
		    <select name="interior" id="interior" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($interior as $i) : ?>
		        <option value="<?php echo $i->fs_nilai1_referensi; ?>"><?php echo $i->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="mesin">Mesin:</label>
		    <select name="mesin" id="mesin" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($mesin as $m) : ?>
		        <option value="<?php echo $m->fs_nilai1_referensi; ?>"><?php echo $m->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="rangka">Rangka:</label>
		    <select name="rangka" id="rangka" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($rangka as $r) : ?>
		        <option value="<?php echo $r->fs_nilai1_referensi; ?>"><?php echo $r->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
		    <label for="aksesoris">Aksesoris:</label>
		    <select name="aksesoris" id="aksesoris" data-native-menu="false">
		    	<option>Pilih</option>
		    	<?php foreach ($aksesoris as $a) : ?>
		        <option value="<?php echo $a->fs_nilai1_referensi; ?>"><?php echo $a->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<div class="field-contain">
			<label for="harga_pasar">Harga Pasar saat ini:</label>
			<input type="number" name="harga_pasar" id="harga_pasar" value="" data-clear-btn="true">
		</div>
		<h4>CAPITAL</h4>
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
		    <label for="bukti_kepemilikan_aset">Bukti Kepemilikan Aset:</label>
		    <select name="bukti_kepemilikan_aset" id="bukti_kepemilikan_aset" data-native-menu="false">
		    	<option>Pilih</option>
		        <?php foreach ($bukti_kepemilikan_aset as $bka): ?>
		        <option value="<?php echo $bka->fs_nilai1_referensi; ?>"><?php echo $bka->fs_nama_referensi; ?></option>
		        <?php endforeach ; ?>
		    </select>
		</div>
		<br>
		<div class="field-contain">
			<button data-theme="b">SIMPAN</button>
		</div>
	</div>
</form>
</div>