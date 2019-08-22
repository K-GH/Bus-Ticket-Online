<?php

$connect=mysqli_connect("localhost", "root", "", "bus_data");
if(isset($_POST["operation"]))
{
    if($_POST["operation"] == "Add")
    {
        $dis_name =  $_POST["dis_name"];
        $date =  $_POST["date"];
        $time = $_POST["time"];
        $dis_price = $_POST["dis_price"];
        $dis_id="SELECT dis_id FROM distination_list WHERE dis_name='".$_POST["dis_name"]."'";
        $date_id="SELECT `id` FROM `time_table` WHERE date='".$_POST["date"]."'";

        $dis_id_run=mysqli_query($connect,$dis_id);
        $date_id_run=mysqli_query($connect,$date_id);


        if($dis_id_run && $date_id_run )
        {
         
            if(mysqli_num_rows($dis_id_run)>0 && mysqli_num_rows($date_id_run)==0 )
            {
              //  echo"found dis only";
             
                $insert0="INSERT INTO `time_table`( `date`, `time`) VALUES('$date','$time')";

                if(mysqli_query($connect, $insert0))
                {
                    $insert1 = "INSERT INTO dis_time (dis_id, time_id)
                    SELECT d.dis_id,t.id FROM distination_list as d, time_table as t WHERE  d.dis_name='".$dis_name."' AND  t.date='".$date."'";

                    if(mysqli_query($connect, $insert1))
                    {

                        //echo 'distination Inserted1';
                         echo 'destination Inserted';
                    }

                }

            }
            elseif (mysqli_num_rows($dis_id_run)==0 && mysqli_num_rows($date_id_run)>0 ) {
               // echo"found date only";

                $insert2="INSERT INTO `distination_list`(`dis_name`, `dis_price`) VALUES('$dis_name','$dis_price')";

                if(mysqli_query($connect, $insert2))
                {
                    $insert3="INSERT INTO dis_time (dis_id, time_id)
                    SELECT d.dis_id,t.id FROM distination_list as d, time_table as t WHERE  d.dis_name='".$dis_name."' AND  t.date='".$date."'";
                    if(mysqli_query($connect, $insert3))
                    {

                       // echo 'distination Inserted3';
                        echo 'destination Inserted';

                    }

                }
                
            }
            elseif (mysqli_num_rows($dis_id_run)>0 && mysqli_num_rows($date_id_run)>0) {
             

                $bridge="SELECT  `id` FROM `dis_time` WHERE  dis_id =".mysqli_fetch_object($dis_id_run)->dis_id." AND  time_id= ".mysqli_fetch_object($date_id_run)->id."";
                $bridge_run=mysqli_query($connect,$bridge);
                //echo"both found";
                if($bridge_run)
                {
                    if (mysqli_num_rows($bridge_run) >0) {
                       // echo "you can't insert bridge";
                     echo 'sorry,you inserted same distination before  ';

                 }else
                 {
                        //echo "you can insert in bridge";

                  $insert7="INSERT INTO dis_time (dis_id, time_id)
                  SELECT d.dis_id,t.id FROM distination_list as d, time_table as t WHERE  d.dis_name='".$dis_name."' AND  t.date='".$date."'";
                  $insert7_run=mysqli_query($connect, $insert7);
                  if ($insert7_run)
                  {
                   // echo 'distination Inserted7';
                    echo 'destination Inserted';
                }


            }

        }
    }
    else
    {
            //echo"not all insert in 3 tables";

        $insert4="INSERT INTO `distination_list`(`dis_name`, `dis_price`) VALUES('$dis_name','$dis_price')";
        $insert5="INSERT INTO `time_table`( `date`, `time`) VALUES('$date','$time')";
        $insert6="INSERT INTO dis_time (dis_id, time_id)
        SELECT d.dis_id,t.id FROM distination_list as d, time_table as t WHERE  d.dis_name='".$dis_name."' AND  t.date='".$date."'";
        $insert4_run=mysqli_query($connect, $insert4);
        $insert5_run=mysqli_query($connect, $insert5);

        if ($insert4_run && $insert5_run )
        {
            $insert6_run=mysqli_query($connect, $insert6);
            if ($insert6_run)
            {
               // echo 'distination Inserted6';
                echo 'destination Inserted';
            }


        }
    }


}

}
}



?>