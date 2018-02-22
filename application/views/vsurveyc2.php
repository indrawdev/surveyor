<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo $this->template->widget("tabsurvey"); ?>
<div class="ui-content" role="main">
<form id="c2">
	<div>
		<h4>DATA PINJAMAN</h4>
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
		<br>
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
			<button data-theme="b">SIMPAN</button>
		</div>
	</div>
</form>
</div>