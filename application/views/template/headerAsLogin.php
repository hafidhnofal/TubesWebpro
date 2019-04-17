<?php
        if($this->session->userdata('status') != "login"){
                redirect(base_url());
        }
?>
<html>
<head>

<title>detikcom - Informasi Berita Terupdate Hari Ini</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:type" content="article">
<meta property="og:site_name"   content="detiknews">
<meta property="og:title" content="detikcom - Informasi Berita Terupdate Hari Ini">
<meta property="og:image" content="images/logo.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta name="thumbnailUrl" content="images/logo.jpg" itemprop="thumbnailUrl">
<meta name="twitter:image" content="images/logo.jpg">
<!-- BEGIN CRITEO LOADER -->
<script async="async" type="text/javascript" src="<?php echo base_url();?>asset/js/publishertag.js"></script>
<link href="<?php echo base_url();?>asset/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.sticky-kit.min.js"></script>
<script src="<?php echo base_url();?>asset/js/lodash.min.js"></script>
<script src="<?php echo base_url();?>asset/js/handlebars-v3.0.1.js"></script>
<script src="<?php echo base_url();?>asset/js/dtkframebar-controller.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>asset/css/detikcom.style.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>asset/css/detikcom.cb.css">
<!-- E: (script) Google Tag Manager -->
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/framebar.css" type="text/css">
</head>
<body>
<div id="navbar_block" data-platform="desktop"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--S:FRAMEBAR-->
<div class="framebar-desktop">
<div class="dtkframebar">
    <div class="dtkframebar__bg">
        <div class="dtkframebar__wrapper">
            <div class="dtkframebar__menu dtkframebar__clearfix pull-left">
                <a href="#" class="dtkframebar__menu__icon pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <span class="dtkframebar__menu__text">MENU</span>
            </div>
            <div class="dtkframebar__menu__kanal">
                <ul class="newlist">
                    <li><a href="#" target="_blank">
                         <span class="dtkframebar__menu__kanal__icon"><img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_pilpres.png" alt=""></span> Pemilu 2019   <span class="kanal__new">NEW</span></a></li>
                    <li class="sub_list"> <a href="#">
                        <span class="dtkframebar__menu__kanal__icon gtm_link_detikcom"> <img src="<?php echo base_url();?>asset/images/headerAsLogin/favicon-detikcom.png" alt=""></span> Detikcom</a> <ul>
                    <li><a href="#" target="_blank">
                        <span class="dtkframebar__menu__kanal__icon"><img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_Most-3x.png" alt=""></span>Most Popular </a></li>
                    <li><a href="#" target="_blank">
                        <span class="dtkframebar__menu__kanal__icon"><img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_kirim_tulisan-3x.png" alt=""></span>Kirim Tulisan</a></li>
                    <li><a href="#" target="_blank">
                        <span class="dtkframebar__menu__kanal__icon"><img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_livetv.png" alt=""></span>Live TV<span class="kanal__new">NEW</span></a></li>
                        </ul>
                    </li>
                </ul>
                <div class="kat_divide">
                    Kategori Berita
                </div>
                <ul class="newlist-double">
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_detik-3x.png" alt=""></span> News</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_finance-3x.png" alt=""></span> Finance</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_inet-3x.png" alt=""></span> Teknologi</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_hot-3x.png" alt=""></span> Entertaiment</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_sport-3x.png" alt=""></span> Sport</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_sepakbola-3x.png" alt=""></span> Sepakbola</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_oto-3x.png" alt=""></span> Otomotif</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_travel-3x.png" alt=""></span> Travel</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_food-3x.png" alt=""></span> Food</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_health-3x.png" alt=""></span> Health</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_wolipop-3x.png" alt=""></span> Wolipop</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_X-3x.png" alt=""></span> DetikX</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_20D-3x.png" alt=""></span> 20Detik</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_detiknews">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_foto.png" alt=""></span> Foto</a></li>
                </ul>


                <div class="kat_divide">
                    Layanan
                </div>

                <ul class="newlist-double">
                    <li> <a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_pasangmata">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_pasang_mata-3x.png" alt=""></span> Pasang Mata</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_pasangmata">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_adsmart-3x.png" alt=""></span> Ads Smart</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_pasangmata">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_forum-3x.png" alt=""></span> Forum</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_pasangmata">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_event-3x.png" alt=""></span> detikEvent</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_pasangmata">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_poin.png" alt=""></span> detikPoint</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon gtm_link_pasangmata">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/trans_snow.png" alt=""></span> Trans Snow World                <span class="kanal__new">NEW</span></a></li>
                </ul>

                <div class="kat_divide">
                    Detik Network
                </div>

                <ul class="networkList">
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_cnn-3x.png" alt=""></span> CNN Indonesia</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_CNBC-3x.png" alt=""></span> CNBC Indonesia</a></li>
                     <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_hai_bunda-3x.png" alt=""></span> Hai Bunda</a></li>
                    <li><a href="#" target="_blank">
                            <span class="dtkframebar__menu__kanal__icon">
                            <img src="<?php echo base_url();?>asset/images/headerAsLogin/ic_insert-3x.png" alt=""></span> Insertlive                    <span class="kanal__new">NEW</span></a></li>
                </ul>

            </div>

            <div class="dtkframebar__search pull-left gtm_framebardc_search">
                <div class="dtkframebar__search__input gtm_framebardc_btn_search">
                    <form id="search_navbar" action="#">
                        <input name="query" type="text" class="text" placeholder="Cari Berita" autocomplete="off">
                        <input name="siteid" type="hidden" value="2">
                        <button class="dtkframebar__icons dtkframebar__icons-search"></button>
                    </form>
                </div>
            </div>
            <div class="dtkframebar__user pull-right">
                <div class="dtkframebar__user__login">
                    <div class="dtkframebar__user__login__in"><h4 class="pull-left"><?php echo $user['nama'];?></h4><span class="dtkframebar__user__login__in__img"><img src="<?php echo base_url();?>asset/images/headerAsLogin/default_me.jpg" alt=""></span><i class="dtkframebar__caret dtkframebar__caret-down"></i><div class="dtkframebar__user__login__in__db"><ul>
                            <li><a href="<?php echo base_url();?>login/view_aktivitas">Profile Saya</a></li>
                            <li><a href="<?php echo base_url();?>login/view_dashboard">Dashboard</a></li>
                            <li><a href="<?php echo base_url();?>login/logout">Keluar</a></li></ul></div></div>
                </div>
            </div>
            <div class="dtkframebar__bg__inner"></div>
        </div>
    </div>
