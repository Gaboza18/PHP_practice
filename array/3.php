<?php

    /* 배열 + 반복문 */
    function get_members(){
        return ['ex1', 'ex2', 'ex3'];
    }

    $members = get_members();

    // ucfirst() 함수 -> 값의 첫번째 값이 대문자로 출력
    for($i=0; $i < count($members); $i++){
        echo ucfirst($members[$i]).'<br />'; 
    }

?>