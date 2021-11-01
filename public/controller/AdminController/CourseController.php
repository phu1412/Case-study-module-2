<?php
include 'public/model/AdminModel/Course.php';

class CourseController
{
    public function view()
    {
        $obj = new Course();
        $items = $obj->getAll();

        include 'public/view/admin/Course/view.php';
    }

    public function add()
    {
        $loi_code = '';
        $obj = new Course();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $code = $_POST['code'];
            $star_date = $_POST['start'];
            $end_date = $_POST['end'];

            $check = $obj->check($code);
            if (!$check) {
                $obj->add($code, $star_date, $end_date);
                $this->redirect('admin.php?controller=course&action=view');
            } else {
                $loi_code = '<span class = "error">Course is exist</span>';
            }
        }
        include 'public/view/admin/Course/add.php';
    }
    public function update()
    {
        $loi_code = '';
        $id = $_GET['item_id'];
        $obj = new Course();
        $item = $obj->getOne($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $code = $_POST['code'];
            $star_date = $_POST['start'];
            $end_date = $_POST['end'];

            $check = $obj->check($code);
            if (!$check) {
                $obj->update($code, $star_date, $end_date, $id);
                $this->redirect('admin.php?controller=course&action=view');
            } else {
                $loi_code = '<span class = "error">Course is exist</span>';
            }
        }
        include 'public/view/admin/Course/update.php';
    }

    public function delete()
    {
        $id = $_GET['item_id'];
        $obj = new Course();
        $obj->delete($id);
        $this->redirect('admin.php?controller=course&action=view');
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
