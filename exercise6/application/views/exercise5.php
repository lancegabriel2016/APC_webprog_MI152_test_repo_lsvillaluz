<!DOCTYPE html>
<html>
<head>
<title>My First HTML</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>uploads/style.css">
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
<body>
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
<p><img src="http://127.0.0.1/exercise6/uploads/06d9ed3ba5c4630e720f6a7067004a15.jpg"></p>
<p><a href="http://www.nba.com/">Where you can find the lastest update in Basketball</a></p>

Programming
<p><img src="http://127.0.0.1/exercise6/uploads/Programming-Coding-Geoawesomeness.jpg" width="388" height="328"></p>


Sleeping
<p><img src="http://127.0.0.1/exercise6/uploads/07c99609e7a32179fbd8544a62e86255.jpg" height="328" width="388"> 
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
<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - <a href="http://cleartuts.blogspot.com" target="_blank">By Cleartuts</a></label>
    </div>
</div>
<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Sure to edit ?");
else
var r=confirm("Sure to Delete ?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>
<a href = "<?php echo base_url();?>index.php"> <center><h2> Back to main page</h2></a>
<div id="body">
	<div id="content">
		<table align="center">
			<tr>
				<th colspan="9" align="center"> <a href="<?php echo base_url();?>index.php/users/add_form">add data here.</a></th>
			</tr>
			<tr>
				<th>Name</th>
				<th>Nickname</th>
				<th>Email</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Cellphone Number</th>
				<th colspan="2">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->email; ?></td>

				<td><?php echo $u_key->address; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cp_number; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>
<center>
</body>
</html>