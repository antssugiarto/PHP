<div class="m-5 pt-5">
    <h1 class="text-center display-4">Student Detail</h1>
    <div class="card" style="width: 92.5vw; height: 65vh;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['sdt']['name']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['sdt']['nim']; ?></h6>
            <p class="card-text">Department : <?= $data['sdt']['department']; ?></p>
            <p class="card-text">Email : <?= $data['sdt']['email']; ?></p>
            <a href="<?= BASEURL; ?>students" class="card-link">Back</a>
        </div>
    </div>
</div>