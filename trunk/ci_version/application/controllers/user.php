<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends DefaultController{
	public function __construct(){
		parent::__construct();
	}
	public function regist(){
		try{
			$this->load->business('b_user');
			$this->b_user->registUser();
		}catch(Exception $e){
			
		}
	}
	public function get_info(){
	}
	public function unregist(){
	}
}
