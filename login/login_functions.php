<?php

    /* 고유의 데이터를 출력하는 함수: 아이디 / 비밀번호 */
    function output($value){
        echo '<pre>';
            print_r($value);
        echo '</pre>';
    }

    /* 로그인 함수 */
    function authenticate_user($email, $password){
        if($email = USER_NAME && $password == PASSWORD){
            return true;
        }
    }

    /* 조건에 따라 화면 전환하는 함수 */
    function redirect($url){
        header("Location:$url");
        die();
    }

    /* 관리자 인증: 관리자 정보 세션 정보 */
    function is_user_authenticated(){
        return isset($_SESSION['email']); // 관리자 정보
    }

    /* 관리자가 아닌 정보 접근시 */
    function ensure_user_is_authenticated(){
        if(!is_user_authenticated()){
            redirect('login.php');
            die();
        }
    }

?>