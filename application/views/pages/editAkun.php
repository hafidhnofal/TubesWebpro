<html>
    <head>
        <title>Edit Akun</title>

        <link href="<?php echo base_url();?>asset/images/headerProfile/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link href="<?php echo base_url();?>asset/css/headerProfile/detikframe.style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>asset/css/headerProfile/connectdash.style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>asset/css/headerProfile/connectdash.new.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>asset/css/headerProfile/detik.topbar_new.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>asset/css/connectdash.pop.css" rel="stylesheet" type="text/css">
    </head>
<body>
<div class="pop_container"><div id="pop_wrap" style="height: 640px; width: 680px;">
    <div class="content">
        <div class="header">
            Informasi Dasar <a href="<?php echo base_url();?>login/view_dashboard" class="close_box_in close_pc"> <span>+</span> </a>
        </div>

        <div class="bodi">
            <form action="#" method="post" enctype="multipart/form-data" class="form1"><input type="hidden" name="csrfmiddlewaretoken" value="">
                <div class="r1"> Nama Lengkap</div>
                <div class="r2">
                    <input type="text" name="name" value="<?php echo $user['nama'];?>" required="" maxlength="25">
                </div>
                <div class="r3">
                    <select name="privacy[name]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Gender</div>
                <div class="r2">
                    
                        <input required="" type="radio" name="sex" value="male" checked=""> Pria &nbsp; &nbsp;
                        <input required="" type="radio" name="sex" value="female"> Wanita
                    
                </div>
                <div class="r3">
                    <select name="privacy[sex]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Usia</div>
                <div class="r2">
                    <select id="id_birthdate_day" name="birthdate_day" style="width: 50px;">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14" selected="selected">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select id="id_birthdate_month" name="birthdate_month" style="width: 150px;">
<option value="1">Januari</option>
<option value="2">Februari</option>
<option value="3" selected="selected">Maret</option>
<option value="4">April</option>
<option value="5">Mei</option>
<option value="6">Juni</option>
<option value="7">Juli</option>
<option value="8">Agustus</option>
<option value="9">September</option>
<option value="10">Oktober</option>
<option value="11">November</option>
<option value="12">Desember</option>
</select>
<select id="id_birthdate_year" name="birthdate_year" style="width: 100px;">
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999" selected="selected">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
</select>
                </div>
                <div class="r3">
                    <select name="privacy[age]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Tentang Saya</div>
                <div class="r2">
                    <textarea cols="40" id="id_description" name="description" rows="2"></textarea>
                </div>
                <div class="r3">
                    <select name="privacy[about]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Website</div>
                <div class="r2"><input id="id_website" name="website" type="text"></div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Alamat</div>
                <div class="r2">
                    <textarea cols="40" id="id_address" name="address" rows="2"></textarea>
                </div>
                <div class="r3">
                    <select name="privacy[address]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Negara</div>
                <div class="r2">
                    <select id="id_country_id" name="country_id">
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
<option value="ID" selected="selected">Indonesia</option>
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
</select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Provinsi</div>
                <div class="r2">
                    <select id="id_province_id" name="province_id"><option value="<?php echo $user['provinsi'];?>">- Choose Province -</option>
<option value="73">Yogyakarta</option>
<option value="48">Maluku</option>
<option value="40">Lampung</option>
<option value="47">Sumatera Utara</option>
<option value="39">Sumatera Selatan</option>
<option value="31">Sumatera Barat</option>
<option value="55">Sulawesi Utara</option>
<option value="72">Sulawesi Tenggara</option>
<option value="63">Sulawesi Tengah</option>
<option value="35">Sulawesi Selatan</option>
<option value="71">Sulawesi Barat</option>
<option value="59">Singapura</option>
<option value="32">Riau</option>
<option value="70">Papua Barat</option>
<option value="36">Papua</option>
<option value="69">Nusa Tenggara Timur</option>
<option value="68">Nusa Tenggara Barat</option>
<option value="67">Maluku Utara</option>
<option value="457">Kepulauan Riau</option>
<option value="75">Kalimantan Utara</option>
<option value="37">Kalimantan Timur</option>
<option value="66">Kalimantan Tengah</option>
<option value="57">Kalimantan Selatan</option>
<option value="38">Kalimantan Barat</option>
<option value="28">Jawa Timur</option>
<option value="27">Jawa Tengah</option>
<option value="26">Jawa Barat</option>
<option value="21">Jambi</option>
<option value="25">Jakarta</option>
<option value="65">Gorontalo</option>
<option value="61" selected="">Bengkulu</option>
<option value="33">Banten</option>
<option value="74">Bangka Belitung</option>
<option value="34">Bali</option>
<option value="29">Aceh</option>
</select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Kota</div>
                <div class="r2">
                    <select id="id_city_id" name="city_id"><option value="<?php echo $user['kota_asal'];?>">- Pilih -</option>
