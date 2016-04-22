<?php

//clean_folder();

if (isset($_FILES['image'])) {
    $t=time();
    $file_name = $_FILES['image']['name'];

    $file_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp, "test/upload/" . $t.$file_name);

    echo json_encode(['success' => "image processed!"]);

}

function clean_folder()
{

    $files = glob('test/upload/*'); // get all file names
    foreach ($files as $file) { // iterate files
        if (is_file($file))
            unlink($file); // delete file
    }
}


?>