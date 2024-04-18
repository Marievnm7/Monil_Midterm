<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coffee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    h1{
        text-align: center;
        font-size: 10em !important;
    }
    body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
.avatar {
  
  width: 1500px;
  height: 600px;
  border-radius: 0%;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;   
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}
</style>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="header">
    <div class="navbar">
    <a href="#default" class="logo">COFFEE BREAKS</a>
    </div>
    <div class="header-right">
    <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="about.php"><i class="fa fa-fw fa-search"></i> About</a> 
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  <a href="coffee's.php"><i class="fa fa-coffee"></i>Coffee's</a>
  
    </ul>
  </div>
</nav>
<img src="images.jpg" alt="avatar" class="avatar">

</body>
</html>
