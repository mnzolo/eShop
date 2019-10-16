<!DOCTYPE html>
<html>
    <head>
    <style>
        <link rel="stylesheet" href="#">
        h1{
            font-family:manospace;
            color: blue;
        }
        hr{
            color: blue;
        }

        .box {
            width: 70%;
            border: 2px solid #000;
            margin: auto;
            text-align: center;
        }

        input {
            width: 40%;
            border: none;
            outline: none;
            background: none;
            border-bottom: 1px solid #000;
            font-size: 115%;
            height: 40px;
            padding: 1%;
        }
    </style>
        <h1><img style="width:180px;height:100px;" src="images/Screenshot 2019-10-15 at 10.21.45.png" alt="logo"></h1>
    <title>eShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-image:url('images/Nike News.jpg');">
        <div>
        <hr>
        </div>
        <div class="box">
            <form align="center" action="includes/registration.php" method="POST" >
                <input type="text" name="username" placeholder="Username">
                <br>
                <input type="text" name="email" placeholder="Email">
                <br>
                <input type="password" name="password" placeholder="Password">
                <br>
                <input type="password" name="password2" placeholder="Confirm Password">
                <br>
                <button type="submit" name="submit" value="OK">Sign up</button>
            </form>
        </div>
    </body>
</html>
