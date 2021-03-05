<!DOCTYPE html>
<html lang="tr">
<head>
	<?php $this->load->view("includes/head"); ?>
</head>
<body>
<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<div class="page-wrapper">
	<?php $this->load->view("includes/header"); ?>

	<?php $this->load->view("{$viewFolder}/content"); ?>

	<?php $this->load->view("includes/footer"); ?>

</div>

<?php $this->load->view("includes/include_script"); ?>

</body>
</html>