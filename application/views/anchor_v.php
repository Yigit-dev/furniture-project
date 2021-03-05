<!--TAMAMLANAN PROJELER-->
<!--project-detail-->

<!DOCTYPE html>
<html lang="tr">
<head>
    <?php $this->load->view("includes/head");?>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php $this->load->view("includes/header");?>

    <?php $this->load->view("{$viewFolder}/content");?> <!--tamamlanan projeleri getir-->

    <?php $this->load->view("includes/footer");?>

<?php $this->load->view("includes/include_script");?>
</body>
</html>