<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Complaint</title>
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
      <h3 style="text-align:center;margin-left:70px;margin-top:80px;font-size:45px;color:darkgreen;">Complaint</h3>
      <br/><br/>
      <form action="complaint_registration.php" method="POST">
      <label for="aadhar number" style="margin-left:630px;">Aadhaar number: </label>
      <input type="text" name="aadhaar" required/><br><br>
      <label for="city" style="margin-left:630px;">City: </label>
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
      <label for="Complaint Description" style="margin-left:630px;">Complaint Description: </label><br><br>
      <textarea name="complaint_desc" style="width:250px;height:50px;margin-left:630px;"required></textarea><br><br>
      <button type="submit"  name="submit" class="btn btn-primary" style="margin-left:630px;width:280px;">Submit</button>
      </form>
</body>
</html>