<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Course
    </div>
    <div class="card-body">
        <form action="" method="post">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        <input type="text" name='code'>
                    </td>
                    <td>
                        <input type="date" name='start'>
                    </td>
                    <td>
                        <input type="date" name='end'>
                    </td>
                    <td>
                        <input type="submit" value="Addition" class="btn btn-primary">
                        <a href='admin.php?controller=course&action=view' class='btn btn-danger'>Cancle</a>
                    </td>
                </tbody>
            </table>
            <?= $loi_code ?>
        </form>
    </div>
</div>
</div>
</main>