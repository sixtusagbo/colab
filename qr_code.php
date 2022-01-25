<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collab.land</title>
    <link rel="icon" href="assets/images/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Local CSS -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>

    <div class="main-section-2">
      <div class="d-flex justify-content-start mb-1">
        <img
          src="assets/images/favicon.ico"
          alt=""
          height="20px"
          width="20px"
        />
        <h1 class="h5 mx-1 text-bolder text-sm-left">Colab.land</h1>
      </div>
      <div class="box p-5 d-flex flex-column justify-content-center">
        <h4 class="h4 text-center text-dark">QR CODE</h4>
        <p class="lead text-secondary text-center mb-0">Scan QR code with a<br> <?php echo $_GET['v'] ?>-compatible wallet </p>
        <?php
          include "phpqrcode/qrlib.php";

          $PNG_TEMP_DIR = 'temp/';
          if (!file_exists($PNG_TEMP_DIR)) {
            mkdir($PNG_TEMP_DIR);
          }
          // $filename = $PNG_TEMP_DIR . 'qrximg.png';
          if (!empty($_GET['v'])) {
            $codeString = $_GET['cS'];
            $qrText = QRcode::text($codeString);
            $filename = $PNG_TEMP_DIR . 'qrximg' . md5($codeString) . '.png';

            QRcode::png($codeString, $filename, QR_ECLEVEL_H, 4, 4);

            echo '<img class="mt-0" height="300" src="'. $PNG_TEMP_DIR . basename($filename) .'" alt="QR CODE">';
            
            echo '<p class="d-none" id="qrx">'. $qrText[0] .'</p>';
          } else {
            header("location: index.html");
          }
        ?>
        <button class="btn btn-secondary mx-5" onclick="Colab.copyTextToClipboard(document.getElementById('qrx').innerText);this.innerHTML = 'Copied';">Copy</button>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <!-- JQuery -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/script.js"></script> <!-- Custom JS -->
  </body>
</html>
