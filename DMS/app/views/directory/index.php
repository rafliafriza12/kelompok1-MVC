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
        <form name="search" method="post" action="searchdata.php">
            <div class="card my-4">
                <h5 class="card-header">Search By Name / Contact Number</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" name="searchdata" placeholder="Search for..." required="true">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php include __DIR__ . '/../../includes/footer.php'; ?>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
