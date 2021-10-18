<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IMT Counter</title>
</head>
<body>
    <div class="card">
        <h1 class="judul">IMT Counter</h1>
        <div class="form">
            <form action="" method="post">
                <label for="bb" class="label">Berat Badan :</label><br>
                <input type="number" name="bb" id="bb" placeholder="Contoh : 50 kg" required autofocus class="input bb"><br>
                <label for="bb" class="label">Tinggi Badan :</label><br>
                <input type="number" name="tb" id="tb" placeholder="Contoh : 160 cm" required class="input tb"><br>
                <button type="submit" name="cek" class="btn">Count</button>
            </form>
        </div>
        <div class="hasil">
            <?php 
                if (isset($_POST['cek'])) {
                    require_once 'controller.php';

                    $info = new Imt($_POST['bb'], $_POST['tb']);

                    echo "<h1 align='center'>" . $info->getIMT() . " | " . $info->getKategori() . "</h1>";
                }
            ?>
        </div>
    </div>
</body>
</html>



