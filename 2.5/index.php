<?php
    require('app/app.php');

    $title = 'Hello world'; // 제목
    $data = get_data(); // 내용

    view('index', $data);
?>