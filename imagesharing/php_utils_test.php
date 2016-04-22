<?php

include 'php_constants_test.php';


class Utils
{

    function get_input_array()
    {

        $dir = INPUT_IMG_PATH;
        $input_array = scandir($dir, 1);

        return $input_array;
    }

}


?>
