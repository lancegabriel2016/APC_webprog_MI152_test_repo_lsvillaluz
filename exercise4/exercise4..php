<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Basketball.";
	}
	function myFunction2() {
    document.getElementById("demo").innerHTML = "SInigang.";
	}
	function myFunction3() {
    document.getElementById("demo").innerHTML = "Facebook";
	}
	function myFunction4() {
    document.getElementById("demo").innerHTML = "Defense of the Ancients 2";
	}
	function myFunction5() {
    document.getElementById("demo").innerHTML = "Joemari.";
	}
</script>
<title>My First HTML</title>
<style>
body { background-color : black;
 }
 
h1 { color: white; 
	  text-align: center;
	  }
	  
p { color: white;
}
ul { color: yellow ;
}
h3 { color: yellow ;
}
h4 { color: yellow;
}
</style>
</head>
<body>




<h1>Lance Gabriel Villaluz's Profile</h1>

<h4>About Me</h4>
<ul>
<li>17 years old</li>
<li>2nd year Student</li>
<li>APCians</li>
<li>BSIT-MI</li>
</ul>



<p><h3>My Hobbies and Interests</p>
Playing Basketball
<p><img src="06d9ed3ba5c4630e720f6a7067004a15.jpg"></p>
<p><a href="http://www.nba.com/">Where you can find the lastest update in Basketball</a></p>

Programming
<p><img src="Programming-Coding-Geoawesomeness.jpg" width="388" height="328"></p>

Sleeping
<p><img src="07c99609e7a32179fbd8544a62e86255.jpg" height="328" width="388"> Sleeping is my 
drug,the dealer is 
my bed and the alarm clock is the police</p>

<h1>Answer</h1>
<p id="demo"></p>

    <h4>What is my Hobby?</h4>
	<button type="button" onclick="myFunction()">Try it</button>
    <h4>What is my favorite food?</h4>
	<button type="button" onclick="myFunction2()">Try it</button>
    <h4>What is my favorite app?</h4>
	<button type="button" onclick="myFunction3()">Try it</button>
	<h4>What is my favorite PC Game?</h4>
	<button type="button" onclick="myFunction4()">Try it</button>
	<h4>Who is my bestfriend?</h4>
	<button type="button" onclick="myFunction5()">Try it</button>
	
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>	

</body>
</html>