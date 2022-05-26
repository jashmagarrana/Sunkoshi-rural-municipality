<?php 
session_start();
  $db = mysqli_connect('localhost', 'root', '', 'sunkoshi');

  // initialize variables
  $name=""; 
  $ministry="";  
  $registration="";  
  $doe="";
  $district=""; 
  $province="";
  $zone="";
  $municipality="";
  $ward="";  
  $executive=""; 
  $telephone="";
  $fax="";
  $website="";
  $email=""; 
  $services=""; 
  $employee=""; 
  $workingfield=""; 
  $president=""; 
  $service=""; 
  $staff=""; 
  $principal="";
  $type="";
  $category="";
  $affiliation="";
  $university="";  
  $specialization="";

  $update = false;
//forgov
  if (isset($_POST['save'])) {


    $name=$_POST['name']; 
    $ministry=$_POST['ministry'];  
    $registration=$_POST['registration'];  
    $doe=$_POST['doe'];
    $district=$_POST['district']; 
    $province=$_POST['province'];
    $zone=$_POST['zone']; 
    $municipality=$_POST['municipality']; 
    $ward=$_POST['ward']; 
    $executive=$_POST['executive'];
    $telephone=$_POST['telephone'];
    $fax=$_POST['fax'];
    $email=$_POST['email']; 
    $website=$_POST['website'];  
    $services=$_POST['services'];
    $employee=$_POST['employee'];


    mysqli_query($db, "INSERT INTO govorg (name, ministry, registration, doe, district,province, zone, municipality, ward,executive, telephone, fax, email, website, services,employee) VALUES ('$name', '$ministry', '$registration', '$doe', '$district', '$province', '$zone', '$municipality', '$ward', '$executive', '$telephone', '$fax','$email', '$website', '$services', '$employee')"); 
    echo "Details saved"; 
 
  }

  //for ngov
  if (isset($_POST['submit'])) {


    $name=$_POST['name']; 
    $workingfield=$_POST['workingfield'];  
    $registration=$_POST['registration'];  
    $doe=$_POST['doe'];
    $district=$_POST['district']; 
    $province=$_POST['province'];
    $zone=$_POST['zone']; 
    $municipality=$_POST['municipality']; 
    $ward=$_POST['ward']; 
    $president=$_POST['president'];
    $telephone=$_POST['telephone'];
    $fax=$_POST['fax'];
    $email=$_POST['email'];  
    $website=$_POST['website'];
    $service=$_POST['service'];
    $staff=$_POST['staff'];


    mysqli_query($db, "INSERT INTO ngovorg (name, workingfield, registration, doe, district,province, zone, municipality, ward,president, telephone, fax, email, website, service,staff) VALUES ('$name', '$workingfield', '$registration', '$doe', '$district', '$province', '$zone', '$municipality', '$ward', '$president', '$telephone', '$fax','$email', '$website', '$service', '$staff')"); 
    echo "Details saved";  
  }

 //for pvt
  if (isset($_POST['insert'])) {


    $name=$_POST['name']; 
    $workingfield=$_POST['workingfield'];  
    $registration=$_POST['registration'];  
    $doe=$_POST['doe'];
    $district=$_POST['district']; 
    $province=$_POST['province'];
    $zone=$_POST['zone']; 
    $municipality=$_POST['municipality']; 
    $ward=$_POST['ward']; 
    $president=$_POST['president'];
    $telephone=$_POST['telephone'];
    $fax=$_POST['fax'];
    $email=$_POST['email'];  
    $website=$_POST['website'];
    $service=$_POST['service'];
    $staff=$_POST['staff'];


    mysqli_query($db, "INSERT INTO privorg (name, workingfield, registration, doe, district,province, zone, municipality, ward,president, telephone, fax, email, website, service,staff) VALUES ('$name', '$workingfield', '$registration', '$doe', '$district', '$province', '$zone', '$municipality', '$ward', '$president', '$telephone', '$fax','$email', '$website', '$service', '$staff')"); 
    echo "Details saved"; 
 
  }

 //for edu
  if (isset($_POST['add'])) {


    $name=$_POST['name']; 
    $principal=$_POST['principal'];  
    $registration=$_POST['registration'];  
    $doe=$_POST['doe'];
    $district=$_POST['district']; 
    $province=$_POST['province'];
    $zone=$_POST['zone']; 
    $municipality=$_POST['municipality']; 
    $ward=$_POST['ward']; 
    $telephone=$_POST['telephone'];
    $email=$_POST['email'];  
    $website=$_POST['website'];
    $type=$_POST['type'];
    $category=$_POST['category'];  
    $affiliation=$_POST['affiliation'];
    $university=$_POST['university'];
    $staff=$_POST['staff'];


    mysqli_query($db, "INSERT INTO eduorg (name, principal, registration, doe, district,province, zone, municipality, ward, telephone, email, website, type,category, affiliation, university,staff) VALUES ('$name', '$principal', '$registration', '$doe', '$district', '$province', '$zone', '$municipality', '$ward', '$telephone', '$email', '$website', '$type','$category','$affiliation','$university', '$staff')"); 
    echo "Details saved"; 
 
  }

   //for health
  if (isset($_POST['ok'])) {


    $name=$_POST['name']; 
    $type=$_POST['type'];
    $specialization=$_POST['specialization'];  
    $registration=$_POST['registration'];  
    $doe=$_POST['doe'];
    $district=$_POST['district']; 
    $province=$_POST['province'];
    $zone=$_POST['zone']; 
    $municipality=$_POST['municipality']; 
    $ward=$_POST['ward']; 
    $president=$_POST['president'];
    $telephone=$_POST['telephone'];
    $fax=$_POST['fax'];
    $email=$_POST['email'];  
    $website=$_POST['website'];
    $staff=$_POST['staff'];


    mysqli_query($db, "INSERT INTO healthorg (name, type, specialization, registration, doe, district,province, zone, municipality, ward,president, telephone, fax, email, website, staff) VALUES ('$name', '$type', '$specialization', '$registration', '$doe', '$district', '$province', '$zone', '$municipality', '$ward', '$president', '$telephone', '$fax','$email', '$website','$staff')"); 
    echo "Details saved"; 
 
  }

  ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/bac272c58a.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sunkoshi.css">
       <link rel="shortcut icon" href="images/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sunkoshi Rural Municipality</title>
  </head>
  <body>
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
    <text style="color: #b83955; font-weight: bold;">Sunkoshi Rural Municipality</text>
    <br><text style="color: #9e0c18;">Sunkoshi, Sindhupalchowk, Province No. 3, Nepal
