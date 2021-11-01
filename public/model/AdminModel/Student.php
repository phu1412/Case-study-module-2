<?php

class Student extends Model {
    function getAll(){
        $sql = "SELECT * FROM user_account";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function delete($id){
        $sql = "DELETE FROM user_account WHERE id = '$id'";
        $this->_db->query($sql);
    }
}