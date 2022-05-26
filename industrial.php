<?php 
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'sunkoshi');

  // initialize variables
  $name=""; 
  $owner="";  
  $registration="";  
  $doe="";
  $district=""; 
  $province="";
  $zone="";
  $municipality="";
  $ward="";  
  $mobile=""; 
  $telephone="";
  $fax="";
  $email=""; 
  $investment=""; 
  $income=""; 
  $workers=""; 
  $products=""; 
  $other=""; 
  

  $update = false;

  if (isset($_POST['save'])) {


    $name=$_POST['name']; 
    $owner=$_POST['owner'];  
    $registration=$_POST['registration'];  
    $doe=$_POST['doe'];
    $district=$_POST['district']; 
    $province=$_POST['province'];
    $zone=$_POST['zone']; 
    $municipality=$_POST['municipality']; 
    $ward=$_POST['ward']; 
    $mobile=$_POST['mobile'];
    $telephone=$_POST['telephone'];
    $fax=$_POST['fax']; 
    $email=$_POST['email']; 
    $investment=$_POST['investment'];
    $income=$_POST['income'];
    $workers=$_POST['workers']; 
    $products=$_POST['products'];
    $other=$_POST['other'];


    mysqli_query($db, "INSERT INTO micro (name, owner, registration, doe, district,province, zone, municipality, ward,mobile, telephone, fax, email, investment,income, workers ,products,other) VALUES ('$name', '$owner', '$registration', '$doe', '$district', '$province', '$zone', '$municipality', '$ward', '$mobile', '$telephone', '$fax', '$email', '$investment', '$income', '$workers', '$products', '$other')"); 
    echo "Details saved"; 
 
  }
  ?>

<?php 
  $db = mysqli_connect('localhost', 'root', '', 'sunkoshi');

  // initialize variables
  $name=""; 
  $owner="";  
  $registration="";  
  $doe="";
  $district=""; 
  $province="";
  $zone="";
  $municipality="";
  $ward="";  
  $mobile=""; 
  $telephone="";
  $fax="";
  $website="";
  $email=""; 
  $investment=""; 
  $income=""; 
  $worker=""; 
  $product=""; 
  $other=""; 
  

  $update = false;

  if (isset($_POST['submit'])) {


    $name=$_POST['name']; 
    $owner=$_POST['owner'];  
    $registration=$_POST['registration'];  
    $doe=$_POST['doe'];
    $district=$_POST['district']; 
    $province=$_POST['province'];
    $zone=$_POST['zone']; 
    $municipality=$_POST['municipality']; 
    $ward=$_POST['ward']; 
    $mobile=$_POST['mobile'];
    $telephone=$_POST['telephone'];
    $fax=$_POST['fax']; 
    $website=$_POST['website'];
    $email=$_POST['email']; 
    $investment=$_POST['investment'];
    $income=$_POST['income'];
    $worker=$_POST['worker']; 
    $product=$_POST['product'];
    $other=$_POST['other'];


    mysqli_query($db, "INSERT INTO medium (name, owner, registration, doe, district,province, zone, municipality, ward,mobile, telephone, fax, website, email, investment,income, worker,product,other) VALUES ('$name', '$owner', '$registration', '$doe', '$district', '$province', '$zone', '$municipality', '$ward', '$mobile', '$telephone', '$fax','$website', '$email', '$investment', '$income', '$worker', '$product','$other')"); 
    echo "Details saved"; 
 
  }
  ?>

