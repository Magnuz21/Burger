
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <style type="text/css">
      body{
        background: linear-gradient(rgba(12,32,59,0.5), rgba(12,32,59,0.8)),url("images/bg1.jpeg");
    	min-height: 100vh;
    	background-size:auto,cover;
    	background-position: center;
    	background-attachment: fixed;
    	align-items: center;
  }
    </style>

    <title>Order Details</title>
  </head>
  <body>
    <div class ="container my-5">
    <form method ="post">
  <div class="form-group">
    <label >Customer Name</label>
    <input type="text" class="form-control"  
    placeholder="Customer Name" name ="customername" autocomplete ="off"value=<?php
    echo $customername;?>>
  </div>
  <div class="form-group">
    <label >Phone Number</label>
    <input type="number" class="form-control"  
    placeholder="Phone Number" name ="phone"autocomplete ="off"value=<?php
    echo $phonenumber;?>>
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="@" class="form-control"  
    placeholder="Email" name ="email"autocomplete ="off"value=<?php
    echo $email;?>>
  </div>
  <div class="form-group">
    <label >Order</label>
    <input type="text" class="form-control"  
    placeholder="Order Choice" name ="order"autocomplete ="off"value=<?php
    echo $order_choice;?>>
  </div>
  <div class="form-group">
    <label >Quantity</label>
    <input type="number" class="form-control"  
    placeholder="Quantity" name ="quantity"autocomplete ="off"value=<?php
    echo $quantity;?>>
  </div>
  <div class="form-group">
    <label >Total</label>
    <input type="number" class="form-control"  
    placeholder="Total" name ="total"autocomplete ="off"value=<?php
    echo $quantity;?>>
  </div>
  <button type="submit" class="btn btn-primary"name ="submit">Update</button>
</form>
    </div>
  </body>
</html>
<?php
include 'connect.php';
$id =$_GET['updateid'];
$sql ="Select * from details where id =$id";
$result =mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
  $customer =$row['customer'];
  $phonenumber =$row['phonenumber'];
  $email =$row['email'];
  $orders =$row['orders'];
  $quantity =$row['quantity'];
  $total =$row['total'];
if(isset($_POST['submit'])){
  $customername =$_POST['customername'];
  $phonenumber =$_POST['phone'];
  $email =$_POST['email'];
  $order_choice =$_POST['order'];
  $quantity =$_POST['quantity'];
  $total =$_POST['total'];

  $sql="update details set id = '$id',customername='$customer',phone='$phonenumber',email='$email'
  ,order='$orders',quantity='$quantity',total ='$total' where id = '$id'";
  $result = mysqli_query($con,$sql);
  if($result){
    header('location:dashboard.php');
  }else{
    die(mysqli_error($con));
  }
  
}
?>