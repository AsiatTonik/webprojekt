<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Položky</title>
</head>
<body>
    <div class="container">
        <?php
        $id = $_GET['id'];
        $stmt = $pdo->prepare("SELECT * FROM items WHERE id = ?");
        $stmt->execute([$id]);
        $item = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($item) {
            echo '<h1 class="mt-5">' . htmlspecialchars($item['name']) . '</h1>';
            echo '<img src="assets/img/' . $item['image'] . '" class="img-fluid">';
            echo '<p class="mt-3">' . htmlspecialchars($item['description']) . '</p>';
        } else {
            echo '<h1>Item not found</h1>';
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
