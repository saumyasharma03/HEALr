
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="form.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Fira+Sans:wght@400;700&family=Josefin+Sans:wght@500&family=Merriweather:wght@700&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Fira+Sans:wght@400;700&family=Merriweather:wght@700&family=Oswald:wght@700&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@1,300&display=swap"
      rel="stylesheet"
    />

    
    <link
      href="https://fonts.googleapis.com/css?family=Ubuntu"
      rel="stylesheet"
    />
    <title>REGiSTRATION</title>
  </head>

  <body class="zzzz">
    <!-- <header class="header">
        <img id="logo" src="assets\flc_design20230414138647.png">
      

      <nav class="navbar">
        <a href="xyz.html">Home</a>

        <a href="emergency.html">Emergency  </a>
        <a href="book.html">Book  </a>
        <a href="dds.html">Do's & Don'ts  </a>
        <a href="resource.html">Resources  </a>
        <a href="form.html">Register  </a>

        <div class="dropdown">
          <button class="dropbtn">
            More Links
            <i class="fas fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="doctors.html">doctors</a>
            <a href="review.html">review</a>
            <a href="blog.html">blogs</a>
          </div>
        </div>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
    </header> -->

    <div class="FORM-BOX">
      <h2>REGISTER NOW</h2>
      <form action='connect.php' method="POST">
      <div class="inputBox">
        <label
          >First Name:<input
            type="text"
            name="fname"
            placeholder="   First name"
            required
        /></label>
        <label
          >Last Name:<input
            type="text"
            name="lname"
            placeholder="    Last name"
            required
        /></label>
      </div>

      <div class="inputBox">
        <br />
        <label
          >Email:
          <input
            type="email"
            name="mail"
            pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}"
            placeholder="email-id" 
            required
        /></label>
      </div>

      <div>
        <br />
        <label
          >Password:<input
            type="password"
            name="pass"
            pattern=".{10,}"
            placeholder="   More than 10 Characters"
            required
        /></label>
      </div>

      <h4>Select Gender:</h4>
      <div class="inputBox">
        <label
          >Male:
          <input id="male" type="radio" name="gender" value="Male" required
        /></label>
      </div>
      <div>
        <label
          >Female:
          <input id="female" type="radio" name="gender" value="female" required
        /></label>
      </div>
      <div>
        <label
          >Other:
          <input id="other" type="radio" name="gender" value="other" required
        /></label>
      </div>

      <div class="inputBox">
        <br />
        <label
          >Contact No.:
          <input
            type="text"
            name="mobile1"
            pattern=".{10,}"
            placeholder="   mobile no."
            required
        /></label>
      </div>
      <br />
      <div class="inputBox">
        <label
          >Alternate No.:
          <input
            type="text"
            name="mobile2"
            pattern=".{10,}"
            placeholder="   mobile no."
            optional
        /></label>
      </div>

      <div class="inputBox">
        <br />
        <label>Date Of Birth: <input type="date" name="dob" required /></label>
      </div>
      <div class="inputBox">
        <br />

        <label
          >Blood Group:<input
            type="text"
            name="bgroup"
            placeholder="Enter Blood group"
            required
        /></label>

      </div>
      <br />
      <div class="inputBox">
        <label
          >Address:<input
            type="text"
            name="ddress"
            placeholder="   Address"
            required
        /></label>
      </div>
      <div class="inputbox">
        <h4></h4>
        <br><br>
        <input type="checkbox" name="agree" required /><span
          class="slider round"
        ></span>
        <label>I Agree To Terms And Conditions: </label>
      </div>
      <br />
      <div class="inputBox">
        <input type='submit' formaction=' home.php' name='submit' id="submit" />
      </div>
    </div>
</form>
  </body>
</html>
