<div class="container mt-5">
    <div class="card">
        <?php Flasher::flash() ?>
        <div class="card-header">
            <h2>Login Form</h2>
        </div>
        <div class="card-body">
            <div class="container">
                <form method="POST" action="<?= base_url ?>/login/action">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <span class="float-right mt-2">Belum Punya Akun? <a href="<?= base_url ?>/login/regist">Buat Akun</a></span>
                </form>
            </div>
        </div>
    </div>
</div>