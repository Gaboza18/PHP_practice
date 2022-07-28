<?php
    $title = 'include ,require 연습'; // header.php 제목부분 선언

    /*

        <include 와 require 차이>

        1. include는 다른 클래스에 있는파일 불러오나 오류가 발생해도 뒤에 코드는 실행된다
        2. require는 include와 기능은 똑같으나 파일이 오류가 발생하면 발생지점 이후 뒤로는 코드가 실행되지 않는다

        1-1. include_once: include 기능이 여러개있어도 선언하면 반드시 한번만 실행한다
        2-1. require_once: 이하 동일

    */
    
    include_once('inc/header.php'); 
    // include('inc/header.php'); 
    require_once('inc/functions.php'); 
    // require('inc/functions.php'); 
?>

    <?php
        $result = sum(10,20); // 전역변수
        echo $result;
    ?>

    <h2>배열 출력</h2>
    <?php
        $fruits = [
            'apple',
            'banana',
            'melon',
            'orange'
        ];

        output($fruits);
    ?>

    <h2>정적 변수</h2>

    <?php
        increment();
        increment();
        increment();
    ?>

    <?php
        include('inc/footer.php')
    ?>
