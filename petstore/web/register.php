<?php
$username=$_POST["uname"];
$phone=$_POST["phone1"];
$email=$_POST["email"];
$password=$_POST["password"];

$conn= new mysqli('localhost','root','','music_login');
if($con->connect_error){
    die("error".$con->connect_error);
}
else{
    $stmt=$conn->prepare("insert into register (UserName,phone,email,password) values(?,?,?,?)");
    $stmt->bind_param("siss",$username,$phone,$email,$password);
    $stmt->execute();
    echo "<script>
    alert('Register successfully');
    window.location.assign('login.html');
    </script>";
    $stmt->close();
    $conn->close();
}
?>

