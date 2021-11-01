<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Subject
        <a href="admin.php?controller=subject&action=add" class="btn btn-primary addition">Addition</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Teacher</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $item->subject_name ?></td>
                        <td>
                            <a href="admin.php?controller=subject&action=viewteacher&item_id=<?= $item->id ?>">List</a>
                            <a href="admin.php?controller=subject&action=addteacher&item_id=<?= $item->id ?>">Addition</a>
                        </td>
                        <td>
                            <a href="admin.php?controller=subject&action=update&item_id=<?= $item->id ?>">Update</a>
                            <a href="admin.php?controller=subject&action=delete&item_id=<?= $item->id ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>