<script type="text/javascript" src="asset/js/bodyAktivitas/connect.new.controller.js"></script>
<div id="main">
    <div class="coverheader">
            <img src="<?php echo base_url();?>asset/images/bodyAktivitas/coverheader.jpg" width="100%">
        <div class="footerheader"></div>
    </div>

    <div class="kiri">
        <div class="menu frezz">
            <a href="/dashboard/" title="Dashboard" class="butt_border mr5 home_btn tooltip">
                <img src="<?php echo base_url();?>asset/images/bodyAktivitas/icon_home.png" alt="home">
            </a>
            <!--S:MENU KIRI AREA-->
            <div class="menu_area">

                <div class="user_area2">
                    <div class="profile_pict">
                        <div class="profil_img round">
                            <img src="<?php echo base_url();?>asset/images/headerProfile/foto-default.png">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="nama1">
                    <b><?php echo $user['nama'];?></b>
                    Bergabung sejak : 01 Apr 2019
                    Bengkulu, Indonesia
                </div>

                <div class="aboutme">
                </div>

                <div class="sosmed">
                    <div>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>

                <ul class="menu1">
                    <li class="" id="nav_activity">
                        <a href="<?php echo base_url();?>login/view_aktivitas" class="tooltip" title="Halaman Depan">
                            Aktivitas</a>
                    </li>
                    <li class="" id="nav_profile">
                        <a href="<?php echo base_url();?>login/view_profile" class="tooltip" title="Halaman Profile"> Profil</a>
                    </li>
                    <li class="selected" id="nav_badge">
                        <a href="<?php echo base_url();?>login/view_badge" class="tooltip" title="Halaman Badge">
                            Badge</a>

                        <ul class="list_badge">
                            
                        </ul>
                    </li>
                    <li class="" id="nav_badge">
                        <a href="/dashboard/public/ikancupang1221/badge?" class="tooltip" title="Input Berita Yuuk!">
                            Input Berita</a>    
                        <ul class="list_badge">
                            
                        </ul>
                    </li>
                </ul> <!-- .menu1 -->

                <div class="clearfix"></div>
            </div> <!--.menu_area-->
            <!--E:MENU KIRI AREA-->
        </div>

        <!--S:CONTENT AREA-->
        
        <div class="konten">
        <div class="main_content">
            <div class="jdl_page">
                
                    <?php echo $user['nama'];?>
                
                -detikconnect Badges
            </div>
            <div class="clearfix mt20"></div>
            <p id="desc">
                Ini adalah daftar lencana yang user dapatkan selama berkontribusi di detikcom.
            </p>

            <div class="list_mainbadge">
                <ul id="listBadge">Tidak ada badge yang user miliki.</ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix mt30 paging"></div>
        </div>
    </div>

        <!--E:CONTENT AREA-->
        <div class="clearfix"></div>

    </div><!-- .kiri -->

    <div class="kanan">
        <br>

        <!--S:kanan_area ))))))) -->
        <div class="kanan_area">

            <!-- s:box detik rewards -->
            <div class="box reward" id="boxReward">
                <div class="title">
                    <img src="<?php echo base_url();?>asset/images/bodyAktivitas/logo_detikreward.png" alt="detikRewards">
                </div>
</div>
            <!-- e:box detik rewards -->

            <!-- s:calender -->
            <div class="box event">
                <div class="title"><span>Kalender Event</span></div>

                <div class="bln_title">April 2019<a href="#" class="index">
                    +index </a>
                </div>
                <div class="sub">
                    <ul class="list_berita_1" id="boxEvent">
    
        
            
                <li>
                    <div class="date_title"> , 14 April 2019 </div>
                </li>
                <li>
                    <div class="s1"> 10:00 WIB</div>
                    <div class="s2">Ayo Jadi Bagian dari Campaign Mantap Memilih</div>
                    <div class="s3">
                        <a href="#" class="butt" target="_blank"> Daftar </a>
                    </div>
                    <div class="clearfix"></div>
                </li>
            
        
    
</ul>
                </div>
            </div>
            <!-- e:calender -->

            <!-- s:help -->
            <div class="box help">
                <div class="ratio9_6 box_img">
                    <div class="lqd img_con imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/static/detikconnect/images/img_help.jpg&quot;); background-size: cover; background-position: center top; background-repeat: no-repeat;">
                        <img src="<?php echo base_url();?>asset/images/bodyAktivitas/img_help.jpg" alt="" style="display: none;">
                    </div>
                </div>
                <div class="boks_txt">
                    <span align="center"><h2>Butuh Bantuan?</h2></span>
                    <p>
                        Klik di sini jika Anda masih mempunyai pertanyaan tentang detikconnect
                    </p>
                    <div class="button_bot"><a href="#" target="_blank">
                        klik Disini </a></div>
                </div>
            </div>
            <!-- e:help -->

        </div>
        <!-- E:kanan_area-->
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/detik.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/detik.controller.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/jquery.clingify.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/js/connectdash.controller.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/jquery.fixer.js"></script>
<input id="ext-version" type="hidden" value="1.4.1">