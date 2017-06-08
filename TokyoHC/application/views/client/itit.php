<style>
	#body{
		padding: 0px calc((100% - 480px) / 2);
	}
</style>
<div id="body">

	<div>
		<center>
			<img src="<?=base_url().'uploads/'.$commodity->file_name?>" height="30%">
		</center>
	</div>
	<div style="padding:0px 30px">
		<div>
			<label>名稱 : </label>
			<?=$commodity->name?>
		</div>
		<div>
			<label>商品id : </label>
			<?=$commodity->commodity_id?>
		</div>
		<div>
			<label>種類 : </label>
			<?=$commodity->cy_type?>
		</div>
		<div>
			<label>價格 : </label>
			<?php
				if($commodity->discount != 10){
					echo "<del>".$commodity->price."</del><font style='color:red;margin-left:10px;'>".(0.1*$commodity->discount*$commodity->price)."</font>";
				}else
					echo $commodity->price;
			?>
		</div>
		<div style="margin-bottom: 30px" >
			<label>材質 : </label>
			<?=$commodity->material?>
		</div>
		<center>
		<form method="post" action="<?=base_url().'commodity/joinmycar/'.$commodity->commodity_id?>" >
			<label>顏色size</label>
			<select name="colorsize">
				<?php
					foreach($commodity_num as $cs){
						echo "<option value='".$cs->num_id."'>".$cs->color_name.$cs->size_name."</option>";
					}
				?>
			</select>
			<button type="submit" class="btn btn-danger">加入購物車</button>
		</form>
		</center>
	</div>

</div>