</text>
  </div>
   <div class="rightt"><a href="#"><img src="http://municipality.gov.np/sites/default/themes/newmun/nepal.gif"></a></div>
 </section>
 <h2 style="color: #0000ff; "><center>Online Data Collection</center></h2>
 
   <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="padding: 20px; background-color:#332629;  width: 100%">
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
   
<section id="notice" style=" color:#0000ff;font-weight: bold; padding-top: 8px; height: 70px; width: 90%; padding-left: 50px;">
      News & Events <marquee behavior="scroll" scrolldelay="80" onmouseover="this.stop();" onmouseout="this.start();">
      <a href="#">आँधीखोला लगायत अन्य खोलाहरुबाट ढुंगा, गिट्टी, बालुवा उत्खनन पूर्ण रुपमा निषेध गरिएको अत्यन्त जरुरी सूचना
कृषि तथा पशुपालनको अनुदानको लागि निवेदन दिने १५ दिने सूचना ।</a>&nbsp;&nbsp;
           <a href="#">ढुंगा,गिट्टी,बालुवा,माटो,चट्टान,दहत्तर,वहत्तरको उत्खनन,संकलन तथा बिक्री वितरण सम्बन्धि आवेदनको लागि सूचना
बहालकर सम्बन्धी तिर्ने सम्बन्धी १५ दिने सूचना ।</a>&nbsp;&nbsp;
           <a href="#">एम.आई.एस अपरेटर र फिल्ड सहायक पद करारमा पदपूर्तिका लागि दरखास्त आव्हानको सूचना</a>&nbsp;&nbsp;
           <a href="#">कार्यालय सहयोगी पदको अन्तिम नतिजा प्रकाशन गरिएको सूचना ।</a>&nbsp;&nbsp;
           <a href="#">कर्मचारी आवश्यकता सम्बन्धी सूचना</a>&nbsp;&nbsp;
           <a href="#">कार्यालय सहयोगी पदको लागि अन्तरवार्ता सम्बन्धी सूचना</a>&nbsp;&nbsp;
           <a href="#">लोक सेवा आयोगको तयारी कक्षा सञ्चालनको लागि आवेदकहरुको अन्तरवार्ता तय गरिएको सूचना</a>&nbsp;&nbsp;
           <a href="#">जनशक्ति आवश्यकता सम्बन्धी सूचना</a>&nbsp;&nbsp;
      </marquee>
