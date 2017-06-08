<style>
	#body{
		padding: 0px calc((100% - 480px) / 2);
	}
</style>
<div id="body">
<h2>
	會員登入
</h2>
<form method="post" action="<?=base_url()?>clientIndex/loging">
  <div class="form-group">
    <label>電子郵件</label>
    <input type="email" name="mail" class="form-control" placeholder="輸入電子郵件">
  </div>
  <div class="form-group">
    <label>密碼</label>
    <input type="password" name="psd" class="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">送出</button>
</form>
</div>