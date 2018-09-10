<!DOCTYPE html>
<html>
<head><title>
</title>
</head>
<body>
<br>
<form id = "form"  method = "post" action = "part1.php">
<p>
Please choose a text color:

<select name="formColor">
  <option value="black" style= "font-color: black; font-size: 25px;">Black</option>
  <option value="red" style= "font-color: red; font-size: 25px;">Red</option>
  <option value="orange" style= "font-color: orange; font-size: 25px;">Orange</option>
  <option value="yellow" style= "font-color: yellow; font-size: 25px;">Yellow</option>
  <option value="green" style= "font-color: green; font-size: 25px;">Green</option>
</select>
</p>

<p>Please choose a font family:
<br>
<select name="formFamily">
  <option selected value="Times New Roman" style= "font-family: Times New Roman; font-size: 25px;" >Times</option>
  <option value="Sans Serif" style= "font-family: Sans Serif; font-size: 25px;">SS</option>
  <option value="Verdana" style= "font-family: Verdana; font-size: 25px;">Verdana</option>
  <option value="Calibri" style= "font-family: Calibri; font-size: 25px;">Calibri</option>
</select>
</p>


<p>Please choose a text size:
<br>
<select name="formSize" >
  <option selected value="10px" style= "font-size: 10px;">10px</option>
  <option value="20px" style= "font-size: 20px;">20px</option>
  <option value="30px" style= "font-size: 30px;">30px</option>
  <option value="40px" style= "font-size: 40px;">40px</option>
</select>
</p>
<br>
<br>
<p>
Please enter your comments:
</p>

<p>
Start Writing:
<textarea name="text" rows="20" cols="20">
</textarea>
</p>


<input type="submit" name="formSubmit" value="Submit">
</form>
</body>
</html>