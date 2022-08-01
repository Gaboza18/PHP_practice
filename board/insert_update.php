<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 수정</title>
</head>
<body>
        <?php
            /* Mysql DB 연결 */
            $connect = mysqli_connect("localhost","root","dw220wbspdh","abc_corp"); // DB 아이디 / 비번 / DB 이름 -> DB 접속

            if(!$connect){
                echo 'DB에 연결하지 못했습니다.'. mysqli_connect_error(); // DB 오류 메세지 함수
            }else{
                echo 'DB에 접속했습니다.';
            }

            $number = $_POST['number']; // POST 방식의 입력 파라미터 number 값
            $user_name = $_POST['name']; // POST 방식의 입력 파라미터 name 값
            $user_msg = $_POST['message']; // POST 방식의 입력 파라미터 message 값

            $sql = "UPDATE msg_board SET name='$user_name' ,message='$user_msg'
                    WHERE number = '$number'"; // 수정 sql문
            // mysqli_query($link, 'sql statement')

            $result = mysqli_query($connect, $sql); // 등록하는 sql 실행후 저장하는 변수

            if($result === false){
                echo '수정하지 못했습니다.';
                error_log(mysqli_error($connect)); // 에러 로그 기록 함수 
            }else{
                echo '수정 성공';
            }

            mysqli_close($connect); // DB 접속해제
            print "<hr/><a href='index.php'>메인화면으로 이동하기</a>";

        ?>
</body>
</html>
