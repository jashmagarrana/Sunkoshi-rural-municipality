<?php 
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'sunkoshi');

  // initialize variables
  $fullname=""; 
  $dob="";  
  $age="";  
  $gender=""; 
  $bloodgroup=""; 
  $fathername=""; 
  $mothername="";
  $maritalstatus=""; 
  $spousename=""; 
  $mobilenumber=""; 
  $telephone="";
  $email=""; 
  $occupation=""; 
  $nationality=""; 
  $citizen=""; 
  $passport=""; 
  $pdistrict=""; 
  $pprovince=""; 
  $pzone=""; 
  $pmunicipality=""; 
  $ptole="";
  $pward=""; 
  $tdistrict=""; 
  $tprovince="";
  $tzone="";
  $tmunicipality="";
  $ttole=""; 
  $tward="";

  $update = false;

  if (isset($_POST['save'])) {


    $fullname=$_POST['fullname']; 
    $dob=$_POST['dob'];  
    $age=$_POST['age'];  
    $gender=$_POST['gender'];
    $bloodgroup=$_POST['bloodgroup']; 
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername']; 
    $maritalstatus=$_POST['maritalstatus']; 
    $spousename=$_POST['spousename']; 
    $mobilenumber=$_POST['mobilenumber'];
    $telephone=$_POST['telephone'];
    $email=$_POST['email']; 
    $occupation=$_POST['occupation']; 
    $nationality=$_POST['nationality'];
    $citizen=$_POST['citizen'];
    $passport=$_POST['passport']; 
    $pdistrict=$_POST['pdistrict'];
    $pprovince=$_POST['pprovince'];
    $pzone=$_POST['pzone']; 
    $pmunicipality=$_POST['pmunicipality'];
    $ptole=$_POST['ptole']; 
    $pward=$_POST['pward']; 
    $tdistrict=$_POST['tdistrict'];
    $tprovince=$_POST['tprovince']; 
    $tzone=$_POST['tzone'];
    $tmunicipality=$_POST['tmunicipality']; 
    $ttole=$_POST['ttole']; 
    $tward=$_POST['tward'];




    mysqli_query($db, "INSERT INTO personaldetails (fullname, dob, age, gender, bloodgroup,fathername, mothername, maritalstatus, spousename,mobilenumber, telephone, email, occupation, nationality ,citizen, passport ,pdistrict, pprovince, pzone, pmunicipality, ptole, pward, tdistrict ,tprovince, tzone, tmunicipality ,ttole ,tward) VALUES ('$fullname', '$dob', '$age',  '$gender', '$bloodgroup', '$fathername', '$mothername', '$maritalstatus', '$spousename', '$mobilenumber', '$telephone', '$email', '$occupation', '$nationality', '$citizen', '$passport', '$pdistrict', '$pprovince', '$pzone', '$pmunicipality', '$ptole', '$pward', '$tdistrict', '$tprovince', '$tzone', '$tmunicipality', '$ttole', '$tward')"); 
    echo "Details saved"; 
 
  }
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/personal.css">
       <link rel="shortcut icon" href="images/logo.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/bac272c58a.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Personal</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">

