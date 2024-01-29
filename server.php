<?php
$listona = file_get_contents('todo-list.json');

header('Content-type: application/json');

echo $listona;
