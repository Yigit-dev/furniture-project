<?php
function get_bedroom_cover_image($bedroom_id){

    $t = &get_instance();

    $t->load->model("bedroom_image_model");

    $cover_image = $t->bedroom_image_model->get(
        array(
            "isCover"       => 1,
            "bedroom_id"    => $bedroom_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->bedroom_image_model->get(
            array(
                "bedroom_id"    => $bedroom_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}
function get_diningroom_cover_image($diningroom_id){

    $t = &get_instance();

    $t->load->model("diningroom_image_model");

    $cover_image = $t->diningroom_image_model->get(
        array(
            "isCover"       => 1,
            "diningroom_id"    => $diningroom_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->diningroom_image_model->get(
            array(
                "diningroom_id"    => $diningroom_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}
function get_tvunit_cover_image($tvunit_id){

    $t = &get_instance();

    $t->load->model("tvunit_image_model");

    $cover_image = $t->tvunit_image_model->get(
        array(
            "isCover"       => 1,
            "tvunit_id"    => $tvunit_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->tvunit_image_model->get(
            array(
                "tvunit_id"    => $tvunit_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}
function get_sofas_cover_image($sofas_id){

    $t = &get_instance();

    $t->load->model("sofas_image_model");

    $cover_image = $t->sofas_image_model->get(
        array(
            "isCover"       => 1,
            "sofas_id"    => $sofas_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->sofas_image_model->get(
            array(
                "sofas_id"    => $sofas_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}
function get_youngroom_cover_image($youngroom_id){

    $t = &get_instance();

    $t->load->model("youngroom_image_model");

    $cover_image = $t->youngroom_image_model->get(
        array(
            "isCover"       => 1,
            "youngroom_id"    => $youngroom_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->youngroom_image_model->get(
            array(
                "youngroom_id"    => $youngroom_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}
function get_featured_cover_image($featured_id){

    $t = &get_instance();

    $t->load->model("featured_image_model");

    $cover_image = $t->featured_image_model->get(
        array(
            "isCover"       => 1,
            "featured_id"    => $featured_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->featured_image_model->get(
            array(
                "featured_id"    => $featured_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}
function get_anchor_cover_image($anchor_id){

    $t = &get_instance();

    $t->load->model("anchor_image_model");

    $cover_image = $t->anchor_image_model->get(
        array(
            "isCover"       => 1,
            "anchor_id"    => $anchor_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->anchor_image_model->get(
            array(
                "anchor_id"    => $anchor_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}
function get_seatingroom_cover_image($seatingroom_id){

    $t = &get_instance();

    $t->load->model("seatingroom_image_model");

    $cover_image = $t->seatingroom_image_model->get(
        array(
            "isCover"       => 1,
            "seatingroom_id"    => $seatingroom_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->seatingroom_image_model->get(
            array(
                "seatingroom_id"    => $seatingroom_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}

function get_bedbasehead_cover_image($bedbasehead_id){

    $t = &get_instance();

    $t->load->model("bedbasehead_image_model");

    $cover_image = $t->bedbasehead_image_model->get(
        array(
            "isCover"       => 1,
            "bedbasehead_id"    => $bedbasehead_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->bedbasehead_image_model->get(
            array(
                "bedbasehead_id"    => $bedbasehead_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}

function get_product2_cover_image($product2_id){

    $t = &get_instance();

    $t->load->model("product2_image_model");

    $cover_image = $t->product2_image_model->get(
        array(
            "isCover"       => 1,
            "product2_id"    => $product2_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->product2_image_model->get(
            array(
                "product2_id"    => $product2_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}
function get_settings(){
// veritabanı yük önlemi
    $t = &get_instance();

//    $settings = $t->session->userdata("settings");

//    if(empty($settings)){

    $t->load->model("settings_model");

    $settings = $t->settings_model->get();

    $t->session->set_userdata("settings", $settings);
//    }

    return $settings;
}
function get_popup_service($page = ""){
    $t = &get_instance();
    $t->load->model("popup_model");
    $popup = $t->popup_model->get(
        array(
            "isActive"  =>  1,
            "page"      =>  $page
        )
    );
    return (!empty($popup)) ? $popup : false;
}
function send_email($toEmail = "", $subject = "", $message = ""){

    $t = &get_instance();

    $t->load->model("emailsettings_model");

    $email_settings = $t->emailsettings_model->get(
        array(
            "isActive"  => 1
        )
    );

    if(empty($toEmail))
        $toEmail = $email_settings->to;

    $config = array(

        "protocol"   => $email_settings->protocol,
        "smtp_host"  => $email_settings->host,
        "smtp_port"  => $email_settings->port,
        "smtp_user"  => $email_settings->user,
        "smtp_pass"  => $email_settings->password,
        "starttls"   => true,
        "charset"    => "utf-8",
        "mailtype"   => "html",
        "wordwrap"   => true,
        "newline"    => "\r\n"
    );

    $t->load->library("email");
    $t->email->initialize($config);

    $t->email->from($email_settings->from, $email_settings->user_name);
    $t->email->to($toEmail);
    $t->email->subject($subject);
    $t->email->message($message);

    return $t->email->send();

}
