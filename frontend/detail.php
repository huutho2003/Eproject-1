<?php
session_start();
require_once ('../db/dbhelper.php');
$id= '';
if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from product where id = '.$id;
	$product = executeSingleResult($sql);
	if ($product != null) {
		$title = $product['title'];
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title ><?=$title?></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/all.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		
	.supports{
	background-color: wheat;
	}
	h3{
	text-align: center;
	}
	.support {
	display: flex;
	}
	.support div{
	margin-left: auto;
	margin-right: auto;
	}
	.maps{
	text-align: center;
	}
	#map{
	width: 100%;
	padding: 15px;
	border-radius: 5px;
	}
	@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    body{
    background-color:#FFFFFF;
    font-family: 'Open Sans', sans-serif;
    font-size:14px;
    line-height:1.15;
    color : #111;
    }
	</style>
</head>
<body>
<nav class="navbar navbar-expand "style="background-color: #e3f2fd;">
        <div class="container">
          <a class="navbar-brand" href="index.php" style="color: darkred;">
          <i class="" style="font-size: 2.5rem"><img src="maru.jpg" style="width:90px"></img></i>
            Maru DryFruit</a>
          
          <div class="container-fluid">
            <form class="d-flex" role="search">
              <input class="form-control me-2" size="64px" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" style="background-color: #00FF00 ; border-color:#7CFC00		" type="submit">Search</button>
            </form>
          </div>
          
          <ul class="navbar-nav">
            <li class="nav-item mr-3">
                <a href="#">
                  <i class="bi bi-cart"></i>
                  Purchase Order
                </a>
              </li>
            
            </li>
            <li class="nav-item">
              <a href="login.php">
                <i class="bi bi-box-arrow-in-left"></i>
                Sign in
              </a>
            </li>
          </ul>
        </div>
  </nav>


	<div class="container">
	
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sản Phẩm </h2>
                <br></br>
			</div>
			<div class="card">
                <div class="container-fliud">
					<form method= "GET" action="cart.php">
                        <div class="wrapper row">
							
                            <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane" id="pic-1">
                                        <img src="<?=$product['thumbnail_1']?>"width="510px">
                                    </div>
                                    <div class="tab-pane" id="pic-2">
                                        <img src="<?=$product['thumbnail_2']?>"width="510px">
                                    </div>
                                    <div class="tab-pane active" id="pic-3">
                                        <img src="<?=$product['thumbnail']?>" width="510px">
                                    </div>
                                </div>
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active">
                                        <a data-target="#pic-1" data-toggle="tab" class="">
                                            <img src="<?=$product['thumbnail_1']?>" width="170px">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-2" data-toggle="tab" class="">
                                            <img src="<?=$product['thumbnail_2']?>" width="170px">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-3" data-toggle="tab" class="active">
                                            <img src="<?=$product['thumbnail']?>" width="170px">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title"><?=$product['title']?></h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star"></span>
                                    </div>
                                </div>
                                <h6 class="product-description">Sản phẩm từ thiên nhiên. Không chất bảo quản</h6>
                                <small class="text-muted">Giá cũ: <s><span>100000₫</span></s></small>
                                <h4 class="price">Giá hiện tại: <span><?=$product['price']?>₫</span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                    <strong>Uy
                                        tín</strong>!</p>
										<div class="form-group">
                                    <label for="soluong">Số lượng đặt mua:</label>
                                    <input type="number" value="1" name="quantity">
									<input type="hidden" name ="id" value="<?=$product['id']?>">
                                </div>
                                <div class="action">
									
                                    <a class="btn btn-primary" href="cart.php?id=<?=$product['id']?> &action='add'">Thêm vào giỏ hàng</a>
                                    
                                </div>
                            </div>
					</form>
                        </div>
                </div>
            </div>
			<div class="panel-body">
                <div class="col-lg-12" >
				<?=$product['content']?>
            </div>
			</div>
		</div>
	</div>
	<div class="supports">
  
  <h3>Liên hệ với chúng tôi</h3>
  <div class="support">
    <div>
      <b class="bi bi-telephone"> Cell Phone:</b>
      
      <a href="tel:+88888888">0975350001</a>
    </div>

    <div>
      <b class="bi bi-envelope"> Email:</b>
      
      <a href="mailto:gmail@.com">dryfruitgmail@.com</a>
    </div>

    <div>
      
      <a href="about_us.php">About us</a>
    </div>

    
  </div>
  <br>
  <br>
  <div class="maps">
    <b class="bi bi-geo-alt">Add Dress</b>
    <br>
    <a href="">185 Đội Cấn - Ba Đình - Hà Nội</a>
    <br>
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9407330344!2d105.82214611542331!3d21.03505729293793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0b6f672ae1%3A0x9701f6fbaaa26830!2zMTg1IMSQ4buZaSBD4bqlbiwgQmEgxJDDrG5oLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1657991987017!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

</div>






    

	
</body>
</html>