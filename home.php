<?php
    include_once 'include/header.php';
    require_once 'include/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domov</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsqr@1.3.1/dist/jsQR.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>

    <div class="col-10 container bg-white p-3 scan-message d-flex align-items-center justify-content-center" id="scan-message">
        <p id="response-message" class="my-2"></p>
    </div>

    <div class="container">
        <div id="inputField" class="d-flex justify-content-center">
            <textarea name="input" id="input" class="form-control" cols="30" rows="20" oninput="this.value = this.value.replace(/[^0-9]/g, '');" placeholder="Zadajte ID užívateľa"></textarea>
        </div>

        <div class="d-flex justify-content-center">
            <div class="form-check form-check-inline mt-3 d-flex align-items-center">
                <input class="form-check-input" type="radio" name="option" id="Práca" value="Práca" checked>
                <label class="form-check-label" for="Práca">Práca</label>
            </div>
            <div class="form-check form-check-inline mt-3 d-flex align-items-center">
                <input class="form-check-input" type="radio" name="option" id="Obed" value="Obed">
                <label class="form-check-label" for="Obed">Obed</label>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" id="submitButton" class="btn btn-main mt-3">Potvrdiť</button>
        </div>
    </div>
    
    <?php
        include_once 'include/footer.php';
    ?>
</body>
</html>