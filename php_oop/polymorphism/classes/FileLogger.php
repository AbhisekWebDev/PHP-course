<?php 

class FileLogger implements LoggerInterface {
    public function log($message) {
        echo "Logging message to file: $message";
    }
}
?>