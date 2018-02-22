<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui-content" role="main">
<ul data-role="listview" data-autodividers="true" data-filter="true" data-filter-placeholder="Cari Konsumen" data-inset="true">
	<?php foreach ($konsumen as $k) : ?>
		<li><a href="<?php echo base_url('survey/survey1/' . $k->fs_kode_cabang . '/' . $k->fn_no_apk); ?>"><?php echo $k->fs_nama_konsumen; ?><span class="ui-li-count">PROGRESS</span></a></li>
	<?php endforeach; ?>
</ul>
</div>