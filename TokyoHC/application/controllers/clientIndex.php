<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientIndex extends CI_Controller {

	public function index()
	{
		$this->load->view('client/header');
		$this->load->view('client/index');
		$this->load->view('client/menu');
	}
	public function login()
	{
		$this->load->view('client/header');
		$this->load->view('client/login');
	}
	public function joinwe()
	{
		$this->load->view('client/header');
		$this->load->view('client/joinwe');
	}
	public function loging()
	{
		$form = array();
		$form["mail"]=$this->input->post("mail");
		$form["password"]=$this->input->post("psd");
		
		$query = $this->db->get_where('member',array('mail'=>$form["mail"],'password'=>$form['password']))->result_array();
		//$data = $query->row();
		
		if(count($query)>0)
		{
			$_SESSION['user_id']=$query[0]['member_id'];
			$_SESSION['user_name']=$query[0]['name'];
			if($query[0]['purview']==1)
				$_SESSION['super_user']=1;

			//$this->session->set_flashdata('alert','登入成功');
			redirect(base_url().'clientIndex');
			
		}
		else
		{
			$this->session->set_flashdata('alert','帳號或密碼有誤');
			redirect(base_url().'clientIndex/login');
		}
	}
	public function signout()
	{
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		unset($_SESSION['super_user']);
		redirect(base_url().'clientIndex');
	}
	public function joing()
	{
		$query = $this->db->query("select mail from member where mail=?",array($this->input->post('mail')));
		if(count($query->result_array()) > 0){
			$this->session->set_flashdata('alert','已有相同mail');
			redirect(base_url().'clientIndex/joinwe');			
		}
		else{
			$form = array();
			$form['name'] =$this->input->post('name');
			$form['mail'] = $this->input->post('mail');
			$form['password'] = $this->input->post('psd');
			$form['sex'] = $this->input->post('sex');
			$form['birth'] = $this->input->post('birth');
			$form['phone'] = $this->input->post('phone');
			$form['address'] = $this->input->post('address');
		}
		$this->db->insert('member',$form);
		//$this->session->set_flashdata('alert','成功，加入我們!');
		redirect(base_url().'clientIndex/login');
	}
	public function mycar()
	{
		//unset($_SESSION['mycar']);
		$mycar = (isset($_SESSION['mycar']))?($_SESSION['mycar']):('');
		$mycar = explode('%',$mycar);
		$myallcar = $this->db->query("select * from commodity_num A join commodity B on (A.commodity_id=B.commodity_id) join color C on (A.color_id=C.color_id) join size D on (A.size_id=D.size_id) where num_id in ? order by A.num_id asc",[$mycar])->result();
		
		$this->load->view('client/header');
		$this->load->view('client/mycar',['mycar'=>$myallcar]);
	}
	public function checkorder()
	{
		if(!$_SESSION['user_id']){
			$this->session->set_flashdata('alert','請先登入');
			redirect(base_url().'clientIndex/login');			
		}
		else{

			if(!$_SESSION['mycar']){
				$this->session->set_flashdata('alert','尚無商品');
				redirect(base_url().'clientIndex/mycar');		
			}else
			{
				$mycar = $_SESSION['mycar'];
				$mycar = explode('%',$mycar);
				
				$myallcar = $this->db->query("select *,sum(E.orders_number) total_now_number from commodity_num A join commodity_orders E on (A.num_id=E.num_id) join commodity B on (A.commodity_id=B.commodity_id) join color C on (A.color_id=C.color_id) join size D on (A.size_id=D.size_id) where A.num_id in ? group by A.num_id order by A.num_id asc",[$mycar])->result();
				//print_r($myallcar);
				//return;
				foreach($myallcar as $k => $v){
					if($v->total_now_number*1+$_POST['num'][$k]*1 > $v->number*1){
						$this->session->set_flashdata('alert',$v->name.' '.$v->color_name.' '.$v->size_name.' 數量不足');
						redirect(base_url().'clientIndex/mycar');
					}
				}
				$mycar = $this->db->query("select * from commodity_num A join commodity B on (A.commodity_id=B.commodity_id) join color C on (A.color_id=C.color_id) join size D on (A.size_id=D.size_id) where A.num_id in ? order by A.num_id asc",[$mycar])->result();

				$this->load->view('client/header');
				$this->load->view('client/checkorder',['mycar'=>$mycar]);
			}
		}	
	}
	public function ordering()
	{
		$form = array();
		$form['send_option'] =$this->input->post('send');
		$form['send_address'] = $this->input->post('address');
		$form['total_price'] = $this->input->post('total');
		$form['payment_option'] = $this->input->post('payment');
		$form['member_id'] = $_SESSION['user_id'];
		$this->db->insert('orders',$form);
		$order_id = $this->db->insert_id();
		foreach($_POST['num_id'] as $k => $v){
			$form = array();
			$form['orders_id'] = $order_id;
			$form['num_id'] = $v;
			$form['commodity_id'] = $_POST['commodity_id'][$k];
			$form['orders_number'] = $_POST['num'][$k];
			$this->db->insert('commodity_orders', $form);
		}
		unset($_SESSION['mycar']);
		redirect(base_url().'clientIndex/myorder');
	}
	public function myorder()
	{

		$myorder = $this->db->query("select * from commodity_orders A join orders B on (A.orders_id=B.orders_id) join commodity C on (A.commodity_id=C.commodity_id) join commodity_num D on (A.num_id=D.num_id) join color E on (D.color_id=E.color_id) join size F on (D.size_id=F.size_id) where B.member_id=?",[$_SESSION['user_id']])->result();
		$this->load->view('client/header');
		$this->load->view('client/myorder',['myorder' => $myorder]);

	}
	public function myaccount()
	{
		$myaccount = $this->db->query("select * from member where member_id=?",[$_SESSION['user_id']])->result();
		$this->load->view('client/header');
		$this->load->view('client/myaccount',['myaccount' => $myaccount[0]]);		
	}
	public function editacc()
	{
		$this->db->where('member_id', $_SESSION['user_id']);
		$this->db->update('member',['name' => $this->input->post("name"),'password' => $this->input->post('psd'),'phone' => $this->input->post('phone'),'address' => $this->input->post('address')]);
		//$this->session->set_flashdata('alert','修改儲存成功');
		redirect(base_url().'clientIndex/myaccount');		
	}
}
