<style>
	#body{
		padding: 0px calc((100% - 480px) / 2);
	}
</style>
<div id="body">
<h3>
	我的訂單
</h3>
<table class="table">
<tr><th>訂單編號</th><th>商品名稱</th><th>顏色</th><th>size</th><th>數量</th></tr>
<?php
	foreach($myorder as $v){
		?>
			<tr>
				<td><?=$v->orders_id?></td>
				<td><?=$v->name?></td>
				<td><?=$v->color_name?></td>
				<td><?=$v->size_name?></td>
				<td><?=$v->orders_number?></td>
			</tr>
		<?php
	}
?>
</table>
</div>