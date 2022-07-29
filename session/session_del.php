<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session delete</title>
</head>
<body>
    <h1>세션 삭제</h1>
    <?php
        // session_unset(); // 세션의 모든 변수를 해지
        session_destroy(); // 세션의 모든 변수를 삭제
        print_r($_SESSION); // 모든 세션의 정보를 연관 배열 형태로 출력
    ?>    
</body>
</html>