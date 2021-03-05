<?php
class Home extends CI_Controller{
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "homepage"; //anasayfamız
        $this->load->helper("text");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum

    }
    public function index(){
        $viewData = new stdClass();
        $viewData->viewFolder   = "home_v";
        //****** FEATURED START SECTİON ****
        $this->load->model("featured_model");
        $viewData->featureds = $this->featured_model->get_all(array("isActive"  =>  1), "rank ASC", array());
        //****** FEATURED END SECTİON *****
        //******* TEAM START SECTİON *******
        // $this->load->model("team_model");
        // $viewData->teams = $this->team_model->get_all(array("isActive"  =>  1), "rank ASC", array());
        //******* TEAM FINISH  SECTİON *******

        //******* ABOUT START SECTİON *******
        $this->load->model("settings_model");
        $viewData->settings = $this->settings_model->get();
        //******* ABOUT END SECTİON *******

        //******* CONTACT START SECTİON *****
        $this->load->helper("captcha");
        $config = array(
            "word"          => '',
            "img_path"      => 'captcha/',
            "img_url"       => base_url("captcha"),
            "font_path"     => '/fonts/OpenSans-Regular.ttf',
            "img_width"     => 150,
            "img_height"    => 50,
            "expiration"    => 7200,
            "word_length"   => 4,
            "font_size"     => 30,
            "img_id"        => "captcha_img",
            "pool"          => "0123456789",
            "colors"        => array(
                'background' => array(0,0,0),
                'border'     => array(255,255,255),
                'text'       => array(255,255,255),
                'grid'       => array(255,40,40)
            )
        );
        $viewData->captcha = create_captcha($config);
        $this->session->set_userdata("captcha", $viewData->captcha["word"]);
        //******* CONTACT FINISH SECTİON ****

        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function featured_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="featured_list_v";
        $this->load->model("featured_model"); //featured tablosuna sorgu gönderildi
        $viewData->featureds = $this->featured_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function featured_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="featured_v";
        $this->load->model("featured_model"); //featured tablosuna sorgu gönderildi
        $this->load->model("featured_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve featured a gönder
        $viewData->featured = $this->featured_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->featured_images = $this->featured_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "featured_id"  =>  $viewData->featured->id,
            ),"rank ASC"
        );


        $viewData->featureds = $this->featured_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function bedroom_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="bedroom_list_v";
        $this->load->model("bedroom_model"); //bedroom tablosuna sorgu gönderildi
        $viewData->bedrooms = $this->bedroom_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function bedroom_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="bedroom_v";
        $this->load->model("bedroom_model"); //bedroom tablosuna sorgu gönderildi
        $this->load->model("bedroom_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve bedroom a gönder
        $viewData->bedroom = $this->bedroom_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->bedroom_images = $this->bedroom_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "bedroom_id"  =>  $viewData->bedroom->id,
            ),"rank ASC"
        );


        $viewData->bedrooms = $this->bedroom_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function diningroom_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="diningroom_list_v";
        $this->load->model("diningroom_model"); //diningroom tablosuna sorgu gönderildi
        $viewData->diningrooms = $this->diningroom_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function diningroom_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="diningroom_v";
        $this->load->model("diningroom_model"); //diningroom tablosuna sorgu gönderildi
        $this->load->model("diningroom_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve diningroom a gönder
        $viewData->diningroom = $this->diningroom_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->diningroom_images = $this->diningroom_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "diningroom_id"  =>  $viewData->diningroom->id,
            ),"rank ASC"
        );


        $viewData->diningrooms = $this->diningroom_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function tvunit_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="tvunit_list_v";
        $this->load->model("tvunit_model"); //tvunit tablosuna sorgu gönderildi
        $viewData->tvunits = $this->tvunit_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function tvunit_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="tvunit_v";
        $this->load->model("tvunit_model"); //tvunit tablosuna sorgu gönderildi
        $this->load->model("tvunit_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve tvunit a gönder
        $viewData->tvunit = $this->tvunit_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->tvunit_images = $this->tvunit_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "tvunit_id"  =>  $viewData->tvunit->id,
            ),"rank ASC"
        );


        $viewData->tvunits = $this->tvunit_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function anchor_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="anchor_list_v";
        $this->load->model("anchor_model"); //anchor tablosuna sorgu gönderildi
        $viewData->anchors = $this->anchor_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function anchor_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="anchor_v";
        $this->load->model("anchor_model"); //anchor tablosuna sorgu gönderildi
        $this->load->model("anchor_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve anchor a gönder
        $viewData->anchor = $this->anchor_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->anchor_images = $this->anchor_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "anchor_id"  =>  $viewData->anchor->id,
            ),"rank ASC"
        );


        $viewData->anchors = $this->anchor_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function sofas_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="sofas_list_v";
        $this->load->model("sofas_model"); //sofas tablosuna sorgu gönderildi
        $viewData->sofass = $this->sofas_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function sofas_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="sofas_v";
        $this->load->model("sofas_model"); //sofas tablosuna sorgu gönderildi
        $this->load->model("sofas_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve sofas a gönder
        $viewData->sofas = $this->sofas_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->sofas_images = $this->sofas_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "sofas_id"  =>  $viewData->sofas->id,
            ),"rank ASC"
        );


        $viewData->sofass = $this->sofas_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function tables_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="tables_list_v";
        $this->load->model("tables_model"); //tables tablosuna sorgu gönderildi
        $viewData->tabless = $this->tables_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function tables_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="tables_v";
        $this->load->model("tables_model"); //tables tablosuna sorgu gönderildi
        $this->load->model("tables_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve tables a gönder
        $viewData->tables = $this->tables_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->tables_images = $this->tables_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "tables_id"  =>  $viewData->tables->id,
            ),"rank ASC"
        );


        $viewData->tabless = $this->tables_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function youngroom_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="youngroom_list_v";
        $this->load->model("youngroom_model"); //youngroom tablosuna sorgu gönderildi
        $viewData->youngrooms = $this->youngroom_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function youngroom_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="youngroom_v";
        $this->load->model("youngroom_model"); //youngroom tablosuna sorgu gönderildi
        $this->load->model("youngroom_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve youngroom a gönder
        $viewData->youngroom = $this->youngroom_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->youngroom_images = $this->youngroom_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "youngroom_id"  =>  $viewData->youngroom->id,
            ),"rank ASC"
        );


        $viewData->youngrooms = $this->youngroom_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function seatingroom_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="seatingroom_list_v";
        $this->load->model("seatingroom_model"); //seatingroom tablosuna sorgu gönderildi
        $viewData->seatingrooms = $this->seatingroom_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function seatingroom_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="seatingroom_v";
        $this->load->model("seatingroom_model"); //seatingroom tablosuna sorgu gönderildi
        $this->load->model("seatingroom_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve seatingroom a gönder
        $viewData->seatingroom = $this->seatingroom_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->seatingroom_images = $this->seatingroom_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "seatingroom_id"  =>  $viewData->seatingroom->id,
            ),"rank ASC"
        );


        $viewData->seatingrooms = $this->seatingroom_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }

    public function bedbasehead_list(){
        //TAMAMLANAN PROJELER href verip buraya yönlendirmelisin tıkladıktan sonra onunda detaylarına gideceksin her şey basit olacak ;)
        //verileri tutacak viewData isimli değişkeni oluşturduk
        $viewData = new stdClass();
        $viewData->viewFolder="bedbasehead_list_v";
        $this->load->model("bedbasehead_model"); //bedbasehead tablosuna sorgu gönderildi
        $viewData->bedbaseheads = $this->bedbasehead_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    public function bedbasehead_detail($url = ""){
        //PROJECT-DETAİL
        //routes e bak !
        $viewData = new stdClass();
        $viewData->viewFolder="bedbasehead_v";
        $this->load->model("bedbasehead_model"); //bedbasehead tablosuna sorgu gönderildi
        $this->load->model("bedbasehead_image_model");//kartların yapısını bozmamak adına karakter sınırlaması koyuyorum
        // veriyi çek ve bedbasehead a gönder
        $viewData->bedbasehead = $this->bedbasehead_model->get(
            array(
                    "isActive"  =>  1,
                    "url"       =>  $url
            )
        );
        //project-detail in fotoğraflarını alıyorum
        $viewData->bedbasehead_images = $this->bedbasehead_image_model->get_all(
            array(
                    "isActive"    =>  1,
                    "bedbasehead_id"  =>  $viewData->bedbasehead->id,
            ),"rank ASC"
        );


        $viewData->bedbaseheads = $this->bedbasehead_model->get_all(
            array(
                "isActive"  =>  1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder,$viewData);
    }

    public function brand_list(){
        $viewData = new stdClass();
        $viewData-> viewFolder = "brand_list_v";

        $this->load->model("brand_model");
        $viewData->brands = $this->brand_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        $this->load->view($viewData->viewFolder, $viewData);

    }

    //******************************** İletişim Modülü ********************************//
    public function send_contact_message(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("name", "Ad", "trim|required");
        $this->form_validation->set_rules("lastname", "Soyad", "trim|required");
        $this->form_validation->set_rules("subject", "Konu", "trim|required");
        $this->form_validation->set_rules("email", "E-posta", "trim|required|valid_email");
        $this->form_validation->set_rules("message", "Mesaj", "trim|required");
        $this->form_validation->set_rules("captcha", "Doğrulama Kodu", "trim|required");

        if($this->form_validation->run() === FALSE){
            $this->session->set_userdata(
                array(
                   "alert"           => true,
                   "alert-message"  => "Lütfen boş alan bırakmayınız.",
                   "alert-type"      => "error",
                    ));
                redirect(base_url(""));
           } else {
               if($this->session->userdata("captcha") == $this->input->post("captcha")){
                   $name = $this->input->post("name");
                   $email = $this->input->post("email");
                   $subject = $this->input->post("subject");
                   $message = $this->input->post("message");
                   $email_message = "{$name} isimli ziyaretçi mesaj bıraktı <br><b>Mesaj : </b> {$message} <br> <b>E-posta : </b> {$email}";

                   if(send_email("", "Site Mesajı | $subject", $email_message)){
                       $this->session->set_userdata(
                           array(
                               "alert"           => true,
                               "alert-message"  => "İşlem Başarılı",
                               "alert-type"      => "success",
                           ));
                       redirect(base_url("#iletisim"));

                   } else {
                       $this->session->set_userdata(
                           array(
                               "alert"           => true,
                               "alert-message"  => "Hata...Lütfen bizi arayın",
                               "alert-type"      => "error",
                           ));
                       redirect(base_url("#iletisim"));
                   }

               } else {
                   $this->session->set_userdata(
                       array(
                           "alert"           => true,
                           "alert-message"  => "Doğrulama kodu hatalı",
                           "alert-type"      => "warning",
                       ));
                   redirect(base_url("#iletisim"));

               }

           }

    }

    public function popup_never_show_again(){
        $popup_id = $this->input->post("popup_id");
        set_cookie($popup_id,"true",60*60*24*365);
    }

}