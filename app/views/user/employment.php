<div class="container">
    <div class="card mt-5">
        <?php Flasher::flash() ?>

        <div class="card-body">
            <a href="<?= base_url . '/home/empl_del/' . $_SESSION['userdata']['id'] ?>" class="btn btn-danger float-right ml-4" onclick="return confirm('Yakin Hapus?')"> Delete</a>

            <a href="" data-id="<?= $_SESSION['userdata']['id'] ?>" class="btn btn-warning float-right edit-empl mb-2" data-toggle="modal" data-target="#edit_data"><i class="fas fa-edit"></i> Edit</a>

            <table class="table mt-4">
                <tbody>
                    <tr>
                        <th scope="row" width="200">Employments Name</th>
                        <td><?= $data['empl']['employment_name'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Level</th>
                        <td><?= $data['empl']['level'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Company</th>
                        <td><?= $data['empl']['company'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Start Date</th>
                        <td><?= date('d F Y', strtotime($data['empl']['start_date'])) ?></td>
                    </tr>
                    <tr>
                        <th scope="row">End Date</th>
                        <td><?= date('d F Y', strtotime($data['empl']['end_date'])) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-labelledby="edit_dataTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Employments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url . '/home/empl_edt' ?>">

                    <input type="text" name="id" class="form-control" id="id" hidden>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Employments Name</label>
                        <input type="text" name="nama" class="form-control" id="name">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Level</label>
                        <select class="form-control" name="level" id="level">
                            <option value="full_time">full time</option>
                            <option value="part_time">part time</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Company Name</label>
                        <input type="text" class="form-control" name="company" id="company">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Start Date</label>
                        <input type="date" class="form-control" name="start" id="start">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">End Date</label>
                        <input type="date" class="form-control" name="end" id="end">
                    </div>
            </div>
            <div class="modal-footer center-block">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>