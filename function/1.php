<?php
    function get_member1(){
        return 'egoing1';
        return 'egoing2'; // return 이 한번 실행되면 함수 종료
        return 'egoing3';
    }

    echo get_member1();
?>