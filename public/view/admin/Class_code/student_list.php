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
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $key => $item) : ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $item->first_name . " " . $item->last_name ?></td>
                        <td><?= $item->email ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>