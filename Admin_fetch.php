<?php

$connect=mysqli_connect("localhost", "root", "", "bus_data");


$query = '';
$data = array();
$records_per_page = 10;
$start_from = 0;
$current_page_number = 0;

if(isset($_POST["rowCount"]))
{
$records_per_page = $_POST["rowCount"];
}
else
{
    $records_per_page = 10;
}
if(isset($_POST["current"]))
{
    $current_page_number = $_POST["current"];
}
else
{
    $current_page_number = 1;
}
$start_from = ($current_page_number - 1) * $records_per_page;
$query .= "SELECT dt.id, d.dis_name,t.date , t.time, d.dis_price FROM distination_list as d, time_table as t, dis_time as dt WHERE  dt.dis_id =d.dis_id AND  dt.time_id=t.id  
";
if(!empty($_POST["searchPhrase"]))
{
    $query .= 'WHERE (dt.id LIKE "%'.$_POST["searchPhrase"].'%" ';
    $query .= 'WHERE (d.dis_name LIKE "%'.$_POST["searchPhrase"].'%" ';
    $query .= 'OR t.date  LIKE "%'.$_POST["searchPhrase"].'%" ';
    $query .= 'OR t.timeLIKE "%'.$_POST["searchPhrase"].'%" ';
    $query .= 'OR d.dis_price LIKE "%'.$_POST["searchPhrase"].'%" ) ';
}
$order_by = '';
if(isset($_POST["sort"]) && is_array($_POST["sort"]))
{
    foreach($_POST["sort"] as $key => $value)
    {
        $order_by .= " $key $value, ";
    }
}
else
{
    $query .= 'ORDER BY  `d`.`dis_name` ASC ';
}
if($order_by != '')
{
    $query .= ' ORDER BY ' . substr($order_by, 0, -2);
}

if($records_per_page != -1)
{
    $query .= " LIMIT " . $start_from . ", " . $records_per_page;
}
//echo $query;
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

$query1 = "SELECT * FROM dis_time";
$result1 = mysqli_query($connect, $query1);
$total_records = mysqli_num_rows($result1);

$output = array(
    'current'  => intval($_POST["current"]),
    'rowCount'  => 10,
    'total'   => intval($total_records),
    'rows'   => $data
);

echo json_encode($output);





























?>