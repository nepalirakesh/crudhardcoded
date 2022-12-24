<?php

$host='localhost';
$user='root';
$password='rakesh123';
$database='crudoperation';

$con= new mysqli($host,$user,$password,$database);
if(!$con){
    die(mysqli_error($con));
    }
   ?>
    