<option value="256">Bengkulu Selatan</option>
<option value="257">Bengkulu Utara</option>
<option value="90">Kabupaten Lebong</option>
<option value="258">Kaur Tengah</option>
<option value="259">Kepahiang</option>
<option value="260">Lebong Tengah</option>
<option value="261">Muko Muko</option>
<option value="262">Rejang Lebong</option>
<option value="263">Seluma</option>
<option value="42869" selected="">Bengkulu</option>
<option value="42870">Bengkulu Tengah</option>
</select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Kode Pos</div>
                <div class="r2"><input id="id_postal_code" name="postal_code" type="text" value="<?php echo $user['kode_pos'];?>"></div>
                <div class="r3">
                    <select name="privacy[postalcode]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> KTP/SIM/Kartu Pelajar</div>
                <div class="r2">
                    
                        <input type="file" id="fileChooser" class="filestyle" name="ktp" data-text="Choose File" data-placeholder="No File Chosen " onchange="return ValidateFileUpload()" accept="image/*" data-type="image" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle input-group"><div name="filedrag" style="position: absolute; width: 100%; height: 62px; z-index: -1;"></div><input type="text" class="form-control " placeholder="No File Chosen " disabled="" style="border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem;"> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="fileChooser" style="margin-bottom: 0;" class="btn btn-secondary "><span class="buttonText">Choose File</span></label></span></div>
                    
                    </div>
                <div class="r3">
                    <select name="privacy[ktp]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> NPWP (Optional) </div>
                <div class="r2">
                    
                        <input type="file" id="npwpChooser" class="filestyle" name="npwp" data-placeholder="No File Chosen" onchange="return ValidateNpwpUpload()" accept="image/*" data-type="image" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle input-group"><div name="filedrag" style="position: absolute; width: 100%; height: 62px; z-index: -1;"></div><input type="text" class="form-control " placeholder="No File Chosen" disabled="" style="border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem;"> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="npwpChooser" style="margin-bottom: 0;" class="btn btn-secondary "><span class="buttonText">Choose file</span></label></span></div>
                    
                 </div>
                <div class="r3">
                    <select name="privacy[npwp]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>
                <div class="clearfik mbx"></div>
                <div class="r1"> Telepon Selular</div>
                <div class="r2">
                <div class="r2area"><select class="country_code" id="phone_code" name="mobile_phone_country_code" required="">
