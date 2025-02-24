<!-- template1.php -->
<html>
  <head>
    <title>Invoice for <?php echo $customerName; ?></title>
    <style>
      body { font-family: Arial, sans-serif; padding: 20px; }
      h1 { color: blue; }
      table { width: 100%; border-collapse: collapse; }
      th, td { padding: 8px; border: 1px solid #ccc; }
    </style>
  </head>
  <body>
    <h1>Invoice for <?php echo $customerName; ?></h1>
    <p>Date: <?php echo $invoiceDate; ?></p>
    <table>
      <thead>
        <tr>
          <th>Item</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($items as $item): ?>
          <tr>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['price']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <p><strong>Total: <?php echo $totalAmount; ?></strong></p>
  </body>
</html>
