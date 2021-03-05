<?php
defined('BASEPATH')OR exit();

class MY_Controller extends CI_Controller{
  public $langID;

  public function __construct(){
    parent::__construct();

    $tarayici_dil = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
    $secilenDil = $this->uri->segment(1);
    $lang = getSlugLanguage($secilenDil);

    //Seçilen Dil Varsa
    if(empty($secilenDil)){
      $secilenDil = $tarayici_dil;
      $lang = getSlugLanguage($secilenDil);
      if($lang){
        redirect(base_url($lang->slug));
      } else{
        redirect(base_url('en'));
      }
    } else{
      if($lang->slug == $secilenDil){
        $this->session->set_userdata("lang",$lang-slug);
      } else{
        redirect(base_url('en'));
      }
    }
    $dil = $this->uri->segment(1);
    $this->lang->load($dil,$dil);
    $langID = getSlugLanguage($this->session->userdata("lang"))->id;
    $langDir = getSlugLanguage($this->session->userdata("lang"))->dir;

    $this->langID = $langID;
    $this->langDir = $langDir;
  }
}
?>