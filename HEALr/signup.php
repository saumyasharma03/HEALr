<!DOCTYPE html>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Fira+Sans:wght@400;700&family=Merriweather:wght@700&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&family=Merriweather:wght@700&family=Oswald:wght@700&display=swap"
      rel="stylesheet"
    />
    <link href="styles.css" rel="stylesheet" />
    <title>Sign Up Page</title>
  </head>
  
  <body>
    <img src="assets\flc_design20230414138647.png" alt="" />
    <h1>SIGN UP</h1>
    <div class ="form">
    <form action="#" method="post">
      <label for="firstName">First Name: </label>
      <input type="text" id="firstName" name="firstName" required /><br /><br />
      <label for="lastName">Last Name: </label>
      <input type="text" id="lastName" name="lastName" required /><br /><br />
      <label for="email">Email: </label>
      <input type="email" id="email" name="email" required /><br /><br />
      <label for="password">Password:</label>
      <input
        type="password"
        id="password"
        name="password"
        minlength="8"
        required
      /><br /><br />
      <label for="confirmPassword">Confirm Password:</label>
      <input
        type="password"
        id="confirmPassword"
        name="confirmPassword"
        minlength="8"
        required
      /><br /><br />
      <p><a href="form.php">Sign UP</a></p>
      
    </form>
  </div>
  </body>
</html>
