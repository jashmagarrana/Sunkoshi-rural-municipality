<?php
$con=mysqli_connect('localhost','root','','sunkoshi');
$sql='SELECT *FROM personaldetails';
$res=mysqli_query($con,$sql);
$result=array();
while($row=mysqli_fetch_assoc($res))
{
  $result[]=$row;
}
?>

<?php
$con1=mysqli_connect('localhost','root','','sunkoshi');
$sql1='SELECT *FROM eduorg';
$res1=mysqli_query($con1,$sql1);
$result1=array();
while($row1=mysqli_fetch_assoc($res1))
{
  $result1[]=$row1;
}
?>




<?php
$con6=mysqli_connect('localhost','root','','sunkoshi');
$sql6='SELECT *FROM mega';
$res6=mysqli_query($con6,$sql6);
$result6=array();
while($row6=mysqli_fetch_assoc($res6))
{
  $result6[]=$row6;
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
 <h2 style="color: #0000ff; "><center>Edit Record Page</center></h2>
 
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
  
 <section class="deletetypes">
     <nav class="navbar navbar-expand-lg navbar-light" style="padding: 10px; background-color:#2471A3 ; color: white; width: 100%">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#orgnavbar" aria-controls="orgnavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="orgnavbar" style="padding-left: 110px;">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " id="personal" href="#">Personal Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" id="gov" href="#">Governmental Organization</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" id="ngov" href="#">Non-Governmental Organization</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" id="pvt" href="#">Private Organization</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="edu" href="#">Educational Organization</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" id="heal" href="#">Health Organization</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" id="micro" href="#">Micro/Cottage Industry</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" id="medium" href="#">Medium Industry</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="mega" href="#">Mega Industry</a>
    </li>
  </ul>
</nav>
<br>
<hr>

<div class="personalform" style="width: 100%; position:relative;">
<caption>Personal Details</caption>
<div class="table-responsive">
<table border="4"cellspacing="0" class="table table-hover table-sm">
  <tr class="thead-dark">
    <th colspan="16">Personal Details</th>
    <th colspan="6">Permanent Address</th>
    <th colspan="6">Temporary Address</th>
    <th rowspan="2">Action</th>

  </tr>

    <tr class="thead-dark">
    <th>Id</th>
    <th>Fullname</th>
    <th>Date of Birth</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Blood Group</th>
    <th>Fathername</th>
    <th>Mothername</th>
    <th>Marital Status</th>
    <th>Spouse name</th>
    <th>Mobile Number</th>
    <th>Email</th>
    <th>Occupation</th>
    <th>Nationality</th>
    <th>Citicenship Number</th>
<th>Passport Number</th>
    <th>District</th>
    <th>Province Number</th>
    <th>Zone</th>
    <th>Municipality</th>
    <th>Tole</th>
    <th>Ward Number</th>

    <th>District</th>
    <th>Province Number</th>
    <th>Zone</th>
    <th>Municipality</th>
    <th>Tole</th>
    <th>Ward Number</th>


  </tr>

    <?php foreach ($result as $value){?>
    <tr>
      <td><?php echo $value['personalid'];?></td>
      <td><?php echo $value['fullname'];?></td>
      <td><?php echo $value['dob'];?></td>
      <td><?php echo $value['age'];?></td>
      <td><?php echo $value['gender'];?></td>
<td><?php echo $value['bloodgroup'];?></td>
      <td><?php echo $value['fathername'];?></td>
        <td><?php echo $value['mothername'];?></td>
      <td><?php echo $value['maritalstatus'];?></td>
      <td><?php echo $value['spousename'];?></td>
      <td><?php echo $value['mobilenumber'];?></td>

      <td><?php echo $value['email'];?></td>
      <td><?php echo $value['occupation'];?></td>
      <td><?php echo $value['nationality'];?></td>
      <td><?php echo $value['citizen'];?></td>
<td><?php echo $value['passport'];?></td>

<td><?php echo $value['pdistrict'];?></td>
      <td><?php echo $value['pprovince'];?></td>
      <td><?php echo $value['pzone'];?></td>
      <td><?php echo $value['pmunicipality'];?></td>
      <td><?php echo $value['ptole'];?></td>
      <td><?php echo $value['pward'];?></td>
            <td><?php echo $value['tdistrict'];?></td>
      <td><?php echo $value['tprovince'];?></td>
      <td><?php echo $value['tzone'];?></td>
      <td><?php echo $value['tmunicipality'];?></td>
      <td><?php echo $value['ttole'];?></td>
      <td><?php echo $value['tward'];?></td>     
      <td><a href="editpersonal.php?personalid=<?php echo $value['personalid']?>">Edit</a></td>

</tr>
<?php }?>
</table>

</div>
</div>
<script>
$(document).ready(function(){
  $("#personal").click(function(){
    $(".personalform").toggle();
    $(".ngovform").hide();
    $(".pvtform").hide();
    $(".govform").hide();
    $(".healform").hide();
    $(".eduform").hide();
    $(".microform").hide();
    $(".megaform").hide();
    $(".mediumform").hide();
  });
});
</script>






<div class="eduform" style="width: 100%; display: none; position:relative;">
  <caption>Educational Organizations</caption>
  <div class="table-responsive">
<table border="4"cellspacing="0" class="table table-hover table-sm">
  <tr class="thead-dark">
    <th>Id</th>
    <th>Name</th>
    <th>Principal</th>
    <th>Registration Number</th>
    <th>Date of Establishment</th>
    <th>District</th>
    <th>Province Number</th>
    <th>Zone</th>
    <th>Municipality</th>
    <th>Ward Number</th>
    <th>Telephone</th>
    <th>Email</th>
    <th>Website</th>
    <th>Type</th>
    <th>Category</th>
    <th>Affiliation</th>
    <th>University</th>
    <th>Staff</th>
    <th>Action</th>
  </tr>

    <?php foreach ($result1 as $value1){?>
    <tr>
      <td><?php echo $value1['eduid'];?></td>
      <td><?php echo $value1['name'];?></td>
      <td><?php echo $value1['principal'];?></td>
      <td><?php echo $value1['registration'];?></td>
      <td><?php echo $value1['doe'];?></td>
      <td><?php echo $value1['district'];?></td>
      <td><?php echo $value1['province'];?></td>
      <td><?php echo $value1['zone'];?></td>
      <td><?php echo $value1['municipality'];?></td>
      <td><?php echo $value1['ward'];?></td>
      <td><?php echo $value1['telephone'];?></td>
      <td><?php echo $value1['email'];?></td>
      <td><?php echo $value1['website'];?></td>
      <td><?php echo $value1['type'];?></td>
      <td><?php echo $value1['category'];?></td>
      <td><?php echo $value1['affiliation'];?></td>
      <td><?php echo $value1['university'];?></td>
      <td><?php echo $value1['staff'];?></td>
      <td><a href="educationaledit.php?eduid=<?php echo $value1['eduid']?>">Edit</a></td>

</tr>
<?php }?>
</table>
</div>
</div>
<script>
$(document).ready(function(){
  $("#edu").click(function(){
    $(".eduform").toggle();
    $(".ngovform").hide();
    $(".pvtform").hide();
    $(".govform").hide();
    $(".healform").hide();
    $(".microform").hide();
    $(".megaform").hide();
    $(".mediumform").hide();
    $(".personalform").hide();
  });
});
</script>


<div class="megaform" style="width: 100%; display: none; position:relative;">

  <caption>Mega Industries</caption>
  <div class="table-responsive">
<table border="4"cellspacing="0" class="table table-hover table-sm">
  <tr class="thead-dark">
    <th>Id</th>
    <th>Name</th>
    <th>Owner</th>   
    <th>Registration Number</th>
    <th>Date of Establishment</th>
    <th>District</th>
    <th>Province Number</th>
    <th>Zone</th>
    <th>Municipality</th>
    <th>Ward Number</th>
    <th>Mobile</th>
    <th>Telephone</th>
    <th>Fax</th>
    <th>Website</th>
    <th>Email</th>
    <th>Investment</th>
    <th>Income</th>
    <th>Workers</th>
    <th>Products</th>
    <th>Other</th>
    <th>Action</th>
  </tr>

    <?php foreach ($result6 as $value6){?>
    <tr>
      <td><?php echo $value6['megaid'];?></td>
      <td><?php echo $value6['name'];?></td>
      <td><?php echo $value6['owner'];?></td>
      <td><?php echo $value6['registration'];?></td>
      <td><?php echo $value6['doe'];?></td>
      <td><?php echo $value6['district'];?></td>
      <td><?php echo $value6['province'];?></td>
      <td><?php echo $value6['zone'];?></td>
      <td><?php echo $value6['municipality'];?></td>
      <td><?php echo $value6['ward'];?></td>
      <td><?php echo $value6['mobile'];?></td>
      <td><?php echo $value6['telephone'];?></td>
      <td><?php echo $value6['fax'];?></td>
      <td><?php echo $value6['website'];?></td>
      <td><?php echo $value6['email'];?></td>
      <td><?php echo $value6['investment'];?></td>
      <td><?php echo $value6['income'];?></td>
      <td><?php echo $value6['worker'];?></td>
      <td><?php echo $value6['product'];?></td>
      <td><?php echo $value6['other'];?></td>
      <td><a href="megaedit.php?megaid=<?php echo $value6['megaid']?>">Edit</a></td>

</tr>
<?php }?>
</table>
</div>
</div>
<script>
$(document).ready(function(){
  $("#mega").click(function(){
    $(".megaform").toggle();
    $(".ngovform").hide();
    $(".pvtform").hide();
    $(".govform").hide();
    $(".healform").hide();
    $(".eduform").hide();
    $(".microform").hide();
    $(".mediumform").hide();
    $(".personalform").hide();
  });
});
</script>

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
 <div class="copyright">?? 2019  Sunkoshi Rural Municipality</div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>