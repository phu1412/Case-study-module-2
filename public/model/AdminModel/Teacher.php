<?php
class Teacher extends Model
{
    function getAll()
    {
        $sql = "SELECT * FROM teacher";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM teacher WHERE id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }
    function check($phone, $email)
    {
        $sql = "SELECT * FROM teacher WHERE teacher_phone = '$phone' OR teacher_email = '$email'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function add($teacher_name, $teacher_phone, $teacher_email, $birthday, $gender)
    {
        $sql = "INSERT INTO teacher (id, teacher_name,teacher_phone, teacher_email,birth_day,gender) VALUES (null, '$teacher_name', '$teacher_phone', '$teacher_email','$birthday','$gender')";
        $this->_db->query($sql);
    }

    function update($teacher_name, $teacher_phone, $teacher_email, $birthday, $gender, $id)
    {
        $sql = "UPDATE teacher SET teacher_name = '$teacher_name', teacher_phone = '$teacher_phone', teacher_email ='$teacher_email', birth_day = '$birthday', gender = '$gender'  WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function delete($id)
    {
        $sql = "DELETE FROM teacher_subject WHERE teacher_id = '$id'";
        $this->_db->query($sql);

        $sql_1 = "DELETE FROM teacher WHERE id = '$id'";
        $this->_db->query($sql_1);
    }

    function getSubject($id)
    {
        $sql = "SELECT teacher_subject.id, teacher_name, subject_name FROM teacher 
        INNER JOIN teacher_subject ON teacher.id = teacher_subject.teacher_id
        INNER JOIN subject ON  teacher_subject.subject_id = subject.id WHERE teacher.id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    

    function deleteSubject($id)
    {
        $sql = "DELETE FROM teacher_subject WHERE id = '$id'";
        $this->_db->query($sql);
    }
}
