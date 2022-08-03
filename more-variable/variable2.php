<?php
    $a=100;

    echo gettype($a);
    settype($a, 'double'); // 실수로 변환

    echo '<br />';
    echo gettype($a);
?>