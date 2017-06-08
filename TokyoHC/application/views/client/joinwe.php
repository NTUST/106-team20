<style>
	#body{
		padding: 0px calc((100% - 480px) / 2);
	}
</style>
<div id="body">
<h2>
	加入我們
</h2>
<form method="post" action="<?=base_url()?>clientIndex/joing">
  <div class="form-group">
    <label >姓名</label>
    <input type="text" name="name" class="form-control" placeholder="name" required>
  </div>
  <div class="form-group">
    <label >性別</label>
	<select name="sex" class="form-control" required>
		<option value="1">男</option>
		<option value="0">女</option>
	</select>
  </div>
  <div class="form-group">
    <label>電子郵件</label>
    <input type="email" name="mail" class="form-control" required placeholder="輸入電子郵件">
  </div>
  <div class="form-group">
    <label>密碼</label>
    <input type="password" name="psd" class="form-control" required placeholder="Password">
  </div>
  <div class="form-group">
    <label>生日</label>
    <input type="date" name="birth" class="form-control" required>
  </div>
    <div class="form-group">
    <label>電話</label>
    <input type="password" name="phone" class="form-control" required placeholder="Phone">
  </div>
    <div class="form-group">
    <label>地址</label>
    <input type="text" name="address" class="form-control" required placeholder="Address">
  </div>
  <button type="submit" class="btn btn-default">送出</button>
</form>
</div>