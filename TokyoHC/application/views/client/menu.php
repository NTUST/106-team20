<style>
	#menu li{
		display: inline-block;
		margin: 0px 30px;
	}
	#menu a{
		cursor: pointer;
		text-decoration: none;
	}
	#menu{
		padding-top: 10px;
		position: fixed;
		bottom:0px;
		width:100%;
		padding-bottom: 20px;
		left: 0px;
		background: white;
		box-shadow: 1px 0px 2px gray;
	}
	#logo{
		position:absolute;
		left: calc((100% - 313px) / 2);
		top: calc((100% - 300px) / 2);
	}
</style>
<div id="menu">
	<ul>
		<center>
			<li><a href='<?=base_url()?>commodity/women'>WOMEN</a></li>
			<li><a href='<?=base_url()?>commodity/men'>MEN</a></li>
			<li><a href='<?=base_url()?>commodity/kids'>KIDS</a></li>
			<li><a href='<?=base_url()?>commodity/baby'>BABY</a></li>
			<li><a href='<?=base_url()?>commodity/sports'>SPORTS</a></li>
		</center>
	</ul>
</div>