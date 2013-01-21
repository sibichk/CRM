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
			var x=document.getElementById("uname").value;
			if (x==null || x=="")
  				{
					alert("First name must be filled out");
					return false;
  				}
			else
				{
					var y=document.getElementById("upass").value;
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
		<div class="center-left">
        	<div class="usr">
				<h1>Sign In</h1>
			</div><br />
                
          <div class="sign-in">
            <?php 
              $attributes = array('name' => 'users' , 'onsubmit' =>"return validateForm()");
			  echo form_open('welcome/usr_check',$attributes);?>
				<table>
                     Use name and password do not match
                	<tr><td> User name</td><td><input type="text" id="uname"  name="uname"/><br></td>
        			</tr>
        			<tr> <td>Password</td><td><input type="password"  id="upass" name="upass"/></td>
        			</tr>
                    <tr> <td></td><td><button type="submit">Login</button></td>
                    </tr>
               </table>
        			
          <?php echo form_close(); ?>
        </div>
      </div>
      <div class="center-right">
			
	  </div>
</div>
	
</body>
</html>
