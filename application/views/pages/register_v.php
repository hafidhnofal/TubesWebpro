<html class="gr__connect_detik_com"><head>
    <title>Detikid - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script type="text/javascript" src="<?php echo base_url();?>asset/js/register/jquery-min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>asset/js/register/dtkid-controller.min.js"></script>
    <link href="<?php echo base_url();?>asset/css/register/detikid.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url();?>asset/js/register/popup.js?1"></script>
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
				<p class="logo-detikconnect logo_anim" style="visibility: hidden; opacity: 0; transform: translate(0%, 100%) matrix(1, 0, 0, 1, 0, 0);"><img src="<?php echo base_url();?>asset/images/register/logo-detikconnect.png" alt=""></p>
				<p class="logo-detikconnect text_anim" style="visibility: hidden; opacity: 0; transform: translate(0%, -100%) matrix(1, 0, 0, 1, 0, 0);">Berubah Menjadi</p>
				<a href="#" class="clearfix">
					<span class="dtkid__header__logo__sprite--first" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
					<span class="dtkid__header__logo__sprite--two" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
					<span class="dtkid__header__logo__sprite--three" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
					<span class="dtkid__header__logo__sprite--four" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
					<span class="dtkid__header__logo__sprite--five" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
					<span class="dtkid__header__logo__sprite--six" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
					<span class="dtkid__header__logo__sprite--seven" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span>
					<span class="dtkid__header__logo__sprite--eight" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
						Satu Akun Untuk Semua Akses
					</span>
				</a>
			</div>
		</div>
	</div>
        <div class="dtkid__header__bg dtkid__header__bg--right"></div>
        <a href="" class="close_box_in"><span class="icon icon-button_close icon-button_close-dims"></span></a>
    </header>		<section class="dtkid__form text-center">


