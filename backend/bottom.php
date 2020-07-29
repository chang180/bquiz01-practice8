<form action="api/edit_info.php" method="post">
    <h2>頁尾版權資料管理</h2>
    <label for="total">頁尾版權資料：<input type="text" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>"></label><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>修改確定</button><button type="reset">重置</button>
</form>