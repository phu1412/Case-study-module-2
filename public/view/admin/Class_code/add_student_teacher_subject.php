<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Add Class
    </div>
    <div class="card-body">
        <form method="post" action="">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Teacher Subject</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name='user_id'>
                                <option>
                                    Student
                                </option>
                                <?php foreach ($items_student as $item) :  ?>
                                    <option value="<?= $item->id ?>">
                                        <?= "Name: " . $item->first_name . " " . $item->last_name . ", Email: " . $item->email ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <select name='teacher_subject_id'>
                                <option>
                                    Teacher Subject
                                </option>
                                <?php foreach ($items_teacher_subject as $item) :  ?>
                                    <option value="<?= $item->id ?>">
                                        <?= "Teacher: " . $item->teacher_name .  ", Subject: " . $item->subject_name ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <input type="submit" value="Addition">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
</div>
</main>