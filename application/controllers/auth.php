<?php
	class Auth extends CI_Controller
	{
		public function Logout()
		{
			unset($_SESSION);
			session_destroy();
			redirect("auth/login","refresh");
		}
		public function login()
		{
			$this-> form_validation->set_rules('username','Username','required');
			$this-> form_validation->set_rules('password','Password','required | min_length[5]');
			if($this->form_validation-> run() == TRUE){
				$username = $_POST['username'];
				$password = md5($_POST['password']);
				$this ->db->select('*');
				$this ->db->from('users');
				$this ->db->where(array('username'=>$username, 'password'=> $password));
				$query = $this ->db->get();
				$user = $query-> row();
				if ($user-> email){
					$this->session->set_flashdata("Success","You are logged in!")
					$_SESSION['user_logged']= TRUE;
					$_SESSION['username']= $user-> username;

					redirect("user/profile", "refresh");
				}else{
					$this->session-> set_flashdata("error", "No such account Exists in the database.")

					redirect("auth/login", "refresh");
				}
			}
			$this ->load ->view('login');		}


		public function register()
		{
			if (isset($_POST['register'])){
				$this-> form_validation->set_rules('username','Username','required');
				$this-> form_validation->set_rules('email','Email','required');
				$this-> form_validation->set_rules('password','Password','required | min_length[5]');
				$this-> form_validation->set_rules('password','Confirm Password','required | min_length[5] | matches[password]');
				//form validation
				if ($this-> form_validation-> run() == TRUE){
					echo 'form validated';
				//add user in db
					$data = array(
						'username'=>$_POST['username'],
						'email'=>md5($_POST['email']),
						'password'=>$_POST['password'],
						'username'=>$_POST['usernmae'],
					);
					$this ->db->insert('users',$data);
					$this ->session-> set_flashdata("success", "Your account has been registered.You can login now!");
					redirect("auth/register", "refresh");
				}
			}
			$this->load->view('register');
		}
	}