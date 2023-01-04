
<!Doctype html>
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
    <ol class="list-group list-group-numbered">
              <div  style="color:#F8B400;font-size: large;"class="form-text">MENU</div>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Chessy Burger</div>
                  Speciality
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 260</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Pizza</div>
                  Speciality
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 600</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Cold Ice Cream</div>
                  Speciality
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 200</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Drinks</div>
                  Speciality
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 120</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Chocolate</div>
                  Speciality
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 170</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Coffee</div>
                  Speciality
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 150</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Burger with Double Grilled Beef</div>
                  Popular
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 600</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Lemon Orange Cake</div>
                  Popular
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 700</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Treat Bowls Ice Cream Sundaes</div>
                  Popular 
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 300</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Moist Banana Cake</div>
                  Popular
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 500</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Ice Tea</div>
                  Popular
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 150</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Mexican Express Super Taco</div>
                  Popular
                </div>
                <span class="badge bg-primary rounded-pill">&#8369 150</span>
              </li>
            </ol>
<div class="form-group">
    <label style="color:white" >Customer Name</label>
    <input type="text" class="form-control"  
    placeholder="Full Name" name ="customer" autocomplete ="off" required ="">
  </div>
  <div class="form-group">
    <label style="color:white" >Phone Number</label>
    <input type="text" class="form-control"  
    placeholder="Phone Number" name ="phonenumber" autocomplete ="off" required ="">
  </div>
  <div class="form-group">
    <label style="color:white">Email</label>
    <input type="text" class="form-control"  
    placeholder="Email" name ="email"autocomplete ="off" required ="">
  </div>
  <div class="form-group">
    <label style="color:white">Order</label>
    <input type="text" class="form-control"  
    placeholder="Order" name ="orders"autocomplete ="off" required ="">
  </div>
  <div class="form-group">
    <label style="color:white" >Quantity</label>
    <input type="text" class="form-control"  
    placeholder="No. of Order" name ="quantity"autocomplete ="off" required="">
  </div>
  <div class="form-group">
    <label style="color:white">Total</label>
    <input type="text" class="form-control"  
    placeholder="Total" name ="total"autocomplete ="off" required="">
  </div>
  <a href="index.html" class="btn btn-danger"name ="cancel">Cancel</a>
  <button type="submit" class="btn btn-primary" name="submit">Order</button>
</form>
    </div>
  </body>
</html>
<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $customer=$_POST['customer'];
  $phonenumber=$_POST['phonenumber'];
  $email=$_POST['email'];
  $orders=$_POST['orders'];
  $quantity=$_POST['quantity'];
  $total=$_POST['total'];

  $sql="insert into details(customer,phonenumber,email,orders,quantity,total)values
  ('$customer','$phonenumber','$email','$orders','$quantity','$total')";
  $result = mysqli_query($con,$sql);
  if($result){
    header('location:dashboard.php');
  }else{
    die(mysqli_error($con));
  }
}
?>

