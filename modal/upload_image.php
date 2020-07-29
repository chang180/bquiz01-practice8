<form action="api/upload.php" method="post" enctype="multipart/form-data">
    <h3 class="ct">更換校園映像圖片</h3>
    <label for="name">校園映像圖片<input type="file" name="name"></label><br>
    <input type="hidden" name="id" value=<?=$_GET['id'];?>>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>更換</button><button type="reset">重置</button>
</form>