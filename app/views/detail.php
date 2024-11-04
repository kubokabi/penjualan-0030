<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DETAIL USERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">
</head>

<body>
    <div class="container mt-3">
        <div class="card">
            <div class="row p-3">
                <!-- Menampilkan Foto -->
                <?php if ($data['foto']): ?>
                    <div class="col-12 mb-3">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($data['foto']); ?>" class="img-fluid" alt="User Photo">
                    </div>
                <?php else: ?>
                    <div class="col-12 mb-3">
                        <p>No photo available</p>
                    </div>
                <?php endif; ?>

                <!-- Menampilkan Data User -->
                <div class="col-12">
                    <h5>ID: <?php echo htmlspecialchars($data['id']); ?></h5>
                    <h5>Name: <?php echo htmlspecialchars($data['name']); ?></h5>
                    <h5>Email: <?php echo htmlspecialchars($data['email']); ?></h5>
                    <h5>Address: <?php echo htmlspecialchars($data['alamat']); ?></h5>
                    <h5>Phone Number: <?php echo htmlspecialchars($data['no_hp']); ?></h5>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>