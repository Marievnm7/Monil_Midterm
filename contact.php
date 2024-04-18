<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Contact Form</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head> 
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
   
}
.container{
    width: 1000px!important;
}
p{
    font-size: 12px;
}
h1{
    font-family: Verdana, Geneva, Tahoma, sans-serif!important;
}
.bg-primary{
    background-color: #01d28e !important;
    font-family:Verdana, Geneva, Tahoma, sans-serif!important;

}
.form-control {
    height: 36px;
    background: #fff;
    color: rgba(0, 0, 0, 0.8);
    font-size: 14px;
    border-radius: 2px;
    box-shadow: none !important;
    border: 1px solid rgba(0, 0, 0, 0.1);
}
.contactForm .form-control {
    border: none;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 0;
}


.form-control:focus,.form-control:active {
    border-color: #01d28e !important;
}
.form-label {
    color: #000;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 0.5rem;
}
.btn.btn-primary {
    background: #01d28e !important;
    border-color: #01d28e !important;
    color: #fff;
    width: 100px;
    border-radius: 0!important;
    
}
.btn.btn-primary:hover{
    background-color: #28a745!important;
}

.bi{
    font-size: 50px;
}
@media only screen and (max-width: 600px) {
    .container{
        width: 100%!important;
        padding-bottom: 207px!important;
    }
  }
  </style>
<body>
    <div class="container mt-5 shadow ">
        <div class="row ">
            <div class="col-md-4 bg-primary p-5 text-white order-sm-first order-last">
                <h2>Ask Here!</h2>
                <p>We're open for any suggestion or just to have a chat</p>
                <div class="d-flex mt-2">
                    <i class="bi bi-geo-alt"></i>
                    <p class="mt-3 ms-3">Address : Danao Technological College Balico Poblacion Dana0 Bohol 6344</p>
                </div>
                <div class="d-flex mt-2">
                    <i class="bi bi-telephone-forward"></i>
                    <p class="mt-4 ms-3">Phone : 09516141653</p>
                </div>
                <div class="d-flex mt-2">
                    <i class="bi bi-envelope"></i>
                    <p class="mt-4 ms-3">Email : monilanamarie2@gmail.com</p>
                </div>
                <div class="d-flex mt-2">
                    <i class="bi bi-youtube"></i>
                    <p class="mt-4 ms-3">Channel : www.contactform.com/</p>
                </div>
            </div>
            <div class="col-md-8 p-5 ">
                <h2>Get in touch</h2>
                <form class="row g-3 contactForm mt-4">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">First Name</label>
                      <input type="email" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Last Name</label>
                      <input type="password" class="form-control" id="inputPassword4" required>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Subject</label>
                      <input type="text" class="form-control" id="inputAddress" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Email Id</label>
                        <input type="text" class="form-control" id="inputAddress" required>
                      </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="inputCity" required>
                      </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary mt-3">Sign in</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
