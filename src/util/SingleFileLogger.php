<?php
namespace util;

class SingleFileLogger {
    private $filePath;

    function __construct($filePath) {
        $this->filePath = $filePath;
    }
    function __destruct() {
    }
    function save($text) {
        $handle = fopen($this->filePath,"a+");
        if(fwrite($handle,date("Y-m-d H:i:s")." $text\n") === FALSE) {
            die("Error handling logging file to $this->filePath");
        }
        fclose($handle);
    }
}