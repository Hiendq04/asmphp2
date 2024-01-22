<?php 
    class AnswerModels extends db{
        public static function AnswerAll($select = ['*'], $where = 1){
            $db = new db();
            return $db -> all("answers",$select,$where);
        }
        public static function AnswerFind($id = 0,$select = ['*']){
            $db = new db();
            return $db -> find("answers",$select,$id);
        }
    }
?>