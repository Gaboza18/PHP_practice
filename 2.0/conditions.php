<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions</title>
</head>
<body>
    <?php
    /*
        $result = 1<3; // true = 1, false = 0(화면 출력하지 않는다)
        echo $result == $true;

        && = and 둘다 참
        || = or 둘중 하나만 참
        xor = 둘중 서로 다르면 참
    */
    
    $first_name = 'park';
    $last_name = 'sang soon yo';

    /* 대소문자 구분한다*/
    if($first_name == 'seo' && $last_name == 'sang soon'){
        echo '성과 이름이 일치합니다.';
    }else if($first_name == 'kim' || $last_name == 'sang soon'){
        echo '성이 일치하지 않습니다.';
    }else{
        echo '성과 이름이 일치하지 않습니다';
    }   
    ?>
</body>
</html>