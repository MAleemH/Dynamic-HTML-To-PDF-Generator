<!-- template2.php -->
<html>
  <head>
    <title>Monthly Report - <?php echo $reportMonth; ?></title>
    <style>
      body { font-family: Georgia, serif; padding: 20px; }
      h1 { color: green; }
      p { font-size: 16px; }
    </style>
  </head>
  <body>
    <h1>Monthly Report: <?php echo $reportMonth; ?></h1>
    <p>Total Sales: <?php echo $totalSales; ?></p>
    <p>Number of Orders: <?php echo $orderCount; ?></p>
    <p>Comments: <?php echo $comments; ?></p>
  </body>
</html>
