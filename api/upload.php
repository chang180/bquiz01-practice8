<?php
include_once "../base.php";

if (!empty($_FILES['name']['tmp_name'])) {
    move_uploaded_file($_FILES['name']['tmp_name'], "..img/" . $_FILES['name']['name']);
    $row['name'] = $_FILES['name']['name'];
}

$table = $_POST['table'];
$id = $_POST['id'];
$db = new DB($table);

switch ($table) {
    case "title":
        $row['id'] = $id;
        break;
    case "mvim":
        $row['id'] = $id;
        break;
    case "image":
        $row['id'] = $id;
        break;
}

$db->save($row);
to("../admin.php?do=" . $table);
