<?php

session_start();




       $connect=mysqli_connect("localhost", "root", "", "bus_data");


       $user_query="SELECT username FROM user WHERE  id ='".$_SESSION["user_id"]."'";
       $user_run=mysqli_query($connect,$user_query);

    while ($row = mysqli_fetch_object($user_run)) {
        $username= $row->username;
        
    }



     
        
        echo $username;


       $show_query="SELECT  order_id, username, phone_num, distination_name, date, time, price FROM order_dis WHERE username='".$username."' ORDER BY `order_dis`.`order_id` DESC  LIMIT 1 ";
       $show_query_run=mysqli_query($connect,$show_query);
       
       $row=mysqli_fetch_array($show_query_run);
       


       list($dis_go,$dis_arrive)=explode('-to-',$row["distination_name"]);

       echo $dis_go;
       echo $dis_arrive;








?>
<html>
 <head>
     <title></title>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 </head>

<body>
<div class="box">
    <ul class="left">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <ul class="right">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="ticket">
        <span class="airline">BUS EGY</span>
        <span class="airline airlineslip">BUS EGY</span>
        <span class="boarding">Boarding pass</span>
        <div class="content">
            <span class="jfk"><?php echo $dis_go ?></span>
            <span class="plane"><?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="60" width="60" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg"><g stroke="#222"><path d="M103.918,334.136c-23.793,0-43.172,19.376-43.172,43.185s19.373,43.173,43.172,43.173
		c23.817,0,43.172-19.364,43.172-43.173C147.09,353.524,127.742,334.136,103.918,334.136z M103.918,404.454
		c-14.952,0-27.125-12.179-27.125-27.134c0-14.954,12.167-27.133,27.125-27.133c14.964,0,27.136,12.166,27.136,27.133
		C131.054,392.275,118.888,404.454,103.918,404.454z M450.189,334.136c-23.809,0-43.178,19.376-43.178,43.185
		s19.363,43.173,43.178,43.173s43.172-19.364,43.172-43.173C493.355,353.524,473.992,334.136,450.189,334.136z M450.189,404.454
		c-14.961,0-27.139-12.179-27.139-27.134c0-14.954,12.166-27.133,27.139-27.133c14.949,0,27.127,12.166,27.127,27.133
		C477.305,392.275,465.139,404.454,450.189,404.454z M536.461,320.776h16.033V177.858c0-25.325-20.521-45.846-45.84-45.846H45.842
		C20.508,132.013,0,152.533,0,177.858v162.008c0,25.337,20.508,45.857,45.842,45.857h11.959c-0.292-2.137-0.487-4.293-0.487-6.503
		c0-26.585,21.556-48.147,48.144-48.147c26.588,0,48.144,21.562,48.144,48.147c0,2.21-0.207,4.366-0.487,6.503h250.857
		c-0.292-2.137-0.486-4.293-0.486-6.503c0-26.585,21.555-48.147,48.158-48.147c26.586,0,48.129,21.562,48.129,48.147
		c0,2.21-0.194,4.366-0.486,6.503h53.219v-19.107h-16.039c-2.533,0-4.591-2.053-4.591-4.579v-36.682
		C531.863,322.816,533.922,320.776,536.461,320.776z M305.664,155.706V265.74h-84.049V155.706H305.664z M89.401,265.74H72.586
		c-38.584,0-37.811-22.914-37.811-25.441v-80.011c0-2.53,2.046-4.582,4.576-4.582h50.05h38.97V265.74H89.401z M132.957,265.74
		V155.706h84.063V265.74H132.957z M402.725,265.74h-92.482V155.706h92.482V265.74z M443.596,261.151
		c0,2.542-2.059,4.589-4.573,4.589h-32.011V155.706h32.011c2.515,0,4.573,2.052,4.573,4.582V261.151z M525.805,290.964
		c0,0-20.6,1.869-42.983-3.27c-22.371-5.133-25.465-25.383-25.465-25.383v-83.385v-23.602h44.841
		c13.031,0,23.602,10.568,23.602,23.602v112.037H525.805z"/></g></svg></span>
            <span class="sfo"><?php echo $dis_arrive;?></span>

            <span class="jfk jfkslip"><?php echo $dis_go?></span>
            <span class="plane planeslip"><?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="50" width="50" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg"><g stroke="#222"><path d="M103.918,334.136c-23.793,0-43.172,19.376-43.172,43.185s19.373,43.173,43.172,43.173
		c23.817,0,43.172-19.364,43.172-43.173C147.09,353.524,127.742,334.136,103.918,334.136z M103.918,404.454
		c-14.952,0-27.125-12.179-27.125-27.134c0-14.954,12.167-27.133,27.125-27.133c14.964,0,27.136,12.166,27.136,27.133
		C131.054,392.275,118.888,404.454,103.918,404.454z M450.189,334.136c-23.809,0-43.178,19.376-43.178,43.185
		s19.363,43.173,43.178,43.173s43.172-19.364,43.172-43.173C493.355,353.524,473.992,334.136,450.189,334.136z M450.189,404.454
		c-14.961,0-27.139-12.179-27.139-27.134c0-14.954,12.166-27.133,27.139-27.133c14.949,0,27.127,12.166,27.127,27.133
		C477.305,392.275,465.139,404.454,450.189,404.454z M536.461,320.776h16.033V177.858c0-25.325-20.521-45.846-45.84-45.846H45.842
		C20.508,132.013,0,152.533,0,177.858v162.008c0,25.337,20.508,45.857,45.842,45.857h11.959c-0.292-2.137-0.487-4.293-0.487-6.503
		c0-26.585,21.556-48.147,48.144-48.147c26.588,0,48.144,21.562,48.144,48.147c0,2.21-0.207,4.366-0.487,6.503h250.857
		c-0.292-2.137-0.486-4.293-0.486-6.503c0-26.585,21.555-48.147,48.158-48.147c26.586,0,48.129,21.562,48.129,48.147
		c0,2.21-0.194,4.366-0.486,6.503h53.219v-19.107h-16.039c-2.533,0-4.591-2.053-4.591-4.579v-36.682
		C531.863,322.816,533.922,320.776,536.461,320.776z M305.664,155.706V265.74h-84.049V155.706H305.664z M89.401,265.74H72.586
		c-38.584,0-37.811-22.914-37.811-25.441v-80.011c0-2.53,2.046-4.582,4.576-4.582h50.05h38.97V265.74H89.401z M132.957,265.74
		V155.706h84.063V265.74H132.957z M402.725,265.74h-92.482V155.706h92.482V265.74z M443.596,261.151
		c0,2.542-2.059,4.589-4.573,4.589h-32.011V155.706h32.011c2.515,0,4.573,2.052,4.573,4.582V261.151z M525.805,290.964
		c0,0-20.6,1.869-42.983-3.27c-22.371-5.133-25.465-25.383-25.465-25.383v-83.385v-23.602h44.841
		c13.031,0,23.602,10.568,23.602,23.602v112.037H525.805z"/></g></svg></span>
            <span class="sfo sfoslip"><?php echo $dis_arrive;?></span>
            <div class="sub-content">
                <span class="watermark">BUS EGY</span>
                <span class="name">PASSENGER NAME<br><span><?php echo $row["username"];?></span></span>
                <span class="flight">FLIGHT N&deg;<br><span>X3-65C3</span></span>
                <span class="gate">GATE<br><span>11B</span></span>
                <span class="seat">SEAT<br><span>45A</span></span>
                <span class="boardingtime">BOARDING TIME<br><span><?php echo $row["time"]." ".$row["date"];?></span></span>

                <span class="flight flightslip">FLIGHT N&deg;<br><span>X3-65C3</span></span>
                <span class="seat seatslip">SEAT<br><span>45A</span></span>
                <span class="name nameslip">PASSENGER NAME<br><span><?php echo $row["username"];?></span></span>
            </div>
        </div>
        <div class="barcode"></div>
        <div class="barcode slip"></div>
    </div>
