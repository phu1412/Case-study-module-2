<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Subject
    </div>
    <div class="card-body">
        <form method="post" action="">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Subject Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name="subject_name">
                        </td>
                        <td>
                            <input type='submit' value="Addition" class="btn btn-primary">
                            <a href="admin.php?controller=subject&action=view" class="btn btn-danger">Cancle</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?= $loi ?>
        </form>
    </div>
</div>
</div>
</main>