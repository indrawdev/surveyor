<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui-content" role="main">
<div><?php echo $this->session->flashdata('debitur'); ?></div>
<ul data-role="listview" data-autodividers="true" data-filter="true" data-filter-placeholder="Cari Konsumen" data-inset="true">
	<?php foreach ($konsumen as $k) : ?>
		<li>
			<a href="<?php echo base_url('survey/survey1/' . $k->fs_kode_cabang . '/' . $k->fn_no_apk); ?>"><?php echo $k->fs_nama_konsumen; ?>
				<?php if ($k->fs_flag_survey == 1) : ?>
					<span class="ui-li-count">SUDAH DISURVEY</span>
				<?php else : ?>
					<span class="ui-li-count">BELUM DISURVEY</span>
				<?php endif; ?>
			</a>
		</li>
	<?php endforeach; ?>
</ul>
</div>