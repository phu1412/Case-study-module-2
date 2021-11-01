<?php
include 'public/model/AdminModel/Subject.php';
include 'public/model/AdminModel/Teacher.php';
class SubjectController
{
    public function view()
    {

        $obj = new Subject();
        $items = $obj->getAll();

        include 'public/view/admin/Subject/view.php';
    }

    public function add()
    {
        $loi = '';
        $obj = new Subject();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $subject_name = $_POST['subject_name'];

            $check = $obj->check($subject_name);
            if (!$check && $subject_name != '') {
                $obj->add($subject_name);
                $this->redirect("admin.php?controller=subject&action=view");
            } else {
                $loi = "<span class = 'error' >Subject is exist or null</span>";
            }
        }
        include 'public/view/admin/Subject/add.php';
    }

    public function update()
    {
        $loi = '';
        $id = $_GET['item_id'];
        $obj = new Subject();
        $item = $obj->getOne($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $subject_name = $_POST['subject_name'];

            $check = $obj->check($subject_name);
            if (!$check) {
                $obj->update($subject_name, $id);
                $this->redirect("admin.php?controller=subject&action=view");
            } else {
                $loi = "<span class = 'error' >Subject is exist</span>";
            }
        }
        include 'public/view/admin/Subject/update.php';
    }

    function delete()
    {
        $id = $_GET['item_id'];
        $obj = new Subject();
        $obj->delete($id);
        $this->redirect('admin.php?controller=subject&action=view');
    }

    public function getTeacher()
    {
        $id = $_GET['item_id'];
        $obj = new Subject();
        $items = $obj->getTeacher($id);
        if ($items == null) {
            $this->redirect('admin.php?controller=subject&action=view');
        }
        $_SESSION['subject_id'] = $id;
        include 'public/view/admin/Subject/subject_teacher.php';
    }

    public function addTeacher()
    {
        $loi = '';
        $id = $_GET['item_id'];
        $objteacher = new Teacher();
        $items_teacher = $objteacher->getAll();

        $obj = new Subject();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $teacher_id = $_POST['teacher_id'];

            $check = $obj->checkaddTeacher($teacher_id, $id);
            if (!$check) {
                $obj->addTeacher($teacher_id, $id);
                $this->redirect('admin.php?controller=subject&action=viewteacher&item_id=' . $id);
            } else {
                $loi = '<span class = "error">Teacher Subject is exist</span>';
            }
        }
        include 'public/view/admin/Subject/add_subject_teacher.php';
    }

    public function deleteTeacher()
    {
        $id = $_GET['item_id'];
        $obj = new Teacher();
        $obj->deleteSubject($id);
        $this->redirect('admin.php?controller=subject&action=viewteacher&item_id=' . $_SESSION['subject_id']);
        unset($_SESSION['subject_id']);
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
