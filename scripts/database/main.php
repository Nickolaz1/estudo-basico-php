<?php

include_once '../script.php';

$conn = connectionDatabase('localhost', 'bdquazar', 'root', '');

foreach($conn->query('SELECT * FROM tb_users WHERE id = 5') as $select){
    var_dump_pre($select);
}