<form action="<?php echo base_url();?>register/register" id="form__login" method="post" class="clearfix has-validation-callback">
    

    <input type="hidden" name="csrfmiddlewaretoken" value="aP1cfhiuUqBitO5oexcCEw5UM7VxJgT1RzFQz8Gyx3olilEkOkLl6todNxki53Y9">

    <div class="dtkid__form__col">
        <div class="dtkid__form__col__row">
            <fieldset class="dtkid__form__fieldset">
                <label for="">NAMA LENGKAP</label>
                <div class="dtkid__form__fieldset__input--icon">
                    <span class="icon icon-icon_user icon-icon_user-dims"></span>
                    <input data-validation="required" data-validation-error-msg="Nama harus diisi" id="name" min_length="Gunakan nama minimal 5 karakter" name="name" placeholder="Name" type="text">
                </div>
            </fieldset>
            <fieldset class="dtkid__form__fieldset">
                <label for="">EMAIL</label>
                <div class="dtkid__form__fieldset__input--icon">
                    <span class="icon icon-icon_mail_user icon-icon_mail_user-dims"></span>
                    <input autocomplete="off" data-validation="email" data-validation-error-msg="Email belum diisi" id="email" name="email" placeholder="Email" type="email">
                </div>
            </fieldset>
            <fieldset class="dtkid__form__fieldset">
                <label for="">PASSWORD</label>
                <div class="dtkid__form__fieldset__input--icon password-group">
                    <span class="icon icon-icon_lock icon-icon_lock-dims"></span>
                    <input autocomplete="off" class="password-box" data-validation="required" data-validation-error-msg="Password belum diisi" id="password" name="password" placeholder="Password" type="password"><a href="#!" class="password-visibility">
                        <i class="icon icon-icon_password icon-icon_password-dims"></i></a>
                    
                </div>
            </fieldset>
            <fieldset class="dtkid__form__fieldset">
                <label for="">TANGGAL LAHIR</label>
                <div class="dtkid__form__fieldset__input--icon">
                    <span class="icon icon-icon_calendar icon-icon_calendar-dims"></span>
                    <input data-validation="required" data-validation-error-msg="Tanggal Lahir belum diisi" data-validation-help="yyyy-mm-dd" id="date" name="birthday" placeholder="yyyy - mm - dd" type="text" class="has-help-txt">
                </div>
            </fieldset>
        </div>
    </div>
    <div class="dtkid__form__col">
        <div class="dtkid__form__col__row">
            <fieldset class="dtkid__form__fieldset">
                <label for="">JENIS KELAMIN</label>
                <div class="dtkid__form__fieldset__radio clearfix mt10 mb20">
                    <div class="dtkid__form__fieldset__radio__item">
                        <input type="radio" name="sex" value="male" id="pria">
                        <label for="pria">Pria</label>
                    </div>
                    <div class="dtkid__form__fieldset__radio__item">
                        <input type="radio" name="sex" value="female" id="wanita">
                        <label for="wanita">Wanita</label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="dtkid__form__fieldset">
                <label for="">NEGARA</label>
                <div class="dtkid__form__fieldset__input--icon">
                    <span class="icon icon-icon_negara icon-icon_negara-dims"></span>
                    <select class="" id="country" name="country" style="display: none;">
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua dan Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahama</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="NL">Belanda</option>
                        <option value="BY">Belarusia</option>
                        <option value="BE">Belgia</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia dan Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British India</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CG">Congo</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="EC">Ekuador</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FJ">Fiji</option>
                        <option value="PH">Filipina</option>
                        <option value="FI">Finlandia</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="GF">Guyana Perancis</option>
                        <option value="HT">Haiti</option>
                        <option value="VA">Holy See (Kota Vatican)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungaria</option>
                        <option value="IN">India</option>
                        <option value="INDONESIA" selected="selected">Indonesia</option>
                        <option value="IQ">Irak</option>
                        <option value="IR">Iran</option>
                        <option value="IE">Irlandia</option>
                        <option value="IS">Islandia</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italia</option>
                        <option value="JM">Jamaika</option>
                        <option value="JP">Jepang</option>
                        <option value="DE">Jerman</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="NC">Kaledonia Baru</option>
                        <option value="KH">Kamboja</option>
                        <option value="CM">Kamerun</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KY">Kepulauan Cayman</option>
                        <option value="CK">Kepulauan Cook</option>
                        <option value="FO">Kepulauan Faroe</option>
                        <option value="KI">Kiribati</option>
                        <option value="CO">Kolombia</option>
                        <option value="KM">Komoro</option>
                        <option value="KR">Korea Selatan</option>
                        <option value="KP">Korea Utara</option>
                        <option value="HR">Kroasia</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Demokrat Republik</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia, Republik</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MA">Maroko</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="EG">Mesir</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldova, Republik</option>
                        <option value="MC">Monako</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NO">Norwegia</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestina</option>
                        <option value="PA">Panama</option>
                        <option value="CI">Pantai Gading</option>
                        <option value="PG">Papua Nugini</option>
                        <option value="PY">Paraguay</option>
                        <option value="FR">Perancis</option>
                        <option value="TF">Perancis Wilayah Selatan</option>
                        <option value="PE">Peru</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Polandia</option>
                        <option value="PF">Polinesia Perancis</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="CX">Pulau Christmas</option>
                        <option value="CC">Pulau Cocos (Keeling)</option>
                        <option value="FK">Pulau Falkland(Malvinas)</option>
                        <option value="HM">Pulau Heard and Pulau McDonald </option>
                        <option value="MP">Pulau Mariana</option>
                        <option value="MH">Pulau Marshall</option>
                        <option value="NF">Pulau Norfolk</option>
                        <option value="QA">Qatar</option>
                        <option value="CF">Republik African</option>
                        <option value="CZ">Republik Ceko</option>
                        <option value="CD">Republik Congo</option>
                        <option value="DO">Republik Dominican</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian</option>
                        <option value="RW">Rwanda</option>
                        <option value="SH">Saint Helena Dan Tristan Da Cunha</option>
                        <option value="KN">Saint Kitts Dan Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="NZ">Selandia Baru</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="US">United States of America</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.S.</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="GR">Yunani</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
</select><div class="chosen-container chosen-container-single" title="" id="country_chosen" style="width: 286px;"><a class="chosen-single">
  <span>Indonesia</span>
  <div><b></b></div>
</a>
<div class="chosen-drop">
  <div class="chosen-search">
    <input class="chosen-search-input" type="text" autocomplete="off">
  </div>
