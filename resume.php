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
    
echo "Your message has been received. Expect answer from us as soon as possible. Thank you in advance.";
}
else{
    echo "Error! Please try again";
}    
}

?>