</section>


      <div class="memo" style="height: 50px;width: 100%; padding-left:50px">
<p>Please select the form according to your requirement</p>
</div>

 <section class="orgtypes">
     <nav class="navbar navbar-expand-lg navbar-light" style="padding: 10px; background-color:#2C3E50  ; color: white; width: 100%">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#orgnavbar" aria-controls="orgnavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="orgnavbar" style="padding-left: 110px;">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " id="gov" href="#">Governmental Organization</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="ngov" href="#">Non-Governmental Organization</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pvt" href="#">Private Organization</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="edu" href="#">Educational Organization</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="heal" href="#">Health Organization</a>
    </li>
  </ul>
</nav>



  <center><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 70%;">
      <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/4.jpeg" alt="Sindhuli Rural Municipality Office">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/5.jpg" alt="Sindhuli Fort">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/24.jpg" alt="Single Tree">
    </div>
        <div class="carousel-item">
      <img class="d-block w-100" src="images/34.jpg" alt="Beautiful Sindhuli">
    </div>
        <div class="carousel-item">
      <img class="d-block w-100" src="images/39.jpg" alt="Sunkoshi River">
    </div>
   <div class="carousel-item">
      <img class="d-block w-100" src="images/43.jpg" alt="Sunkoshi River">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/48.jpg" alt="Sunkoshi River">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>

<div class="govform" style="width: 100%; display: none; position:relative;">
   <form style="position: relative; padding: 0 150px; font-weight: bold; color:#9e0c18;" action="" method="Post">

          <legend style="margin: 20px 0 10px 0">Governmental Organization Data Collection Form</legend>
    <fieldset style=" border: 3px solid #9e0c18; background: #b4b9c2; width: 100%; margin-bottom: 50px;">
        <div class="form-group">
      <label>Name Of Organization:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter full name of the Organization" id="gorg" required="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Under the Misnistry of:</label>
      <select id="ministry-list" class="form-control" required="" name="ministry">
        <option value="0">--Select--</option>
        <option value="1">Ministry of Education</option>
        <option value="2">Ministry of Science, Technology and Communication</option>
        <option value="3">Ministry of Foreign Affairs</option>
      </select>
    </div>
                <div class="form-group col-md-4">
          <label>Registration No:</label>
    <input type="text" class="form-control" name="registration" required="" placeholder="Enter registration number">
    </div>
        <div class="form-group col-md-4">
          <label>Date of Establishment:</label>
    <input type="Date" class="form-control" name="doe" required="">
    </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
    <label>District:</label>
<select id="district-list" class="form-control" name="district">
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
<option value="Kathmandu">Kathmandu</option>
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
      <label>Province:</label>
      <select id="province-list" name="province" class="form-control">
         <option value="0">--Select Province--</option>
      <option value="Province-1">Province-1</option>
      <option value="Province-2">Province-2</option>
      <option value="Province-3">Province-3</option>
      <option value="Province-4">Province-4</option>
      <option value="Province-5">Province-5</option>
      <option value="Province-6">Province-6</option>
      <option value="Province-7">Province-7</option>
        </select>
    </div>
  </div>
  <div class="form-row">

    <div class="form-group col-md-4">
      <label>Zone:</label>
      <select id="zone-list" name="zone" class="form-control">
        <option value="0">- please select -</option>
    <option value="Mechi">Mechi</option>
