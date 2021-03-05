<?php

class Popups extends VS_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "popups_v";

        $this->load->model("popup_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $items = $this->popup_model->get_all(
            array()
        );

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form(){
        if (!isAllowedWriteModule()){
            redirect(base_url($this->router->fetch_class()));
        }
        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

    public function save(){
        if (!isAllowedWriteModule()){
            redirect(base_url($this->router->fetch_class()));
        }
        $this->load->library("form_validation");

        // Kurallar yazilir..


        $this->form_validation->set_rules("title", "Başlık", "required|trim");
        $this->form_validation->set_rules("page", "Hedef Sayfa", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){

            $insert = $this->popup_model->add(
                array(
                    "title"             => $this->input->post("title"),
                    "description"       => $this->input->post("description"),
                    "page"              => $this->input->post("page"),
                    "popup_unique_id"   => uniqid(),
                    "isActive"          => 1,
                    "createdAt"         => date("Y-m-d H:i:s")
                )
            );

            // TODO Alert sistemi eklenecek...
            if($insert){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde eklendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }


            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("popups"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function update_form($id){
        if (!isAllowedUpdateModule()){
            redirect(base_url($this->router->fetch_class()));
        }
        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->popup_model->get(
            array(
                "id"    => $id,
            )
        );
        
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


    }


    public function update($id){
        if (!isAllowedUpdateModule()){
            redirect(base_url($this->router->fetch_class()));
        }
        $this->load->library("form_validation");

        // Kurallar yazilir..

        $this->form_validation->set_rules("title", "Başlık", "required|trim");
        $this->form_validation->set_rules("page", "Hedef Sayfa", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){



                $data = array(
                    "title"         => $this->input->post("title"),
                    "description"   => $this->input->post("description"),
                    "page"          => $this->input->post("page"),
                );

            $update = $this->popup_model->update(array("id" => $id), $data);

            // TODO Alert sistemi eklenecek...
            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("popups"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            /** Tablodan Verilerin Getirilmesi.. */
            $viewData->item = $this->popup_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function delete($id){
        if (!isAllowedDeleteModule()){
            redirect(base_url($this->router->fetch_class()));
        }
        $delete = $this->popup_model->delete(
            array(
                "id"    => $id
            )
        );

        // TODO Alert Sistemi Eklenecek...
        if($delete){

            $alert = array(
                "title" => "İşlem Başarılı",
                "text" => "Kayıt başarılı bir şekilde silindi",
                "type"  => "success"
            );

        } else {

            $alert = array(
                "title" => "İşlem Başarılı",
                "text" => "Kayıt silme sırasında bir problem oluştu",
                "type"  => "error"
            );


        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("popups"));


    }

    public function isActiveSetter($id){
        if (!isAllowedUpdateModule()){
            die();
        }
        if($id){

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->popup_model->update(
                array(
                    "id"    => $id
                ),
                array(
                    "isActive"  => $isActive
                )
            );
        }
    }


}
