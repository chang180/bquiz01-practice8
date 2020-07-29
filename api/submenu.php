<?php
include_once "../base.php";

$table = 'menu';
$db = new DB($table);
$parent=$_POST['parent'];

foreach ($_POST['id'] as $k => $id) {
    if (!empty($_POST['del']) && in_array($id,$_POST['del'])) {
        $db->del($id);
    } else {
        $row = $db->find($id);
                $row['text'] = $_POST['text'][$k];
                $row['name'] = $_POST['name'][$k];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                $db->save($row);
    }
}

if(!empty($_POST['name2'])){
    foreach ($_POST['name2'] as $key=>$name){
        $new['name']=$name;
        $new['parent']=$parent;
        $new['text']=$_POST['text2'][$key];
        $new['sh']=1;
        $db->save($new);
    }
}

to("../admin.php?do=" . $table);
