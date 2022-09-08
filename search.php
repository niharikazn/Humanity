<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Charity</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
      @media (min-width: 992px)
      {
.col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 23.333333%;
}
}
.bg-02 .wrapper .bs {
    padding: 1.25rem;
    border: 2px solid orangered;
    position: relative;
    display: inline-block;
    background-color: #f3f3f3;
}


}
      </style>
</head>

<body>
  <!-- ======================header started====================== -->
  <header>
    <div class="my-nav">
      <div class="container">
        <div class="row">
          <div class="nav-items">
            <div class="logo" style="color:orangered; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight: bolder; font-size:xx-large">
              HUMMANITY
            </div>
            <div class="menu-toggle">
              <div class="menu-hamburger"></div>
            </div>
            <div class="menu-items">
              <div class="menu">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ======================Main started====================== -->

  <main>

  
    <!-- ======================Bg-02 started====================== -->

    <section class="bg-02">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="heading">
              <h2>Recent Requests</h2>
            </div>
          </div>
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "humanity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id ,`name`,`phone`,`city`,`state`,`pincode`,`blood` FROM `request`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo ' <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <div class="wrapper">  <div class="bs">';
    echo '<h3 style="color:orangered; text-align:center;">'.$row["name"].'</h3><br><span style="font-weight:bolder;">Phone number: </span>'.'<div id="myDIV">**********</div>'.'<span style="font-weight:bolder;">City: </span><span>'.$row["city"].'<br><span style="font-weight:bolder;">State: </span><span>'.$row["state"].'<br><span style="font-weight:bolder;">Pincode: </span><span>'.$row["pincode"].'<br><span style="font-weight:bolder;">Blood Group: </span><span>'.$row["blood"];
    echo '<button style="color:white; background-color:orangered; padding:5px; border:2px solid orangered; border-radius:1rem;  font-weight:bold;" onclick="show()">Get Phone Number';
    echo " </div> </div></div>";
    echo '<script> function show() {
      var x = document.getElementById("myDIV");
      if (x.innerHTML === "**********") {
        x.innerHTML ='.$row["phone"].';
      } else {
        x.innerHTML = "**********";
      }
    }</script>';
  }
  
} else {
  echo "No results";
}
$conn->close();
?>
        </div>
      </div>
    </section>

 <footer>
    <div class="copy-right">
      <div class="container">
        <div class="copy-right-card">
         <p>2015 @ All Rights Reserved Designed and developed by<a
             href="https://www.smarteyeapps.com">Niharika Jain</a></p>
        </div>
      </div>
    </div>
  </footer>
</body>


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</html>