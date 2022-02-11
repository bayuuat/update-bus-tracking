<div class="booking-detail container-fluid">
    <div class="row h-100">
        <div class="col pl-4 pr-0">
            <div class="main-title row my-3 ml-2">
                <a href="<?= base_url('bookings/') ?>">
                    <button class="btn rounded-button" type="submit">
                        <i class="fa fa-arrow-left panah" aria-hidden="true"></i>
                    </button>
                </a>
                <h2>Charging Station Bookings</h2>
            </div>
            <div class="row">
                <div class="timeline card col-3 mx-3">
                    <div class="justify-content">
                        <p>Your Booked Station</p>
                        <hr>
                    </div>
                </div>
                <div class="main-content col px-4">
                    <div class="card-horizontal">
                        <div class="row">
                            <div class="col-auto">
                                <div class="img-square-wrapper my-auto">
                                    <img class="" src="<?= base_url("assets/img/") . $detail->foto ?>"
                                        alt="Card image cap">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body d-flex align-items-start flex-column h-100 pt-1 pb-0">
                                    <div class="judul">
                                        <h3><?= $detail->nama ?></h3>
                                        <p>2 KM AWAY</p>
                                    </div>
                                    <div class="konten mt-auto">
                                        <div class="konten-1">
                                            <h5 class="">Booked</h5>
                                            <p class="status-book">You already book @31-01-2022 07:00 AM</p>
                                        </div>
                                        <div class="konten-2">
                                            <h5 class="">Location</h5>
                                            <p class="lokasi"><?= $detail->lokasi ?></p>
                                        </div>
                                        <div class="konten-3">
                                            <h5 class="">Status</h5>
                                            <p id="WarnaStatus" class="status-station"><?= $detail->status ?>
                                            </p>
                                            <script>
                                            var status = "<?php echo $detail->status; ?>";
                                            var element = document.getElementById("WarnaStatus");
                                            if (status == 'Available') {
                                                element.classList.add('text-success');
                                            } else if (status == 'Occupied') {
                                                element.classList.add('text-danger');
                                            } else if (status == 'Unavailable') {
                                                element.classList.add('text-secondary');
                                            }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="<?php echo base_url('bookings/create/') . $detail->id ?>" method="POST">
                        <div class="books-detail row my-4">
                            <div class="col-9">
                                <div class="tombol-buatan row my-3">
                                    <div class="col-6 d-flex my-auto">
                                        <i class="fas fa-charging-station my-auto"></i>
                                        <p>Charging Station</p>
                                    </div>
                                    <div class="col-6 d-flex faded-text">
                                        <p class="text-truncate"><?= $detail->lokasi ?></p>
                                    </div>
                                </div>
                                <div class="tombol-buatan row my-3">
                                    <div class="col d-flex">
                                        <i class="fas fa-charging-station my-auto"></i>
                                        <input id="datefield" name="tanggal" type="date" class="datepicker-input">
                                    </div>
                                </div>
                                <div class="tombol-buatan row my-3 py-2">
                                    <div class="col d-flex">
                                        <i class="fas fa-charging-station my-auto"></i>
                                        <input id="jam_mulai" name="jam_mulai" class="my-auto" type="time" />
                                    </div>
                                    <div class="my-auto col-2 d-flex garis p-0">
                                        <p>&#124;</p>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <i class="fas fa-charging-station my-auto"></i>
                                        <input name="jam_selesai" class="my-auto" type="time" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 align-items-end d-flex">
                                <div class="row my-3">
                                    <button class="btn btn-book my-auto" type="submit">
                                        BOOK NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3 side-data ml-4">
            <div class="d-flex flex-column justify-content-around" style="height: 100%">
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