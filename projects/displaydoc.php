<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="display.css">
</head>
<body >
    <div class="table" >
    <table border="2" cellspacing="7">
        <tr>
            <th>Name</th>
            <th>Age</th>
            
            <th>Gender</th>
            <th>Address</th>
            <th>PhoneNumber</th>
            <th>password</th>
            <th colspan="2" align="center">operations</th>
        </tr>
        <?php
    
        
        
                    
            //creation connection//
            $con=new mysqli("localhost","root","","register");
            if($con->connect_error)
            { 
                die('connection failed:'.$con->connect_error);
            }
else{
    error_reporting(0);
    $query ="select * from singin";
    $data=mysqli_query($con,$query);
    $total= mysqli_num_rows($data);
    if($total!=0)
    {
        while($result=mysqli_fetch_assoc($data))
        {
        echo "
        <tr>
        <td>".$result['Name']."</td>
        <td>".$result['Age']."</td>
        <td>".$result['Gender']."</td>
        <td>".$result['Address']."</td>
        <td>".$result['phonenumber']."</td>
        <td>".$result['password']."</td>
        <td><a href='update.php?fn=$result[Name]&age=$result
        [Age] &gender=$result[Gender]&add=$result[Address]&phn=$result[phonenumber]
        &pswd=$result[password] '>Update</td>
        
         
        
        </tr>
        ";
        }
    }
}
        
        ?>
    </table>
</div>
</body>
</html>