<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
</head>
<body>
  <div class="form">
    <form action="conapp.php" method="post">
        <h2>Make an aapointment</h2>
        <div class="div">
        <div class="div1">
<label for="fname">Patient name:</label>
  <input type="text" id="fname" name="pname"><br><br><br>

  <label for="lname">&nbsp &nbspSelect Date:</label>
  <input  type="date" id="lname" name="date"><br><br><br>

  <label for="fname">Phone number:</label>
  <input type="number" id="fname" name="phnum"><br><br>
  </div>
  <div class="div2">
  <label for="lname">Department:</label>
  <select id="cars" name="department"><br><br><br><br>
  <div class="option">
  <option value="Volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  </div>
</select>
<br><br><br>

  <label for="fname">Gender:</label>&nbsp
  
  <input type="radio" name="fgen" value="m" style="width:25px;" class="radio"> &nbsp Male &nbsp
  <input type="radio" name="fgen" value="f" style="width:25px;" class="radio" > &nbsp Female &nbsp
  <br><br><br>
  <label for="lname">Time:</label>
  <input type="time"  id="lname" name="time"><br><br><br>
  <div class="button">
  <button type="submit" value="Sbmit">Make an appointment</button>
  </div>
  </div>
  </div>
</form>
</div>
</body>
</html>