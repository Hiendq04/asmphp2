<?php 
    class db {
        protected $severname="localhost";
        protected $dbname="asmphp2";
        protected $username="root";
        protected $password="";
        //Kết nối với CSDL
        public function getConnect() {
            $connect = new PDO(
                "mysql:host=" . $this->severname
                . ";dbname=" . $this->dbname,
                $this->username,
                $this->password
            );

            return $connect;
        }

        //Thực hiện truy xuất dữ liệu từ db
        // public function getData($query) {
        //     $conn = $this->getConnect();    //Khởi tạo kết nối CSDL
        //     $stmt = $conn ->prepare($query);    //Truyền câu truy vấn
        //     $stmt->execute();   //Thực hiện câu truy vấn

        //     return $stmt->fetchAll();
        // }

        public function all($table, $select = ['*'], $where = 1){
            $conn = $this -> getConnect();
            $select = implode(',',$select);
            $sql = "SELECT $select FROM `$table` where $where";
            $stmt = $conn->prepare($sql);
            $stmt -> execute();
            $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $list;
        }
        public function find($table, $select = ['*'], $where = 1){
            $conn = $this -> getConnect();
            $select = implode(',',$select);
            $sql = "SELECT $select FROM `$table` where $where";
            $stmt = $conn->prepare($sql);
            $stmt -> execute();
            $list = $stmt->fetch(PDO::FETCH_ASSOC);

            return $list;
        }
    
        public function update($table,$id = 0, $data = []){
            $conn = $this -> getConnect();
            $datas = [];
            foreach($data as $key => $value){
                $datas[] = "`$key` = '$value'";
            }
            $dataSql = implode(', ',$datas); 
            $sql = "UPDATE `$table` SET $dataSql WHERE `$table`.`id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
    
    
        public function insert($table,$data = []){
            $conn = $this -> getConnect();
            $values = array_values($data);
            $value = implode("','",$values);
            $keys = array_keys($data);
            $key = implode('`,`',$keys);
            $sql = "INSERT INTO `$table` (`$key`) VALUES ('$value')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
    
        public function lastInsertId($table,$data = []){
            $conn = $this -> getConnect();
            $values = array_values($data);
            $value = implode("','",$values);
            $keys = array_keys($data);
            $key = implode('`,`',$keys);
            $sql = "INSERT INTO `$table` (`$key`) VALUES ('$value')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $conn->lastInsertId();
        }
    
    
        public function delete($table,$id){
            $conn = $this -> getConnect();
            $sql = "DELETE FROM $table WHERE `$table`.`id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
    
        public function updateUp($table,$id,$truong,$count){
            $conn = $this -> getConnect();
            $sql = "UPDATE `$table` SET `$truong` = `$truong` + $count WHERE `$table`.`id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
        public function updateDown($table,$id,$truong,$count){
            $conn = $this -> getConnect();
            $sql = "UPDATE `$table` SET `$truong` = `$truong` - $count WHERE `$table`.`id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
    }
?>