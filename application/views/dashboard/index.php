<div class="container-fluid">

    <h3 class="mb-4">Dashboard</h3>

    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card border-primary">
                <div class="card-body text-center">
                    <h5>Total Motor</h5>
                    <h2><?= $total_motor; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-success">
                <div class="card-body text-center">
                    <h5>Total Mekanik</h5>
                    <h2><?= $total_mekanik; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-warning">
                <div class="card-body text-center">
                    <h5>Total Layanan</h5>
                    <h2><?= $total_layanan; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-danger">
                <div class="card-body text-center">
                    <h5>Total Booking</h5>
                    <h2><?= $total_booking; ?></h2>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-4">

        <div class="col-md-4 mb-3">
            <div class="card bg-warning text-dark">
                <div class="card-body text-center">
                    <h5>Booking Menunggu</h5>
                    <h2><?= $booking_menunggu; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card bg-primary text-white">
                <div class="card-body text-center">
                    <h5>Booking Diproses</h5>
                    <h2><?= $booking_diproses; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card bg-success text-white">
                <div class="card-body text-center">
                    <h5>Booking Selesai</h5>
                    <h2><?= $booking_selesai; ?></h2>
                </div>
            </div>
        </div>

    </div>

</div>