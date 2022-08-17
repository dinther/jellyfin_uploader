<?php
    if (isset($_GET['fileName']) && isset($_GET['fileSize'])){
        $fileName = trim($_GET['fileName']);
        $fileSize = intval(trim($_GET['fileSize']));
        if (filesize('/media/6g_usb/upload/'.$fileName) == $fileSize){
            echo 1;
        } else {
            echo 2;
        }
    } else {
        header("HTTP/1.0 400 Bad request");
    }
?>