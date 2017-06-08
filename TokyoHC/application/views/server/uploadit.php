<style>
	#body{
		padding: 0px calc((100% - 480px) / 2);
	}
</style>
<div id="body">
<h2>
	上傳商品
</h2>
<form method="post" action="<?=base_url()?>server/uploading" enctype="multipart/form-data">

  <div class="form-group">
    <label>商品名稱</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="form-group">
    <label>商品材質</label>
    <textarea name="material" class="form-control" required></textarea>
  </div>
  <div class="form-group">
    <label>商品類型</label>
    <select name="type" class="form-control">
      <option>women</option>
      <option>men</option>
      <option>kids</option>
      <option>baby</option>
      <option>sports</option>
    </select>
  </div>
  <div class="form-group">
    <label>商品數量</label>
    <input type="number" name="number" value="1" class="form-control" required>
  </div>
  <div class="form-group">
    <label>商品折扣</label>
    <input type="text" name="discount" class="form-control" required>
  </div>
  <div class="form-group">
    <label>商品價格</label>
    <input type="text" name="price" class="form-control" required>
  </div>
  <div class="form-group">
    <label>圖片上傳</label>
    <input type="file" name="file" class="form-control" required>
  </div>
  <div class="form-group">
    <label>顏色</label>
    <div>
    <?php
      foreach($color as $c){
        ?>
          <label><input type="checkbox" name="color[]" value="<?=$c->color_id?>"><?=$c->color_name?></label>
        <?php
      }
    ?>
    </div>
  </div>
  <div class="form-group">
    <label>size</label>
    <div>
    <?php
      foreach($size as $s){
        ?>
          <label><input type="checkbox" name="size[]" value="<?=$s->size_id?>"><?=$s->size_name?></label>
        <?php
      }
    ?>
    </div>
  </div>
<button type="submit" class="btn btn-default">送出</button>
</form>
</div>