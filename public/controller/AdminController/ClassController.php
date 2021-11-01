<?php
include 'public/model/AdminModel/Class_code.php';
include 'public/model/AdminModel/Course.php';
include 'public/model/AdminModel/Schedule.php';
include 'public/model/AdminModel/Student.php';
class ClassController
{
    public function view()
    {
        $obj = new Class_code();
        $items = $obj->getAll();

        include 'public/view/admin/Class_code/view.php';
    }

    public function add()
    {
        $objCourse = new Course();
        $courses = $objCourse->getAll();
        $objSchedule = new Schedule();
        $schedules = $objSchedule->getAll();

        $obj = new Class_code();
        $loi = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name_class'];
            $course_id = $_POST['course'];
            $schedule_id = $_POST['schedule'];

            $check = $obj->check($name);
            if (!$check) {
                $obj->add($name, $course_id, $schedule_id);
                $this->redirect('admin.php?controller=class&action=view');
            } else {
                $loi = '<span class = "error">Name class is exist</span>';
            }
        }
        include 'public/view/admin/Class_code/add.php';
    }

    public function update()
    {
        $id = $_GET['item_id'];
        $objCourse = new Course();
        $courses = $objCourse->getAll();

        $objSchedule = new Schedule();
        $schedules = $objSchedule->getAll();

        $obj = new Class_code();
        $obj_old = $obj->getOne($id);

        $loi = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name_class'];
            $course_id = $_POST['course'];
            $schedule_id = $_POST['schedule'];

            $check = $obj->check($name);
            if (!$check) {
                $obj->update($name, $course_id, $schedule_id, $id);
                $this->redirect('admin.php?controller=class&action=view');
            } else {
                $loi = '<span class = "error">Name class is exist</span>';
            }
        }
        include 'public/view/admin/Class_code/update.php';
    }

    public function delete()
    {
        $id = $_GET['item_id'];
        $obj = new Class_code();
        $obj->delete($id);
        $this->redirect('admin.php?controller=class&action=view');
    }


    public function viewStudent()
    {
        $id = $_GET['item_id'];
        $obj = new Class_code();
        $items = $obj->getStudent($id);

        include 'public/view/admin/Class_code/student_list.php';
    }

    public function addStudent_Teacher_Subject()
    {
        $class_code_id = $_GET['item_id'];

        $objStudent = new Student();
        $items_student = $objStudent->getAll();

        $obj = new Class_code();
        $items_teacher_subject = $obj->getAllTeacherSubject();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_id = $_POST['user_id'];
            $teacher_subject_id = $_POST['teacher_subject_id'];

            $obj->addStudent_Teacher_Subject($class_code_id, $user_id, $teacher_subject_id);
            $this->redirect('admin.php?controller=class&action=view');
        }

        include 'public/view/admin/Class_code/add_student_teacher_subject.php';
    }

    public function viewTeacherSubject()
    {
        $id = $_GET['item_id'];
        $obj = new Class_code();
        $items = $obj->getTeacherSubject($id);

        include 'public/view/admin/Class_code/teacher_subject_list.php';
    }

    public function redirect($url)
    {
?>
        <script>
            let url = '<?= $url; ?>';
            window.location.href = url;
        </script>
<?php
    }
}