<?php 
  $db = mysqli_connect('localhost', 'root', '', 'sunkoshi');

  // initialize variables
  $name=""; 
  $owner="";  
  $registration="";  
  $doe="";
  $district=""; 
  $province="";
  $zone="";
  $municipality="";
  $ward="";  
  $mobile=""; 
  $telephone="";
  $fax="";
  $website="";
  $email=""; 
  $investment=""; 
  $income=""; 
  $worker=""; 
  $product=""; 
  $other=""; 
  

  $update = false;

  if (isset($_POST['insert'])) {


    $name=$_POST['name']; 
    $owner=$_POST['owner'];  
    $registration=$_POST['registration'];  
    $doe=$_POST['doe'];
    $district=$_POST['district']; 
    $province=$_POST['province'];
    $zone=$_POST['zone']; 
    $municipality=$_POST['municipality']; 
    $ward=$_POST['ward']; 
    $mobile=$_POST['mobile'];
    $telephone=$_POST['telephone'];
    $fax=$_POST['fax']; 
    $website=$_POST['website'];
    $email=$_POST['email']; 
    $investment=$_POST['investment'];
    $income=$_POST['income'];
    $worker=$_POST['worker']; 
    $product=$_POST['product'];
    $other=$_POST['other'];


    mysqli_query($db, "INSERT INTO mega (name, owner, registration, doe, district,province, zone, municipality, ward,mobile, telephone, fax, website, email, investment,income, worker,product,other) VALUES ('$name', '$owner', '$registration', '$doe', '$district', '$province', '$zone', '$municipality', '$ward', '$mobile', '$telephone', '$fax','$website', '$email', '$investment', '$income', '$worker', '$product','$other')"); 
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

   
   <div class="memo" style="height: 50px;width: 100%">
 <center><p style="padding: 10px 0; font-weight: bold; width: 50%; color:#21618C;">Choose the type of scale industry that you want to keep the records.</p></center>
 </div>
 
 <section class="industrytypes">
     <nav class="navbar navbar-expand-lg navbar-light" style="padding: 10px; background-color:#332629; color: white; width: 100%">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#industrynavbar" aria-controls="industrynavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="industrynavbar">
  <ul class="navbar-nav ml-left" style="padding-right: 100px; padding-left: 100px">
    <li class="nav-item">
      <a class="nav-link " id="sscale" href="#" style="padding-left: 100px;">Cottage & Micro-Scale Industry</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="mscale" href="#" style="padding-left: 100px;">Medium-Scale Industry</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="lscale" href="#" style="padding-left: 100px;">Mega-Scale Industry</a>
    </li>
  </ul>
</div>
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

<div class="smallform" style="width: 100%; display: none; position:relative;">
  <form style="position: relative; padding: 0 150px; font-weight: bold; color:#9e0c18;" action="" method="post">



    <fieldset style=" border: 3px solid #9e0c18; background: #b4b9c2; width: 100%; margin-bottom: 50px;">
        <div class="form-group">
      <label>Name Of Industry:</label>
      <input type="text" class="form-control"placeholder="Enter full name of the industry" name="name" required="" id="sname">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Owned by:</label>
      <input type="text" class="form-control" name="owner" placeholder="Enter name of Owner">
    </div>
                    <div class="form-group col-md-4">
          <label>Registration No:</label>
    <input type="text" class="form-control" required="" name="registration" placeholder="Enter registration number">
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
      <label>Mobile Number:</label>
      <input type="text" class="form-control" placeholder="Enter your Mobile Number" name="mobile">
    </div>
    <div class="form-group col-md-4">
      <label>Telephone Number:</label>
      <input type="text" class="form-control" placeholder="Enter Telephone Number" required="" name="telephone"> 
    </div>
    <div class="form-group col-md-4">
      <label>Fax Number:</label>
      <input type="text" class="form-control" placeholder="Enter Fax Number" name="fax">
    </div>
  </div>

    <div class="form-group col-md-6">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter the email">
  </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label>Investment Amount:</label>
<select class="form-control" id="invest" name="investment">
  <option value="0">--Select--</option>
  <option value="1">Below 1 lakh</option>
  <option value="25">1 lakh-5 lakhs</option>
  <option value="50">5 lakhs-25 lakhs</option>
  <option value="2">25 lakhs-50 lakhs</option>
  <option value="5">50 lakhs-1 crore</option>
</select>
    </div>
    <div class="form-group col-md-6">
      <label>Annual Income:</label>
      <input type="text" class="form-control" name="income" placeholder="Enter Annual Income of industry" required="">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label>No.of Workers:</label>
      <input type="text" class="form-control" placeholder="Enter number of workers" name="workers" required="">
    </div>
  </div>
    <label>Manufactured Products:</label>
  <div class="checkbox" style=" color: black; background: white; margin:0 550px 0 0px;">
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" name="products" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">BISCUITS, CUPCAKES, BAKERIES</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="products">
  <label class="form-check-label" for="defaultCheck1">PAPER NAPKINS, TOILET ROLLS & FACIAL TISSUE</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="products">
  <label class="form-check-label" for="defaultCheck1">POTATO CHIPS</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="products">
  <label class="form-check-label" for="defaultCheck1">CANDLE MAKING UNIT</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="products">
  <label class="form-check-label" for="defaultCheck1">MILK PROCESSING AND DAIRY ITEMS</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="products">
  <label class="form-check-label" for="defaultCheck1">EXERCISE NOTE BOOK,PENCILS,ERASERS AND REGISTER</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="products">
  <label class="form-check-label" for="defaultCheck1">OTHERS</label>
</div>
</div>
 <div class="form-group">
    <input type="text" class="form-control" name="other" placeholder="if others, please specify the product" style="border: 2px solid black; border-radius:4px;">
  </div>

  <center><button type="submit" class="btn" class="btn btn-primary" name="save">Sign in</button></center>

</fieldset>
</form>
</div>
<script>
$(document).ready(function(){
  $("#sscale").click(function(){
    $(".smallform").toggle();
    $(".mediumform").hide();
    $(".largeform").hide();
  });
});
</script>



<div class="mediumform" style="width: 100%; display: none; position:relative;">
    <form style="position: relative; padding: 0 150px; font-weight: bold; color:#9e0c18;" action="" method="post">
        <img src="images/capturecorp.jpg" height="100px" width="100%">
    <fieldset style=" border: 3px solid #9e0c18; background: #b4b9c2; width: 100%; margin-bottom: 50px;">
        <div class="form-group">
      <label>Name Of Industry:</label>
      <input type="text" class="form-control"placeholder="Enter full name of the industry" id="mname" name="name" required="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Owned by:</label>
      <input type="text" class="form-control" name="owner" placeholder="Enter name of Owner">
    </div>
                    <div class="form-group col-md-4">
          <label>Registration No:</label>
    <input type="text" class="form-control" required="" name="registration" placeholder="Enter registration number">
    </div>
        <div class="form-group col-md-4">
          <label>Date of Establishment:</label>
    <input type="Date" class="form-control" required="" name="doe">
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
      <label>Mobile Number:</label>
      <input type="text" class="form-control" name="mobile" placeholder="Enter your Mobile Number">
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
    <label>Website Address:</label>
    <input type="Website" name="website" class="form-control" placeholder="Enter the website">
  </div>
    <div class="form-group col-md-6">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter the email">
  </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label>Investment Amount:</label>
<select class="form-control" id="invest" name="investment">
  <option value="0">--Select--</option>
  <option value="1">1 crore-2.5 crores</option>
  <option value="25">2.5 crores-5 crores</option>
  <option value="50">5 crores-7.5 crores</option>
  <option value="2">7.5 crores-10 crores</option>
  <option value="5">10 crores-15 crores</option>
</select>
    </div>
    <div class="form-group col-md-6">
      <label>Annual Income:</label>
      <input type="text" class="form-control" name="income" placeholder="Enter Annual Income of industry" required="">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label>No.of Workers:</label>
      <input type="text" class="form-control" name="worker" placeholder="Enter number of workers" required="">
    </div>
  </div>
    <label>Manufactured Products:</label>

   <div class="checkbox" style=" color: black; background: white; margin:0 550px 0 0px;">
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" name="product">
  <label class="form-check-label">a jute mill</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" name="product">
  <label class="form-check-label">sugar mill</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" name="product">
  <label class="form-check-label">processed  mineral water</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" name="product">
  <label class="form-check-label">cigarette factory</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" name="product">
  <label class="form-check-label">garment factory</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" name="product">
  <label class="form-check-label">others</label>
</div>
</div>
 <div class="form-group">
    <input type="text" class="form-control" name="other" placeholder="if others, please specify the product" style="border: 2px solid black; border-radius:4px;">
  </div>

  <center><button type="submit" class="btn" class="btn btn-primary" name="submit">Submit</button></center>

</fieldset>
</form>
</div>
<script>
$(document).ready(function(){
  $("#mscale").click(function(){
    $(".mediumform").toggle();
    $(".smallform").hide();
    $(".largeform").hide();
  });
});
</script>



<div class="largeform" style=" width: 100%; display: none; position:relative;">
    <form style="position: relative; padding: 0 150px; font-weight: bold; color:#9e0c18;" action="" method="post">
        <img src="images/capturecorp.jpg" height="100px" width="100%">
    <fieldset style=" border: 3px solid #9e0c18; background: #b4b9c2; width: 100%; margin-bottom: 50px;">
        <div class="form-group">
      <label>Name Of Industry:</label>
      <input type="text" class="form-control"placeholder="Enter full name of the industry" name="name" id="lname" required="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Owned by:</label>
      <input type="text" class="form-control" name="owner" placeholder="Enter name of Owner">
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
      <label>Mobile Number:</label>
      <input type="text" class="form-control" name="mobile" placeholder="Enter your Mobile Number">
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
    <label>Website Address:</label>
    <input type="Website" name="website" class="form-control" placeholder="Enter the website">
  </div>
    <div class="form-group col-md-6">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter the email">
  </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label>Investment Amount:</label>
<select class="form-control" id="invest" name="investment">
  <option value="0">--Select--</option>
  <option value="1">15 crores-25 crores</option>
  <option value="25">25 crores-50 crores</option>
  <option value="50">50crores-75 crores</option>
  <option value="2">75 crores-100 crores</option>
  <option value="5">Above 100 crores</option>
</select>
    </div>
    <div class="form-group col-md-6">
      <label>Annual Income:</label>
      <input type="text" class="form-control" name="income" placeholder="Enter Annual Income of industry" required="">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label>No.of Workers:</label>
      <input type="text" class="form-control" name="worker" placeholder="Enter number of workers" required="">
    </div>
  </div>
    <label>Manufactured Products:</label>
      <div class="checkbox" style=" color: black; background: white; margin:0 550px 0 0px;">
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="product">
  <label class="form-check-label" for="defaultCheck1">metal industry</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="product">
  <label class="form-check-label" for="defaultCheck1">tea industry</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="product">
  <label class="form-check-label" for="defaultCheck1">cement industry</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">bevrages industry</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="product">
  <label class="form-check-label" for="defaultCheck1">automobile industry</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="product">
  <label class="form-check-label" for="defaultCheck1">Telecommunications</label>
</div>
  <div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="product">
  <label class="form-check-label" for="defaultCheck1">others</label>
</div>
</div>
 <div class="form-group">
    <input type="text" class="form-control" name="other" placeholder="if others, please specify the product" style="border: 2px solid black; border-radius:4px;">
  </div> 

  <center><button type="submit" class="btn" class="btn btn-primary" name="insert">Sign in</button></center>

</fieldset>
</form>
</div>
<script>
$(document).ready(function(){
  $("#lscale").click(function(){
    $(".largeform").toggle();
    $(".mediumform").hide();
    $(".smallform").hide();
  });
});
</script>
</section>
 <center><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 95%;">
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
      <img class="d-block w-100" src="images/homeimage.jpg" alt="Sindhuli Rural Municipality Office">
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

<section class="body" style="padding: 20px 50px;">


 
    
  

  <div class="row">
      <div class="col-md-6">
  <legend style="border-bottom: 3px solid #0000ff;color: black; font-size: 15px; font-weight: bold; padding-bottom: 10px;"><text style="color:#0000ff;">Welcome to Official Website of Sunkoshi Rural Municipality(Area 149 sq.km)</text></legend>
  </text>
  <p>Sunkoshi Rural Municipality (Nepali: सुनकोशी गाउँपालिका) is a rural municipality in Sindhupalchowk District of Province No. 3 in Nepal. According to the 2011 Nepal census, the total population of the municipality is 16713 and total area of the municipality is 72.84 square kilometres (28.12 sq mi).The Rural municipality is divided into 7 wards and the headquarter of the municipality is located at Pangretar.</p>
  <P>
  The rural municipality was established on March 10, 2017 when Ministry of Federal Affairs and Local Development dissolved the existing village development committees and announced the establishment of this new local body.</P>
  <p>
  Thokarpa, Kalika, Thumpakhar, Sunkhani, Yamunadanda and Pangretar VDCs were merged to form the new rural municipality. </p>
  <p> Map of Sindhupalchowk District </p>
  <img src="images/district5.png" height="150px" width="150px">
  </div>
<div class="col-md-4">
  <legend style="border-bottom: 3px solid #0000ff;color: black; font-size: 15px; font-weight: bold; padding-bottom: 10px;"><text style="color:#0000ff;">News and Notices</text></legend>
  
  <legend style="color: black; font-size: 15px; font-weight: bold; padding-bottom: 10px;"><u>बजेट तथा कार्यक्रम</u></legend>
    <p> आ.व ०७६/७७ बार्षिक नीति, कार्यक्रम तथा बजेट<br>
       मिति: 10/26/2019 - 12:27<br>
    <p> आ.व ०७५/७६ बार्षिक नीति, कार्यक्रम तथा बजेट<br>
       मिति: 09/30/2018 - 14:12<br>
    <p> दाेश्राे संशाेधित गाँउसभा<br>
        मिति: 03/06/2018 - 16:33<br>
    
  <legend style="color: black; font-size: 15px; font-weight: bold; padding-bottom: 10px;"><u>योजना तथा परियोजना</u></legend>
  <p> वार्षिक गाउँ विकास योजना ०७४।७५<br>
      मिति: 06/27/2018 - 11:39<br>
  
   <legend style="color: black; font-size: 15px; font-weight: bold; padding-bottom: 10px;"><u>सार्वजनिक खरिद/बोलपत्र सूचना</u></legend>
    <p> क्याटलग/ ब्रोसर सपिङ्ग विधिबाट सवारी साधन पिकअप खरिद सम्बन्धी सिलबन्दी प्रस्ताव आव्हानको सूचना<br>
       मिति: 12/10/2019 - 11:45<br>
    <p> Electronic items खरिद सम्वन्धि बोलपत्र आव्हानको सूचना ।<br>
      मिति: 11/19/2019 - 14:01<br>
    <p> आन्तरिक कर संकलन सम्बन्धि दरभाउपत्र आब्हानको सूचना<br>
       मिति: 07/28/2019 - 11:34<br>
    <legend style="color: black; font-size: 15px; font-weight: bold; padding-bottom: 10px;"><u>योजना तथा परियोजना</u></legend>
  <p> सिलबन्दी बोलपत्र आव्हानको सूचना (Installation of Optical Fibre Internet))<br>
      मिति: 06/27/2018 - 11:39<br>    


  
  </p>
