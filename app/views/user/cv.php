<div class="container">
    <div class="card">
        <div class="card-body">
            <img src="<?= base_url . '/img/profile.png' ?>" width=200 alt="" class="mx-auto d-block">
            <table class="table table-borderless mt-4">
                <tbody>
                    <tr>
                        <th>Data User</th>
                    </tr>
                    <tr>
                        <td scope="row">Email</td>
                        <td><?= $data['user']['email'] ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Name</td>
                        <td><?= $data['user']['name'] ?></td>
                    </tr>
                    <tr>
                        <td scope="row">phone</td>
                        <td><?= $data['user']['phone'] ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Address</td>
                        <td><?= $data['user']['address'] ?></td>


                    <tr>
                        <th>Educations</th>
                    </tr>
                    <tr>
                        <td scope="row">Education</td>
                        <td><?= $data['edu']['name'] ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Level</td>
                        <td><?= $data['edu']['level'] ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Start Date</td>
                        <td><?= date('d F Y', strtotime($data['edu']['start_date'])) ?></td>
                    </tr>
                    <tr>
                        <td scope="row">End Date</td>
                        <td><?= date('d F Y', strtotime($data['edu']['end_date'])) ?></td>
                    </tr>



                    <tr>
                        <th>Employments</th>
                    </tr>
                    <tr>
                        <td scope="row">Level</td>
                        <td><?= $data['empl']['level'] ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Employments Name</td>
                        <td><?= $data['empl']['employment_name'] ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Company</td>
                        <td><?= $data['empl']['company'] ?></td>
                    </tr>
                    <tr>
                        <td scope="row">Start Date</td>
                        <td><?= date('d F Y', strtotime($data['empl']['start_date'])) ?></td>
                    </tr>
                    <tr>
                        <td scope="row">End Date</td>
                        <td><?= date('d F Y', strtotime($data['empl']['end_date'])) ?></td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>