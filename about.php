<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
</head>
<style>

      
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30%;
  margin-bottom: 10px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 5px;
  text-align: center;
  color: #474e5d;
}

.container {
  padding: 5 10px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


@media screen and (max-width: 500px) {
  .column {
    width: 80%;
    display: block;
  }
}
</style>

<body>
<?php include 'home.php' ?>

<div class="about-section">
  <h3>About Coffee</h3>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="vanilla.jpg" alt="vanilla" style="width:100%">
      <div class="container">
        <h2>Vanilla</h2>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="mocha.jpg" alt="mocha" style="width:100%">
      <div class="container">
        <h2>Mocha</h2>
       
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="chocolate.jpg" alt="chocolate" style="width:100%">
      <div class="container">
        <h2>chocolate</h2>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>
