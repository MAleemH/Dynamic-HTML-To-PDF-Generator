<!-- template3.php -->
<html>
  <head>
    <title>Certificate of Achievement</title>
    <style>
      body { font-family: 'Times New Roman', serif; text-align: center; padding: 40px; }
      h1 { font-size: 28px; margin-bottom: 20px; }
      h2 { font-size: 24px; margin: 10px 0; }
      p { font-size: 18px; }
    </style>
  </head>
  <body>
    <h1>Certificate of Achievement</h1>
    <p>This certifies that</p>
    <h2><?php echo $participantName; ?></h2>
    <p>has successfully completed the course:</p>
    <p><strong><?php echo $courseName; ?></strong></p>
    <p>Date: <?php echo $completionDate; ?></p>
  </body>
</html>
