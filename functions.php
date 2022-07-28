<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <pre>
        function 함수이름(매개변수1, 매개변수2){
            ...할일...
        }

        함수이름();
        function class_total(){ }
    </pre>

    <?php
        function sum($x, $y){
            $result = $x + $y; // 지역변수
            return $result;
        }

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

        /*
        echo '<pre>';
        print_r($fruits);
        echo '</pre>';
        */

        function output($value){
            echo '<pre>';
            print_r($value);
            echo '</pre>';
        }

        output($fruits);
    ?>

    <h2>지역변수 vs 전역변수</h2>
    <?php
        function myfunction(){
            $var = 10; // 지역변수: 함수 외부에서 출력x
            echo "{$var}";
        }

        myfunction();
    ?>

    <hr>

    <?php
        $var2 = 20;
        function myfunction2(){

            global $var2;
            echo "{$var2}";
            echo "{$GLOBALS['var2']}";

        }

        myfunction2();
    ?>

    <h2>정적 변수</h2>
    <?php
        function increment(){
            static $count = 0;
            echo "{$count}<br/>";
            $count++;
        }

        increment();
        increment();
        increment();
    ?>
</body>
</html>