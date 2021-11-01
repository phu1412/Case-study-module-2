<?php
include 'public/model/AdminModel/Teacher.php';

class TeacherController
{
    function view()
    {
        $obj = new Teacher();
        $items = $obj->getAll();

        include 'public/view/admin/Teacher/view.php';
    }

    public function add()
    {
        $loi = '';
        $obj = new teacher();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $teacher_name = $_POST['name'];
            $teacher_phone = $_POST['phone'];
            $teacher_email = $_POST['email'];
            $birthday = $_POST['date'];
            $gender = $_POST['gender'];

            $check = $obj->check($teacher_phone, $teacher_email);
            if (!$check) {
                $obj->add($teacher_name, $teacher_phone, $teacher_email, $birthday, $gender);
                $this->redirect('admin.php?controller=teacher&action=view');
            } else {
                $loi = '<span class = "error">Email or Phone is exist</span>';
            }
        }
        include 'public/view/admin/Teacher/add.php';
    }
    public function update()
    {
        $loi = '';
        $id = $_GET['item_id'];
        $obj = new teacher();
        $item = $obj->getOne($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $teacher_name = $_POST['name'];
            $teacher_phone = $_POST['phone'];
            $teacher_email = $_POST['email'];
            $birthday = $_POST['date'];
            $gender = $_POST['gender'];

            $check = $obj->check($teacher_phone, $teacher_email);
            if (!$check) {
                $obj->add($teacher_name, $teacher_phone, $teacher_email, $birthday, $gender);
                $this->redirect('admin.php?controller=teacher&action=view');
            } else {
                $loi = '<span class = "error">Email or Phone is exist </span>';
            }
        }
        include 'public/view/admin/Teacher/update.php';
    }

    public function delete()
    {
        $id = $_GET['item_id'];
        $obj = new Teacher();
        $obj->delete($id);

        $this->redirect('admin.php?controller=teacher&action=view');
    }

    public  function getSubject()
    {
        $id = $_GET['item_id'];
        $obj = new Teacher();
        $items = $obj->getSubject($id);
        if ($items == null) {
            $this->redirect('admin.php?controller=teacher&action=view');
        }
        $_SESSION['teacher_id'] = $id;
        include 'public/view/admin/Teacher/teacher_subject.php';
    }

    public function deleteSubject()
    {
        $id = $_GET['item_id'];
        $obj = new Teacher();
        $obj->deleteSubject($id);
        $this->redirect('admin.php?controller=teacher&action=viewsubject&item_id=' . $_SESSION['teacher_id']);
        unset($_SESSION['teacher_id']);
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
