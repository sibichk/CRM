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
			<li class="active"><span><span><a href="<?php echo base_url();?>index.php/welcome/user_log">User Login</a></span></span></li>
			<li><span><span><a href="<?php echo base_url();?>index.php/welcome/admin_log">Administrator Login</a></span></span></li>
			<li><span><span><a href="<?php echo base_url();?>index.php/welcome/cli_log">Client Login</a></span></span></li>
			
		</ul>
	</div>
	<div id="middle">
		<div id="left-column">
			
        </div>
        
    	     <?php echo $this->load->view($page); ?>
				
		
		<div id="right-column">
			
	  </div>
	</div>
	<div id="footer"></div>
</div>


</body>
</html>