<option value="Koshi">Koshi</option>
<option value="Sagarmatha">Sagarmatha</option>
<option value="Janakpur">Janakpur</option>
<option value="Bagmati">Bagmati</option>
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
      <label>Municipality:</label>
      <input type="text" class="form-control" name="municipality" placeholder="Enter the Municipality">
    </div>
    <div class="form-group col-md-2">
      <label>Ward No:</label>
      <input type="text" class="form-control" name="ward" placeholder="Enter Ward">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label>Executive Officer:</label>
      <input type="text" class="form-control" name="executive" placeholder="Enter name of Executive Officer">
    </div>
    <div class="form-group col-md-4">
      <label>Telephone Number:</label>
      <input type="text" class="form-control" name="telephone" placeholder="Enter Telephone Number" required="">
    </div>
    <div class="form-group col-md-4">
      <label>Fax Number:</label>
      <input type="text" class="form-control" name="fax" placeholder="Enter Fax Number">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label>Email:</label>
    <input type="Email"  class="form-control" name="email" placeholder="Enter the email">
  </div>
    <div class="form-group col-md-6">
    <label>Website Address:</label>
    <input type="Website" class="form-control" name="website" placeholder="Enter the Website">
  </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label>Service Provided:</label>
      <textarea class="form-control" row="3" name="services" placeholder="Mention the services provided" required=""></textarea>
    </div>
    <div class="form-group col-md-4">
      <label>No.of Employee:</label>
      <input type="text" class="form-control" name="employee" placeholder="Enter number of workers" required="">
  </div>
  </div>


  <center><button type="submit" class="btn" name="save" class="btn btn-primary">Submit</button></center>

</fieldset>
</form>
</div>
<script>
$(document).ready(function(){
  $("#gov").click(function(){
    $(".govform").toggle();
    $(".ngovform").hide();
    $(".pvtform").hide();
    $(".eduform").hide();
    $(".healform").hide();
  });
});
</script>

<div class="ngovform" style="width: 100%; display: none; position:relative;">
    <form style="position: relative; padding: 0 150px; font-weight: bold; color:#9e0c18;" action="" method="Post">
        <img src="images/capturecorp.jpg" height="100px" width="100%">
          <legend style="margin: 20px 0 10px 0">Non Governmental Organization Data Collection Form</legend>
    <fieldset style=" border: 3px solid #9e0c18; background: #b4b9c2; width: 100%; margin-bottom: 50px;">
        <div class="form-group">
      <label>Name Of Organization:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter full name of the Organization" id="ngorg" required="">
  </div>
  <div class="form-row">
                <div class="form-group col-md-4">
          <label>Working Field:</label>
    <input type="text" class="form-control" name="workingfield" required="" placeholder="Mention Working Field">
    </div>
                <div class="form-group col-md-4">
          <label>Registration No:</label>
    <input type="text" class="form-control" name="registration" required="" placeholder="Enter registration number">
    </div>
        <div class="form-group col-md-4">
          <label>Date of Establishment:</label>
    <input type="Date" name="doe" class="form-control" required="">
    </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
    <label>District:</label>
<select id="district-list" class="form-control" name="district">
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
<option value="Kathmandu">Kathmandu</option>
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
      <label>Province:</label>
      <select id="province-list" class="form-control" name="province">
         <option value="0">--Select Province--</option>
      <option value="Province-1">Province-1</option>
      <option value="Province-2">Province-2</option>
      <option value="Province-3">Province-3</option>
      <option value="Province-4">Province-4</option>
      <option value="Province-5">Province-5</option>
      <option value="Province-6">Province-6</option>
      <option value="Province-7">Province-7</option>
        </select>
    </div>
  </div>
  <div class="form-row">

    <div class="form-group col-md-4">
      <label>Zone:</label>
      <select id="zone-list" class="form-control" name="zone">
        <option value="0">- please select -</option>
    <option value="Mechi">Mechi</option>
