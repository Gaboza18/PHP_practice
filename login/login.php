<?php
    session_start(); // 세션 시작(세션은 항상 맨위에 있어야 한다)

    $title = 'Login';
    require('config.php');
    include('header.php');
    require_once('login_functions.php');

    /* 관리자 정보가 존재하면 -> 관리자 페이지로 이동한다 */
    if(is_user_authenticated()){
        redirect('admin.php');
        die();
    }

    /*
    $_SERVER['요청방식, 서버이름(도메인),....'] -> 현재 서버에 정보를 가져온다
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // echo $_POST['email'];
        output($_POST);
    }
    */

    if(isset($_POST['login'])){
        // output($_POST);
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL); // 이메일 입력시 이메일 형식검사 하는 함수
        $password = $_POST['password'];

        if($email == false){
            $status = '이메일 형식에 맞게 입력해주세요.';
        }

        // 관리자 로그인 - 세션에 저장한다
        if(authenticate_user($email, $password)){
            $_SESSION['email'] = $email;
            redirect('admin.php');
            die();
        }else{
            $status = '비밀번호가 틀립니다.';
        }
    }
?>

<!-- 로그인 입력 폼 -->
<form action="" method="POST">
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>

    <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <input type="submit" name="login" value="Login">
    </p>
</form>

<!-- 옳바르지 않는 이메일 입력시-->
<div class="error"> 
        <p>
            <?php
                if(isset($status)){
                    echo $status; // 선언한 에러 내용 출력
                }
            ?>
        </p>
</div>

<?php include('footer.php'); ?>