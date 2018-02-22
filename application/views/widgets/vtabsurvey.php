<div data-role="header" data-theme="a">
	<div data-role="navbar">
		<ul class="tabs">
			<?php
				$add1 = '';
				$add2 = '';
				$add3 = '';
				$add4 = '';
				switch ($this->uri->segment(2)) {
				case 'survey1':
					$add1 = "ui-btn-active ui-state-persist";
					break;
				case 'survey2':
					$add2 = "ui-btn-active ui-state-persist";
					break;
				case 'survey3':
					$add3 = "ui-btn-active ui-state-persist";
					break;
				case 'survey4':
					$add4 = "ui-btn-active ui-state-persist";
					break;
				default:
					break;
			} ?>
			<li><a href="<?php echo base_url('survey/survey1/' . $this->uri->segment(3) . '/' . $this->uri->segment(4)); ?>" class="<?php echo $add1; ?>">C1</a></li>
			<li><a href="<?php echo base_url('survey/survey2/' . $this->uri->segment(3) . '/' . $this->uri->segment(4)); ?>" class="<?php echo $add2; ?>">C2</a></li>
			<li><a href="<?php echo base_url('survey/survey3/' . $this->uri->segment(3) . '/' . $this->uri->segment(4)); ?>" class="<?php echo $add3; ?>">C3</a></li>
			<li><a href="<?php echo base_url('survey/survey4/' . $this->uri->segment(3) . '/' . $this->uri->segment(4)); ?>" class="<?php echo $add4; ?>">C4</a></li>
		</ul>
	</div><!-- /navbar -->
</div>