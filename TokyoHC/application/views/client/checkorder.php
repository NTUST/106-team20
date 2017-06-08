<style>
	#body{
		padding: 0px calc((100% - 480px) / 2);
	}
</style>
<div id="body">

	<h3>確認訂單</h3>
	<form method="post" action="<?=base_url()?>clientIndex/ordering">
		<table class="table">
	 		<tr><th>編號</th><th>名稱</th><th>價錢</th><th>顏色</th><th>size</th><th>數量</th></tr>
	 		<?php
	 			$total = 0;
	 			foreach($mycar as $k => $c){
	 				$total+=0.1*$c->discount*$c->price*$_POST['num'][$k];
	 				?>
	 					<tr>
	 						<td><?=$c->commodity_id?><input type="text" name="num_id[]" value="<?=$c->num_id?>" style="display: none" /></td>
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
	 							<input type="hidden" name="num[]" value="<?=$_POST['num'][$k]?>" />
	 							<input type="hidden" name="commodity_id[]" value="<?=$c->commodity_id?>" />
	 							<?=$_POST['num'][$k]?>
	 						</td>
	 					</tr>
	 				<?php
	 			}
	 		?>
		</table>
		<div class="form-group">
			<label>總價錢 : </label>
			<font style="color:red" size="5"><?=$total?></font>
			<input type="hidden" name="total" value="<?=$total?>">
		</div>
		<div class="form-group">
			<label>寄送方式</label>
			<select class="form-control" name="send">
				<option>宅配到家</option>
				<option>超商取貨</option>
			</select>
		</div>
		<div class="form-group">
			<label>寄送地址</label>
			<input type="text" name="address" class="form-control" />
		</div>
		<div class="form-group" >
			<label>付款方式</label>
			<select class="form-control" name="payment">
				<option>貨到付款</option>
				<option>線上刷卡</option>
			</select>
		</div>
		<button class="btn btn-primary" type="submit">確認下單</button>
	</form>

</div>