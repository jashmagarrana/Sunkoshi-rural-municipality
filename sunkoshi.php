
<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location:login.php");
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