<option value="Koshi">Koshi</option>
<option value="Sagarmatha">Sagarmatha</option>
<option value="Janakpur">Janakpur</option>
<option value="Bagmati">Bagmati</option>
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
      <label>Municipality:</label>
      <input type="text" class="form-control" name="municipality" placeholder="Enter the Municipality">
    </div>
    <div class="form-group col-md-2">
      <label>Ward No:</label>
      <input type="text" class="form-control" name="ward" placeholder="Enter Ward">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label>President:</label>
      <input type="text" class="form-control" name="president" placeholder="Enter name of President" required="">
    </div>
    <div class="form-group col-md-4">
      <label>Telephone Number:</label>
      <input type="text" class="form-control" name="telephone" placeholder="Enter Telephone Number" required="">
    </div>
    <div class="form-group col-md-4">
      <label>Fax Number:</label>
      <input type="text" class="form-control" name="fax" placeholder="Enter Fax Number">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label>Email:</label>
    <input type="Email" class="form-control" name="email" placeholder="Enter the email">
  </div>
    <div class="form-group col-md-6">
    <label>Website Address:</label>
    <input type="Website" name="website" class="form-control" placeholder="Enter the Website">
  </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label>Service Provided:</label>
      <textarea class="form-control" row="3" name="service" placeholder="Mention the services provided" required=""></textarea>
    </div>
    <div class="form-group col-md-4">
      <label>No.of Staffs:</label>
      <input type="text" class="form-control" name="staff" placeholder="Enter number of Staffs" required="">
  </div>
  </div>


  <center><button type="submit" class="btn" name="submit" class="btn btn-primary">Submit</button></center>

</fieldset>
</form> 
</div>
<script>
$(document).ready(function(){
  $("#ngov").click(function(){
    $(".ngovform").toggle();
    $(".govform").hide();
    $(".pvtform").hide();
    $(".eduform").hide();
    $(".healform").hide();
  });
});
</script>

<div class="privform" style=" width: 100%; display: none; position:relative;">
   <form style="position: relative; padding: 0 150px; font-weight: bold; color:#9e0c18;" action="" method="Post">
        <img src="images/capturecorp.jpg" height="100px" width="100%">
          <legend style="margin: 20px 0 10px 0">Private Organization Data Collection Form</legend>
    <fieldset style=" border: 3px solid #9e0c18; background: #b4b9c2; width: 100%; margin-bottom: 50px;">
        <div class="form-group">
      <label>Name Of Organization:</label>
      <input type="text" class="form-control"placeholder="Enter full name of the Organization" id="pvt" required="" name="name">
  </div>
  <div class="form-row">
                <div class="form-group col-md-4">
          <label>Working Field:</label>
    <input type="text" class="form-control" required="" placeholder="Mention Working Field" name="workingfield">
    </div>
                <div class="form-group col-md-4">
          <label>Registration No:</label>
    <input type="text" class="form-control" required="" placeholder="Enter registration number" name="registration">
    </div>
        <div class="form-group col-md-4">
          <label>Date of Establishment:</label>
    <input type="Date" class="form-control" name="doe" required="">
    </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
    <label>District:</label>
<select id="district-list" class="form-control" name="district">
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
<option value="Kathmandu">Kathmandu</option>
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
      <label>Province:</label>
      <select id="province-list" class="form-control" name="province">
         <option value="0">--Select Province--</option>
      <option value="Province-1">Province-1</option>
      <option value="Province-2">Province-2</option>
      <option value="Province-3">Province-3</option>
      <option value="Province-4">Province-4</option>
      <option value="Province-5">Province-5</option>
      <option value="Province-6">Province-6</option>
      <option value="Province-7">Province-7</option>
        </select>
    </div>
  </div>
  <div class="form-row">

    <div class="form-group col-md-4">
      <label>Zone:</label>
      <select id="zone-list" class="form-control" name="zone">
        <option value="0">- please select -</option>
    <option value="Mechi">Mechi</option>
