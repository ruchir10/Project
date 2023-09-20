<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', 'root' , 'login')
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into logind(name, email, password) values(?, ?, ?)");
    $stmt->bind_param("sss",$name, $password, $password);
    $stmt->execute();
    echo"registration Succesfull";
    $stmt->close();
    $conn->close();
}
?>