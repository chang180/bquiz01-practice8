<form action="api/edit_info.php" method="post">
    <h2>進站總人數管理</h2>
    <label for="total">進站總人數<input type="number" name="total" value="<?=$Total->find(1)['total'];?>"></label><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>修改確定</button><button type="reset">重置</button>
</form>