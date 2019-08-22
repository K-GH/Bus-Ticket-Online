<?php

$connect=mysqli_connect("localhost", "root", "", "bus_data");




if(isset($_POST["id"]))
{
 $query = "DELETE FROM `dis_time`  WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}












?>