<?php 
    class QuestionModel extends db{
        public static function QuestionAll($select = ['*'], $where = 1){
            $db = new db();
            return $db -> all("questions",$select,$where);
        }
        public static function QuestionFind($id = 0,$select = ['*']){
            $db = new db();
            return $db -> find("questions",$select,$id);
        }
    }
?>