</div></div>
                </div>
            </fieldset>
            <fieldset class="dtkid__form__fieldset">
                <label for="">KOTA DOMISILI</label>
                <div class="dtkid__form__fieldset__input--icon">
                    <span class="icon icon-icon_building icon-icon_building-dims"></span>
                    <select id="city" name="city">
                        <option value="0">
                            -- Pilih Kota --
                        </option>
                        
                            <option value="Abepura">
                            Abepura
                            </option>
                        
                            <option value="Aceh Barat">
                            Aceh Barat
                            </option>
                        
                            <option value="Aceh Barat Daya">
                            Aceh Barat Daya
                            </option>
                        
                            <option value="Aceh Besar">
                            Aceh Besar
                            </option>
                        
                            <option value="Aceh Jaya">
                            Aceh Jaya
                            </option>
                        
                            <option value="Aceh Selatan">
                            Aceh Selatan
                            </option>
                        
                            <option value="Aceh Singkil">
                            Aceh Singkil
                            </option>
                        
                            <option value="Aceh Tamiang">
                            Aceh Tamiang
                            </option>
                        
                            <option value="Aceh Tengah">
                            Aceh Tengah
                            </option>
                        
                            <option value="Aceh Tenggara">
                            Aceh Tenggara
                            </option>
                        
                            <option value="Aceh Timur">
                            Aceh Timur
                            </option>
                        
                            <option value="Aceh Utara">
                            Aceh Utara
                            </option>
                        
                            <option value="Agam">
                            Agam
                            </option>
                        
                            <option value="Alor">
                            Alor
                            </option>
                        
                            <option value="Ambon">
                            Ambon
                            </option>
                        
                            <option value="Amlapura">
                            Amlapura
                            </option>
                        
                            <option value="Asahan">
                            Asahan
                            </option>
                        
                            <option value="Asmat">
                            Asmat
                            </option>
                        
                            <option value="Badung">
                            Badung
                            </option>
                        
                            <option value="Balangan">
                            Balangan
                            </option>
                        
                            <option value="Balikpapan">
                            Balikpapan
                            </option>
                        
                            <option value="Banda Aceh">
                            Banda Aceh
                            </option>
                        
                            <option value="Bandar Lampung">
                            Bandar Lampung
                            </option>
                        
                            <option value="Bandung">
                            Bandung
                            </option>
                        
                            <option value="Bandung Barat">
                            Bandung Barat
                            </option>
                        
                            <option value="Banggai">
                            Banggai
                            </option>
                        
                            <option value="Banggai Kepulauan">
                            Banggai Kepulauan
                            </option>
                        
                            <option value="Banggai Laut">
                            Banggai Laut
                            </option>
                        
                            <option value="Bangka">
                            Bangka
                            </option>
                        
                            <option value="Bangka Barat">
                            Bangka Barat
                            </option>
                        
                            <option value="Bangkalan">
                            Bangkalan
                            </option>
                        
                            <option value="Bangka Selatan">
                            Bangka Selatan
                            </option>
                        
                            <option value="Bangka Tengah">
                            Bangka Tengah
                            </option>
                        
                            <option value="Bangli">
                            Bangli
                            </option>
                        
                            <option value="Banjar">
                            Banjar
                            </option>
                        
                            <option value="42859">
                            Banjar
                            </option>
                        
                            <option value="Banjarbaru">
                            Banjarbaru
                            </option>
                        
                            <option value="Banjarmasin">
                            Banjarmasin
                            </option>
                        
                            <option value="Banjarnegara">
                            Banjarnegara
                            </option>
                        
                            <option value="Banteang">
                            Banteang
                            </option>
                        
                            <option value="Bantul">
                            Bantul
                            </option>
                        
                            <option value="Banyuasin">
                            Banyuasin
                            </option>
                        
                            <option value="Banyumas">
                            Banyumas
                            </option>
                        
                            <option value="Banyuwangi">
                            Banyuwangi
                            </option>
                        
                            <option value="Barito Kuala">
                            Barito Kuala
                            </option>
                        
                            <option value="Barito Selatan">
                            Barito Selatan
                            </option>
                        
                            <option value="Barito Timur">
                            Barito Timur
                            </option>
                        
                            <option value="Barito Utara">
                            Barito Utara
                            </option>
                        
                            <option value="Barru">
                            Barru
                            </option>
                        
                            <option value="Batam">
                            Batam
                            </option>
                        
                            <option value="Batang">
                            Batang
                            </option>

                    </select>
                </div>
            </fieldset>
            <fieldset class="dtkid__form__fieldset tooltip">
                <label for="">TELEPON SELULAR (optional)</label>
                <span class="phone_tooltip">
                    <img src="<?php echo base_url();?>asset/images/register/icon_question.svg" alt="">
                    <p>Dengan mengisi nomor telepon, kami akan mudah menghubungi untuk informasi terupdate dari detikcom</p>
                </span>
                <div class="dtkid__form__fieldset__input--icon phone_number_input">
                <span class="icon icon-icon_smartphone icon-icon_smartphone-dims"></span>
                <select class="choice__chosen" id="phone_code" name="phone_code" style="display: none;">
