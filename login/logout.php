<?php

    session_start(); // 세션 시작
    session_unset(); // 세션 내용을 비운다
    session_destroy(); // 세션 삭제

    require_once('login_functions.php'); // 함수 실행
    redirect('login.php'); // 로그인 페이지 이동
    die();

?>