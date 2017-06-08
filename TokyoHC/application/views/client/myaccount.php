<style>
	#body{
		padding: 0px calc((100% - 480px) / 2);
	}
</style>
<div id="body">
<h2>
	我的帳號
</h2>
<form method="post" action="<?=base_url()?>clientIndex/editacc">
  <div class="form-group">
    <label >姓名</label>
    <input type="text" name="name" class="form-control" required placeholder="name" value="<?=$myaccount->name?>"/>
  </div>
  <div class="form-group">
    <label >性別</label>
    <div class="form-control">
    	<?=($myaccount->sex == 1)?('男'):('女')?>
    </div>
  </div>
  <div class="form-group">
    <label>電子郵件</label>
    <div class="form-control">
    	<?=$myaccount->mail?>
    </div>  
  </div>
  <div class="form-group">
    <label>密碼</label>
    <input type="password" name="psd" class="form-control" required placeholder="Password" value="<?=$myaccount->password?>">
  </div>
  <div class="form-group">
    <label>生日</label>
    <div class="form-control">
    	<?=$myaccount->birth?>
    </div>  
  </div>
  <div class="form-group">
    <label>電話</label>
    	<input type="text" name="phone" class="form-control" required placeholder="phone" value="<?=$myaccount->phone?>">
    
  </div>
  <div class="form-group">
    <label>地址</label>
    
    	<input type="text" name="address" class="form-control" required placeholder="address" value="<?=$myaccount->address?>">
      
  </div>
  <button type="submit" class="btn btn-default">修改儲存</button>
</form>
</div>