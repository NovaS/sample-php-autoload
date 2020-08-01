<?php
namespace util;

class DailyFileLogger {
    private $filePath;

    function __construct($filePath) {
        $this->filePath = $filePath;
        $this->checkFile();
    }
    function __destruct() {
    }
    function checkFile() {
        if(file_exists($this->filePath) && date("Y-m-d", filemtime($this->filePath)) !== date('Y-m-d')) {
            $newPath = substr($this->filePath, 0, strrpos($this->filePath,'.log'));
            $newPath = $newPath.'.'.date("Ymd", filemtime($this->filePath)).'.log';
            rename($this->filePath, $newPath);
        }
    }
    function save($text) {
        $handle = fopen($this->filePath,"a+");
        if(fwrite($handle,date("Y-m-d H:i:s")." $text\n") === FALSE) {
            die("Error handling logging file to $this->filePath");
        }
        fclose($handle);
    }
}