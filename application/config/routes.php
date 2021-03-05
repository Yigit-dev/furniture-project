<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// ----------------------  Ana Sayfa Route Tanımı  ---------------------- //
$route['default_controller'] = 'home';
$route['anasayfa'] = 'home';
$route['projelerimiz'] = 'home';
$route['hizmetlerimiz'] = 'home';
$route['hakkimizda'] = 'home';
$route['iletisim'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["onecikanurunler/(:any)"] = "home/featured_detail/$1";

$route["yatakodalari"] = "home/bedroom_list";
$route["yatakodalari/(:any)"] = "home/bedroom_detail/$1";

$route["yatakbazabaslik"] = "home/bedbasehead_list";
$route["yatakbazabaslik/(:any)"] = "home/bedbasehead_detail/$1";

$route["yemekodalari"] = "home/diningroom_list";
$route["yemekodalari/(:any)"] = "home/diningroom_detail/$1";

$route["tvuniteleri"] = "home/tvunit_list";
$route["tvuniteleri/(:any)"] = "home/tvunit_detail/$1";

$route["gencodalari"] = "home/youngroom_list";
$route["gencodalari/(:any)"] = "home/youngroom_detail/$1";

$route["sehpalar"] = "home/sofas_list";
$route["sehpalar/(:any)"] = "home/sofas_detail/$1";

$route["kanepeler"] = "home/anchor_list";
$route["kanepeler/(:any)"] = "home/anchor_detail/$1";

$route["oturmagruplari"] = "home/seatingroom_list";
$route["oturmagruplari/(:any)"] = "home/seatingroom_detail/$1";

$route["devam-eden-projeler"] = "home/product2_list";
$route["devam-eden-projeler/(:any)"] = "home/product2_detail/$1";

$route["markalarimiz"]      = "home/brand_list";


$route["mesaj-gonder"]    = "home/send_contact_message";
$route["bir-daha-gosterme"]    = "home/popup_never_show_again";

/* başka bir sayfaya yönlendireceksen bunları kullanmalısın hizmetlerimiz.html vs.*/
/*$route["hizmetlerimiz"] = "home/service_list";*/
/*$route["takımımız"] = "home/team_list";*/
/*$route["hakkimizda"]    = "home/about_us";*/
