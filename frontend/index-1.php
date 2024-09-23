<?php
require_once ('../db/dbhelper.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
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
    body{
            background: url(anh/anh111.jpg);
            background-size: cover;
            background-position-y: -100px;
            padding: auto;
        }
        .panel-body{
        
        color : black;
        background-color: #FFF0F5;
      }
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
  </style>
</head>
<body>
<nav class="navbar navbar-expand "style="background-color: #e3f2fd;">
        <div class="container">
          <a class="navbar-brand" href="index.php" style="color: darkred;">
            <i class="" style="font-size: 2.5rem"><img src="maru.jpg" style="width:90px"></img></i>
            Maru DryFruit
          </a>
          
          <div class="container-fluid">
            <form class="d-flex" role="search">
              <input class="form-control me-2" size="64px" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" style="background-color: #00FF00 ; border-color:#7CFC00		" type="submit">Search</button>
            </form>
          </div>
          
          <ul class="navbar-nav">
            <li class="nav-item mr-3">
                <a href="">
                  <i class="bi bi-cart"></i>
                  Purchase Order
                </a>
              </li>
            <li class="nav-item">
              <a href="user.php">
                <i class="bi bi-box-arrow-in-left"></i>
                User information
              </a>
            </li>
          </ul>
        </div>
  </nav>
	

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản Lý Danh Mục</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>
							<th>Tên Danh Mục</th>
						</tr>
					</thead>
					<tbody>
<?php
//Lay danh sach danh muc tu database
$sql          = 'select * from category';
$categoryList = executeResult($sql);

$index = 1;
foreach ($categoryList as $item) {
	echo '<tr>
				<td>'.($index++).'</td>
				<td><a href="category.php?id='.$item['id'].'">'.$item['name'].'<a></td>
			</tr>';
}
?>
					</tbody>
				</table>
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