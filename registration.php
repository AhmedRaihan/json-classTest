
<?php

if( $_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $religion = $_POST['religion'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];




  if(isset($username) && $username != "" && isset($password ) && $password !="" && isset($gender) && $gender !="" && isset($dob) && $dob !="" && isset($religion) && $religion !="" && isset($address) && $address !="" && isset($phone) && $phone !="" && isset($email) && $email !=""){

  echo $_POST['username'] . " " . $_POST['password'] . " " . $_POST['gender'] . " " . $_POST['dob'] . " " . $_POST['religion'] . " " . $_POST['address'] . " " .  $_POST['phone'] . " " . $_POST['email'] ;


  $arr1 = array('username' => $username, 'password' => $password , 'gender' => $gender , 'dob' => $dob , 'religion' => $religion , 'address' => $address , 'phone' => $phone , 'email' => $email);
  $arr1_json_encoded = json_encode($arr1);

  $f1 = fopen("data.txt", "a");
  fwrite($f1, $arr1_json_encoded . "\n");
  fclose($f1);

  }else{

        echo "You must fill all the required fields";
    }



}

?>





<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>



<body>

  <a href="adminLogin.html">Admin Login</a><br>

  <a href="home.html"> Home </a>

<h1>Admin Registration Form</h1>

<h2>Basic Information:</h2>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

  <label for="username">UserName:</label>
  <input type="text" id="username" name="username" placeholder="Your UserName *"><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" placeholder="Password *"><br>


  
<label for="gender">Gender:</label>

  <select name="gender" id="gender">
  <option value="male">Male *</option>
  <option value="female">Female *</option>
  </select><br>

  
  <label for="dob">DOB:</label>
  <input type="date" id="dob" name="dob" placeholder="*"><br>

  <label for="religion">Choose your Religion:</label>

  <select name="religion" id="religion">
  <option value="Islam">Islam *</option>
  <option value="Sanatan">Sanatan *</option>
  <option value="Buddish">Buddish *</option>
  <option value="Cristian">Cristian *</option>
  </select>
  
  <h2>Contact Information: </h2>
  
  <label for="address">Address:</label>
  <input type="text" id="address" name="address" placeholder="Your Adderss *"><br>

  

  <label for="phone">Phone:</label>
  <input type="tel" id="phone" name="phone" placeholder="Your phone Number *"><br>
 
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" placeholder="Your Email *"><br>
  

  <input type="submit" value="Register" name="Register" />
  <br> <br>

 <footer class="container-fluid text-center">
  <form action="https://www.w3schools.com" method="post">

    <p>All rights reserved &copy; CoffeeGG</p>
    <a href="https://www.websiteplanet.com">Facebook</a>

</form>

</body>
</html>