<option value="Koshi">Koshi</option>
<option value="Sagarmatha">Sagarmatha</option>
<option value="Janakpur">Janakpur</option>
<option value="Bagmati">Bagmati</option>
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
      <label>Municipality:</label>
      <input type="text" class="form-control" placeholder="Enter the Municipality" name="municipality">
    </div>
    <div class="form-group col-md-2">
      <label>Ward No:</label>
      <input type="text" class="form-control" placeholder="Enter Ward" name="ward">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label>President:</label>
      <input type="text" name="president" class="form-control" placeholder="Enter name of President" required="">
    </div>
    <div class="form-group col-md-4">
      <label>Telephone Number:</label>
      <input type="text" class="form-control" placeholder="Enter Telephone Number" name="telephone" required="">
    </div>
    <div class="form-group col-md-4">
      <label>Fax Number:</label>
      <input type="text" class="form-control" placeholder="Enter Fax Number" name="fax">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label>Email:</label>
    <input type="Email" name="email" class="form-control" placeholder="Enter the email">
  </div>
    <div class="form-group col-md-6">
    <label>Website Address:</label>
    <input type="Website" name="website" class="form-control" placeholder="Enter the Website">
  </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label>Service Provided:</label>
      <textarea class="form-control" row="3" placeholder="Mention the services provided" required="" name="service"></textarea>
    </div>
    <div class="form-group col-md-4">
      <label>No.of Staffs:</label>
      <input type="text" name="staff" class="form-control" placeholder="Enter number of Staffs" required="">
  </div>
  </div>


  <center><button type="submit" name="insert" class="btn" class="btn btn-primary">Submit</button></center>

</fieldset>
</form> 
</div>
<script>
$(document).ready(function(){
  $("#pvt").click(function(){
    $(".privform").toggle();
    $(".govform").hide();
    $(".ngovform").hide();
    $(".pvtform").hide();
    $(".healform").hide();
  });
});
</script>

<div class="eduform" style="width: 100%; display: none; position:relative;">
   <form style="position: relative; padding: 0 150px; font-weight: bold; color:#9e0c18;" action="" method="Post">
        <img src="images/capturecorp.jpg" height="100px" width="100%">
          <legend style="margin: 20px 0 10px 0">Educational Organization Data Collection Form</legend>
    <fieldset style=" border: 3px solid #9e0c18; background: #b4b9c2; width: 100%; margin-bottom: 50px;">
        <div class="form-group">
      <label>Name Of School:</label>
      <input type="text" name="name" class="form-control"placeholder="Enter full name of the school" id="edu" required="">
  </div>
  <div class="form-row">
                <div class="form-group col-md-4">
          <label>Name of Principal:</label>
    <input type="text" name="principal" class="form-control" required="" placeholder="Enter the name of Principal">
    </div>
                <div class="form-group col-md-4">
          <label>Registration No:</label>
    <input type="text" class="form-control" name="registration" required="" placeholder="Enter registration number">
    </div>
        <div class="form-group col-md-4">
          <label>Date of Establishment:</label>
    <input type="Date" name="doe" class="form-control" required="">
    </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
    <label>District:</label>
<select id="district-list" name="district" class="form-control">
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
<option value="Kathmandu">Kathmandu</option>
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
      <label>Province:</label>
      <select id="province-list" name="province" class="form-control">
         <option value="0">--Select Province--</option>
      <option value="Province-1">Province-1</option>
      <option value="Province-2">Province-2</option>
      <option value="Province-3">Province-3</option>
      <option value="Province-4">Province-4</option>
      <option value="Province-5">Province-5</option>
      <option value="Province-6">Province-6</option>
      <option value="Province-7">Province-7</option>
        </select>
    </div>
  </div>
  <div class="form-row">

    <div class="form-group col-md-4">
      <label>Zone:</label>
      <select id="zone-list" name="zone" class="form-control">
        <option value="0">- please select -</option>
    <option value="Mechi">Mechi</option>
<option value="Koshi">Koshi</option>
<option value="Sagarmatha">Sagarmatha</option>
<option value="Janakpur">Janakpur</option>
<option value="Bagmati">Bagmati</option>
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
      <label>Municipality:</label>
      <input type="text" name="municipality" class="form-control" placeholder="Enter the Municipality">
    </div>
    <div class="form-group col-md-2">
      <label>Ward No:</label>
      <input type="text" name="ward" class="form-control" placeholder="Enter Ward">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label>Telephone Number:</label>
      <input type="text" name="telephone" class="form-control" placeholder="Enter Telephone Number" required="">
    </div>
  <div class="form-group col-md-4">
    <label>Email:</label>
    <input type="Email" name="email" class="form-control" placeholder="Enter the email">
  </div>
    <div class="form-group col-md-4">
    <label>Website Address:</label>
    <input type="Website" name="website" class="form-control" placeholder="Enter the Website">
  </div>
