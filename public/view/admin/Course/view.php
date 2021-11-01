<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Course
        <a href="admin.php?controller=course&action=add" class="btn btn-primary addition">Addition</a>
    </div>
    <div class="card-body">

        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Code</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $item->course_code ?></td>
                        <td><?= $item->date_start ?></td>
                        <td><?= $item->date_end ?></td>
                        <td>
                            <a href="admin.php?controller=course&action=update&item_id=<?= $item->id ?>">Update</a>
                            <a href="admin.php?controller=course&action=delete&item_id=<?= $item->id ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>