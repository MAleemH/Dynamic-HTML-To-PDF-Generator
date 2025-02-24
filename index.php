<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PDF Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
    }

    th {
      background-color: #f0f0f0;
    }

    button {
      padding: 5px 10px;
    }

    h1 {
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  $templates = [
    [
      'id' => 'template_1',
      'name' => 'Invoice Template',
      'description' => 'Download a custom invoice with item details.',
    ],
    [
      'id' => 'template_2',
      'name' => 'Monthly Report',
      'description' => 'Download a monthly report with sales data.',
    ],
    [
      'id' => 'template_3',
      'name' => 'Certificate',
      'description' => 'Download a certificate of achievement.',
    ],
  ];
  ?>

  <h1>Available PDF Templates</h1>

  <table>
    <thead>
      <tr>
        <th>Template Name</th>
        <th>Description</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($templates as $template): ?>
        <tr>
          <td><?php echo $template['name']; ?></td>
          <td><?php echo $template['description']; ?></td>
          <td>
            <a class="btn btn-primary" href="pdf_generator.php?template=<?php echo $template['id']; ?>" target="_blank">Download</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>