<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<style type="text/css" media="screen">
				textarea { resize: none; }
	</style>
	<title>Admin</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link href="<?php echo base_url(); ?>css/all.css" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url(); ?>css/favicon(1).gif" rel="shortcut icon" media="screen" />
</head>
<body>
<div id="main">
	
	
		<div id="center-column">
			<div class="usr">
				
				
				</div><br />
                
            
                <form action="<?php echo base_url();?>index.php/welcome/u_com" method="post" name="complain"> 
                <table>
                	<tr>
                		<td>Complain</td> <td><textarea rows="6" cols="40" name="u_com" id="u_com"></textarea></td>
                    </tr>
                   	<tr>
                    	<td></td><td align="center"><input type="submit" value="Submit" name="submit" id="submit" /></td></td>
                    </tr>
                </table>
            
        
		</div>
		
</div>
	



</body>
</html>
