<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Student
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $item->first_name . ' ' . $item->last_name ?></td>
                        <td><?= $item->phone ?></td>
                        <td><?= $item->email ?></td>
                        <td><?= $item->birthday ?></td>
                        <td><?= $item->gender ?></td>
                        <td>
                            <a href="admin.php?controller=student&action=delete&item_id=<?= $item->id ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>