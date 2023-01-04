<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
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

</head>
<body>
    <div class ="container my-5">
        <div class ="text-center">
            <h1 style="color:white">Online Burger Cafe Order Details<h1>
        </div>
    <table class="table">
  <thead>
    <tr style="color:white">
      <th scope="col">id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Order</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th Scope ="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
    </div>
    
</body>
</html>
<?php
include 'connect.php';?>
<?php
      $sql ="Select *  from details";
      $result= mysqli_query($con,$sql);
      if($result){
          while($row =mysqli_fetch_assoc($result)){
          $id =$row['id'];
          $customer=$row['customer'];
          $phonenumber =$row['phonenumber'];
          $email =$row['email'];
          $orders =$row['orders'];
          $quantity =$row['quantity'];
          $total = $row['total'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$customer.'</td>
          <td>'.$phonenumber.'</td>
          <td>'.$email.'</td>
          <td>'.$orders.'</td>
          <td>'.$quantity.'</td>
          <td>'.$total.'</td>
          <td>
          <button class="btn btn-primary"><a href ="update.php?updateid ='.$id.'"class ="text-light">Update</button>
          </button>
          <button class="btn btn-danger"><a href ="delete.php?deleteid='.$id.'"class ="text-light">Delete</button>
          </button>
      </td>
        </tr>';
          }
          
      }
      ?>
