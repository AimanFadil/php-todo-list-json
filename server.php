<?php
$listona = file_get_contents('todo-list.json');

$lista = json_decode($listona, true);

if (isset($_POST['elem'])) {

    $addTool = [
        "nome" => $_POST["elem"],
    ];
    $lista[] = $addTool;

    file_put_contents('todo-list.json', json_encode($lista));
}

header('Content-type: application/json');

echo json_encode($lista);
