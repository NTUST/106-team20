<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class commodity extends CI_Controller {

	public function women(){
		$type = 'women';
		$query = $this->db->query("select * from commodity where cy_type=? order by commodity_id desc",[$type])->result();
		$this->load->view('client/header');
		$this->load->view('client/commodity',['type'=>$type,'commoditys'=>$query]);
		$this->load->view('client/menu');		
	}
	public function men(){
		$type = 'men';
		$query = $this->db->query("select * from commodity where cy_type=? order by commodity_id desc",[$type])->result();
		$this->load->view('client/header');
		$this->load->view('client/commodity',['type'=>$type,'commoditys'=>$query]);
		$this->load->view('client/menu');		
	}
	public function kids(){
		$type = 'kids';
		$query = $this->db->query("select * from commodity where cy_type=? order by commodity_id desc",[$type])->result();
		$this->load->view('client/header');
		$this->load->view('client/commodity',['type'=>$type,'commoditys'=>$query]);
		$this->load->view('client/menu');		
	}
	public function baby(){
		$type = 'baby';
		$query = $this->db->query("select * from commodity where cy_type=? order by commodity_id desc",[$type])->result();
		$this->load->view('client/header');
		$this->load->view('client/commodity',['type'=>$type,'commoditys'=>$query]);
		$this->load->view('client/menu');		
	}
	public function sports(){
		$type = 'sports';
		$query = $this->db->query("select * from commodity where cy_type=? order by commodity_id desc",[$type])->result();
		$this->load->view('client/header');
		$this->load->view('client/commodity',['type'=>$type,'commoditys'=>$query]);
		$this->load->view('client/menu');		
	}

	public function itit($id)
	{
		$commodity = $this->db->query("select * from commodity where commodity_id=?",[$id])->result();
		$commodity_num = $this->db->query("select * from commodity_num A join color B on A.color_id = B.color_id join size C on A.size_id=C.size_id where A.commodity_id=?",[$id])->result();
		$this->load->view('client/header');
		$this->load->view('client/itit',['commodity'=>$commodity[0], 'commodity_num'=>$commodity_num]);
		$this->load->view('client/menu');
	}
	public function searched()
	{
		//$type = $_POST['type'];
		$type = ($_POST['type'] == '')?("A.cy_type!=''"):("A.cy_type='".$_POST['type']."'");
		$size = ($_POST['size'] == '')?("B.size_id!=''"):("B.size_id='".$_POST['size']."'");
		$color = ($_POST['color'] == '')?("B.color_id!=''"):("B.color_id='".$_POST['color']."'");
		$query = $this->db->query("select A.*,B.color_id,B.size_id from commodity A join commodity_num B on(A.commodity_id = B.commodity_id) where $type and $size and $color group by A.commodity_id")->result();
		
		$this->load->view('client/header');
		$this->load->view('client/commodity',['type'=>'搜尋結果','commoditys'=>$query,'sizes'=>$_POST['size'],'colores'=>$_POST['color'],'types'=>$_POST['type']]);
		$this->load->view('client/menu');
	}
	public function joinmycar($id)
	{
		$val = $_POST['colorsize'];
		$arr = explode('%%', $_SESSION['mycar']);
		foreach($arr as $v){
			if($v == $val){
				$this->session->set_flashdata('alert','已有相同商品在購物車');
				redirect(base_url().'commodity/itit/'.$id);		
			}
		}
		$_SESSION['mycar'] = ($_SESSION['mycar'])?($_SESSION['mycar'].'%%'.$val):($val);
		redirect(base_url().'commodity/itit/'.$id);
	}


}