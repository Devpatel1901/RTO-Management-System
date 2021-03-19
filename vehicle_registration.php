<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Vehicle Registration</title>
  </head>
<body style="background-color:mintcream">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="background-color: skyblue;">
          <a class="navbar-brand" href="#" style="margin-left: 200px;height:auto"><h1 style="margin-right: 500px;">RTO Gujarat</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="llr.php">LLR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vehicle_registration.php">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="DL.php">DL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Status.php">Check Status</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Admin.php">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Complaint.php">Complaint</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h3 style="text-align:center;margin-left:70px;margin-top:80px;font-size:45px;color:darkgreen;">Vehicle's Registration</h3>
      <br/><br/><br/>
      <form action="reg_entry.php" method ="POST">
      <label for="aadhar number" style="margin-left:200px;">Aadhaar number: </label> 
      <input type="text" name="aadhaar" required/>
      <label for="name" style="margin-left:200px;">Owner name: </label>
      <input type="text" name="name" required/><br/><br/>
      <label for="DOB" style="margin-left:200px;">Date of Birth: </label> 
      <input type="date" name="birthdate" required/>
      <label for="model" style="margin-left:220px;">Vehicle's Model: </label>
      <input type="text" name="model" required/><br/><br/>
      <label for="company" style="margin-left:200px;">Vehicle's Company: </label> 
      <input type="text" name="company" required/>
      <label for="city" style="margin-left:200px;">City: </label>
      <select name="city" required>
      <option value="0"
          >---Select City Name---</option>
          <option value="Ahemdabad">Ahmedabad</option>
          <option value="Mehsana">Mehsana</option>
          <option value="Rajkot">Rajkot</option>
          <option value="Bhavnagar">Bhavnagar</option>
          <option value="Surat">Surat</option>
          <option value="Vadodra">Vadodra</option>
          <option value="Nadiad">Nadiad</option>
          <option value="Palanpur">Palanpur</option>
          <option value="Himatnagar">Himatnagar</option>
          <option value="Jamnagar">Jamnagar</option>
          <option value="Junagadh">Junagadh</option>
          <option value="Kutch-Bhuj">Kutch-Bhuj</option>
          <option value="Surendranagar">Surendranagar</option>
          <option value="Amreli">Amreli</option>
          <option value="Valsad">Valsad</option>
          <option value="Bharuch">Bharuch</option>
          <option value="Godhra">Godhra</option>
          <option value="Gandhinagar">Gandhinagar</option>
          <option value="Bardoli">Bardoli</option>
          <option value="Dahod">Dahod</option>
          <option value="Navsari">Navsari</option>
          <option value="Rajpipla">Rajpipla</option>
          <option value="Anand">Anand</option>
          <option value="Patan">Patan</option>
          <option value="Porbandar">Porbandar</option>
          <option value="Vyara">Vyara</option>
          <option value="Ahmedabad East">Ahmedabad East</option>
          <option value="Aahwa">Aahwa</option>
          <option value="Arvalli">Arvalli</option>
          <option value="Veraval">Veraval</option>
          <option value="Botad">Botad</option>
          <option value="Chhota Udepur">Chhota Udepur</option>
          <option value="Lunawada">Lunawada</option>
          <option value="Morbi">Morbi</option>
          <option value="Khambhaliya">Khambhaliya</option>
        </select><br/><br/>

      <label for="email" style="margin-left:200px;">Email-id: </label>
      <input type="text" name="email" required/>
      <label for="password" style="margin-left:250px;">Password: </label>
      <input type="password" name="pass" required/><br/><br/>
      <p style="margin-left:200px;">Select the Gender:  
      <input type="radio" name="gender" value="Male"> Male
      <input type="radio" name="gender" value="Female">Female   
      <label for="fuel" style="margin-left:250px;">Fuel type: </label>  
      <input type="radio" name="radio" value="Petrol"> Petrol<br/>
      <input type="radio" name="radio" value="Diesel" style="margin-left:580px;"> Diesel<br/> 
      <input type="radio" name="radio" value="CNG" style="margin-left:580px;"> CNG<br/>
      <input type="radio" name="radio" value="LPG" style="margin-left:580px;"> LPG<br/><br/>
      <label for="cov" style="margin-left:1px;">Select the category of vehicle:  </label>
      <input type="checkbox" name="checkbox" value="LMV" style="margin-left:5px;"> LMV<br/>
      <input type="checkbox" name="checkbox" value="MCWG" style="margin-left:220px;"> MCWG<br/>
      <input type="checkbox" name="checkbox" value="HPMV" style="margin-left:220px;"> HPMV<br/>
      <input type="checkbox" name="checkbox" value="HGMV" style="margin-left:220px;"> HGMV<br/>
      <input type="checkbox" name="checkbox" value="MCWoG" style="margin-left:220px;"> MCWoG<br/><br/>
      <button type="submit"  name="submit" class="btn btn-primary" style="margin-left:450px;">Submit</button>
      </form>
</body>
</html>