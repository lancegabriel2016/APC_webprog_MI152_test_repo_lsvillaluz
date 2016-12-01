<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" href="<?php echo base_url();?>uploads/style.css" type="text/css" />
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
</head>
<body>
<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - <a href="http://cleartuts.blogspot.com" target="_blank">By Cleartuts</a></label>
    </div>
</div>
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
</body>

</html>	