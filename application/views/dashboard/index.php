<div class="container-fluid">

    <h2 class="mb-4">Dashboard</h2>

    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card border-primary">
                <div class="card-body text-center">
                    <h5>Total Layanan</h5>
                    <h2><?= $layanan ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-success">
                <div class="card-body text-center">
                    <h5>Total Mekanik</h5>
                    <h2><?= $mekanik ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-warning">
                <div class="card-body text-center">
                    <h5>Total Motor</h5>
                    <h2><?= $motor ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-danger">
                <div class="card-body text-center">
                    <h5>Total Booking</h5>
                    <h2><?= $booking ?></h2>
                </div>
            </div>
        </div>

    </div>

</div>