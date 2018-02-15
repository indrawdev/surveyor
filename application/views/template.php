<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title><?php echo $this->template->title->default("SURVEYOR"); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->template->meta; ?>
    <?php echo $this->template->stylesheet; ?>
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themes/default/jquery.mobile-1.3.2.min.css'); ?>" />
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mobile-1.3.2.min.js'); ?>"></script>
    <?php echo $this->template->javascript; ?>
</head>
<body>
<div data-role="page">
    <?php echo $this->template->widget("header"); ?>
    <div class="ui-content" role="main">
        <?php echo $this->template->content; ?>
    </div><!-- /content -->
    <?php echo $this->template->widget("footer"); ?>
</div>
</body>
</html>