<section id="top">
   <div class="left">
     <a href="#"><i class="fa fa-facebook-square"></i></a>
     <a href="#"><i class="fa fa-twitter-square"></i></a>
   </div>
   <div class="right">
     <a href="#"><i class="fa fa-envelope">&nbsp;&nbsp;info@sunkoshimunsindhuli.gov.np</i></a>
     <a href="#"><i class="fa fa-phone-square"> &nbsp;&nbsp;01-6924118</i></a>
   </div>
 </section>
 <section id="head">
   <div class="leftt"><a href="sunkoshi.php"><img src="images/logo.png"></a></div>
   <div class="middle">
    <text style="color: #b83955; font-weight: bold;">????????????????????? ???????????????????????????????????????????????? </text>
    <br><text style="color: #9e0c18;">?????????????????? ?????? ??? "???????????? ??????????????? ?????????, ?????????????????? ????????????????????? ?????????????????? ??????????????????"</text>
  </div>
   <div class="rightt"><a href="#"><img src="http://municipality.gov.np/sites/default/themes/newmun/nepal.gif"></a></div>
 </section>
 <h2 style="color: #9e0c18; "><center>Online Data Collection</center></h2>

 <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="padding: 20px; background-color:#9e0c18;  width: 100%">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" style="padding-right: 90px;">
      <li class="nav-item">
      <a class="nav-link" href="sunkoshi.php">HOME</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="aboutus.php">ABOUT US</a>
    </li>
  
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      DATA COLLECTION
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="newentry.php">New Data Entry</a>
        <a class="dropdown-item" href="viewrecord.php">View Recorded Data</a>
        <a class="dropdown-item" href="editrecord.php">Edit Existing Data</a>
        <a class="dropdown-item" href="deleterecord.php">Delete Data</a>
      </div>
    </li>

<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      DATA  REGISTRATION
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="personal.php">Personal</a>
        <a class="dropdown-item" href="organizational.php">Organizational</a>
        <a class="dropdown-item" href="industrial.php">Industrial</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="gallery.php">GALLERY</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="contact.php">CONTACT US</a>
    </li> 
     <li class="nav-item">
      <a class="nav-link" href="login.php">LOG OUT</a>
    </li> 
      </ul>        
  </div>
   </nav>

   <section id="notice" style=" color:#9e0c18;font-weight: bold; padding-top: 8px; height: 70px; width: 90%; padding-left: 50px;">
      NOTICE: <marquee behavior="scroll" scrolldelay="80" onmouseover="this.stop();" onmouseout="this.start();"><a href="#">???????????? ????????????????????? ????????????????????? ???????????????????????? ??????????????? ???</a>&nbsp;&nbsp;
           <a href="#">???????????? ?????????????????? ????????????????????? ?????????????????????????????? ??????????????????????????? ?????????????????? ???????????????????????? ???????????????????????? ???????????????</a>&nbsp;&nbsp;
           <a href="#">??????.??????.?????? ?????????????????? ??? ??????????????? ??????????????? ?????? ?????????????????? ?????????????????????????????? ???????????? ????????????????????? ???????????????????????? ???????????????</a>&nbsp;&nbsp;
           <a href="#">?????????????????? ??????????????? ??????????????????????????? ???????????????????????? ??????????????? ???</a>&nbsp;&nbsp;
           <a href="#">???????????? ?????????????????????????????? ????????? ??????????????????????????? ???????????????????????? ????????????????????????????????? ????????????????????????</a>&nbsp;&nbsp;
           <a href="#">??????????????? ??????????????????????????? ???????????????????????? ????????????????????? ???????????? ?????????????????? ?????????????????? ??????????????? ???</a>&nbsp;&nbsp;
           <a href="#">?????????????????? ??????????????????, ???????????? ?????????????????? ??????????????? ?????????????????? ????????? ????????????????????? ??????????????????????????? ???????????????????????? ??????????????? ???</a>&nbsp;&nbsp;
      </marquee>
</section>


      <img src="images/capturecorp.jpg" height="150px" width="100%" style="margin-top: 10px;">
   <form  id="formgroup" style="position: relative; padding: 0 150px; font-weight: bold; color:#212F3D;" method="POST" action="">

        <legend>Personal Details</legend>
