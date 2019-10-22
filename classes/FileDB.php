<?php

class FileDB {

    private $file_name;
    private $data;

    public function __construct($file_name) {
        $this->file_name = $file_name;
    }

    public function load() {
        $this->data = file_to_array($this->file_name);
    }

    public function setData($data_array) {
        $this->data = $data_array;
    }

    public function save() {
        array_to_file($this->data, $this->file_name);
    }

}
