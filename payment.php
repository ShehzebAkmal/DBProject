<?php

$conn = mysqli_connect("localhost","root","","busmanagementsystem");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/css/payment.css" rel="stylesheet">
   
   <div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-uppercase">Payment Details</h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Billed: </span><span class="ml-1"><?php
                   // $sql="select * from schedule where bus_id=4";
                    $sql="select * from passenger where user_id=701";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['username'];  
                  } ?></span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Date: </span><span class="ml-1">9th December 2021</span></div>
                      <!--  <div class="billed"><span class="font-weight-bold text-uppercase">Order ID:</span><span class="ml-1">#1345345</span></div> -->
                    </div>
                 <!--  <div class="col-md-6 text-right mt-3">
                        <h4 class="text-danger mb-0">Rae jones</h4><span>bbbootstrap.com</span>
                    </div> -->
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Payment_ID</th>
                                    <th>Date of Payment</th>
                                    <th>Total (PKR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php
                    $sql="select * from payment where payment_id=1101";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['payment_id'];  
                  } ?></td>
                                    <td><?php
                    $sql="select * from payment where payment_id=1101";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['DOP'];  
                  } ?></td>
                                    <td><?php
                    $sql="select * from payment where payment_id=1101";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['total_amount'];  
                  } ?></td>
                                </tr>
                                <tr>
                                    <td><?php
                    $sql="select * from payment where payment_id=1102";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['payment_id'];  
                  } ?></td>
                                    <td><?php
                    $sql="select * from payment where payment_id=1102";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['DOP'];  
                  } ?></td>
                                    <td><?php
                    $sql="select * from payment where payment_id=1102";
                    $result=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    //echo $num;
                    while($row = mysqli_fetch_assoc($result)){
                      // echo var_dump($row);
                      echo $row['total_amount'];  
                  } ?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5" type="button"><a href="index2.PHP">Back</a></button></div>
            </div>
        </div>
    </div>
</div>