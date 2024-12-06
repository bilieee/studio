<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/img/guitar.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary sticky-top">
        <div class="container-fluid mx-4">
            <a class="navbar-brand" href="#">Overtones</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/studio/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/studio/booking">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/studio/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/studio/riwayat">Riwayat</a>
                    </li>
                </ul>
            </div>
            <div class="logout">
                <a class="nav-link" href="/logout">Logout</a>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>


    <!-- ini js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>