<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("includes/head"); ?>
</head>
<body>

<div class="wrapper">
<div class="content">
	<?php $this->load->view("includes/header"); ?>

	<?php $this->load->view("{$viewFolder}/content"); ?>

	<?php $this->load->view("includes/footer"); ?>

</div>
</div>
<?php $this->load->view("includes/include_script"); ?>

</body>
</html>