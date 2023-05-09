        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// isert the code into contect.php



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['image'])) {
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$msg=$_POST['message'];


// SQL insert query
$insert = "insert into admin (name, number, email, messages)
        values ('$name', '$number', '$email','$msg')";
$query=mysqli_query($conn,$insert);
if ($query) 
{
   echo '<script>
   $(document).ready(function() {
swal({
       title: "Successfully Message Send!",
       icon: "success",
       button: "Ok",
       timer: 4000
       });
    });
</script>';


// header("Location:http://localhost/school/contact.php");
 }
 
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// Close connection
$conn->close();


?>