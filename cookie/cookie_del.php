<?php
    $cookieName = 'city';
    $cookieValue = 'Seoul';

    setcookie($cookieName, $cookieValue, time()-60,'/'); // 쿠키 삭제 set
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie delete</title>
</head>
<body>
    
</body>
</html>