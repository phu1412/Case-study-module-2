<?php
include 'public/model/AdminModel/Student.php';

class StudentController
{
    function view()
    {
        $obj = new Student();
        $items = $obj->getAll();

        include 'public/view/admin/Student/view.php';
    }

    function delete()
    {
        $id = $_GET['item_id'];
        $obj = new Student();
        $obj->delete($id);

        $this->redirect('admin.php?controller=student&action=view');
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
