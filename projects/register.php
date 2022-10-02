<!DOCTYPE html>
<head>
    <title>registration form</title>
    <link rel="stylesheet" type="text/css" href="styleReg.css">

</head>
<body class="body">


    <div class="main">
        <h2>Register Here</h2>
        <div class="register">
<form action="connect.php" method="post">
    
    <table class="form">
        <tr class="name">
            <td>Name:</td>
            <td>
                <input style="padding:4px"  size="40"  type="text" name="fname" placeholder="name" required id="inp">
            </td>
        </tr>
        <tr class="name">
            <td>Age:</td>
            <td>
                <input style="padding:4px"  type="number" name="fage" placeholder="age" id="inp">
            </td>
        </tr>
        <tr class="name" >
            <td >Gender:</td>
            <td>
                <input type="radio" name="fgen" value="m" size="40" >Male 
                <input type="radio" name="fgen" value="f" size="40">Female

            </td>
        </tr>
        <tr >
            <td class="name">Address:</td>
            <td>
                <input style="padding:4px" type="text" name="fadd" placeholder="Address" size="40" id="inp">
            </td>
        </tr>
        <tr class="name">
            <td>phnumber:</td>
            <td>
                <select>
                    <option>977</option>
                    <option>982</option>
                <input style="padding:4px"  type="phone" name="phone" placeholder="977982*******" size="40" id="inp">
            </td>
        </tr>
        <tr class="name">
            <td>Password:</td>
            <td id="inp">
                <input style="padding:4px" type="password" name="fpsw" size="40" id="inp">
            </td>
        </tr>
        
        <tr class="but">
            
            <td>
                <button id="button" type="submit" value="Submit" >  Submit</button>  
            </td>
        </tr>

    </table>
  

</form>
</div>
</div>
</body>
</html>