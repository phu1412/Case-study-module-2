<?php
include 'public/model/AdminModel/Schedule.php';

class ScheduleController
{
    public function view()
    {
        $obj = new Schedule();
        $items = $obj->getAll();

        include 'public/view/admin/Schedule/view.php';
    }

    public function add()
    {
        $loi = '';
        $obj = new Schedule();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $session = $_POST['session'];
            $weekday = $_POST['weekdays'];
            $check = $obj->check($session, $weekday);
            if (!$check) {
                $obj->add($session, $weekday);
                $this->redirect('admin.php?controller=schedule&action=view');
            } else {
                $loi = '<span class = "error">Schedule is exist</span>';
            }
        }
        include 'public/view/admin/Schedule/add.php';
    }
    public function update()
    {
        $loi = '';
        $id = $_GET['item_id'];
        $obj = new Schedule();
        $item = $obj->getOne($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $session = $_POST['session'];
            $weekday = $_POST['weekday'];
            $check = $obj->check($session, $weekday);
            if (!$check) {
                $obj->update($session, $weekday, $id);
                $this->redirect('admin.php?controller=schedule&action=view');
            } else {
                $loi = '<span class = "error">Schedule is exist</span>';
            }
        }
        include 'public/view/admin/Schedule/update.php';
    }

    public function delete()
    {
        $id = $_GET['item_id'];
        $obj = new Schedule();
        $obj->delete($id);
        $this->redirect('admin.php?controller=schedule&action=view');
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