</div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label>Type:</label>
      <select id="type" name="type" class="form-control">
        <option value="0">--Select--</option>
        <option value="">Government</option>
        <option value="">Private</option>
        <option value="">Community</option>
      </select>
    </div>
    <div class="form-group col-md-4">
              <label>Category</label>
      <select id="category" class="form-control" name="category">

        <option value="0">--Select--</option>
        <option value="">Pre-Primary Level</option>
        <option value="">Secondary</option>
        <option value="">Intermediate</option>
        <option value="">Diploma</option>
        <option value="">Bachelor's</option>
        <option value="">Master's</option>
        <option value="">PhD</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <text style="color: black; font-size: 13px">For Intermediate, diploma and higher category, select affiliation.</text><br>
      <label>Affiliated to:</label>
      <select id="affiliation" name="affiliation" class="form-control">
        <option value="0">--Select--</option>
        <option value="neb">NEB</option>
        <option value="alvl">A Level</option>
        <option value="ctevt">CTEVT</option>
        <option value="uni">University</option>
      </select>
      <label style="color: black; font-size: 13px">If affiliated to University, then mention the name of university below;</label>
      <input type="text" name="university"class="form-control" placeholder="Enter the name of University">
    </div>
  <div class="form-group col-md-4">
    <label>No.of Staffs</label>
    <input type="text" name="staff" class="form-control" placeholder="Number of teaching & non-teaching staffs">
  </div>

  </div>



  <center><button type="submit" name="add" class="btn" class="btn btn-primary">Submit</button></center>

</fieldset>
</form> 
</div>
<script>
$(document).ready(function(){
  $("#edu").click(function(){
    $(".eduform").toggle();
    $(".govform").hide();
    $(".ngovform").hide();
    $(".pvtform").hide();
    $(".healform").hide();
  });
});
</script>

<div class="healform" style="width: 100%; display: none; position:relative;">
   <form style="position: relative; padding: 0 150px; font-weight: bold; color:#9e0c18;" action="" method="Post">
        <img src="images/capturecorp.jpg" height="100px" width="100%">
          <legend style="margin: 20px 0 10px 0">Health Organization Data Collection Form</legend>
    <fieldset style=" border: 3px solid #9e0c18; background: #b4b9c2; width: 100%; margin-bottom: 50px;">
        <div class="form-group">
      <label>Name Of Health Organization:</label>
      <input type="text" class="form-control"placeholder="Enter full name of the Organization" id="heal" name="name" required="">
  </div>
  <div class="form-row">
                <div class="form-group col-md-6">
          <label>Type:</label>
<select class="form-control" id="health-list" name="type">
  <option value="0">--Select--</option>
  <option value="0">Health Post</option>
  <option value="0">Private Hospital</option>
  <option value="0">Government Hospital</option>
  <option value="0">Medicals & Clinic</option>
</select>
      <label style="color: black; font-size: 13px">If it is specialized hospital, then the type below;</label>
      <input type="text" name="specialization"class="form-control" placeholder="eg:eye, cancer, heart, etc.">
    </div>
                <div class="form-group col-md-3">
          <label>Registration No:</label>
    <input type="text" name="registration" class="form-control" required="" placeholder="Enter registration number">
    </div>
        <div class="form-group col-md-3">
          <label>Date of Establishment:</label>
    <input type="Date" name="doe" class="form-control" required="">
    </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
    <label>District:</label>
<select id="district-list" name="district" class="form-control">
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
<option value="Kathmandu">Kathmandu</option>
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
      <label>Province:</label>
      <select id="province-list" name="province" class="form-control">
         <option value="0">--Select Province--</option>
      <option value="Province-1">Province-1</option>
      <option value="Province-2">Province-2</option>
      <option value="Province-3">Province-3</option>
      <option value="Province-4">Province-4</option>
      <option value="Province-5">Province-5</option>
      <option value="Province-6">Province-6</option>
      <option value="Province-7">Province-7</option>
        </select>
    </div>
  </div>
  <div class="form-row">

    <div class="form-group col-md-4">
      <label>Zone:</label>
      <select id="zone-list" name="zone" class="form-control">
        <option value="0">- please select -</option>
    <option value="Mechi">Mechi</option>
