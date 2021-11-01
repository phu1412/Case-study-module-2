<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Class
        <a href="admin.php?controller=class&action=add" class="btn btn-primary addition">Addition</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Course</th>
                    <th>Name</th>
                    <th>Schedule</th>
                    <th>Student List</th>
                    <th>Teacher-Subject List</th>
                    <th>Add S-T-S</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key; ?></td>
                        <td><?= $item->course_code ?></td>
                        <td><?= $item->name_class ?></td>
                        <td><?= $item->session . ", " . $item->weekdays ?></td>
                        <td>
                            <a href="admin.php?controller=class&action=view_student&item_id=<?= $item->id ?>">List</a>
                        </td>
                        <td>
                            <a href="admin.php?controller=class&action=view_teacher_subject&item_id=<?= $item->id ?>">List</a>
                        </td>
                        <td>
                            <a href="admin.php?controller=class&action=add_student_teacher_subject&item_id=<?= $item->id ?>">Addition</a>
                        </td>
                        <td>
                            <a href="admin.php?controller=class&action=update&item_id=<?= $item->id ?>">Update</a>
                            <a href="admin.php?controller=class&action=delete&item_id=<?= $item->id ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>