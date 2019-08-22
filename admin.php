<?php 

session_start();


if(!isset($_SESSION['admin_id'])){
    header('location:login.php');
     exit;
}


 ?>



<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.themespond.com/suiren/hotel-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2016 20:45:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>BUS - K-GH</title>
    <link href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRoboto+Slab:100,300,400,700Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendors/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vendors/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendors/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/vendors/owl.theme.green.min.css">
    <link rel="stylesheet" href="assets/css/vendors/animate.min.css">
    <link rel="stylesheet" href="assets/css/vendors/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/common/main.css">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script>

    <style>
        body
        {
            margin:0;
            padding:0;
            background-color:#f1f1f1;
        }
        .box
        {
            width:1270px;
            padding:20px;
            background-color:#fff;
            border:1px solid #ccc;
            border-radius:5px;
            margin-top:25px;
        }
    </style>


</head>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="tsp-main">
        <header>
            <!--start header top bar-->
            <div class="tsp-header-bar hidden-xs hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="top-content">
                            <div class="tsp-account">
                                <a href="index.html">Log Out <i class="fa fa-angle-down"></i></a>
                                <div class="tsp-list-lang">
                                    <ul>
                                        <li><a href="index.html">Log Out</a></li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Row-->
                </div>
            </div>
            <!--end header top bar-->
            <!--start header main-->
            <div class="tsp-header-main">
                <div class="container">
                    <div class="row">
                        <div class="tsp-logo col-md-3 col-sm-3 col-xs-3">
                            <a href="index-2.html">
                                <img src="images/logo.png" alt="Logo">
                            </a>
                        </div>

                        <!--div nav cart search-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--End header main-->
        </header>
        <!--header-->
        <main>
            <section class="tsp-title-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
                            <h1>Admin <span>Booking</span></h1>
                        </div><!-- div title head page -->

                    </div><!-- div row -->
                </div>
            </section>
            <section id="tsp_booking_hotel">
    

                        <br />
                        <div class="container box">
  
    <br />
      <h1 align="center">Active Destinations</h1>
     
    <div align="right">
        <button type="button" id="add_button" data-toggle="modal" data-target="#DisModal" class="btn btn-info btn-lg">Add</button>
    </div>
    <div class="table-responsive">
        <table id="Dis_data" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th data-column-id="id"  data-type="numeric" >ID</th>
                <th data-column-id="dis_name" >Destinaion Name</th>
                <th data-column-id="date">Date</th>
                <th data-column-id="time">time</th>
                <th data-column-id="dis_price">Price</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
            </tr>
            </thead>
        </table>
    </div>



                       
                        <br />



                        <br />
                     
                            <h1 align="center">Orders</h1>
                            <br />
                            

                            <div class="table-responsive">
                                <table id="Order_data" class="table table-bordered table-striped">
                                   <thead>
                                       <tr>
                                           <th data-column-id="username"  > Username </th>
                                           <th data-column-id="phone_num"> Phone Number </th>
                                           <th data-column-id="distination_name"> Destination Name </th>
                                           <th data-column-id="date"> date </th>
                                           <th data-column-id="time"> time </th>
                                           <th data-column-id="price"> price </th>
                                            <th data-column-id="methodPayment"> Payment </th>


                                       </tr>
                                   </thead>
                               </table>
                           </div>
                           </div>
                           
                           <br />







      
    </div>



</body>

<!-- Mirrored from template.themespond.com/suiren/hotel-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2016 20:45:09 GMT -->
</html>
<script type="text/javascript" language="javascript" >
    $(document).ready(function(){
        $('#add_button').click(function(){
            $('#dis_form')[0].reset();
            $('.modal-title').text("Add Destination");
            $('#action').val("Add");
            $('#operation').val("Add");
        });

        var DisTable = $('#Dis_data').bootgrid({
            ajax: true,
            rowSelect: true,
            post: function()
            {
                return{
                    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                };
            },
            url: "Admin_fetch.php",
            formatters: {
                "commands": function(column, row)
                {
                    return "<button type='button' class='btn btn-warning btn-xs update' data-row-id='"+row.id+"'>Edit</button>" +
                        "&nbsp; <button type='button' class='btn btn-danger btn-xs delete' data-row-id='"+row.id+"'>Delete</button>";
                }
            }
        });

        $(document).on('submit', '#dis_form', function(event){
            event.preventDefault();

            var dis_name = $('#dis_name').val();
            var date = $('#date').val();
            var time = $('#time').val();
            var dis_price = $('#dis_price').val();
            var form_data = $(this).serialize();
            if(dis_name != '' && date != '' && time != ''&& dis_price != '')
            {
                $.ajax({
                    url:"Admin_insert.php",
                    method:"POST",
                    data:form_data,
                    success:function(data)
                    {
                        alert(data);
                        $('#dis_form')[0].reset();
                        $('#DisModal').modal('hide');
                        $('#dis_data').bootgrid('reload');
                    }
                });
            }
            else
            {
                alert("All Fields are Required");
            }
        });

        $(document).on("loaded.rs.jquery.bootgrid", function()
        {
            DisTable.find(".update").on("click", function(event)
            {
                var id = $(this).data("row-id");

                $.ajax({
                    url:"Admin_fetch_single.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"json",
                    success:function(data)
                    {
                        $('#DisModal').modal('show');
                        $('#dis_name').val(data.dis_name);
                        $('#date').val(data.date);
                        $('#time').val(data.time);
                        $('#dis_price').val(data.dis_price);
                        $('.modal-title').text("Edit Destination");
                        $('#id').val(id);
                        $('#action').val("Edit");
                        $('#operation').val("Edit");
                    }
                });
            });
        });

        $(document).on("loaded.rs.jquery.bootgrid", function()
        {
            DisTable.find(".delete").on("click", function(event)
            {
                if(confirm("Are you sure you want to delete this?"))
                {
                    var id = $(this).data("row-id");
                    $.ajax({
                        url:"Admin_delete.php",
                        method:"POST",
                        data:{id:id},
                        success:function(data)
                        {
                            alert(data);
                            $('#dis_data').bootgrid('reload');

                        }
                    })
                }
                else{
                    return false;
                }
            });
        });
    });




        var OrderTable = $('#Order_data').bootgrid({
            ajax: true,
            rowSelect: true,
            post: function()
            {
                return{
                    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                };
            },
            url: "Admin_order_fetch.php",
            formatters: {
                "commands": function(column, row)
                {
                    return "<button type='button' class='btn btn-warning btn-xs update' data-row-id='"+row.id+
                        "'>Edit</button>" +
                        "&nbsp; <button type='button' class='btn btn-danger btn-xs delete' data-row-id='"+row.id+"'>Delete</button>";
                }
            }
        });

       // document.getElementById( '#id' ).style.display = 'none';


       


 window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}


</script>
<div id="DisModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="dis_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Destination</h4>
                </div>
                <div class="modal-body">
                    <label>Enter Destination Name</label>
                    <input type="text" name="dis_name" id="dis_name" class="form-control" />
                    <br />
                    <label>Enter Destination Date</label>
                    <input type="date" name="date" id="date" class="form-control" />
                    <br />
                    <label>Enter Destination Time</label>
                    <input type="time" name="time" id="time" class="form-control" />
                    <br />
                    <label>Enter Destination Price</label>
                    <input type="text" name="dis_price" id="dis_price" class="form-control" />
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                </div>
            </div>
        </form>
    </div>
</div>

















