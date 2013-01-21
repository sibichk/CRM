<?php
class Crm_model extends Model 
{
    function Crm_model()
    {
        // Call the Model constructor
        parent::Model();
    }
	
	function login_check()
	{
		$arrayConditions=array(
            'user_name' => $this->input->post('name'),
            'password' => $this->input->post('pass'),
                );
        	$query = $this->db->get_where('login',$arrayConditions, 1);
        	return $query;
	}
	
	function usr_check()
	{	
			$arrayConditions=array(
            'user_name' => $this->input->post('uname'),
            'password' => $this->input->post('upass'),
                            );
        	$query = $this->db->get_where('login',$arrayConditions, 1);
        	return $query;
	}
	
	function fetch_dl()
		{
		    $res='';
            $res.="<table width=100%><tr bgcolor=#C3C3C3><th>User Name</th><th>Email address</th></tr>";
			session_start();
			$this->db->select('*');
			$this->db->from('personal_details');
			$this->db->where('user_name',$_SESSION['user_name']);
			$query=$this->db->get();
			if($query->num_rows() > 0)
				{
				foreach ($query->result() as $info)
					{
						$res.="<tr bgcolor=#FFFFCC><td>".$info->name."</td><td>".$info->email_address."</td></tr>";
						
					}
				}
				$res.="</table>";
				return $res;
		}
		
		function u_dl()
		{
		    $res='';
            $res.="<table width=100%><tr bgcolor=#C3C3C3><th>User Name</th><th>Password</th><th>Email address</th></tr>";
			session_start();
			$this->db->select('*');
			$this->db->from('login');
			$query=$this->db->get();
			if($query->num_rows() > 0)
				{
				foreach ($query->result() as $info)
					{
						$res.="<tr bgcolor=#FFFFCC><td>".$info->user_name."</td><td>".$info->password."</td><td>".$info->email_address."</td></tr>";
						
					}
				}
				$res.="</table>";
				return $res;
		}
		
		function p_dl()
		{
		    $res='';
            $res.="<table width=100%><tr bgcolor=#C3C3C3><th>User Name</th><th>Password</th></tr>";
			session_start();
			$this->db->select('*');
			$this->db->from('cli_login');
			$query=$this->db->get();
			if($query->num_rows() > 0)
				{
				foreach ($query->result() as $info)
					{
						$res.="<tr bgcolor=#FFFFCC><td>".$info->client_name."</td><td>".$info->password."</td></tr>";
						
					}
				}
				$res.="</table>";
				return $res;
		}
		
		function own_pro()
		{   
		    $res='';
			$res.="<table cellpadding=8 width=100%><tr bgcolor=#C3C3C3><th>User Name</th><th>Product Name</th><th>Product Id</th><th>Quantities available</th><th>MRP            </th></tr>";
			session_start();
			$this->db->select('*');
			$this->db->from('product_registration');
			$this->db->where('client_name',$_SESSION['client_name']);
			$query=$this->db->get();
			if($query->num_rows() > 0)
				{
				 foreach ($query->result() as $info)
					{
						$res.="<tr bgcolor=#FFFFCC><td>".$info->client_name."</td><td>".$info->product_name."</td><td>".$info->product_id."</td><td>".$info->quantities_available."</td><td>".$info->mrp."</td></tr>";
						
					}
				}
				$res.="</table>";
				return $res;
		}
	
	function fetch_pro()
		{
			$res='';
			$res.="<table width=100%><tr bgcolor=#C3C3C3><th>Product Name</th><th>MRP</th></tr>";
			session_start();
			$this->db->select('*');
			$this->db->from('stock');
			$this->db->where('user_name',$_SESSION['user_name']);
			$query=$this->db->get();
			if($query->num_rows() > 0)
				{
				foreach ($query->result() as $info)
					{
						$res.="<tr bgcolor=#FFFFCC><td>".$info->product_name."</td><td>".$info->MRP."</td></tr>";
						
					}
				}
				$res.="</table>"; 
				return $res;
		}
		
	function cli_check()
	{
		$arrayConditions=array(
            'client_name' => $this->input->post('cname'),
            'password' => $this->input->post('cpass'),
                            );
        	$query = $this->db->get_where('cli_login',$arrayConditions, 1);
        	return $query;
	}
	
	function admin_check()
	{
		$arrayConditions=array(
            'admin_name' => $this->input->post('aname'),
            'password' => $this->input->post('apass'),
                            );
        	$query = $this->db->get_where('administrator',$arrayConditions, 1);
        	return $query;
	}
	
