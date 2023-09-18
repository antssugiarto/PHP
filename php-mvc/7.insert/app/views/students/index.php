<div class="m-5 pt-5">
    <h1 class="text-center display-4">Students List</h1>
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#formModal">
        Add Student
    </button><br><br>
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

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="headingModal">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>students/add" method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" name="nim" class="form-control" id="nim">

                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">

                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="department">Department</label>
                        <select class="form-control" id="department" name="department">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Kimia">Teknik Kimia</option>
                            <option value="Akuntansi">Akuntansi</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>