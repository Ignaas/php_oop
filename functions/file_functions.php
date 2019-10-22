<?php

function file_to_array($file) {
    if (file_exists($file)) {
        $data = file_get_contents($file);
        if ($data !== false) {
            return json_decode($data, true);
        }
    }

    return false;
}

function array_to_file($array, $file) {
    if (is_array($array)) {
        $data_written = file_put_contents($file, json_encode($array));
        if ($data_written !== false) {
            return true;
        }

        return false;
    }

    return false;
}
