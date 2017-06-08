<style>
	#body{
		padding: 0px calc((100% - 480px) / 2);
	}
</style>
<div id="body">

	<h3>我的購物車</h3>
	<form method="post" action="<?=base_url()?>clientIndex/checkorder">
		<table class="table">
	 		<tr><th>編號</th><th>名稱</th><th>價錢</th><th>顏色</th><th>size</th><th>數量</th></tr>
	 		<?php
	 			foreach($mycar as $c){
	 				?>
	 					<tr>
	 						<td><?=$c->commodity_id?></td>
	 						<td><?=$c->name?></td>
	 						<td>
				 				<?php
								if($c->discount != 10){
									echo "<del>".$c->price."</del><font style='color:red;margin-left:10px;'>".(0.1*$c->discount*$c->price)."</font>";
								}else
									echo $c->price;
								?>			
	 						</td>
	 						<td><?=$c->color_name?></td>
	 						<td><?=$c->size_name?></td>
	 						<td>
	 							<input type="number" name="num[]" value="1" style="width:40px" min="1" />
	 						</td>
	 					</tr>
	 				<?php
	 			}
	 		?>
		</table>

		<button class="btn btn-primary" type="submit">我要結帳</button>
	</form>
</div>