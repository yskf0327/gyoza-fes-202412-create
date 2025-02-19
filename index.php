<?php
$dir_array = [];
$dir =  dirname(__FILE__);
$dh = opendir($dir);
while ($resource = readdir($dh)) {
  if (is_dir($resource)) {
    if (preg_match('/^\d{2}/', $resource)) {
      array_push($dir_array, $resource);
    }
  }
}
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

    .qr-code {
      aspect-ratio: 1/1;
      width: 400px;
      margin-inline: auto;

      img {
        display: block;
        width: 100%;
        height: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="mb-5 text-center">[課題] ふくおか餃子FES Webページ制作</h1>
    <ul class="nav grid-container mb-5 ">
      <?php
      foreach ($dir_array as $dir):
      ?>
        <li class="nav-item border">
          <a class="nav-link text-center" href="./<?php echo $dir ?>/"><?php echo mb_substr($dir, 0, 2); ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
    <div id="qr-container" class="qr-code">
      <p class="text-center">このページのQRコード</p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <script>
    const qrContainer = document.getElementById('qr-container');
    const url = location.href;
    const qrCodeElm = document.createElement('img');
    qrCodeElm.src = 'https://api.qrserver.com/v1/create-qr-code/?data=' + url + '&size=400x400';
    qrContainer.append(qrCodeElm);
  </script>
</body>

</html>