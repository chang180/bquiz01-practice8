<?php
include_once "../base.php";

if (!empty($_FILES['name']['tmp_name'])) {
    move_uploaded_file($_FILES['name']['tmp_name'], "..img/" . $_FILES['name']['name']);
    $row['name'] = $_FILES['name']['name'];
}

$table = $_POST['table'];
$db = new DB($table);

switch ($table) {
    case "title":
        $row['text'] = $_POST['text'];
        break;
    case "menu":
        $row['text'] = $_POST['text'];
        $row['name'] = $_POST['name'];
        $row['sh'] = 1;
        $row['parent'] = 0;
        break;
    case "admin":
        $row['acc'] = $_POST['acc'];
        $row['pw'] = $_POST['pw'];
        break;
    case "mvim":
        $row['sh'] = 1;
        break;
    case "image":
        $row['sh'] = 1;
        break;
    default:
        $row['text'] = $_POST['text'];
        $row['sh'] = 1;
        break;
}

$db->save($row);
to("../admin.php?do=" . $table);
