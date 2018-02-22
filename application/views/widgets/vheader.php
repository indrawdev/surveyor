<div data-role="header" data-theme="d">
	<?php if ($this->uri->segment(1) == 'survey') : ?>
		<a href="<?php echo base_url('debitur'); ?>" data-icon="arrow-l" data-theme="e">Back</a>
	<?php endif; ?>
    <h1><?php echo $this->template->title->default("SURVEYOR"); ?></h1>
    <?php if ($this->uri->segment(1) == 'debitur') : ?>
		<a href="<?php echo base_url('login/logout'); ?>" data-icon="arrow-u" data-theme="b">Logout</a>
	<?php endif; ?>
</div><!-- /header -->