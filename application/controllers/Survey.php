<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

	public function index() {
		$this->template->title = 'Form Survey';
		$this->template->stylesheet->add('assets/css/custom.css', array('media' => 'all'));
		$this->template->javascript->add('assets/js/survey.js');

		$this->load->model('MSurvey');
		// TAB C1
		$data['jenis_aplikasi'] = $this->MSurvey->getReferensi('jenis_piutang');
		$data['status_konsumen'] = $this->MSurvey->getReferensi('status_konsumen');
		$data['jenis_pembiayaan'] = $this->MSurvey->getReferensi('jenis_pembiayaan');
		$data['jenis_kelamin'] = $this->MSurvey->getReferensi('jenis_kelamin');
		$data['agama_konsumen'] = $this->MSurvey->getReferensi('agama');
		$data['alamat_surat'] = $this->MSurvey->getReferensi('alamat_surat');
		$data['pekerjaan'] = $this->MSurvey->getReferensi('pekerjaan');
		$data['pendidikan'] = $this->MSurvey->getReferensi('pendidikan');

		// TAB C2
		$data['dealer'] = $this->MSurvey->getDealer(12);
		$data['kondisi_kendaraan'] = $this->MSurvey->getReferensi('kondisi_kendaraan');
		$data['jenis_uangmuka'] = array(1 => array('Y','DIMUKA'), 2 => array('N','DIBELAKANG'));
		$data['jenis_kendaraan'] = $this->MSurvey->getReferensi('jenis_kendaraan');
		$data['jenis_asuransi'] = array(1 => array('A','ALL RISK'), 2 => array('T','TOTAL LOST ONLY'));
		$data['komersil'] = array(1 => array('Y','YA'), 2 => array('N','TIDAK'));

		// TAB C3
		$data['didampingi'] = array(1 => array('Y','YA'), 2 => array('N','TIDAK'));
		$data['cek_lingkungan'] = $this->MSurvey->getRefSurvey('character_check_lingkungan');
		$data['rekomendasi'] = $this->MSurvey->getRefSurvey('character_rekomendasi_lingkungan');
		$data['body'] = $this->MSurvey->getRefSurvey('colateral_body');
		$data['interior'] = $this->MSurvey->getRefSurvey('colateral_interior');
		$data['mesin'] = $this->MSurvey->getRefSurvey('colateral_mesin');
		$data['rangka'] = $this->MSurvey->getRefSurvey('colateral_chassis');
		$data['aksesoris'] = $this->MSurvey->getRefSurvey('colateral_accessories');

		// TAB C4
		$data['status_kepemilikan'] = $this->MSurvey->getRefSurvey('capital_status_kepemilikan');
		$data['bukti_kepemilikan'] = $this->MSurvey->getRefSurvey('capital_bukti_kepemilikan');
		$data['dinding_rumah'] = $this->MSurvey->getRefSurvey('capital_dinding_rumah');
		$data['tempat_kendaraan'] = $this->MSurvey->getRefSurvey('capital_tempat_kendaraan');
		$data['jalanan_rumah'] = $this->MSurvey->getRefSurvey('capital_jalanan_rumah');
		$data['lebar_jalanan'] = $this->MSurvey->getRefSurvey('capital_lebar_jalanan');
		$data['kondisi_lingkungan'] = $this->MSurvey->getRefSurvey('capital_kondisi_lingkungan');
		$data['perabotan_rumah'] = $this->MSurvey->getRefSurvey('capital_perabotan_rumah');
		$data['bukti_kepemilikan_aset'] = $this->MSurvey->getRefSurvey('capital_bukti_kepemilikan_asset');

		$this->template->content->view('vsurvey', $data);
		$this->template->publish();
	}

	public function select() {
		
	}

	public function submitc1() {
		$user = $this->encryption->decrypt($this->session->userdata('username'));
		$cabang = $this->encryption->decrypt($this->session->userdata('kodecabang'));
		$noapk = $this->input->post('fn_no_apk');

		$nama_konsumen = $this->input->post('fs_nama_konsumen');
		$nama_ibukandung = $this->input->post('fs_nama_ibukandung');
		$jenis_aplikasi = $this->input->post('fs_jenis_aplikasi');
		$tipe_konsumen = $this->input->post('fs_tipe_konsumen');
		$ktp_konsumen = $this->input->post('fs_ktp_konsumen');
		$npwp_konsumen = $this->input->post('fs_npwp_konsumen');
		$tempat_lahir_konsumen = $this->input->post('fs_tempat_lahir_konsumen');
		$tanggal_lahir_konsumen = $this->input->post('fd_tanggal_lahir_konsumen');
		$tanggal_akhir_ktp = $this->input->post('fd_tanggal_akhir_ktp');
		$status_konsumen = $this->input->post('fs_status_konsumen');
		$jenis_kelamin_konsumen = $this->input->post('fs_jenis_kelamin_konsumen');
		$tanggal_lahir_pasangan = $this->input->post('fd_tanggal_lahir_pasangan');
		$mail_address = $this->input->post('fs_mail_address');
		$alamat_konsumen = $this->input->post('fs_alamat_konsumen');
		$kelurahan_konsumen = $this->input->post('fs_kelurahan_konsumen');
		$kecamatan_konsumen = $this->input->post('fs_kecamatan_konsumen');
		$kota_konsumen = $this->input->post('fs_kota_konsumen');
		$kodepos_konsumen = $this->input->post('fs_kodepos_konsumen');
		$agama_konsumen = $this->input->post('fs_agama_konsumen');
		$email_konsumen = $this->input->post('fs_email_konsumen');
		$handphone_konsumen = $this->input->post('fs_handphone_konsumen');
		$telepon_konsumen = $this->input->post('fs_telepon_konsumen');
		$pekerjaan = $this->input->post('fs_pekerjaan');
		$nama_perusahaan = $this->input->post('fs_nama_perusahaan');
		$jenis_usaha = $this->input->post('fs_jenis_usaha');
		$kerja_sejak = $this->input->post('fs_kerja_sejak');
		$alamat_perusahaan = $this->input->post('fs_alamat_perusahaan');
		$kota_perusahaan = $this->input->post('fs_kota_perusahaan');
		$kodepos_perusahaan = $this->input->post('fs_kodepos_perusahaan');
		$jabatan_perusahaan = $this->input->post('fs_jabatan_perusahaan');
		$telepon_perusahaan = $this->input->post('fs_telepon_perusahaan');
		$pendidikan = $this->input->post('fs_pendidikan');
		$kegiatan_usaha = $this->input->post('fs_kegiatan_usaha');
		$nama_dealer = $this->input->post('fs_nama_dealer');
		$kondisi_kendaraan = $this->input->post('fs_kondisi_kendaraan');
		$merk_kendaraan = $this->input->post('fs_merk_kendaraan');
		$jenis_kendaraan = $this->input->post('fs_jenis_kendaraan');
		$model_kendaraan = $this->input->post('fs_model_kendaraan');
		$tipe_kendaraan = $this->input->post('fs_tipe_kendaraan');
		$tahun_kendaraan = $this->input->post('fn_tahun_kendaraan');
		$tahun_rakit = $this->input->post('fn_tahun_rakit');
		$warna_kendaraan = $this->input->post('fs_warna_kendaraan');
		$no_rangka = $this->input->post('fs_no_rangka');
		$no_mesin = $this->input->post('fs_no_mesin');
		$no_faktur = $this->input->post('fs_no_faktur');
		$komersial = $this->input->post('fs_komersial');
		$nama_bpkb = $this->input->post('fs_nama_bpkb');
		$nomor_bpkb = $this->input->post('fs_nomor_bpkb');
		$no_polisi = $this->input->post('fs_no_polisi');
		$harga_otr = $this->input->post('fn_harga_otr');
		$dp_bayar = $this->input->post('fn_dp_bayar');
		$angsuran_dimuka = $this->input->post('fs_angsuran_dimuka');
		$pokok_pembiayaan = $this->input->post('fn_pokok_pembiayaan');
		$premi_asuransi = $this->input->post('fn_premi_asuransi');
		$total_pokok_pembiayaan = $this->input->post('fn_total_pokok_pembiayaan');
		$bunga = $this->input->post('fn_bunga');
		$persen_bunga_flat = $this->input->post('fn_persen_bunga_flat');
		$persen_bunga_efektif = $this->input->post('fn_persen_bunga_efektif');
		$kali_angsuran_dimuka = $this->input->post('fn_kali_angsuran_dimuka');
		$piutang = $this->input->post('fn_piutang');
		$angsuran = $this->input->post('fn_angsuran');
		$biaya_adm = $this->input->post('fn_biaya_adm');
		$biaya_provisi = $this->input->post('fn_biaya_provisi');
		$biaya_cek_bpkb = $this->input->post('fn_biaya_cek_bpkb');
		$pemohon_didampingi = $this->input->post('fs_pemohon_didampingi');
		$handphone_pasangan = $this->input->post('fs_handphone_pasangan');
		$alamat_survey = $this->input->post('fs_alamat_survey');
		$alamat_surat = $this->input->post('fs_alamat_surat');
		$kodepos_pasangan = $this->input->post('fs_kodepos_pasangan');
		$cek_lingkungan = $this->input->post('fs_cek_lingkungan');
		$rekomendasi = $this->input->post('fs_rekomendasi');
		$nama_korespondensi = $this->input->post('fs_nama_korespondensi');
		$telepon_korespondensi = $this->input->post('fs_telepon_korespondensi');
		$nama_saudara = $this->input->post('fs_nama_saudara');
		$jenis_kelamin_saudara = $this->input->post('fs_jenis_kelamin_saudara');
		$alamat_saudara = $this->input->post('fs_alamat_saudara');
		$relasi_pemohon = $this->input->post('fs_relasi_pemohon');
		$telepon_saudara = $this->input->post('fs_telepon_saudara');
		$body = $this->input->post('fs_body');
		$interior = $this->input->post('fs_interior');
		$mesin = $this->input->post('fs_mesin');
		$rangka = $this->input->post('fs_rangka');
		$aksesoris = $this->input->post('fs_aksesoris');
		$harga_pasar = $this->input->post('fn_harga_pasar');
		$tujuan_penggunaan = $this->input->post('fs_tujuan_penggunaan');
		$luas_bangunan = $this->input->post('fn_luas_bangunan');
		$luas_tanah = $this->input->post('fn_luas_tanah');
		$status_kepemilikan = $this->input->post('fs_status_kepemilikan');
		$bukti_kepemilikan = $this->input->post('fs_bukti_kepemilikan');
		$dinding_rumah = $this->input->post('fs_dinding_rumah');
		$tempat_kendaraan = $this->input->post('fs_tempat_kendaraan');
		$alamat_penyimpanan = $this->input->post('fs_alamat_penyimpanan');
		$jalanan_rumah = $this->input->post('fs_jalanan_rumah');
		$lebar_jalanan = $this->input->post('fs_lebar_jalanan');
		$kondisi_lingkungan = $this->input->post('fs_kondisi_lingkungan');
		$kondisi_rumah = $this->input->post('fs_kondisi_rumah');
		$perabotan_rumah = $this->input->post('fs_perabotan_rumah');
		$unit_rumah = $this->input->post('fn_unit_rumah');
		$unit_kendaraan = $this->input->post('fn_unit_kendaraan');
		$harga_asset = $this->input->post('fn_harga_asset');
		$bukti_kepemilikan_asset = $this->input->post('fs_bukti_kepemilikan_asset');
		$usaha_pasangan = $this->input->post('fs_usaha_pasangan');
		$pendapatan_tambahan = $this->input->post('fs_pendapatan_tambahan');
		$jenis_pendapatan = $this->input->post('fs_jenis_pendapatan');
		$omzet_perbulan = $this->input->post('fn_omzet_perbulan');
		$omzet_persen = $this->input->post('fn_omzet_persen');
		$subtotal_omzet = $this->input->post('fn_subtotal_omzet');
		$hargasewa_perbulan = $this->input->post('fn_hargasewa_perbulan');
		$hargasewa_persen = $this->input->post('fn_hargasewa_persen');
		$subtotal_hargasewa = $this->input->post('fn_subtotal_hargasewa');
		$total_rincian = $this->input->post('fn_total_rincian');
		$pendapatan_utama = $this->input->post('fn_pendapatan_utama');
		$pendapatan_istri = $this->input->post('fn_pendapatan_istri');
		$pendapatan_tambahan = $this->input->post('fn_pendapatan_tambahan');
		$total_pendapatan = $this->input->post('fn_total_pendapatan');
		$biaya_rutin = $this->input->post('fn_biaya_rutin');
		$angsuran_lain = $this->input->post('fn_angsuran_lain');
		$biaya_perawatan = $this->input->post('fn_biaya_perawatan');
		$total_biaya = $this->input->post('fn_total_biaya');
		$sisa_penghasilan = $this->input->post('fn_sisa_penghasilan');
		$angsuran_diajukan = $this->input->post('fn_angsuran_diajukan');
		$kondisi = $this->input->post('fs_kondisi');
		$valid_ktp_pemohon = $this->input->post('fs_valid_ktp_pemohon');
		$valip_ktp_pasangan = $this->input->post('fs_valip_ktp_pasangan');
		$valid_kk = $this->input->post('fs_valid_kartu_keluarga');
		$valid_shmpbbpln = $this->input->post('fs_valid_shmpbbpln');
		$valid_slipgaji = $this->input->post('fs_valid_slipgaji');
		$valid_npwp = $this->input->post('fs_valid_npwp');
		$valid_stnk = $this->input->post('fs_valid_stnk');
		$valid_kp = $this->input->post('fs_valid_kp');

		$update = false;
		$this->load->model('MSurvey');
		$sSQL = $this->MSurvey->checkAPK($cabang, $noapk);

		$dt = array(
			'fs_nama_konsumen' => trim($nama_konsumen),
			'fs_nama_ibukandung' => trim($nama_ibukandung),
			'fs_jenis_aplikasi' => trim($jenis_aplikasi),
			'fs_tipe_konsumen' => trim($tipe_konsumen),
			'fs_ktp_konsumen' => trim($ktp_konsumen),
			'fs_npwp_konsumen' => trim($npwp_konsumen),
			'fs_tempat_lahir_konsumen' => trim($tempat_lahir_konsumen),
			'fd_tanggal_lahir_konsumen' => trim($tanggal_lahir_konsumen),
			'fd_tanggal_akhir_ktp' => trim($tanggal_akhir_ktp),
			'fs_status_konsumen' => trim($status_konsumen),
			'fs_jenis_kelamin_konsumen' => trim($jenis_kelamin_konsumen),
			'fd_tanggal_lahir_pasangan' => trim($tanggal_lahir_pasangan),
			'fs_mail_address' => trim($mail_address),
			'fs_alamat_konsumen' => trim($alamat_konsumen),
			'fs_kelurahan_konsumen' => trim($kelurahan_konsumen),
			'fs_kecamatan_konsumen' => trim($kecamatan_konsumen),
			'fs_kota_konsumen' => trim($kota_konsumen),
			'fs_kodepos_konsumen' => trim($kodepos_konsumen),
			'fs_agama_konsumen' => trim($agama_konsumen),
			'fs_email_konsumen' => trim($email_konsumen),
			'fs_handphone_konsumen' => trim($handphone_konsumen),
			'fs_telepon_konsumen' => trim($telepon_konsumen),
			'fs_pekerjaan' => trim($pekerjaan),
			'fs_nama_perusahaan' => trim($nama_perusahaan),
			'fs_jenis_usaha' => trim($jenis_usaha),
			'fs_kerja_sejak' => trim($kerja_sejak),
			'fs_alamat_perusahaan' => trim($alamat_perusahaan),
			'fs_kota_perusahaan' => trim($kota_perusahaan),
			'fs_kodepos_perusahaan' => trim($kodepos_perusahaan),
			'fs_jabatan_perusahaan' => trim($jabatan_perusahaan),
			'fs_telepon_perusahaan' => trim($telepon_perusahaan),
			'fs_pendidikan' => trim($pendidikan),
			'fs_kegiatan_usaha' => trim($kegiatan_usaha),
			'fs_nama_dealer' => trim($nama_dealer),
			'fs_kondisi_kendaraan' => trim($kondisi_kendaraan),
			'fs_merk_kendaraan' => trim($merk_kendaraan),
			'fs_jenis_kendaraan' => trim($jenis_kendaraan),
			'fs_model_kendaraan' => trim($model_kendaraan),
			'fs_tipe_kendaraan' => trim($tipe_kendaraan),
			'fn_tahun_kendaraan' => trim($tahun_kendaraan),
			'fn_tahun_rakit' => trim($tahun_rakit),
			'fs_warna_kendaraan' => trim($warna_kendaraan),
			'fs_no_rangka' => trim($no_rangka),
			'fs_no_mesin' => trim($no_mesin),
			'fs_no_faktur' => trim($no_faktur),
			'fs_komersial' => trim($komersial),
			'fs_nama_bpkb' => trim($nama_bpkb),
			'fs_nomor_bpkb' => trim($nomor_bpkb),
			'fs_no_polisi' => trim($no_polisi),
			'fn_harga_otr' => trim($harga_otr),
			'fn_dp_bayar' => trim($dp_bayar),
			'fs_angsuran_dimuka' => trim($angsuran_dimuka),
			'fn_pokok_pembiayaan' => trim($pokok_pembiayaan),
			'fn_premi_asuransi' => trim($premi_asuransi),
			'fn_total_pokok_pembiayaan' => trim($total_pokok_pembiayaan),
			'fn_bunga' => trim($bunga),
			'fn_persen_bunga_flat' => trim($persen_bunga_flat),
			'fn_persen_bunga_efektif' => trim($persen_bunga_efektif),
			'fn_kali_angsuran_dimuka' => trim($kali_angsuran_dimuka),
			'fn_piutang' => trim($piutang),
			'fn_angsuran' => trim($angsuran),
			'fn_biaya_adm' => trim($biaya_adm),
			'fn_biaya_provisi' => trim($biaya_provisi),
			'fn_biaya_cek_bpkb' => trim($biaya_cek_bpkb),
			'fs_pemohon_didampingi' => trim($pemohon_didampingi),
			'fs_handphone_pasangan' => trim($handphone_pasangan),
			'fs_alamat_survey' => trim($alamat_survey),
			'fs_alamat_surat' => trim($alamat_surat),
			'fs_kodepos_pasangan' => trim($kodepos_pasangan),
			'fs_cek_lingkungan' => trim($cek_lingkungan),
			'fs_rekomendasi' => trim($rekomendasi),
			'fs_nama_korespondensi' => trim($nama_korespondensi),
			'fs_telepon_korespondensi' => trim($telepon_korespondensi),
			'fs_nama_saudara' => trim($nama_saudara),
			'fs_jenis_kelamin_saudara' => trim($jenis_kelamin_saudara),
			'fs_alamat_saudara' => trim($alamat_saudara),
			'fs_relasi_pemohon' => trim($relasi_pemohon),
			'fs_telepon_saudara' => trim($telepon_saudara),
			'fs_body' => trim($body),
			'fs_interior' => trim($interior),
			'fs_mesin' => trim($mesin),
			'fs_rangka' => trim($rangka),
			'fs_aksesoris' => trim($aksesoris),
			'fn_harga_pasar' => trim($harga_pasar),
			'fs_tujuan_penggunaan' => trim($tujuan_penggunaan),
			'fn_luas_bangunan' => trim($luas_bangunan),
			'fn_luas_tanah' => trim($luas_tanah),
			'fs_status_kepemilikan' => trim($status_kepemilikan),
			'fs_bukti_kepemilikan' => trim($bukti_kepemilikan),
			'fs_dinding_rumah' => trim($dinding_rumah),
			'fs_tempat_kendaraan' => trim($tempat_kendaraan),
			'fs_alamat_penyimpanan' => trim($alamat_penyimpanan),
			'fs_jalanan_rumah' => trim($jalanan_rumah),
			'fs_lebar_jalanan' => trim($lebar_jalanan),
			'fs_kondisi_lingkungan' => trim($kondisi_lingkungan),
			'fs_kondisi_rumah' => trim($kondisi_rumah),
			'fs_perabotan_rumah' => trim($perabotan_rumah),
			'fn_unit_rumah' => trim($unit_rumah),
			'fn_unit_kendaraan' => trim($unit_kendaraan),
			'fn_harga_asset' => trim($harga_asset),
			'fs_bukti_kepemilikan_asset' => trim($bukti_kepemilikan_asset),
			'fs_usaha_pasangan' => trim($usaha_pasangan),
			'fs_pendapatan_tambahan' => trim($pendapatan_tambahan),
			'fs_jenis_pendapatan' => trim($jenis_pendapatan),
			'fn_omzet_perbulan' => trim($omzet_perbulan),
			'fn_omzet_persen' => trim($omzet_persen),
			'fn_subtotal_omzet' => trim($subtotal_omzet),
			'fn_hargasewa_perbulan' => trim($hargasewa_perbulan),
			'fn_hargasewa_persen' => trim($hargasewa_persen),
			'fn_subtotal_hargasewa' => trim($subtotal_hargasewa),
			'fn_total_rincian' => trim($total_rincian),
			'fn_pendapatan_utama' => trim($pendapatan_utama),
			'fn_pendapatan_istri' => trim($pendapatan_istri),
			'fn_pendapatan_tambahan' => trim($pendapatan_tambahan),
			'fn_total_pendapatan' => trim($total_pendapatan),
			'fn_biaya_rutin' => trim($biaya_rutin),
			'fn_angsuran_lain' => trim($angsuran_lain),
			'fn_biaya_perawatan' => trim($biaya_perawatan),
			'fn_total_biaya' => trim($total_biaya),
			'fn_sisa_penghasilan' => trim($sisa_penghasilan),
			'fn_angsuran_diajukan' => trim($angsuran_diajukan),
			'fs_kondisi' => trim($kondisi),
			'fs_valid_ktp_pemohon' => trim($valid_ktp_pemohon),
			'fs_valip_ktp_pasangan' => trim($valip_ktp_pasangan),
			'fs_valid_kartu_keluarga' => trim($valid_kk),
			'fs_valid_shmpbbpln' => trim($valid_shmpbbpln),
			'fs_valid_slipgaji' => trim($valid_slipgaji),
			'fs_valid_npwp' => trim($valid_npwp),
			'fs_valid_stnk' => trim($valid_stnk),
			'fs_valid_kp' => trim($valid_kp)
		);
	}

	public function submitc2() {

	}

	public function submitc3() {

	}

	public function submitc4() {

	}
}