<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Admin</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link href="<?php echo base_url(); ?>css/all.css" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url(); ?>css/favicon(1).gif" rel="shortcut icon" media="screen" />
    <script>
		function passwordval()
			{
    			var x=document.getElementById("pass1").value;
				var y=document.getElementById("pass2").value;
				if (x!==y)
  				{
					alert("passwords do not match");
					return false;
  				}
			}
			
	</script>
</head>
<body>
<div id="main">
	<div id="header">
		<a href="index.html" class="logo"><img src="<?php echo base_url(); ?>img/logo.gif" width="101" height="29" alt="" /></a>
		<ul id="top-navigation">
			<li class="active"><span><span><a href="<?php echo base_url();?>index.php/welcome/user_log">User Login</a></span></span></li>
			<li><span><span><a href="<?php echo base_url();?>index.php/welcome/admin_log">Administrator Login</a></span></span></li>
			<li><span><span><a href="<?php echo base_url();?>index.php/welcome/cli_log">Client Login </a></span></span></li>
		
		</ul>
	</div>
	<div id="middle">
		<div id="left-column">
			<h3>User Panel </h3>
			<ul class="nav"> 
         		<li><a href="<?php echo base_url();?>index.php/welcome/per_dl"> Personal Details </a></li>
				<li><a href="<?php echo base_url();?>index.php/welcome/pro">View Products</a></li>
				<li><a href="<?php echo base_url();?>index.php/welcome/u_order">Order</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/com">Complain</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/ch_ps">Change Password</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/pro_img">Product Images</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/login_check">Sign Out</a></li>
		   </ul>
		
	  </div>
          <div  id="center">
          
    		 
			 
		  </div>
		<div id="right-column">
			<strong class="h">INFO</strong>
			<div class="box">Detect and eliminate viruses and Trojan horses, even new and unknown ones. Detect and eliminate viruses and Trojan horses, even new and </div>
	  </div>
	</div>
	<div id="footer"></div>
</div>
</div>


</body>
</html>
