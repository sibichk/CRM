<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Admin</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link href="<?php echo base_url(); ?>css/all.css" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url(); ?>css/favicon(1).gif" rel="shortcut icon" media="screen" />
</head>
<body>
<div id="main">
	<div id="header">
		<a href="index.html" class="logo"><img src="<?php echo base_url(); ?>img/logo.gif" width="101" height="29" alt="" /></a>
		<ul id="top-navigation">
			<li><span><span><a href="<?php echo base_url();?>index.php/welcome/user_log">User Login</a></span></span></li>
			<li><span><span><a href="<?php echo base_url();?>index.php/welcome/admin_log">Administrator Login</a></span></span></li>
			<li class="active"><span><span><a href="<?php echo base_url();?>index.php/welcome/cli_log">Client Login </a></span></span></li>
			
		</ul>
	</div>
	<div id="middle">
		<div id="left-column">
			<h3>Client Panel </h3>
			<ul class="nav"> 
         		<li><a href="<?php echo base_url();?>index.php/welcome/pro_up">Update Product Details </a></li>
				<li><a href="<?php echo base_url();?>index.php/welcome/vw_pro">View Product Details</a></li>
				<li><a href="<?php echo base_url();?>index.php/welcome/own">View Own Products</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/vw_order">View Orders</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/cli_log">Sign Out</a></li>
		   </ul>
			
	  </div>
      	<div class="cnt">
    	 
                  <table> Registed Successfully
                  <a href="<?php echo base_url();?>index.php/welcome/pro_up"><input type="button" id="button" value="Go Back" /></a>
            </table>
		</div>
	
		<div id="right-column">
			<strong class="h">INFO</strong>
			<div class="box">Detect and eliminate viruses and Trojan horses, even new and unknown ones. Detect and eliminate viruses and Trojan horses, even new and </div>
	  </div>
	</div>
	<div id="footer"></div>
</div>


</body>
</html>
