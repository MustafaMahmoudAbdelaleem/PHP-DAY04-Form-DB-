
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'phplab';
 
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM user ";
$result = $mysqli->query($sql);
//$mysqli->close();
?>

<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
			crossorigin="anonymous" />
		<link rel="stylesheet" href="style.css" />
		<title>Users Data</title>
	</head>
	<body>
		<div class="container mt-3">
			<div class="d-flex justify-content-between">
				<span class="h2">User Details</span>
				<a class="btn btn-success h-75" href="Form.php" target ="blank" 
					>Add New User</a
				>
			</div>
			<hr />
			<table class="table table-striped table-hover">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>Mail Status</th>
					<!-- <th>Action</th> -->
				</tr>
                <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['user_id'];?></td>
                <td><?php echo $rows['user_name'];?></td>
                <td><?php echo $rows['user_email'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['mail_status'];?></td>
            </tr>
            <?php
                }
            ?>
			</table>
		</div>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
			crossorigin="anonymous"></script>
	</body>
</html>
<!-- ------------------------------------------------------------------------------ -->
<!-- php Form -->

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
  if( isset($_POST["name"]) ||  isset($_POST["email"]) || isset($_POST["gender"])|| 
  isset($_POST['ckeck'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $mailstatus = filter_input(INPUT_POST,'check', FILTER_VALIDATE_BOOL);
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
    // close connection after finishing work
    mysqli_close($conn);
?>
<!--  -->
