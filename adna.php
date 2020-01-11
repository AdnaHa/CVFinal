<?php 
$conn = mysqli_connect('localhost:3308', 'root', '');
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
$select_db = mysqli_select_db($conn, 'adna');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}   

if((isset($_POST['name'])) && (isset($_POST['email'])))
{

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$sql="INSERT INTO adna (name, email, comment) VALUES ('$name','$email', '$comment');";
$result = mysqli_query($conn, $sql);

if($result){
    
echo "Thank you! We will get in touch with you soon";
}
else{
    echo "Submission failed!";
}    
}

?>