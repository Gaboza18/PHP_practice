<?php
    function view($name, $model){
        global $title;
        require("view/layout.view.php");
    }

    function get_data(){  
        $fname = CONFIG['data_file'];
        $json = '';

        if(!file_exists($fname)){
            file_put_contents($fname,''); // 읽기 오픈(json 파일이 없으면 생성)

            // $handle = fopen("$fname", "w+"); // 읽기,오픈
            // fclose($handle);
        }else{
            $json = file_get_contents($fname,''); // 파일을 읽어 문자열로 바꿔준다

            // $handle = fopen("$fname", "r");
            // $json = fread($handle, filesize($filename));
        }

        return $json;
    }