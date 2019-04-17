<div id="main">
    
    <div class="top_header profile_container">
        <div class="profile_versi">
            <span>Lihat profil versi</span>
            <a href="#" class="butt_border">
                <img src="<?php echo base_url();?>asset/images/bodyDashboard/icon_versi.png" alt=""> PUBLIK
            </a>
        </div>
    </div>  
    <form method="post" action="/dashboard/settings/header" id="uploadHeader" style="margin: 0px;" enctype="multipart/form-data"><input type="hidden" name="csrfmiddlewaretoken" value="i3dNsxKEUShhaPctvZyvK9DUY4VjS0981qdGmc3LaFDofHfKbVDIJulYt3sEtezD">
        <div class="coverheader2">
            <div style="position: absolute; right: 0; bottom: 0;z-index:100;display:none;" id="btnHeader">
                <input type="submit" value="Simpan" class="btn" id="saveHeader">
                <input type="reset" value="Batal" class="btn" id="resetHeader">
            </div>
            <img class="cvr" src="<?php echo base_url();?>asset/images/bodyDashboard/coverheader.jpg" width="100%">
            <div id="cvrHdr" data-id=""></div>
            <label style="cursor: pointer;">
                <input name="profileImage" id="imgInp" type="file" style="display: none;" required="">
                <span class="butt_rounded tooltip" title="Ubah Cover Foto">
            <img src="<?php echo base_url();?>asset/images/bodyDashboard/icon_edit.png">
        </span>
            </label>
            <div class="footerheader"></div>
        </div>
        <input type="hidden" name="top" id="topHeader" value="0">
        <input type="hidden" name="width" id="widthHeader" value="1349">
    </form>


    <div class="kiri">
        <div class="menu frezz" style="position: absolute; top: 0px;">
            <a href="/dashboard/" title="Dashboard" class="butt_border mr5 home_btn tooltip">
                <img src="<?php echo base_url();?>asset/images/bodyDashboard/icon_home.png" alt="home">
            </a>
            <!--S:MENU KIRI AREA-->
            <div class="menu_area">

                <div class="user_area2">
                    <form method="post" action="/dashboard/" style="margin: 0px;" enctype="multipart/form-data"><input type="hidden" name="csrfmiddlewaretoken" value="i3dNsxKEUShhaPctvZyvK9DUY4VjS0981qdGmc3LaFDofHfKbVDIJulYt3sEtezD">
                        <div class="profile_pict">
                            <div class="img_act round">
                                <label style="cursor: pointer;">
                                    <input name="profileImage" id="imgInp2" type="file" style="display: none;" required="">
                                    <span class="b_ico_grey bic_edit fl tooltip" title="Edit Profile Picture"></span>
                                </label>
                            </div>
                            <div class="profil_img round">
                                <img src="<?php echo base_url();?>asset/images/bodyDashboard/foto-default.png">
                                <div id="profPic" data-id=""></div>
                            </div>
                            <div class="clearfix"></div>
                            <input type="submit" value="Simpan" class="btn" style="margin: 0px auto; display:none" id="saveProfimg">
                            <input type="reset" value="Batal" class="btn" style="margin: 0px auto; display:none" id="resetProfimg">
                        </div>
                        <input type="hidden" name="next" value="/dashboard?">
                    </form>
                </div>

                <div class="nama1">
                    <b>Ikan Cupang</b>
                    Bergabung sejak : 01 Apr 2019
                    Bengkulu, Indonesia
                </div>

                <div class="aboutme">
                    <div class=""></div>

                    
                </div>

                <div class="points1">
                    <div class="line"></div>
                    <a href="/dashboard/home/activity" class="col ">
                        <div class="colsub">
                            Aktivitas
                            <b id="totAct"> 1 </b>
                        </div>
                    </a>
                    <a href="/dashboard/home/point?" class="col ">
                        <div class="colsub">
                            Poin
                            <b>
                                50
                            </b>

                        </div>
                    </a>
                    <div class="clearfix"></div>
                </div>

                <ul class="menu1">
                    <li class="" id="nav_dashboard">
                        <a href="/dashboard/" class="tooltip" title="Halaman Depan"> Dashboard</a>
                    </li>
                    <li class="selected" id="nav_profile">
                        <a href="/dashboard/settings?" class="tooltip" title="Halaman Profile"> Profil</a>
                        
                            <div class="pl10">
                                <div class="progressBar">
                                    <div class="progressBarContainer">
                                        <div class="progressBarValue value-20"></div>
                                    </div>
                                    25 % untuk mendapatkan poin
                                </div>
                            </div>
                        
                    </li>
                    <li class="" id="nav_badge">
                        <a href="/dashboard/home/badges?" class="tooltip" title="Halaman Badge"> Badge Saya</a>
                    </li>
                    <li class="" id="nav_settings">
                        <a href="/dashboard/settings/akun?" class="tooltip" title="Halaman Setting"> Pengaturan </a>
                        <ul class="list_setting">
                            <li><a href="/dashboard/settings/akun?"> Pengaturan Akun Anda </a></li>
                            <li><a href="/dashboard/settings/social?"> Pengaturan Akun Sosial Media </a></li>
                            <li><a href="/dashboard/settings/privacy?"> Pengaturan Privasi Akun </a></li>
                        </ul>
                    </li>
                    <li class="" id="nav_guides">
                        <a href="/help/guides" class="tooltip" title="Halaman Pedoman Pengguna">Pedoman Pengguna</a>
                    </li>
                </ul> <!-- .menu1 -->

                <div class="clearfix"></div>
            </div> <!--.menu_area-->
            <!--E:MENU KIRI AREA-->
        </div>

        <!--S:CONTENT AREA-->
        
    <div class="konten">
        <div class="main_content">
            <div class="jdl_page"> Profil</div>
            <div class="clearfix mt20"></div>

            
                <div class="bx_nt">
                    Lengkapi profil Anda dan dapatkan poin tambahannya.
                </div>
            

            <div class="datec mt10"> Informasi Akun</div>
            <div class="btn_up">
                <a class="box_modal_full" alt="/dashboard/settings/popup/akun">Ubah</a></div>
            <div class="box profilex">

                <div class="sub">

                    <div class="s1"> Username :</div>
                    <div class="s2"> ikancupang1221</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Email :</div>
                    <div class="s2"> ikancupang1221@gmail.com</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Social Media :</div>
                    <div class="s2">
                        <img src="<?php echo base_url();?>asset/images/bodyDashboard/facebook_iconb.png" height="30px">
                            +Belum Terintegrasi
                        <br>
                        <img src="<?php echo base_url();?>asset/images/bodyDashboard/gplus_iconb.png" height="30px">
                        
                            +Belum Terintegrasi

                        <div class="clearfix mt5"></div>
                    </div>
                    <div class="clearfix mt10"></div>
                </div>

            </div>

            <div class="datec mt10"> Informasi Dasar</div>
            <div class="btn_up">
                <a class="box_modal_full" href="<?php echo base_url();?>login/view_editakun">Ubah</a>
            </div>
            <div class="box profilex">

                <div class="sub">

                    <div class="s1"> Nama Lengkap :</div>
                    <div class="s2"> Ikan Cupang</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Jenis Kelamin :</div>
                    <div class="s2"> Pria</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Usia :</div>
                    <div class="s2"> 20 Tahun</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Tentang Saya:</div>
                    <div class="s2"> </div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Website :</div>
                    <div class="s2"> http://-</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Alamat :</div>
                    <div class="s2"> </div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Negara :</div>
                    <div class="s2"> Indonesia</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Propinsi :</div>
                    <div class="s2"> Bengkulu</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Kota :</div>
                    <div class="s2"> Bengkulu</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Kodepos :</div>
                    <div class="s2"> </div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> KTP/SIM/Kartu Pelajar :</div>
                    
                        <div class="s2">KTP Belum Di-upload</div>
                    
                    <div class="clearfix mt10"></div>

                    <div class="s1"> NPWP :</div>
                    
                        <div class="s2">NPWP Belum Di-upload</div>
                    
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Telepon Seluler :</div>
                    <div class="s2">  +62289378232 &nbsp; &nbsp; &nbsp;
                         <a class="link_red box_modal_full" alt="/dashboard/settings/popup/send_pin">  Verifikasi sekarang</a>
                    
                    </div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Status :</div>
                    <div class="s2"> 
                        Menikah</div>
                    <div class="clearfix mt10"></div>
                </div>
            </div>

            <div class="datec mt10"> Aktivitas dan Minat</div>
            <div class="btn_up"><a class="box_modal_full" alt="/dashboard/settings/popup/minat">Ubah</a></div>
            <div class="box profilex">

                <div class="sub">

                    <div class="s1"> Pendidikan Terakhir :</div>
                    <div class="s2"> Undefined</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Pekerjaan :</div>
                    <div class="s2"> Undefined</div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Hobi :</div>
                    <div class="s2"> </div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Minat :</div>
                    <div class="s2">
                        
                    </div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Kanal Favorit :</div>
                    <div class="s2">
                        
                    </div>
                    <div class="clearfix mt10"></div>

                    <div class="s1"> Pengeluaran :</div>
                    <div class="s2"> </div>
                    <div class="clearfix mt10"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var recipient = button.data('isi')
            var modal = $(this)

            modal.find('.modal-body input').val(recipient)
        })
    </script>

    <script type="text/javascript">
        $('#nav_dashboard').removeClass('selected');
        $('#nav_profile').addClass('selected');
        $('#nav_badge').removeClass('selected');
        $('#nav_settings').removeClass('selected');
        $('#nav_guides').removeClass('selected');
    </script>

    <script>
        function readURL(input, sel) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                if (input.files[0].size > 1048576) {
                    alert('Maksimal image 1 MB');
                    return false;
                }

                reader.onload = function (e) {
                    // if (sel == '.coverheader') {
                    // $(sel).attr('style', "background: #000 url("+e.target.result+") no-repeat scroll left center");
                    // } else {
                    $(sel).attr({'src': e.target.result, 'width': '100%'});
                    // }
                }

                reader.readAsDataURL(input.files[0]);
                return true;
            }
        }

        $("#imgInp").change(function () {
            $('.cover').addClass('cvrhdr');
            $('.footerheader').remove();
            $('.cvrhdr').css('cursor', 'move');
            $("#btnHeader").show();

            var y1 = $('.cvrhdr').height();
            var y2 = $('.cvr').height();

            $(".cvr").draggable({
                scroll: false,
                axis: "y",
                drag: function (event, ui) {
                    if (ui.position.top >= 0) {
                        ui.position.top = 0;
                    }
                    else if (ui.position.top < 0 - (y2 + y1)) {
                        ui.position.top = 0 - (y2 + y1);
                    }
                },
                stop: function (event, ui) {
                    // console.log('y1 '+y1+' y2 '+y2+' top '+ui.position.top);
                    // console.log(ui.position);
                    $("#topHeader").val(ui.position.top);
                }
            });

            readURL(this, '.cvrhdr img.cvr');
        });
        $("#imgInp2").change(function () {
            if (readURL(this, '.profil_img img')) {
                $("#saveProfimg").show();
                $("#resetProfimg").show();
            }
        });
        $("#resetHeader").click(function () {
            $('.cover').removeClass('cvrhdr');
            $('.cvr').attr('src', $('#cvrHdr').attr('data-id'));
            $("#btnHeader").hide();
        });
        $("#resetProfimg").click(function () {
            $('.profil_img img').attr('src', $('#profPic').attr('data-id'));
            $("#saveProfimg").hide();
            $("#resetProfimg").hide();
        });

    </script>



        <!--E:CONTENT AREA-->
        <div class="clearfix"></div>

    </div><!-- .kiri -->

    <div class="kanan">
        <br>
        <!--S:kanan_area-->
        <div class="kanan_area">

            <!-- s:box detik rewards -->
            <div class="box reward" id="boxReward">
                <a href="#" target="_blank">
                    <img src="<?php echo base_url();?>asset/images/bodyDashboard/banner-promo-detikpoint.jpg" alt="detikRewards">
                </a>
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
                    <div class="lqd img_con imgLiquid_bgSize imgLiquid_ready" style="background-image: url(<?php echo base_url();?>asset/images/bodyDashboard/img_help.jpg); background-size: cover; background-position: center top; background-repeat: no-repeat;"><img src="<?php echo base_url();?>asset/images/bodyDashboard/img_help.jpg" style="display: none;"></div>
                </div>
                <div class="boks_txt">
                    <span align="center"><h2>Butuh Bantuan?</h2></span>
                    <p>
                        Klik di sini jika Anda masih mempunyai pertanyaan tentang detikconnect
                    </p>
                    <div class="button_bot">
                        <a href="mailto:connect@detik.com?Subject=Butuh%20bantuan">KLIK DISINI</a>
                    </div>
                </div>
            </div>
            <!-- e:help -->

        </div>
        <!-- E:kanan_area-->
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/detik.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/connectdash.controller.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/headerProfile/jquery.fixer.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/bodyDashboard/connect.new.controller.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/bodyDashboard/jquery-ui.min.js"></script>
<script>
    $("#widthHeader").val($(window).width());
    (function () {
        dconnect.init({'tipe': 'dashboard'});
    }());

    function readURL(input, sel) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            if (input.files[0].size > 1048576) {
                alert('Maksimal image 1 MB');
                return false;
            }

            reader.onload = function (e) {
                // if (sel == '.coverheader') {
                // $(sel).attr('style', "background: #000 url("+e.target.result+") no-repeat scroll left center");
                // } else {
                $(sel).attr({'src': e.target.result, 'width': '100%'});
                // }
            }

            reader.readAsDataURL(input.files[0]);
            return true;
        }
    }

    $("#imgInp").change(function () {
        $('.coverheader2').addClass('cvrhdr');
        $('.footerheader').remove();
        $('.cvrhdr').css('cursor', 'move');
        $("#btnHeader").show();

        var y1 = $('.cvrhdr').height();
        var y2 = $('.cvr').height();

        $(".cvr").draggable({
            scroll: false,
            axis: "y",
            drag: function (event, ui) {
                if (ui.position.top >= 0) {
                    ui.position.top = 0;
                }
                else if (ui.position.top < 0 - (y2 + y1)) {
                    ui.position.top = 0 - (y2 + y1);
                }
            },
            stop: function (event, ui) {
                // console.log('y1 '+y1+' y2 '+y2+' top '+ui.position.top);
                // console.log(ui.position);
                $("#topHeader").val(ui.position.top);
            }
        });

        readURL(this, '.cvrhdr img.cvr');
    });

    $("#imgInp2").change(function () {
        if (readURL(this, '.profil_img img')) {
            $("#saveProfimg").show();
            $("#resetProfimg").show();
        }
    });

    $("#resetHeader").click(function () {
        $('.coverheader2').removeClass('cvrhdr');
        $('.cvr').attr('src', $('#cvrHdr').attr('data-id'));
        $("#btnHeader").hide();
    });

    $("#resetProfimg").click(function () {
        $('.profil_img img').attr('src', $('#profPic').attr('data-id'));
        $("#saveProfimg").hide();
        $("#resetProfimg").hide();
    });

    var base_url = 'connect.detik.com/js',
            maxpointregular = '50';

    $.get('https://' + base_url + '/js/event?format=html', function (data) {
        if (data.html == '')
            txt = 'Belum ada event yang diselenggarakan oleh detikcom.';
        else
            txt = data.html;
        $('#boxEvent').append(txt);
    });

    $('.frezz').fixer({
        gap: 45
    });

</script>
