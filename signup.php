<html>
<html>
<head>
    <title>Singup Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
  
    <h2>Signup Page</h2><br>
    <div class="signup">
    <form method="post" action="#">
    <!-- <form id="login" method="get" action="login.php"> -->
        <label><b>User Name
        </b>
        </label>

        <input type="text" name="Uname" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password
        </b>
        </label>


        <input type="Password" name="Pass" id="Pass" placeholder="Password">
        <br><br>

        <label><b>Email
        </b>
        <br>
        </label>
        
        <input type="email" name="Eml" id="eml" placeholder="email">
        <br><br>

        <label><b>Phone
        </b>
        <br>
        </label>

        <input type="text" name="ph" id="ph" placeholder="phone">
        <br><br>
      

        <!-- <input type="button" name="log" id="log" value="Log In Here"> -->
        <!-- <a href="home.html">
            <button id="log">log in here</button>
          </a> -->
        <br>


<!-- <input type="button" id="signup_button"  value="signup"> -->
<a href="index.html">button</a>
      <!-- Have you already an account<a href="signup.html">signup</a> -->
      <br><br><br>
       Have you already an account<a href="login.html">login</a> 
        <br><br>
          </form>
</div>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","");

if($con==false){
  die("Error in database connection...");
}
$uname1=$_POST["uname"];
$pss1=$_POST["pass"];
$Eml1=$_POST["Eml"];
$pno=$_POST["ph"];

mysqli_query("use architect");
$k=mysqli_query("insert into signup values ('$uname1',$pass1,$Eml1,$pno)");

if($k==TRUE)
echo("insert succusfullly...");
else
echo("not inserted..");

mysqli_close($con);
?>