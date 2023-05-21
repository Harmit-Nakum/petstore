<?php
include 'review_1.php';

$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login"); 
    $id=$_GET['id'];
    $query="DELETE from review where id ='$id'";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "<script>
        var a=confirm('Are you sure you want to Delete a review');
        if(a==1){
            alert('Review is Deleted');
            window.location.assign('review_1.php');
        }
        </script>";
    }

?>