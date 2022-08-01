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
    <title>글수정</title>
</head>
<body>
    <h1>수정하기</h1>
    <?php
        if($row = mysqli_fetch_array($result)){
    ?>   
        <form action="insert_update.php" method="post">
            <input type="hidden" name ="number" value="<?= $view_num ?>">
            <p>
                <label for="name">이름:</label>
                <input type="text" id="name" name="name" value="<?= $row['name'] ?>">
            </p>

            <p>
                <label for="message">메세지:</label>
                <textarea name="message" id="message" cols="30" rows="10"><?= $row['message'] ?></textarea>
            </p>
            <input type="submit" value="수정하기">
        </form>
    <?php
        }
        mysqli_close($connect); // DB 접속해제        
    ?>
</body>
</html>