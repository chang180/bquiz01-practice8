<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="ct">新增管理者帳號</h3>
    <label for="name">帳號<input type="text" name="acc"></label><br>
    <label for="text">密碼<input type="password" name="pw"></label><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button type="reset">重置</button>
</form>