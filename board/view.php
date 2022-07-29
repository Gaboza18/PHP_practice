<?php

    /* Mysql DB 연결 */
    $connect = mysqli_connect("localhost","root","dw220wbspdh","abc_corp"); // DB 아이디 / 비번 / DB 이름 -> DB 접속

    if(!$connect){
        echo 'DB에 연결하지 못했습니다.'. mysqli_connect_error(); // DB 오류 메세지 함수
    }else{
        echo 'DB에 접속했습니다.';
    }

    /* 게시글 상세조회 */

    $view_num = $_GET['number'];
    $sql = "SELECT * FROM msg_board WHERE number = $view_num";

    $result = mysqli_query($connect, $sql); // 전체 조회 하는 sql 실행후 저장하는 변수

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view - abc 게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <h2>글 내용</h2>
    <?php
        if($row = mysqli_fetch_array($result)){
    ?>        
        <h3>글 번호: <?= $row['number'] ?> / 글쓴이: <?= $row['name'] ?></h3>
            <div>
                <?= $row['message'] ?>
            </div>
    <?php
        }        
    ?>
    <p><a href="index.php">메인화면으로 돌아가기</a></p>
</body>
</html>