<option value="1">+1</option>
<option value="1-76">+1-76</option>
<option value="20">+20</option>
<option value="212">+212</option>
<option value="213">+213</option>
<option value="216">+216</option>
<option value="218">+218</option>
<option value="220">+220</option>
<option value="221">+221</option>
<option value="222">+222</option>
<option value="223">+223</option>
<option value="224">+224</option>
<option value="225">+225</option>
<option value="226">+226</option>
<option value="227">+227</option>
<option value="228">+228</option>
<option value="229">+229</option>
<option value="230">+230</option>
<option value="231">+231</option>
<option value="232">+232</option>
<option value="233">+233</option>
<option value="234">+234</option>
<option value="235">+235</option>
<option value="236">+236</option>
<option value="237">+237</option>
<option value="238">+238</option>
<option value="239">+239</option>
<option value="240">+240</option>
<option value="241">+241</option>
<option value="242">+242</option>
<option value="243">+243</option>
<option value="244">+244</option>
<option value="245">+245</option>
<option value="246">+246</option>
<option value="248">+248</option>
<option value="249">+249</option>
<option value="250">+250</option>
<option value="251">+251</option>
<option value="252">+252</option>
<option value="253">+253</option>
<option value="254">+254</option>
<option value="255">+255</option>
<option value="256">+256</option>
<option value="257">+257</option>
<option value="258">+258</option>
<option value="260">+260</option>
<option value="261">+261</option>
<option value="262">+262</option>
<option value="263">+263</option>
<option value="264">+264</option>
<option value="265">+265</option>
<option value="266">+266</option>
<option value="267">+267</option>
<option value="268">+268</option>
<option value="269">+269</option>
<option value="27">+27</option>
<option value="290">+290</option>
<option value="291">+291</option>
<option value="297">+297</option>
<option value="298">+298</option>
<option value="299">+299</option>
<option value="30">+30</option>
<option value="31">+31</option>
<option value="32">+32</option>
<option value="33">+33</option>
<option value="34">+34</option>
<option value="350">+350</option>
<option value="351">+351</option>
<option value="352">+352</option>
<option value="353">+353</option>
<option value="354">+354</option>
<option value="355">+355</option>
<option value="356">+356</option>
<option value="357">+357</option>
<option value="358">+358</option>
<option value="359">+359</option>
<option value="36">+36</option>
<option value="370">+370</option>
<option value="371">+371</option>
<option value="372">+372</option>
<option value="373">+373</option>
<option value="374">+374</option>
<option value="375">+375</option>
<option value="376">+376</option>
<option value="377">+377</option>
<option value="378">+378</option>
<option value="379">+379</option>
<option value="380">+380</option>
<option value="381">+381</option>
<option value="382">+382</option>
<option value="385">+385</option>
<option value="386">+386</option>
<option value="387">+387</option>
<option value="389">+389</option>
<option value="39">+39</option>
<option value="40">+40</option>
<option value="41">+41</option>
<option value="420">+420</option>
<option value="421">+421</option>
<option value="423">+423</option>
<option value="43">+43</option>
<option value="44">+44</option>
<option value="45">+45</option>
<option value="46">+46</option>
<option value="47">+47</option>
<option value="48">+48</option>
<option value="49">+49</option>
<option value="500">+500</option>
<option value="501">+501</option>
<option value="502">+502</option>
<option value="503">+503</option>
<option value="504">+504</option>
<option value="505">+505</option>
<option value="506">+506</option>
<option value="507">+507</option>
<option value="508">+508</option>
<option value="509">+509</option>
<option value="51">+51</option>
<option value="52">+52</option>
<option value="53">+53</option>
<option value="54">+54</option>
<option value="55">+55</option>
<option value="56">+56</option>
<option value="57">+57</option>
<option value="58">+58</option>
<option value="590">+590</option>
<option value="591">+591</option>
<option value="592">+592</option>
<option value="593">+593</option>
<option value="594">+594</option>
<option value="595">+595</option>
<option value="596">+596</option>
<option value="597">+597</option>
<option value="598">+598</option>
<option value="60">+60</option>
<option value="61">+61</option>
<option value="62" selected="selected">+62</option>
<option value="63">+63</option>
<option value="64">+64</option>
<option value="65">+65</option>
<option value="66">+66</option>
<option value="670">+670</option>
<option value="672">+672</option>
<option value="673">+673</option>
<option value="674">+674</option>
<option value="675">+675</option>
<option value="676">+676</option>
<option value="677">+677</option>
<option value="678">+678</option>
<option value="679">+679</option>
<option value="680">+680</option>
<option value="681">+681</option>
<option value="682">+682</option>
<option value="683">+683</option>
<option value="685">+685</option>
<option value="686">+686</option>
<option value="687">+687</option>
<option value="688">+688</option>
<option value="689">+689</option>
<option value="690">+690</option>
<option value="691">+691</option>
<option value="692">+692</option>
<option value="7">+7</option>
<option value="81">+81</option>
<option value="82">+82</option>
<option value="84">+84</option>
<option value="850">+850</option>
<option value="852">+852</option>
<option value="853">+853</option>
<option value="855">+855</option>
<option value="856">+856</option>
<option value="86">+86</option>
<option value="870">+870</option>
<option value="880">+880</option>
<option value="886">+886</option>
<option value="90">+90</option>
<option value="91">+91</option>
<option value="92">+92</option>
<option value="93">+93</option>
<option value="94">+94</option>
<option value="95">+95</option>
<option value="960">+960</option>
<option value="961">+961</option>
<option value="962">+962</option>
<option value="963">+963</option>
<option value="964">+964</option>
<option value="965">+965</option>
<option value="966">+966</option>
<option value="967">+967</option>
<option value="968">+968</option>
<option value="970">+970</option>
<option value="971">+971</option>
<option value="972">+972</option>
<option value="973">+973</option>
<option value="974">+974</option>
<option value="975">+975</option>
<option value="976">+976</option>
<option value="977">+977</option>
<option value="98">+98</option>
<option value="992">+992</option>
<option value="993">+993</option>
<option value="994">+994</option>
<option value="995">+995</option>
<option value="996">+996</option>
<option value="998">+998</option>
</select></div>
                <div class="r2num"><input autofocus="autofocus" class="number_input" data-validation="number" data-validation-allowing="range[0;9]" id="id_mobile_phone" maxlength="16" minlength="6" name="mobile_phone" type="text" value="<?php echo $user['telp'];?>"></div>
                <div class="f_desc">
                    <p>Pastikan nomor yang Anda masukkan dapat menerima SMS yang kami kirimkan</p>
                </div>
                </div>
                         <div class="r3">
                    <select name="privacy[phone]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>

                <div class="clearfik mbx"></div>

                <div class="r1"> Status Pernikahan</div>
                <div class="r2">
                    
                        <input type="radio" name="relation" value="single"> Lajang &nbsp; &nbsp;
                        <input type="radio" name="relation" value="married" checked=""> Menikah
                    
                </div>
                <div class="clearfik mbx"></div>
                <div class="navfoo">
                    <a class="btn_red2" href="<?php echo base_url();?>login/view_editakun">UBAH</a>
                    <a class="btn_blue2" href="<?php echo base_url();?>login/update_user">KEMBALI</a>
                </div>

                <div class="clearfik"></div>
                <input type="hidden" name="next" value=">
            </form>
        </div>

        <div class="clearfik"></div>
    </div>

</div></div>
</body>    
</html>