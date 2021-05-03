<div class="container">

    <div class="card">
        <?php Flasher::flash() ?>

        <div class="card-body">
            <img src="<?= base_url . '/img/profile.png' ?>" width=200 alt="" class="mx-auto d-block">
            <a href="<?= base_url . '/home/user_del/' . $_SESSION['userdata']['id'] ?>" class="btn btn-danger float-right ml-4" onclick="return confirm('Yakin Hapus?, Hapus data user berarti seluaruh record akan hilang dari sistem')"> Delete</a>
            <a href="" data-id="<?= $_SESSION['userdata']['id'] ?>" class="btn btn-warning float-right edit-user mb-2" data-toggle="modal" data-target="#edit_data"><i class="fas fa-edit"></i> Edit</a>

            <table class="table mt-4">
                <tbody>
                    <tr>
                        <th scope="row">Email</th>
                        <td><?= $data['user']['email'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td><?= $data['user']['name'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">phone</th>
                        <td><?= $data['user']['phone'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td><?= $data['user']['address'] ?></td>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url . '/home/user_edt' ?>">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" id="id" hidden>

                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="name">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Hp</label>
                        <input type="text" name="hp" class="form-control" id="phone">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="address">
                    </div>
            </div>
            <div class="modal-footer center-block">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>