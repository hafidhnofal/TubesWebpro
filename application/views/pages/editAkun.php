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
            <form action="<?php echo base_url();?>user/update_user" method="post" enctype="multipart/form-data" class="form1"><input type="hidden" name="csrfmiddlewaretoken" value="">
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
                    
                        <input required="" type="radio" name="sex" value="Pria" checked=""> Pria &nbsp; &nbsp;
                        <input required="" type="radio" name="sex" value="Wanita"> Wanita
                    
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
                    <textarea cols="40" id="id_description" name="description" rows="2"><?php echo $user['tentang'];?></textarea>
                </div>
                <div class="r3">
                    <select name="privacy[about]">
                        
                            <option value="public">Publik</option>
                            <option value="private" selected="">Hanya Saya</option>
                        
                    </select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Website</div>
                <div class="r2"><input id="id_website" value="<?php echo $user['website'];?>" name="website" type="text"></div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Alamat</div>
                <div class="r2">
                    <textarea cols="40" id="id_address" name="address" rows="2"><?php echo $user['alamat'];?></textarea>
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
<option value="Indonesia" selected="">Indonesia</option>
<option value="Amerika">Amerika</option>
<option value="Malaysia">Malaysia</option>
</select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Provinsi</div>
                <div class="r2">
                    <select id="id_province_id" name="province_id"><option value="<?php echo $user['provinsi'];?>">- Choose Province -</option>
<option value="Jakarta" selected="">Jakarta</option>
<option value="Maluku">Maluku</option>
<option value="Lampung">Lampung</option>
</select>
                </div>
                <div class="clearfik mbx"></div>

                <div class="r1"> Kota</div>
                <div class="r2">
                    <select id="id_city_id" name="city_id"><option value="<?php echo $user['kota_asal'];?>">- Pilih -</option>
<option value="Jakarta" selected="">Jakarta</option>
<option value="Bengkulu Utara">Bengkulu Utara</option>
<option value="Bengkulu" >Bengkulu</option>

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
<option value="62" selected="selected">+62</option>
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
                    
                        <input type="radio" name="relation" value="Lajang" checked=""> Lajang &nbsp; &nbsp;
                        <input type="radio" name="relation" value="Menikah"> Menikah
                    
                </div>
                <div class="clearfik mbx"></div>
                <div class="navfoo">
                    <input type="submit" onclick="#" class="btn_red2" value="UBAH">
                    <input type="submit" href="<?php echo base_url();?>login/view_dashboard" onclick="#" class="btn_blue2" value="KEMBALI">
                    
                </div>

                </form>
        </div>

        <div class="clearfik"></div>
    </div>

</div></div>
</body>    
</html>