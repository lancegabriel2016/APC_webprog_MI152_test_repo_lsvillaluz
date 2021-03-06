<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="<?php echo base_url();?>uploads/style.css" type="text/css" />
</head>

<body>

<form method="post" action="<?php echo base_url();?>index.php/users/update">
<?php
extract($users);
?>
<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>
<div id="body" style="margin-left: 220px;">
 <div id="content">
<table align="center">
    <tr>
    <td><input type="text" name="name" placeholder="Complete Name" value="<?php echo $name; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $nickname; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email Address" value="<?php echo $email; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="Home Address" value="<?php echo $address; ?>" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo $gender; ?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo $gender; ?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="number" name="cp_number" placeholder="Cellphone Number" value="<?php echo $cp_number; ?>" required /></td>
    </tr>
	<tr>
	<td>
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <button type="submit" name="submit" value="Update" /><strong>UPDATE</strong></button>
	<a href="<?php echo base_url();?>index.php/users/view"><strong>Cancel</strong></a></button>
    </td>
    </tr>
    </table>
</div>
</div>
</form>

</body>

</html>