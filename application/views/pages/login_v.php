<html class="gr__connect_detik_com">
<head>
<title>Detikconnect - Sign In</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="<?php echo base_url();?>asset/js/login/jquery-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/login/dtkid-controller.min.js"></script>
<link href="<?php echo base_url();?>asset/css/login/detikid.css" rel="stylesheet" type="text/css">
</head>
<body data-gr-c-s-loaded="true">
<div class="modal__bg"></div>
<div class="dtkid">

<header class="dtkid__header animation" style="background-color: rgb(73, 134, 242);">
    <div class="dtkid__header__bg dtkid__header__bg--left"></div>
    <div class="dtkid__header__logo">
    <a href="#" class="sprite sprite-logo_detik" style="visibility: hidden; opacity: 0; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);"></a>
    <a href="#" class="sprite sprite-logo_cnn" style="visibility: hidden; opacity: 0; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);"></a>
    <a href="#" class="sprite sprite-logo_cnbc" style="visibility: hidden; opacity: 0; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);"></a>
    <a href="#" class="sprite sprite-logo_haibunda" style="visibility: hidden; opacity: 0; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);"></a>
    <div class="dtkid__header__logo__sprite">
        <div class="dtkid__header__logo__sprite--relative">
            <p class="logo-detikconnect logo_anim" style="visibility: hidden; opacity: 0; transform: translate(0%, 100%) matrix(1, 0, 0, 1, 0, 0);"><img src="<?php echo base_url();?>asset/images/login/logo-detikconnect.png" alt=""></p>
            <p class="logo-detikconnect text_anim" style="visibility: hidden; opacity: 0; transform: translate(0%, -100%) matrix(1, 0, 0, 1, 0, 0);">Berubah Menjadi</p>
            <a href="#" class="clearfix">
                <span class="dtkid__header__logo__sprite--first" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                <span class="dtkid__header__logo__sprite--two" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                <span class="dtkid__header__logo__sprite--three" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                <span class="dtkid__header__logo__sprite--four" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                <span class="dtkid__header__logo__sprite--five" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                <span class="dtkid__header__logo__sprite--six" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                <span class="dtkid__header__logo__sprite--seven" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
                <span class="dtkid__header__logo__sprite--eight" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Satu Akun Untuk Semua Akses
                </span>
            </a>
        </div>
    </div>
</div>
    <div class="dtkid__header__bg dtkid__header__bg--right"></div>
    <a href="<?php echo base_url();?>" class="close_box_in"><span class="icon icon-button_close icon-button_close-dims"></span></a>
</header>		<section class="dtkid__form text-center">

<div class="dtkid__form__col two__col">
<div class="dtkid__form__col__row">
<p>Silahkan masuk untuk melanjutkan aktivitas</p>
<p class="mobile_hide">MASUK DENGAN</p>

<div class="dtkid__form__socmed">
<a onclick="gtmDataLayer('Login', 'Facebook')" href="#" class="dtkid__form__socmed--fb">
    <span class="icon icon-logo_fb icon-logo_fb-dims"></span></a>
    <a onclick="gtmDataLayer('Login', 'Google')" href="#" class="dtkid__form__socmed--gp">
        <span class="icon icon-logo_google icon-logo_google-dims"></span></a>
</div>
<p>ATAU</p>
<form action="<?php echo base_url();?>login/action_login" target="_parent" method="post" id="form__login" class="has-validation-callback">
<input type="hidden" name="csrfmiddlewaretoken">

<fieldset class="dtkid__form__fieldset">
    <label for="">ALAMAT EMAIL</label>
    <div class="dtkid__form__fieldset__input--icon">
        <span class="icon icon-icon_user icon-icon_user-dims"></span>
        <input type="text" name="username" placeholder="Email" data-validation="required" data-validation-error-msg="Username/email atau password yang Anda yang masukan salah">
    </div>
</fieldset>
<fieldset class="dtkid__form__fieldset">
    <label for="">PASSWORD</label>
    <div class="dtkid__form__fieldset__input--icon password-group">
        <span class="icon icon-icon_lock icon-icon_lock-dims"></span>
        <input type="password" name="password" placeholder="Password" data-validation="required" data-validation-error-msg="Username/email atau password yang Anda yang masukan salah" class="password-box" autocomplete="off"><a href="#!" class="password-visibility"><i class="icon icon-icon_password icon-icon_password-dims"></i></a>
        
    </div>
</fieldset>

<button onclick="" class="dtkid__form__btn" value="masuk" method="post">MASUK</button>
</form>
<div class="dtkid__form__bottom">
<a href="#">Lupa Password?</a>
<h6>Belum memiliki Akun?
    <a href="<?php echo base_url();?>register/v_register">Daftar Sekarang</a></h6>
</div>
</div>
</div>

</section>
</div>
</body>
<div>
<div class="gr_-editor gr-iframe-first-load" style="display: none;"><div class="gr_-editor_back"></div><iframe class="gr_-ifr gr-_dialog-content" __idm_frm__="396"></iframe></div>
</div><grammarly-card>
</grammarly-card>
<span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span>
</span>
</html>