<?php


    /*if ($_SERVER['HTTPS'] != "on") {
        $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        header("Location: $url");
        exit;
    }*/


    /*if($_SERVER['REQUEST_URI'] == '/vvsoffert.se/index.php') {

        $root = 'http://localhost/vvsoffert.se/';
        header("Location: $root");
        exit;

    }*/

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="<?=site_url()?>assets/img/favicon.ico" type="image/ico" alt="Vvs offert | Rörkalkyl | Vvskalkyl | Anbud | Vvspriser |Vvsoffert | Vvs online | Rörgrossist">
        <meta name="google-site-verification" content="m5APWAKxwJ90R-jY-N6PFTBQWJ7EultVu9-PSMypF-A" />
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Page Not Found</title>
            <meta content="Hitta bäst pris på allt du letar efter. Vi jämför tusentals vvsartiklar . Gör egna listor och jämför produkter bästa möjliga info med Sveriges bästa vvs kalkyl tjänst." name="description">
        <meta content="Vvs offert | Rörkalkyl | Vvs kalkyl | Anbud | Vvspriser |Vvsoffert | Vvs online | Rörgrossist" name="keywords">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="https://vvsoffert.se/errors/error_404" />
        <link rel="preload" href="<?php echo base_url('assets/css/fonts.googleapis.css?family=Lato:300,400,700s'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700"></noscript>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="preload" href="<?php echo base_url('assets/css/trackpad-scroll-emulator.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="<?php echo base_url('assets/css/trackpad-scroll-emulator.css'); ?>"></noscript>
        <link rel="preload" href="<?php echo base_url('assets/css/nouislider.min.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="<?php echo base_url('assets/css/nouislider.min.css'); ?>"></noscript>
        <link rel="preload" href="<?php echo base_url('assets/css/select2.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="<?php echo base_url('assets/css/select2.css'); ?>"></noscript>
        <link rel="preload" href="<?php echo base_url('assets/vendor_data/notifit/css/notifIt.min.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="<?php echo base_url('assets/vendor_data/notifit/css/notifIt.min.css'); ?>"></noscript>
        <link rel="preload" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>"></noscript>
        <link rel="preload" href="<?php echo base_url('assets/css/jquery-confirm.min.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-confirm.min.css'); ?>"></noscript>
        <style>
