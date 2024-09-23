 <?php
require_once ('../db/dbhelper.php');
session_start();

$id= '';
if (isset($_GET['id'])) {
	$id       = $_GET['id'];
}
// session_destroy();
// die();
if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from product where id = '.$id;
	$product = executeSingleResult($sql);
	if ($product != null) {
		    $item['title'] = $product['title'];
        $item['price'] = $product['price'];
        $item['thumbnail'] = $product['thumbnail'];
        $item['id'] = $product['id'];
        $item['quantity']=1;
}
}
if(isset($_SESSION['cart'][$id])){
    $item['quantity']++;
}else{
    $_SESSION['cart'][$id]= $item;
}
$_SESSION['cart'][$id] = $item;
$cart = (isset($_SESSION['cart']))? $_SESSION['cart']:[];
// echo"<pre>";
// print_r($_SESSION['cart']);
// die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js5">
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
    <h2 class="text-center">Giỏ Hàng</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed">  
    <thead>
   <tr> <th style="width:15%">Stt</th> 
   <th style="width:25%">Ảnh sản phẩm</th> 
    <th style="width:50%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:8%">Số lượng</th> 
    <th></th>
    <th style="width:22%" class="text-center">Thành tiền</th> 
</thead>
<tbody><?php $total_price=0?>
    <?php foreach ($cart as $key => $item) :
        $total_price += ($item['price']*$item['quantity']);
    ?>
    <tr>
        <td><?php echo $key ++ ?></td>
        <td><img src="<?php echo $item['thumbnail'] ?>" alt="" width="100px"></td>
        <td><?php echo $item['title'] ?></td>
        <td><?php echo $item['price'] ?></td>
        <td><input type="text" value="<?php echo $item['quantity'] ?>"><button type="">Cập nhật</button></td>
        <td><a href="" title="" class="btn btn-danger">Xóa</a></td>
    <?php
    endforeach;
    ?>
</tbody>
   </tr> 
   <tr class="visible-xs"> 
    <td class="text-center"><strong>Tổng</strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="category.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Tổng tiền </strong>
    <td><?php echo number_format(( $total_price ))?></td>
    </td> 
    <td><a href="cart_success.php" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
 </table>
</div>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
</html>