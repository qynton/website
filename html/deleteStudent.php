
<?php 

//server credentiols
$servername = "localhost";
$username = "root";
$password = "Ivy@th3n@";
$dbName = "webdatabase";

//conect to server
$conn = mysqli_connect($servername, $username, $password, $dbName);

$db = mysqli_select_db($conn, 'staff');



if(isset($_POST['delete'])){


$id = $_POST['id'];
$query = "DELETE FROM student WHERE id ='$id'";
$query_run = mysqli_query($conn, $query);

if($query_run){

    echo '<script> alert("Data Deleted"); </script>';
    header("location:index.php");

}
else{

    echo '<script> alert("Data Not Deleted"); </script>';
}



}






?>
