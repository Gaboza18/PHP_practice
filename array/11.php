<?php
        /* 연관배열 + foreach 사용하여 key 값과 value 출력 */

        $grades = array('ex1' => 10,
                        'ex2' => 20,
                        'ex3' => 30,
                       );
                
        foreach($grades as $key => $value){
            echo "key: {$key} value:{$value}<br />";
        }               
?>