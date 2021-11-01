<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Teacher
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th colspan="3">
                        <?=
                        $items['0']->subject_name
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>STT</th>
                    <th>Teacher Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $item->teacher_name ?></td>
                        <td>
                            <a href="admin.php?controller=subject&action=deleteteacher&item_id=<?= $item->id ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                            <a href="admin.php?controller=subject&action=view">Cancle</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>