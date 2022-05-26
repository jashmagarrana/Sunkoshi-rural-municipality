
<?php
$eduid=$_GET['eduid'];
$con1=mysqli_connect('localhost','root','','sunkoshi');
if ($_POST) {
  $name=$_POST['name']; $principal=$_POST['principal']; $registration=$_POST['registration']; $doe=$_POST['doe'];  $district=$_POST['district'];  $province=$_POST['province'];  $zone=$_POST['zone'];  $municipality=$_POST['municipality'];  $ward=$_POST['ward'];  $telephone=$_POST['telephone']; $email=$_POST['email'];  $website=$_POST['website'];  $type=$_POST['type'];  $category=$_POST['category'];  $affiliation=$_POST['affiliation'];  $university=$_POST['university'];  $staff=$_POST['staff'];

  $sql1="UPDATE eduorg SET name='$name',principal='$principal', registration='$registration',doe='$doe',district='$district',province='$province',zone='$zone',municipality='$municipality',ward='$ward',telephone='$telephone',email='$email',website='$website',type='$type',category='$category',affiliation='$affiliation',university='$university',staff='$staff' WHERE eduid=$eduid";
  $res1=mysqli_query($con1,$sql1);
  if ($res1) {
    echo "Update Succesful";
  }
  else
    echo "Failed";
}
$sql1="SELECT *FROM eduorg WHERE eduid=$eduid";
$res1=mysqli_query($con1,$sql1);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/organizational.css">
       <link rel="shortcut icon" href="images/logo.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/bac272c58a.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>

   <form style="position: relative; padding: 0 150px; font-weight: bold; color:#21618C;" method="post" action="">

          <legend style="margin: 20px 0 10px 0">Educational Organization Data Collection Form</legend>
    <fieldset style=" border: 3px solid #212F3D; background: #E9F7EF; width: 100%; margin-bottom: 50px;">
        <div class="form-group">
      <label>Name Of School:</label>
      <input type="text" class="form-control"placeholder="Enter full name of the school" id="edu" name="name"1>
  </div>
  <div class="form-row">
                <div class="form-group col-md-4">
          <label>Name of Principal:</label>
    <input type="text" class="form-control" name="principal" placeholder="Enter the name of Principal">
    </div>
                <div class="form-group col-md-4">
          <label>Registration No:</label>
    <input type="text" class="form-control"  name="registration" placeholder="Enter registration number">
    </div>
        <div class="form-group col-md-4">
          <label>Date of Establishment:</label>
    <input type="Date" class="form-control"  name="doe">
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
      <label>Telephone Number:</label>
      <input type="text" class="form-control" placeholder="Enter Telephone Number" name="telephone">
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
      <select id="type" class="form-control" name="type">
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
      <select id="affiliation" class="form-control" name="affiliation">
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



  <center><button type="submit" class="btn" class="btn btn-primary">Submit</button></center>

</fieldset>
</form> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>