</select><div class="chosen-container chosen-container-single" title="" id="phone_code_chosen" style="width: 110px;"><a class="chosen-single">
  <span>+62</span>
  <div><b></b></div>
</a>
<div class="chosen-drop">
  <div class="chosen-search">
    <input class="chosen-search-input" type="text" autocomplete="off">
  </div>
  <ul class="chosen-results"></ul>
</div></div>
                <input class="number_only" id="id_phone_number" maxlength="16" minlength="6" name="phone_number" type="text">
                </div>
            </fieldset>
            <fieldset class="dtkid__form__fieldset">
                <div class="dtkid__form__fieldset__checkbox clearfix mt20 mb20">
                    <div class="dtkid__form__fieldset__checkbox__item">
                        <input data-validation="required" data-validation-error-msg="Anda harus menyetujui Syarat &amp; Ketentuan yang berlaku" id="agree" name="agree" type="checkbox">
                        <label for="agree">Saya setuju dengan
                            <a href="/help/syarat" target="_blank">
                                syarat dan ketentuan
                            </a> yang berlaku</label>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="clearfix"></div>
    <input type="submit" onclick="#" class="dtkid__form__btn" value="BUAT AKUN SEKARANG">
</form>
<div class="dtkid__form__bottom">
    <h6>Sudah memiliki Akun? <a href="<?php echo base_url();?>login/v_login">Masuk Sekarang</a></h6>
</div>

<script>
    $(document).ready(function () {
        //$('#phone_code').val('62').trigger('change');
        $('#country').chosen().change(function () {
            var val_country = $(this).val();
            $.ajax({
                //url: base_url + "/js/api/city_by_country?country=" + val_country,
                url: "" + val_country,
                dataType: "json",
                beforeSend: function(){
                    $("#city").empty();
                }
            }).done(function( data ) {
                var total_data = data.length;
                if(total_data > 0 ){
                    $.map( data, function( item ) {
                        $('#city').append('<option value="'+item.id+'">' + item.name + '</option>');
                    });
                }else{
                    $('#city').append('<option value="-">-</option>');
                }
                $("#city").trigger("chosen:updated");
                $("#city").trigger("liszt:updated");
            });
            $.ajax({
                //url: base_url + "/js/api/phone_code_by_country?country=" + val_country,
                url: "https://connect.detik.com/js/api/phone_code_by_country?country=" + val_country,
                dataType: "json",
                beforeSend: function(){
                }
            }).done(function( data ) {
                $('#phone_code').val(data["phone_code"]).trigger('change');
                //console.log(data);
                $("#phone_code").trigger("chosen:updated");
                $("#phone_code").trigger("liszt:updated");
            });
        });
    });

    $(document).ready(function() {
        $(".number_only").keydown(function(event) {
            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
                (event.keyCode == 65 && event.ctrlKey === true) ||
                (event.keyCode >= 35 && event.keyCode <= 39)) {
                return;
            } else {
                if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                    event.preventDefault();
                }
            }
        });

    });

</script>

</section>
</div>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/register/date-registration.js"></script>
<!--E:DETIK ID-->
</body>
</html>