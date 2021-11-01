<?php

class AdminModel extends Model
{
    function login($email, $password)
    {
        $sql = "SELECT * FROM admin Where admin_email = '$email' AND admin_password = '$password'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }
}
