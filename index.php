<?php
$dir_array = [];
$dir =  dirname(__FILE__);
$dh = opendir($dir);
while ($resource = readdir($dh)) {
  if (is_dir($resource)) {
    if (preg_match('/^\d{2}/', $resource)) {
      // echo $resource;
      // echo '<br>';
      array_push($dir_array, $resource);
    }
  }
}
// var_dump($dir_array);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2024年12月開講 ここから始める！グラフィック・SNS動画広告クリエイト科</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 20px;
      max-width: 600px;
      margin-inline: auto;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="mb-5">[課題] ふくおか餃子FES Webページ制作</h1>
    <ul class="nav grid-container">
      <?php
      foreach ($dir_array as $dir):
      ?>
        <li class="nav-item border">
          <a class="nav-link text-center" href="./<?php echo $dir ?>/"><?php echo mb_substr($dir, 0, 2); ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>