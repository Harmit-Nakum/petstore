<?php

$email = $_POST['email'];
$password = $_POST['password'];
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login");
$query="select * from register where email='$email' and password='$password' ";
$result=mysqli_query($conn,$query);
$number=mysqli_num_rows($result);
if($number==1){
   echo "<script>
   alert('successfully Login');
   window.location.assign('music_home.html');
   </script>"
   ;
}
else{
    echo "<script>
   alert('Wrong email and password');
   window.location.assign('register.html');
   </script>"
   ;
}
?>

