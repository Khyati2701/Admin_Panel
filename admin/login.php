<!DOCTYPE html> 
<html>
    <head>
        <title>login form</title>
        <style>
            body{
                background-color:#ffffff;
                align-content:center;
                text-align:center;
                display:flex;
                justify-content:center;

            }
            .main-div{
                display:flex;
                justify-content:center;
                flex-direction:column;
                border:2px solid black !important;
                margin:100px;
                padding:30px;
                width:500px;
                background-color:skyblue;
                box-shadow:10px 15px #3266a8; 
            }
            .head{
                font-size:45px;
                margin:50px 0 0 0;
                text-shadow:2px 3px white;

            }
            .ip1{
                border:2px solid black;
                border-radius:25px;
                height:30px;
                width:250px;
                margin:30px;
                box-shadow: 8px 9px;
            }
            .ip2{
          
                border:2px solid black;
                border-radius:25px;
                height:30px;
                width:250px;
                margin:30px;  
                box-shadow: 8px 9px;
            }
            .btn1{
                margin:10px;
                height:40px;
                width:100px;
                border-radius:20px;
                border:3px solid black;
                box-shadow: 8px 9px;

            }
            .btn2{
                margin:10px;
                border-radius:20px;
                height:40px;
                width:100px;
                border:3px solid black;
                box-shadow: 8px 9px;
            }
            .main-form{
                margin:30px;      
            }
        </style>
      
    </head>    
<body>
    <div class="main-div">
    <h1 class="head">Admin Log-in Page</h1>
    <form class="main-form" method="post" action="adminloginscript.php">
    <!-- <label type="email" value="email">Email:</label> -->
    <input class="ip1" type="email" name="email" placeholder="E-mail"><br>

    <!-- <label type="password" value="password">Password:</label> -->
    <input  class="ip2" type="password" name="password" placeholder="Password"><br>

    <!-- <input onclick="funa()" class="btn1" type="button" name="alog-in" value="Admin"> -->
    <input class="btn2" type="submit" name="ulog-in" value="Login">
    <?php
    
    ?>
</form>
</div>
</body>
</html>