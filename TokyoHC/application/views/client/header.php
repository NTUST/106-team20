<html>
<head>
	<title>東京熱衣</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="<?=base_url()?>assets/image/shortcut.jpg">
    <link href="<?php echo $this->config->base_url('assets/css/bootstrap.min.css');?>" type="text/css" rel="stylesheet" />
    <script src="<?php echo $this->config->base_url('assets/js/jquery-2.2.4.min.js')?>"></script>
    <script src="<?php echo $this->config->base_url('assets/js/bootstrap.min.js');?>"></script>

	<script type="text/javascript">
		function openes(){
			$('#searched').css("right","1%");
		}
		function closes(){
			$('#searched').css("right","-210px");	
		}
	</script>
	<style>
		body::-webkit-scrollbar {
    		width: .5em;
		}
		body::-webkit-scrollbar-track{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		}
		body::-webkit-scrollbar-thumb {
  			background-color: darkgrey;
  			outline: .5em solid slategrey;
		}
		*{
			font-family: "微軟正黑體";
			color:#333;
			margin:0;
			padding: 0;
		}
		a{
			color:#333;
		}
		#header{
			box-shadow: 0px 1px 3px #ddd;
			height: 75px;
			padding: 0px calc((100% - 1024px) / 2); 
			margin-bottom:50px; 
		}

		ul{
			list-style: none;
			padding: 0px;
		}
		#header li{
			display: inline-block;
			margin: 0px 30px;
			line-height: 75px;
		}
		#header a{
			cursor: pointer;
			text-decoration: none;
		}
		#header li:first-child a{
			font-weight: 700;
			text-decoration: none;
			font-size: 22px;
		}
		#header a:hover{
			text-decoration: underline;	
		}
		h2{
			border-bottom: 1px solid #ddd;
		}
		#searched{
			transition: all .5s ease-in-out;
			width: 200px;
			height: 250px;
			position: fixed;
			top: 35%;
			right: -210px;
			border-radius: 5px;
			box-shadow: 0px 0px 1px black; 
			background: white;
		}
		#searched >:nth-child(1){
			height: 40px;
			line-height: 40px;
			background: #337ab7;
			color: white;
			padding-left: 20px;
			border-top-right-radius: 5px;
			border-top-left-radius: 5px;
			margin-bottom: 20px;
		}
		#searched > form > div{
			padding-left: 20px;
			margin-bottom: 20px; 
		}
	</style>
	<?php
		if(isset($_SESSION['alert']))
		{
			?>
				<script>
					alert('<?=$_SESSION['alert']?>');
				</script>
			<?php
		}
	?>
</head>
<body>
<div id="header">
	<ul>
		<center>
			<li><a href="<?=base_url()?>">TokyoHC</a></li>
			<li><a href="<?=base_url()?>clientIndex/mycar">我的購物車</a></li>
			<?php
				if(@$_SESSION['super_user']){

					?>
					<li><a href="<?=base_url()?>server/uploadit">上傳商品</a></li>
					<?php

				}


					if(@$_SESSION['user_id']){
						?>
							<li><a href="<?=base_url()?>clientIndex/myaccount">我的帳號</a></li>
							<li><a href="<?=base_url()?>clientIndex/myorder">我的訂單</a></li>
							<li><a href="<?=base_url()?>clientIndex/signout">登出</a></li>
						<?php
					}else{
						?>
							<li><a href="<?=base_url()?>clientIndex/login">會員登入</a></li>
							<li><a href="<?=base_url()?>clientIndex/joinwe">加入我們</a></li>
						<?php
					}
			?>
			
			<li><a><img src="<?=base_url()?>assets/image/search.png" height="20px" onclick='openes()'></a></li>
		</center>
	</ul>
	<?php
		$cc_type = array('women','men','kids','baby','sports');
		$cc_color = array(2=>'黑',3=>'白',4=>'藍',5=>'粉紅',6=>'黃',7=>'綠');
		$cc_size = array(1=>'S',2=>'M',3=>'L');
	?>
	<div id="searched">
		<div style="position: relative;">
			搜尋
			<label style="position: absolute; right: 20px; color: white; cursor: pointer;" onclick="closes()">X</label>
		</div>
		<form method="post" action="<?=base_url()?>commodity/searched">
			<div>
			類型 :
				<select name="type">
					<option value="">請選擇</option>
					<?php
						foreach($cc_type as $k => $v){
							?>
								<option value="<?=$v?>"><?=$v?></option>
							<?php
						}
					?>
				</select>
			</div>
			<div>
			顏色 :
				<select name="color">
					<option value="">請選擇</option>
					<?php
						foreach($cc_color as $k => $v){
							?>
								<option value="<?=$k?>"><?=$v?></option>
							<?php
						}
					?>
				</select>
			</div>
			<div>
			尺寸 :
				<select name="size">
					<option value="">請選擇</option>
					<?php
						foreach($cc_size as $k => $v){
							?>
								<option value="<?=$k?>"><?=$v?></option>
							<?php
						}
					?>
				</select>
			</div>
			<div>
				<button style="width: 160px;" type="submit" class="btn">尋找</button>
			</div>
		</form>

	</div>
</div>