<fieldset style=" border: 3px solid black; background: #E9F7EF; width: 100%; margin-bottom: 50px;">

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Full name</label>
      <input type="text" class="form-control" name="fullname" placeholder="Enter your fullname" required="">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Date of Birth</label>
      <input type="date" name="dob" class="form-control" required="">
    </div>
    <div class="form-group col-md-6">
      <label>Age</label>
      <input type="text" class="form-control" name="age" required="" placeholder="Enter your age">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Gender:</label>
    <input type="radio" name="gender" value="male" required>Male
    <input type="radio" name="gender" value="female" required>Female
    <input type="radio" name="gender" value="others" required>Others
    </div>
    <div class="form-group col-md-6">
      <label>Blood Group</label>
    <select required="" name="bloodgroup">
      <option value="0">--Select Blood Group--</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+" name="bloodgroup">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="0-">O-</option>
      </select>
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Fathername</label>
      <input type="text" class="form-control" name="fathername" placeholder="Enter your father's name" required="">
    </div>
    <div class="form-group col-md-6">
      <label>Mothername</label>
      <input type="text" class="form-control" name="mothername" placeholder="Enter your mother's name" required="">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Marital Status</label>
      <select required="" name="maritalstatus">
      <option value="0">--Select Marital Status--</option>
      <option value="Single" name="maritalstatus">Single</option>
      <option value="Married">Married</option>
      <option value="Separated">Separated</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>Spouse Name</label>
      <input type="text" class="form-control" name="spousename" placeholder="Enter your Spouse's name">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Mobile Number</label>
      <input type="text" class="form-control" name="mobilenumber" placeholder="Enter your Mobile Number">
    </div>
    <div class="form-group col-md-6">
      <label>Telephone Number</label>
      <input type="text" class="form-control" name="telephone" placeholder="Enter your Telephone Number">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-12">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter your E-mail">
  </div>
</div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Occupation</label>
      <input type="text" name="occupation" class="form-control" placeholder="Enter your occupation">
    </div>
    <div class="form-group col-md-6">
      <label>Nationality</label>
<select id="country_list" required="" name="nationality">
         <option value="0">- please select -</option>
          <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal" name="nationality">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
    </select>
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Citizenship Number</label>
      <input type="text" name="citizen" class="form-control" placeholder=" ">
    </div>
    <div class="form-group col-md-6">
      <label>Passport Number</label>
      <input type="text" name="passport" class="form-control" placeholder=" ">
    </div>
  </div> 
  </fieldset>

    <legend>Permanent Address</legend>
<fieldset style="width: 100%; border: 3px solid #9e0c18; background: #b4b9c2; margin-bottom: 50px;">

    <div class="form-row">
    <div class="form-group col-md-6">
      <label>District</label>
<select id="district_list" name="pdistrict">
    <option value="0">- please select -</option>
    <option value="Achham">Achham</option>
