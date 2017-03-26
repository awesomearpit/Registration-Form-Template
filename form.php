<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.a{text-decoration:underline;font-weight:bold;font-style:italic;}
		.b{background:rgb(2,69,137);background-size:100% 100%;margin-top:70px;padding:10px}
		.c{background:rgb(255,255,255);}
		.d{padding-bottom:20px;}
	</style>
</head>
<body>
<div class="container-fluid c">
  <div class="container d">
    <div class="row">
      <div class="col-md-6 b col-md-offset-3">
	       <form role="form" onsubmit="return check_pass();" action="form_action.php" method="post">
          <div class="form-group"> 
            <input type="text" class="form-control" placeholder="Username" name="username">
          </div> 
          <div class="form-group">  
            <input type="password" class="form-control" placeholder="Choose your Password" name="pass" id="pass">
          </div>
          <div class="form-group">  
            <input type="password" class="form-control" placeholder="Confirm Password" name="c_pass" id="confirmpass">
          </div> 
          <div class="form-group">  
            <input type="email" class="form-control" onchange="ff();" placeholder="Email" name="email">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">  
                <input type="text" class="form-control" placeholder="First Name" name="fname">
              </div>
            </div>
            <div class="col-md-6">    
              <div class="form-group">  
                <input type="text" class="form-control" placeholder="Last Name" name="lname">
              </div>
            </div>
          </div>
          <div class="form-group"> 
              <select class="form-control" id="sell">
                <option >Gender</option>
                <option name="gender" value="male">Male</option>
                <option name="gender" value="female">Female</option>
                <option name="gender" value="other">Other</option>
              </select> 
          </div>
          <div class="row">
            <div class="col-md-2">
              <button type="submit" class="btn btn-default">Sign up</button>
            </div>
            <div class="col-md-2">
              <button type="reset" class="btn btn-default">Reset</button>
            </div>   
            <div class="col-md-2">
              <button type="cancel" class="btn btn-default">Cancel</button>
            </div>
          </div>
          <span id="spanid"></span>  
          </form>
        </div>
      </div>
    </div>
</div>


<script>
  function check_pass(){
    var pass = document.getElementById('pass').value;
    var confirmpass = document.getElementById('confirmpass').value;
    if(pass == confirmpass){
      // alert('succesfully');
      return true;
    }
    else{
      alert('please renter a confirm password');
      return false;
    }
  }
  function ff(){
    var a= $('#email').val();

    $.ajax({
      type: "POST",
      url: 'form_ajax.php',
      data:{a1:a},      
      success:function(data){
        if(data == "1"){
          document.getElementById('spanid').style.display="block";
        }
        else {
          document.getElementById('spanid').style.display="none";
        }
      }
    }); 
  }
</script>

<script rel="javascript" src="js/jquery-1.11.0.min.js"></script>

</body>
</html>