</div>
</div>
<!--E:FRAMEBAR--></div>

<div class="container">
<!-- S:HEADER-->

<style>
.logodetik_pildun {
padding: 0px 0;
width: 260px;
}
@media screen and (min-width: 1025px) and (max-width: 1280px) {
.logodetik_pildun {
padding: 10px 0;
width: 220px;
}
}
</style>
<div class="header">
<a href="#"><img src="<?php echo base_url();?>asset/images/desktop.gif" class="logodetik" title="Mantap Memilih" alt="Mantap Memilih"></a> <!--S:LEADERBOARD-->
<div id="leaderboard" class="leaderboard fr">
<div class="leaderboard_container">
<!-- /4905536/detik_desktop/wp/leaderboard -->
<div id="div-gpt-ad-1535012243332-0" style="height:90px; width:728px;">
</div>
</div>
</div> <!--E:LEADERBOARD-->
</div>

<div class="header_top">
    <div class="menu">
    <ul>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikNews">detikNews</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikFinance">detikFinance</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikHot">detikHot</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detiki-Net">detiki-Net</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikSport">detikSport</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikOto">detikOto</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikTravel">detikTravel</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikFood">detikFood</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikHealth">detikHealth</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="Wolipop">Wolipop</a>
    </li>
    <li>
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="Indeks">Indeks</a>
    </li>
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="menu2">
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="LIVE TV" class="livetv">LIVE TV</a>. 
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="Adsmart <span>New</span>" class="new">Adsmart <span>New</span></a> .
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="20DETIK">20DETIK</a> . 
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="Foto">Foto</a> . 
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikX">detikX</a>. <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="Sepakbola">Sepakbola</a> . 
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="Pasangmata">Pasangmata</a> . 
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="Event" class="new">Event</a> .
    <a href="#" data-category="GA WP New Detikcom 2015" data-action="Navbar Atas" data-label="detikPemilu <span>New</span>" class="new">detikPemilu <span>New</span></a> <ins data-labelname="navbar" data-revive-zoneid="1068" data-revive-id="0cceecb9cae9f51a31123c541910d59b" data-revive-seq="2" id="revive-0-2" data-revive-loaded="1" style="text-decoration: none;">
    <a href="#" style="background-color: rgb(33, 146, 48); border-radius: 3px; color:#ffffff; margin: 0 5px;" target="_blank">Sunsilk Hijab Hunt</a>
    <div id="beacon_43dfa6f20f" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="#" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div></ins> <ins data-labelname="navbar2" data-revive-zoneid="1390" data-revive-id="0cceecb9cae9f51a31123c541910d59b" data-revive-seq="3" id="revive-0-3" data-revive-loaded="1" style="text-decoration: none;">
    <a href="#" data-action="Navbar Atas" style="background-color: #01b140; color: #fff; border-radius: 3px;font-weight:bold;" target="_blank">JalanBarengGrab</a>
    <div id="beacon_7df43aa5ec" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="#" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div></ins> <ins data-labelname="navbar3" data-revive-zoneid="1391" data-revive-id="0cceecb9cae9f51a31123c541910d59b" data-revive-seq="4" id="revive-0-4" data-revive-loaded="1" style="text-decoration: none;"><div id="beacon_64359fdb64" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="#" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div></ins> </div>
   </div>

