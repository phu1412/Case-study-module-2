<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Student List
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Teacher Name</th>
                    <th>Subject Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $item->teacher_name ?></td>
                        <td><?= $item->subject_name ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>