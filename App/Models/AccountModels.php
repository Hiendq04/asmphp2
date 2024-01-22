<?php 
    class AccountModels extends db {
        public static function AccountInsert($data = []) {
            $db = new db();
            return $db->insert("users", $data);
        }
    
        public static function AccountFind($where = 1, $select = ['*']) {
            $db = new db();
            return $db->find("users", $select, $where);
        }
    
        public static function AccountAll($select = ['*'], $where = 1) {
            $db = new db();
            return $db->all("users", $select, $where);
        }
    
        public static function AccountDelete($id = 0) {
            $db = new db();
            return $db->delete("users", $id);
        }
    
        public static function AccountUpdate($id = 0, $data = []) {
            $db = new db();
            return $db->update("users", $id, $data);
        }
    }
    
?>