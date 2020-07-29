<?php
include_once "../base.php";

$table = $_POST['table'];
$db = new DB($table);


foreach ($_POST['id'] as $k => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $db->del($id);
    } else {
        $row = $db->find($id);
        switch ($table) {
            case "title":
                $row['text'] = $_POST['text'][$k];
                $row['sh'] = ($id == $_POST['sh']) ? 1 : 0;
                break;
            case "menu":
                $row['text'] = $_POST['text'][$k];
                $row['name'] = $_POST['name'][$k];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                break;
            case "admin":
                $row['acc'] = $_POST['acc'][$k];
                $row['pw'] = $_POST['pw'][$k];
                break;
            case "ad":
                $row['text'] = $_POST['text'][$k];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
            break;
            case "mvim":
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
            break;
            case "image":
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
            break;
            default:
            $row['text'] = $_POST['text'][$k];
            $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                break;
        }
    }
    $db->save($row);
}



to("../admin.php?do=" . $table);
