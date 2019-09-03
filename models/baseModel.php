<?php

    namespace Models;
    use \dbConfig;
    class baseModel extends dbConfig {
        
        public function tryMap($data){
            $rules=$this->rules();
            foreach ($rules as $key=>$field){
                if (isset($data[$field])){
                    $this->{$field} = $data[$field];
                }
            }
            return true;
        }
    }