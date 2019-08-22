<?php
$mysql_host= 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_database = 'bus_data';
$connect = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_database);

if($connect) {


    @$username = $_POST['username'];
    @$password = $_POST['password'];
    @$repassword = $_POST['rePassword'];
    @$email = $_POST['email'];
    @$full_name = $_POST['fullName'];
    @$mobile_num = $_POST['phone'];
    @$btn = $_POST['register_button'];


    if (isset($btn)) {

          if ($username != '' && $password != '' && $repassword != '' && $email != '' && $full_name != '' && $mobile_num != '') {


              if(strlen($username)>30 || strlen($full_name)>30 || strlen($email)>35 || strlen($mobile_num)>15)
              {


                  echo "
                              <script>
                                              alert(' you reach the maximum lenght of fields');
                              </script>
                          ";

              }else {

                  if ($password === $repassword) {

                      $search = "SELECT `username` FROM `user` WHERE `username`='$username' OR  `mobile_num`='$mobile_num' ";

                      $search_run = mysqli_query($connect, $search);


                      if (mysqli_num_rows($search_run) > 0) {


                          echo "
                              <script>
                                              alert(' username OR number phone   already exists');
                              </script>
                          ";

                      } else {


                          $query = "INSERT INTO user (username,full_name,email,mobile_num,password) VALUES ('$username','$full_name','$email','$mobile_num','$password')";

                          $query_run = mysqli_query($connect, $query);

                          if ($query_run) {


                              echo "
                                     <script>
                                                     alert('YOUR REGISTRATION IS COMPLETEDs...');
                                     </script>
                                 ";

                              header("Location: login.php");

                          } else {
                              echo "
                                     <script>
                                                     alert('YOUR  not REGISTRATION IS COMPLETED...');
                                     </script>
                                 ";

                          }


                      }


                  } else {

                      echo "
                              <script>
                                              alert('password wrong ');
                              </script>
                          ";


                  }


              }
              } else {
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