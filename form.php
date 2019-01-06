<!DOCTYPE html>
<html>
<head>
<title>FORM VALIDATION</title>
  <meta charset="UTF-8">
  <meta name="description" content="FORM VALIDATION">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="BASIT MIR">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- StyleSheet -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
 
</head>
<body>
  <h2>Form Validation</h2>


  
<form class="container" method="post" id="form">
<div class="form-row">

<div class="form-group col-8 offset-2">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Tell us your Name">
    <small class="form-text" style="color:red"></small>
  </div>
  

  <div class="form-group col-8 offset-2">
    <label for="exampleInputNumber">Mobile Number</label>
    <input type="text" class="form-control" id="phone" placeholder="Enter Phone No.">
    <small class="form-text" style="color:red"></small>
    <small class="form-text text-muted">We'll never share your Number with anyone else.</small>
  </div>


  <div class="form-group col-8 offset-2">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small class="form-text" style="color:red"></small>
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group col-8 offset-2">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
    <small class="form-text" style="color:red"></small>
  </div>

  <div class="form-group col-8 offset-2">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option  value="J&K">J&K</option>
        <option  value="DELHI">DELHI</option>
        <option  value="PUNJAB">PUNJAB</option>
        <option  value="BANGLORE">BANGLORE</option>
      </select>
      <small class="form-text selected" style="color:red"></small>
    </div>

  <div class="form-group col-8 offset-2">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="textArea" rows="3"></textarea>
    <small class="form-text" style="color:red"></small>
  </div>


  <div class="form-group form-check col-8 offset-4">
    <input type="checkbox" class="form-check-input" id="terms">
    
    <label class="form-check-label" for="exampleCheck1" >Terms & Conditons</label>
    <small class="form-text" style="color:red" id="validateCheck"></small>
   
  </div>
  <input type="submit" class="btn btn-primary col-4 offset-4 disabled" id="submit" value="Submit" name="submit"><br>
 

  </div>
  <h6 class="form-text msg" style="color:red"></h6>
</form>






</body>
<!-- Js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="validate.js"></script>
</html>