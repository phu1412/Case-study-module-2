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
                        <th colspan="3">
                        </th>
                    </tr>
                    <tr>
                        <th>Teacher Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name='teacher_id'>
                                <option>
                                    Teacher
                                </option>
                                <?php foreach ($items_teacher as $item) :  ?>
                                    <option value="<?= $item->id ?>">
                                        <?= "Name: " . $item->teacher_name . ", Email: " . $item->teacher_email ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <input type="submit" value="Addition" class="btn btn-primary">
                            <a href="admin.php?controller=subject&action=view" class="btn btn-danger">Cancle</a>
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