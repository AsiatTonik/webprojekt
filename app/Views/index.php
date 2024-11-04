<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Moje Aplikace</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Položky</h1>
        <div class="row mt-3">
            <?php
            $stmt = $pdo->query("SELECT * FROM items");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/' . $row['image'] . '" class="card-img-top" alt="' . htmlspecialchars($row['name']) . '">
                        <div class="card-body">
                            <h5 class="card-title">' . htmlspecialchars($row['name']) . '</h5>
                            <p class="card-text">' . htmlspecialchars($row['description']) . '</p>
                            <a href="item.php?id=' . $row['id'] . '" class="btn btn-primary">Zobrazit</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
