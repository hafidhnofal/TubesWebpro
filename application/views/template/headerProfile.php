<html class="gr__connect_detik_com">
    <head>
        <title>
        <?php echo $user['nama'];?> -
        <?php echo $user['email'];?>
        </title>
        
        <link href="<?php echo base_url();?>asset/images/headerProfile/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link href="<?php echo base_url();?>asset/css/headerProfile/detikframe.style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>asset/css/headerProfile/connectdash.style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>asset/css/headerProfile/connectdash.new.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>asset/css/headerProfile/detik.topbar_new.css" rel="stylesheet" type="text/css">
        

    <script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/jquery.autocomplete.js"></script>
    
    <style type="text/css">.imgLiquid img {visibility:hidden}</style>
</head>
<body data-gr-c-s-loaded="true" style="overflow: scroll;">
        <div id="framebar_new">
        <div class="new_container">
            <div class="ico_detik fm_select_area" id="ico_detik">
                <a href="">
                    <img src="<?php echo base_url();?>asset/images/headerProfile/favicon_detikcom.png">
                </a>
            </div>
            <div class="new_search">
                <form method="post" action="#">
                    <input name="query" class="text" placeholder="Cari Berita atau Alamat" type="text">
                    <input name="source" value="dcnav" type="hidden">
                    <input value="" class="btn_s" type="submit">
                </form>
            </div>
            <div class="login_area">
                    <div class="fm_user fm_select_area" id="fm_user">
                    <span class="pic" style="background-image:url(''), url('<?php echo base_url();?>asset/images/headerProfile/foto-default.png');"></span>
                        <span class="name"><?php echo $user['nama'];?></span>
                    </div>
                    <div class="drop_users flot_frame" id="drop_users" style="display: none;">
                        <img src="<?php echo base_url();?>asset/images/headerProfile/frb_arrow_up.png" alt="" class="arrow_kanal">
                        <div class="menu_k">
                            <a href="<?php echo base_url();?>login/view_profile">
                                <img src="<?php echo base_url();?>asset/images/headerProfile/frb_user.png">
                                <span>Profil Saya</span>
                            </a>
                            <a href="<?php echo base_url();?>login/view_dashboard">
                                <img src="<?php echo base_url();?>asset/images/headerProfile/frb_setting.png">
                                <span>Dashboard</span>
                            </a>
                            <a href="<?php echo base_url();?>login/logout">
                                <img src="<?php echo base_url();?>asset/images/headerProfile/frb_logout.png">
                                <span>Keluar</span>
                            </a>
                            <a href="<?php echo base_url();?>">
                                <img src="<?php echo base_url();?>asset/images/headerProfile/favicon_detikcom.png">
                                <span>Detik.com</span>
                            </a>
                        </div>
                    </div>
                
            </div>
            <div style="display: none;" class="drop_kanal flot_frame" id="drop_kanal">
                <div class="menu_k" style="height: 900.8px;"> 
                <a href="#" class="sp" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_pilpres2.png"> <span>detikPemilu</span> <strong>new</strong></a> 
                <a href="#" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_detikcom.png"> <span>detikcom</span></a> 
                <a href="http://news.detik.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_news.png"> <span>detikNews</span></a> 
                <a href="http://finance.detik.com" class="" target="_blank"><img src="//cdn.detik.net.id/libs/dc/v1/image/fmb_finance.png"> <span>detikFinance</span></a> 
                <a href="http://hot.detik.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_hot.png"> <span>detikHot</span></a> 
                <a href="http://inet.detik.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_inet.png"> <span>detikInet</span></a> 
                <a href="http://sport.detik.com" class="" target="_blank"><img src="//cdn.detik.net.id/libs/dc/v1/image/fmb_sport.png"> <span>detikSport</span></a> 
                <a href="http://sport.detik.com/sepakbola" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_sepakbola.png"> <span>Sepakbola</span></a> 
                <a href="http://oto.detik.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_oto.png"> <span>detikOto</span></a> 
                <a href="http://food.detik.com" class="" target="_blank"><img src="//cdn.detik.net.id/libs/dc/v1/image/fmb_food.png"> <span>detikFood</span></a> 
                <a href="http://health.detik.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_health.png"> <span>detikHealth</span></a> 
                <a href="http://wolipop.detik.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_wolipop.png"> <span>Wolipop</span></a> 
                <a href="http://travel.detik.com" class="" target="_blank"><img src="//cdn.detik.net.id/libs/dc/v1/image/fmb_travel.png"> <span>detikTravel</span></a> 
                <a href="https://tv.detik.com/20detik/" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_20detik.png"> <span>20detik</span></a> 
                <a href="http://foto.detik.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_foto.png"> <span>detikFoto</span></a> 
                <a href="https://pasangmata.detik.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_pasangmata.png"> <span>Pasangmata</span></a>
                <a href="http://forum.detik.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_forum.png"> <span>detikForum</span></a> 
                <a href="https://poin.detikshop.com" class="" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_poin.png"> <span>detikPoin</span></a> 
                <a href="#" class="sp" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_adsmart.png"> <span>Adsmart</span> <strong>new</strong></a> 
                <a href="#" class="sp" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_event.png"> <span>Detik Event</span> <strong>new</strong></a> 
                <a href="#" class="sp" target="_blank"><img src="<?php echo base_url();?>asset/images/headerProfile/fmb_haibunda.png"> <span>Haibunda</span> <strong>new</strong></a><div class="clearfix"></div></div></div>
        </div>
    </div>
    
    <script>
        var navLoadMenu = function () {
            $.ajax({
                url: '<?php echo base_url();?>asset/js/wheaderProfile/menu.js',
                jsonp: false,
                jsonpCallback: 'dtkmenu',
                dataType: "jsonp",
                success: function (response) {
                    $('#drop_kanal').append(response[0]);
                    $('.drop_kanal .menu_k').css('height', $(window).height() * 0.8);
                }
            });
        }
        $('#ico_detik').click(function () {
            if (!$('#drop_kanal').find('.menu_k').length)
                navLoadMenu();
    
            if ($("#ico_detik").hasClass("active")) {
                $("#drop_kanal").fadeOut(200);
                $(".ico_detik").removeClass("active");
            }
            else {
                $("#drop_kanal").fadeIn(200);
                $(".ico_detik").addClass("active");
            }
        });
    
        $('#fm_user').click(function () {
            if ($("#fm_user").hasClass("active")) {
                $("#drop_users").fadeOut(200);
                $(".fm_user").removeClass("active");
            }
            else {
                $("#drop_users").fadeIn(200);
                $(".fm_user").addClass("active");
            }
        });
    </script>
</body>