<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login E-Bengkel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">

                    <h4>E-Bengkel</h4>

                </div>

                <div class="card-body">

                    <?php if($this->session->flashdata('error')) : ?>

                        <div class="alert alert-danger">

                            <?= $this->session->flashdata('error'); ?>

                        </div>

                    <?php endif; ?>

                    <form method="post" action="<?= site_url('auth/login')?>">

                        <div class="mb-3">

                            <label>Username</label>

                            <input type="text"
                                   class="form-control"
                                   name="username"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input type="password"
                                   class="form-control"
                                   name="password"
                                   required>

                        </div>

                        <button class="btn btn-primary w-100">

                            Login

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>