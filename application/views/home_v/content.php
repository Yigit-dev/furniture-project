<?php $settings = get_settings();?>
<!--------------- hero section starts here --------------->
<!--------------- hero section ends here --------------->

<!--------------- project section starts here --------------->
<?php $this->load->view("{$viewFolder}/project");?>
<!--------------- project section ends here --------------->

<!--------------- services section starts here --------------->
<?php $this->load->view("{$viewFolder}/services");?>
<!--------------- services section ends here --------------->

<!--------------- about_us section starts here --------------->
<?php $this->load->view("{$viewFolder}/about_us");?>
<!--------------- about_us section ends here --------------->

<!--------------- contact section starts here --------------->
<?php $this->load->view("{$viewFolder}/contact");?>
<!--------------- contact section ends here --------------->