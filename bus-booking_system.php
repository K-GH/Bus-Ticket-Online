<?php




session_start();




if(!isset($_SESSION['user_id'])){
    header('location:login.php');
     exit;
}


/*

if (!$_SESSION['user_id']) {
    $loginError = "You are not logged in.";
    include("index.php");
    exit();
}

*/




if (isset($_POST['action']))
{
    if ($_POST['action'] == 'load_date2'  )
        load_date();
    elseif ($_POST['action'] == 'load_date3' )
        load_date();
    elseif ($_POST['action'] == 'load_date4' )
        save_order();
}











function  load_distination()
{

    $connect = mysqli_connect("localhost", "root", "", "bus_data");


    if($connect) {
        $query = "SELECT dis_id, dis_name FROM distination_list";

        $result1 = mysqli_query($connect, $query);
        $output1="";
        while ($row1 = mysqli_fetch_array($result1)) {
            $output1 .= '<option value ="' . $row1["dis_id"] . '">' . $row1["dis_name"] . '</option>';

        }








        return $output1;
    }else
    {
        die("NOT CONNECTED");
    }

}







function  load_date()
{

    $connect = mysqli_connect("localhost", "root", "", "bus_data");





    if($connect) {






        if(isset($_POST['dis'])) {




            //echo $_POST['id'];
          


            $query2 = "SELECT DISTINCT t.id,t.date  FROM distination_list as d, time_table as t, dis_time as dt WHERE  dt.dis_id ='".$_POST['dis']." ' AND  dt.time_id=t.id" ;




            $result2 = mysqli_query($connect, $query2);



            if(mysqli_num_rows($result2)==0) {


                echo '<option value ="" >no reuslt</option>';

            }else{
                $res="<option >Select A Date</option>";
                while ($row2 = mysqli_fetch_array($result2)) {

                    $res .= '<option value ="' . $row2["id"] . '">' . $row2["date"] . '</option>';

                }
                echo $res;

            }


        }elseif (isset($_POST['date'])&&isset($_POST['dis_selected'])  ) {






            $query3 = "SELECT dis_price from distination_list WHERE dis_id='".$_POST['dis_selected']."'";
            $query4 = "SELECT time FROM time_table WHERE id='".$_POST['date']."'";

            $price = mysqli_query($connect, $query3);


            $time = mysqli_query($connect, $query4);

            $newDateTime = date('h:i A', strtotime(mysqli_fetch_object($time)->time));





            $out=[$newDateTime,mysqli_fetch_object($price)->dis_price];

            echo "<div>".$out[0] ." </div>@";
            echo "<div>".$out[1] ." LE </div>";



        }else
        {
            echo  '<option value ="" >error</option>';

        }


















    }else
    {
        die("NOT CONNECTED");
    }


}



function save_order ()
{

    $connect = mysqli_connect("localhost", "root", "", "bus_data");






if($connect) {


$dis=$_POST["dis_selected"];
$date=$_POST["date_selected"];
$time=$_POST["time"];
$price=$_POST["price"];



$btn=$_POST["save"];

$user_query="SELECT username,Mobile_num FROM user WHERE  id ='".$_SESSION["user_id"]."'";
$user_run=mysqli_query($connect,$user_query);

    while ($row = mysqli_fetch_object($user_run)) {
        $username= $row->username;
        $phone_num= $row->Mobile_num;
    }


    $dis_date_query="SELECT DISTINCT d.dis_name,t.date  FROM distination_list as d, time_table as t, dis_time as dt WHERE  d.dis_id ='".$dis."' AND  t.id='".$date."'";
    $dis_run=mysqli_query($connect,$dis_date_query);
    while ($row = mysqli_fetch_object($dis_run)) {
        $dis_name= $row->dis_name;
        $date_name= $row->date;
    }





    if (isset($btn)&&isset($dis)&& isset($date)&&isset($time)&&isset($price)&& isset($_POST["methodPayment"]))
    {


        $methodPayment=$_POST["methodPayment"];



    if ($dis_name !=">Select One Distination" && $date_name !="date" && $time !="" && $price !="" && $username !="" && $phone_num !=""&& $methodPayment !="")

    {
        $search="SELECT  username,  distination_name FROM `order_dis` WHERE username='".$username."' AND distination_name= '".$dis_name."'";
        $search_run=mysqli_query($connect,$search);
        if (mysqli_num_rows($search_run)>0)
        {
            echo "
                    <script>
                                    alert('sorry,you did same order before');
                    </script>
                ";


        }else
        {

            $save_query="INSERT INTO `order_dis`( `username`, `phone_num`, `distination_name`, `date`, `time`, `price`,`methodPayment`) VALUES ('$username','$phone_num','$dis_name','$date_name','$time','$price','$methodPayment')";


            $save=mysqli_query($connect,$save_query);





            if ($save)
            {

                echo "
                    <script>
                                    alert('save done.');
                    </script>
                ";





            }else
            {

                echo "
                    <script>
                                    alert('error save.');
                    </script>
                ";

            }



        }






    }else
    {

        echo "
                    <script>
                                    alert('Empty fields.');
                    </script>
                ";


    }


}





}else
{
    die("NOT CONNECTED");
}
















}





?>






