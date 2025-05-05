<?php
    class Form{
        static function form(){
        $hasEmpty=false;
            foreach ($_POST as $key => $value) {
                if (empty($value)) {
                $hasEmpty=true;
                break;
                }
            }
        }
    }
Form::form();