</div>
<div class="col-md-2">
  <legend style="border-bottom: 3px solid #0000ff;color: black; font-size: 15px; font-weight: bold; padding-bottom: 10px;"><text style="color:#0000ff;">Elected Members </text></legend>
<img src="images/el1.jpg" height="150px" width="150px"><br>
           <p>Rajesh Hamal</p>  
          <text style="border-top: 2px solid black">नगर प्रमुख</text><br>
          <text style="border-bottom: 2px solid black">Phone No: 98314432</text><br>
          <a href="">Gmail:dairajesh23@gmail.com</a>
         
           <img src="images/el5.jpg" height="150px" width="150px"><br>
          <p>Rabi Lamichhane </p>             
            <text style="border-top: 2px solid black">उप– प्रमुख</text><br>
            <text style="border-bottom: 2px solid black">Phone No:9842444</text><br>
            <a href="">Gmail:rabilamichhane44@gmail.com</a>
          
          <img src="images/el3.jpg" height="150px" width="150px"><br>
            <p>Prithivi Subba Gurung</p>
            <text style="border-top: 2px solid black">  वडा सदस्य</text><br>
            <text style="border-bottom: 2px solid black">Phone No:987373737</text><br>
            <a href="">subba75@gmail.com</a>
          </div>


</div>
</div>
</section>

   
  <section class="sidfix">
    <div class="sidfix1"><a href="http://sunkoshimunsindhuli.gov.np/faq"><i class="fa fa-question-circle" style="padding-left: 10px;"></i></a>
        <span class="tooltiptext">FAQs</span>

    </div>
    <div class="sidfix2"><a href="http://sunkoshimunsindhuli.gov.np/grievance"><i class="fa fa-comments" style="padding-left: 10px;"></i></a>
       <span class="tooltiptext">Complain</span>
    </div>
    <div class="sidfix3"><a href="http://sunkoshimunsindhuli.gov.np/problem-registration"><i class="fa fa-exclamation-circle" style="padding-left: 10px;"></i></a>
      <span class="tooltiptext">Problems</span></div>
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
        <label>Notices</label>
       <ul>
          <li><a href="">Acts & General Regulations
           </a></li>
          <li><a href="">Annual Plan & Roadmaps</a></li>
          <li><a href="">Citizen Charter / Facility & City tax</a></li>
          <li><a href="">Public Procurement/ Tender Notices</a></li>
          <li><a href="">News & Events</a></li>
        </ul>
        </ul>
      </div>
      <div class="col-md-3">
        <label>Office location</label>
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
        <label>Developer Details</label>
        <ul>
          <li><img src="images/jashc.jpg" height="100px;" width="100px;"></li>
          <li style="font-size: 20px; font-weight: bold;">Jash Rana</li>
          <li><a href="">jashrana57@gmail.com</a></li>
          <li>Phone:+977 9816604863</li>
        </ul>
      </div>
    </div>
  </div>
 <div class="copyright">© 2019  Sunkoshi Rural Municipality</div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>