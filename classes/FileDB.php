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

    public function getData() {
        return $this->data;
    }

    public function setData($data_array) {
        $this->data = $data_array;
    }

    public function save() {
        return array_to_file($this->data, $this->file_name);
    }

    public function getRow($table, $row_id) {
        if (isset($this->data[$table])) {
            return $this->data[$table][$row_id];
        }
    }

    public function addRow($table, $row) {
        $this->data[$table] = $row;
    }

    public function replaceRow($table, $row_id, $row) {
        if (isset($this->data[$table][$row_id])) {
            $this->data[$table][$row_id] = $row;
        } else {
            return false;
        }
    }

    public function createTable($table_name) {
        if (!isset($this->data[$table_name])) {
            $this->data[$table_name] = [];

            return true;
        }

        return false;
    }

    public function tableExists($table_name) {
        return array_key_exists($table_name, $this->data);
    }

}
