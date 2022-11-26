<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() . 'assets/' ?>modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() . 'assets/' ?>modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() . 'assets/' ?>modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() . 'assets/' ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url() . 'assets/' ?>css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?= base_url() . 'assets/' ?>img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" autocomplete="off" action="<?= base_url('auth/register'); ?>">

                                    <div class="form-group">
                                        <label for="full_name">Name</label>
                                        <input id="full_name" type="text" class="form-control" name="full_name" value="<?= set_value('full_name'); ?>" autofocus>
                                        <small class="text-danger"><?= form_error('full_name') ?></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" class="form-control" name="email" value="<?= set_value('email'); ?>">
                                        <small class="text-danger"><?= form_error('email') ?></small>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control" name="password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                            <small class="text-danger"><?= form_error('password') ?></small>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="passconf" class="d-block">Password Confirmation</label>
                                            <input id="passconf" type="password" class="form-control" name="passconf">
                                            <small class="text-danger"><?= form_error('passconf') ?></small>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() . 'assets/' ?>modules/jquery.min.js"></script>
    <script src="<?= base_url() . 'assets/' ?>modules/popper.js"></script>
    <script src="<?= base_url() . 'assets/' ?>modules/tooltip.js"></script>
    <script src="<?= base_url() . 'assets/' ?>modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() . 'assets/' ?>modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() . 'assets/' ?>modules/moment.min.js"></script>
    <script src="<?= base_url() . 'assets/' ?>js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url() . 'assets/' ?>js/scripts.js"></script>
    <script src="<?= base_url() . 'assets/' ?>js/custom.js"></script>
</body>

</html>