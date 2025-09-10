<?php
    declare(strict_types=1);
    $dice = [
        "winter set" => ["price" => 20, "stock" => 10],
        "fire set" => ["price" => 25, "stock" => 5],
        "forest set" => ["price" => 15, "stock" => 13],
        "ocean set" => ["price" => 30, "stock" => 2],
        "desert set" => ["price" => 18,"stock" => 7],
    ];
    $tax = 70;

    function get_reorder_message(int $stock, string $item): string {
        return ($stock < 5) ? "We need to reorder more $item dice!" : "Stock level for $item dice is sufficient.";
    }   

    function calculate_total_value(float $price, int $quantity): float {
        return $subtotal = $price * $quantity;
        
    }

    function calculate_tax(float $price, int $quantity, float $tax): float {
        return (calculate_total_value($price, $quantity) * ($tax/100));
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Store</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="bg-dark text-white">
    <h1>Dice Dungeon</h1>
    <h2>Stock Overview</h2>
    <table class="table-dark">
    <tr>
        <th>Dice</th>
        <th>Stock</th>
        <th>Reorder</th>
        <th>Total Value</th>
        <th>Tax</th>
    </tr>
    <?php foreach($dice as $product => $data): ?>
        <tr>
            <td><?= $product ?></td>
            <td><?= $data['stock'] ?></td>
            <td><?= get_reorder_message($data['stock'], $product)  ?></td>
            <td><?= calculate_total_value($data['price'],$data["stock"]) ?></td>
            <td><?= calculate_tax($data['price'],$data['stock'],$tax) ?></td>
        </tr>
    <?php endforeach; ?>
    </table>

    
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>