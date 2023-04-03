<?php require_once 'include/header.php'?>

<body>
    
    <marquee><h1 class= "text-center">Registration for IT conference</h1></marquee>

<form>


<form>
    
  <div class="form-group">
    <label for="exampleInputFname">First Name</label>
    <input type="text" placeholder="Enter   Your First Name" class="form-control" id="exampleInputFname">
  </div>

    
  <div class="form-group">
    <label for="exampleInputLname">Last Name</label>
    <input type="text" placeholder="Enter Your Last Name" class="form-control" id="exampleInputLname">
  </div>

  <div class="form-group">
    <label for="bdaymonth">Date of Birth</label>
    <input type="month" id="bdaymonth" name="bdaymonth">
 
  </div>
  <fieldset class="form-group row">

<legend class="col-form-label col-sm-2 float-sm-left pt-0">Specialty</legend>
<div class="col-sm-10">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
    <label class="form-check-label" for="gridRadios1">
      Data Base Admin
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
    <label class="form-check-label" for="gridRadios2">
      Software Developer
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3" >
    <label class="form-check-label" for="gridRadios3">
     Web Administrator
    </label>
  </div>

  <div class="form-check ">
    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3">
    <label class="form-check-label" for="gridRadios3">
     Other
    </label>
  </div>

</div>
</fieldset>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" placeholder="Enter Your Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputCnumber">Contact Number</label>
    <input type="number" placeholder="Enter Contact Number" class="form-control" id="exampleInputCnumber" aria-describedby="emailHelp">
  </div>
  <input type="submit" class="btn-primary btn-block" value="Submit">
 
  
</form>
  
<?php require_once 'include/footer.php'?>