<option value="Koshi">Koshi</option>
<option value="Sagarmatha">Sagarmatha</option>
<option value="Janakpur">Janakpur</option>
<option value="Bagmati">Bagmati</option>
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
      <label>Municipality:</label>
      <input type="text" name="municipality" class="form-control" placeholder="Enter the Municipality">
    </div>
    <div class="form-group col-md-2">
      <label>Ward No:</label>
      <input type="text" name="ward" class="form-control" placeholder="Enter Ward">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label>President:</label>
      <input type="text" name="president" class="form-control" placeholder="Enter name of President" required="">
    </div>
    <div class="form-group col-md-4">
      <label>Telephone Number:</label>
      <input type="text" name="telephone" class="form-control" placeholder="Enter Telephone Number" required="">
    </div>
    <div class="form-group col-md-4">
      <label>Fax Number:</label>
      <input type="text" name="fax" class="form-control" placeholder="Enter Fax Number">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label>Email:</label>
    <input type="Email" name="email" class="form-control" placeholder="Enter the email">
  </div>
    <div class="form-group col-md-6">
    <label>Website Address:</label>
    <input type="Website" name="website" class="form-control" placeholder="Enter the Website">
  </div>
     <div class="form-row">
    <div class="form-group col-md-4">
      <label>No.of Staffs:</label>
      <input type="text" name="staff" class="form-control" placeholder="Enter number of Staffs" required="">
  </div>
  </div>


  <center><button type="submit" name="ok" class="btn" class="btn btn-primary">Submit</button></center>

</fieldset>
</form> 
</div>
<script>
$(document).ready(function(){
  $("#heal").click(function(){
    $(".healform").toggle();
    $(".govform").hide();
    $(".ngovform").hide();
    $(".pvtform").hide();
    $(".eduform").hide();
  });
});
</script>
</section>
        <img src="images/capturecorp.jpg" height="150px" width="100%" style="margin-top: 10px;">
    <section id="where" style="margin-bottom: 20px;">
      <div class="container text-left">
        <h3 style="border-bottom: 3px solid #9e0c18; padding-bottom: 15px; color:#9e0c18; font-weight: bold; ">Public Repesentative</h3>
        <div class="row">
          <div class="col-md-3">
            <img src="images/achyut.jpg" height="150px" width="150px"><br>
           <p>Achyut Rimal</p>  
          <text style="border-top: 2px solid black">Mayor</text><br>
          <text style="border-bottom: 2px solid black">9860558833</text><br>
          <a href="">me_achyut69@gmail.com</a>
          </div>
          <div class="col-md-3">
            <img src="images/jenal.jpg" height="150px" width="150px"><br>
          <p>Jenish Dahal </p>             
            <text style="border-top: 2px solid black">Deputy-Mayor</text><br>
            <text style="border-bottom: 2px solid black">9866019187</text><br>
            <a href="">jenaldhl7@gmail.com</a>
          </div>
          <div class="col-md-3">
            <img src="images/bhandey.jpg" height="150px" width="150px"><br>
            <p>Nabin Bhandari</p>
            <text style="border-top: 2px solid black">Chief Executive Officer</text><br>
            <text style="border-bottom: 2px solid black">9860653703</text><br>
            <a href="">nawbeenbhandari111@gmail.com</a>
          </div>
          <div class="col-md-3">
            <img src="images/rabin.jpg" height="150px" width="150px"><br>
            <p>Rabin K.C.</p>
            <text style="border-top: 2px solid black">Information & Technology Officer</text><br>
            <text style="border-bottom: 2px solid black">9867816889</text><br>
           <a href="">rabinkc35@gmail.com</a>
          </div>
        </div>
      </div>
    </section>


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
 <div class="copyright">© 2019  Sunkoshi Rural Municipality</div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>