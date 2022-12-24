<?php

include 'connect.php';

$sql="delete from user_info where name='anil'";
$result=$con->query($sql);
if($result){
    echo "record successfully deleted";
}
