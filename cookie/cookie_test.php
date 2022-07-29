<?php
    $cookieName = 'city';
    $cookieValue = 'Seoul';

    setcookie($cookieName, $cookieValue, time()+60,'/'); // 쿠키 생성
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie test</title>
</head>
<body>
    <h1>쿠키 체크하기</h1>

    <?php
        if(!isset($_COOKIE[$cookieName])){
            echo $cookieName.'의 쿠키는 생성되지 않았습니다.';
        }else{
            echo $cookieName.'의 쿠키는 생성 되었습니다.';
            echo '생성된 값은' .$_COOKIE[$cookieName].'입니다.';
        }
    ?>
</body>
</html>