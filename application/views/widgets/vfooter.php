<!-- /navbar -->
<?php 
	$fix = '';
	if ($this->uri->segment(1) == '' ||$this->uri->segment(1) == 'login' || $this->uri->segment(1) == 'debitur') {
		$fix = 'data-position="fixed"';
	}
?>
<div data-role="footer" <?php echo $fix; ?> class="ui-bar" data-theme="d">
    <h1>Mandiri Finance Indonesia</h1>
</div>