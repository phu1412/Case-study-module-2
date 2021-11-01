<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Teacher subject
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th colspan="3">
                        <?=
                        $items['0']->teacher_name
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>STT</th>
                    <th>Subject Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $item->subject_name ?></td>
                        <td>
                            <a href="admin.php?controller=teacher&action=deletesubject&item_id=<?= $item->id ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>