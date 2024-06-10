<?php



if(isset($_POST["submit"])){
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
        header("Location: admin.php");
        exit;
    }
    else{
        $error = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan php day2</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-image: url('./bg.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
    }
    .box{
        border-radius: 8px;
        margin: 20px;
        height: 50vh;
        backdrop-filter: blur(30px);
        background: transparent;
        width: 45vh;
        display: flex;
        flex-direction: column;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 30px;
    }

    a{
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    }
    h1{
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }
    .form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 10px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    label{
        color: white;
    }
    .inputUser{
        width: 100%;
        height: 5vh;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, .2);
        border-radius: 40px;
        font-size: 16px;
        color: #fff;
        padding: 20px 45px 20px 20px;
    }
    .judul{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
    }



    button{
        width: 100%;
        height: 45px;
        background-color: #fff;
        color: black;
        border: none;
        outline: none;
        border-radius: 40px;
        cursor: pointer;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    button:hover{
        background-color: black;
        color: #fff;
    }

    .remember{
        display: flex;
        gap: 5px;
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin-left: 15px;
        justify-content: center;
        align-items: center;
    }
    .remember input{
        font-size: 20px;   
        cursor: pointer;
    }
    
    .remember p{
        font-size: 0.9rem;
        font-weight: 50;
    }

    .addition{
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }
    .forgot a{
        text-decoration: none;
        font-size: 0.9rem;
    }







    @media screen and (max-width: 468px) {
        .box{
        border-radius: 8px;
        margin: 20px;
        height: auto;
        backdrop-filter: blur(30px);
        background: transparent;
        width: 45vh;
        display: flex;
        flex-direction: column;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 30px;
    }
    .remember p{
        font-size: 0.7rem;
        font-weight: 50;
    }
    .forgot a{
        text-decoration: none;
        font-size: 0.7rem;
    }
    
    }
</style>
<body>
    <div class="box">
        <div class="judul">
            <h1>Login</h1>
        </div>
       <form action="" method="post">
            <div class="form">
                <label for="username">Username</label>
                <input class="inputUser" type="text" name="username" required>
                <label for="password">Password</label>
                <input class="inputUser" type="password" name="password" required>
            </div>
            <div class="addition">
                <div class="remember">
                    <input type="checkbox" name="" id="">
                    <p>Remember me</p>
                </div>
                <div class="forgot">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
                <button type="submit" name="submit">Login</button>
                <?php if(isset($error)): ?>
                <p style="color: #A73636; margin-top:10px; font-weight:bold; display:flex; justify-content:center;">Username atau password salah !</p>
                <?php endif; ?>
        </form>
    </div>
</body>
</html>