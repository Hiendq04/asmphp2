<?php 
    class GroupModels extends db{
        public static function GroupAll($select = ['*'], $where = 1){
            $db = new db();
            return $db -> all("group",$select,$where);
        }
        public static function GroupFind($where = 1,$select = ['*']){
            $db = new db();
            return $db -> find("group",$select,$where);
        }
    
        public static function GroupInsert($data = []){
            $db = new db();
            return $db -> insert("group",$data);
        }
    
        public static function GroupUpdate($id = 0,$data = []){
            $db = new db();
            return $db -> update("group",$id,$data);
        }
    
        public static function GroupDelete($id = 0){
            $db = new db();
            return $db -> delete("group",$id);
        }
    }
?>