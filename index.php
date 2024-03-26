<?php
    include_once 'include/header.php';
    require_once 'include/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsqr@1.3.1/dist/jsQR.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>

    <section>
        <div class="container login col-10">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h2 class="mb-4 fw-bold text-center">Prihlásiť sa</h2>

                    <form method="POST">
                        <div class="form-group mb-3">
                            <label for="username">Meno</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group position-relative">
                            <label for="password">Heslo</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                        </div>

                        <div class="d-flex align-items-center justify-content-center">
                            <input type="submit" name="submit" class="btn btn-main mt-5" value="Prihlásiť sa">
                        </div>
                        <hr class="mt-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="mt-3">Nemáte účet? <a href="register.php" style="text-decoration: none;">Registrujte sa tu</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
        include_once 'include/footer.php';
    ?>
</body>
</html>