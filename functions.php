<?php
    function clean($input){
        trim($input);
        stripslashes($input);
        htmlspecialchars($input);
        return $input;
    }

    