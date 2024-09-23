<?php require 'xuly.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank</title>
    <style>
        body{
            background: url(anh/anh111.jpg);
            background-size: cover;
            background-position-y: -100px;
            padding: auto;
        }
        #form{
            min-height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 20px;
        }
        #from_register{
            max-width: 400px;
            background:rgba(0 , 0 , 0 , 0.8);
            flex-grow: 1;
            padding: 30px 30px 40px;
            box-shadow: 10px 10px 10px rgba(191, 213, 49, 0.8);
        }
        h1{
            text-align: center;
            color: wheat;
            font-size: 25px;
            margin-bottom: 30px;
        }h2{
            text-align: center;
            color: wheat;
            font-size: 25px;
            margin-bottom: 30px;
        }
        .form-input{
            background: transparent;
            border: 0;
            outline: 0;
            color: white;
            flex-grow: 1;
        }
        .form-group{
            border-bottom: 1px solid white;
            margin-top: 20px;
            margin-bottom: 20px;
            display: flex  ;
            color: white;
        }
        .form-input::placeholder{
            color: wheat;
        }
        .from-submit{
            margin-top: 10px;
            background: transparent;
            border: 1px white solid;
            color: wheat;
            width: 100%;
            text-transform: uppercase;
            padding: 6px 10px ;
        }
        .from-submit:hover{
            border: 1px red solid;
        }
        .bi-person{
            background-color: azure;
            width: 1cm;
        }
        .dangki{
            color: red;
        }
    </style>
</head>
<body>
    <div id="form" >
        <form action="login.php" class="dangnhap" method ="POST" id="from_register">
            <h1 class="form-heading" >Cảm Ơn Sự Tin Tưởng Của Quý Khách</h1>
            <br></br>
            <h2 class="form-heading" >Chúc Quý Khách Ngon Miệng</h2>
            <i class="bi bi-person"> </i>
            <a href='index-1.php' class="dangki" title='Đăng ký'> <h3>Tiếp Tục Mua Hàng</h3></a>
            </div>
            
        </form>

    </div>
    <i class="bi bi-person"></i>
</body>
</html>