<div class="m-5 pt-5">
    <h1 class="text-center display-4">Students List</h1>
    <table class="table table-bordered">
        <thead class="text-center bg-primary text-white">
            <tr>
                <th class="col-1">No</th>
                <th class="col-9">Name</th>
                <th class="col-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['sdts'] as $sdts) : ?>
                <tr>
                    <td class="text-center"><?= $i ?></td>
                    <td><?= $sdts['name'] ?></td>
                    <td class="text-center">
                        <a href="<?= BASEURL; ?>students/detail/<?= $sdts['nim'] ?>" class="badge badge-primary">Detail</a>
                        <a href="" class="badge badge-success">Change</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>