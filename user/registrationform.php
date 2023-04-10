<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="./assets/css/registrationform.css"/>
    </head>
    <body>
        <form action="submit.php" method="POST">
        <div class="div-1"><div class="div-2"><h1>Registration Form</h1></div>    
        <input class="ip1" type="text" name="uname" placeholder="Name:"required="true">
        <br/></br/>
        <input class="ip2" type="text" name="email"  placeholder="Email:"required="true">
        <br/><br/>
        <input class="ip3" type="phone" name="phone"  placeholder="Phone No:"required="true">
        <br/></br/>
        <input class="ipx"type="password" name="pword" required="true" placeholder="Password "/>
        <br/><br/>
	    <input class="ipy"type="password" name="cpword" required="true"  placeholder="Cofig Password"/>
        <br/><br/>
        <label>Gender:</lable>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <br/><br/>
        <label>Hobby:</lable><br/>
        <input class="ip5" type="checkbox" name="hobby[]" value="singing">Singing<br/>
        <input class="ip6" type="checkbox" name="hobby[]" value="reading">Reading<br/>
        <input class="ip7" type="checkbox" name="hobby[]" value="danceing">Danceing<br/><br/> 
        <label type="nationality" value="nationality">Nationality:</label><br/>
        <select class="ip8" name="my">
            <option value="india">India</option>
            <option value="china">China</option>
            <option value="america">America</option>
        </select>
        <br/><br/>
        <div class="subd"> 
            <input type="submit" class="ip9" name="submit" id="submit"/>
        </div>
        </form>
    </div>
    </body>
</html>         