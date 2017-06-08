<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class server extends CI_Controller {

	public function __construct(){
		parent::__construct();
	    if($_SESSION['super_user'] == 0){
	    	$this->session->set_flashdata('alert','尚無此權限');
	    	redirect(base_url().'clientIndex');
	    }
			
	}
	public function uploadit(){
		$color = $this->db->query("select * from color")->result();
		$size = $this->db->query("select * from size")->result();
		$this->load->view('client/header');
		$this->load->view('server/uploadit',['color'=>$color, 'size'=>$size]);
	}
	public function uploading(){


		$form = array();
		$form['name'] =$this->input->post('name');
		$form['cy_type'] = $this->input->post('type');
		$form['discount'] = $this->input->post('discount');
		$form['material'] = $this->input->post('material');
		$form['price'] = $this->input->post('price');
		$form['file_name'] = $_FILES['file']['name'];
		$this->db->insert('commodity',$form);

		if (!file_exists("uploads/" . $_FILES["file"]["name"]))
        	move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name']);

		$commodity = $this->db->query("select commodity_id from commodity order by commodity_id desc")->result();
		$commodity_id = $commodity[0]->commodity_id;
		foreach($this->input->post('size') as $s){
			foreach($this->input->post('color') as $c){
				//echo $s.$c;
				$form  = array();
				$form['color_id'] = $c;
				$form['size_id'] = $s;
				$form['commodity_id'] = $commodity_id;
				$form['number'] = $this->input->post('number');
				$this->db->insert('commodity_num', $form);
			}
		}

	    $this->session->set_flashdata('alert','商品上傳成功');
	    redirect(base_url().'clientIndex');

	}
}