<!DOCTYPE html>

<head>
  <link type="text/css" rel="stylesheet" media="all" href="../workspace/dist/styles/h5p.css" />
  <meta charset="utf-8" />
  <script type="text/javascript" src="../workspace/dist/main.bundle.js"></script>
</head>

<body style="background-color:#27344e;" align="center">
  <?php
    if (isset($_GET["class"])) {
      $class = strtolower($_GET["class"]);
      include("get_data.php");
      create_config($class);
    }
  ?>

  <div id="h5p-container"></div>

  <script type="text/javascript">
    const { H5P } = H5PStandalone;
    new H5P(document.getElementById('h5p-container'), {
      h5pJsonPath: 'flashcards',
      frameJs: '../workspace/dist/frame.bundle.js',
      frameCss: '../workspace/dist/styles/h5p.css'
    });
  </script>
  <a href="../index.php"><button class="button">Back</button></a>
</body>

</html>