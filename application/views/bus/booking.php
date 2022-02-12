<div class="booking container-fluid">
    <?= $this->session->tempdata('success_booking') ?>
    <div class="row pl-4">
        <div class="timeline card shadow-sm col-2 mt-3" style="max-height: 85vh;">
            <div class="justify-content">
                <p>Your Booked Station</p>
                <hr>
                <div class="card booked-station my-3">
                    <i class="fa fa-times"></i>
                    <h2>FTEIC Charging Station</h2>
                    <p>Monday, 31 January 2022</p>
                    <p class="p-0">12:00 - 13:00</p>
                </div>
            </div>
        </div>
        <div id="station-list" class="col px-4 pt-3" style="height: 88vh; overflow:auto">
            <?php foreach ($list_charges as $list_casan) : ?>
            <a href="<?= base_url('bookings/detail/') . $list_casan['id']; ?>">
                <div class="card-horizontal mb-4">
                    <div class="row">
                        <div class="col-auto">
                            <div class="img-square-wrapper my-auto">
                                <img class="" src="<?= base_url("assets/img/") . $list_casan['foto'] ?>"
                                    alt="Card image cap">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex align-items-start flex-column h-100 py-3">
                                <div class="judul">
                                    <h3><?= $list_casan['nama'] ?></h3>
                                    <p class="m-0">2 KM AWAY</p>
                                </div>
                                <div class="konten mt-auto">
                                    <p class="m-0" id="<?= 'WarnaStatus' . $list_casan['id']; ?>">
                                        <?=$list_casan['status']?>
                                    </p>
                                    <h5 class="m-0">Ready at 14.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <script>
            var status = "<?php echo $list_casan['status'] ?>";
            var element = document.getElementById(
                "<?= 'WarnaStatus' . $list_casan['id']; ?>");
            if (status == 'Available') {
                element.classList.add('text-success');
            } else if (status == 'Occupied') {
                element.classList.add('text-danger');
            } else if (status == 'Unavailable') {
                element.classList.add('text-secondary');
            }
            </script>
            <?php endforeach; ?>
        </div>
        <div class="col-3 side-data" style="height:90vh;">
            <div class="d-flex flex-column justify-content-around" style="height: 100%;">
                <div class="card shadow">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="mr-2 text-center gambar-baterai">
                            <i id="battery" class="fas fa-battery-full text-success ikon-baterai"></i>
                            <h6 id="batteryState">100%</h6>
                        </div>
                    </div>
                </div>
                <div class="status-baterai">
                    <h5>Battery Status</h5>
                    <div class="card shadow">
                        <div class="card-body bat-kon">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td style="width: 13%"><i class="fas fa-bolt"></i></td>
                                        <td>
                                            <h6>Voltage</h6>
                                        </td>
                                        <td>
                                            <p id="voltage">5%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-charging-station"></i></td>
                                        <td>
                                            <h6>State of Charge</h6>
                                        </td>
                                        <td>
                                            <p id="soc">9%</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="status-data">
                    <div class="card shadow">
                        <div class="card-body status">
                            <div class="row">
                                <div class="col-2"><i class="fas fa-star d-flex justify-content-center"></i></div>
                                <div class="col">
                                    <div class="text-kondisi">
                                        <h6>Vehicle Status</h6>
                                        <p>ini isinya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"><i class="fas fa-bell d-flex justify-content-center"></i></div>
                                <div class="col">
                                    <div class="text-kondisi">
                                        <h6>Vehicle Health</h6>
                                        <p>ini isinya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"><i class="fas fa-tint d-flex justify-content-center"></i></div>
                                <div class="col">
                                    <div class="text-kondisi">
                                        <h6>Sensor Health</h6>
                                        <p>ini isinya</p>
                                        </d>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>