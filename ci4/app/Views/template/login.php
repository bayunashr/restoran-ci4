<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Login Page</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto mt-5">
                <span>
                    <h1 class="text-center">LOGIN</h1>
                </span>
                <hr>
                <div class="col">
                    <?php
                    if (!empty($info)) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $info;
                        echo '</div>';
                    }
                    ?>
                </div>
                <form action="<?= base_url('/admin/login') ?>" method="post">
                    <div class="form-group">
                        <input placeholder="Email" class="form-control" type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input placeholder="Password" class="form-control" type="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" style="width:100%;" type="submit" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>