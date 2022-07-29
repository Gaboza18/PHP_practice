<?php

    session_start(); // 관리자 세션
    require('config.php'); // 관리자 아이디/비번
    require_once('login_functions.php'); // 함수 호출

    ensure_user_is_authenticated(); // 관리자 세션이 존재하지 않으면 로그인 페이지로 이동한다

    echo $_SESSION['email']; // 관리자 아이디 출력
    include('header.php');

?>

<a href="logout.php">logout</a>

<?php include('footer.php'); ?>
