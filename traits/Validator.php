<?php

trait Validator {
    protected function isValidString($string) {
        if(!isset($string) || strlen(trim($string)) === 0 || !is_string($string)) {
            throw new Exception("La stringa immessa non è valida.");
        }
    }

    protected function isValidNumber($num) {
        if(!isset($num) || !is_numeric($num)) {
            throw new Exception("Il numero immesso non è valido.");
        }
    }

    protected function isValidArray($array) {
        if(!is_array($array) || count($array) === 0) {
            throw new Exception("L'array immesso non è valido.");
        }
    }

    protected function isValidBool($bool) {
        if(!is_bool($bool)) {
            throw new Exception("Il booleano inserito non è valido.");
        }
    }
}

?>