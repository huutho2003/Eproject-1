<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST['dangki']))
{   
    include('connect.php');
    $first_name = ($_POST['first_name']);
    $last_name = ($_POST['last_name']);
    $user_name = ($_POST['user_name']);
    $pass_word = ($_POST['pass_word']);
    $email = ($_POST['email']);
    $locaton =($_POST['location']);
    $phone_number = ($_POST['phone_number']);
// Lấy giá trị POST từ form vừa submit  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["first_name"])) { $first_name = $_POST['first_name']; }
    if(isset($_POST["last_name"])) { $last_name = $_POST['last_name']; }
    if(isset($_POST["user_name"])) { $user_name = $_POST['user_name']; }
    if(isset($_POST["pass_word"])) { $pass_word = $_POST['pass_word']; }    
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["location"])) { $locaton = $_POST['location']; }
    if(isset($_POST["phone_number"])) { $phone_number = $_POST['phone_number']; }
    // Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO viewer (first_name, last_name, user_name, pass_word, email, `location`, phone_number)
    VALUES ('$first_name', '$last_name', '$user_name', '$pass_word','$email','$locaton','$phone_number' )";
    mysqli_query ($conn, $sql);

}
}
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
//Kết nối tới database
include('connect.php');
  
//Lấy dữ liệu nhập vào
$username = addslashes($_POST['user_name']);
$password = addslashes($_POST['pass_word']);
  
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (!$username || !$password) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
// mã hóa pasword
 $password = md5($password);
  
//Kiểm tra tên đăng nhập có tồn tại không
if ($_POST){
    // check thong tin user
    $user = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];
    $res = mysqli_query($conn, "SELECT * FROM viewer WHERE pass_word = '$pass_word' and user_name = '$user'");
    // echo "SELECT * FROM users WHERE pass_word = '$pass_word' and user_name = '$user'";
    // exit;


    if (mysqli_fetch_assoc($res)){
        $_SESSION['login'] = 'done';
        $_SESSION['user'] = $user;
        header ("location: index-1.php");
        exit;
    }else{
        echo '<script>alert("login false")</script>';

    }

}

}
?>