<option value="Arghakhanchi">Arghakhanchi</option>
<option value="Baglung">Baglung</option>
<option value="Baitadi">Baitadi</option>
<option value="Bajhang">Bajhang</option>
<option value="Bajura">Bajura</option>
<option value="Banke">Banke</option>
<option value="Bara">Bara</option>
<option value="Bardiya">Bardiya</option>
<option value="Bhaktapur">Bhaktapur</option>
<option value="Bhojpur">Bhojpur</option>
<option value="Chitwan">Chitwan</option>
<option value="Dadeldhura">Dadeldhura</option>
<option value="Dailekh">Dailekh</option>
<option value="Dang">Dang</option>
<option value="Darchula">Darchula</option>
<option value="Dhading">Dhading</option>
<option value="Dhankuta">Dhankuta</option>
<option value="Dhanusa">Dhanusa</option>
<option value="Dolakha">Dolakha</option>
<option value="Dolpa">Dolpa</option>
<option value="Doti">Doti </option>
<option value="Gorkha">Gorkha</option>
<option value="Gulmi">Gulmi</option>
<option value="Humla">Humla</option>
<option value="Ilam">Ilam</option>
<option value="Jajarkot">Jajarkot</option>
<option value="Jhapa">Jhapa</option>
<option value="Jumla">Jumla</option>
<option value="Kailali">Kailali</option>
<option value="Kalikot">Kalikot</option>
<option value="Kanchanpur">Kanchanpur</option>
<option value="Kapilvastu">Kapilvastu</option>
<option value="Kaski">Kaski</option>
<option value="Kathmandu" name="pdistrict">Kathmandu</option>
<option value="Kavrepalanchok">Kavrepalanchok</option>
<option value="Khotang">Khotang</option>
<option value="Lalitpur">Lalitpur</option>
<option value="Lamjung">Lamjung</option>
<option value="Mahottari">Mahottari</option>
<option value="Makwanpur">Makwanpur</option>
<option value="Manang">Manang</option>
<option value="Morang">Morang</option>
<option value="Mugu">Mugu</option>
<option value="Mustang">Mustang</option>
<option value="Myagdi">Myagdi</option>
<option value="Nawalpur">Nawalpur</option>
<option value="Nuwakot">Nuwakot</option>
<option value="Okhaldhunga">Okhaldhunga</option>
<option value="Palpa">Palpa</option>
<option value="Panchthar">Panchthar</option>
<option value="Parasi">Parasi</option>
<option value="Parbat">Parbat</option>
<option value="Parsa">Parsa</option>
<option value="Pyuthan">Pyuthan</option>
<option value="Ramechhap">Ramechhap</option>
<option value="Rasuwa">Rasuwa</option>
<option value="Rautahat">Rautahat</option>
<option value="Rolpa">Rolpa</option>
<option value="Rukum Purba">Rukum Purba</option>
<option value="Rukum Paschim">Rukum Paschim</option>
<option value="Rupandehi">Rupandehi</option>
<option value="Salyan">Salyan</option>
<option value="Sankhuwasabha">Sankhuwasabha</option>
<option value="Saptari">Saptari</option>
<option value="Sarlahi">Sarlahi</option>
<option value="Sindhuli">Sindhuli</option>
<option value="Sindhupalchok">Sindhupalchok</option>
<option value="Siraha">Siraha</option>
<option value="Solukhumbu">Solukhumbu</option>
<option value="Sunsari">Sunsari Surkhet</option>
<option value="Syangja">Syangja</option>
<option value="Tanahu">Tanahu</option>
<option value="Taplejung">Taplejung</option>
<option value="Terhathum">Terhathum</option>
<option value="Udayapur">Udayapur</option> 
  </select>
    </div>
    <div class="form-group col-md-6">
 <label>Province Number:</label>
    <select id="province" required="" name="pprovince">
      <option value="0">--Select Province--</option>
      <option value="Province-1">Province-1</option>
      <option value="Province-2">Province-2</option>
      <option value="Province-3" name="pprovince">Province-3</option>
      <option value="Province-4">Province-4</option>
      <option value="Province-5">Province-5</option>
      <option value="Province-6">Province-6</option>
      <option value="Province-7">Province-7</option>      
    </select>
    </div>
  </div>

      <div class="form-row">
    <div class="form-group col-md-6">
    <label>Zone:</label>
    <select id="zone_list" required="" name="pzone">
    <option value="0">- please select -</option>
    <option value="Mechi">Mechi</option>
<option value="Koshi">Koshi</option>
<option value="Sagarmatha">Sagarmatha</option>
<option value="Janakpur">Janakpur</option>
<option value="Bagmati" name="pzone">Bagmati</option>
<option value="Narayani">Narayani</option>
<option value="Ghandki">Gandaki</option>
<option value="Lumbini">Lumbini</option>
<option value="Dhaulagiri">Dhaulagiri</option>
<option value="Rapti">Rapti</option>
<option value="Bheri">Bheri</option>
<option value="Karnali">Karnali</option>
<option value="Seti">Seti</option>
<option value="Mahakali">Mahakali</option>
  </select>
    </div>
        <div class="form-group col-md-6">
    <label>Municipility/VDC:</label>
    <input type="text" placeholder="Enter municipility name" name="pmunicipality" required>
    </div>
  </div>

      <div class="form-row">
    <div class="form-group col-md-6">
    <label>Tole:</label>
    <input type="text" placeholder="Enter tole name" name="ptole" required>
    </div>
    <div class="form-group col-md-6">
    <label>Ward Number:</label>
    <input type="text" placeholder="Enter ward number" name="pward" required>
    </div>
  </div>
  </fieldset>

    <legend>Present Address</legend>
 
