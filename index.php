<?php require_once __DIR__ . '/vendor/autoload.php'; ?>
<?php use \WF\Hypernova\Renderer; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hypernova Demo</title>
  </head>
  <body>
    <?php
	  $renderer = new Renderer('http://localhost:3030/batch');

	  $renderer->addJob('Hello.js', ['name' => 'Hello.js', 'data' => ['name' => 'Fredrik']]);

    $response = $renderer->render();

    echo $response->results['Hello.js']->html;
    ?>
    <script src="frontend/build/bundle.js"></script>
  </body>
</html>
