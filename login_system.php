<?php

   session_start();

$connect = mysqli_connect("localhost", "root", "", "bus_data");



    if($connect) {


        @$username =                 $_POST['username'];
        @$password =                 $_POST['password'];




        @$btn        =               $_POST['login_button'];

        if(isset($btn)){

            if($username != '' && $password != ''){

                $user_query =            "SELECT id FROM user WHERE (`username`='$username' OR `mobile_num`='$username') AND `password`='$password'";
                $admin_query= "SELECT admin_id FROM admin WHERE `admin_name`='$username' AND `admin_pass`='$password'";

                $query_user_run =        mysqli_query($connect, $user_query);
                 $query_admin_run =        mysqli_query($connect, $admin_query);

                if($query_user_run  || $query_admin_run){


                    $found_user = mysqli_num_rows($query_user_run);
                    $found_admin = mysqli_num_rows($query_admin_run);
                    if($found_user > 0 ){



                     echo "
                            <script>
                                            alert('Logged in successfully.');
                            </script>
                        ";



                       $_SESSION["user_id"] = mysqli_fetch_object($query_user_run)->id;



                        header("Location: bus-booking.php");





                    } elseif ($found_admin > 0 ) {




                     echo "
                            <script>
                                            alert('Logged in successfully.');
                            </script>
                        ";



                       $_SESSION["admin_id"] = mysqli_fetch_object($query_admin_run)->admin_id;



                        header("Location: admin.php");




                       
                    }else{
                        echo "
                            <script>
                                            alert('Wrong username or password.');
                            </script>
                        ";
                    }
                }

            }else{
                echo "
                    <script>
                                    alert('Empty fields.');
                    </script>
                ";
            }
        }
    }else
        die("NOT CONNECTED");
?>