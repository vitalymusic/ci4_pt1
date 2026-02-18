<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Pieteikšanās</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">

            <div class="card shadow">
                <div class="card-body p-4">

                    <h3 class="text-center mb-4">Admin Login</h3>

                    <form method="post" action="/login/check">

                        <div class="mb-3">
                            <label class="form-label">E-pasts</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Parole</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary">
                                Pieteikties
                            </button>
                        </div>

                        <?php if(isset($_SESSION["error"])):?>
                            <div class="alert alert-danger text-center m-3">
                                <?= $_SESSION["error"]?>
                            </div>     
                        <?php endif; ?>    
                    </form>

                </div>
            </div>

            <p class="text-center mt-3 text-muted">
                © <?= date('Y') ?>
            </p>

        </div>
    </div>
</div>

</body>
</html>
