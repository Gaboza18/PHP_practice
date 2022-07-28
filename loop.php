<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h1>Loop</h1>

    <h2>while</h2>
    <pre>
        while(조건식){
            조건의 결과가 참 일때 반복할 코드
        }
    </pre>
    <?php

        $i = 0;

        while($i < 5){
            echo($i++).'<br/>';
        }
    ?>

    <h2>do while</h2>
    <pre>
        do{
            조건의 결과 참일때 반복할 코드
        }while(조건식)
    </pre>
    <?php

        $i = 0;

        do{
            echo ($i++). '</br>';
        }while($i < 5);

    ?>

    <h2>for</h2>
    <pre>
        for(초기값; 조건식; 증감){
            조건이 참일때 반복할 일..
        }
    </pre>
    <?php
        for($i = 0; $i <5; $i++){
            // echo $i. '<br/>';
            echo "{$i}<br/>";
        }
    ?>

    <h2>foreach</h2>
    <pre>
        foreach(배열명 as 값을 저장할 변수){
            반복할 일..
        }
    </pre>
    <?php

        $results = array(0,2,4,6,8);
        foreach($results as $result){
            echo "변수 \$result 의 값은 {$result} 입니다. <br/>";
        }
    ?>

    <hr/>

    <?php
        $scores = array(
            '국어' => 80,
            '영어' => 90,
            '수학' => 70,
            '과학' => 100,
        );

        foreach($scores as $key => $score){
            echo "배열 \$scores에서 과목명 {$key}의 점수는 {$score} 입니다. <br/>";
        }
    ?>
</body>
</html>