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
    <h2>글 목록</h2>
    <ul>
        <?php

            /* Mysql DB 연결 */
            $connect = mysqli_connect("localhost","root","dw220wbspdh","abc_corp"); // DB 아이디 / 비번 / DB 이름 -> DB 접속

            if(!$connect){
                echo 'DB에 연결하지 못했습니다.'. mysqli_connect_error(); // DB 오류 메세지 함수
            }else{
                echo 'DB에 접속했습니다.';
            }

            /* table(msg_board) 에서 게시글 조회 */
            $sql = "SELECT * FROM msg_board";
            
            $result = mysqli_query($connect, $sql); // 전체 조회 하는 sql 실행후 저장하는 변수
            $list = ''; // 빈 list

            // 1. echo -> 화면의 값을 그대로 출력 -> echo $result;
            // 2. print -> 화면의 값을 그대로 출력 -> print $result;
            // 3. print_r -> 배열, 객체 모양을 그대로 출력 -> print_r($result);
            // 4. var_dump print_r -> 상세하게 출력 -> var_dump print_r($result);

            /*
                mysqli_fetch_array($변수) = 배열에 있는걸 하나 하나씩 저장한다
            */
            while($row = mysqli_fetch_array($result)){
                $list = $list."<li>{$row['number']}: <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
            }           
            echo $list;
        ?>
    </ul>
    <hr>
        <p><a href="write.php">글 쓰기</a></p>
    <hr>
    <h2>글 검색</h2>
    <form action="search_result.php" method="post">
        <h3>검색할 키워드를 입력하세요.</h3>
        <p>
            <label for="search">키워드:</label>
            <input type="text" id="search" name="skey">
        </p>
        <input type="submit" value="검색">
    </form>
    <hr>
    <h2>글 삭제</h2>
    <form action="delete.php" method="post">
        <h3>삭제할 메시지 번호를 입력하세요.</h3>
        <p>
            <label for="msdel">번호:</label>
            <input type="text" id="msdel" name="delnum">
        </p>
        <input type="submit" value="삭제">
    </form>
</body>
</html>