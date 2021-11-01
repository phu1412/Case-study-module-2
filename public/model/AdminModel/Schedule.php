<?php

class Schedule extends Model
{
    function getAll()
    {
        $sql = "SELECT * FROM schedule";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM schedule WHERE id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }
    function check($session, $weekday)
    {
        $sql = "SELECT * FROM schedule WHERE session = '$session' AND weekdays = '$weekday'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function add($session, $weekday)
    {
        $sql = "INSERT INTO schedule (id, session, weekdays) VALUES (null, '$session', '$weekday')";
        $this->_db->query($sql);
    }

    function update($session, $weekday, $id)
    {
        $sql = "UPDATE schedule SET session = '$session', weekdays = '$weekday' WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function delete($id)
    {
        $sql = "DELETE FROM schedule WHERE id = '$id'";
        $this->_db->query($sql);
    }
}
