<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Users Database</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./Users.php" target = "blank" >Database</a></li>
      <li><a href="./Form.php"> Registration Form </a></li>
    </ul>
  </div>
</nav>

   <h1>User Regestration Form</h1> 
   <br>
   <p>Please fill this form and submit to add user record to the database.</p>

   <form action = "./Users.php" method = "POST">

  <div class=col-xs-7>
    <label for="name">Name</label>
    <input type="text" class="form-control" name = "name" >
    
  </div>
  <div class=col-xs-7>
    <label for="email">E-mail</label>
    <input type="emal" class="form-control" name = "email" >
    
  </div>
  
  <div class="col-xs-7"> <br>
            <label >Gender</label>
    
            <div class="radio">
        <label><input type="radio" name="gender" value = "f" >Female</label>

        <div class="radio">
        <label><input type="radio" name="gender" value = "m">Male</label>
  </div>
</div>

  <div class="checkbox">
    <h4>
    <label for="checkbox"><input type="checkbox" name = "check" > Receive E-mails from US</label>
 </h4>
  </div>
  <a href="./Users.php"><input class="btn btn-primary" type="submit" value="Submit" name = "submit"></a>
  <button type="button" class="btn btn-outline-dark" value="reset" name = "cancel">Cancel</button>
  </div>
</form>
      

    </html>
    
    

<!-- ------------------------------------------------------------------------------ -->


<!-- 
<?php
$name = $email = $gender = $mailstatus = "";
// echo "Name:<br>".$name."<br>";
// echo "Email:<br>".$email."<br>";
 
//Open Connection
$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='phplab';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   //echo 'Connected successfully<br>';
   //select
   mysqli_select_db( $conn,$dbname );
   //create table
//    $sql = 'CREATE TABLE user( user_id INT NOT NULL AUTO_INCREMENT,
//    user_name VARCHAR(20) NOT NULL,
//    user_email  VARCHAR(20) NOT NULL,
//    gender   INT NOT NULL,
//    mail_status   INT NOT NULL,
//    primary key ( user_id ))';
//      $retval = mysqli_query( $conn,$sql );
   
//    if(! $retval ) {
//       die('Could not create table: ' . mysqli_error($conn));
//    }
    
//    echo "<br>Database Table  created successfully\n";
//    mysqli_close($conn);
if(!empty($_POST['submit'])){
  if( isset($_POST["name"]) &&  isset($_POST["email"]) && isset($_POST["gender"]) && isset($_POST["check"])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $mailstatus = $_POST['check'];
      $sql = "INSERT INTO user VALUES ('','$name',
                  '$email','$gender','$mailstatus')";
        // Check if the query is successful
      if(mysqli_query($conn, $sql)){
            //echo "<h3>data stored in a database successfully."
                //
            // echo nl2br("\n$name\n $email\n "
            //     . "$gender\n $mailstatus\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }}}
    // close connection
    mysqli_close($conn);
?> -->
