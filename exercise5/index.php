<?php
include_once 'dbconfig.php';
// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
<title>My First HTML</title>
<style>
body { background-color : gray;

 }
 body {
	background-image: url ("wood.jpg")
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
tr,table {border:2px solid black;padding:3px;}
.sagot {font-family:Arial;font-size:14px;font-weight:bold;}

.example1 {
 height: 50px;	
 overflow: hidden;
 position: relative;
}

.example1 h1{
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: example1 15s linear infinite;
 -webkit-animation: example1 15s linear infinite;
 animation: example1 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes example1 {
 0%   { 
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%); 
 }


</style>
</head>
<div class="sagot">
<script >

function myFunction() {
    document.getElementById("demo").innerHTML = "Basketball.";
	}
	function myFunction2() {
    document.getElementById("demo").innerHTML = "Sinigang.";
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
</div>



<div class="example1">
<h1>Lance Gabriel Villaluz's Profile</h1>
</div>

<center>
<img src="https://media.giphy.com/media/QQkyLVLAbQRKU/giphy-downsized-large.gif">
</center>

<h4>About Me</h4>
<ul>
<li>17 years old</li>
<li>2nd year Student</li>
<li>Asia Pacific College</li>
<li>BSIT-MI</li>
</ul>



<center>	
<p><h3>My Hobbies and Interests</p>
Playing Basketball
<p><img src="06d9ed3ba5c4630e720f6a7067004a15.jpg"></p>
<p><a href="http://www.nba.com/">Where you can find the lastest update in Basketball</a></p>

Programming
<p><img src="Programming-Coding-Geoawesomeness.jpg" width="388" height="328"></p>


Sleeping
<p><img src="07c99609e7a32179fbd8544a62e86255.jpg" height="328" width="388"> 
<br>
Sleeping is my 
drug,the dealer is 
my bed and the alarm clock is the police</p>
</center>


<h1>Answer</h1>
<p id="demo"></p>
<table style="width:100%;font-size:20px;">
<tr  rowspan="5">
<td>
    <h4>What is my Hobby?</h4>
	<button type="button" onclick="myFunction()">Try it</button>
</td>
<td>
    <h4>What is my favorite food?</h4>
	<button type="button" onclick="myFunction2()">Try it</button>
</td>
<td>
    <h4>What is my favorite app?</h4>
	<button type="button" onclick="myFunction3()">Try it</button>
</td>
<td>
	<h4>What is my favorite PC Game?</h4>
	<button type="button" onclick="myFunction4()">Try it</button>
</td>
<td>
	<h4>Who is my bestfriend?</h4>
	<button type="button" onclick="myFunction5()">Try it</button>
</td>	
</table>

<center>

<div id="header">
 <div id="content">
    <label>Add Database</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="8"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>Name</th>
    <th>Nickname</th>
    <th>Email</th>
	<th>Address</th>
	<th>Gender</th>
	<th>Cellphone Number</th>
	
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($link, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>

	
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
</center>




</body>
</html>