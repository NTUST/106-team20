<style>
	#body{
		padding: 0px calc((100% - 480px) / 2);
		margin-bottom:60px;
	}
	.its{
		width: 100%;
		height: 150px;
		display: -webkit-flex;
  		display: flex;
  		margin: 30px 0px;
	}
	.its > div{
		height: 100%;
	}
	.its > div:nth-child(2){
		flex: 2;
		padding-left: 20px;
	}
	.its > div:nth-child(1){
		flex: 1;
		background-repeat: no-repeat;
		background-position: center;
		background-size: contain;
	}
</style>
<?php
	if($type == '搜尋結果'){
		?>
			<script type="text/javascript">
				$(function(){
					$("[name='type'] [value='<?=$types?>']").attr("selected",true);
					$("[name='size'] [value='<?=$sizes?>']").attr("selected",true);
					$("[name='color'] [value='<?=$colores?>']").attr("selected",true);
					openes();
				});
			</script>
		<?php
	}
?>
<div id="body">
	<h2>商品<small><?=$type?></small></h2>
	<?php
		foreach($commoditys as $v){
			?>
				<div class="its" >
					<div style="background-image: url('<?=base_url().'uploads/'.$v->file_name?>')" ></div>
					<div>
						<h3>
							<?=$v->name?>
							<button type="button" class="btn btn-primary btn-xs" onclick=location.href="<?=base_url().'commodity/itit/'.$v->commodity_id?>">more</button>
						</h3>
						<div>
							<?=$v->material?>
						</div>
					</div>
				</div>
			<?php
		}
	?>
</div>