<fieldset style="width: 100%; border: 3px solid #9e0c18; background: #b4b9c2; margin-bottom: 50px;">

    <div class="form-row">
    <div class="form-group col-md-6">
      <label>District</label>
<select id="district_list" required="" name="tdistrict">
    <option value="0">- please select -</option>
    <option value="Achham">Achham</option>
<option value="Arghakhanchi">Arghakhanchi</option>
<option value="Baglung">Baglung</option>
<option value="Baitadi">Baitadi</option>
<option value="Bajhang">Bajhang</option>
<option value="Bajura">Bajura</option>
<option value="Banke">Banke</option>
<option value="Bara">Bara</option>
<option value="Bardiya">Bardiya</option>
<option value="Bhaktapur">Bhaktapur</option>
<option value="Bhojpur">Bhojpur</option>
<option value="Chitwan">Chitwan</option>
<option value="Dadeldhura">Dadeldhura</option>
<option value="Dailekh">Dailekh</option>
<option value="Dang">Dang</option>
<option value="Darchula">Darchula</option>
<option value="Dhading">Dhading</option>
<option value="Dhankuta">Dhankuta</option>
<option value="Dhanusa">Dhanusa</option>
<option value="Dolakha">Dolakha</option>
<option value="Dolpa">Dolpa</option>
<option value="Doti">Doti </option>
<option value="Gorkha">Gorkha</option>
<option value="Gulmi">Gulmi</option>
<option value="Humla">Humla</option>
<option value="Ilam">Ilam</option>
<option value="Jajarkot">Jajarkot</option>
<option value="Jhapa">Jhapa</option>
<option value="Jumla">Jumla</option>
<option value="Kailali">Kailali</option>
<option value="Kalikot">Kalikot</option>
<option value="Kanchanpur">Kanchanpur</option>
<option value="Kapilvastu">Kapilvastu</option>
<option value="Kaski">Kaski</option>
<option value="Kathmandu" name="tdistrict">Kathmandu</option>
<option value="Kavrepalanchok">Kavrepalanchok</option>
<option value="Khotang">Khotang</option>
<option value="Lalitpur">Lalitpur</option>
<option value="Lamjung">Lamjung</option>
<option value="Mahottari">Mahottari</option>
<option value="Makwanpur">Makwanpur</option>
<option value="Manang">Manang</option>
<option value="Morang">Morang</option>
<option value="Mugu">Mugu</option>
<option value="Mustang">Mustang</option>
<option value="Myagdi">Myagdi</option>
<option value="Nawalpur">Nawalpur</option>
<option value="Nuwakot">Nuwakot</option>
<option value="Okhaldhunga">Okhaldhunga</option>
<option value="Palpa">Palpa</option>
<option value="Panchthar">Panchthar</option>
<option value="Parasi">Parasi</option>
<option value="Parbat">Parbat</option>
<option value="Parsa">Parsa</option>
<option value="Pyuthan">Pyuthan</option>
<option value="Ramechhap">Ramechhap</option>
<option value="Rasuwa">Rasuwa</option>
<option value="Rautahat">Rautahat</option>
<option value="Rolpa">Rolpa</option>
<option value="Rukum Purba">Rukum Purba</option>
<option value="Rukum Paschim">Rukum Paschim</option>
<option value="Rupandehi">Rupandehi</option>
<option value="Salyan">Salyan</option>
<option value="Sankhuwasabha">Sankhuwasabha</option>
<option value="Saptari">Saptari</option>
<option value="Sarlahi">Sarlahi</option>
<option value="Sindhuli">Sindhuli</option>
<option value="Sindhupalchok">Sindhupalchok</option>
<option value="Siraha">Siraha</option>
<option value="Solukhumbu">Solukhumbu</option>
<option value="Sunsari">Sunsari Surkhet</option>
<option value="Syangja">Syangja</option>
<option value="Tanahu">Tanahu</option>
<option value="Taplejung">Taplejung</option>
<option value="Terhathum">Terhathum</option>
<option value="Udayapur">Udayapur</option> 
  </select>
    </div>
    <div class="form-group col-md-6">
 <label>Province Number:</label>
    <select id="province" required="" name="tprovince">
      <option value="0">--Select Province--</option>
      <option value="Province-1">Province-1</option>
      <option value="Province-2">Province-2</option>
      <option value="Province-3" name="tprovince">Province-3</option>
      <option value="Province-4">Province-4</option>
      <option value="Province-5">Province-5</option>
      <option value="Province-6">Province-6</option>
      <option value="Province-7">Province-7</option>      
    </select>
    </div>
  </div>

      <div class="form-row">
    <div class="form-group col-md-6">
    <label>Zone:</label>
    <select id="zone_list" required="" name="tzone">
    <option value="0">- please select -</option>
    <option value="Mechi">Mechi</option>
