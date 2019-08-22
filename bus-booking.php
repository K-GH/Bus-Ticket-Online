
<?php




include "bus-booking_system.php";


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
                <div class="tsp-header-bar hidden-xs hidden-sm">
                    <div class="container">
                        <div class="row">
                            <div class="top-content">
                                <div class="tsp-account">
                                    <a href="Logout.php">Log out <i class="fa fa-angle-down"></i></a>
                                    <div class="tsp-list-lang">
                                        <ul>
                                            <li><a href="Logout.php">Log Out</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Row-->
                    </div>
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
                        <h1>Bus <span>Booking</span></h1>
                    </div><!-- div title head page -->

                </div><!-- div row -->
            </div>
        </section>
        <section id="tsp_booking_hotel">
	<div class="container">
		<div class="row">
			<div class="tsp-box-hotel-content">
				<div class="tsp-hotel-cart">
				    <h2 >YOUR BOOKING DETAILS </h2>

				</div>
			</div>
			<div class="tsp-form-infomation">
				<form action="#" name="formHotelBooking">
					<div class="tsp-col-1 tsp-form-site col-md-6 col-sm-12 col-xs-12 tsp-full-xs tsp-no-padding-left">

						<div class="tsp-content-info">
                            <form method="POST" >
							<div class="form-group col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">

								<label style="color: #3a3a3a;font-size: 150%;font-weight: bold; "> Destination List</label>



                                <select name="distination"  id="distination"  class="selectpicker"  style="color:Orange;background-color: lightblue; font-weight: bold;  font-size: 125%;   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);"   >
                                    <option >Select One Destination</option>


                                    <?php echo load_distination()   ?>


                                </select>










							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">

								<label style="color: #3a3a3a;font-size: 150%;font-weight: bold; ">Time Table</label>


								<select name="date" id="date" class="selectpicker"  style="color:Orange;background-color: lightblue; font-weight: bold;  font-size: 125%;   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);"    >

                                    <option selected="selected">Date</option>


								</select>


							</div >
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right " >
                                        <div style="height:80px;" class="span12"  >

                                        </div>
                                    <label style="color: #3a3a3a;font-size: 150%;font-weight: bold; "> Time of Jounary </label>
                                    <div id="time" style="color: #7d7d00;font-size: 150%; height: 50px"   >

                                        





                                    </div>

                                    <label style="color: #3a3a3a;font-size: 150%;font-weight: bold; "> price of Jounary </label>
                                    <div  id="price" style="color: #7d7d00;font-size: 150%; height: 50px"  >




                                    </div>












						</div>
                        </div>
					</div>
					<div class="tsp-col-2 col-md-6 col-sm-12 col-xs-12 tsp-no-padding-right">
						<h2>Payment method</h2>
						<div class="tsp-content-info">
							<div class="tsp-method-payment">

								<div class="tsp-payment-item">
									<div class="form-group">
										<label>
											<input type="radio" name="methodPayment"   id="methodPayment" value="Credit"> 
											Credit card
										</label>
										<div class="tsp-img-des">
											<img src="images/hotel/payment-visa.jpg" alt="payment visa image">
											<img src="images/hotel/payment-mastercard.jpg" alt="payment mastercard image">
											<img src="images/hotel/payment-paypal.jpg" alt="payment paypal image">
										</div>
									</div>
								</div>
								<div class="tsp-payment-item">
									<div class="form-group">
										<label>
											<input type="radio" name="methodPayment" id="methodPayment" value="Cash">
											Cash
										</label>

									</div>
								</div>
							</div>

							<button type="submit" name="save"  id="save" class="tsp-btn-site col-md-6 col-sm-12 col-xs-12 tsp-full-xs tsp-no-padding-right pull-right text-center">Pay and Book Now</button>
                </form>
						</div>
					</div>
				</form>
			</div>
		</div><!-- row -->
	</div>
</section>


</div>
<script src="assets/js/vendors/jquery.min.js"></script>
<script src="assets/js/vendors/modernizr.min.js"></script>
<script src="assets/js/vendors/bootstrap.min.js"></script>
<script src="assets/js/vendors/bootstrap-datepicker.min.js"></script>
<script src="assets/js/vendors/owl.carousel.min.js"></script>
<script src="assets/js/vendors/jquery.slicknav.min.js"></script>
<script src="assets/js/common.js"></script>
</body>



<!-- Mirrored from template.themespond.com/suiren/hotel-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2016 20:45:09 GMT -->
</html>



<script >
/*$(document).ready(function () {
    $('#distination').change(function() {
        var dist = $('#distination').val();
        $('#distResult').val(dist);

    });*/


$(document).ready(function () {

     var dis_selected = "";
     var date_selected="";
     var methodPayment="";



    $("#distination").change(function () {

         var dis = $(this).val();
        var data = 'dis=' + dis;
         dis_selected=dis;

        //alert(id)

        $.ajax(
            {
                type: "POST",
                url: "bus-booking_system.php",
                data: {"dis":dis,action:"load_date2"},
                cache: false,
                success: function (html) {
                    //alert(html);
                    $("#date").html(html);

                }
            }
        );


    });



    $("#date").change(function () {

        var date = $(this).val();
        var  data2= 'date=' + date;

        date_selected=date;



       // alert(date);

        $.ajax(
            {
                type: "POST",
                url: "bus-booking_system.php",
                data: {"date":date,"dis_selected":dis_selected,action:"load_date3"},
                cache: false,
                success: function (html) {
                    var a = html.split('@')[0];
                    var b = html.split('@')[1];
                    //alert(html);
                    $("#time").html(a);
                    $("#price").html(b);




                }
            }
        );


    });


$(function() {
	$(document).on('change', '[name="methodPayment"]' , function(){
  	var Payment = $('[name="methodPayment"]:checked').val();
    //alert(methodPayment);

    methodPayment = Payment;

    
    
  }); 

});





    $("#save").click(function () {

        var save = $(this).val();
        var time = $("#time>div").html();
        var price = $("#price>div").html();


        //var methodPayment = $("#methodPayment").html();




      //  alert("date selected"+date_selected+"time :"+time+"price :"+price);


        var  data2= 'save=' + save;



        $.ajax(
            {
            	

                type: "POST",
                url: "bus-booking_system.php",
                data: {"save":save," dis_selected": dis_selected," date_selected":date_selected,"time":time,"price":price,"methodPayment":methodPayment,action:"load_date4"},
               
                cache: false,
                success: function (html) {

                	 window.location = "payment-success.php";

                    //alert(html);
                    $("#save").html(html);
                    
                   

                }
            }
        );


    });


});

/*window.onbeforeunload = function(){
	 window.location = "Logout.php";
    return "Message here";

}*/


 window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}


</script>

















