<?php
        function sum($x, $y){
            $result = $x + $y; // 지역변수
            return $result;
        }

        
        function output($value){
            echo '<pre>';
            print_r($value);
            echo '</pre>';
        }

        function increment(){
            static $count = 0;
            echo "{$count}<br/>";
            $count++;
        }