<option value="Koshi">Koshi</option>
<option value="Sagarmatha">Sagarmatha</option>
<option value="Janakpur">Janakpur</option>
<option value="Bagmati" name="tzone">Bagmati</option>
<option value="Narayani">Narayani</option>
<option value="Ghandki">Gandaki</option>
<option value="Lumbini">Lumbini</option>
<option value="Dhaulagiri">Dhaulagiri</option>
<option value="Rapti">Rapti</option>
<option value="Bheri">Bheri</option>
<option value="Karnali">Karnali</option>
<option value="Seti">Seti</option>
<option value="Mahakali">Mahakali</option>
  </select>
    </div>
        <div class="form-group col-md-6">
    <label>Municipility/VDC:</label>
    <input type="text" placeholder="Enter municipility name" name="tmunicipality" required>
    </div>
  </div>

      <div class="form-row">
    <div class="form-group col-md-6">
    <label>Tole:</label>
    <input type="text" placeholder="Enter tole name" name="ttole" required>
    </div>
    <div class="form-group col-md-6">
    <label>Ward Number:</label>
    <input type="text" placeholder="Enter ward number" name="tward" required>
    </div>
  </div>
</fieldset>

  <center><button class="submit" type="submit" name="save">Submit</button></center>
</form>

<section class="bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <label>Reports</label>
        <ul>
          <li><a href="">Annual Progress Report</a></li>
          <li><a href="">Trimester Progress Report</a></li>
          <li><a href="">Public Hearing</a></li>
          <li><a href="">Public Audit</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <label>Map for office location</label>
       <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=sunkoshi%20rural%20municipality&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/"></a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:300px;}</style></div>
      </div>
      <div class="col-md-3" id="contact">
        <label style="padding-left: 30px;">Contact</label>
        <ul>
          <li>Sunkoshi Rural Municipality</li>
          <li>Municipality Office</li>
          <li>Phone:+977-01-1234567,7654321</li>
          <li>Email:<a href="">info@sunkoshimunsindhuli.gov.np,<br>ito.sunkoshimunsindhuli@gmail.com</a></li>
          <li>Address: Ramtar, Sindhuli</li>
        </ul>
      </div>
      <div class="col-md-3" id="info">
        <label>Information Officer</label>
        <ul>
          <li><img src="images/me.jpg" height="100px;" width="100px;"></li>
          <li style="font-size: 20px; font-weight: bold;">Sachin Khatri</li>
          <li><a href="">Email:sachinkhatri53@gmail.com</a></li>
          <li>Phone:+977 9860673427</li>
        </ul>
      </div>
    </div>
  </div>
 <div class="copyright">?? 2019  Sunkoshi Rural Municipality</div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>