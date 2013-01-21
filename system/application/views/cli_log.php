<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Admin</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link href="<?php echo base_url(); ?>css/all.css" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url(); ?>css/favicon(1).gif" rel="shortcut icon" media="screen" />
     <script>
 	function validateForm()
		{
			var x=document.getElementById("cname").value;
			if (x==null || x=="")
  				{
					alert("Client name must be filled out");
					return false;
  				}
			else
				{
					var y=document.getElementById("cpass").value;
					if (y==null || y=="")
   						{
							alert("Password required");
							return false;
   						}   
	   						return true;
			   }
	  }
   </script>
</head>
<body>
<div id="main">
	
	
		<div id="center-column">
			<div class="usr">
				
				<h1>Sign In</h1>
				</div><br />
                
             <div class="sign-in">
                <?php 
              		$attributes = array('name' => 'users' , 'onsubmit' =>"return validateForm()");
			  		echo form_open('welcome/cli_check',$attributes);?>
                <table>
                	<tr>
                		<td>Client name:</td> <td><input type="text" name="cname" id="cname" /></td><br /><br />
                    </tr>
                	<tr>
                    	<td>Password:</td><td> <input type="password" name="cpass" id="cpass" /></td>
                    </tr>
                	<tr>
                    	<td></td><td><button type="submit">Sign In</button></td>
                    </tr>
                </table>
              <?php echo form_close(); ?>
             </div>
		</div>
		
</div>
	



</body>
</html>
