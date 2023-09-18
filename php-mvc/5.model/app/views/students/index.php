<div class="d-flex flex-column align-items-center container mt-5 pt-5 ">
    <h1 class="display-4">Students List</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($data['sdts'] as $sdts) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $sdts['nim'] ?></td>
                <td><?= $sdts['name'] ?></td>
                <td><?= $sdts['department'] ?></td>
                <td><?= $sdts['email'] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>


</div>