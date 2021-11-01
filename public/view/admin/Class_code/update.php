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
                        <th>Course</th>
                        <th>Name</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="course">
                                <option><?= $obj_old->course_code ?></option>
                                <?php foreach ($courses as $key => $course) : ?>
                                    <option value="<?= $course->id ?>"><?= $course->course_code ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="name_class" value="<?= $obj_old->name_class ?>">
                        </td>
                        <td>
                            <select name="schedule">
                                <option><?= $obj_old->session . ", " . $obj_old->weekdays ?></option>
                                <?php foreach ($schedules as $key => $schedule) : ?>
                                    <option value="<?= $schedule->id ?>"><?= $schedule->session . ", " . $schedule->weekdays ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <input type='submit' value="Update" class="btn btn-primary">
                            <a href="admin.php?controller=class&action=view" class="btn btn-danger">Cancle</a>
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