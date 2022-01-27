<div class="booking container-fluid h-100">
    <div class="row h-100">
        <div class="col pl-5 d-flex">
            <div class="timeline card col-3 mx-3 mt-3 shadow-sm h-auto">
                <div class="justify-content">
                    <p>Your Booked Station</p>
                    <hr>
                </div>
            </div>
            <div class="col container-fluid">
                <?php foreach ($list_charges as $list_casan) : ?>
                <div class="row">
                    <div class="col mt-3">
                        <div class="card">
                            <a href="<?= base_url('bookings/detail/') . $list_casan['id']; ?>">
                                <div class="card-horizontal">
                                    <div class="row">
                                        <div class="col-auto m-3">
                                            <div class="img-square-wrapper my-auto">
                                                <img class="" src="<?= $list_casan['foto'] ?>" alt="Card image cap">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body d-flex align-items-start flex-column h-100 py-3">
                                                <div class="judul">
                                                    <h3><?= $list_casan['nama'] ?></h3>
                                                    <p class="m-0">2 KM AWAY</p>
                                                </div>
                                                <div class="konten mt-auto">
                                                    <div class="konten-3">
                                                        <p class="m-0"><?= $list_casan['status'] ?></p>
                                                        <h5 class="m-0">Ready at 14.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-3 pt-5 side-data">
            <div class="d-flex flex-column justify-content-around" style="height: 90%">
                <div class="card shadow">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="mr-2 text-center">
                            <i id="battery" class="fas fa-battery-full text-success ikon-baterai"></i>
                            <h6 id="batteryState">100%</h6>
                        </div>
                    </div>
                </div>
                <div class="">
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