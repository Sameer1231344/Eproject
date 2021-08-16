<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calc_style.css">
</head>
<body>
<div class="calculator">
<form action="calc_php.php" method = "post">
<input type="text" class="calculator-screen" value="0" disabled name="screen"/>

<div class="calculator-keys">
  
  <button type="button" class="operator" value="+" name="addbtn">+</button>
  <button type="button" class="operator" value="-" name="subbtn">-</button>
  <button type="button" class="operator" value="*" name="multbtn">&times;</button>
  <button type="button" class="operator" value="/" name="divbtn">&divide;</button>


  <button type="button" value="9" name="nine" >9</button>
  <button type="button" value="8" name="eigth">8</button>
  <button type="button" value="7" name="seven">7</button>

  
  <button type="button" value="6" name="six">6</button>
  <button type="button" value="5" name="five">5</button>
  <button type="button" value="4" name="four">4</button>

  
  <button type="button" value="3" name="three">3</button>
  <button type="button" value="2" name="two">2</button>
  <button type="button" value="1" name="one" >1</button>
 

  <button type="button" value="0" name="zero">0</button>
  <button type="button" class="decimal" value="." name="decbtn">.</button>
  <button type="button" class="all-clear" value="all-clear" name="clrbtn">AC</button>
  <button type="submit" class="equal-sign" value="=" name="btnsubmit">=</button>

</div>
</form>
</div>

</body>
</html>