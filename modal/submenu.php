<form action="api/submenu.php" method="post" enctype="multipart/form-data">
    <h3 class="ct">編輯次選單</h3>
    <table id="addHere">
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        include_once "../base.php";
        $parent=$_GET['id'];
        $table=$_GET['do'];
        $db=new DB($table);
        $rows=$db->all(['parent'=>$parent]);
        foreach ($rows as $row){
        ?>
        <tr>
            <td><input type="name" name="name[]" value="<?=$row['name'];?>"></td>
            <td><input type="text" name="text[]" value="<?=$row['text'];?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
        </tr>
<?php } ?>
    </table>
    <input type="hidden" name="parent" value="<?=$parent;?>">
    <button>修改確定</button><button type="reset">重置</button><button type="button" id="moreOpt">更多次選單</button>
</form>
<script>
    let el=`
    <tr>
            <td><input type="name" name="name2[]"></td>
            <td><input type="text" name="text2[]"></td>
            <td></td>
        </tr>
    `;
    $("#moreOpt").on("click",function(){
        $("#addHere").after(el);
    })
</script>
