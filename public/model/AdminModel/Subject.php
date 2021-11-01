<?php

class Subject extends Model
{
    function getAll()
    {
        $sql = "SELECT * FROM subject";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM subject WHERE id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function add($subject_name)
    {
        $sql = "INSERT INTO subject (id, subject_name) values (null, '$subject_name')";
        $this->_db->query($sql);
    }
    function check($subject_name)
    {
        $sql = "SELECT * FROM subject WHERE subject_name = '$subject_name'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function update($subject_name, $id)
    {
        $sql = "UPDATE subject SET subject_name = '$subject_name' WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function delete($id)
    {
        $sql = "DELETE FROM subject WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function getTeacher($id)
    {
        $sql = "SELECT teacher_subject.id, teacher_name, subject_name FROM teacher 
        INNER JOIN teacher_subject ON teacher.id = teacher_subject.teacher_id
        INNER JOIN subject ON  teacher_subject.subject_id = subject.id WHERE subject.id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function addTeacher($teacher_id, $subject_id)
    {
        $sql = "INSERT INTO teacher_subject (id, teacher_id, subject_id) VALUES (null,'$teacher_id', '$subject_id')";
        $this->_db->query($sql);
    }
    function checkaddTeacher($teacher_id, $subject_id)
    {
        $sql = "SELECT * FROM teacher_subject WHERE teacher_id = '$teacher_id' AND subject_id = '$subject_id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function deleteSubject($id)
    {
        $sql = "DELETE FROM teacher_subject WHERE id = '$id'";
        $this->_db->query($sql);
    }
}
