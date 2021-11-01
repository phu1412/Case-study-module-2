<?php

class Course extends Model
{
    function getAll()
    {
        $sql = "SELECT * FROM course";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }
    function getOne($id)
    {
        $sql = "SELECT * FROM course WHERE id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }
    function check($code)
    {
        $sql = "SELECT * FROM course WHERE course_code = '$code'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function add($code, $date_start, $date_end)
    {
        $sql = "INSERT INTO course (id, course_code, date_start, date_end) VALUES (null, '$code', '$date_start', '$date_end')";
        $this->_db->query($sql);
    }

    function update($code, $date_start, $date_end, $id)
    {
        $sql = "UPDATE course SET course_code = '$code', date_start = '$date_start', date_end ='$date_end' WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function delete($id)
    {
        $sql = "DELETE FROM course WHERE id = '$id'";
        $this->_db->query($sql);
    }
}
