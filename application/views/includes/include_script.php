<!-- Alert Mesajlarının Eklenmesi Başlangıç -->
<script src="<?php echo base_url("panel/assets"); ?>/libs/bower/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url("panel/assets"); ?>/libs/bower/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url("assets"); ?>/js/notifit.js"></script>
<?php $this->load->view("includes/alert"); ?>
<!-- Alert Mesajlarının Eklenmesi Başlangıç -->
<?php
$this->load->view("includes/alert");
$alert		=	$this->session->userdata("alert");
if($alert){
    $message	=	$this->session->userdata("alert-message");
    $type		=	$this->session->userdata("alert-type");
    ?>
    <script>
        notif({
            msg: "<?php echo $message; ?>",
            type:"<?php echo $type; ?>",
            position: "center",
            width: "300",
            fade: true
        });
    </script>
    <?php $this->session->set_userdata("alert", false);
} ?>

<!-- ***** Buka JS ****** -->
<!-- .site-wrap -->
<!-- <script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script> -->
<!-- <script src="js/popper.min.js"></script>
<script src="js/owl.carousel.min.js"></script> -->
<!-- <script src="js/jquery.stellar.min.js"></script> -->
<!-- <script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script> -->
<!-- <script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/typed.js"></script> -->
<script src="<?php echo base_url("assets");?>/js/main.js"></script>
<!-- Video -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.min.js"></script> -->
<script src="<?php echo base_url("assets");?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url("assets");?>/js/owl.carousel.min.js"></script>
<!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
<script src="<?php echo base_url("assets");?>/js/hero-slider.js"></script>
<script>      
    new WOW().init(); // data-wow-delay...
    $(function () {
        $(document).scroll(function () {
        var $nav = $('.navbar');
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });
</script>
<!-- Lang -->
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'tr',autoDisplay: false}, 'google_translate_element2');}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<script type="text/javascript">
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
</script>