ul.ui-autocomplete li.ui-menu-item a .media .media-body {width: 350px;vertical-align: middle;} .mst9{text-rendering: optimizeLegibility !important;} .mst10{display:none !important;}
.nav-collapse li,.nav-collapse ul{width:100%;display:block}.nav-collapse ul{margin:0;padding:0;list-style:none}.js .nav-collapse{clip:rect(0 0 0 0);max-height:0;position:absolute;display:block;overflow:hidden;zoom:1}.nav-collapse.opened{max-height:9999px}.nav-toggle{-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}@media screen and (min-width:40em){.js .nav-collapse{position:relative}.js .nav-collapse.closed{max-height:none}.nav-toggle{display:none}}
.header_bg{background:url('https://vvsoffert.se/assets/custom/images/hbg.jpg')no-repeat;background-size:cover}
.header_bg{position:relative}
.header .header_caption h2{font-family:Myriad-Pro;color:#fff;text-align:center;padding-bottom:1em;font-size:30px}
.header .header_caption .header_search_bar{max-width:512px;margin:0px auto;position:relative}
.header .header_caption .header_search_bar .search_left_icon{position:absolute;top:16px;left:20px;}
.header .header_caption .header_search_bar .search_right_icon{position:absolute;top:16px;right:20px;}
.header .header_caption .header_search_bar .search_left_icon .fa{font-size:17px}
.header .header_caption .header_search_bar .search_right_icon .fa{font-size:17px;}
.header .header_caption .header_search_bar .form-control{word-spacing:1px;letter-spacing:1px;height:50px;border-radius:40px;padding-left:52px;font-size:16px;font-family:Myriad-Pro}
.header .header_caption{padding:12em 0}
.header_bg .header .navigation{padding-top:20px;padding-bottom:20px}
.fl{float:left}
.fr{float:right}
.no-gutter{padding:0px}
#menu-toggle{padding:5px 10px;margin:0px 10px;color:#fff;font-size:35px;cursor:pointer}
#menu-toggle:hover{text-decoration:none !important}
#sidebar-wrapper, .sidebar-navigation{background:#041d3bcc;}
.sidebar-navigation{height:100%;width:280px;position:fixed;right:0px;top:0px;overflow:auto;}
.sidebar-navigation .dropdown-menu{position:relative;background:transparent;}
.sidebar-navigation #sidebar-wrapper .sidebar-nav .dropdown-menu li a{font-size:14px;padding:8px 12px;}
.sidebar-navigation ul li a{color:#FFF;}
.close-sidebar{color:#0C1832;top:1px;font-size:32px;left:-43px;background:#FFF;padding:0px 11px;cursor:pointer}
.close-sidebar:hover{text-decoration:none;color:red}
#sidebar-wrapper .sidebar-nav li{width:100%;}
#sidebar-wrapper .sidebar-nav li a{display:block;padding:1.1em 1.0em;border-bottom:1px solid #FFF;font-size:18px;background:transparent;}
#sidebar-wrapper .sidebar-nav li a i{width:25px;padding-right:10px;font-size:18px;}
.sidebar-nav li{position:relative;line-height:20px;display:inline-block;width:100%;}
.sidebar-nav li:hover:before, .sidebar-nav li.open:hover:before{width:100%;-webkit-transition:width .2s ease-in;-moz-transition:width .2s ease-in;-ms-transition:width .2s ease-in;transition:width .2s ease-in;}
.sidebar-nav li a:focus{background:#FFF;color:#0277bd;}
.sidebar-nav li a{display:block;color:#ddd;text-decoration:none;}
.sidebar-nav li a:hover{background:#FFF;color:#337ab7;}
.sidebar-nav > .sidebar-brand{height:65px;font-size:20px;line-height:44px;}
.topbar-nav li{position:relative;line-height:20px;display:inline-block;}
.topbar-nav li:hover:before, .topbar-nav li.open:hover:before{width:100%;-webkit-transition:width .2s ease-in;-moz-transition:width .2s ease-in;-ms-transition:width .2s ease-in;transition:width .2s ease-in;}
.topbar-nav li a:focus{background:#FFF;color:#0277bd;}
.topbar-nav li a{display:block;color:#ddd;text-decoration:none;}
.topbar-nav li a:hover{background:rgba(255,255,255,.6);color:#337ab7;}
.top_xs_tabs .panel-default > .panel-heading{border:2px solid #0073b6;font-size:20px}
.top_xs_tabs .panel-body{border:2px solid #0073b6}
.top_xs_tabs .panel-default > .panel-heading .panel-title{font-size:20px}
.gallery_tabs{padding:4em 0}
.gallery_tabs .radius_img{height:200px;width:200px;border-radius:50%;border:10px solid #eeeeee;margin:0px auto;overflow:hidden}
.gallery_tabs .radius_img img{object-fit:cover;background:#fff;margin:0 auto;padding-top:35px;height:146px;}
.gallery_tabs .gallery_img .gallery_title{padding-top:20px;border-bottom:3px solid #ff9310;padding-bottom:10px;min-height:72px;max-width:180px;margin:0px auto}
.gallery_tabs .gallery_img:hover .gallery_title{border-color:#0073b6}
.gallery_tabs .gallery_img .gallery_title a:hover{text-decoration:none !important}
.gallery_tabs .gallery_img .gallery_title a{font-weight:bold;font-size:13px;text-align:center;text-transform:uppercase;color:#515151;text-shadow:1px 0px 5px #ddd}
.gallery_tabs .change_tab_text{box-shadow:3px 1px 5px 1px #ccc;padding:20px;margin:30px 11px;font-family:Myriad-Pro;font-weight:normal;color:#929292}
.site_products{background:url('https://vvsoffert.se/assets/custom/images/pbg.jpg')no-repeat;background-size:cover;padding-bottom:40pt}
.site_products .product_header{padding:30pt 0;font-family:Myriad-Pro;text-align:center}
.site_products .product_header h2{color:#0073b6;font-weight:normal;font-size:32px;text-transform:uppercase}
.site_products .product{font-family:Myriad-Pro;padding-bottom:60px}
.site_products .product_header p{padding-top:10px;font-size:16px;font-weight:normal}
.dashbaord{font-family:Myriad-Pro}
.dashbaord .dashbaord_nav{border-left:1px solid #ebebeb;border-right:1px solid #ebebeb;box-shadow:1px 3px 8px -2px #ccc;min-height:70em}
.dashbaord .dashbaord_nav ul{padding:10px 0px}
.dashbaord .dashbaord_nav ul li a{margin:0px 0px;font-size:16px;color:#6e7278;display:inline-block;width:100%;padding:14px}
.dashbaord .dashbaord_nav ul li a:hover{background:#f6f6f6}
.dashbaord .dashbaord_nav ul li a .fa{padding-right:4px}
.dashbaord .dashbaord_nav ul li a:hover{color:#ff9310;text-decoration:none}
.dashbaord .section_content{padding:0px 20px;box-shadow:2px 2px 7px 0px #ccc;border-radius:4px}
.dashbaord .section_content>td{padding:16px 0px}
.section_content .prodcut_img .xs_img{height:48px !important;border:1px solid #ddd;width:50px;background:#f9fafd}
.overall_content .section_content .table th{color:#838383;font-size:15px;padding:14px 2px;border-top:2px solid #ddd !important;}
.overall_content .section_content .table td{font-size:16px;padding:10px 0;line-height:49px;color:#838383}
.overall_content .section_content .option_btn{padding-top:18px !important}
.dashbaord .table_content .table_header{color:#606060;font-size:18px;padding:16px 0;padding-top:20px}
.dashbaord .overall_content{padding-top:20px}
.dashbaord .dashbaord_nav #sub_menu .inner_link{padding-left:20px;padding-top:0px;background:#fcfcfc}
.dashbaord .dashbaord_nav #sub_menu .inner_link li a:hover{background:none}
.dashbaord .dashbaord_nav .active{text-decoration:none;color:#ff9310;background:#f6f6f6}
.dashbaord .dashbaord_nav #sub_menu .active{color:#ff9310;background:none !important}
.dashbaord .table_content .table_pagination{padding:40px 0}
.dashbaord .table_content .table_pagination .total_pages{font-size:16px;color:#6f7174;padding-top:8px}
.dashbaord .table_content .table_pagination .page_no .pagination{margin:0px}
.dashbaord .table_content .table_pagination .page_no .pagination li a:hover{background:#8b8f98 !important;color:#fff}
.dashbaord .table_content .table_pagination .page_no .pagination li a{border:0;background:#f5f5f5;padding:8px 24px;font-size:16px;color:#7b7b7b}
.dashbaord .table_content .table_pagination .page_no .pagination .last_btn:hover{background:#ff9310 !important;color:#fff}
.dashbaord .table_content .table_pagination .page_no .pagination .last_btn{background:#ff9310 !important;color:#fff !important}
.dashbaord .table_content .table_pagination .page_no .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{background:#8b8f98;color:#fff}
.width85{width:86%}
.search-button{background:#0073b6;color:#fff;height:47px;}
.pre-loader{position:fixed;left:0px;top:0px;width:100%;height:100%;display:none;opacity:0.6;z-index:9999;background:rgba(255,255,255,1);text-align:center;}
.pre-loader img{margin-top:40vh;width:10%;opacity:1;}
.pre-loader-payment{position:fixed;left:0px;top:0px;width:100%;height:100%;opacity:1;z-index:9999;background:rgba(255,255,255,1);text-align:center;}
.pre-loader-payment div img{margin-top:40vh;width:10%;opacity:1;}
.pre-loader-payment div span{margin-top:40vh;font-size:20px;font-weight:bold}
.input-group .icon-addon .form-control{border-radius:0;}
.icon-addon{position:relative;color:#555;display:block;}
.icon-addon:after,
.icon-addon:before{display:table;content:" ";}
.icon-addon:after{clear:both;}
.icon-addon.addon-md .glyphicon,
.icon-addon .glyphicon,
.icon-addon.addon-md .fa,
.icon-addon .fa{position:absolute;z-index:2;left:10px;font-size:14px;width:20px;margin-left:-2.5px;text-align:center;padding:10px 0;top:8px;color:#838485}
.icon-addon.addon-lg .form-control{line-height:1.33;height:46px;font-size:18px;padding:10px 16px 10px 40px;}
.icon-addon.addon-sm .form-control{height:30px;padding:5px 10px 5px 28px;font-size:12px;line-height:1.5;}
.icon-addon.addon-lg .fa,
.icon-addon.addon-lg .glyphicon{font-size:18px;margin-left:0;left:11px;top:4px;}
.icon-addon.addon-md .form-control,
.icon-addon .form-control{padding-left:30px;float:left;font-weight:normal;}
.icon-addon.addon-sm .fa,
.icon-addon.addon-sm .glyphicon{margin-left:0;font-size:12px;left:5px;top:-1px}
.icon-addon .form-control:focus + .glyphicon,
.icon-addon:hover .glyphicon,
.icon-addon .form-control:focus + .fa,
.icon-addon:hover .fa{color:#ff9310;}
.signup_screen .signup_form .form-group .form-control{height:48px;border-radius:0;background:#fbfdff;box-shadow:none;border:2px solid #d1d3d5;font-size:16px}
.signup_screen{max-width:556px;margin:60px auto;background:#fafdff;padding:20px;box-shadow:0px 2px 20px 0px #ddd;font-family:Myriad-Pro;border-top:5px solid #ff9310;border-left:1px solid #ddd;border-right:1px solid #ddd;border-bottom:1px solid #ddd}
.signup_screen h2{color:#87898a;font-size:3em;text-align:center;padding-bottom:1em}
.signup_screen .signup_form .checkbox{font-size:16px;padding-bottom:30px}
.mg-bottom{margin-bottom:0px}
.org-color{color:#ff9310}
.signup_screen .signup_form .reg-btn{padding:10px 60px}
.signup_screen .signup_form .account_btn{padding:40px 0px}
.reg-btn{background:#0073b6;padding:10px 20px;color:#fff;font-size:20px;border-radius:5px;border-bottom:4px solid #035483;}
.reg-btn:hover{color:#ff9310 !important;text-decoration:none}
.site_products .product .product_content .product_img{height:150px;overflow:hidden}
.site_products .product .product_content .product_type{background:#ff9310;padding:6px 0px;text-align:center;color:#fff;text-transform:uppercase}
.site_products .product .product_content{background:#fff;padding:0 12px 20px;border:2px solid #1d80bb}
.site_products .product .product_content .product_title h3{font-size:15px;text-transform:uppercase;font-weight:bold}
.site_products .product .product_rsk_number{}
.site_products .product .product_manufacturer{}
.site_products .product .product_name{font-weight:bold}
.site_products .product .product_std{}
.paid_text{padding:6px 0px}
.border_bottom{border-bottom:1px solid #ddd}
.site_products .carousel-indicators li{border:1px solid #0c73af}
.site_products .carousel-indicators{width:100%;margin-left:0;bottom:-5px}
.site_products .carousel-indicators .active{background:#0c73af !important;border-color:#0c73af}
.sub_color{color:#999999}
.Register_section{font-family:Myriad-Pro;padding:3em 0}
.Register_section .left_text{padding-top:25pt}
.Register_section .left_text h2{color:#003482;font-size:30pt;padding-bottom:10px}
.Register_section .left_text .color_text{color:#f9a33b !important;font-weight:bold;font-size:40px;text-transform:uppercase}
.Register_section .left_text p{line-height:28px;font-size:16px;color:#003482}
.reg_btn_bottom{padding-top:30px}
.reg_btn_bottom .reg-btn{background:#0073b6;padding:10px 20px;color:#fff;font-size:20px;border-radius:5px;border-bottom:4px solid #035483}
.reg_btn_bottom .reg-btn:hover{text-decoration:none}
.site_footer{background:#025280;padding:30pt 0;text-align:center;font-family:Myriad-Pro;float:left;width:100%;}
.site_footer .links li a{color:#fff;font-size:16px}
.site_footer .coppyright{text-align:center;padding-top:10px;font-size:16px;color:#fff}
@media (min-width:992px) and (max-width:1200px){}
@media (min-width:768px) and (max-width:992px){.gallery_tabs .radius_img{height:140PX;width:140PX;}
.gallery_tabs .gallery_img .gallery_title a{font-size:12px}
.site_products .product{width:50%}
.Register_section .left_text{width:100%}
.Register_section .reg_img_right{width:100%;padding-top:20px}
.table_content .section_content .table-responsive{width:100% !important;display:block;white-space:nowrap}
.overall_content .section_content .table td{font-size:13px !important}
.xs_width{width:90px !important;display:inline-block}
.dashbaord .section_content{padding:0px !important}
.dashbaord .section_content table{padding:4px 10px;display:block;}
.overall_content .section_content .table td{padding:10px 16px !important;font-size:14px !important}
.overall_content .section_content .table th{padding:14px 20px !important}
.dashbaord .table_content .table_header{padding:10px 12px !important}
.dashbaord .table_content .table_pagination .total_pages{width:41.66666667% !important;font-size:14px;padding:8px}
.dashbaord .table_content .table_pagination .page_no{width:58.33333333% !important;padding-right:10px}
.dashbaord .table_content .table_pagination .page_no .pagination li a{padding:5px 12px !important}
}
@media (max-width:767px){.gallery_tabs .gallery_img{margin-bottom:40px}
.header .header_caption{padding:6em 0}
.gallery_tabs .gallery_img .gallery_title{max-width:100% !important}
.Register_section .reg_img_right{width:100%;padding-top:20px}
.gallery_tabs .gallery_img .gallery_title a{font-size:13px}
.gallery_tabs .gallery_img .gallery_title{min-height:50px;padding-top:14px}
.gallery_tabs .gallery_img{margin:0px}
.gallery_tabs .change_tab_text{font-size:18px;line-height:30px}
.xs_width{width:90px !important;display:inline-block}
.dashbaord .section_content{padding:8px !important}
.dashbaord .section_content table{padding:4px 10px;display:block;}
.overall_content .section_content .table td{padding:10px 16px !important;font-size:14px !important}
.dashbaord .table_content{padding:0px}
.dashbaord .table_content .table_header{padding:10px 0px !important}
.dashbaord .table_content .table_header .Export_content{padding-right:5px}
.overall_content .section_content .table th{padding:14px 20px !important}
.dashbaord .table_content .table-responsive{border:0}
.dashbaord .dashbaord_nav{min-height:auto !important;margin-top:30px}
.dashbaord .table_content .table_pagination .total_pages{padding-bottom:16px}
.dashbaord .table_content .table_pagination .page_no .pagination li a{padding:5px 12px !important}
}
.search_listing_screen{background:#fff;height:auto;padding-bottom:3%;}
.left_panel_wrapper{background:#fff;min-height:100%;border:1px solid #ebebeb;-webkit-box-shadow:0px 0px 4px 0px rgba(222,222,222,1);-moz-box-shadow:0px 0px 4px 0px rgba(222,222,222,1);box-shadow:0px 0px 4px 0px rgba(222,222,222,1);}
.sidebar{padding:20px 15px 0 15px;}
.left_panel_wrapper .sidebar h4{margin:0;color:6e7278;font-size:20px;font-family:"Lato", "Helvetica Neue", "Helvetica", sans-serif;font-weight:bold;color:#6e7278;}
.left_panel_wrapper .sidebar .over_view{padding-top:35px;}
.left_panel_wrapper .sidebar .over_view h5{color:#767b7f;font-size:16px;font-family:"Lato", "Helvetica Neue", "Helvetica", sans-serif;}
.left_panel_wrapper .sidebar .form-group .search-query{padding:15px;height:44px;width:100%;border:1px solid #c0c0c0;color:#7b7b7b;font-size:14px;}
.left_panel_wrapper .sidebar .form-group button{border:0;background:none;margin-top:-38px;position:relative;float:right;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px;}
.left_panel_wrapper .sidebar .form-group button i{color:#7b7b7b;font-size:14px;}
.left_panel_wrapper .sidebar .form-group .search-query:focus + button i{z-index:3;}
.left_panel_wrapper .sidebar .form_area{padding-top:15px;}
.left_panel_wrapper .sidebar .form_area .form-group select.form-control{background-position:right 15px top 50%;}
.left_panel_wrapper .sidebar .form_area .form-group .form-control{display:block;width:100%;height:44px;padding:6px 11px;font-size:14px;line-height:1.42857143;color:#7b7b7b;background-color:#fff;background-image:none;border:1px solid #c0c0c0;border-radius:0px;}
.left_panel_wrapper .sidebar_content{border:1px solid #eee;}
.left_panel_wrapper .sidebar_content .treeview .list-group .list-group-item{position:relative;display:block;padding:8px 0px;margin-bottom:0;background-color:#fff;border:none;}
.sidebar-wrapper-col{background-color:#fff;box-shadow:0 0 3px rgba(50, 50, 50, 0.2);margin-top:0px;padding-top:40px;}
.left_panel{background:#ccc;padding:10px;}
.product_body{margin-top:20px;}
.prdts_listing_content{background:#fff;border:1px solid #ebebeb;}
.prdts_listing_content{margin-top:15px;}
.prdts_listing_content:hover{-webkit-box-shadow:0px 0px 4px 0px rgba(222,222,222,1);-moz-box-shadow:0px 0px 4px 0px rgba(222,222,222,1);box-shadow:0px 0px 4px 0px rgba(222,222,222,1);border:1px solid #d1d1d1;}
.prdts_listing_content .prdts_img_area{padding:0 12px 0 12px;}
.prdts_listing_content .prdts_content_area{padding:0 12px 0 12px;}
.prdts_listing_content .prdts_content_area .prdts_type{background:#0073b6;padding:9px 0px;text-align:center;color:#fff;text-transform:uppercase;font-size:12px;font-weight:300;}
.prdts_listing_content .border_bottom1{border-bottom:1px solid #ddd;}
.prdts_listing_content .paid_text1{padding:9px 0px;}
.prdts_listing_content .add_compare_area{}
.prdts_listing_content .add_compare_area input[type="checkbox"]{display:none;}
.prdts_listing_content .add_compare_area label{display:inline-block;max-width:100%;font-weight:400;padding:16px;color:#fff;}
.prdts_listing_content .add_compare_area input[type="checkbox"] + label span{display:inline-block;width:25px;height:25px;margin:-1px 4px 0 0;vertical-align:middle;background:url(../images/check_box.png)0px top no-repeat;cursor:pointer;}
.prdts_listing_content .add_compare_area input[type="checkbox"] + label{color:#7b7b7b;font-family:Helvetica-Normal;font-size:16px;}
.prdts_listing_content .add_compare_area input[type="checkbox"]:checked + label span{background:url(../images/check_box_check.png)0px top no-repeat;}
.secend_row{margin-top:20px;}
.third_row{margin-top:20px;}
.pagination_area .pagination > li:first-child > a, .pagination > li:first-child > span{margin-left:0;border-top-left-radius:3px;border-bottom-left-radius:3px;}
.pagination_area .pagination{-webkit-box-shadow:1px 3px 1px 0px rgba(194,194,194,0.4);-moz-box-shadow:1px 3px 1px 0px rgba(194,194,194,0.4);box-shadow:1px 3px 1px 0px rgba(194,194,194,0.4);display:inline-block;padding-left:0;margin:20px 0;border-radius:0px;}
.pagination_area .pagination_text{display:inline-block;padding-left:0;margin:25px 0;}
.pagination_area .pagination_text h4{color:#6f7174;font-size:16px;font-family:"Lato", "Helvetica Neue", "Helvetica", sans-serif;font-weight:500;}
.pagination_area .pagination > li > a, .pagination > li > span{position:relative;float:left;padding:15px 20px;margin-left:-1px;line-height:1.42857143;color:#7b7b7b;text-decoration:none;background-color:#f5f5f5;border:none;}
.pagination_area .pagination > li:last-child > a, .pagination > li:last-child > span{border-top-right-radius:3px;border-bottom-right-radius:3px;background:#ff9310;color:#fff;}
.pagination_area .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination_area .pagination > .active > span:focus{z-index:3;color:#fff;cursor:default;background-color:#3b4151;}
.pagination_area .pagination .page-item.active .page-link{background-color:#3b4151;color:#fff;}
.sidebar_content .panel-group .panel + .panel{margin-top:0px;}
.sidebar_content .panel-title a{font-size:16px;color:#767b7f;background:#fff;padding:15px 15px;display:block;}
.sidebar_content .title_content a{font-size:14px;}
.sidebar_content .panel-default{border:none;}
.sidebar_content .panel-title a.collapsed{color:#767b7f;}
.sidebar_content .panel-title title_content a.collapsed #collapseOne-2 .collapsed{color:#767b7f;font-size:14px;}
.panel-group .panel-heading + .panel-collapse > .panel-body, .panel-group .panel-heading + .panel-collapse > .list-group{border-top:0px solid #ddd;}
.sidebar_content .panel-title a:hover{text-decoration:none;}
.sidebar_content .panel-title a:focus{text-decoration:none;}
.panel-title a i{padding-right:8px;font-size:16px;}
.collapsed:active{background:#eee;color:#FF6600;}
.sidebar_content .panel-heading{padding:0;border-top-left-radius:3px;border-top-right-radius:3px;}
.sidebar_content ul{list-style:none;text-decoration:none;color:#767b7f;font-size:14px;}
.sidebar_content ul li a{color:#767b7f;font-size:16px;padding:2px 5px 2px 5px;}
.sidebar_content .panel-body{border-top:none;padding:0px;}
.sidebar_content .panel-group{margin-bottom:0;}
.sidebar_content .panel-body .accordion2{padding-left:20px;}
.sidebar_content .panel-heading a .active{background:#eee;}
.prdts_listing_content .prdts_content_area .prdts_type a{color:#fff;}
.prdts_listing_content .prdts_content_area .prdts_type a:hover{text-decoration:none;}
.nw-btn-cls-1{display:block;width:100%;background:#0073b6;padding:8px 20px;color:#fff;font-size:15px;border-radius:3px;border-bottom:2px solid #035483;}
.nw-btn-cls-2{display:block;width:100%;background:#0073b6;padding:8px 20px;color:#fff;font-size:15px;border-radius:3px;border-bottom:2px solid #035483;}
.btn-wrp-cst{padding:0px 0px 15px 0px;}
.cst-nw-ul{padding-left:0px;}
.cst-nw-ul li{list-style:none;padding:10px 0px;border-bottom:1px solid #cccccc63;}
.cst-nw-ul li span{padding-left:12px;text-align:center;}
.cst-nw-ul li span i{margin-left:0px;background-color:#0073b6;color:#fff;padding:3px;font-size:11px;line-height:13px;font-weight:400;width:18px;height:18px;border-radius:20px;display:inline-block;}
.mrg-nw-cst-grd{margin-bottom:16px;}
.sidebar_content ul li{white-space:nowrap;overflow:hidden !important;text-overflow:ellipsis;}
.left_panel_wrapper .sidebar_content .treeview .list-group .list-group-item li a{color:#999999;}
.sidebar_content ul li{display:block;}
.sidebar_content ul li a{color:#767b7f !important;}
.sidebar_content ul li a:hover{text-decoration:none;}
.sidebar_content ul li:hover{text-decoration:none;background-color:#F5F5F5 !important;}
.sidebar_content ul li span{color:#0073b6 !important;}
.prdts_details_type a{color:#fff;}
.listing_details_breadcrumb_pagination .breadcrumb li a{margin-right:5px;}
.img_background{padding-top:0px;}
.gallery_tabs .carousel-indicators{width:100%;margin-left:0;bottom:-5px;}
.gallery_tabs .carousel-indicators li{border:1px solid #0c73af;}
.gallery_tabs .carousel-indicators .active{background:#0c73af !important;border-color:#0c73af;}
.gallery_tabs .carousel-indicators{width:100%;margin-left:0;bottom:-40px;}
.gallery_tabs .gallery_img .gallery_title{padding-top:20px;border-bottom:3px solid #ff9310;padding-bottom:10px;min-height:72px;max-width:180px;margin:0px auto;max-height:60px;}
.ui-autocomplete li:hover{background-color:#b7e3fc !important;border:none !important;}
.ui-autocomplete li a:hover{background-color:#b7e3fc !important;border:none !important;cursor:pointer;}
.ui-autocomplete li a .media:hover{background-color:#b7e3fc !important;border:none !important;}
.ui-autocomplete:hover{border:none !important;}
.forgot_password_screen .page-title-small{text-align:center;font-size:18px;color:#515151;margin-bottom:25px;}
.forgot_password_screen h2{color:#87898a;font-size:3em;text-align:center;padding-bottom:0px;}
.listing_details_screen_screen_title-2 h5{font-size:20px;color:#0073b6;}
.listing_details_breadcrumb_pagination-2 .breadcrumb{padding:20px 12px;list-style:none;background:#fff;border-top:2px solid #eee;border-radius:0px;margin-bottom:0;}
.listing_details_breadcrumb_pagination-2 .breadcrumb li a{color:#6e7278;text-decoration:none;margin-right:29px;font-size:16px;}
.listing_details_breadcrumb_pagination-2 .breadcrumb li a:hover{color:#0073b6;}
li{list-style:none;}
h1{font-size:21px !important;}
.features-table li{background:#025280;border-bottom:1px solid #01314d;color:#f1f1f1;font-size:16px;padding:15px 24px;}
.features-table li:hover{background:#0073b6;cursor:pointer;-webkit-transition:all .35s;-moz-transition:all .35s;transition:all .35s;}
.features-table-free li, .features-table-paid li{background:#efefef none repeat scroll 0 0;border-bottom:1px solid #d4d4d4;text-align:center;padding:5px 5px;cursor:pointer;min-height:53px;font-size:12px !important;}
.features-table-free h1, .features-table-paid h1{text-align:center;}
.features-table-free li:hover, .features-table-paid li:hover{background:#dedede none repeat scroll 0 0;-webkit-transition:all .35s;-moz-transition:all .35s;transition:all .35s;}
.features_table h1{font-size:13px !important;}
.features-table h1, .features-table-free h1, .features-table-paid h1{background:#6b6b6b none repeat scroll 0 0;color:#fff;font-weight:600;margin:0;padding:20px 5px;min-height:65px;text-transform:uppercase;}
.features-table-free h1 a{color:#fff;}
.features-table-free h1 a:hover{text-decoration:none;}
.features-table h1{text-align:center;}
.features-table-free li{border-right:2px solid #d4d4d4;font-size:14px;color:#333;}
.features-table-free li i{font-size:14px;color:#333;}
.features-table-free li h1{font-size:14px !important;color:#333 !important;background-color:transparent;padding-top:0px;padding-bottom:0;}
.fa.fa-check{color:#2cc14f;}
.no-padding{padding:0;}
.features-table-free ul{padding:0;margin-bottom:0;}
.features-table ul{padding:0;margin-bottom:0;}
body{counter-reset:section;}
.features-table li::before{counter-increment:section;content:"" counter(section) ": ";}
.features-table-free{position:absolute;top:-143px;}
.nw-img-height{border-right:1px solid rgba(204, 204, 204, 0.48);border-left:1px solid rgba(204, 204, 204, 0.48);}
.nw-img-height img{height:143px;margin:0 auto;}
.features_table{padding-top:143px;margin-bottom:80px;border:1px solid;border-color:rgba(204, 204, 204, 0.48);}
.features-table-free li h3{font-size:14px !important;color:#333 !important;background-color:transparent;padding-top:0px;padding-bottom:0px;min-height:auto;margin-top:0;margin-bottom:0;}
.page-title-cst{padding-top:40px;padding-bottom:35px;}
.top_nav{background:#fff;padding:0px;font-family:'Nanum Barun Gothic reg';-webkit-box-shadow:0px 2px 5px 0px rgba(0,0,0,0.41);-moz-box-shadow:0px 2px 5px 0px rgba(0,0,0,0.41);box-shadow:0px 2px 5px 0px rgba(0,0,0,0.41);}
@media all and (min-width:768px){.customSearchContainer{float:left;width:100%;background:#eee;box-shadow:0px 0px 5px #000;padding-left:14px;font-size:14px;}
.customSearchContainer ul{padding:0px;}
ul#selected_pros li{list-style:circle;position:relative;}
ul#selected_pros li p{top:0px;right:0px;left:auto;}
.searchContainer{display:none;padding:15px}
.searchContainer.active{display:inline-block;position:absolute;top:120px;left:0;right:0;margin-left:auto;margin-right:auto;border-bottom:3px solid #cad5da;width:100%;background:#fff;z-index:99}
}
@media all and (min-width:768px){.searchContainer.active{border:0;-webkit-box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);-moz-box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);width:700px;top:312px;overflow-x:hidden;z-index:9999;}
}
.searchContainer .product-results li{position:relative}
.searchContainer .product-results li .my-assortment{top:-5px;right:auto;left:15px}
.searchContainer .category-results .parent-name{font-style:italic}
@media all and (min-width:480px){.searchContainer .left-side,
.searchContainer .right-side{width:48%;float:left}
.searchContainer .left-side{margin-right:4%}
}
.searchContainer ul li{display:block}
.searchContainer ul li:before,
.searchContainer ul li:after{content:" ";display:table}
.searchContainer ul li:after{clear:both}
.searchContainer ul li a{color:#0073b6}
.searchContainer ul li a p{margin-left:37px;margin-top:3px}
.searchContainer ul li img{width:30px;height:30px;background:#cad5da;float:left;margin-right:7.5px}
.searchContainer ul h4{margin-bottom:7.5px}
.searchContainer .suggested-results li a{padding-left:22.5px;position:relative}
.searchContainer .suggested-results li a:before{content:'';position:absolute;left:0;top:0;font-size:12px;font-family:'ahlsell-icons'}
.header .header_caption{padding:6em 0 12em 0;}
@media (max-width:1199px){.header .header_caption{padding:4em 0 12em 0;}
.searchContainer.active{border:0;-webkit-box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);-moz-box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);width:700px;max-height:250px;top:285px;overflow:scroll;overflow-x:hidden;z-index:9999;}
}
@media only screen and (min-device-width:768px) and (max-device-width:991px){.header .header_caption{padding:3em 0 12em 0;}
.searchContainer.active{border:0;-webkit-box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);-moz-box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);width:700px;max-height:250px;top:271px;overflow:scroll;overflow-x:hidden;z-index:9999;}
}
.img_background{height:auto !important;padding-top:0 !important;}
@media only screen and (min-device-width:768px) and (max-device-width:991px){.mrg-20{margin-bottom:10px;}
.prdts_listing_content{margin-top:15px;min-height:480px;}
.pagination_area .pagination > li > a, .pagination > li > span{position:relative;float:left;padding:15px 12px;}
.prdts_heading h4{font-size:25px !important;margin-top:30px !important;}
.img_background .bg_img img{height:250px;margin:0 auto;}
.img_background{background:#eee;width:100%;height:auto !important;border:1px solid #ccc;text-align:center;padding:20px 0px !important;}
.mrg-bob-1{margin-bottom:15px;width:100%;}
.features-table li{border-bottom:1px solid #01314d;color:#f1f1f1;font-size:12px;padding:15px 9px;}
.features-table-free li, .features-table-paid li{background:#efefef none repeat scroll 0 0;border-bottom:1px solid #d4d4d4;text-align:center;padding:5px 5px;cursor:pointer;min-height:48px;font-size:12px !important;}
}
@media (max-width:767px){.searchContainer.active{border:0;-webkit-box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);-moz-box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);box-shadow:0 1px 4px 0 rgba(0, 0, 0, .2);width:100%;background-color:#fff;height:auto;top:285px;overflow:scroll;overflow-x:hidden;z-index:9999;}
.searchContainer .left-side ul{padding-left:15px;}
.stl-head{font-weight:600 !important;}
.features-table-free{position:inherit;top:auto;}
.nopad-hd-lft-rgt{padding-right:0px;padding-left:0px;}
#menu-toggle{padding:5px 0px;}
.header .header_caption{padding:10px 0 80px 0;}
.header .header_caption h2{font-size:25px;}
.pagination_area .pagination_text{width:100%;text-align:left;margin-bottom:15px;}
.pagination_area .pagination{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;display:inline-block;padding-left:0;margin:0px 0 20px 0;border-radius:0px;width:100%;text-align:center;}
.mrg-bob-1{margin-bottom:15px;width:100%;height:50px;padding-top:11px;font-size:18px;}
.pagination_area .pagination > li > a, .pagination > li > span{padding:15px 14px;}
.img_background{background:#eee;width:100%;height:auto !important;border:1px solid #ccc;text-align:center;padding:20px 0px !important;}
.img_background .bg_img img{height:200px;margin:0 auto;}
.tbl_area p{font-size:20px !important;margin-top:15px !important;}
.listing_detail_bg{border:none !important;padding:0px !important;}
.prdts_heading h4{font-size:20px !important;margin-top:15px !important;margin-bottom:0px !important;}
.listing_details_breadcrumb_pagination .breadcrumb li a{color:#6e7278;text-decoration:none;margin-right:5px !important;font-size:12px !important;}
.listing_details_breadcrumb_pagination .breadcrumb li:before{padding:0px 2px !important;}
.listing_details_breadcrumb_pagination .breadcrumb li{font-size:12px !important;}
.listing_details_breadcrumb_pagination .breadcrumb{padding:20px 0px !important;}
.features_table{padding-top:0px !important;margin-bottom:80px !important;border:1px solid !important;border-color:rgba(204, 204, 204, 0.48) !important;}
.features-table-free{position:relative !important;top:auto !important;width:100% !important;margin-top:20px !important;}
.signup_screen{max-width:556px;margin:25px auto 15px auto !important;background:#fafdff;padding:20px;box-shadow:0px 2px 20px 0px #ddd;font-family:Myriad-Pro;border-top:5px solid #ff9310;border-left:1px solid #ddd;border-right:1px solid #ddd;border-bottom:1px solid #ddd;}
.signup_screen .signup_form .reg-btn{padding:10px 0px !important;width:100% !important;margin-top:10px !important;}
.gallery_tabs .carousel-indicators{width:100% !important;margin-left:0 !important;bottom:-370px !important;}
}
.searchContainer .left-side ul{padding-left:15px;}
.prdts_listing_content .prdts_content_area .prdts_type a{display:inline-block;width:180px;white-space:nowrap;overflow:hidden !important;text-overflow:ellipsis;}
.features-table-free{position:absolute;top:-143px;width:100%;}
.features-table h1, .features-table-free h1, .features-table-paid h1{display:inline-block;width:180px;white-space:nowrap;overflow:hidden !important;text-overflow:ellipsis;display:inline-block;width:100%;height:79px;overflow:hidden !important;text-overflow:ellipsis;}
.prdts_listing_content{margin-top:15px;min-height:420px;}
.search_loader{background:rgba(255,0,0,0.4);width:129px;border-radius:14px;color:#fff;text-align:center;position:absolute;top:45%;left:45%;z-index:5;}
.noDisplay{display:none;}
a:hover, a:focus{color:#23527c;text-decoration:none !important;}
.product_type a{color:#fff !important;}
.sidebar-nav{padding:9px 0;}
.dropdown-menu .sub-menu{left:100%;position:absolute;top:0;visibility:hidden;margin-top:-1px;}
.dropdown-menu .third-menu{left:100%;position:absolute;top:0;visibility:hidden;margin-top:-1px;}
.topbar-nav li.dropdown ul.dropdown-menu li{display:block;}
.topbar-nav li.dropdown ul.dropdown-menu a{color:#333;}
.dropdown-menu li:hover .sub-menu{visibility:visible;}
.sub-menu li:hover .third-menu{visibility:visible;}
.topbar-nav li.dropdown ul.dropdown-menu>li>a:hover, .topbar-nav li.dropdown ul.dropdown-menu>li>a:focus, .topbar-nav li.dropdown ul.dropdown-submenu:hover>a, .topbar-nav li.dropdown ul.dropdown-submenu:focus>a{text-decoration:none;color:#ffffff;background-color:#0081c2;background-image:-moz-linear-gradient(top, #0088cc, #0077b3);background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0077b3));background-image:-webkit-linear-gradient(top, #0088cc, #0077b3);background-image:-o-linear-gradient(top, #0088cc, #0077b3);background-image:linear-gradient(to bottom, #0088cc, #0077b3);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);}
.dropdown:hover .dropdown-menu{display:block;}
.nav-tabs .dropdown-menu, .nav-pills .dropdown-menu, .navbar .dropdown-menu{margin-top:0;}
.navbar .sub-menu:before{border-bottom:7px solid transparent;border-left:none;border-right:7px solid rgba(0, 0, 0, 0.2);border-top:7px solid transparent;left:-7px;top:10px;}
.navbar .sub-menu:after{border-top:6px solid transparent;border-left:none;border-right:6px solid #fff;border-bottom:6px solid transparent;left:10px;top:11px;left:-6px;}
.screen-reader-text{clip:rect(1px, 1px, 1px, 1px);position:absolute !important;height:1px;width:1px;overflow:hidden;}
.screen-reader-text:focus{background-color:#f1f1f1;border-radius:3px;box-shadow:0 0 2px 2px rgba(0, 0, 0, 0.6);clip:auto !important;color:#21759b;display:block;font-size:14px;font-size:0.875rem;font-weight:bold;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000;}
.nav-collapse,
.nav-collapse *{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}
.nav-collapse{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none;}
.nav-collapse,
.nav-collapse ul{list-style:none;width:100%;float:left;}
@media screen and (min-width:40em){.nav-collapse{width:auto;float:right;}
}
.nav-collapse > ul{border-top:1px solid rgba(255,255,255, .15);}
.nav-collapse li{float:left;width:100%;}
@media screen and (min-width:40em){.nav-collapse li{width:auto;}
}
.nav-collapse a{border-bottom:1px solid rgba(255,255,255, .15);color:#fff;float:left;padding:0.9em 1.1em;text-decoration:none;width:100%;}
@media screen and (min-width:40em){.nav-collapse a{border-bottom:0;border-right:1px solid white;padding:1em 1.5em;margin:0;float:left;text-align:center;}
.nav-collapse li:first-child a{border-left:1px solid white;}
}
@font-face{font-family:"responsivenav";src:url("../icons/responsivenav.eot");src:url("../icons/responsivenav.eot?#iefix") format("embedded-opentype"),
url("../icons/responsivenav.ttf") format("truetype"),
url("../icons/responsivenav.woff") format("woff"),
url("../icons/responsivenav.svg#responsivenav") format("svg");font-weight:normal;font-style:normal;}
.nav-toggle{border:1px solid #fff;color:#fff;font-size:0.85em;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;text-decoration:none;position:relative;overflow:hidden;float:right;line-height:39px;padding:0 0.75em;margin-top:7px;margin-right:5%;visibility:hidden;}
.nav-toggle:hover,
.nav-toggle:focus,
.nav-toggle:active{background-color:#fff;color:#212428;}
.nav-collapse a:hover,
.nav-collapse li.focus > a{background-color:#3e4853;}
@media screen and (max-width:39.999em){.js .nav-collapse{max-height:fit-content;clip:auto;}
.js .nav-collapse.opened{visibility:visible;}
.js .nav-collapse.multiple-level-nav.opened.dropdown-active{max-height:9999px !important;}
.js .nav-collapse.multiple-level-nav .sub-menu{clip:rect(0 0 0 0);max-height:0;position:absolute;display:none;overflow:hidden;zoom:1;padding-left:12px;}
.js .nav-collapse.multiple-level-nav .sub-menu.toggled{display:block;max-height:9999px;position:relative;left:0;visibility:visible;}
.js .nav-collapse li{position:relative;}
.js .nav-collapse .dropdown-toggle{border:1px solid #fff;color:#fff;content:"";height:30px;width:30px;padding:0;position:absolute;margin:0;text-transform:lowercase;top:5px;right:4%;background:transparent;}
.js .nav-collapse .dropdown-toggle:hover,
.js .nav-collapse .dropdown-toggle:focus,
.js .nav-collapse .dropdown-toggle:active{}
.js .nav-collapse .dropdown-toggle:after{content:"+";font-size:20px;}
.js .nav-collapse .dropdown-toggle.toggled:after{content:"-";}
}
.dropdown ul a{}
.dropdown ul ul a{}
@media screen and (min-width:40em){.dropdown-toggle{display:none;}
}
.dropdown ul ul{border:0;padding:0;}
.dropdown .dropdown.opened .has-dropdown{background:#9c2c12;}
@media screen and (min-width:40em){.nav-collapse{padding-right:4%;position:relative;}
.js .nav-collapse,
.js .nav-collapse .dropdown ul{max-height:none;overflow:visible;}
.has-dropdown:after{font-size:1.5em;line-height:0.8;float:right;content:"";width:0;height:0;margin:1em 0 0 0.5em;border-left:6px solid transparent;border-right:6px solid transparent;border-top:6px solid #fff;}
.dropdown ul .has-dropdown:after{content:"";width:0;height:0;margin:0.3em 0 0 0.5em;border-bottom:6px solid transparent;border-top:6px solid transparent;border-left:6px solid #fff;}
.nav-collapse .dropdown{position:relative;}
.nav-collapse .dropdown li{width:100%;}
.nav-collapse .dropdown ul a{text-align:left;border:0;}
.nav-collapse li{border:0;display:inline-block;height:55px;line-height:55px;position:relative;}
.nav-collapse a{display:inline-block;padding:0 16px;}
.nav-collapse ul ul{float:left;margin:0;position:absolute;top:85px;left:-999em;z-index:99999;text-align:center;}
.nav-collapse li li{border:0;display:block;height:auto;line-height:1.0909090909;}
.nav-collapse ul ul ul{left:-999em;top:20px;}
.nav-collapse ul ul a{padding:15px 12px;white-space:normal;width:150px;}
.nav-collapse ul li:hover > ul,
.nav-collapse ul li.focus > ul{top:55px;left:50%;margin-left:-75px;}
.nav-collapse ul ul li:hover > ul,
.nav-collapse ul ul li.focus > ul{top:0;left:0%;margin-left:150px;}
}
#sidebar-wrapper .sidebar-nav .sub-menu li a{font-size:18px;padding:11px 10px 20px 10px;}
.product-dropdown-menu{}
ul.main-product-category{display:none;background:rgba(255,255,255,1);background-color:rgba(255,255,255,1);position:absolute;z-index:1200;width:1300px;padding:0px 80px 50px 80px;white-space:nowrap;margin:0px 80px 80px -80px;}
ul#product-menu{border:2px solid #f2f2f2;}
.products-dropdown{width:140px;background:transparent;}
ul.main-product-category li{display:table;position:relative;overflow:hidden;float:left;width:25% !important;white-space:normal;line-height:21px;margin-top:15px;margin-bottom:px;list-style:none;}
ul.main-product-category li a{display:block;color:#092636;font-family:'Lato',sans-serif !important;padding:5px 13px;font-size:15px;font-weight:400;cursor:pointer;}
ul.main-product-category li a.active{color:#337ab7;box-shadow:0px 10px 0px 0px #337ab7;}
ul.root-product-category{display:block;background:rgba(255,255,255,1);background-color:rgba(255,255,255,1);position:absolute;z-index:1200;width:100%;padding:0px;margin:0px;white-space:nowrap;}
ul.root-product-category li{display:table;position:relative;overflow:hidden;float:left;width:100%;white-space:normal;line-height:21px;margin-top:15px;margin-bottom:0px;list-style:none;}
ul.root-product-category li a{display:block;color:#092636;font-family:'Lato',sans-serif !important;padding:0px 13px;font-size:15px;font-weight:400;cursor:pointer;}
ul.root-product-category li a.active{color:#337ab7;box-shadow:0px 10px 0px 0px #337ab7;}
ul.level1-product-category{display:none;font-family:'Lato',sans-serif !important;background:#ffffff;position:relative;width:100%;padding:0px 0px 0px 20px;}
ul.level1-product-category li{display:inline-table;position:relative;overflow:hidden;float:left;width:100%;padding:5px 0px;}
ul.level1-product-category li a{color:#263541;padding:10px 4px;font-size:16px;}
ul.level2-product-category{display:none;font-family:'Lato',sans-serif !important;background:#ffffff;position:relative;width:100%;padding:0px 0px 0px 20px;}
ul.level2-product-category li{color:#263541;display:inline-table;position:relative;overflow:hidden;float:left;width:100%;padding:5px 0px;}
ul.level2-product-category li a{padding:8px 4px;font-size:14px;}
a.underline{text-decoration:underline;}
a.category-link{color:#263541;padding:10px 4px;font-size:15px;}
a#close-product-menu{float:right;color:#263541;padding:0px 10px;font-size:30px;}
.expand-icon{cursor:pointer;}
ul.list-group{font-family:'Lato',sans-serif !important;font-size:16px;}
ul.list-group li.active>a{font-weight:700;}
ul.level1-product-category li.active>a{font-weight:600;}
ul.level2-product-category li.active>a{font-weight:600;}
ul.list-group li.active ul.level1-product-category{display:block;padding:0px 0px 0px 20px;}
ul.level1-product-category li.active ul.level2-product-category{display:block;padding:0px 0px 0px 20px;}
.nav > li > a{padding:10px 7px;}
.btn.estore{background:#47a417;border-style:solid;border-width:1px;border-color:#47a417;color:#ffffff;font-weight:bold;}

ul {
	list-style: disc;
	padding-left: 1.2em;
}

li {
	margin-bottom: 8px;
	list-style: disc;
}

		</style>
        <meta name="msvalidate.01" content="17C7A11136BFCDEA40FEFE73FAB89DE0" />
	</head>
       

    <body>
        <div class="container-fluid header_bg">
            <div class="container header nopad-hd-lft-rgt">
                <div class="navigation">
                    <div class="pull-left col-md-4"><a href="<?= site_url()?>"><img src="<?= site_url() ?>assets/img/logo.png" class="img-responsive" alt="Vvs offert | Rörkalkyl | Vvskalkyl | Anbud | Vvspriser |Vvsoffert | Vvs online | Rörgrossist" width="224" height="40"></a></div>
                    <div class="pull-right col-md-8 hidden-xs">
                        <h1 style="font-family: Myriad-Pro; color: #fff; padding: 0px; margin-top: 0px; margin-bottom: 30px; font-size: 35px!important;">Jämför vvsartiklar, pris, lagersaldo från grossister.</h1>
                    </div>
                </div>

            </div>
        </div>
        <script>var site_url = '<?= site_url() ?>';</script>
        

		    	<section class="site_products" style="min-height: 500px;">

		    		<div class="container">
					    <div class="row clearfix">
					    	<div class="col-sm-10 col-sm-offset-1">
					    		<h2 class="screen_title" style="color:#f16b6b; text-align: center; padding-top: 50px;">Tyvärr Kan Vi Inte Hitta Sidan...</h2>
						    	<div style="color:#4a4a4a; padding-top: 50px; font-size: 150%;">
						    		<ul>
						    			<li>Sidan du söker finns inte. Den kan ha tagits bort eller du kan ha skrivit fel i adressfältet.</li>
						    			<li>Kom du hit via en länk? Hjälp oss då gärna genom att anmäla felet till <a href="mailto:info@vvsoffert.se">vvsoffert.se</a> Tack!</li>
						    			<li>För att komma vidare, använd sökrutan eller menyn nedan.</li>
						    		</ul>
						    	</div>
						    	<div class=" col-sm-8 col-sm-offset-2" style="padding-top: 50px; padding-bottom: 50px;">
						    		<div style="width: 80%; float: left;">
			                            <input type="text" id="m-search-key" name="m-search-key" style="width: 100%; height: 40px; padding:  6px 12px; font-size: 16px; color: #363636; background: #dcdfea; border-radius: 5px;" placeholder="Vad söker du?" autocomplete="off" />
			                        </div>
			                        <div style="width: 20%; text-align: right; float: right;text-align: left;">
			                            <a class="btn btn-success" href="" id="m-vvsoffert-se-search" style="padding: 8px 12px;"><i class="fa fa-search"></i>Sök</a>
			                        </div>

						    	</div>

					    	</div>
					    
						</div>
					</div>
		    		
		    	</section>
		

		<div style="padding: 0px 0px;" class="site_footer">

	        <ul style="padding: 0px 0px;" class="links list-inline">

	            <li><a href="<?=site_url()?>">Hem &nbsp;&nbsp;|</a></li>

	            <li><a href="<?=site_url('Products')?>">Produkter &nbsp;&nbsp;|</a></li>

	             <li><a href="<?=site_url('terms-condition')?>">Villkor &nbsp;&nbsp;|</a></li>
	             <li><a href="<?=site_url('nyheter')?>">Nyheter &nbsp;&nbsp;|</a></li>
	                   <a href="https://twitter.com/vvsoffert" target="_blank" align="left"><img src="<?php echo site_url('assets/custom/images/twitter.png'); ?>" alt="Twitter" width="125" height="125"></a>

	        </ul>

	    </div>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-60657115-1"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);}; gtag('js', new Date()); gtag('config', 'UA-60657115-1');</script>

        
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/vendors.js'); ?>"></script>


	<script defer type="text/javascript" src="<?php echo base_url('assets/custom/js/frontend_custom.js'); ?>"></script>


	<script defer type="text/javascript" src="<?php echo base_url('assets/js/vvsoffert-se-scripts.min.js'); ?>"></script>
	    

	    

	</body>
</html>