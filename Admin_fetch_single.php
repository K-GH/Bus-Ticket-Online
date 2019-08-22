<?php

$connect=mysqli_connect("localhost", "root", "", "bus_data");
if(isset($_POST["id"]))
{
 //$output = array();
 $query = "SELECT dt.id, d.dis_name,t.date , t.time, d.dis_price FROM distination_list as d, time_table as t, dis_time as dt WHERE  dt.dis_id =d.dis_id AND  dt.time_id=t.id AND dt.id '".$_POST["id"]."'";

 /*SELECT dt.id, d.dis_name,t.date , t.time, d.dis_price FROM distination_list as d, time_table as t, dis_time as dt WHERE  dt.dis_id =d.dis_id AND  dt.time_id=t.id*/
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output["dis_name"] = $row["d.dis_name"];
  $output["date"] = $row["t.date"];
  $output["time"] = $row["t.time"];
  $output["dis_price"] = $row["d.dis_price"];
 }
 echo json_encode($output);
}

?>