    function buy()
	{
		session_start();
		$id=$_GET['pro_id'];
		$id1=$_SESSION['user_name'];
		$id2=$_GET['pro_name'];
		$data=array(
					'cust_name' => $id1,
					'product_name' =>$id2,
					'product_id' =>$id
					
					);
		
		 	$dbRet=$this->db->insert('user_history',$data);
		
		
				
	}
		
                       
	function del()
		{
			$id='';
			$id=$_GET['e_ad'];
			$this->db->where('email_address',$id);
			$query=$this->db->delete('login');
		}		
			
			
	function up_pr()
		{
			session_start();
			$this->db->select('*');
			$this->db->from('product_details');
			$this->db->where('user_name',$_SESSION['user_name']);
			$query=$this->db->get();
			if($query->num_rows() > 0)
				{
				foreach ($query->result() as $info)
					{
						$res=$info->name." ".$info->email_address;
						
					}
				}
				return $res;
		}
		
		
		function vw_com()
			{
				$res='';
				$this->db->select('*');
				$this->db->from('complains');
				$query=$this->db->get();
				if($query->num_rows() > 0)
					{
					$res.="<table cellpadding=10 width=100%><tr bgcolor=#C3C3C3><th>Complain</th><th>User Name</th></tr>";
					foreach ($query->result() as $info)
						{
							$res.="<tr bgcolor=#FFFFCC><td>".$info->user_complain."</td><td>".$info->user_name."</td></tr>";
						
						}
					}
				$res.="</table>";
				return $res;
			}


								
	function registration()
		{
			 $output='';
			 $file_data=' ';
	        $config['upload_path'] = 'D:\wamp\www\CRM\system\uploads/';
    	    $config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size'] = '19024';
        	$this->load->library('upload');
        	foreach($_FILES as $key => $value)
        	{
         		if( ! empty($key))
            	{
		          $this->upload->initialize($config);
                  if ( ! $this->upload->do_upload($key))
         		  {
                	  print_r($errors[] = $this->upload->display_errors());
              	  }
              		else
              		{
                         $file_data = $this->upload->data();
       		             //$origFileName=$file_data['img'];
						                  
             		 }
               }
           
          	}
          $data = array( 
                             'product_name'=>$_POST['p_name'],
                          	 'product_image'=>$_FILES['file_upload']['name'],
                           	 'product_id'=>$_POST['p_id'],
                           	 'quantities_available'=>$_POST['qn'],
						   	 'mrp'=>$_POST['mrp'],
						           
                        );
                        $dbRet =$this->db->insert('product_registration',$data);
      
	}
	
	function complain()
				{
						session_start();
						$id=$_SESSION['user_name'];
						 $data = array( 
                             'user_complain'=>$_POST['u_com'],
							 'user_name' => $id,
					);
					$dbRet =$this->db->insert('complains',$data);
				}	
			
	
		function vw_pro()
		{
			session_start();
			$res='';
			$this->db->select('*');
			$this->db->from('product_registration');
			$query=$this->db->get();
			if($query->num_rows() > 0)
				{
				$res.="<table cellpadding=10 width=100%><tr bgcolor=#C3C3C3><th>Product Name</th><th>Product id</th><th>Quantities available</th><th>MRP</th></tr>";
				foreach ($query->result() as $info)
					{
						$res.="<tr bgcolor=#FFFFCC><td>".$info->product_name."</td><td>".$info->product_id."</td><td>".$info->quantities_available."</td><td>".$info->                        mrp."</td></tr>";
																
					}
									
				}
				$res.="</table>";
				return $res;
		}
		
		function u_order()
		{
			session_start();
			$res='';
			$this->db->select('*');
			$this->db->from('product_registration');
			$query=$this->db->get();
			if($query->num_rows() > 0)
				{
				$res.="<table cellpadding=10 width=100%><tr bgcolor=#C3C3C3><th>Product Name</th><th>Product id</th><th>Quantities available</th><th>MRP</th></tr>";
				foreach ($query->result() as $info)
					{
    				   $res.="<tr bgcolor=#FFFFCC><td>".$info->product_name."</td><td>".$info->product_id."</td><td>".$info->quantities_available."</td><td>".$info->			                       mrp."</td><td><a href=".base_url()."index.php/welcome/buy?c=welcome&m=buy&pro_id=".$info->product_id."&pro_name=".$info->product_name."><input 																																					                       type=button value=buy></a></td>                       </tr>";
										
					}
									
				}
				$res.="</table>";
				
				return $res;
		}
		
		function pro_img()
			{
				$res='';
				$res="<img src=<?php echo base_url();?>system\uploads\S.jpg>";
				return 	$res;
			}
			
			function u_del()
			{	
				 $res='';	
				 $this->db->select('*');
				 $this->db->from('login');
				 $query=$this->db->get();
				 if($query->num_rows() > 0)
				 {
					$res.="<table cellpadding=10 width=100%><tr bgcolor=#C3C3C3><th>User Name</th><th>Password</th><th>Email address</th><th>Delete</th></tr>";
					foreach ($query->result() as $info)
					{
						$res.="<tr bgcolor=#FFFFCC><td>".$info->user_name."</td><td>".$info->password."</td><td>".$info->email_address."</td><td><a href=".base_url().                         "index.php/welcome/del?c=welcome&m=del&e_ad=".$info->email_address."><input type=button value=delete user></a></td></tr>";                         								
					}
									
				}
				$res.="</table>";
				return $res;			
			}
			
				function ch_ps()
			{
				$res='';
				$id= $_POST['pass'];
				$id1=$_POST['pass1'];
				$this->db->select('*');
				$this->db->from('login');
				$this->db->where('password',$id);
				$query=$this->db->get();
				if($query->num_rows() <= 0)
					{
					echo "Password wrong";
					}
				$data=array('password' => $id1);
				$this->db->where('password',$id);
				$this->db->update('login',$data);
							
				
			}
			
	function vw_order()
		{	
			$res='';
			$this->db->select('*');
			$this->db->from('product_registration');
			$this->db->where_not_in('cust_name','');
			$query=$this->db->get();
			if($query->num_rows() > 0)
				{
				$res.="<table cellpadding=10 width=100%><tr bgcolor=#C3C3C3><th>Product Name</th><th>Product id</th><th>MRP</th><th>Customer Name</th></tr>";
				foreach ($query->result() as $info)
					{
    				   $res.="<tr bgcolor=#FFFFCC><td>".$info->product_name."</td><td>".$info->product_id."</td><td>".$info->mrp."</td><td>".$info->			                       cust_name."</td></tr>";
										
					}
									
				}
				$res.="</table>";
				return $res;
		}
		
		
		
		
		
}
?>