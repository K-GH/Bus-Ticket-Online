<?php




function insert()
{
    $connect=mysqli_connect("localhost", "root", "", "bus_data");

    $dis=$_POST["dis"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $price=$_POST["price"];
    $btn_insert=$_POST["insert"];

    if (isset($btn_insert))
    {

        if ($dis !="" && $date !="" && $time !="" && $price !="")
        {


            $dis_insert_query="INSERT INTO distination_list( dis_name, dis_price) VALUES ('".$dis."','".$price."') ";
            $date_insert_query="INSERT INTO `time_table`( `date`, `time`) VALUES ('".$date."','".$time."')";
            $dis_date_insert_query="INSERT INTO `dis_time`(`dis_id`, `time_id`) VALUES ('".$dis."','".$date."')";

            $dis_insert_query_run=mysqli_query($connect,$dis_insert_query);
            $date_insert_query_run=mysqli_query($connect,$date_insert_query);
            $dis_date_insert_query_run=mysqli_query($connect,$dis_date_insert_query);

            if($dis_insert_query_run && $date_insert_query_run && $dis_date_insert_query_run  )
            {


                echo "
                            <script>
                                            alert('insertion in successfully.');
                            </script>
                        ";

            }else
            {


                echo "
                            <script>
                                            alert('insertion is failure.');
                            </script>
                        ";

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














}

function update()
{

}

function delete()
{


}


































?>