</div>

<style>
    body{
        margin: 0;
        padding: 0;
        background: #fff;
    }

    .box{
        position: absolute;
        top: calc(50% - 125px);
        top: -webkit-calc(50% - 125px);
        left: calc(50% - 300px);
        left: -webkit-calc(50% - 300px);
    }

    .ticket{
        width: 600px;
        height: 250px;
        background: #FFB300;
        border-radius: 3px;
        box-shadow: 0 0 100px #aaa;
        border-top: 1px solid #E89F3D;
        border-bottom: 1px solid #E89F3D;
    }

    .left{
        margin: 0;
        padding: 0;
        list-style: none;
        position: absolute;
        top: 0px;
        left: -5px;
    }

    .left li{
        width: 0px;
        height: 0px;
    }

    .left li:nth-child(-n+2){
        margin-top: 8px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #FFB300;
    }

    .left li:nth-child(3),
    .left li:nth-child(6){
        margin-top: 8px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #EEEEEE;
    }

    .left li:nth-child(4){
        margin-top: 8px;
        margin-left: 2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #EEEEEE;
    }

    .left li:nth-child(5){
        margin-top: 8px;
        margin-left: -1px;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-right: 6px solid #EEEEEE;
    }

    .left li:nth-child(7),
    .left li:nth-child(9),
    .left li:nth-child(11),
    .left li:nth-child(12){
        margin-top: 7px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #E5E5E5;
    }

    .left li:nth-child(8){
        margin-top: 7px;
        margin-left: 2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #E5E5E5;
    }

    .left li:nth-child(10){
        margin-top: 7px;
        margin-left: 1px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #E5E5E5;
    }

    .left li:nth-child(13){
        margin-top: 7px;
        margin-left: 2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #FFB300;
    }

    .left li:nth-child(14){
        margin-top: 7px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #FFB300;
    }

    .right{
        margin: 0;
        padding: 0;
        list-style: none;
        position: absolute;
        top: 0px;
        right: -5px;
    }

    .right li:nth-child(-n+2){
        margin-top: 8px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #FFB300;
    }

    .right li:nth-child(3),
    .right li:nth-child(4),
    .right li:nth-child(6){
        margin-top: 8px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #EEEEEE;
    }

    .right li:nth-child(5){
        margin-top: 8px;
        margin-left: -2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #EEEEEE;
    }

    .right li:nth-child(8),
    .right li:nth-child(9),
    .right li:nth-child(11){
        margin-top: 7px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #E5E5E5;
    }

    .right li:nth-child(7){
        margin-top: 7px;
        margin-left: -3px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #E5E5E5;
    }

    .right li:nth-child(10){
        margin-top: 7px;
        margin-left: -2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #E5E5E5;
    }

    .right li:nth-child(12){
        margin-top: 7px;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-left: 6px solid #E5E5E5;
    }

    .right li:nth-child(13),
    .right li:nth-child(14){
        margin-top: 7px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #FFB300;
    }

    .ticket:after{
        content: '';
        position: absolute;
        right: 200px;
        top: 0px;
        width: 2px;
        height: 250px;
        box-shadow: inset 0 0 0 #FFB300,
        inset 0 -10px 0 #B56E0A,
        inset 0 -20px 0 #FFB300,
        inset 0 -30px 0 #B56E0A,
        inset 0 -40px 0 #FFB300,
        inset 0 -50px 0 #999999,
        inset 0 -60px 0 #E5E5E5,
        inset 0 -70px 0 #999999,
        inset 0 -80px 0 #E5E5E5,
        inset 0 -90px 0 #999999,
        inset 0 -100px 0 #E5E5E5,
        inset 0 -110px 0 #999999,
        inset 0 -120px 0 #E5E5E5,
        inset 0 -130px 0 #999999,
        inset 0 -140px 0 #E5E5E5,
        inset 0 -150px 0 #B0B0B0,
        inset 0 -160px 0 #EEEEEE,
        inset 0 -170px 0 #B0B0B0,
        inset 0 -180px 0 #EEEEEE,
        inset 0 -190px 0 #B0B0B0,
        inset 0 -200px 0 #EEEEEE,
        inset 0 -210px 0 #B0B0B0,
        inset 0 -220px 0 #FFB300,
        inset 0 -230px 0 #B56E0A,
        inset 0 -240px 0 #FFB300,
        inset 0 -250px 0 #B56E0A;
    }

    .ticket:before{
        content: '';
        position: absolute;
        z-index: 5;
        right: 199px;
        top: 0px;
        width: 1px;
        height: 250px;
        box-shadow: inset 0 0 0 #FFB300,
        inset 0 -10px 0 #F4D483,
        inset 0 -20px 0 #FFB300,
        inset 0 -30px 0 #F4D483,
        inset 0 -40px 0 #FFB300,
        inset 0 -50px 0 #FFFFFF,
        inset 0 -60px 0 #E5E5E5,
        inset 0 -70px 0 #FFFFFF,
        inset 0 -80px 0 #E5E5E5,
        inset 0 -90px 0 #FFFFFF,
        inset 0 -100px 0 #E5E5E5,
        inset 0 -110px 0 #FFFFFF,
        inset 0 -120px 0 #E5E5E5,
        inset 0 -130px 0 #FFFFFF,
        inset 0 -140px 0 #E5E5E5,
        inset 0 -150px 0 #FFFFFF,
        inset 0 -160px 0 #EEEEEE,
        inset 0 -170px 0 #FFFFFF,
        inset 0 -180px 0 #EEEEEE,
        inset 0 -190px 0 #FFFFFF,
        inset 0 -200px 0 #EEEEEE,
        inset 0 -210px 0 #FFFFFF,
        inset 0 -220px 0 #FFB300,
        inset 0 -230px 0 #F4D483,
        inset 0 -240px 0 #FFB300,
        inset 0 -250px 0 #F4D483;
    }

    .content{
        position: absolute;
        top: 40px;
        width: 100%;
        height: 170px;
        background: #eee;
    }

    .airline{
        position: absolute;
        top: 10px;
        left: 10px;
        font-family: Arial;
        font-size: 20px;
        font-weight: bold;
        color: rgba(0,0,102,1);
    }

    .boarding{
        position: absolute;
        top: 10px;
        right: 220px;
        font-family: Arial;
        font-size: 18px;
        color: rgba(255,255,255,0.6);
    }

    .jfk{
        position: absolute;
        top: 10px;
        left: 20px;
        font-family: Arial;
        font-size: 38px;
        color: #222;
    }

    .sfo{
        position: absolute;
        top: 10px;
        left: 180px;
        font-family: Arial;
        font-size: 38px;
        color: #222;
    }

    .plane{
        position: absolute;
        left: 105px;
        top: 0px;
    }

    .sub-content{
        background: #e5e5e5;
        width: 100%;
        height: 100px;
        position: absolute;
        top: 70px;
    }

    .watermark{
        position: absolute;
        left: 5px;
        top: -10px;
        font-family: Arial;
        font-size: 110px;
        font-weight: bold;
        color: rgba(255,255,255,0.2);
    }

    .name{
        position: absolute;
        top: 10px;
        left: 10px;
        font-family: Arial Narrow, Arial;
        font-weight: bold;
        font-size: 14px;
        color: #999;
    }

    .name span{
        color: #555;
        font-size: 17px;
    }

    .flight{
        position: absolute;
        top: 10px;
        left: 180px;
        font-family: Arial Narrow, Arial;
        font-weight: bold;
        font-size: 14px;
        color: #999;
    }

    .flight span{
        color: #555;
        font-size: 17px;
    }

    .gate{
        position: absolute;
        top: 10px;
        left: 280px;
        font-family: Arial Narrow, Arial;
        font-weight: bold;
        font-size: 14px;
        color: #999;
    }

    .gate span{
        color: #555;
        font-size: 17px;
    }


    .seat{
        position: absolute;
        top: 10px;
        left: 350px;
        font-family: Arial Narrow, Arial;
        font-weight: bold;
        font-size: 14px;
        color: #999;
    }

    .seat span{
        color: #555;
        font-size: 17px;
    }

    .boardingtime{
        position: absolute;
        top: 60px;
        left: 10px;
        font-family: Arial Narrow, Arial;
        font-weight: bold;
        font-size: 14px;
        color: #999;
    }

    .boardingtime span{
        color: #555;
        font-size: 17px;
    }

    .barcode{
        position: absolute;
        left: 8px;
        bottom: 6px;
        height: 30px;
        width: 90px;
        background: #222;
        box-shadow: inset 0 1px 0 #FFB300, inset -2px 0 0 #FFB300,
        inset -4px 0 0 #222,
        inset -5px 0 0 #FFB300,
        inset -6px 0 0 #222,
        inset -9px 0 0 #FFB300,
        inset -12px 0 0 #222,
        inset -13px 0 0 #FFB300,
        inset -14px 0 0 #222,
        inset -15px 0 0 #FFB300,
        inset -16px 0 0 #222,
        inset -17px 0 0 #FFB300,
        inset -19px 0 0 #222,
        inset -20px 0 0 #FFB300,
        inset -23px 0 0 #222,
        inset -25px 0 0 #FFB300,
        inset -26px 0 0 #222,
        inset -26px 0 0 #FFB300,
        inset -27px 0 0 #222,
        inset -30px 0 0 #FFB300,
        inset -31px 0 0 #222,
        inset -33px 0 0 #FFB300,
        inset -35px 0 0 #222,
        inset -37px 0 0 #FFB300,
        inset -40px 0 0 #222,
        inset -43px 0 0 #FFB300,
        inset -44px 0 0 #222,
        inset -45px 0 0 #FFB300,
        inset -46px 0 0 #222,
        inset -48px 0 0 #FFB300,
        inset -49px 0 0 #222,
        inset -50px 0 0 #FFB300,
        inset -52px 0 0 #222,
        inset -54px 0 0 #FFB300,
        inset -55px 0 0 #222,
        inset -57px 0 0 #FFB300,
        inset -59px 0 0 #222,
        inset -61px 0 0 #FFB300,
        inset -64px 0 0 #222,
        inset -66px 0 0 #FFB300,
        inset -67px 0 0 #222,
        inset -68px 0 0 #FFB300,
        inset -69px 0 0 #222,
        inset -71px 0 0 #FFB300,
        inset -72px 0 0 #222,
        inset -73px 0 0 #FFB300,
        inset -75px 0 0 #222,
        inset -77px 0 0 #FFB300,
        inset -80px 0 0 #222,
        inset -82px 0 0 #FFB300,
        inset -83px 0 0 #222,
        inset -84px 0 0 #FFB300,
        inset -86px 0 0 #222,
        inset -88px 0 0 #FFB300,
        inset -89px 0 0 #222,
        inset -90px 0 0 #FFB300;
    }

    .slip{
        left: 455px;
    }

    .nameslip{
        top: 60px;
        left: 410px;
    }

    .flightslip{
        left: 410px;
    }

    .seatslip{
        left: 540px;
    }

    .jfkslip{
        font-size: 30px;
        top: 20px;
        left: 410px;
    }

    .sfoslip{
        font-size: 30px;
        top: 20px;
        left: 530px;
    }

    .planeslip{
        top: 10px;
        left: 475px;
    }

    .airlineslip{
        left: 455px;
    }
</style>
</body>
</html>