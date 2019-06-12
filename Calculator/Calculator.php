<html>
<body bgcolor=" #436060"  >
  <head>
    <title>Tim's assignment</title>
  </head>
  <div class="form-calc">
    <div class="form-wrapper">
      <form action="calc_calc.php" method="POST">
        <h1 style="font-size:25px; color:#fff;  font-weight: bold; text-shadow: 1px 1px; font-family: verdana, arial, sans-serif";>My calculator</h1>
        <input type="text" name="number1" placeholder="Type number/multiplier/factor" >
        <select name="Operations">
          <option name="add">add</option>
          <option name="subtract">subtract</option>
          <option name="divide">divide</option>
          <option name="multiply">multiply</option> 
        </select>
        <input type="text" name="number2" placeholder="Type a number" ><br>
        <input type="submit" value="Calculate" name="Calculate"><br>
        <input type="submit" value="Times" name="Times"><br>
        <input type="submit" value="Factor / Square root" name="Factor"><br><br>

        <input type="text" name="number4" >
        <select name="select">
          <option value="meter" id="meters">Meters</option>
          <option value="cm" id="cm">Cm</option>
          <option value="foot" id="feet">Feet</option>
          <option value="inches" id="inches">Inches</option>
          <input type="submit" value="convert" name="convert">
        </form>
      </div>
    </div>
    <div>
      <form class="faq" action="faq.html">
        <input type="submit" value="Frequently asked questions(?)">
      </form>
    </div>

    <style>

    .form-calc form input {
      width:15%;
      height:3%;
    }

    .form-wrapper {
      margin-top : 22%;
      padding-left:33%;
    }

    .faq {
      margin-left: 33%;

    }

  </style>
</body>
</html>
