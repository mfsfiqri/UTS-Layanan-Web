<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suppliers</title>
</head>

<body>
  <h1>Suppliers</h1>
  <ul>
    <?php foreach ($suppliers as $supplier) : ?>
      <li><?php echo $supplier; ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>