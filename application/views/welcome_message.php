<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href=<?="".base_url()."packaged/css/semantic.css"?>>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script>
  <script src=<?="".base_url()."packaged/javascript/semantic.js"?>></script>
  <link rel="stylesheet" type="text/css" href=<?="".base_url()."css/feed.css"?>>
  <link rel="stylesheet" type="text/css" href=<?="".base_url()."css/homepage.css"?>>

	<script>
	$('.ui.form').form({
    firstName: {
      identifier  : 'first-name',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your first name'
        }
      ]
    },
    lastName: {
      identifier  : 'last-name',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your last name'
        }
      ]
    },
    username: {
      identifier : 'username',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a username'
        }
      ]
    },
    password: {
      identifier : 'password',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a password'
        },
        {
          type   : 'length[6]',
          prompt : 'Your password must be at least 6 characters'
        }
      ]
    }
    
  });

	</script>


</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div class="ui info message">
  <i class="help icon"></i>A validation object includes a list of form elements, and rules to validate each against. Fields are matched by either the id tag, name tag, or data-validate metadata matching the identifier provided in the settings object. To pass parameters to a rule, use bracket notation
</div>
<div class="ui form segment">
  <p>Let's go ahead and get you signed up.</p>
  <div class="two fields">
    <div class="field">
      <label>First Name</label>
      <input placeholder="First Name" name="first-name" type="text">
    </div>
    <div class="field">
      <label>Last Name</label>
      <input placeholder="Last Name" name="last-name" type="text">
    </div>
  </div>
  <div class="field">
    <label>Username</label>
    <input placeholder="Username" name="username" type="text">
  </div>
  <div class="field">
    <label>Password</label>
    <input type="password" name="password">
  </div>
  <div class="inline field">
    <div class="ui checkbox">
      <input id="termsCHeckBox" type="checkbox" name="terms">
      <label for="termsCHeckBox">I agree to the terms and conditions</label>
    </div>
  </div>
  <div class="ui blue submit button">Submit</div>
</div>

</div>

</body>
</html>