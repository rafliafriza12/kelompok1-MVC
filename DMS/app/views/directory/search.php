<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Directory Management System</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <?php include __DIR__ . '/../../includes/header.php'; ?>

    <div class="container">
        <div class="row text-left">
            <?php
            $num = $directories->num_rows;
            if ($num > 0) {
                while ($row = $directories->fetch_assoc()) {
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title" align="center"><?php echo htmlspecialchars($row['FullName']); ?></h4>
                            <p><b>Mobile Number:</b> <?php echo htmlspecialchars($row['MobileNumber']); ?></p>
                            <p class="card-text"><b>Email:</b> <?php echo htmlspecialchars($row['Email']); ?></p>
                            <p class="card-text"><b>Profession:</b> <?php echo htmlspecialchars($row['Profession']); ?></p>
                            <p class="card-text"><b>Address:</b> <?php echo htmlspecialchars($row['Address']); ?></p>
                            <p class="card-text"><b>City:</b> <?php echo htmlspecialchars($row['City']); ?></p>
                        </div>
                    </div>
                </div>
            <?php 
                }
            } else {
                echo '<div class="col-12"><p>No results found</p></div>';
            }
            ?>
        </div>
    </div>

    <?php include __DIR__ . '/../../includes/footer.php'; ?>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
