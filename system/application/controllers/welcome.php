<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function __construct()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}
	
	function index()
	{
		$row['page']="user_log";
		$this->load->view('inner2',$row);
	}
	
	function login_check()
	{
		$this->load->database();
		$this->load->model('Crm_model');
		$query=$this->Crm_model->login_check();
		if ($query->num_rows() > 0)
		{
			$row['page']="user_log";
			$this->load->view('inner2',$row);
		}
		else
		{
			$this->load->view('login_error');
		}
	}
	
	
	function usr_check()
		{
		    session_start();
			$_SESSION['user_name'] = $_POST['uname'];
			$this->load->database();
			$this->load->model('Crm_model');
			$query=$this->Crm_model->usr_check();
			if ($query->num_rows() > 0)
				{
									
			        $this->load->view('u_afterlog');
				}
				else
				{
					$row['page']="user_log_error";
					$this->load->view('inner2',$row);
				}
		}
		
	 function per_dl()
	 	{
			$this->load->database();
			$this->load->model('crm_model');
			$row['result']=$this->crm_model->fetch_dl();
			$this->load->view('u_afterlog1',$row);
		}
		
		
	function own()
		{
			$this->load->database();
			$this->load->model('crm_model');
		 	$row['result']=$this->crm_model->own_pro();
			$this->load->view('cli_afterlog1',$row);
		}
		
		function buy()
		{
			$this->load->database();
			$this->load->model('crm_model');
			$row['result']=$this->crm_model->buy();
			$this->load->view('u_afterlog7');
		}
		
		function del()
		{
			$this->load->database();
			$this->load->model('crm_model');
			$row['result']=$this->crm_model->del();
			$this->load->view('admin_afterlog2');
		}
		
	 function pro()
	 	{
			$this->load->database();
			$this->load->model('crm_model');
			$row['result']=$this->crm_model->fetch_pro();
			$this->load->view('u_afterlog1',$row);
		}
		
		 function u_dl()
	 	{
			$this->load->database();
			$this->load->model('crm_model');
			$row['result']=$this->crm_model->u_dl();
			$this->load->view('admin_afterlog1',$row);
		}
		
		function p_dl()
	 	{
			$this->load->database();
			$this->load->model('crm_model');
			$row['result']=$this->crm_model->p_dl();
			$this->load->view('admin_afterlog1',$row);
		}
		
		
		
		function cli_check()
		{
		    session_start();
			$_SESSION['client_name'] = $_POST['cname'];
			$this->load->database();
			$this->load->model('Crm_model');
			$query=$this->Crm_model->cli_check();
			if ($query->num_rows() > 0)
				{
									
			        $this->load->view('cli_afterlog');
				}
			else
				{
					$row['page']="cli_log_error";
					$this->load->view('inner4',$row);
				}
			
		}
		
		function admin_check()
		{
		    session_start();
			$_SESSION['admin_name'] = $_POST['aname'];
			$this->load->database();
			$this->load->model('Crm_model');
			$query=$this->Crm_model->admin_check();
			if ($query->num_rows() > 0)
				{
									
			        $this->load->view('admin_afterlog');
				}
			else
				{
					$row['page']="admin_log_error";
					$this->load->view('inner3',$row);
				}
			
		}
		
		
		
	 function user_log()
		{
	 		$this->load->model('Crm_model');
			$row['page']="user_log";
			$this->load->view('inner2',$row);
	 	}
		
		 function com()
		{
	 		$this->load->model('Crm_model');
			$row['page']="u_complain";
			$this->load->view('u_afterlog5',$row);
	 	}
		
	 function admin_log()
		{
	 		$this->load->model('Crm_model');
			$row['page']="admin_log";
			$this->load->view('inner3',$row);
	 	}
	 
	function cli_log()
		{
	 		$this->load->model('Crm_model');
			$row['page']="cli_log";
			$this->load->view('inner4',$row);
	 	}
	 
	function admin_home()
		{
	    	$this->load->model('Crm_model');
			$row['page']="admin_home";
			$this->load->view('inner',$row);
		}
	
	function vw_com()
		{
	    		$this->load->database();
 				$this->load->model('Crm_model');
				$row['result']=$this->Crm_model->vw_com();
				$this->load->view('admin_afterlog1',$row);
		}
		
	function pro_up()
		{
	 		$this->load->database();
			$this->load->model('Crm_model');
			
			$this->load->view('cli_afterlog_pro_up');
	 	}
		
	function pro_regn()
			{
				$this->load->database();
 				$this->load->model('Crm_model');
				$this->Crm_model->registration();
				$this->load->view('cli_afterlog_pro_up1');
			}
			
	function u_com()
			{
				$this->load->database();
 				$this->load->model('Crm_model');
				$this->Crm_model->complain();
				$this->load->view('u_afterlog6');
			}
			
		function vw_pro()
			{
			 	$this->load->database();
 				$this->load->model('Crm_model');
				$row['result']=$this->Crm_model->vw_pro();
				$this->load->view('cli_afterlog1',$row);
			}
			
			
	function vw_order()
		{
		 	$this->load->database();
			$this->load->model('crm_model');
			$row['result']=$this->crm_model->vw_order();
			$this->load->view('cli_afterlog1',$row);
		}
			
		function u_order()
			{
			 	$this->load->database();
 				$this->load->model('Crm_model');
				$row['result']=$this->Crm_model->u_order();
				$this->load->view('u_afterlog1',$row);
			}
			
		function pro_img()
				{
					$this->load->database();
     				$this->load->model('Crm_model');
	    			$row['result']=$this->Crm_model->pro_img();
		    		$this->load->view('u_afterlog4',$row);
				}
			
		function ch_ps1()
			{	
					
			 	$this->load->database();
 				$this->load->model('Crm_model');
				$row['result']=$this->Crm_model->ch_ps();
				$this->load->view('u_afterlog1',$row);
			}
			
		
		function ch_ps()
			{
				$this->load->database();
 				$this->load->model('Crm_model');
				$this->load->view('u_afterlog2');
			}
					
	  function u_del()
	  		{     
				$this->load->database();
 				$this->load->model('Crm_model');
				$row['result']=$this->Crm_model->u_del();
				$this->load->view('admin_afterlog1',$row);
			}	
	

	function view_pro()
		{
			$this->load->model('Crm_model');
			$row['page']="view_pro";
			$this->load->view('inner',$row);
		}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */