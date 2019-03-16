<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background: #edf4f7;
}

.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}


* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div class="content">
<form action="signupDo.php" action="signupDo.php" method="post" name="signupform" id="signupform" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Email or Username" name="name" id="name" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

 
    
    <p>Already have an account? <a href="login.php" style="color:dodgerblue">Login</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</div>

</body>
<script type="application/javascript" src="plugins/jquery/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function() {

    $('#signupform').submit(function() {

        $.ajax({
            type: "POST",
            url: 'signupDo.php',
            data: {
                email: $("#email").val(),
                password: $("#password").val(),
				name: $("#name").val()
            },
            success: function(data)
            {
                if (data === 'true') {
					
					alert('Successfully Registered, Login Now !');
                    window.location.replace('login.php');
                }
                else {
                    alert(data);
                }
            }
        });
        return false; 
    });

});
</script>
</html>