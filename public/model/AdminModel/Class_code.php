<?php

class Class_code extends Model
{
    function getAll()
    {
        $sql = "SELECT class_code.id, name_class, course_code, session, weekdays FROM class_code 
        JOIN course ON class_code.course_id = course.id 
        JOIN schedule ON class_code.schedule_id = schedule.id";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function getOne($id)
    {
        $sql = "SELECT class_code.id, name_class, course_code, session, weekdays FROM class_code 
        JOIN course ON class_code.course_id = course.id 
        JOIN schedule ON class_code.schedule_id = schedule.id WHERE class_code.id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function add($name, $course_id, $schedule_id)
    {
        $sql = "INSERT INTO class_code (id, name_class, course_id, schedule_id) VALUES (null, '$name','$course_id','$schedule_id')";
        $this->_db->query($sql);
    }

    function check($name)
    {
        $sql = "SELECT * FROM class_code WHERE name_class = '$name'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function update($name, $course_id, $schedule_id, $id)
    {
        $sql = "UPDATE class_code SET name_class = '$name', course_id = '$course_id', schedule_id ='$schedule_id' WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function delete($id)
    {
        $sql = "DELETE FROM class_student WHERE classcode_id = '$id'";
        $this->_db->query($sql);

        $sql_1 = "DELETE FROM class_code WHERE id = '$id'";
        $this->_db->query($sql_1);
    }

    function getStudent($id)
    {
        $sql = "SELECT * FROM class_student 
        JOIN user_account ON class_student.user_id = user_account.id
        WHERE class_student.classcode_id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function addStudent_Teacher_Subject($class_code_id, $user_id, $teacher_subject_id)
    {
        $sql = "INSERT INTO class_student (id, classcode_id, user_id, teacher_subject_id) VALUES (null,'$class_code_id', '$user_id', '$teacher_subject_id')";
        $this->_db->query($sql);
    }

    function getTeacherSubject($id)
    {
        $sql = "SELECT * FROM class_student
        JOIN teacher_subject ON class_student.teacher_subject_id = teacher_subject.id
        JOIN teacher ON teacher_subject.teacher_id = teacher.id
        JOIN subject ON teacher_subject.subject_id = subject.id
        WHERE class_student.classcode_id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function getAllTeacherSubject()
    {
        $sql = "SELECT teacher_subject.id, teacher.teacher_name, subject.subject_name FROM teacher_subject 
        JOIN teacher ON teacher_subject.teacher_id = teacher.id
        JOIN subject ON teacher_subject.subject_id = subject.id";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }
}
