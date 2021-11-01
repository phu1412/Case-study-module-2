<?php session_start(); ?>
<?php include 'Database.php'; ?>
<?php if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
}
?>
<?php include 'layout/header_admin.php'; ?>
<?php include 'layout/top_main.php'; ?>
<?php
$controller = '';
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if ($controller == 'course') {
    include_once "public/controller/Admincontroller/CourseController.php";
    $objCourse = new CourseController();
    if ($action == 'view') {
        $objCourse->view();
    }
    if ($action == 'add') {
        $objCourse->add();
    }
    if ($action == 'update') {
        $objCourse->update();
    }
    if ($action == 'delete') {
        $objCourse->delete();
    }
}

if ($controller == 'student') {
    include_once "public/controller/Admincontroller/StudentController.php";
    $objStudent = new StudentController();
    if ($action == 'view') {
        $objStudent->view();
    }
    if ($action == 'delete') {
        $objStudent->delete();
    }
}

if ($controller == 'teacher') {
    include_once "public/controller/Admincontroller/TeacherController.php";
    $objTeacher = new TeacherController();
    if ($action == 'view') {
        $objTeacher->view();
    }
    if ($action == 'add') {
        $objTeacher->add();
    }
    if ($action == 'update') {
        $objTeacher->update();
    }

    if ($action == 'delete') {
        $objTeacher->delete();
    }
    if ($action == 'viewsubject') {
        $objTeacher->getSubject();
    }
    if ($action == 'deletesubject') {
        $objTeacher->deleteSubject();
    }
}
if ($controller == 'subject') {
    include_once "public/controller/Admincontroller/SubjectController.php";
    $objSubject = new SubjectController();
    if ($action == 'view') {
        $objSubject->view();
    }
    if ($action == 'add') {
        $objSubject->add();
    }
    if ($action == 'update') {
        $objSubject->update();
    }
    if ($action == 'delete') {
        $objSubject->delete();
    }
    if ($action == 'viewteacher') {
        $objSubject->getTeacher();
    }
    if ($action == 'addteacher') {
        $objSubject->addTeacher();
    }
    if ($action == 'deleteteacher') {
        $objSubject->deleteTeacher();
    }
}
if ($controller == 'class') {
    include_once "public/controller/Admincontroller/ClassController.php";
    $objClass = new ClassController();
    if ($action == 'view') {
        $objClass->view();
    }
    if ($action == 'add') {
        $objClass->add();
    }
    if ($action == 'update') {
        $objClass->update();
    }
    if ($action == 'delete') {
        $objClass->delete();
    }
    if ($action == 'view_student') {
        $objClass->viewStudent();
    }
    if ($action == 'add_student_teacher_subject') {
        $objClass->addStudent_Teacher_Subject();
    }
    if ($action == 'view_teacher_subject') {
        $objClass->viewTeacherSubject();
    }
}

if ($controller == 'schedule') {
    include_once "public/controller/Admincontroller/ScheduleController.php";
    $objSchedule = new ScheduleController();
    if ($action == 'view') {
        $objSchedule->view();
    }
    if ($action == 'add') {
        $objSchedule->add();
    }
    if ($action == 'update') {
        $objSchedule->update();
    }
    if ($action == 'delete') {
        $objSchedule->delete();
    }
}


?>
<br><br><br>
<h1 class="index">Welcom to our Administrator</h1>
<br><br><br><br>
<?php include 'layout/footer_admin.php'; ?>