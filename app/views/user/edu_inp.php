<div class="container mt-5">
    <div class="card">
        <?php Flasher::flash() ?>

        <div class="card-header">
            <h4 class="text-center">Education Form</h4>
        </div>


        <div class="card-body">
            <div class="container">
                <form action="<?= base_url . '/home/edu_act' ?> " method="POST">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Education Name</label>
                        <input type="text" name="nama" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Level</label>
                        <select class="form-control" name="level" id="">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Start Date</label>
                        <input type="date" class="form-control" name="start" id="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">End Date</label>
                        <input type="date" class="form-control" name="end" id="">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>