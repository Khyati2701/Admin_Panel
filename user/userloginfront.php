<!DOCTYPE html> 
<html>
    <head>
        <title>login form</title>
        <link rel="stylesheet" href="./assets/css/userloginfront.css"/>
    </head>    
<body>
     <div class="main-div">
     <h1 class="head">User log-in Page</h1>
     <form class="main-form" method="post" action="userloginscript.php">
     <!-- <label type="email" value="email">Email:</label> -->
     <input class="ip1" type="email" name="email" placeholder="E-mail"><br>

     <!-- <label type="password" value="password">Password:</label> -->
     <input  class="ip2" type="password" name="password" placeholder="Password"><br>

     <!-- <input onclick="funa()" class="btn1" type="button" name="alog-in" value="Admin"> -->
     <input class="btn2" type="submit" name="ulog-in" value="Login">
     </div>
</form>
</body>
</html>