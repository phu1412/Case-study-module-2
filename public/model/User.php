<?php

class UserModel extends Model
{
    function Create($first_name, $last_name, $pass, $gender, $email, $phone, $answer)
    {
        $sql = "INSERT INTO user_account (id, first_name, last_name, password, gender, email, phone, birthday) 
        VALUE (null, '$first_name','$last_name','$pass', '$gender','$email','$phone','$answer')";
        $this->_db->query($sql);
    }

    function CheckSignUp($email, $phone)
    {
        $sql = "SELECT * FROM user_account WHERE email = '$email' OR phone = '$phone'";
        $stmt =  $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function signIn($email, $password)
    {
        $sql = "SELECT * FROM user_account Where email = '$email' AND password = '$password'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function setting($first_name, $last_name, $password, $email, $phone, $id)
    {
        $sql = "UPDATE user_account 
        SET first_name = '$first_name', last_name = '$last_name', password = '$password', email = '$email', phone = '$phone' 
        WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM user_account WHERE id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }
}
