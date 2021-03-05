<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("includes/head"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets");?>/referances.css">

    <style>.nav{ background-color: #fff;}</style>
</head>
<body>

<?php $this->load->view("includes/header_project");?>

	<?php $this->load->view("{$viewFolder}/content"); ?>

	<?php $this->load->view("includes/footer"); ?>


<?php $this->load->view("includes/include_script"); ?>

</body>
</html>