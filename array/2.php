<?php

    function get_members(){
        return ['ex1','ex2','ex3'];
    }

    $tmp = get_members();
    echo $tmp[1];
?>