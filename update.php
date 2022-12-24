<?php
include 'connect.php';

$sql="update user_info set name='anil' where ID=1";
$result=$con->query($sql);
if($result){
    echo "name succesfully updated";
}
else{
    echo "error";
}
?>