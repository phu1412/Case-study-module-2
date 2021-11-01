<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Schedule
        <a href="admin.php?controller=schedule&action=add" class="btn btn-primary addition">Addition</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Session</th>
                    <th>Weekdays</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $item->session ?></td>
                        <td><?= $item->weekdays ?></td>
                        <td>
                            <a href="admin.php?controller=schedule&action=update&item_id=<?= $item->id ?>">Update</a>
                            <a href="admin.php?controller=schedule&action=delete&item_id=<?= $item->id ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>