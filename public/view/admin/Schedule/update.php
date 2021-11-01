<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Schedule
    </div>
    <div class="card-body">
        <form action="" method="post">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Session</th>
                        <th>Weekdays</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <td>
                        <input type="text" name='session' value="<?= $item->session ?>">
                    </td>
                    <td>
                        <input type="text" name='weekday' value="<?= $item->weekdays ?>">
                    </td>
                    <td>
                        <input type="submit" value="Update" class='btn btn-primary'>
                        <a href='admin.php?controller=schedule&action=view' class='btn btn-danger'>Cancle</a>
                    </td>
                </tbody>
            </table>
            <?= $loi ?>
        </form>
    </div>
</div>
</div>
</main>