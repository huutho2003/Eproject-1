<?php
require_once ('../db/dbhelper.php');
$id= '';
if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from category where id = '.$id;
	$category = executeSingleResult($sql);
	if ($category != null) {
		$name = $category['name'];
	}
}
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title ><?=$name?></title>
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
    
	*{
      padding: 0;
      margin: 0;
    }
    #wrapper{
      max-width: 1170px;
      margin: 0px auto;
    }
    h3{
      font-size:30px;
      color:#111;
      padding:10px 20px;
      text-transform: uppercase;
      border: 3px  ;
      display:inline-block;
      font-weight:600;
    }
    .headline{
      text-align:center;
      margin:0 auto;
    }
    .product-top{
      position: relative;
      overflow: hidden;
    }
    .product-top .product-thumb{
      display:block;
    }
    :hover.product-top .product-thumb img{
      filter: opacity(80%);
    }
    .product-top .product-thumb img{
      display: block;
    }
    .product-top a.buy-now{
      text-transform: uppercase;
      text-decoration:none;
      text-align:center;
      display:block;
      background-color:#446084;
      color:#fff;
      padding:10px 0px;
      margin-top: 4px;
      border-radius: 4px;
      width: 100%;
    }
    .product-info{
      padding:20px 0px;
    }
    .product-info a{
      display: block;
      text-decoration:none;
    }
    .product-info a.product-cat{
      font-size: 11px;
      text-transform:uppercase;
      color:#9e9e9e;
      padding: 3px 0px;
    }
    .product-info a.product-name{
      color: #334862;
      padding: 3px 0px;

    }.product-info .product-price{
      color:#111;
      padding :2px 0px;
      font-weight:600;
    }
    .supports{
  background-color: wheat;
}
.h4{
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
	</style>
</head>
<body>
<nav class="navbar navbar-expand "style="background-color: #e3f2fd;">
        <div class="container">
          <a class="navbar-brand" href="index.php" style="color: darkred;">
            <i class="" style="font-size: 2.5rem"><img src="maru.jpg" style="width:90px"></img></i>
            MARU DryFruit
          </a>
          
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
				<h2 class="text-center"><?=$name?></h2>
                <br></br>
			</div>
			<div class="panel-body">
                <div class="row" >
				<?php
                $sql          = 'select product.id,product.title, product.price, product.thumbnail, product.updated_at  , category.name category_name from product left join category on product.id_category = category.id where category.id = '.$id;
                $productList = executeResult($sql);
                foreach($productList as $item){
                    echo '<div class ="col-lg-3">
					<div class="product-top"> 
					<a href="" class="product-thumb">
                    <a href ="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'"style ="width:300px"></a>
                  </a>
						<a href="detail.php?id='.$item['id'].'" class="buy-now">Mua ngay</a>
						</div>
						<div class="product-info">
                        <a href="" class="product-name"><a href ="detail.php?id='.$item['id'].'"><p>'.$item['title'].'</p></a></a>
                        <div class="product-price"><p>'.$item['price'].'₫</p></div>
                    </div>
					</div>';
                }
                ?>
            </div>
			</div>
		</div>
	</div>
  
  <div class="supports">
  
  <h4>Liên hệ với chúng tôi</h4>
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
      
      <a href="./about_us.php">About us</a>
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