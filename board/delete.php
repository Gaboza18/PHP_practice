<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abc 게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <h2>삭제 결과</h2>
    <ul>
        <?php

            /* Mysql DB 연결 */
            $connect = mysqli_connect("localhost","root","dw220wbspdh","abc_corp"); // DB 아이디 / 비번 / DB 이름 -> DB 접속

            if(!$connect){
                echo 'DB에 연결하지 못했습니다.'. mysqli_connect_error(); // DB 오류 메세지 함수
            }else{
                echo 'DB에 접속했습니다.';
            }

            $user_delnum = $_POST['delnum']; // 검색 조건 파라미터

            /* 삭제 처리 */
            $sqlDEL = "DELETE FROM msg_board WHERE number = $user_delnum";
            mysqli_query($connect, $sqlDEL); 

            /* 삭제후 조회 처리*/
            $sql = "SELECT * FROM msg_board";
            $result = mysqli_query($connect, $sql);

            $list = ''; // 빈 list

            while($row = mysqli_fetch_array($result)){
                $list = $list."<li>{$row['number']}: <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
            }           
            echo $list;

            mysqli_close($connect);
        ?>
    </ul>
    <p>
        <?php
            echo $user_delnum.'번째 데이터가 삭제되었습니다.';
        ?>
    </p>
    <p><a href="index.php">메인화면으로 돌아가기</a></p>
</body>
</html>