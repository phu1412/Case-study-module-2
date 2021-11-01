<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Teacher
        <a href="admin.php?controller=teacher&action=add" class="btn btn-primary addition">Addition</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Teacher Subject</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $item->teacher_name ?></td>
                        <td><?= $item->teacher_phone ?></td>
                        <td><?= $item->teacher_email ?></td>
                        <td><?= $item->birth_day ?></td>
                        <td><?= $item->gender ?></td>
                        <td>
                            <a href="admin.php?controller=teacher&action=viewsubject&item_id=<?= $item->id ?>">List</a>
                        </td>
                        <td>
                            <a href="admin.php?controller=teacher&action=update&item_id=<?= $item->id ?>">Update</a>
                            <a href="admin.php?controller=teacher&action=delete&item_id=<?= $item->id ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>