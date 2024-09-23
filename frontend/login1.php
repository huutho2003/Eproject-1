
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        
    </style>
</head>
<body>
    <div id="form">
        <form action="login.php" class="dangki" method="POST" id="from_register">
            <h1 class="form-heading" >Sign Up</h1>
            <i class="bi bi-person"> </i>
            <div class="form-group">               
                <input type="text" class="form-input"  placeholder="First Name" name='first_name' id='first_name' >
            </div>
            <div class="form-group">               
                <input type="text" class="form-input"  placeholder="Last Name" name='last_name'  id='last_name'>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" placeholder="User Name" name='user_name' id='user_name'>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" placeholder="Password" name='pass_word'>
            </div>
            <div class="form-group">
                <input type="location" class="form-input" placeholder="Location"  name='location'  id='location'>
            </div>
            <div class="form-group">
                Gender: 
                <input class="form-check-input" type="radio" name="gender" id="male">
                <label class="form-check-label" for="male">
                Male
                </label>
                <input class="form-check-input" type="radio" name="gender" id="female" checked>
                <label class="form-check-label" for="female">
                Female
                </label>
            </div>
            <div class="form-group">
                <input type="phone_number" class="form-input" placeholder="phone_number"  name='phone_number'  id='phone_number'>
            </div>
            <div class="form-group">
                <input type="email" class="form-input" placeholder="Email"  name='email'  id='email'>
            </div>
            <div>
                <input type="submit" href="sign_up.php" value="Sign Up" name="dangki" id="dangki"  class="from-submit">
            </div>
        </form>

    </div>
    <i class="bi bi-person"></i>
</body>
</html>