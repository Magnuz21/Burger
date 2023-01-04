<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Popular</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&family=Cormorant+Garamond:wght@700&family=EB+Garamond:ital,wght@1,500&family=Playfair+Display:ital,wght@0,700;1,400;1,500&family=Poppins:wght@200;700;800&family=Red+Hat+Mono&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Playfair+Display:ital,wght@1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!---Bootstrap Css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">
    	html{
   	scroll-behavior: smooth;
   }
   body{
   	margin: 0;
   	padding: 0;
   	font-size: 15px;
   	font-family: 'Poppins';
   	color: white;
   	background:linear-gradient(rgba(12,32,59,0.5), rgba(12,32,59,0.8));;
   }
   h1,h2,h3,h4,h5,h6{
   	font-weight: 700;
   	letter-spacing: 1px;
   	text-transform: uppercase;
   	color: #ffff;
   }
   a{
   	color:white;
      font-weight:700;
      transition: all 0.4s ease;
   }
   img{
   	width: 100%;
   }
   a.hover{
   	color: #808080;
   
   	border-radius: 2px;
   }
   .header-background{
     position: static;
     display: block;
     overflow: visible;
     top: 0;
     height: auto;
     min-width: 750px;
     margin-bottom: 50px;
     padding-bottom: 70px;
     flex-direction:column;
     background-position: 0px 0px, 100% 50%;
     background-size:auto, cover ;
     white-space: normal;
     object-fit: fill;
     
   }
   .sticky-nav{
   	position: sticky;
   	top: 0px;
   	padding: 0px;
   	z-index: 1;
   	align-self: auto;
   	order: 0;
      background-color: rgb(22, 34, 64);
   }
   .navbar .navbar-brand a{
   	padding: 1rem 0;
   	display: block;
   	text-decoration: none;
   	font-size: 2.2rem;
   	color: white;
   }
   .navbar-brand{
   	font-size: 2.2rem;
   	color: white;

   }
   .navbar-toggler{
   	border: none;
   	padding: 10px 6px;
   	outline: none;
   }
   .navbar-toggler span{
   	display: block ;
   	width: 22px;
   	height: 2px;
   	border: 1px;
   	color: white;
   	background: #ffff;
   }
    .navbar-toggler span + span{
           margin-top: 4px;
           width: 22px;
    }
    .navbar-toggler span + span + span{
    	width: 22px;
    }
    .navbar-expand-lg .navbar-nav .nav-link{
    	padding: 1-4rem 1rem;
    	font-size: 1rem;
    	position: relative;
      margin: 30px;
    	
    }
    .btn{
    	background-color: #E89020;
    	color: white;
    	border-radius: 10px;
    	padding: 1rem 1.5rem;
    	font-size: 1.2rem;
    }
    .btn :hover{
    	background-color:#DFD7D1;
    	color: #fff;
    }
    .heading{
    	font-size: 5rem;
    	font-weight: bold;
    	line-height: 1.4;
    	text-align: center;
    	color:  #fff;
    	margin-top: 180px;
    	margin-bottom: 8px;
    	min-height: 100px;
    }
    #home{
    	 background: linear-gradient(rgba(12,32,59,0.5), rgba(12,32,59,0.8)),url("images/bg1.jpeg");
    	min-height: 100vh;
    	background-size:auto,cover;
    	background-position: center;
    	background-attachment: fixed;
    	align-items: center;
    }
    .section-intro {
         text-align: center;
         padding: 100px 0px;

    }
    .section-intro .divider{
      width: 460px;
      height: 3px;
      background: linear-gradient(to right,#00e0fe,#1107fe);
      margin: 16px auto;

    }
    .service .service-img{
    	position: relative;

    }
    .service .service-img .icon{
    	width:90px;
    	height:90px;
    	background: linear-gradient(to right,#00e0fe,#1107fe);
    	color:#fff;
    	border-radius: 100px;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	position: absolute ;
      bottom: -45px;
      left: 50%;
      transform:translateX(-50%) ;

    }
    .service .service-img .icon i{
    	font-size: 34px;
    }

    .container .col-lg-4 {
     display: flex;
     justify-content: center;
    }
   .mb{margin-bottom:30px;}
   .card{
    background-color:rgba(22, 34, 64);
    }
   .checked {
    color:#F8B400;
    }
   .unchecked{
    color: #383838;
   }
   @media (max-width: 991.98px) {}
  .sticky-nav .body{
    margin-left: -11%;
    margin-right: -11%;
  }
  @media (max-width: 767px) {}
  .body{
    padding: 75px 0px;
    margin-left: -11%;
    margin-right: -11%;

  }
    @media (max-width: 991px)
     {
  .body {
    max-width: 850px !important;
    padding: 0px 60px;
  }
}
@media (max-width: 576px) {}
  .body{
    padding: 0px 40px;
  }
  @media (max-width: 767px) {}
  .heading.front .back{
    font-size: 24px;
    line-height: 32px;
    letter-spacing: normal;
  }
  @media (max-width: 767px) {}
  #home.front .back{
    font-size: 16px;
    line-height: 26px;
    letter-spacing: normal;
  }
  
    </style>
 </head>
 <body>
	<div class="header-background">
	<div id ="nav" class="sticky-nav">
		
		<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href=""><img src ="images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span></span>
      <span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page2.php">Speciality</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="page3.php">Popular</a>
          <li class="nav-item">
          <a class="nav-link" href="page4.html">Gallery</a>
       </li>
          <li class="nav-item">
          <a class="nav-link" href="page5.html">Review</a>
      </ul>
     
    </div>
  </div>
</nav>
</div>
<section id ="Popular" class="text-center">
	<div class="container">
		<div class="col-12 section-intro">
			<h1 class="dispaly-4"style="color:#2FF3E0;font-family: 'Barlow',sans-serif;">Most <span> Popular</span> Foods</h1>
			<div class="divider"></div>			
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-4 mb">
			<div class="card">
      <img src="images/b4.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Burger with Double Grilled Beef</h5>
       <p class="card-text"style="color:#2FF3E0;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <p>Ratings:
                         <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>&#40 10 &#41</p>
                                <p  style="color:#B22727;font-family:'Barlow',sans-serif;font-size:20px;">&#8369 260.00</p>
                                <a href="order.php" class="btn btn-primary">Order</a>

       </div>
       </div>
	  </div>
			<div class="col-lg-4 mb">
			<div class="card">
      <img src="images/p-2.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Lemon Layer Orange Cake</h5>
       <p class="card-text"style="color:#2FF3E0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <p>Ratings:
                         <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star unchecked"></span>&#40 9 &#41</p>
                                <p  style="color:#B22727;font-family:'Barlow',sans-serif;font-size:20px;">&#8369 700.00</p>
                                <a href="order.php" class="btn btn-primary">Order</a>

       </div>
       </div>
		</div>
			<div class="col-lg-4 mb">
			<div class="card">
      <img src="images/cream.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Treat Bowls Ice Cream Sundaes</h5>
       <p class="card-text"style="color:#2FF3E0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <p>Ratings:
                         <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>&#40 8 &#41</p>
                                <p  style="color:#B22727;font-family:'Barlow',sans-serif;font-size:20px;">&#8369 300.00</p>
                                <a href="order.php" class="btn btn-primary">Order</a>

       </div>
       </div>
		</div>
		<div class="col-lg-4 mb">
			<div class="card">
      <img src="images/g-9.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Moist Banana Cake</h5>
       <p class="card-text"style="color:#2FF3E0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <p>Ratings:
                         <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>&#40 10 &#41</p>
                                <p  style="color:#B22727;font-family:'Barlow',sans-serif;font-size:20px;">&#8369 500.00</p>
                                <a href="order.php" class="btn btn-primary">Order</a>

       </div>
       </div>
		</div>
		<div class="col-lg-4">
			<div class="card">
      <img src="images/icetea.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Ice Tea</h5>
       <p class="card-text"style="color:#2FF3E0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <p>Ratings:
                         <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>&#40 10 &#41</p>
                                <p  style="color:#B22727;font-family:'Barlow',sans-serif;font-size:20px;">&#8369 150.00</p>
                                <a href="order.php" class="btn btn-primary">Order</a>

       </div>
       </div>
		</div>
		<div class="col-lg-4">
			<div class="card">
      <img src="images/g-3.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Mexican Express Super Taco</h5>
       <p class="card-text"style="color:#2FF3E0">You have the option to go crispy or soft and for the supersize you’re getting in this order.</p>
       <p>Ratings:
                         <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>&#40 10 &#41</p>
                                <p style="color:#B22727;font-family:'Barlow',sans-serif;font-size:20px;">&#8369 180.00</p>
                                <a href="order.php" class="btn btn-primary">Order</a>

       </div>
       </div>
	</div>
</div>
</div>
<div class="text-center">
  <br>
     <hr>
     <footer>
      <p>
            <a>2022 Online Burger Cafe. All Right Reserved. Design and Development | Made with &#10084;&#65039; by Aldrin C. Abilar</a>                
          </p> 
          </footer>
           
</div> 
</section>
</body>
</html>
