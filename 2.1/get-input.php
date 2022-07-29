<?php
    /* get 방식 넘어오는 변수의 value 값 저장
       
       1. filter_input(INPUT_'전송방식','url 에서 넘기는 파라미터 값','검사할 타입')
    
    */
    $product_id = filter_input(INPUT_GET,'productid',FILTER_VALIDATE_INT);
    $limit = filter_input(INPUT_GET,'limit',FILTER_VALIDATE_INT);

    // if($product_id == false ||  $limit == false){
    //     die(); // 조건이 만족하지 않으면 끝낸다
    // }

    if($product_id == false){
        $product_id = 10;
    }

    
    if($limit == false){
        $limit = 10;
    }
?>

<h1>get input</h1>
<p>
    showing category:<?= $product_id; ?> - Limit <?= $limit; ?>
</p>