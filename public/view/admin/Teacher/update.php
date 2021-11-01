<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Teacher
    </div>
    <div class="card-body">
        <form method="post" action="">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name='name' value="<?= $item->teacher_name ?>">
                        </td>
                        <td>
                            <input type="text" name='phone' value="<?= $item->teacher_phone ?>">
                        </td>
                        <td>
                            <input type="text" name='email' value="<?= $item->teacher_email ?>">
                        </td>
                        <td>
                            <input type="date" name='date' value="<?= $item->birth_day ?>">
                        </td>
                        <td>
                            <input type="gender" name='gender' value="<?= $item->gender ?>">
                        </td>
                        <td>
                            <input type="submit" value="Update" class='btn btn-primary'>
                            <a href='admin.php?controller=teacher&action=view' class='btn btn-danger'>Cancle</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?= $loi ?>
        </form>
    </div>
</div>
</div>
</main>