<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="ct">新增最新消息資料</h3>
    <label for="name">最新消息資料：<textarea name="text" cols="60" rows="5"></textarea></label><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button type="reset">重置</button>
</form>